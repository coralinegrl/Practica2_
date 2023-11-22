<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function getProfile()
    {
        $profile = Profile::first();
        if ($profile === null) {
            return response()->json([
                'error' => 'No se ha encontrado el perfil',
            ], 404);
    }
        $formattedProfile = [
            'name' => $profile->name,
            'lastname' => $profile->lastname,
            'email' => $profile->email,
            'city' => $profile->city,
            'country' => $profile->country,
            'summary' => $profile->summary,
            'frameworks' => $profile->frameworks ? $profile->frameworks->map(function ($framework) {
                return [
                    'name' => $framework->name,
                    'level' => $framework->level,
                    'year' => $framework->year,
                ];
            }) : [],
            'hobbies' => $profile->hobbies ? $profile->hobbies->map(function ($hobby) {
                return [
                    'name' => $hobby->name,
                    'description' => $hobby->description,
                ];
            }) : [],
        ];

        return response()->json($formattedProfile);
    }

}
