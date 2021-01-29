<?php
class Page {
    public $meta_title;
    public $meta_keywords;
    public $html_body;
    public $favicon;
    public $css;

    public function displayPage() {
        $page ='
        <html>
        <head>
            <meta charset="utf-8" />
            <title>'.$this->meta_title.'</title>
            <meta name="keywords" content="'.$this->meta_keywords.'" />
        </head>
        <body>
            '.$this->html_body.'
        </body>
        </html>
';
        echo $page;
    }
}
?>