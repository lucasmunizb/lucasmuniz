<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UfController extends Controller
{
    public function show(string $uf)
    {
        $brasilApi = env('BRASIL_API');
        $request = new Client();
        try {
            $response = $request->get("{$brasilApi}{$uf}");
            $return = array_map(function ($arrayResponse){
                return ['name'=>$arrayResponse['nome'],'ibge_code'=>$arrayResponse['codigo_ibge']];
            },json_decode($response->getBody(),true));
            return response()->json($return);
        } catch (GuzzleException $e) {
            return response()->json([
               'erro' => $e->getMessage()
            ], Response::HTTP_NO_CONTENT);
        }
    }
}
