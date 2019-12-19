<div class="container mt-3">
	<h3>Einstellungen</h3>
	<hr>
	<form action="?page=settings" method="post">
		<div class="row">
			<div class="col-12">
				<h4 class="mt-3">Allgemein</h4>
				<hr>
				<div class="custom-control custom-switch">
					<input type="checkbox" class="custom-control-input" <?php if( !$this->_ ['userSettings']['noUmlauts'] ) echo 'checked'; ?> id="noUmlauts" name="noUmlauts" value="0">
					<label class="custom-control-label" for="noUmlauts">Passwörter mit Umlauten</label>
				</div>
				<div class="custom-control custom-switch">
					<input type="checkbox" class="custom-control-input" <?php if( $this->_ ['userSettings']['copyPasteHelp'] &1) echo 'checked'; ?> id="copyPasteHelp" name="copyPasteHelp" value="1">
					<label class="custom-control-label" for="copyPasteHelp">Hinweis auf die Zwischenablage</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4 class="mt-3">Wortbestandteile</h4>
				<hr>
				<label>Minimale Wortlänge: <span id="minWordLengthText"><?php echo $this->_ ['userSettings']['minWordLength']; ?></span></label>
				<input type="range" class="custom-range" value="<?php echo $this->_ ['userSettings']['minWordLength']; ?>" min="<?php echo $this->_ ['minMaxValues']['minWordLength']; ?>" max="<?php echo $this->_ ['minMaxValues']['maxWordLength']; ?>" id="minWordLength" name="minWordLength">
				<label>Maximale Wortlänge: <span id="maxWordLengthText"><?php echo $this->_ ['userSettings']['maxWordLength']; ?></span></label>
				<input type="range" class="custom-range" value="<?php echo $this->_ ['userSettings']['maxWordLength']; ?>" min="<?php echo $this->_ ['minMaxValues']['minWordLength']; ?>" max="<?php echo $this->_ ['minMaxValues']['maxWordLength']; ?>" id="maxWordLength" name="maxWordLength">
				<h4 class="mt-3">Passwort</h4>
				<hr>
				<label>Anzahl einzelnen Wörter: <span id="amountWordsText"><?php echo $this->_ ['userSettings']['amountWords']; ?></span></label>
				<input type="range" class="custom-range" value="<?php echo $this->_ ['userSettings']['amountWords']; ?>" min="<?php echo $this->_ ['minMaxValues']['minAmountWords']; ?>" max="<?php echo $this->_ ['minMaxValues']['maxAmountWords']; ?>" id="amountWords" name="amountWords">
				<label>Minimale Paswortlänge: <span id="minPasswordLengthText"><?php echo $this->_ ['userSettings']['minPasswordLength']; ?></span></label>
				<input type="range" class="custom-range" value="<?php echo $this->_ ['userSettings']['minPasswordLength']; ?>" min="<?php echo $this->_ ['minMaxValues']['minPasswordLength']; ?>" max="<?php echo $this->_ ['minMaxValues']['maxPasswordLength']; ?>" id="minPasswordLength" name="minPasswordLength">
				<label>Maximale Paswortlänge: <span id="maxPasswordLengthText"><?php echo $this->_ ['userSettings']['maxPasswordLength']; ?></span></label>
				<input type="range" class="custom-range" value="<?php echo $this->_ ['userSettings']['maxPasswordLength']; ?>" min="<?php echo $this->_ ['minMaxValues']['minPasswordLength']; ?>" max="<?php echo $this->_ ['minMaxValues']['maxPasswordLength']; ?>" id="maxPasswordLength" name="maxPasswordLength">
			</div>
			<div class="col-md-6">
				<h4 class="mt-3">Zahlen im Passwort</h4>
				<hr>
				<div class="form-group">
					<label>Anzahl der Zeichen ...</label>
					<div>
						<div class="custom-controls-stacked">
							<div class="custom-control custom-radio">
								<input name="numbers" id="numbers1" class="custom-control-input numbers" <?php if( $this->_ ['userSettings']['numbers'] &1) echo 'checked'; ?> value="1" type="radio" data-help="Time#People-Day4">
								<label for="numbers1" class="custom-control-label">... des ersten Wort am Ende des Passworts</label>
							</div>
						</div>
						<div class="custom-controls-stacked">
							<div class="custom-control custom-radio">
								<input name="numbers" id="numbers2" class="custom-control-input numbers" <?php if( $this->_ ['userSettings']['numbers'] &2) echo 'checked'; ?> value="2" type="radio" data-help="Time4#People-Day">
								<label for="numbers2" class="custom-control-label">... des ersten Wort nach dem ersten Wort</label>
							</div>
						</div>
						<div class="custom-controls-stacked">
							<div class="custom-control custom-radio">
								<input name="numbers" id="numbers3" class="custom-control-input numbers" <?php if( $this->_ ['userSettings']['numbers'] &4) echo 'checked'; ?> value="4" type="radio" data-help="Time4#People6-Day3">
								<label for="numbers3" class="custom-control-label">... pro Wort nach jedem Wort</label>
							</div>
						</div>
					</div>
				</div>
				<h4>Sonderzeichen im Passwort</h4>
				<hr>
				<div class="form-group">
					<div>
						<div class="custom-controls-stacked">
							<div class="custom-control custom-radio">
								<input name="specialChars" id="specialChars2" class="custom-control-input" <?php if( $this->_ ['userSettings']['specialChars'] &1) echo 'checked'; ?> value="1" type="radio">
								<label for="specialChars2" class="custom-control-label">Feste Reihenfolge</label>
								<div class="form-group">
									<input id="fixedSpecialChars" name="fixedSpecialChars" value="<?php echo htmlspecialchars($this->_ ['userSettings']['fixedSpecialChars']); ?>" class="form-control" type="text">
								</div>
							</div>
						</div>
						<div class="custom-controls-stacked">
							<div class="custom-control custom-radio">
								<input name="specialChars" id="specialChars1" class="custom-control-input" <?php if( $this->_ ['userSettings']['specialChars'] &2) echo 'checked'; ?> value="2" type="radio">
								<label for="specialChars1" class="custom-control-label">Zufällig</label>
								<div class="form-group">
									<input id="randomSpecialChars" name="randomSpecialChars" value="<?php echo htmlspecialchars($this->_ ['userSettings']['randomSpecialChars']); ?>" class="form-control" type="text">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4 class="mt-3">Beispielpasswort</h4>
				<hr>
				<span id="numbersHelpBlock"></span>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<div class="float-right">
						<button name="reset" type="reset" class="btn btn-secondary">Zurücksetzen</button>
						<button name="submit" type="submit" class="btn btn-primary">Speichern</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script>
		//init
		$('#numbersHelpBlock').html($('#' + $('.numbers:checked').attr('id')).data('help'));
		//onChange
		$('.numbers').change(function(){
			var radioId = $(this).attr('id');
			var radioData = $(this).data('help');
			$('#numbersHelpBlock').html(radioData);
		})
		$('input[type=range]').change(function(){
			var rangeId = $(this).attr('id');
			var rangeValue = $(this).val();
			$('#' + rangeId + 'Text').html(rangeValue);
		})
	</script>
</div>