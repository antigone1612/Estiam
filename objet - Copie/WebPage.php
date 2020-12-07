<?php 
class WebPage {
    private  $header = "";
    private  $title;
    private  $body = "";
  
    //constructeur
    function __construct($title) {
        $this->title = $title;
    }

    public function appendCss($css){
        $this->appendToHead("<style>$css</style>");
    }
    public function appendJs($js){
        $this->appendToHead("<script>$js</script>");
    }
    public function appendToHead($str){
        $this->header .= $str;
    }
    public function appendJsUrl($js){
        $this->appendToHead("<script type='text/javascript' src=".$js."></script>");
    }
    public function appendCssUrl($css){
        $this->appendToHead("<link rel='stylesheet' media='screen' href=".$css.">");
    }
    public function appendContent($content){
        $this->body .= $content;
    }

    public function buildPage(){
       return
        '<!doctype html>
        <html lang="fr">
            <head>
                <meta charset="utf-8">
                <title>'.$this->title.'</title>'.$this->header.'
            </head>
            <body>'.$this->body.'</body></html>';
    }
}

?>