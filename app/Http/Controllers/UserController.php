<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "<h1> Listagem do usuário com o codigo 1</h1>";
    }

    public function getData(){
        return "<h1> Ação de GET disparada</h1>";
    }
    public function postData(){
        return "<h1> Ação de POST disparada</h1>";
    }

    public function testePut(Request $request){
        echo "<h1>Usuario da edição é o de codigo 1</h1>";
        //var_dump($request);
        return "<h1>Disparou ação de PUT</h1>";
    }
    public function testePatch(Request $request){
        echo "<h1>Usuario da edição é o de codigo 1</h1>";
        //var_dump($request);
        return "<h1>Disparou ação de PATCH</h1>";
    }

    public function testeMatch(Request $request){
        echo "<h1>Disparou ação de PATCH e PUT</h1>";
        echo "<h1>Usuario da edição é o de codigo 1</h1>";
        //var_dump($request);
        
    }
}

