<?php  

if (! function_exists('get_http_method')) {
	function get_http_method()
	{
		$httpMethod = request()->method();

        if ($httpMethod != 'GET') {
            $httpMethod = request()->method() == 'PUT' ? 'update' : 'add';
        }

        return $httpMethod;
	}
}