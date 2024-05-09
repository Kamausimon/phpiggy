<?php

declare(strict_types=1);

use Framework\Http;


function dd(mixed $value)  //this is a dump and die functio. it takes any value as an argument and dumps in 
//producing an output then dies or stops executing
{
     echo "<pre>";
     var_dump($value);
     echo "</pre>";
     die();
}

function e(mixed $value): string
{
     return htmlspecialchars((string) $value); // this prevents XSS attacks on our web app by using the special chars it casts the
     //vaue to a string before escaping it and returning the escaped string
}

function redirectTo(string $path)
{  //this function redirects the client to a different page by taking in the path as a value and using the browser headers to redirect then later stops the execution by using exit
     header("Location:{$path}");
     http_response_code(Http::REDIRECT_STATUS_CODE);
     exit;
}
