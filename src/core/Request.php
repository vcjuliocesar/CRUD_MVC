<?php
namespace App\core;

class Request
{
    private $controller;
    private $method;
    private $arguments;

    public function __construct()
    {
        if (isset($_GET['url'])) {
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            $url = array_filter($url);
            if ($url[0] == 'index.php') {
                $this->controller="index";
            } else {
                $this->controller = strtolower(array_shift($url));
            }

            $this->method = strtolower(array_shift($url));

            if (!$this->method) {
                $this->method='index';
            }
            $this->arguments = $url;
        } else {
            $this->controller="Actor";
            $this->method ='index';
        }
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getArguments()
    {
        return $this->arguments;
    }
}
