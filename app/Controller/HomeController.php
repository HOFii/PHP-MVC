<?php

namespace hofi\Belajar\PHP\MVC\Controller;

use hofi\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC!"
        ];

        View::render('Home/index', $model);
    }
    
    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author : Gusti Alifiraqsha Akbar";
    }

    function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "massage" => "Login Sukses"
        ];
        //Kirim response ke view
    }
}

