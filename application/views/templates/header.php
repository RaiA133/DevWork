<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $judul; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= base_url(); ?>node_modules/hamburgers/dist/hamburgers.css">

	<link rel="stylesheet" href="<?= base_url(); ?>node_modules/atropos/atropos.css" />

	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/113762dcd8.js" crossorigin="anonymous"></script>

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

	<style>
		body {
			animation: fadeInAnimation ease 0.5s;
			animation-iteration-count: 1;
			animation-fill-mode: forwards;
		}

		@keyframes fadeInAnimation {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		body {
			background: #f0f0f0;
		}

		.side-nav {
			position: fixed;
			background: white;
			height: 100%;
		}

		.side-nav,
		.collapse {
			z-index: 100;
		}

		.putar {
			position: absolute;
			margin-top: 130px;
			margin-left: 30px;
			border: 0px solid red;
			width: 330px;
			height: 30px;
			transform-origin: left top;
			transform: rotate(-90deg) translateX(-100%);
		}

		.bulat {
			margin: 0 20px;
			opacity: .7;
			border: 0px solid red;
			position: relative;
		}

		.sosmed {
			color: black;
		}

		.login-reg-btn {
			margin-top: -50px;
			margin-bottom: 30px;
		}

		.pesan {
			z-index: 100;
			margin-top: 470px;
			margin-left: 318px;
			width: 327px;
			text-align: center;
		}

		.footer {
			margin-left: -100px;
		}

		.btn-ungu,
		#tab-login,
		#tab-register {
			color: #f0f0f0;
			background: #712CF9;
			font-weight: bold;
			--bs-btn-font-weight: 600;
			--bs-btn-color: var(--bs-white);
			--bs-btn-bg: var(--bd-violet);
			--bs-btn-border-color: var(--bd-violet);
			--bs-btn-border-radius: .5rem;
			--bs-btn-hover-color: var(--bs-white);
			--bs-btn-hover-bg: #6528e0;
			--bs-btn-hover-border-color: #6528e0;
			--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
			--bs-btn-active-color: var(--bs-btn-hover-color);
			--bs-btn-active-bg: #5a23c8;
			--bs-btn-active-border-color: #5a23c8;
		}

		.bayangan {
			box-shadow:
				5.2px 8px 5px rgba(0, 0, 0, 0.11),
				12.4px 19.3px 12px rgba(0, 0, 0, 0.158),
				23.4px 36.3px 22.5px rgba(0, 0, 0, 0.195),
				41.8px 64.8px 40.2px rgba(0, 0, 0, 0.232),
				78.1px 121.2px 75.2px rgba(0, 0, 0, 0.28),
				187px 290px 180px rgba(0, 0, 0, 0.39);
		}

		.bayangan-buku {
			box-shadow:
				1.8px 0.6px 1.3px rgba(0, 0, 0, 0.037),
				4.4px 1.4px 3.1px rgba(0, 0, 0, 0.053),
				8.3px 2.6px 5.8px rgba(0, 0, 0, 0.065),
				14.7px 4.7px 10.3px rgba(0, 0, 0, 0.077),
				27.6px 8.8px 19.2px rgba(0, 0, 0, 0.093),
				66px 21px 46px rgba(0, 0, 0, 0.13);
		}

		.zoom:hover {
			transform: scale(1.05);
			transition: .1s ease-in-out;
		}
	</style>
</head>

<body>
	<!-- NAV SIDE BAR BUTTON -->
	<!-- Default dropend button -->
	<!-- <nav class="posisiton-relative">
		<div class="side-nav">
			<div class="box-nav">
				<div class="dropend">

					<button class="hamburger hamburger--slider-r p-4 animated fadeInLeft not-active" aria-label="Menu" aria-controls="navigation" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false" data-toggle="offcanvas">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>

					<ul class="dropdown-menu m-2 fade">
						<li>
							<h6 class=" dropdown-header fs-4">Navbar</h6>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item fs-5" href="<?= base_url(); ?>">Home</a></li>
						<li><a class="dropdown-item fs-5" href="<?= base_url(); ?>Auth">Login & Register</a></li>
					</ul>
				</div>
				<div class="putar">
					<a class="sosmed mr-3" target="_black" href="https://github.com/RaiA133">Github</a>
					<i class="bulat bi bi-circle"></i>
					<a class="sosmed mr-3" target="_black" href="https://www.facebook.com/rai.aswajjillah/">Facebook</a>
					<i class="bulat bi bi-circle"></i>
					<a class="sosmed" target="_black" href="https://www.instagram.com/rai___a/">Instagram</a>
				</div>
			</div>
		</div>
	</nav> -->