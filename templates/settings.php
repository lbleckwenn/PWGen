<div class="container mt-3">
	<h3>Einstellungen</h3>
	<hr>
	<form>
		<h4>Allgemein</h4>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-3 col-form-label">Passwörter mit Umlauten</label>
			<div class="col-sm-9">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input"> <label class="custom-control-label" for="customRadioInline1">ja</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input"> <label class="custom-control-label" for="customRadioInline2">nein</label>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-3 col-form-label">Hinweis auf die Zwischenablage</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
			</div>
		</div>
		<h4>Wortbestandteile</h4>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-3 col-form-label">Minimale Wortlänge</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
			</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-3 col-form-label">Maximale Wortlänge</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
			</div>
		</div>
		<h4>Passwort</h4>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-3 col-form-label">Anzahl Wörter</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
			</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-3 col-form-label">Minimale Wortlänge</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
			</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-3 col-form-label">Maximale Wortlänge</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
			</div>
		</div>
	</form>

	<div class="row">
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">Passwörter mit Umlauten</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_language">&lt;</button>
				</div>
				<select class="custom-select text-center" name="g_language" id="g_language">
					<option value="1">ja</option>
					<option value="0">nein</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_language">&gt;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">Hinweis auf die Zwischenablage</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##AUTO_RELOAD_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_reload">&lt;</button>
				</div>
				<select class="custom-select text-center" name="g_reload" id="g_reload">
					<option value="1">ja</option>
					<option value="0">nein</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_reload">&gt;</button>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">Minimale Wortlänge</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_language">&lt;</button>
				</div>
				<select class="custom-select text-center" name="g_language" id="g_language"><?php for($i = 1; $i<18;$i++) {?>
					<option value="<?php echo($i)?>"><?php echo($i)?></option><?php }?>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_language">&gt;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">Maximale Wortlänge</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##AUTO_RELOAD_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_reload">&lt;</button>
				</div>
				<select class="custom-select text-center" name="g_reload" id="g_reload"><?php for($i = 6; $i<18;$i++) {?>
					<option value="<?php echo($i)?>"><?php echo($i)?></option><?php }?>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_reload">&gt;</button>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">Minimale Passwortlänge</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_language">&lt;</button>
				</div>
				<select class="custom-select text-center" name="g_language" id="g_language"><?php for($i = 1; $i<18;$i++) {?>
					<option value="<?php echo($i)?>"><?php echo($i)?></option><?php }?>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_language">&gt;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">Maximale Passwortlänge</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##AUTO_RELOAD_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_reload">&lt;</button>
				</div>
				<select class="custom-select text-center" name="g_reload" id="g_reload"><?php for($i = 6; $i<18;$i++) {?>
					<option value="<?php echo($i)?>"><?php echo($i)?></option><?php }?>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_reload">&gt;</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(".next-button").click(function() {
	id = ($(this).data("id"));
	var nextElement = $('#' + id + ' > option:selected').next('option');
	if (nextElement.length > 0) {
		$('#' + id + ' > option:selected').removeAttr('selected').next('option').attr('selected', 'selected');
	}
})
$(".back-button").click(function() {
	id = ($(this).data("id"));
	var nextElement = $('#' + id + ' > option:selected').prev('option');
	if (nextElement.length > 0) {
		$('#' + id + ' > option:selected').removeAttr('selected').prev('option').attr('selected', 'selected');
	}
});
$(".hoverhelp").hover(function() {
	text = ($(this).data("helptext"));
	$('#helpRow').val(text);
}, function () {
	$('#helpRow').val('');
})
</script>