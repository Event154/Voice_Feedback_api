<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoiceController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('audio');

        DB::table('voice_records')->insert([
            'mime_type' => $file->getMimeType(),
            'audio_data' => file_get_contents($file->getRealPath()),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Record Saved Successfully 👌']);
    }
}
