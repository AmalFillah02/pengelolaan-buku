<?php 
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo title('Login') ?></title>

	<!-- Font & Bootstrap -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<link href="<?php echo base_url('dashboard-template/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('dashboard-template/css/sb-admin.css') ?>" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background: linear-gradient(135deg, #4c6ef5, #15aabf);
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.card-login {
			width: 100%;
			max-width: 400px;
			border: none;
			border-radius: 16px;
			box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
			overflow: hidden;
		}

		.card-header {
			background-color: #4c6ef5;
			color: white;
			font-weight: bold;
			text-align: center;
		}

		.card-body {
			background-color: #ffffff;
			padding: 30px;
		}

		.btn-primary {
			background-color: #4c6ef5;
			border: none;
		}

		.btn-primary:hover {
			background-color: #3b5bdb;
		}

		.alert {
			font-size: 14px;
		}

		a.d-block {
			font-size: 13px;
			color: #4c6ef5;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="card card-login mx-auto">
			<div class="card-header">Login</div>
			<div class="card-body">
				<?php if(check_flash_message('sukses')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong><?php echo ucfirst($_SESSION['flash_message']['tipe']) ?>!</strong> <?php echo get_flash_message() ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php elseif(check_flash_message('gagal')) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong><?php echo ucfirst($_SESSION['flash_message']['tipe']) ?>!</strong> <?php echo get_flash_message() ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				
				<form action="<?php echo base_url('proses_login.php') ?>" method="POST">
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" autocomplete="off" required class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Password" autocomplete="off" required class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" name="login" class="btn btn-primary btn-block">
							<i class="fas fa-sign-in-alt"></i> Login
						</button>
					</div>
				</form>

				<div class="text-center">
					<a class="d-block small mt-3" href="register.php">Register an Account</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="<?php echo base_url('dashboard-template/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
</body>
</html>
