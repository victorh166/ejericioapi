<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function api1(){


        $variable= array(
    
            "id"=>"05",
            "nombres"=>"Victor Hugo",
            "apellidos"=>"Montero Lopez",
            "cedula"=>"3050509383"
    
    
        );
    
    
    return $this->response->setJson($variable);
    }
    
    public function api2(){
    
    
        $variable= array(
    
            "id"=>"220",
            "nombres"=>"Victor",
            "apellidos"=>"Montero",
            "cedula"=>"3050509383"
    
    
        );
    
    
    return $this->response->setJson($variable);
    }

    public function api3(){
    
    
        $variable= array(
    
            "id"=>"685",
            "nombres"=>"Juan",
            "apellidos"=>"Avila",
            "cedula"=>"1354287965"
    
    
        );
    
    
    return $this->response->setJson($variable);
    }

    public function api4(){
    
    
        $variable= array(
    
            "id"=>"750",
            "nombres"=>"Pedro",
            "apellidos"=>"Zambrano",
            "cedula"=>"784125896"
    
    
        );
    
    
    return $this->response->setJson($variable);
    }
    
}
