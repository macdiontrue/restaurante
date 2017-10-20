@extends('layouts.web.index')
@section('conteudo')
<div class="register">
    <div class="container">
        <form>
            <div class="register-top-grid">
                <h1>INFORMACOES PESSOAIS</h1>
                <div>
                    <span>Nome<label>*</label></span>
                    <input type="text">
                </div>
                <div>
                    <span>Apelido<label>*</label></span>
                    <input type="text">
                </div>
                <div>
                    <span>Email<label>*</label></span>
                    <input type="email">
                </div>
                <div class="clearfix"> </div>
                <a class="news-letter" href="#">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""></label>
                </a>
            </div>
            <div class="register-bottom-grid">
                <h4>INFORMACAO DO LOGIN</h4>
                <div>
                    <span>Password<label>*</label></span>
                    <input type="password">
                </div>
                <div>
                    <span>Confirmar Password<label>*</label></span>
                    <input type="password">
                </div>
                <div class="clearfix"> </div>
            </div>
        </form>

        <div class="clearfix"> </div>
        <div class="register-but">
            <form>
                <input type="submit" value="registar">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
</div>
 @endsection
