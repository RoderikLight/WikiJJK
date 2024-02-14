<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    $data = $request->validate([
        'reason' => 'required'
    ]);

    $reason=Reason::create([
        'reason' => $data['reason']
    ]);
    if($reason){
        return response()->json([
            'message' => 'Se ha creado un registro',
            'data' => $reason
        ]);
    }else{
        return response()->json([
            'message' => 'Error al crear el registro',
        ]);
    }
}
