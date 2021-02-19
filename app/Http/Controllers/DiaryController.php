<?php

namespace App\Http\Controllers;

use Validator;
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
                'status'    => 'required|in:Programada,Realizada,Cancelada,No Asistida',
                'client_id' => 'required|exists:clients,id'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->messages(), 400);
            }

            Diary::create($request->all());
            return response()->json(['message' => 'Agenda creada con exito'], 201);
        } catch (Exception $e) {
            return response()->json([$e->getMessage()], 400);
        }
    }

    public function update($client_id, Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'matter'    => 'required|regex:/^[a-zA-Z\s]*$/',
                'date'      => 'required|date',
                'status'    => 'required|in:Programada,Realizada,Cancelada,No Asistida',
                'client_id' => 'required|exists:clients,id'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->messages(), 400);
            }

            if ($request->status == 'Programada') {
                $data = $request->all();
                Diary::find($client_id)->update($data);
                return response()->json(['message' => 'Agenda actualizada'], 201);
            } else {
                return response()->json(['message' => 'No se pudo actualizar la agenda'], 400);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
