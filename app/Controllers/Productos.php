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
    public function subir(){

        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');

        return view('productos/subir', $datos);
    }
    public function guardar(){

        $producto = new Producto();

        $datos=[
            'descripcion'=>$this->request->getVar('descripcion'),
            'traduccion'=>$this->request->getVar('traduccion')
        ];

        $producto->insert($datos);
        return $this->response->redirect(site_url('/listar'));
    }
    public function borrar($id=null){
        $producto = new Producto();
        $datosProducto = $producto->where('id',$id)->first();

        $producto->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/listar'));
    }

}