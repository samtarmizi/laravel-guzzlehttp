<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://dummy.restapiexample.com/api/v1/employees');
        $response = $response->getBody()->getContents();

        return view('welcome',compact('response'));
    }
}
