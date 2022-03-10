@extends('template')
@section('conteudo')
<section class="caixa">
    <div class="thead"><i class="ico cad"></i>Formulario de cadastro</div>
    <div class="base-form">
        <div class="caixa-form">
            <div class="thead">Alterar cadastro</div>
            <form action="{{route('contato.update', ['contato' => $contato->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="rows">
                    <div class="col-12">
                        <label>Nome</label>
                        <input name="nome" value="<?= $contato->nome ?>" type="text" placeholder="Insira um nome">
                    </div>
                    <div class="col-4">
                        <label>Cep</label>
                        <input class="busca_cep" name="cep" value="<?= $contato->cep ?>" type="text" placeholder="Insira seu CEP">
                    </div>
                    <div class="col-4">
                        <label>UF</label>
                        <input name="estado" value="<?= $contato->estado ?>" type="text" placeholder="Insira a UF">
                    </div>
                    <div class="col-4">
                        <label>Cidade</label>
                        <input name="cidade" value="<?= $contato->cidade ?>" type="text" placeholder="Insira sua cidade">
                    </div>
                    <div class="col-6">
                        <label>Logradouro</label>
                        <input name="logradouro" value="<?= $contato->logradouro ?>" type="text" placeholder="Insira seu endereço">
                    </div>
                    <div class="col-6">
                        <label>Bairro</label>
                        <input name="bairro" value="<?= $contato->bairro ?>" type="text" placeholder="Insira seu bairro">
                    </div>
                    <div class="col-3">
                        <label>Celular</label>
                        <input id="celular" name="celular" value="<?= $contato->celular ?>" type="text" placeholder="Insira seu telefone">
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
                        <input name="email" value="<?= $contato->email ?>" type="text" placeholder="Insira um email">
                    </div>
                    <div class="col-12">
                        <label>Observação</label>
                        <textarea rows="10" name="observacao"></textarea>
                    </div>

                    <input type="submit" value="Alterar" class="btn">
            </form>
        </div>
    </div>
</section>
<script src="{{asset('/assets/js/funcoes.js')}}"></script>

@endsection