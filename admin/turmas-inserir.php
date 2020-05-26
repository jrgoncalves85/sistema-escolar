<?php require_once 'layout/header.php' ?>
<?php require_once 'layout/navbar.php' ?>   

<div class="row">
  
  <?php require_once 'layout/sidebar.php' ?>    
   
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="d-flex justify-content-between flex-wrap 
			flex-md-nowrap align-items-center pt-3 pb-2">
			<h2>Turmas Inserir</h2>
		</div>
		
		<form class="form-horizontal" action="turmas-gravar.php" method="POST">
			<div class="form-group col-md-4">
				<label for="txtturma" class="col-md-3 control-label">Turma:</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="txtturma" maxlength="3" name="txtturma">
				</div> 
			</div>
			<div class="form-group col-md-4">
				<label for="txtano" class="col-md-3 control-label">Ano:</label>
				<div class="col-md-10">
					<input type="number" class="form-control" id="txtano" name="txtano">
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