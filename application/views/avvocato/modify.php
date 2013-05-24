<html>
	<body>
		<h3> Benvenuti</h3>
		<h4> In questa pagina inserisci qualche minchiata</h4>		
				
			<?php echo validation_errors(); ?>
			<?php echo form_open('avvocato/modified')?>
			<input type="hidden" value="<?php echo $cliente[0]->id; ?>" name="id">
			<input type="text" value="<?php echo $cliente[0]->nome; ?>" name="nome" placeholder="Nome">
			<input type="text" value="<?php echo $cliente[0]->cognome; ?>" name="cognome" placeholder="Cognome">
			<input type="text" value="<?php echo $cliente[0]->telefono; ?>" name="telefono" placeholder="Telefono">
			<input type="submit" value="Modifica Cliente">
			</form> 
// 		
	</body>

</html>