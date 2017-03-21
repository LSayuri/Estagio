<div id="conteudo">

	<h3 id="comoajudar">FALE CONOSCO</h3> <hr>
	
	<div class="row">
	
		<div class="col-md-1"></div>
		<div class="col-md-5">
			
			<div id="mapa" style="max-width: 100%; height: 300px; margin-down: 50px;"></div>
		</div>
		
		<div class="col-md-5">
		
			<p><BLOCKQUOTE>Endereço: Rua Doutor José de Rezende Pinto, 114 <br>Bairro: Vila Pinto <br>Cidade: Varginha/MG <br>CEP: 37.010-590 <br>CNPJ: 18.240.010/0001-60<br></BLOCKQUOTE>
				<BLOCKQUOTE>Telefone: (35) 3221-1342 (Kátia)<br></BLOCKQUOTE>
				<BLOCKQUOTE>Email: fuvae.apae@bol.com.br<br></BLOCKQUOTE>
			</b>
		</div>
	</div>
		
		<script type="text/javascript">
		
			function myMap() {
				
				var FUVAE = new google.maps.LatLng(-21.555949, -45.441098);
				var mapProp= {
					center:FUVAE,
					zoom:19,
				};
				var map=new google.maps.Map(document.getElementById("mapa"),mapProp);
				var marker = new google.maps.Marker({
					position:FUVAE,
					animation: google.maps.Animation.BOUNCE
				});
				marker.setMap(map);
			}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcDYCS28LAyBpE1DjrUx88YhyviBJYq3o&callback=myMap"></script>