@extends('layouts.main')
@section('title','Nossos servi&ccedil;os')
@section('content')
<div id="main-area-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="about-title-main">Nossos servi&ccedil;os</h3>
            </div>
            <div class="col-md-3" id="service-box">
                <i class="fa-solid fa-mobile-alt"></i>
                <h4>Desenvolvimento para web</h4>
                <p>Os principais aplicativos desenvolvidos para a web compartiveis com os diferentes tipos de dispositivos</p>
                <a href="#" class="commun-btn"><i class="fa-solid fa-money-check-dollar"></i> Solicitar or&ccedil;amento</a>
            </div>
            <div class="col-md-3" id="service-box">
            <i class="fa-solid fa-key"></i>
                <h4>Seguran&ccedil;a e confiabilidade</h4>
                <p>Nosso compromisso com a integridade de nossos produtos e servi&ccedil;os</p>
                <a href="#" class="commun-btn"><i class="fa-solid fa-money-check-dollar"></i> Solicitar or&ccedil;amento</a>
            </div>
            <div class="col-md-3" id="service-box">
                <i class="fa-solid fa-eye"></i>
                <h4>Monitoramento 24h</h4>
                <p>Sistema de monitoramento os 24 horas do dia</p>
                <a href="#" class="commun-btn"><i class="fa-solid fa-money-check-dollar"></i> Solicitar or&ccedil;amento</a>
            </div>
            <div class="col-md-3" id="service-box">
                 <i class="fa-solid fa-barcode"></i>
                <h4>Tecnologia de codigo de barra</h4>
                <p>A maior e melhor gama de tratamento de BarCode para a emição de dados</p>
                <a href="#" class="commun-btn"><i class="fa-solid fa-money-check-dollar"></i> Solicitar or&ccedil;amento</a>
            </div>
        </div>
    </div>
</div>
@endsection