
<nav class="navbar navbar-expand-md fixed-top bg-body-tertiary">
	<div class="container">
		<a href="<?= site_url($locale) ?>" class="navbar-brand"><?= esc($title) ?></a>
		<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="<?= lang('AppFrontend.menuAria.toggleNavigation') ?>">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a href="<?= site_url($locale) ?>" class="nav-link active" aria-current="page"><?= lang('AppFrontend.menu.home') ?></a>
				</li>
			</ul>
			<a href="<?= site_url($locale . '/admin') ?>" class="btn btn-primary" role="button"><?= lang('AppFrontend.menu.administration') ?></a>
		</div>
	</div>
</nav>

