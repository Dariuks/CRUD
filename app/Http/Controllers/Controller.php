<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class TareasController extends Controller
{
    public function index(){
        $tareas = Tarea::get();
        return view('tareas.indexTareas', compact('tareas'));
    }
    public function create(){
        return view('tareas.formTarea');
    }
    public function store(){
        return view('tareas.formTarea');
    }
}
