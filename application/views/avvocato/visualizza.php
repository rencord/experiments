<html>
	<body>
		<table>
		<tr><td>Nome</td><td>Cognome</td><td>Telefono</td></tr>
		<?php 
		
		foreach($cl as $row)
		{
			?><td><?php echo $row->nome; ?> </td><td><?php echo $row->cognome;?>  </td><td><?php echo $row->telefono;?>  </td>
			
			<td>
				<?php echo validation_errors(); ?>
				<?php echo form_open('avvocato/delete')?>
				<input type="hidden" name='id' value="<?php echo $row->id; ?>" > 
				<input type="submit" value="Delete">
				</form>
			
			
			</td>
			
			<td>
				<?php echo validation_errors(); ?>
				<?php echo form_open('avvocato/modify')?>
				<input type="hidden" name='id' value="<?php echo $row->id; ?>" > 
				<input type="submit" value="Modify">
				</form>
			
			
			</td>
			
			</tr>
			<?php
		}
		
		?>
		</table>
	</body>

</html>