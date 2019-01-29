<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $this->check_session();

	    $controller = $this->loadController();

		    /*print_r($this->request);
			die();*/

	    call_user_func_array([$controller, $this->request->action], [$this->request->params,$this->request->query_string]);



    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $name . '.php';
        require($file);
        $controller = new $name();
        return $controller;
    }

    private  function check_session(){
    	$controller= $this->request->controller;
	    if(isset($_SESSION['login'])){
	    	return true;
		}else if($controller!=="login"){
			header('location:/login');
		}else{
		    return true;
	    }
	}

}
?>