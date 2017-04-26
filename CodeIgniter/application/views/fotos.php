<div id="conteudo">
	
	<div class="text-center" style="margin-bottom: 30px;"> <h3>FOTOS</h3> <hr> </div>
	<!--begin carousel-->
	<div id="Galeria-Principal" class="carousel slide" data-ride="carousel">
	
		<!-- Indicators -->
		<ol class="carousel-indicators">
		
			<?php for ($i = 0; $i<=$quantity; $i++){
				echo '
			<li data-target="#Galeria-Principal" data-slide-to=" ' . $i . '" '; 
			if ($i == 0){ echo 'class="active"'; } 
			echo '></li>';
			} ?>
		</ol>
		
		<div class="carousel-inner">
			
			<?php
				if ($quantity < 0){

					echo '<div class="item active"> <img style="margin-left: auto; margin-right: auto;" src="' . base_url('assets/imgs') . '/indisponivel.png" alt="indisponivel"></div>' ;
				}else{

					for ($i = 0; $i<=$quantity; $i++){

						echo '
							<div class="item '; 
						if ($i == 0){ echo 'active'; }
						echo '"> <img src="' . $url . $i . '.png" alt="item' . $i . '"></div>';
					}
				}
			?>
		</div> <!--end carousel-inner-->
		<!--Begin Previous and Next buttons-->
		<a class="left carousel-control" href="#Galeria-Principal" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
		<a class="right carousel-control" href="#Galeria-Principal" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
	</div> <!--end carousel-->