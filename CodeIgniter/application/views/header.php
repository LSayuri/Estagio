<div id="menu-principal">

	<div id="title">
	
		<img src="<?php echo (base_url('assets/imgs/logo.jpg')); ?>" alt="Logo da FUVAE" id="logo">
		<img src="<?php echo (base_url('assets/imgs/logo2.png')); ?>" alt="Fundação Varginhense de Assistência aos Excepcionais" id="titulo">
	</div>
	
	<div id="menu">
		
		<div id="links">
			
			<a href="https://www.facebook.com/fuvae.apae?ref=ts&fref=ts" target="_blank"> <i class="fa fa-facebook" id="facebook" title="Página da FUVAE no Facebook"></i> </a>
			<a href="https://www.facebook.com/Clube-de-M%C3%A3es-Fuvae-VarginhaMG-e-Volunt%C3%A1rias-481749408645886/?ref=br_rs" target="blank"><img src="<?php echo (base_url('assets/imgs/maes.png')); ?>" id="maes" alt="Grupo de mães da FUVAE" title="Grupo de mães da FUVAE"> </a>
		</div>
		
		<nav class="navbar navbar-default" role="navigation" id="nav-menu">
		
			<button id="menu-button" class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
				&#9776;
			</button>
			
			<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
				
				<div id="center">
					
					<ul class="nav navbar-nav" id="redirect">
						<li class="nav-item"><?php echo anchor(base_url(), "INÍCIO");?></li>
						<li class="dropdown nav-item"><a id="fundacao" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">A FUNDAÇÃO<span class="caret"></span></a>
							
							<ul class="dropdown-menu nav navbar-nav">
		
								<li class="nav-item"><a href="fundacao.html#institucional">O QUE É?</a></li>
								<li class="nav-item"><a href="fundacao.html#rede_apaes">REDE APAES</a></li>
			
							</ul>
						</li>
						<li class="dropdown nav-item"><a id="oQueFazemos" class="dropdown-toogle nav-link" data-toggle="dropdown" href="#">O QUE FAZEMOS <span class="caret"></span></a>
						
							<ul class="dropdown-menu nav navbar-nav">
							
								<li class="nav-item"><a href="oQueFazemos.html#trabalho_realizado">TRABALHO REALIZADO</a></li>
								<li class="nav-item"><a href="oQueFazemos.html#acoes">AÇÕES</a></li>
								<li class="nav-item"><a href="oQueFazemos.html#publico_alvo">PÚBLICO ALVO</a></li>
								<li class="nav-item"><a href="oQueFazemos.html#participacao_conselhos">PARTICIPAÇÃO NOS CONSELHOS</a></li>
								<li class="nav-item"><a href="oQueFazemos.html#clube_maes">CLUBE DE MÃES</a></li>
							</ul>
						</li>
						<li class="dropdown nav-item"><a id="deficiencia_inte" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">DEFICIÊNCIA INTELECTUAL E DESENVOLVIMENTO<span class="caret"></span></a>
							
							<ul class="dropdown-menu nav navbar-nav">
		
								<li class="nav-item"><a href="deficiencia_inte.html#oquee">O QUE É?</a></li>
								<li class="nav-item"><a href="deficiencia_inte.html#como_previnir">COMO PREVINIR?</a></li>
								<li class="nav-item"><a href="deficiencia_inte.html#como_diagnosticar">COMO DIAGNOSTICAR?</a></li>
								<li class="nav-item"><a href="deficiencia_inte.html#como_tratar">COMO TRATAR?</a></li>
								<li class="nav-item"><a href="deficiencia_inte.html#direitos_beneficios">DIREITOS E BENEFÍCIOS</a></li>
			
							</ul>
						</li>
						<li class="dropdown nav-item"><a id="comoAjudar" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">COMO AJUDAR<span class="caret"></span></a>
						
							<ul class="dropdown-menu nav navbar-nav">
		
								<li class="nav-item"><?php echo anchor(base_url("home/como_ajudar/fisica"), "SOU UMA PESSOA FÍSICA");?></li>
								<li class="nav-item"><?php echo anchor(base_url("home/como_ajudar/juridica"), "SOU UMA PESSOA JURÍDICA");?></li>
								<li class="nav-item"><?php echo anchor(base_url("home/como_ajudar/imposto"), "DOE VIA IMPOSTO DE RENDA");?></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">EVENTOS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">PARCEIROS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">FOTOS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">FALE CONOSCO</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>