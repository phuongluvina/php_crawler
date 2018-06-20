<?php
namespace Fuel\Tasks;

use PHPCrawler;
use PHPCrawlerDocumentInfo;

// Inculde PHPCrawler Library and simple_html_dom library
include("./fuel/app/libs/crawler/PHPCrawler.class.php");
include("./fuel/app/libs/simple_html_dom/simple_html_dom.php");


// Extend the class and override the handleDocumentInfo()-method 
class MyCrawler extends PHPCrawler
{
    function handleDocumentInfo(PHPCrawlerDocumentInfo $DocInfo)
    {       
        // Get url data
        $url = $DocInfo->url;
        
        // Get file html
        $html = file_get_html($DocInfo->url);
        
        // Assign title variable
        $title = "";
       
        // Get title data
        if(is_object($html)){
            
            // Look for title
            $t = $html->find("title", 0);
            
            if($t){
                
                // If found title is not null, update title
                $title = $t->innertext;
            }
                   
            $html->clear();
            unset($html);        
        }
        
        // Get time data
        $created_at = date('Y-m-d H:i:s');
        
        // Insert into database
        $model = new \Model_Crawlerdata();
        $model->title = $title;
        $model->url = $url;
        $model->created_at = $created_at;
        $model->save(); 
                
        flush();
    }
}


// Create getcrawler task
class Getcrawler
{
    public function run()
    {                
        $crawler = new MyCrawler();
        
        // Set URL to retreive data
        $crawler->setURL("http://php.net/");
        
        // Only receive content of files with content-type "text/html" 
        $crawler->addContentTypeReceiveRule("#text/html#");
        
        // Set filter rule to ignore links to other data types
        $crawler->addURLFilterRule("#(jpg|gif|png|pdf|jpeg|svg|css|js)$# i");
        
        // Store and send cookie-data like a browser does
        $crawler->enableCookieHandling(true);
        
        // Set the traffic-limit to 1 MB (in bytes,
        // for testing we dont want to "suck" the whole site) 
        $crawler->setTrafficLimit(1000 * 1024);
        
        // Run the task
        $crawler->go();
        
        // Get and print a short report
        $report = $crawler->getProcessReport();
        
        if (PHP_SAPI == "cli") $lb = "\n";
        else $lb = "<br />";
        
        echo "Summary:".$lb;
        echo "Links followed: ".$report->links_followed.$lb;
        echo "Documents received: ".$report->files_received.$lb;
        echo "Bytes received: ".$report->bytes_received." bytes".$lb;
        echo "Process runtime: ".$report->process_runtime." sec".$lb;
        
    } 
}
?>