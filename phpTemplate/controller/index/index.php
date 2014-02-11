<?php
include_once "core/absController.class.php";
class Index extends absController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function test($a){
        $this->load->view("index/index","IndexView",array($a));
    }
    public function display($a){
        $this->load->view("index/index","IndexView",array($a));
    }
}

?>