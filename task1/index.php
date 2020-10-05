<?php

$path = $_SERVER['REQUEST_URI'];

switch ($path) {
	case '/':
		$response = '<a href="/welcome">welcome</a><br><a href="/not-found">not-found</a>';
		break;
	case '/welcome':
		$response = '<a href="/">main</a>';
    	break;
	default:
		$response = 'Page not found. <a href="/">main</a>';
		http_response_code(404);
		break;
}

echo $response;
echo  '<h1>i am from PHP!</h1>'
?>

<h1>hello, php!</h1> 


