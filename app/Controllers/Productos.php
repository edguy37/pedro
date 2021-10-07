<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\producto;
class Productos extends Controller{

    public function index(){

        return view('productos/listar');
    }

}