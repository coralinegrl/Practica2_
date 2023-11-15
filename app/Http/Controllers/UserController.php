<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name)
    {
        // Encuentra el usuario por ID o falla con un error 404
        $user = User::findOrFail($name);

        // Retorna la información del usuario como JSON
        return response()->json($user);
    }
}
