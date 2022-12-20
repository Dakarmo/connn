<?php
namespace controllers;
class settings
{
    private $NavModel;
    use \controllers\utils;
    public function __construct()
    {
        $this->NavModel=New \models\nav_links();
    }
    public function index()
    {
        $template='views/page/settings.phtml';
        include_once 'views/main.phtml';
    }
}