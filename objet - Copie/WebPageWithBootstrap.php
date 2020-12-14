<?php 
include ('WebPage.php');
class WebPageWithBootstrap extends WebPage {
 //on surcharge la methode buildPage
   public function buildPage(){
        return <<<HTML
            <!doctype html>
            <html lang="$this->langue">
                <head>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <title>$this->title</title>
                    {$this->head}
                </head>
                <body>
                    {$this->body}
                </body>
            </html>
HTML;
    }
   
   

}