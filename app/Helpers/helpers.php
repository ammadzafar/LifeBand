<?php


if(!function_exists('at_active')){
    function at_active($path, $active = 'active')
    {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}

if (!function_exists('success_response')) {

    function success_response($data, $message)
    {
        return [
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ];
    }
}

if (!function_exists('error_response')) {

    function error_response($message)
    {
        return [
            'status' => 'error',
            'message' => $message,
        ];
    }
}

if (!function_exists('error_details')) {

    function error_details($e, $message)
    {
        if (env('APP_ENV') == 'production') {
            return $message . $e->getMessage();
        } else {
            return $message . 'Error on line ' . $e->getLine() . /*' in ' . $e->getFile() .*/ ' ' . $e->getMessage();
        }

    }
}

if(!function_exists('show_navbar')){
    function show_navbar($path)
    {
        return call_user_func_array('Request::is', (array)$path)  ;
    }
}
