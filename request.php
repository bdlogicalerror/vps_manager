<?php
    class Request
    {
        public $url;
        public $method;
        public $query_string;


        public function __construct()
        {

            $this->url = preg_replace('/\?.*/', '', $_SERVER["REQUEST_URI"]);
            $this->method=$_SERVER['REQUEST_METHOD'];
            $this->query_string=$_GET;
        }
    }

?>