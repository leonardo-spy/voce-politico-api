<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class PoliticosController extends Controller
{
    /** 
     * Visualiza todas as Questoes cadastradas.
     *
     * @return JSON [{data}]
     */
    public function index()
    {
        // TODO: Colocar Cache
        // retornando todas Questoes pelo index geral

        $param =  ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'];
        $code = 200;

        $client = new Client();
        $response = $client->get('https://dadosabertos.camara.leg.br/api/v2/deputados');
        $json = json_decode($response->getBody());

        return response()->json($json->dados,$code, $param,JSON_UNESCAPED_UNICODE);

    }


    /**
     * Armazena a cidade sendo enviada através da API.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JSON [{cidade}]
     */
    public function store(Request $request)
    {   
        return response()->json(['status' => 500,'error' => 'Função para testes!'], 500);
    }

    /**
     * Visualiza uma cidade especifica
     *
     * @param  int  $id
     * @return JSON [{cidade,code}]
     */
    public function show($id)
    {
        $param =  ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'];
        $code = 200;

        $client = new Client();

        $response = $client->get('https://dadosabertos.camara.leg.br/api/v2/deputados/'.$id);
        $json_full = json_decode($response->getBody());

        $response_frente = $client->get("https://dadosabertos.camara.leg.br/api/v2/deputados/$id/frentes");
        $json_frente = json_decode($response_frente->getBody());

        $json = $json_full->dados;
        $json->frentes = $json_frente->dados;

        return response()->json($json,$code, $param,JSON_UNESCAPED_UNICODE);
    }

    /**
     * Atualiza uma cidade específica.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JSON [{cidade,code}]
     */
    public function update(Request $request, $id)
    {
        return response()->json(['status' => 500,'error' => 'Função para testes!'], 500);
    }

    /**
     * Remove uma cidade específica.
     *
     * @param  int  $id
     * @return JSON [{status,cidade}]
     */
    public function destroy($id)
    {
        return response()->json(['status' => 500,'error' => 'Função para testes!'], 500);
    }
}