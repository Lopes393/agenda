@extends('template')
@section('conteudo')
<section class="caixa">
    <div class="thead"><i class="ico cad"></i>Formulario de cadastro</div>
    <div class="base-form">
        <div class="caixa-form">
            <div class="thead">Inserir novo cadastro</div>
            <form action="{{route('contato.store')}}" method="POST">
                <div class="rows">
                    <div class="col-12">
                        <label>Nome</label>
                        <input name="nome" value="" type="text" placeholder="Insira um nome">
                    </div>
                    <div class="col-4">
                        <label>Cep</label>
                        <input class="busca_cep" name="cep" value="" type="text" placeholder="Insira seu CEP">
                    </div>
                    <div class="col-4">
                        <label>UF</label>
                        <input name="estado" value="" type="text" placeholder="Insira a UF">
                    </div>
                    <div class="col-4">
                        <label>Cidade</label>
                        <input name="cidade" value="" type="text" placeholder="Insira sua cidade">
                    </div>
                    <div class="col-6">
                        <label>Logradouro</label>
                        <input name="logradouro" value="" type="text" placeholder="Insira seu endereço">
                    </div>
                    <div class="col-3">
                        <label>Bairro</label>
                        <input name="bairro" value="" type="text" placeholder="Insira seu bairro">
                    </div>
                    <div class="col-3">
                        <label>Celular</label>
                        <input id="celular" name="celular" value="" type="text" placeholder="Insira seu telefone">
                    </div>
                    <div class="col-3">
                        <label>sexo</label>
                        <select name="sexo">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label>Nascimento</label>
                        <input name="data_nascimento" value="" type="date" placeholder="Insira a data">
                    </div>
                    <div class="col-6">
                        <label>Email</label>
                        <input name="email" value="" type="text" placeholder="Insira um email">
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
@endsection