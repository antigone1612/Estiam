<?php 
class WebPage {
    protected $head = "";
    protected  $title;
    protected  $body = "";
    protected $langue = 'fr';
    
    //constructeur
    function __construct($title) {
        $this->title = $title;
    }
    public function addKeyWord($meta){
        $this->appendToHead("<meta name='keywords' content='$meta'/>");
    }
    public function addDescription($description){
        $this->appendToHead("<meta name='Description' content='$description'/>");
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
    }
    
    public function addAuthor($auteur){
        $this->appendToHead("<meta name='author' content='$auteur' />");
    }

    public function appendCss($css){
        $this->appendToHead("<style>$css</style>");
    }
    public function appendJs($js){
        $this->appendContent("<script>$js</script>");
    }
    public function appendToHead($str){
        $this->head .= $str;
    }
    public function appendJsUrl($js){
        $this->appendContent("<script type='text/javascript' src=".$js."></script>");
    }
    public function appendCssUrl($css){
        $this->appendToHead("<link rel='stylesheet' media='screen' href=".$css.">");
    }
    public function appendContent($content){
        $this->body .= $content;
    }

    public function buildPage(){
        return <<<HTML
            <!doctype html>
            <html lang="$this->langue">
                <head>
                    <meta charset="utf-8">
                    <title>$this->title</title>
                    {$this->head}
                </head>
                <body>
                    {$this->body}
                </body>
            </html>
HTML;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

 
}

?>