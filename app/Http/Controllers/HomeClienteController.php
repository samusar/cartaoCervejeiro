<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $clientDao;

    public function __construct()
    {
        $this->clientDao = new Client();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $clientLogado = $this->clientDao->find(Auth::user()->id);
        return view('home_cliente',compact('clientLogado'));
    }
}
