@extends('layouts.main')
@section('title', 'Contato')
@section('content')


<div id="main-area-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h3 class="about-title-main">Fique dentro das nossas novidades</h3>
                <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Nome </label>
                    <input type="text" name="txtNome" placeholder="Seu nome" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="titulo">E-mail </label>
                    <input type="email" name="txtEmail" placeholder="Seu E-mail" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone </label>
                    <input type="number" name="txtTelefone" placeholder="Seu Telefone" class="form-control" autocomplete="off">
                </div>   
                <div class="form-group">
                    <input type="button" value="Enviar" onClick="validarForm() " class="btn btn-primary">
                    
                </div>   
                </form>
            </div>
        </div>
    </div>
</div>

@endsection