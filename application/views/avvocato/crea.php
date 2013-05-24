<html>
	<body>
		<h3> Benvenuti</h3>
		<h4> In questa pagina inserisci qualche minchiata</h4>		
			<?php echo validation_errors(); ?>
			<?php echo form_open('avvocato/crea')?>
			
			<input type="text" name="nome" placeholder="Nome">
			<input type="text" name="cognome" placeholder="Cognome">
			<input type="text" name="telefono" placeholder="Telefono">
			<input type="submit" value="Aggiungi Clienti">
			</form> 
// 		
	</body>

</html>