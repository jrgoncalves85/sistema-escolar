<?php require_once 'layout/header.php' ?>
<?php require_once 'layout/navbar.php' ?>   

<div class="row">
  
  <?php require_once 'layout/sidebar.php' ?>    
   
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="d-flex justify-content-between flex-wrap 
			flex-md-nowrap align-items-center pt-3 pb-2">
			<h2>Alunos Inserir</h2>
		</div>
		
		<form class="form-horizontal" action="alunos-gravar.php" method="POST">
			<div class="form-group col-md-6">
				<label for="txtnome" class="col-md-3 control-label">Nome:</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="txtnome" name="txtnome">
				</div> 
			</div>
			<div class="form-group col-md-6">
				<label for="txtemail" class="col-md-3 control-label">E-mail:</label>
				<div class="col-md-10">
					<input type="email" class="form-control" id="txtemail" name="txtemail">
				</div> 
			</div> 
			<div class="form-group col-md-6">
				<label for="txtidade" class="col-md-3 control-label">Idade:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="txtidade" maxlength="2" name="txtidade">
				</div> 
			</div>
			<div class="form-group col-md-6">
				<label for="selturma" class="col-md-3 control-label">Turma:</label>
				<div class="col-md-4">
		            <select class="form-control" name="selturma">
		                <option value="1"> 1ºC </option>
		                <option value="2"> 2ºC </option>
		                <option value="3"> 3ºC </option>
	            	</select>
				</div>
			</div>
			<div class="form-group col-md-6">
				<label for="groupButton"></label>
				<div class="col-sm-3 col-sm-offset-2">
					<button type="submit" id="groupButton" class="btn btn-primary">
			  			Salvar
					</button>
				</div>
			</div>
		</form>
	</main>

</div>

<?php require_once 'layout/footer.php' ?>