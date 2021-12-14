<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TecnicosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//funciones CALLBACK
Route::get('/', function () {
    //$nombre = "Juan Ignacio";
    $arrayNombres =["Juan Ignacio","Lucas","Pablo"];
    //return view('clientes.clientes')->with("nombre",$nombre); //view es de laravel, lo que se indica como parametro son las views que estan en resources/views/XXX.blade.php || con ->with("XX",yy) le pasamos como se va a llamar el parametro y el valor del parametro
    return view('clientes.clientes')->with("nombres",$arrayNombres);  // para acceder a un blade de una subcarpeta  ponemos "xx.xx"
    //return view('welcome'); //view es de laravel
    //return '<h1>Hola mundo</h1>';    
});
/*
Route::get('/tecnicos',[TecnicosController::class,'index']); //llamado a un determinado controlador ["Controllador:class,'metodo']
Route::get('/tecnicos/create',[TecnicosController::class,'create']);
Route::post('/tecnicos',[TecnicosController::class,'store']);
//Route::put("/tecnicos",[TecnicosController::class,'store']*/


/*
Route::get('/clientes',[TecnicosController::class,'index']); //llamado a un determinado controlador ["Controllador:class,'metodo']
Route::get('/clientes/create',[TecnicosController::class,'create']);
Route::post('/clientes',[TecnicosController::class,'store']);
Route::get('/clientes/{id}',[ClientesController::class,'show']); //la variable {id} debe conincidir con el parametro del metodo show($id)
Route::delete('/clientes',[ClientesController::class,'destroy']);*/



//Route::resource('/clientes',ClientesController::class); //realiza las rutas automaticamente
//Route::resource('/clientes',ClientesController::class)->except(['index','destroy','show']); //no permite la cracion de los metodos mencionados
Route::resource('/clientes',ClientesController::class)->only(['index','destroy','show']); //solo permite crear esas rutas