<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\producto;
class Productos extends Controller{

    public function index(){

        $producto = new Producto();
        $datos['productos'] = $producto->orderBy('id', 'ASC')->findAll();

        return view('productos/listar', $datos);
    }

}