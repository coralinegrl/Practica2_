<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function getProfile()
    {
        $profile = Profile::first();
        $formattedProfile = [
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
        return response()->json($formattedProfile);
    }

}
