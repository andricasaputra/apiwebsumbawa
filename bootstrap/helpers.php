<?php  

if (! function_exists('get_http_method')) {
	function get_http_method()
	{
		$httpMethod = request()->method();

        if ($httpMethod != 'GET') {

        	if ($httpMethod != 'DELETE') {
        		$httpMethod = request()->method() == 'PUT' ? 'update' : 'add';
        	} else {
        		$httpMethod = "delete";
        	}
        }

        return $httpMethod;
	}
}