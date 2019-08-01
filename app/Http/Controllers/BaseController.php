<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://dummy.restapiexample.com/api/v1/employees');
        dd($response->getBody()->getContents());
        // $response = $response->getBody()->getContents();

        // return view('welcome',compact('response'));
    }

    public function store()
    {
        $client = new \GuzzleHttp\Client();
        $array = [
                    "name"=>$str=rand(),
                    "salary"=>"123",
                    "age"=>"23"];

        $response = $client->request('POST', 'http://dummy.restapiexample.com/api/v1/create',  [
                'body' => json_encode($array),
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);
        $response = $response->getBody()->getContents();
        dd($response);
        // echo '<pre>';
        // print_r($response);
    }
}
