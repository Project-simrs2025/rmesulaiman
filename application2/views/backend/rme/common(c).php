<style>
	@media print {
		table {
			width: 100% !important;
			/* Ensure the table uses the full page width */
			table-layout: fixed;
			/* Prevent columns from expanding */
		}

		td,
		th {
			word-wrap: break-word;
			/* Allow text to wrap within cells */
			overflow-wrap: break-word;
			/* Ensure long words break */
		}

		body * {
			visibility: hidden;
		}

		#printableDiv,
		#printableDiv * {
			visibility: visible;
		}

		#printableDiv {
			position: absolute;
			left: 0;
			top: 0;
		}
	}

	.arrow {
		font-size: 30px;
		cursor: pointer;
		color: #435ebe;
	}

	.arrow:hover {
		color: #b02a37;
	}
</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- style kotak hijau => custom-checkbox-success -->
<!-- style kotak merah => custom-checkbox-danger -->
<style>
	/* Styling checkbox-success */
	.custom-checkbox-success {
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		width: 20px;
		height: 20px;
		border: 2px solid #28a745;
		border-radius: 5px;
		background-color: transparent;
		position: relative;
		cursor: pointer;
	}

	/* Mengubah warna saat checkbox dicentang */
	.custom-checkbox-success:checked {
		background-color: #28a745;
		border-color: #28a745;
	}

	/* Menambahkan ikon ceklis (checkmark) ketika checkbox dicentang */
	.custom-checkbox-success:checked::before {
		content: '\f00c';
		font-family: 'Font Awesome 5 Free';
		font-weight: 900;
		color: white;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		font-size: 14px;
	}

	/* Styling checkbox-danger */
	.custom-checkbox-danger {
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		width: 20px;
		height: 20px;
		border: 2px solid red;
		border-radius: 5px;
		background-color: transparent;
		position: relative;
		cursor: pointer;
	}

	/* Mengubah warna saat checkbox dicentang */
	.custom-checkbox-danger:checked {
		background-color: red;
		border-color: red;
	}

	/* Menambahkan ikon silang (x) ketika checkbox dicentang */
	.custom-checkbox-danger:checked::before {
		content: '\f00d';
		font-family: 'Font Awesome 5 Free';
		font-weight: 900;
		color: white;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		font-size: 14px;
	}
</style>


<div class="content-wrapper container" id="main-wrapper">
	<div class="page-content">
		<section id="input-validation">
			<div class="row">
				<div class="col-12 col-md-12 mb-2 float-end">
					<div class="d-flex justify-content-end gap-4 flex-row" id="footer">
						<button type="button" class="btn btn-danger" id="btnPrint" onclick="onDownload()">
							<span class="bi bi-save-fill"></span> <b class="ms-2"> Cetak</b>
						</button>
						<button type="button" class="btn btn-light kembali">
							<spabn class="bi bi-chevron-left"></spabn>
							<b class="ms-2"> Kembali</b>
						</button>

					</div>
				</div>

				<div class="card mt-4" id="printableDiv">
					<div class="card-content">
						<div class="card-body">
							<div class="row align-items-center kop">
								<div class="col-2 text-center">
									<img src="<?= $images; ?>" alt="Logo"
										class="w-50">
								</div>
								<div class="col-10" style="margin-left: -72px;">
									<div class="kop-title text-center">
										<?php echo $site_title; ?>
									</div>
									<div class="kop-subtitle text-center">
										<?php $newtext = wordwrap($lokasi, 70, "<br/>", false); ?>
										<?php echo $newtext; ?>
									</div>
								</div>
							</div>
							<hr>
							<h4 class="ms-5 text-end"><?php echo $namarm; ?></h4>
							<h2 class="text-center"><?php echo $title; ?></h2>
							<div class="row col-12">
								<div class="col-6">
									<?php
									if ($tipe == '1') {
										$arahlink = 'admission';
									} else {
										$arahlink = 'antrian';
									}
									?>
									<a class="text-left" rel="stylesheet" id="leftArrow"
										href="<?= site_url() . "/backend/" . $arahlink . "/lihat/" . $leftData; ?>">
										<span class="bi bi-chevron-left arrow"></span>
									</a>
								</div>
								<div class="col-6 text-end">
									<a class="text-center" rel="stylesheet" id="rightArrow"
										href="<?= site_url() . "/backend/" . $arahlink . "/lihat/" . $rightData; ?>">
										<span class="bi bi-chevron-right arrow"></span>
									</a>
								</div>
							</div>
							<form id="genericForm" class="container mt-5" onsubmit="onSubmit(event)">
								<input type="hidden" name="id">
								<?php $this->load->view('backend/rme/v_' . $link, $data); ?>
								<!-- RM IMPLEMENTATION -->
								<button id="btnSubmit" type="submit"
									class="btn ps-4 pe-4 btn-primary mt-5 mb-5 float-end"><?= $btn_submit; ?>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<button onclick="topFunction()" class="btn btn-success" id="myBtn" title="Go to top"><i
			class="bi bi-arrow-up-circle-fill"></i> Scroll to Top
	</button>
	<!------- FOOTER --------->
	<?php $this->load->view("backend/_partials/footer.php") ?>
	<!------- FOOTER --------->
</div>
</div>


<!------- TOASTIFY JS --------->
<?php $this->load->view("backend/_partials/toastify.php") ?>
<!------- TOASTIFY JS --------->

<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

<script language="JavaScript" type="application/javascript"
	src="<?php echo base_url() . 'assets/extensions/summernote/summernote-lite.min.js' ?>"></script>


<script type="application/javascript">
	let table;
	let csfrData = {};
	let error = false;


	csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
																			$this->security->get_csrf_hash(); ?>';
	$.ajaxSetup({
		data: csfrData
	});

	function onSubmit(event) {
		event.preventDefault();

		const csrfTokenName = "<?= $this->security->get_csrf_token_name(); ?>";
		const csrfTokenValue = "<?= $this->security->get_csrf_hash(); ?>";

		const form = document.getElementById("genericForm");
		const formData = new FormData(form);

		let payload = {
			id_kunjungan: '<?= $id_kunjungan; ?>',
			id_pasien: '<?= $id_pasien; ?>',
			nama_berkas: '<?= $link; ?>',
		};


		payload[csrfTokenName] = csrfTokenValue

		const arrayFields = {};
		const nonArrayFields = {};
		const imageDrawerFields = {}; // Store fields related to `image_drawer`

		formData.forEach((value, key) => {
			if (key.endsWith("[]")) {
				const fieldName = key.slice(0, -2);
				if (!arrayFields[fieldName]) {
					arrayFields[fieldName] = [];
				}
				arrayFields[fieldName].push(value);
			} else if (key.startsWith("image_drawer_")) {
				const fieldName = key.replace("image_drawer_", "");
				imageDrawerFields[fieldName] = value;
			} else {
				nonArrayFields[key] = value;
			}
		});

		payload = {
			...payload,
			data: {
				...arrayFields,
				...nonArrayFields,
				image_drawer: imageDrawerFields, // Nest `image_drawer` values inside
			}
		};

		console.log(payload);
		addAPI(payload);
	}

	function addAPI(data) {
		let url;

		<?php
		if ($tipe == '1') {
			$arahlink = 'admission';
		} else {
			$arahlink = 'antrian';
		}
		?>
		url = "<?php echo site_url('backend/' . $arahlink . '/onSubmitNathan') ?>";

		$.ajax({
			type: "POST",
			url,
			data,
			dataType: "json",
			success: (data) => {
				console.log(data)
				if (!data.status) {
					Object.keys(data.errors).map(v => {
						$('[name="' + v + '"]').addClass('has-error');
						if (!$('[name="' + v + '"]').next().is('b')) {
							$('[name="' + v + '"]').parent().append(`<b id="${v}" class="text-danger">${data.errors[v]}</>`)
						}
					})
					return
				}

				$('#genericForm')[0].reset();
				const siteUrl = '<?php echo site_url(); ?>';
				const idKunjungan = '<?php echo $id_kunjungan; ?>';
				console.log(idKunjungan)
				$('#btnSubmit').attr('disabled', false);
				var tipe = '<?php echo $tipe; ?>';
				if (tipe == '1') {
					var arahlink = 'admission';
				} else {
					var arahlink = 'antrian';
				}
				window.location.href = siteUrl + "backend/" + arahlink + "/get_data/" + idKunjungan;
			},
			error: (err) => {
				const {
					statusText,
					status
				} = err
				console.log(`${statusText} ${status}`)
			}
		});
	}

	function onDownload() {
		window.print();
	}

	// function onDownload(){
	// 	const doc = new jsPDF();
	// 	const element = document.getElementById('printableDiv');

	// 	doc.html(element, {
	// 		callback: function(doc) {
	// 			doc.save('document.pdf');
	// 		}
	// 	});
	// }

	$("input").keydown(function() {
		$(this).removeClass('has-error');
		// check if next element is b
		if ($(this).next().is('b')) {
			$(this).next().remove();
		}
	});


	// SCROLL TO TOP
	let mybutton = document.getElementById("myBtn");
	window.onscroll = function() {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}


	// SCROLL TO TOP
	$('#footer').on('click', '.kembali', function() {
		var id_kunjungan = '<?php echo $id_kunjungan; ?>';
		var tipe = '<?php echo $tipe; ?>';
		if (tipe == '1') {
			var arahlink = 'admission';
		} else {
			var arahlink = 'antrian';
		}
		var site_url = '<?php echo site_url(); ?>';
		window.location.href = site_url + "backend/" + arahlink + "/get_data/" + id_kunjungan;
	});

	function onLihat() {


		$("#btnPrint").show()
		$("form button").each(function() {
			$(this).hide()
		})
		$("#add_button").each(function() {
			$(this).hide()
		})
		$("#delete_button").each(function() {
			$(this).hide()
		})
		$("#btnSubmit").each(function() {
			$(this).hide()
		})
		$("form input").each(function() {
			$(this).attr('disabled', true)
		})
		$("form textarea").each(function() {
			$(this).attr('disabled', true)
		})
		$("form #diagnosa").each(function() {
			$(this).attr('disabled', true)
		})

	}

	$(document).ready(function() {
		const leftData = "<?= $leftData; ?>"
		const rightData = "<?= $rightData; ?>"
		if (!leftData) {
			$('#leftArrow').hide()
		}
		if (!rightData) {
			$('#rightArrow').hide()
		}
		$("#btnPrint").hide()

		const btnSubmit = "<?= $btn_submit; ?>"
		if (!btnSubmit)
			onLihat()

		const globalData = <?= $global_data; ?>;
		delete globalData.diagnosa
		delete globalData.id;

		Object.keys(globalData).map(v => {
			$('[name="' + v + '"]').val(globalData[v])
			$('[name="' + v + '"]').attr('disabled', true)
		})
		console.log("GLOBAL DATA: ", globalData)

		const id = '<?= $id; ?>'
		const rawFormData = '<?= $formData; ?>'

		if (!rawFormData && !id)
			return

		const formData = JSON.parse(rawFormData.replace(/\n/g, "\\n"))
		formData.id = id

		buildEditForm(formData)

		document.getElementById("main-wrapper").scrollIntoView({
			behavior: "smooth",
			block: "start"
		});
	});


	function callMarkerManager() {
		new MarkerManager(".marker-image");
	}

	function buildEditForm(data) {
		console.log("DATA EDIT", data)
		const form = document.getElementById("genericForm");
		const dataCommon = new Map();
		for (const key in data) {

			if (Array.isArray(data[key]) || typeof data[key] === "object") {
				dataCommon.set(key, data[key])
			}

			const input = form.querySelector(`[name="${key}"]`);
			if (input) {
				switch (input.getAttribute("type")) {
					case "checkbox":
						input.checked = data[key] === input.value;
						break;
					case "radio":
						const inputRadios = form.querySelectorAll(`[name="${key}"]`);
						for (const radio of inputRadios) {
							radio.checked = data[key] === radio.value;

						}
						break;
					case "select":
						console.log('SELECT CASE');
						const initialData = {
							id: data[key],
							text: data[key],
						}
						const option = new Option(initialData.text, initialData.id, true, true);
						// $('#diagnosa').append(option).trigger('change');
						$(`[name="${key}"]`).append(option).trigger('change');
						break;

					default:
						input.value = data[key];
						break;
				}
			}
		}
		cbCommon(dataCommon)
	}

	function populateFormFields(data, isCustom = true) {
		for (const [key, value] of data) {
			if (Array.isArray(value) && isCustom) {
				populateFormArrayFields(key, value);
				continue;
			}

			if (typeof value === 'object' && value !== null) {
				switch (key) {
					case 'image':
						Object.keys(value).map(v => {
							$(`[name="image_drawer_${v}"]`).val(JSON.stringify(value[v]));
						})
						break;

					default:
						break;
				}
			}
		}
	}

	function populateFormArrayFields(key, data) {
		const input = document.querySelectorAll(`[name="${key}[]"]`);

		if (input) {
			data.forEach((element, index) => {
				input[index].value = element;
			});
		}
	}

	function QRSignatureAPI(id, imageID) {
		const url = "<?= site_url('backend/admission/getQRTandaTanganKaryawan') ?>" + `/${id}`;

		$.ajax({
			type: "GET",
			url,
			dataType: "json",
			success: ({
				data
			}) => {
				const base = "<?= BASE_STORAGE; ?>"
				const fullPath = `${base}/${data}`
				$(`#${imageID}`).attr("src", fullPath);
			},
			error: (err) => {
				const {
					statusText,
					status
				} = err
				console.log(`${statusText} ${status}`)
			}
		});
	}
</script>
</body>

</html>