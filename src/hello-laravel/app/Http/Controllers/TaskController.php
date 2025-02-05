<?php

namespace App\Http\Controllers;

use App\Models\Task; // Importar el modelo Task
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Obtener todas las tareas
        $tasks = Task::all();

        // Pasar las tareas a una vista
        return view('tasks.index', compact('tasks'));
    }
}
