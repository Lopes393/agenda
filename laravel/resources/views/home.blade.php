@extends('template')
@section('conteudo')
<section class="caixa">
    <div class="thead"><i class="ico home"></i> Home</div>
    <div class="base-home">
        <h2 class="titulo">SEJA BEM VINDO!</h2>
        <div class="grade">
            <div class="rows">
                <div class="col-6">
                    <article class="cx-home">
                        <div class="thead">Cadastros</div>
                        <div class="cx-body">
                            <img src="{{asset('/assets/img/ico-cadastrar.png')}}">
                            <strong>2000</strong>
                            <span>Ítens cadastrados</span>
                        </div>
                        <div class="tfooter">
                            <a href="{{asset('cadastro')}}" class="btn novo">Adicionar novo</a>
                            <small>Há 2 dias</small>
                        </div>
                    </article>
                </div>
                <div class="col-6">
                    <article class="cx-home">
                        <div class="thead">Lista de contatos</div>
                        <div class="cx-body">
                            <img src="{{asset('/assets/img/ico-lista.png')}}">
                            <strong>2018</strong>
                            <span>Ítens excluídos</span>
                        </div>
                        <div class="tfooter">
                            <a href="{{asset('contato')}}" class="btn">Ver lista</a>
                            <small>Há 2 dias</small>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection