<?php

class MainPage {

    public $body;

    public function render() {
        echo $this->body;
    }

}

$main_page = new MainPage();
$main_page->body = 'Hello there';
$main_page->render();

?>
