<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leader;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function checkGroup(Request $request)
    {
        
        $groupName = $request->input('group');
        $exists = User::where('group', $groupName)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function checkLineId(Request $request)
    {
        $lineId = $request->input('line_id');
        $exists = Leader::where('line_id', $lineId)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $exists = Leader::where('email', $email)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function checkWhatsappNumber(Request $request)
    {
        $whatsappNumber = $request->input('whatsapp_number');
        $exists = Leader::where('whatsapp_number', $whatsappNumber)->exists();
        return response()->json(['exists' => $exists]);
    }
}
