<?php 
    class App{
        protected $controller;
        protected $action;
        protected $params;
        function __construct()
        {
            echo $_GET['url'];
        }
    }
?>