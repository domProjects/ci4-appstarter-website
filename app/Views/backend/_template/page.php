<!doctype html>
<html lang="<?= $locale ?>">
	<head>
		<meta charset="<?= $charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CodeIgniter 4 App Starter</title>
		<link rel="stylesheet" href="<?= base_url('assets/admin/css/main.min.css') ?>">
		<link rel="canonical" href="<?= current_url() ?>">
	</head>
	<body>
		<header>
			<?= $this->include('backend/_template/header') ?>
		</header>
		<main>
			<?= $this->renderSection('content') ?>
		</main>
		<footer>
			<?= $this->include('backend/_template/footer') ?>
		</footer>
		<script src="<?= base_url('assets/admin/js/main.min.js') ?>"></script>
	</body>
</html>