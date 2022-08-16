<?php
// check if the user has permission or not
function permission($user){$is_admin = ($user['permissions'] == 'admin') ? true : false;}
// redirect function
function redirect($link)
{
    header($link);
}
// redirect with parameter function
function redirect_with($link, $array)
{
    redirect($link);
}
// login function 
function login()
{
    $inputs = [];
    $errors = [];

    if (!login($inputs['username'], $inputs['password']))
    {
        $errors['login'] = 'Invalid username or password';
        redirect_with('login.php', ['errors' => $errors, 'inputs' => $inputs]);
    }
    // login successfully
    header('', '../index.php');
}
?>