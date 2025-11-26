<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoiceController extends Controller
{
    public function store(Request $request)
    {
        // Check if audio exists
        if(!$request->hasFile('audio')) {
            return response()->json(['success' => false, 'message' => 'No audio found'], 400);
        }

        $file = $request->file('audio');

        // Insert in DB
        DB::table('voice_records')->insert([
            'mime_type'  => $file->getMimeType(),
            'audio_data' => file_get_contents($file->getRealPath()),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Record Saved Successfully 🎉'
        ]);
    }
}
