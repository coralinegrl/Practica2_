<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        // Encuentra el usuario por ID o falla con un error 404
        $user = User::findOrFail($id);
        
        // Retorna la información del usuario como JSON
        return response()->json($user);
    }
}
