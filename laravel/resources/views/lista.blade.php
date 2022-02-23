<!doctype html>
<html language="pt-br">
<meta charset="utf-8">
<thead>
	<title>Agenda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"
		href="<?php echo asset('/assets/css/grade.css'); ?>">
	<link rel="stylesheet"
		href="<?php echo asset('/assets/css/style.css'); ?>">
</thead>

<body>
	<header class="topo">
		<div class="conteudo">
			<a href="" class="mobmenu"></a>
			<a href="<?php echo asset(''); ?>" class="logo"><img
					src="<?php echo asset('/assets/img/logo.png'); ?>"
					width="128" height="40"></a>
			<nav class="menu">
				<ul>
					<li><a href="<?php echo asset(''); ?>"><i class="ico home"></i>Home</a></li>
					<li><a href="<?php echo asset('cadastro'); ?>"><i class="ico cad"></i>Novo cadastro</a></li>
					<li><a href="<?php echo asset('lista'); ?>"><i class="ico lista"></i>Lista de contatos</a></li>
					<li><a href=""><i class="ico sair"></i>Sair</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="conteudo">
		<section class="caixa">
			<div class="thead"><i class="ico lista"></i> Lista de contatos</div>
			<div class="base-lista">
				<div class="lst">
					<form action="" method="">
						<div class="rows">
							<div class="col-4">
								<select name="txt_id_empresa">
									<option selected>Selecione o valor...</option>
									<option value="1">Código</option>
									<option value="2">Nome</option>
									<option value="3">Email</option>
									<option value="4">Cidade</option>
									<option value="5">Site</option>
									<option value="6">Fone</option>
								</select>
							</div>
							<div class="col-6">
								<input type="text" name="" placeholder="Valor da pesquisar...">
							</div>
							<div class="col-2">
								<input type="submit" class="btn" value="pesquisar">
							</div>
						</div>
					</form>
				</div>
				<div class="rows">
					<div class="col-12">
						<span class="itens"><i class="ico-list"></i> <b>18 </b>clientes cadastrados</span>
					</div>
				</div>
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
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
							<tr>
								<td>Manoel Jailton Nascimento</td>
								<td>mjailton@gmail.com</td>
								<td align="center">9899924667</td>
								<td align="center">
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p class="nao-encontrado">Nenhum registro encontrado</p>

			</div>
	</div>
	</section>
	</div>

	<footer class="rodape">
		<p>CopyRight - 2018</p>
	</footer>
</body>

</html>