<?php
namespace App\Controllers;
use App\Core\Controller;
//ini buat nyoba
class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'Home Page',
            'message' => 'Selamat datang di MVC Framework'
        ];
        
        $this->view('home.index', $data);
    }
}