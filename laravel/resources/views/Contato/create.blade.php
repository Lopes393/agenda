@extends('template')
@section('conteudo')
<section class="caixa">
    <div class="thead"><i class="ico cad"></i>Formulario de cadastro</div>
    <div class="base-form">
        <div class="caixa-form">
            <div class="thead">Inserir novo cadastro</div>
            <form action="{{route('contato.store')}}" method="POST">
                @csrf
                <div class="rows">
                    <div class="col-12">
                        <label>Nome</label>
                        <input name="nome" type="text" placeholder="Insira um nome">
                    </div>
                    <div class="col-4">
                        <label>Cep</label>
                        <input class="busca_cep" name="cep" type="text" placeholder="Insira seu CEP">
                    </div>
                    <div class="col-4">
                        <label>UF</label>
                        <input name="estado" type="text" placeholder="Insira a UF">
                    </div>
                    <div class="col-4">
                        <label>Cidade</label>
                        <input name="cidade" type="text" placeholder="Insira sua cidade">
                    </div>
                    <div class="col-6">
                        <label>Logradouro</label>
                        <input name="logradouro" type="text" placeholder="Insira seu endereço">
                    </div>
                    <div class="col-6">
                        <label>Bairro</label>
                        <input name="bairro" type="text" placeholder="Insira seu bairro">
                    </div>
                    <div class="col-3">
                        <label>Celular</label>
                        <input id="celular" name="celular" type="text" placeholder="Insira seu telefone">
                    </div>
                    <div class="col-3">
                        <label>sexo</label>
                        <select name="sexo">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label>Email</label>
                        <input name="email" type="text" placeholder="Insira um email">
                    </div>
                    <div class="col-12">
                        <label>Observação</label>
                        <textarea rows="10" name="observacao"></textarea>
                    </div>

                    <input type="submit" value="Cadastrar" class="btn">
            </form>
        </div>
    </div>
</section>
<script src="{{asset('/assets/js/funcoes.js')}}"></script>
@endsection