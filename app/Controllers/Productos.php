<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\producto;
class Productos extends Controller{

    public function index(){

        $producto = new Producto();
        $datos['productos'] = $producto->orderBy('id', 'ASC')->findAll();

        $datos['header'] = view('template/header'); //$datos['cualquierNombre'] no es obligatorio que se llamen igual
        $datos['footer'] = view('template/footer');

        return view('productos/listar', $datos);
    }

}