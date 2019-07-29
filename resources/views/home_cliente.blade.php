@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row" style="background:#FE9B00;height: 10vh;color: #FFFFFF;font-size: 18px;">
            <div class="col-10 alinhamentoCentro">
                Bem vindo: <b>{{ Auth::user()->abrevNome() }}</b>   
            </div>
            <div class="col-2 alinhamentoCentro">
                <div class="circle">
                    <img src="{{ asset('img/perfil.jpg') }}">
                </div>
            </div>
        </div>
        <div class="row linhaHomeClient" style="background:#FFD30D;">
            <div class="col-2 alinhamentoCentro" style="text-align:right;padding-right: 0px;">
                <span style="font-size: 25px; font-weight: bold;" class="fas fa-plus"></span>
            </div>
            <div class="col-7 alinhamentoCentro">
                Saldo: 
            </div>
            <div class="col-3 alinhamentoCentro" style="text-align: center; font-weight: normal;">
                {{ $clientLogado->value_cash }}<span style="font-size:12px">bC</span>
            </div>
        </div>
        <div class="row linhaHomeClient" style="background:#E8AA0C;">
            <div class="col-2 alinhamentoCentro"></div>
            <div class="col-7 alinhamentoCentro">
                Extrato
            </div>
            <div class="col-3 alinhamentoCentro" style="text-align:center; font-weight: normal; font-size: 20px;">
                <i class="fas fa-eye"></i>
            </div>
        </div>
        <div class="row linhaHomeClient" style="background:#FE9B00;">
            <div class="col-2 alinhamentoCentro"></div>
            <div class="col-7 alinhamentoCentro">
                Dicas
            </div>
            <div class="col-3 alinhamentoCentro" style="text-align:center; font-weight: normal; font-size: 20px;">
                <i class="fas fa-lightbulb"></i>
            </div>
        </div>
        <div class="row linhaHomeClient"  style="background:#E8770C;">
            <div class="col-2 alinhamentoCentro"></div>
            <div class="col-7 alinhamentoCentro">
                Dúvidas
            </div>
            <div class="col-3 alinhamentoCentro" style="text-align:center; font-weight: normal; font-size: 20px;">
                <i class="fas fa-question"></i>
            </div>
        </div>
        <div class="row linhaHomeClient"  style="background:#FF5F0D">
            <div class="col-2 alinhamentoCentro"></div>
            <div class="col-7 alinhamentoCentro">
                Ajustes <a class="btn btn-primary"  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Logout</a>
            </div>
            <div class="col-3 alinhamentoCentro" style="text-align:center; font-weight: normal; font-size: 20px;">
                <i class="fas fa-cog"></i>
            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
@endsection
