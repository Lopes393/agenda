@extends('template')
@section('conteudo')
<section class="caixa">
    <div class="thead"><i class="ico lista"></i> Lista de contatos</div>
    <div class="base-lista">
        <span class="itens"><i class="ico-list"></i> <b><?= count($contatos) ?> </b>contatos cadastrados</span>
        <div class="tabela-responsiva">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th align="left">Nome</th>
                        <th align="left">Email</th>
                        <th align="center">Telefone</th>
                        <th align="center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contatos as $contato => $value){ ?>
                        <tr>
                            <td align="left"><?= $value->nome ?></td>
                            <td align="left"><?= $value->email ?></td>
                            <td align="center" id="celular"><?= $value->celular ?></td>
                            <td align="center">
                                <a href="{{ route('contato.edit', ['contato' => $value->id]) }}" class="btn editar">Editar</a>
                                <a href="{{route('contato.destroy', ['contato' => $value->id])}}" class="btn excluir">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- <p class="nao-encontrado">Nenhum registro encontrado</p> -->

    </div>
    </div>
</section>
@endsection