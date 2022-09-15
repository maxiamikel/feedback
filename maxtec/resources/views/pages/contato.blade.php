@extends('layouts.main')
@section('title', 'Contato')
@section('content')


<div id="main-area-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="about-title-main">Entre em contato conosco</h3>
            </div>

            <div class="col-md-4 contato-bo">
                 <i class="fa-solid fa-phone"></i>
                 <p><span class="contato-sb-title">Ligue para:</span> 44 9 9887-8998</p>
                 <p><span class="contato-sb-title">Hor&aacute;rio:</span> Das 08:00 a 18:00</p>
            </div>

            <div class="col-md-4 contato-bo">
                 <i class="fa-solid fa-location-dot"></i>
                <p><span class="contato-sb-title">Endere&ccedil;o:</span> Rua das flores, 897, Maring&aacute; - PR</p>
                <p class="mapa">Mapa</p>
            </div>

            <div class="col-md-4 contato-bo">
            <i class="fa-regular fa-envelope"></i>
            <p><span class="contato-sb-title">Envie um email:</span> maxsyst@gmail.com</p>
            </div>

            <div class="col-md-6" id="contact-title">
                <p>Deixa seu comentario</p>
            </div>

            <div class="col-md-6" id="contact-form">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="txtemail" placeholder="Seu e-mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtAsunto" placeholder="Assunto" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="txtMessage" placeholder="Sua mensagem"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" value="Enviar" name="btnEnviar" class="commun-btn"> 
                     </div>     
                </form>
            </div>

        </div>
    </div>
</div>

@endsection