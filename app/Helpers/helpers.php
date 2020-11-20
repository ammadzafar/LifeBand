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
if (!function_exists('check_id')) {

    function check_id($id)
    {
        if (\App\Model\Organization::find($id))
        {
            $account_type = \App\Model\Organization::where('id',$id)->get();
//            dd($account_type);
            return $account_type;
        }elseif(\App\Model\FamilyAccount::find($id)){

            $account_type = \App\Model\FamilyAccount::where('id',$id)->get();
//            dd($account_type);
            return $account_type;
        }
        dd('nothing matched');
    }
}
if (!function_exists('group_users')) {

    function group_users($id)
    {
        return \App\Model\UserAccount::where('account_id',$id)->where('group_id','=',null)->get();
    }

}
if (!function_exists('family_account')) {

    function family_account($id)
    {
        return \App\Model\UserAccount::where('account_id',$id)->where('group_id','=',null)->get();
    }
}
if (!function_exists('group_all_users')) {

    function group_all_users($id,$group_id)
    {
        return \App\Model\UserAccount::where('account_id',$id)->where('group_id',$group_id)->orWhere('group_id','=',null)->get();
    }
}
