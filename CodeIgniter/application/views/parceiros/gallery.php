<!--begin modal window-->
<div class="modal fade" id="galeria">

	<div class="modal-dialog">
	
		<div class="modal-content">
		
			<div class="modal-header">
			
				<div class="pull-left">Realizações</div>
				<button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
			</div>
			<div class="modal-body">

				<!--begin carousel-->
				<div id="myGallery" class="carousel slide" data-interval="false">
				
					<div class="carousel-inner">
					
						<div class="item active"> <img src="<?php echo(base_url('assets/imgs/p1.jpg')); ?>" alt="item0">
						
							<div class="carousel-caption">
							
								<h3>Jateados</h3>
								<p>Copos e outros vidros jateados!</p>
							</div>
						</div>
						<div class="item"> <img src="" alt="item1">
						
							<div class="carousel-caption">
							
								<h3>Jateados</h3>
								<p>Copos e outros vidros jateados!</p>
							</div>
						</div>
					</div> <!--end carousel-inner-->
					<!--Begin Previous and Next buttons-->
					<a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div> <!--end carousel-->
			</div> <!--end modal-body-->
		</div> <!--end modal-content-->
	</div> <!--end modal-dialoge-->
</div>