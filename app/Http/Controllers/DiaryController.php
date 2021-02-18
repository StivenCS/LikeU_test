<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('VerifyAuth', ['except' => ['login']]);
    }

    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'matter'    => 'required|regex:/^[a-zA-Z\s]*$/',
                'date'      => 'required|date',
                'status'    => 'required|in:Programada,Realizada,Cancelada,No Asistida'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->messages(), 400);
            }

            $data = [
                'matter'    => $request->matter,
                'date'      => $request->date,
                'status'    => $request->status
            ];

            Diary::create($data);
            return response()->json(['message' => 'Agenda creada con exito'], 201);
        } catch (Exception $e) {
            return response()->json([$e->getMessage()], 400);
        }
    }
}
