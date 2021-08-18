<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<?= $this->include('pages/head_css') ?>
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="index.html" class="logo">
					<img src="<?= base_url('assets/img/logo.svg') ?>" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<?= $this->include('pages/sidebar') ?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<?= $this->include('pages/content') ?>
			</div>
			<?= $this->include('pages/footer') ?>
		</div>

		<?= $this->include('pages/modal') ?>
		<?= $this->include('pages/loading') ?>
	</div>
	<?= $this->include('pages/foot_js') ?>
	<?= $this->include('pages/navigation') ?>
</body>

</html>