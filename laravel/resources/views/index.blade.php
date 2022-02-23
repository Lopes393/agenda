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
	

	<div class="conteudo">
		<section class="caixa">
			<div class="thead"><i class="ico home"></i> Home</div>
			<div class="base-home">
				<h2 class="titulo">SEJA BEM VINDO!</h2>
				<div class="grade">
					<div class="rows">
						<div class="col-6">
							<article class="cx-home">
								<div class="thead">ÚLTMAS ALTERAÇÕES</div>
								<div class="cx-body">
									<img
										src="<?php echo asset('/assets/img/ico-excluir.png'); ?>">
									<strong>20</strong>
									<span>Ítens excluídos</span>
								</div>
							</article>
						</div>
						<div class="col-6">
							<article class="cx-home">
								<div class="thead">ÚLTMAS ALTERAÇÕES</div>
								<div class="cx-body">
									<img
										src="<?php echo asset('/assets/img/ico-alterar.png'); ?>">
									<strong>200</strong>
									<span>Ítens excluídos</span>
								</div>
							</article>
						</div>

						<div class="col-6">
							<article class="cx-home">
								<div class="thead">Cadastros</div>
								<div class="cx-body">
									<img
										src="<?php echo asset('/assets/img/ico-cadastrar.png'); ?>">
									<strong>2000</strong>
									<span>Ítens cadastrados</span>
								</div>
								<div class="tfooter">
									<a href="<?php echo asset('cadastro'); ?>"
										class="btn novo">Adicionar novo</a>
									<small>Há 2 dias</small>
								</div>
							</article>
						</div>
						<div class="col-6">
							<article class="cx-home">
								<div class="thead">Lista de contatos</div>
								<div class="cx-body">
									<img
										src="<?php echo asset('/assets/img/ico-lista.png'); ?>">
									<strong>2018</strong>
									<span>Ítens excluídos</span>
								</div>
								<div class="tfooter">
									<a href="<?php echo asset('contato'); ?>"
										class="btn">Ver lista</a>
									<small>Há 2 dias</small>
								</div>
							</article>
						</div>
					</div>
				</div>

			</div>
		</section>
	</div>

	
</body>

</html>