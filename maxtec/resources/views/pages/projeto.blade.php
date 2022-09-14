@extends('layouts.main')
@section('title', 'Projeto')
@section('content')


<div id="main-area-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="about-title-main">Nossos projetos</h3>
            </div>
            <div class="col-md-12" id="filtrar-btn-box">
                <button class="commun-btn filter-btn active" id="todos">Todos</button>
                <button class="commun-btn filter-btn " id="btn-web">WebSites</button>
                <button class="commun-btn filter-btn" id="btn-ambiente">Ambientais</button>
                <button class="commun-btn filter-btn" id="btn-ecomerce">E-Comerce</button>
                <button class="commun-btn filter-btn" id="btn-seo">SEO</button>
            </div>

            <div class="col-md-4 projeto-box seo">
                <img src="/image/seo.png" class="img-fluid" alt="">
            </div>

            <div class="col-md-4 projeto-box ecomerce">
                <img src="/image/ecomerce.png" class="img-fluid" alt="">
            </div>

            <div class="col-md-4 projeto-box ambiente">
                <img src="/image/ambiente.jpg" class="img-fluid" alt="">
                <p>Descrição</p>
            </div>

            <div class="col-md-4 projeto-box web">
                <img src="/image/webdesign.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>


@endsection