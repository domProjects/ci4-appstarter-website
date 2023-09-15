<!doctype html>
<html lang="<?= esc($locale) ?>" class="h-100">
	<head>
		<meta charset="<?= esc($charset) ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= esc($titleTag) ?></title>
		<link rel="stylesheet" href="<?= base_url('assets/public/css/main.min.css') ?>">
		<link rel="canonical" href="<?= current_url() ?>">
	</head>
	<body class="d-flex flex-column h-100">
		<header>
			<?= $this->include('frontend/_template/header') ?>
		</header>
		<main class="flex-shrink-0">
			<div class="container">
				<?= $this->renderSection('content') ?>
			</div>
		</main>
		<footer class="footer mt-auto py-3 bg-body-tertiary">
			<div class="container">
				<?= $this->include('frontend/_template/footer') ?>
			</div>
		</footer>
		<script src="<?= base_url('assets/public/js/main.min.js') ?>"></script>
	</body>
</html>