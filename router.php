<?php

class Router
{

    static public function parse($url, $request)
    {
    	/*var_dump($request);
    	die();*/

        $url = trim($url);

        if ($url == "/")
        {
            $request->controller = "Home";
            $request->action = "index";
            $request->params = [];
        }elseif ($url=="/login"){
	        $request->controller = "login";
	        $request->action = "index";
	        $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 1);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }
    }
}
?>