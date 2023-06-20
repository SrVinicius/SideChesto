<?php $this->extend('layout') ?>
<?php $this->section('content') ?>
<header class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Acompanhe sua evolução corporal com SideChest'o</h1>
        <p class="lead">Tenha acesso ao seu cálculo de IMC, perda de gordura, mudança de medidas corporais e fichas de treino juntamente de suas evoluções.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Comece agora</a>
    </div>
</header>
<section class="container">
    <div class="row">
        <div class="col-3">
            <h2>IMC</h2>
            <p>Calcule seu índice de massa corporal e acompanhe sua evolução.</p>
            <a class="btn btn-primary" href="#" role="button">Calcule seu IMC</a>
        </div>
        <div class="col-3">
            <h2>Perda de gordura</h2>
            <p>Acompanhe sua evolução na perda de gordura e saiba se está no caminho certo.</p>
            <a class="btn btn-primary" href="pesos" role="button">Acompanhe seu BF</a>
        </div>
        <div class="col-3">
            <h2>Medidas</h2>
            <p>Acompanhe como suas medidas corporais mudam ao longo do tempo.</p>
            <a class="btn btn-primary" href="#" role="button">Veja suas medidas</a>
        </div>
        <div class="col-3">
            <h2>Treinos</h2>
            <p> Tenha acesso a fichas de treino personalizadas e acompanhe sua evolução em cada exercício.</p>
            <a class="btn btn-primary" href="treinos" role="button">Visualize seus treinos</a>
        </div>
</section>
<?php $this->endSection() ?>