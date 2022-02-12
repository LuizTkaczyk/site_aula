<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    public function destroy(){
        echo "<h1>Disparou ação de Delete</h1>";
    }
    public function any(){
        echo "<h1>Qualquer verbalização é aceita - ANY</h1>";
    }

    public function userComments($id, $comment = null){
        echo "Controller: User metodo: userComments";
        var_dump($id, $comment);
    }

    public function inspect(){
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();
    
        var_dump($route, $name, $action);
    }
}

