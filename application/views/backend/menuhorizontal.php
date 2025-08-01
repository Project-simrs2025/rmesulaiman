<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?> | <?php echo $site_title; ?></title>
	<link rel="shortcut icon" href="<?php echo $site_favicon ?>" type="image/x-icon" />
	<?php $this->load->view("backend/_partials/head.php") ?>
	<style>
		.__markerjs2_ {
			position: fixed !important;
			top: 50% !important;
			left: 50% !important;
			transform: translate(-50%, -50%) !important;
			margin: 0 !important;
			padding: 0 !important;
			border: 1px solid #ddd !important;
			border-radius: 4px !important;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5) !important;
			background-color: #fff !important;
			z-index: 1050 !important;
		}

		.__markerjs2_ .close:hover {
			opacity: 0.5;
		}



		.marker-image {
			width: 100%;
			height: 100%;
			transition: 0.3s ease;
		}

		[class*="__markerjs2__"][class*="toolbar"].marker-toolbar {
			padding: 38px 0;
		}

		.marker-toolbar {
			/*background-color: black;*/
			display: flex;
			align-items: center;
			justify-content: space-between;
			width: 100% !important;
			background-color: #f9fafb;
		}

		.marker-toolbar-button {
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			width: max-content !important;
			height: max-content !important;
		}

		.marker-toolbar-button svg {
			width: 24px;
			height: 24px;
			position: relative;
		}

		.marker-toolbar-active-button {
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			width: max-content !important;
			height: max-content !important;
		}

		.marker-toolbar-active-button svg {
			width: 24px;
			height: 24px;
			position: relative;
		}


		.marker-toolbar-button:hover {
			background: linear-gradient(to top, #f9fafb, #fde2e2);
		}

		.marker-toolbar-active-button {
			background: linear-gradient(to top, #fce7f3, #f9fafb, #f9fafb);
			color: #f472b6;
			fill: currentColor;
		}

		.marker-toolbar-overflow {
			background-color: #f9fafb;
		}

		.marker-toolbox {
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			/*position: relative;*/
			/*padding-bottom: 30px!important;*/
		}

		.marker-toolbox-button-row {
			background-color: #c2ddfb;
		}

		.marker-toolbox-panel-row {
			/*padding: 30vw;*/
			position: absolute;
			bottom: 20px;
			z-index: 999;
			background-color: rgba(255, 171, 215, 0.9);
			color: #f472b6;
			fill: currentColor;
		}

		.marker-toolbox-button {
			position: relative;
			width: max-content !important;
			height: max-content !important;
			background: linear-gradient(to top, #f9fafb, #f9fafb);
			color: #f9a8d4;
			fill: currentColor;
		}

		.marker-toolbox-button:hover {
			background: linear-gradient(to top, #f9fafb, #fde2e2);
		}

		.marker-toolbox-active-button {
			position: relative;
			background: linear-gradient(to bottom, #fce7f3, #f9fafb);
			color: #f472b6;
			fill: currentColor;
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			width: max-content !important;
			height: max-content !important;
		}

		.select2-container--default .select2-selection--single {
			white-space: normal !important;
			height: auto !important;
			display: flex;
			align-items: center;
			padding: 5px;
		}

		.select2-container--default .select2-selection--single .select2-selection__rendered {
			white-space: normal !important;
			word-break: break-word;
			overflow-wrap: break-word;
			display: block;
			line-height: 1.2;
		}

		.button-toolbar {
			background: red;
		}

		.marker-toolbar-button[data-action="close"] {
			display: none !important;
		}

		.image-container {
			position: relative;
			display: inline-block;
			width: 100%;
			/* atau ukuran tetap */
			max-width: 600px;
		}

		.image-container img {
			width: 100%;
			height: auto;
			display: block;
		}
	</style>
	<script src="https://unpkg.com/markerjs2/markerjs2.js"></script>
	<script src="https://unpkg.com/markerjs-live/markerjs-live.js"></script>
	<script>
		class MarkerManager {
			constructor(selector) {
				this.prevStates = new Map(); // Store states per image
				this.prevImages = new Map(); // Store previous images per inputName
				this.images = document.querySelectorAll(selector); // Select all matching images

				this.initialize();
			}

			initialize() {
				this.images.forEach(img => {
					const inputName = img.getAttribute("data-input-name");
					this.prevImages.set(inputName, img.src); // Store initial image state
					const currentState = document.querySelector(`#${inputName}`).value;
					if (currentState !== "null" && currentState !== "") {
						const state = JSON.parse(currentState);
						this.prevStates.set(inputName, state); // Store previous state

						const markerArea = new markerjs2.MarkerArea(img);
						markerArea.targetRoot = img;
						markerArea.addEventListener('render', (event) => {
							img.src = event.dataUrl; // Update image source when rendered
						});
						markerArea.renderState(state); // Restore previous state if available
					}
					img.addEventListener("click", () => this.showMarkerArea(img));
				});
			}

			resetState(img) {
				const inputName = img.getAttribute("data-input-name");
				const prevImage = this.prevImages.get(inputName);
				img.src = prevImage;
				const id = img.getAttribute("data-input-name");

				document.getElementById(id).value = ""; // Clear state input
			}

		showMarkerArea(target) {
				const markerModal = document.querySelector('.__markerjs2_');
				if (markerModal) {
					return; // Jangan buka dua kali
				}

				const inputName = target.getAttribute("data-input-name");

				this.resetState(target); // Reset gambar ke original

				// Buat clone dari gambar
				const clone = target.cloneNode(true);
				clone.removeAttribute("id"); // hindari duplikat ID

				// Atur clone sebagai gambar overlay besar
				clone.style.position = "fixed";
				clone.style.top = "50%";
				clone.style.left = "50%";
				clone.style.transform = "translate(-50%, -50%)";
				clone.style.zIndex = "0";

				// ✅ Pengecualian: jika ID-nya "setting_img", gunakan ukuran aslinya
				if (target.id === "setting_img") {
					clone.style.width = target.style.width || "auto";
					clone.style.height = target.style.height || "500px";
				} else {
					clone.style.width = "525px";
					clone.style.height = "auto";
				}

				clone.style.boxShadow = "0 0 20px rgba(0,0,0,0.3)";
				clone.style.cursor = "default";

				// Masukkan clone ke body
				document.body.appendChild(clone);

				// Inisialisasi marker pada clone
				const markerArea = new markerjs2.MarkerArea(clone);
				markerArea.displayMode = 'inline'; // edit langsung di elemen

				// Styling markerjs2 UI
				markerArea.uiStyleSettings.toolbarStyleColorsClassName = 'marker-toolbar';
				markerArea.uiStyleSettings.toolbarButtonStyleColorsClassName = 'marker-toolbar-button';
				markerArea.uiStyleSettings.toolbarActiveButtonStyleColorsClassName = 'marker-toolbar-active-button';
				markerArea.uiStyleSettings.toolbarOverflowBlockStyleColorsClassName = "marker-toolbar-overflow";
				markerArea.uiStyleSettings.toolboxStyleColorsClassName = 'marker-toolbox';
				markerArea.uiStyleSettings.toolboxButtonRowStyleColorsClassName = 'marker-toolbox-button-row';
				markerArea.uiStyleSettings.toolboxPanelRowStyleColorsClassName = 'marker-toolbox-panel-row';
				markerArea.uiStyleSettings.toolboxButtonStyleColorsClassName = 'marker-toolbox-button';
				markerArea.uiStyleSettings.toolboxActiveButtonStyleColorsClassName = 'marker-toolbox-active-button';

				// Event ketika rendering selesai
				markerArea.addEventListener("render", (event) => {
					target.src = event.dataUrl;
					this.prevStates.set(inputName, event.state);
					clone.remove(); // Hapus overlay
				});

				// Event ketika marker ditutup
				markerArea.addEventListener("close", () => {
					document.getElementById(inputName).value = JSON.stringify(this.prevStates.get(inputName) || {});
					clone.remove(); // Hapus overlay
				});

				markerArea.show();

				// Restore state jika sebelumnya sudah ada
				if (this.prevStates.has(inputName)) {
					markerArea.restoreState(this.prevStates.get(inputName));
				}
			}

		}
	</script>
	<style>
		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			cursor: pointer;
		}
	</style>
</head>

<body class="relative">

	<div id="app" class="relative">
		<div class="layout-horizontal">
			<header class="mb-5">
				<div class="header-top">
					<div class="container">
						<a href="<?php echo site_url('backend/admission'); ?>">
							<div class="user-dropdown d-flex align-items-center dropend">
								<div>
									<img src="<?= $images; ?>" class="rounded-2" style="width: 50px;">
								</div>
								<div class="text">
									<h5>&nbsp;<?php echo $site_title; ?></h5>
								</div>
							</div>
						</a>

						<div class="header-top-right">

							<div class="dropdown">
								<a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
									<div class="avatar avatar-md2">
										<img src="<?php echo base_url() . 'assets/images/profilusers/user_blank.webp' ?>">
									</div>
									<div class="text">
										<h6 class="user-dropdown-name"><?php echo $this->session->userdata('name'); ?></h6>


										<?php if ($this->session->userdata('level') == "10"): ?>
											<p class="user-dropdown-status text-sm text-muted">Administrator</p>
										<?php elseif ($this->session->userdata('level') == "13"): ?>
											<p class="user-dropdown-status text-sm text-muted">Perawat</p>
										<?php elseif ($this->session->userdata('level') == "5"): ?>
											<p class="user-dropdown-status text-sm text-muted">Dokter</p>
										<?php else: ?>
											<p class="mb-0 text-sm text-gray-600">Staff</p>
										<?php endif; ?>

									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">

									<li>
										<hr class="dropdown-divider">
									</li>

									<li><a class="dropdown-item" href="<?php echo site_url('logout'); ?>"><i
												class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
									</li>

								</ul>
							</div>

							<!-- Burger button responsive -->
							<a href="#" class="burger-btn d-block d-xl-none">
								<i class="bi bi-justify fs-3"></i>
							</a>
						</div>
					</div>
				</div>
				<nav class="main-navbar">
					<div class="container">
						<ul>
							
								<li class="menu-item <?php echo $this->uri->segment(2) == 'admission' ? 'active' : '' ?>">
									<a href="<?php echo site_url('backend/admission'); ?>" class='menu-link'>
										<i class="bi bi-file-earmark-medical-fill"></i>
										<span>Admission</span>
									</a>
								</li>
								<li class="menu-item <?php echo $this->uri->segment(2) == 'antrian' ? 'active' : '' ?>">
									<a href="<?php echo site_url('backend/antrian'); ?>" class='menu-link'>
										<i class="bi bi-file-earmark-medical-fill"></i>
										<span>Antrian Departemen</span>
									</a>
								</li>
								<li class="menu-item <?php echo $this->uri->segment(2) == 'data_pasien' ? 'active' : '' ?>">
									<a href="<?php echo site_url('backend/data_pasien'); ?>" class='menu-link'>
										<i class="bi bi-file-earmark-medical-fill"></i>
										<span>Data Pasien</span>
									</a>
								</li>
								<li class="menu-item <?php echo $this->uri->segment(2) == 'data_klaim' ? 'active' : '' ?>">
									<a href="<?php echo site_url('backend/data_klaim'); ?>" class='menu-link'>
										<i class="bi bi-file-earmark-medical-fill"></i>
										<span>Data Klaim</span>
									</a>
								</li>
							<?php if ($this->session->userdata('level') == '10'): ?>
								
								<li class="menu-item <?php echo $this->uri->segment(2) == 'menu' ? 'active' : ''
														?>">
									<a href="<?php echo site_url('backend/menu');
												?>" class='menu-link'>
										<i class="bi bi-grid-1x2-fill"></i>
										<span>Menu RME</span>
									</a>
								</li>
								<li class="menu-item <?php echo $this->uri->segment(2) == 'konsumen' ? 'active' : ''
														?>">
									<a href="<?php echo site_url('backend/konsumen');
												?>" class='menu-link'>
										<i class="bi bi-grid-1x2-fill"></i>
										<span>QR Code</span>
									</a>
								</li>
								<li class="menu-item <?php echo $this->uri->segment(2) == 'antrians' ? 'active' : ''
														?>">
									<a href="<?php echo site_url('backend/antrians');
												?>" class='menu-link'>
										<i class="bi bi-grid-1x2-fill"></i>
										<span>Antrian Obok</span>
									</a>
								</li>
							<?php else: ?>
								
							<?php endif; ?>


							<li class="menu-item">
								<a href="<?php echo site_url('logout'); ?>" class='menu-link'>
									<i class="bi bi-arrow-left"></i>
									<span>Logout</span>
								</a>
							</li>



						</ul>
					</div>
				</nav>

			</header>


		</div>