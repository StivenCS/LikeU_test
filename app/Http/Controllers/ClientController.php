<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Validator;
use Exception;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('VerifyAuth', ['except' => ['login']]);
    }

    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name'              => 'required|regex:/^[a-zA-Z\s]*$/',
                'identification'    => 'required|numeric|unique:clients',
                'dateOfBirth'       => 'required|date'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->messages(), 400);
            }

            $data = [
                'name' => $request->name,
                'identification'    => $request->identification,
                'dateOfBirth'       => $request->dateOfBirth
            ];

            Client::create($data);

            return response()->json(['message' => 'Cliente creado con exito'], 201);

        } catch (Exception $e) {

            return response()->json([$e->getMessage()], 400);

        }
    }
}
