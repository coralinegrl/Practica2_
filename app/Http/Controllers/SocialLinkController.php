<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialLinksController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'url' => 'required|string',
            
        ]);

        $profile = Profile::first();

        $profile->name = $data['name'];
        $profile->url = $data['url'];
        

        $profile->save();

        return response()->json($profile);
    }
}
