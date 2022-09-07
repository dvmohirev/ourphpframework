<?php
namespace App\MVC\Controllers;
use Framework\Controller;

class HelloController extends Controller
{
    public function index(){
        return '<h1>Hello World!</h1>';
    }
    public function data(){
        return '<h1>This is data.</h1>';
    }
}