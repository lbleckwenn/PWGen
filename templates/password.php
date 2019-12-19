<div class="container mt-3">
	<div class="jumbotron">
		<h3>Neues Passwort:</h3>
		<div class="input-group input-group-lg">
			<input type="text" class="form-control" value="<?php echo $this->_ ['password']; ?>" id="password">
			<div class="input-group-append" id="button-addon4">
				<button class="btn btn-outline-primary" type="button" onclick="copyPassword()">Passwort kopieren</button>
				<a class="btn btn-outline-success" type="button" href="index.php?view=passwort">Neues Passwort</a>
			</div>
		</div>
		<p class="text-right mt-3 mb-0 pb-0 text-muted"><?php echo $this->_ ['length']; ?></p>
	</div>
</div>
<script>
// Function from https://www.w3schools.com/howto/howto_js_copy_clipboard.asp
function copyPassword() {
	  /* Get the text field */
	  var copyText = document.getElementById("password");

	  /* Select the text field */
	  copyText.select();

	  /* Copy the text inside the text field */
	  document.execCommand("copy");
<?php if ($this->_['copyPasteHelp']) {?>
	  /* Alert the copied text */
	  alert("Password in die Zwischenablage kopiert. Einfügen mit STRG + V ");
<?php } ?>
	}
</script>