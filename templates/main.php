<!doctype html>
<html lang="de" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<title><?php echo $this->_['main_title']; ?></title>
<style>
main>.container {
	padding: 60px 15px 0;
}

.footer {
	background-color: #f5f5f5;
}
</style>
</head>
<body class="d-flex flex-column h-100">
	<header>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#"><?php echo $this->_['main_title']; ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php?page=password">Passwort <span class="sr-only">(current)</span></a></li>
						<li class="nav-item"><a class="nav-link" href="index.php?page=words">Wörter</a></li>
						<li class="nav-item"><a class="nav-link" href="index.php?page=settings">Einstellungen</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Begin page content -->
	<main role="main" class="flex-shrink-0">
		<?php echo $this->_['main_content']; ?>
	</main>

	<footer class="footer mt-auto py-3">
		<div class="container">
			<span class="text-muted"><?php echo $this->_['main_footer']; ?></span>
		</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script>
		window.cookieconsent.initialise({
			"palette": {
				"popup": {
					"background": "#237afc"
				},
				"button": {
					"background": "#fff",
					"text": "#237afc"
				}
			},
			"theme": "classic",
			"position": "bottom-right",
			"content": {
				"message": "Diese Webseite benutzt Cookies um benutzerdefinierte Einstellungen zur generierten Passwörtern zu speichern.",
				"dismiss": "Verstanden",
				"link": "Weitere Informationen",
				"href": "?page=privacy"
			}
		});
	</script>
</body>
</html>