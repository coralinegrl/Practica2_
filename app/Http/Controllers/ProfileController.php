<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the profile page.
     */
    public function show()
    {
        // Puedes pasar cualquier dato necesario a la vista aquí
        $data = [];

        return view('profile.show', $data);
    }

    public function getProfile()
{
    // Obtener la información del perfil desde la base de datos o de donde corresponda
    $profile = Profile::first(); // Asumiendo que tienes un modelo Profile configurado

    // Formatear los datos en el formato requerido
    $data = [
        'Name' => $profile->name,
        'Lastname' => $profile->lastname,
        'Email' => $profile->email,
        'City' => $profile->city,
        'Country' => $profile->country,
        'Summary' => $profile->summary,
        'Frameworks' => $profile->frameworks->map(function ($framework) {
            return [
                'Name' => $framework->name,
                'Level' => $framework->level,
                'Year' => $framework->year,
            ];
        }),
        'Hobbies' => $profile->hobbies->map(function ($hobby) {
            return [
                'Name' => $hobby->name,
                'Description' => $hobby->description,
            ];
        }),
    ];

    // Devolver la respuesta como JSON
    return response()->json($data);
}
}
