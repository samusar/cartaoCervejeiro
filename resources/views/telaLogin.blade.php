@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 divLoginCampos">
                <div class="row tituloLogin1">
                    <div class="col-1"></div>
                    <div class="col-11">CARTÃO</div>
                </div>
                <div class="row tituloLogin2">
                    <div class="col-3"></div>
                    <div class="col-9">CERVEJEIRO</div>
                </div>
                <div class="row tituloLogin3">
                    <div class="col-12">
                        para os amantes de cerveja artesanal
                    </div>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row linhaLogin">
                        <div class="col-1"></div>
                        <div class="col-1 iconsLogin">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-9" style="padding-left: 25px;">
                            <input type="email" placeholder="E-mail" class='form-control form-control-lg' id='fieldLogin'  name="email" value="{{ old('email') }}" autocomplete="off" required autofocus />
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row linhaSenha">
                        <div class="col-1"></div>
                        <div class="col-1 iconsLogin">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="col-9" style="padding-left: 25px;">
                            <input type="password" placeholder="Senha" class='form-control form-control-lg' id='fieldSenha' name="password" required />  
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row" style="padding-top:30px;">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" id='buttonEntrar' value="Entrar">
                        </div>
                        <div class="col-1"></div>
                    </div>
                </form>
                <div class="row" style="padding-top:25px;">
                    <div class="col-1"></div>
                    <div class="col-10" style="text-align:center;">
                        <a href="#" class="linkRecuperarSenha">Recuperar Senha!</a>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 divLoginLinkado">
                <div class="row">
                    <div class="col-12" style="text-align:center;padding-top:40px;">
                        <p id='fraseCadastro'>Não tem Login?<a href="#"> Cadastre-se</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="text-align:center;padding-top:10px;font-family: Roboto;font-style: normal;font-weight: normal;font-size: 14px;line-height: 16px;color: #787878;">
                        Quero logar com:
                    </div>
                </div>
                <div class="row" style="padding-top:30px;">
                    <div class="col-6">
                        <button class="botaoRedeSocial" style="background: #F2F2F2;">
                            <img src="{{ asset('img/iconGoogle.png') }}" style="height: 20px; width:20px; margin-right:15px; margin-top:-5px;" />
                            Google
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="botaoRedeSocial" style="background: #E8AA0C;">
                            <img src="{{ asset('img/iconUntappd.png') }}" style="height: 20px; width:20px; margin-right:15px; margin-top:-5px;" />
                            Untappd
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection