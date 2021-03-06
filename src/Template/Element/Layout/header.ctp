<header id="header">
	<div class="topo"></div>
	<div class="text-top">
		<small>Papel de parede | Cortinas | Almofadas</small>
	</div>
	<div class="logo-social">
		<div class="col-xs-12 col-sm-6">
			<div class="logo">
				<a href="index.php"><h1>Rozana Puccini</h1></a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-5 col-sm-pull-1">
			<div class="contact-header">
				<ul>
					<li><a href=""><i class="fa fa-instagram"></i> <span>@rozanapuccini</span></a></li>
					<li><a href=""><i class="fa fa-facebook"></i> <span>@rozanapuccini</span></a></li>
				</ul>
			</div>
		</div>
	</div> 
  	<div class="container-fluid">
	  	<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-default drop-nav start">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <?= $this->Html->link('Home', '/', ['class' => 'navbar-brand']) ?>
			      <?= $this->Html->link('<i class="fa fa-arrow-up"></i>', '#header', ['class' => 'navbar-brand button-fixed'])?>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class=""><?= $this->Html->link('Sobre <span class="sr-only">(current)</span>', '/sobre', ['escape' => false]) ?></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><?= $this->Html->link('Papel','/produtos#tab1') ?></li>
								<li><?= $this->Html->link('Cortinas', '/produtos.php#tab2')?></li>
								<li><?= $this->Html->link('Almofadas', '/produtos.php#tab3') ?></li>
								<li role="separator" class="divider"></li>
								<li><?= $this->Html->link('Todos', '/produtos')?></li>
							</ul>
						</li>
						<li><?= $this->Html->link('Contato', '/contato') ?></li>
						<li><a href="tel:084999999999"><i class="fa fa-whatsapp"></i></a></li>
			      	</ul>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Busque por fotos, dicas e idéia de decoração">
						</div>
						<a href="#" type="submit" class="btn-search"><i class="fa fa-search"></i></a>
					</form>
			    </div>
		    </div>
	  	</div>
				</nav>
	</div>
</header>