<br><br><br>
<div class="row">
	
	<div class="col-md-6 col-md-offset-2">
			
		<form id="mensagem" style="border-style: solid; border-color: #DDD; border-width: 2px; border-radius: 5px; padding: 5px;">
		
			<div class="row">
				
				<div class="col-md-4">
				
					<div class="input-group" id="nome">
					
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input class="form-control" type="text" name="name" placeholder="Nome" required>
					</div>
				</div>
				
				<div class="col-md-4">
				
					<div class="input-group" id="email">
					
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input class="form-control" type="email" name="email" placeholder="Email" required>
					</div>
				</div>
				
				<div class="col-md-4">
				
					<div class="input-group" id="telefone">
					
						<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
						<input class="form-control" type="text" name="telefone" placeholder="Telefone" required>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				
				<div class="col-md-12">
				
					<div class="input-group" id="texto">
					
						<textarea class="form-control" name="texto" form="mensagem" rows="10" cols="100" placeholder="Mensagem" style="resize: none" required></textarea>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
			
				<div class="col-md-3 col-md-offset-3">
				
					<button class="btn btn-primary btn-sm" type="submit" style="width: 100px;">ENVIAR</button>
				</div>
				
				<div class="col-md-3">
				
					<button class="btn btn-danger btn-sm" type="reset" style="width: 100px;">CANCELAR</button>
				</div>
			</div>
		<form>
	</div>
</div>