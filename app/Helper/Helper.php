<?php
namespace App\Helper; //namespace turi apsirasyti virtulau path
class Helper
{
    public function instanceMaker($controller)
    {
    }
    public function getController($path)
    {
        $controller = strtolower($path);
        $controller = ucfirst($controller);
        $controller = '\App\Controller\\'.$controller . 'Controller';
        return $controller;
    }
    public function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
    public function generateToken($length = 16)
    {
        $symbols = 'qwertyuiopasdfghjklzxcvbnm1234567890';
        $token = '';
        for($i = 0; $i < $length; $i++){
            $token .=  $symbols[mt_rand(0, strlen($symbols) -1)];
        }
        return $token;
    }
}