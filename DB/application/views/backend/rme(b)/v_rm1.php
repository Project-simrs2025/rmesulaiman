<!-- BATAS GANTI -->


<div class="row">
	<table class="table table-bordered mt-2 border-dark">
		<tr>
			<td colspan="3" rowspan="4" class="text-center"><?php echo $title; ?></td>
		</tr>
		<tr>
			<td style="font-size:16px">
				<?php
				// Daftar input field
				$dataform1 = array(
					array('nama' => "Nama Pasien", 'name' => "nama_pasien", 'status' => 'disabled'),
					array('nama' => "NIK", 'name' => "nik", 'status' => 'disabled'),
					array('nama' => "Pendidikan", 'name' => "pendidikan_terakhir", 'status' => 'disabled'),
					array('nama' => "Pekerjaan", 'name' => "nama_pekerjaan", 'status' => 'disabled'),
					array('nama' => "No. RM", 'name' => "no_rm", 'status' => 'disabled'),
				);

				foreach ($dataform1 as $a) {

					echo "<div class='form-group'>";
					echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
					echo "<input type='text' class='form-control border-dark' name='{$a['name']}' value='{$a['values']}' {$a['status']}>";
					echo "</div>";
				}
				?>

			</td>

		</tr>
		<tr>
			<td colspan="1" style="font-size: 16px;">

				<?php
				// Daftar input field
				$dataform2 = array(
					array('nama' => "Tanggal Lahir/Umur", 'name' => "tgl_lahir", 'values' => "$tgl_lahir / $umur", 'status' => "disabled"),
					array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'status' => "disabled"),
					array('nama' => "Tanggal Masuk", 'name' => "tgl_admit2", 'values' => "$tgl_admit2", 'status' => "disabled"),
					array('nama' => "Nama DPJP", 'name' => "nama_dokter", 'status' => "disabled"),
					array('nama' => "Nama PPJP", 'name' => "ppjp"),
					array('nama' => "Nilai Pribadi", 'name' => "np"),
				);

				foreach ($dataform2 as $b) {

					echo "<div class='form-group'>";
					echo "<label for=''>{$b['nama']} :</label>";
					echo "<input type='text' class='form-control border-dark' name='{$b['name']}' value='{$b['values']}' {$b['status']}>";
					echo "</div>";
				}
				?>
			</td>
		</tr>
		<tr>
			<td colspan="1" rowspan="2" class="text-center">(tempelkan stiker identitas jika tersedia)</td>
		</tr>
	</table>
</div>

<div class="row">
	<table class="table table-bordered border-dark">
		<thead>
			<tr>
				<td colspan="6">
					<span class="float-end">*coret yang tidak perlu</span>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td rowspan="5" class="vertical-text" style="width: 30px;">Perawat</td>
			</tr>
			<tr>
				<td><span class="fw-bold">Alergi</span></td>
				<td colspan="4" class="text-start">
					<div class="d-flex gap-3 align-items-center">
						<div class="d-flex gap-2">
							<input type="radio" id="tidakAlergi" name="pilihAlergi" class="custom-checkbox-danger" onchange="toggleInput()" checked>
							<label for="tidakAlergi">Tidak</label>
						</div>
						<div class="d-flex gap-2 w-100 align-items-center">
							<input type="radio" class="custom-checkbox-success" id="yaAlergi" name="pilihAlergi" onchange="toggleInput()">
							<label for="yaAlergi" class="col-2">Ya, Sebutkan</label>

							<input type="text" id="inputAlergi" class="form-control w-100 border-dark" name="input_alergi" readonly>
						</div>
					</div>
				</td>
				</td>
			</tr>
			<td rowspan="2"><span class="fw-bold">Skrining</span></td>
			<td colspan="4"><span class="fw-bold me-2">Nyeri</span> Skor Nyeri metode VAS / Wong Baker / CPOT* = <input
					type="text" class="form-control border-dark" name="skor_metode_vas"></td>

			<?php
			// Data untuk checkbox kategori IMT
			$imtCategories = [
				['label' => "Underweight (< 18.5)", 'name' => 'underweight'],
				['label' => "Normal (18.5 - 24.9)", 'name' => 'normal'],
				['label' => "Overweight (25 - 29.9)", 'name' => 'overweight'],
				['label' => "Obese (≥ 30)", 'name' => 'Obese'],
			];
			// data skrinning
			$skrinning = [
				["label" => "TB :", "unit" => "cm", "name" => 'tb'],
				["label" => "BB :", "unit" => "Kg/*", "name" => 'bb'],
				["label" => "IMT :", "unit" => "kg/m²", "name" => 'imt']
			];
			?>

			<tr>
				<td colspan="2" class="col-7">
					<!-- Skrining -->
					<div>
						<span class="fw-bold me-2">Gizi</span>
						<div class="d-flex align-items-center gap-1">
							<?php foreach ($skrinning as $s): ?>

								<label for="" class="ms-2 col-1"><?= $s["label"]; ?></label>
								<input type="text" class="form-control  border-dark" maxlength="3"
									name="<?= $s["name"]; ?>"> <?= $s["unit"]; ?>

							<?php endforeach; ?>
						</div>
					</div>
					<!-- Row 2 -->
					<div class="d-flex mt-2 align-items-center">
						<label for="">Indeks Massa Tubuh (IMT):</label>
						<input type="text" class="form-control w-25 mx-1 border-dark" name="indeks_massa"> kg/m²
					</div>
				</td>
				<td colspan="2" class="col-5">
					<?php foreach (array_chunk($imtCategories, 2) as $row): ?>
						<div class="d-flex gap-2 align-items-center">
							<?php foreach ($row as $category): ?>
								<input type="radio" class="custom-checkbox-success" name="radio_skrinning"
									value="<?= $category['name'] ?>"> <?= $category['label']; ?>
							<?php endforeach; ?>
						</div>
					<?php endforeach; ?>
				</td>
			</tr>
			<?php
			$tandaVital = [
				["label" => "TD", "unit" => "mmHg", 'name' => 'item_td'],
				["label" => "Nadi", "unit" => "x/menit", 'name' => 'item_nadi'],
				["label" => "RR", "unit" => "x/menit", 'name' => 'item_rr'],
				["label" => "Suhu", "unit" => "°C", 'name' => 'item_suhu']
			];
			?>

			<tr>
				<td><span class="fw-bold">Tanda Vital</span></td>
				<td colspan="4" class="text-start">

					<div class="d-flex gap-3">
						<?php foreach ($tandaVital as $item): ?>
							<div class="d-flex align-items-center gap-1">
								<?= $item['label'] ?>:
								<input type="text" class="w-50 form-control border-dark"
									name="<?= $item['name']; ?>"><span><?= $item['unit']; ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				</td>
			</tr>

			<td rowspan="6" class="vertical-text">Skrining</td>
			<td colspan="5">
				<span class="fw-bold">Riwayat Penyakit </span>( diisi oleh dokter)</span>
				<div class="d-flex align-items-center justify-content-between my-2">
					<div class="d-flex gap-2 ">
						<p class="col-6">Riwayat didapatkan dari :</p>
						<div class="col-4">
							<div class="d-flex align-items-center gap-2">
								<input type="radio" id="autoanamnesis" class="custom-checkbox-success" name="riwayat_auto_allo"
									value="autonamnesis">
								<label for="autoanamnesis">Autoanamnesis</label>
							</div>
						</div>
						<div class="col-4">
							<div class="d-flex align-items-center gap-2">
								<input type="radio" id="alloanamnesis" class="custom-checkbox-success" name="riwayat_auto_allo"
									value="aulloanamnesis">
								<label for="alloanamnesis">Alloanamnesis</label>
							</div>
						</div>
					</div>
					<div class="col-4">
						<label for="">Hubungan Dengan Pasien</label>
						<input type="text" name="hub_dengan_pasien" class="border-dark form-control ">
					</div>
				</div>
			</td>
			<tr>
				<td colspan="5"><span class="fw-bold">Riwayat Imunisasi </span>( diisi hanya pada pasien anak)</span>
					<div class="d-flex gap-2 my-2">
						<div class="col-3 d-flex align-items-center gap-2">
							<input type="radio" id="lengkap" class="custom-checkbox-success" name="riwayat_imun"
								value="lengkap">
							<label for="lengkap">Lengkap</label>
						</div>
						<div class="col-3 d-flex align-items-center gap-2">
							<input type="radio" id="tidak_lengkap" class="custom-checkbox-success" name="riwayat_imun"
								value="tidak_lengkap">
							<label for="tidak_lengkap">Tidak Lengkap</label>
						</div>
						<div class="col-3 d-flex align-items-center gap-2">
							<input type="radio" id="tidak pernah" class="custom-checkbox-success" value="tidak_pernah"
								name="riwayat_imun">
							<label for="tidak pernah">Tidak pernah</label>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<span class="fw-bold">Riwayat Pekerjaan </span>( apakah berhubungan dengan zat- zat berbahaya )</span>
					<div class="my-2">
						<div class="d-flex align-items-center gap-2">
							<div class="col-3 d-flex align-items-center gap-2">
								<input type="radio" id="tidakRiwayatPekerjaan" name="pilihRiwayatPekerjaan"
									value="tidak_pekerjaan" class="custom-checkbox-danger" onchange="togglePekerjaanInput()" checked>
								<label for="tidakRiwayatPekerjaan"> Tidak</label>
							</div>

							<div class="d-flex gap-2 w-100 align-items-center">
								<input type="radio" class="custom-checkbox-success" id="yaRiwayatPekerjaan"
									name="pilihRiwayatPekerjaan" value="sebutkan_pekerjaan" onchange="togglePekerjaanInput()">
								<label for="yaRiwayatPekerjaan" class="col-2">Ya, Sebutkan</label>
								<input type="text" id="input_ya_pekerjaan" class="form-control border-dark" name="input_ya_pekerjaan" readonly>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<div><span class="fw-bold">Keluhan Utama :</span></div>
					<div>Riwayat Penyakit
						<label class="font-italic">
							(Lokasi,Onset dan Kronologis, Kualitas, Kuantitas, Faktor memperberat, Faktor memperingan,
							gejala penyerta)
						</label>
						<textarea name="keluhan_utama" id="" class="w-100 form-control border-dark my-2"></textarea>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<div class="d-flex align-items-center gap-2">
						<label for="obat" class="flex-shrink-0"><span class="fw-bold">Obat-obatan</span>
							yang sedang dikonsumsi dan/atau dibawa pasien saat ini :
						</label>
						<input type="text" id="obat" class="form-control border-dark" name="obat_obatan">
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<div class="d-flex align-items-center gap-2">
						<label for="pemeriksaan" class="flex-shrink-0"><span class="fw-bold">Pemeriksaan Penunjang</span>
							dan hasil yang sudah ada :
						</label>
						<input type="text" id="pemeriksaan" class="form-control border-dark" name="pemeriksa_penunjang">
					</div>

				</td>
			</tr>

			<td rowspan="3" class="vertical-text">Pemeriksaan Fisik</td>
			<td colspan="5">
				<div>
					<span class="fw-bold">Status General</span> ( diisi oleh dokter )
				</div>
				<div class="fw-bold my-2">Kondisi Umum</div>
				<div class="d-flex align-items-center">
					<?php
					// Daftar kondisi
					$kondisi = [
						"baik" => "Baik",
						"tampak_sesak" => "Tampak Sesak",
						"sesak" => "Sesak",
						"pucat" => "Pucat",
						"lemah" => "Lemah",
						"kejang" => "Kejang",
						"lainnya" => "Lainnya"
					];
					?>

					<div class="d-flex align-items-center gap-2 flex-wrap col-12">
						<?php foreach ($kondisi as $id => $label): ?>
							<div class="d-flex align-items-center gap-2 col-3">
								<input type="radio" id="<?= $id ?>" name="pilihKondisi" class="custom-checkbox-success"
									value="<?= $id; ?>" onchange="toggleKondisiInput()">
								<label for="<?= $id ?>"><?= $label ?></label>
							</div>
						<?php endforeach; ?>
						<input type="text" class="form-control border-dark" id="inputKondisi" name="inputKondisi" readonly>
					</div>
				</div>
			</td>
			<tr class="border-bottom-0">
				<td colspan="3"><span class="fw-bold">Jantung</span></td>
				<td colspan="2"><span class="fw-bold">Paru</span></td>
			</tr>
			<tr class="border-top-0">
				<!-- <td></td> -->
				<td colspan="3">
					<div class="row">
						<!-- Form Group Section -->

						<div class="col-md-8">
							<div class="form-group">
								<label for="">Inspeksi :</label>
								<input type="text" class="form-control border-dark" name="inpeksi">
							</div>
							<div class="form-group">
								<div class="my-2">Palpasi :</div>
								<div>
									<input type="radio" class="custom-checkbox-success" name="palpasi" value="ictuc_cordis" id="ictus">
									<label for="ictus">Ictus cordis</label>
									<div class="d-flex gap-2 align-items-center flex-wrap">
										<div class="d-flex col-3 gap-2 my-2">
											<input type="radio" class="custom-checkbox-success" name="palpasi" value="thrill" id="thrill">
											<label for="thrill">Thrill</label>
										</div>
										<div class="d-flex align-items-center gap-2 col-3">
											<input type="radio" class="custom-checkbox-success" name="palpasi" value="lain_lain" id="lain_palpasi" onchange="togglePalpasiInput()">
											<label for="lain_palpasi">Lain-lain</label>
										</div>
										<input type="text" id="inputLainPalpasi" class="form-control border-dark" name="inputPalpasi" readonly>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="">Perkusi :</label>
								<input type="text" class="form-control border-dark" name="perkusi">
							</div>
							<div class="form-group">
								<label for="">Auskultasi :</label>
								<div>
									<label for="">s1( ), s2( ), / (A2, P2)</label>
									<div class="d-flex align-items-center gap-2 mt-2">
										<div class="d-flex align-ites-center gap-1 col-4">
											<input type="radio" class="custom-checkbox-success" name="akultasi"
												value="gallop" id="gallop">
											<label for="gallop">Gallop</label>
										</div>
										<div class="d-flex align-items-center gap-1 col-4">
											<input type="radio" class="custom-checkbox-success" name="akultasi"
												value="bissing" id="bissing">
											<label for="bissing" class="flex-shirink-0">Bissing</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Image Section -->
						<div class="col-md-4 text-center d-flex">

							<img src="<?php echo base_url('assets2/rme/img/test1.png') ?>" alt="Heart Diagram"
								class="img-fluid">
						</div>
					</div>

				</td>
				<td colspan="2">
					<div class="row" style="height: 400px; width:430px;">
						<?php
						// Data untuk input inspeksi
						$inputs = [
							"Inspeksi" => "inpeksi_paru",
							"Palpasi" => "palpasi_paru",
							"Perkusi" => "perkusi_paru",
							"Auskultasi" => "auskultasi_paru"
						];
						?>

						<div class="col-md-8">
							<?php foreach ($inputs as $label => $name): ?>
								<div class="form-group">
									<label for=""><?= $label ?> :</label>
									<input type="text" class="form-control border-dark" name="<?= $name; ?>">
								</div>
							<?php endforeach; ?>
						</div>

						<!-- Image Section -->
						<div class="col-md-4 text-center d-flex">

							<img src="<?php echo base_url('assets2/rme/img/test4.png') ?>" alt="Heart Diagram" class="img-fluid">
						</div>
				</td>

			</tr>
			<tr>
				<td colspan="5">
					<div class="d-flex">
						<div>
							<span class="fw-bold">Status Lokalis</span> (di isi oleh dokter)
							<p>(Pemeriksaan keluhan saat ini)</p>
						</div>
						<div class="flex-grow-1" style="height: 400px;">
							<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/test6.png') ?>"
								style="max-width: 800px" data-input-name="image_drawer_state_image_10" />
							<input type="hidden" id="image_drawer_state_image_10" name="image_drawer_state_image_10"
								value="" />

						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<div class="">
						<span class="fw-bold">Resiko Jatuh/ Cedera Isi formulir Monitoring pencegahan jatuh </span><span>(di isi oleh perawat)</span>
						<div class="d-flex align-items-center gap-2 my-2">
							<div class="col-2 d-flex gap-2">
								<input type="radio" class="custom-checkbox-danger" id="tResiko_jatuh" name="Resiko_jatuh"
									value="tResiko_jatuh">
								<label for="tResiko_jatuh" class="me-2">Tidak</label>
							</div>
							<div class="d-flex align-items-center gap-2">
								<input type="radio" class="custom-checkbox-success" id="yResiko_jatuh" name="Resiko_jatuh"
									value="yResiko_jatuh">
								<label for="yResiko_jatuh">Ya, Jika ya, resiko jatuh warna kuning harus dipasang</label>
							</div>
						</div>
					</div>
					<div class="">
						<span class="fw-bold">Status Fungsional</span><span> (di isi oleh perawat)</span>
						<span class="fw-bold flex-shrink-0">Aktifitas dan mobilisasi : </span>
						<div class="d-flex gap-2 align-items-center">
							<div class="d-flex gap-2 col-2">
								<input type="radio" class="custom-checkbox-success" name="mobilisasi"
									id="mandiri_mobilisasi" value="mandiri_mobilisasi" onchange="toggleMobilisasiInput()">
								<label for="mandiri_mobilisasi" class="me-2">Mandiri</label>
							</div>
							<div class="d-flex align-items-center gap-2 w-100">
								<input type="radio" class="custom-checkbox-success" name="mobilisasi" id="perlu_mobilisasi"
									value="perlu_mobilisasi" onchange="toggleMobilisasiInput()">
								<div class="d-flex align-items-center w-100">
									<label for="perlu_mobilisasi" class="col-3">Perlu bantuan, sebutkan :</label>
									<input type="text" class="form-control border-dark" name="perluBantuan" id="perluBantuan" readonly>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-2 d-flex align-items-center">
						<label for="" class="flex-shrink-0 me-2">Alat bantu jalan, Sebutkan :</label>
						<input type="text" class="form-control border-dark" name="alat_bantuJalan">
					</div>
				</td>
			</tr>

			<tr>
				<td colspan="6">
					<span class="fw-bold">Status Psiko-sosial spritual</span>
					<span>(di isi oleh perawat)</span>
					<div class="mt-2">
						<h6 class="fw-bold mx-3">a. Status psikologi</h6>
					</div>
					<div class="mx-3 d-flex align-items-center gap-2 flex-wrap">
						<div class="d-flex align-items-center gap-2 col-2">
							<input type="radio" class="custom-checkbox-success" id="cemas" name="status_psikologi" value="psikologi_cemas">
							<label for="cemas">Cemas</label>
						</div>
						<div class="d-flex align-items-center gap-2 col-2">
							<input type="radio" class="custom-checkbox-success" name="status_psikologi" id="takut" value="psikologi_takut">
							<label for="takut">Takut</label>
						</div>
						<div class="d-flex align-items-center gap-2 col-2">
							<input type="radio" class="custom-checkbox-success" name="status_psikologi" id="marah" value="psikologi_marah">
							<label for="marah">Marah</label>
						</div>
						<div class="d-flex align-items-center gap-2 col-2">
							<input type="radio" class="custom-checkbox-success" name="status_psikologi" id="sedih" value="psikologi_sedih">
							<label for="sedih">Sedih</label>
						</div>
						<div class="d-flex align-items-center gap-2 col-2">
							<input type="radio" class="custom-checkbox-success" name="status_psikologi" id="kecenderungan" value="psikologi_bundir">
							<label for="kecenderungan" class="me-2">Kecenderungan Bunuh Diri</label>
						</div>
						<div class="d-flex align-items-center gap-2 col-3 w-100">
							<input type="radio" class="custom-checkbox-success" name="status_psikologi" value="lain_psikologi" id="lain_psikologi" onchange="togglePsikologiInput()">
							<div class="d-flex align-items-center gap-2 w-100">
								<label for="lain_psikologi" class="col-2">Lainnya, sebutkan</label>
								<input type="text" class="form-control border-dark" name="input_psikologi" id="input_psikologi" readonly>
							</div>
						</div>
					</div>

					<div class="mt-2">
						<h6 class="fw-bold mx-3">b. Status Mental</h6>
					</div>
					<div class="d-flex flex-column gap-2 mx-3">
						<div class="d-flex gap-2">
							<input type="radio" class="custom-checkbox-success" name="status_mental" value="sadar" id="sadar">
							<label for="sadar">Sadar dan orientasi baik</label>
						</div>
						<div class="d-flex align-items-center gap-2">
							<input type="radio" class="custom-checkbox-success" name="status_mental" id="ada_masalah" value="ada_masalah" onchange="toggleMasalahInput()">
							<div class="d-flex align-items-center w-100">
								<label for="ada_masalah" class="col-3">Ada Masalah perilaku, sebutkan :</label>
								<input type="text" class="form-control border-dark ms-2" name="masalah_input" id="masalah_input" readonly>
							</div>
						</div>
						<div class="d-flex align-items-center gap-2">
							<input type="radio" class="custom-checkbox-success" name="status_mental" value="perilaku_kekerasan" id="perilaku_kekerasan">
							<label for="perilaku_kekerasan">Perilaku kekerasan yang dialami pasien sebelumnya</label>
						</div>
					</div>


					<div class="mt-2 row">
						<h6 class="mx-3 fw-bold">c. Status Sosial</h6>
						<div class="mx-3 d-flex align-items-center gap-2">
							<span>Hubungan dengan anggota keluarga :</span>
							<input type="radio" class="custom-checkbox-success" name="hub_denganAnggota" id="hub_baik">
							<label for="hub_baik">baik</label>
							<input type="radio" class="custom-checkbox-danger" name="hub_denganAnggota" id="hub_tidak">
							<label for="hub_tidak">Tidak baik</label>
						</div>

						<div class="d-flex gap-2 align-items-center mx-3">
							<span class="col-3">Tempat Tinggal :</span>
							<div class="d-flex align-items-center gap-2">
								<input type="radio" class="custom-checkbox-success" name="ttinggal" id="tinggal_rumah" value="rumah">
								<label for="tinggal_rumah" class="me-2">Rumah</label>
							</div>
							<div class="d-flex align-items-center gap-2">
								<input type="radio" class="custom-checkbox-success" name="ttinggal" id="tinggal_apartemen" value="apartemen">
								<label for="tinggal_apartemen" class="me-2">Apartemen</label>
							</div>
							<div class="d-flex align-items-center gap-2">
								<input type="radio" class="custom-checkbox-success" name="ttinggal" id="tinggal_panti" value="panti">
								<label for="tinggal_panti" class="me-2">Panti</label>
							</div>
							<div class="d-flex align-items-center gap-1">
								<input type="radio" class="custom-checkbox-success" name="ttinggal" id="tinggal_lainnya" value="tinggal_lainnya" onchange="toggleTinggalInput()">
								<div class="d-flex align-items-center">
									<label for="tinggal_lainnya" class="me-2">Lainnya,</label>
									<input type="text" class="form-control border-dark" name="input_tinggal" id="input_tinggal" readonly>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<span class="mx-3 mb-3">Kerabat dekat yang bisa dihubungi :</span>
						<div class="mx-3 d-flex align-items-center">
							<div class="col-4 d-flex align-items-center">
								<label for="" class="flex-shrink-0">Nama :</label>
								<input type="text" class="form-control mx-3 border-dark" name="nama_kerabat">
							</div>
							<div class="col-4 d-flex align-items-center">
								<label for="" class="flex-shrink-0">Hubungan :</label>
								<input type="text" name="hub_kerabat" class="form-control mx-3 border-dark">
							</div>
							<div class="col-4 d-flex align-items-center">
								<label for="" class="flex-shrink-0">Telepon :</label>
								<input type="text" name="telp_kerabat" class="form-control mx-3 border-dark">
							</div>
						</div>
					</div>

					<div class="mt-2 row">
						<h6 class="fw-bold mx-3">d. Status Spritual</h6>
						<div class="mx-3 mb-2 d-flex align-items-center">
							<label for="" class="flex-shrink-0">Kegiatan keagamaan yang biasa dilakukan :</label>
							<input type="text" name="spritual_kegiatan" class="form-control mx-3 border-dark">
						</div>
						<div class="mx-3 mb-2 d-flex align-items-center">
							<label for="" class="flex-shrink-0">kegiatan spritual yang dibutuhkan selama perawatan :</label>
							<input type="text" class="form-control mx-3 border-dark" name="spritual_dibuthkan">
						</div>
					</div>

				</td>
			</tr>
			<tr>
				<td colspan="6">
					<span class="fw-bold">Diagnosis kerja / Diagnosis Banding</span><span> (Di isi oleh dokter)</span>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<span class="fw-bold">Intruksi Awal Dokter :</span>
					<div class="form-group">
						<textarea name="intruksi_diagnosis" id="" rows="7"
							class="w-100 form-control border-dark"></textarea>
					</div>
				</td>
			</tr>

			<tr>
				<td colspan="6">
					<span class="fw-bold">Diagnosa Keperawatan/ Kebidanan</span><span> ( di isi oleh perawat)</span>
					<?php
					// Data checkbox yang akan ditampilkan
					$checkboxes = [
						["name" => "gangguan_integritas_kulit", "label" => "Gangguan integritas kulit", "id" => "gangguan_integritas_kulit"],
						["name" => "nyeri", "label" => "Nyeri", "id" => "nyeri"],
						["name" => "gangguan_pola_tidur", "label" => "Gangguan Pola tidur", "id" => "gangguan_pola_tidur"],
						["name" => "gangguan_perfusi_jaringan", "label" => "Gangguan Perfusi Jaringan", "id" => "gangguan_perfusi_jaringan"],
						["name" => "penurunan_curah_jantung", "label" => "Penurunan Curah jantung", "id" => "penurunan_curah_jantung"],
						["name" => "hipetermia", "label" => "Hipetermia", "id" => "hipetermia"],
						["name" => "nutrisi_kurang", "label" => "Nutrisi kurang dari kebutuhan tubuh", "id" => "nutrisi_kurang"],
						["name" => "intoleransi_aktifitas", "label" => "Intoleransi aktifitas", "id" => "intoleransi_aktifitas"],
						["name" => "retensi_urin", "label" => "Retensi urin", "id" => "retensi_urin"],
						["name" => "konstipasi", "label" => "Konstipasi", "id" => "konstipasi"],
						["name" => "keefektifan_kebersihan", "label" => "Keefektifan kebersihan jalan nafas", "id" => "keefektifan_kebersihan"],
						["name" => "diarrhea", "label" => "Diare", "id" => "diarrhea"],
						["name" => "keefektifan_pertukaran", "label" => "Keefektifan pertukaran gas", "id" => "keefektifan_pertukaran"],
						["name" => "resiko_cidera", "label" => "Resiko cidera", "id" => "resiko_cidera"],
						["name" => "defisit_perawatan", "label" => "Defisit Perawatan diri", "id" => "defisit_perawatan"]
					];
					?>

					<div class="d-flex flex-wrap justify-content-between">
						<?php foreach ($checkboxes as $group): ?>
							<div class="col-6 d-flex gap-2 flex-column">
								<div class="checkbox-item">
									<input type="checkbox" class="custom-checkbox-success"
										name="<?php echo $group['name']; ?>" id="<?php echo $group['id']; ?>">
									<label for="<?php echo $group['id']; ?>"><?php echo $group['label']; ?></label>
								</div>
							</div>
						<?php endforeach; ?>
					</div>


				</td>
			</tr>
			<tr>
				<td colspan="6">
					<span class="fw-bold">Edukasi</span>
					<div>
						<textarea name="edukasi" id="" rows="6" class="form-control  border-dark w-100"></textarea>
					</div>
				</td>
			</tr>

		</tbody>
	</table>
</div>

<!-- table 3 -->
<div class="row">
	<table class="table table-bordered border-dark">
		<tr>
			<td colspan="2" class="col-2">
				<div class="text-center"><?= $city_sign; ?>,</div>
				<div class="d-flex gap-2 align-items-center justify-content-center">
					<label for="">Tgl</label>
					<input type="date" class="w-50 form-control border-dark" value="<?= date('Y-m-d'); ?>"
						name="tanggal_1_tb3">

					<label for="">Jam</label>
					<input type="time" class="w-50 form-control border-dark" value="<?= date('H:i') ?>"
						name="waktu_1_tb3">
				</div>
				<div class="text-center ">
					<span>Tanda tangan Dokter DPJP</span>
				</div>
				<div class="text-center">
					<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_dpjp" />
				</div>
				<div class="mt-2 d-flex gap-2 align-items-center">
					<label for="" class="flex-shrink-0">Nama :</label>
					<input type="text" name="nama_dokter" class="form-control border-dark">
				</div>
			</td>
			<td colspan="2" class="col-2">
				<div class="text-center"><?= $city_sign; ?>,</div>
				<div class="d-flex gap-2 align-items-center justify-content-center">
					<label for="">Tgl</label>
					<input type="date" class="w-50 form-control border-dark" value="<?= date('Y-m-d'); ?>"
						name="tanggal_2_tb3">
					<label for="">Jam</label>
					<input type="time" class="w-50 form-control border-dark" value="<?= date('H:i') ?>"
						name="waktu_2_tb3">
				</div>
				<div class="text-center">
					<span>Tanda tangan Dokter Umum (bila ada)</span>
				</div>
				<div class="d-flex flex-column gap-2 align-items-center">

					<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
					<select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
						style="width: 100%;"></select>
				</div>
			</td>
			<td colspan="2" class="col-2">
				<div class="text-center"><?= $city_sign; ?>,</div>
				<div class="d-flex gap-2 align-items-center justify-content-center">
					<label for="">Tgl</label>
					<input type="date" class="w-50 form-control border-dark" value="<?= date('Y-m-d'); ?>"
						name="tanggal_3_tb3">
					<label for="">Jam</label>
					<input type="time" value="<?= date('H:i'); ?>" class="w-50 form-control border-dark"
						name="waktu_3_tb3">
				</div>
				<div class="text-center">
					<span>Tanda tangan Perawat</span>
				</div>
				<div class="d-flex flex-column align-items-center gap-2">
					<img class="img-responsive center-block " style="width: 20%;" id="qr_perawat" />
					<input type="text" name="nama_perawat_form" id="nama_perawat_form" class="form-control border-dark">
					<input type="hidden" name="id_perawat_form" id="id_perawat_form">
				</div>
			</td>
		</tr>
	</table>
	<div class="text-end">
		<label for="">Tanda Tangan Pasien</label>
	</div>
	<div class="d-flex justify-content-end my-3">
		<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
			style="max-width: 350px" data-input-name="image_drawer_state_image_11" />
		<input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
			value="" />
	</div>

</div>



<!-- tambah -->
<!-- table 4 -->


<input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
<table class="table table-bordered mt-4 border-dark" id="table-resiko">
	<tbody class="text-center">
		<th>Tanggal,Jam</th>
		<th>Catatan Kemajuan, Rencana Tindakan Terapi</th>
		<th>Profesi</th>
	</tbody>

	<tbody>
		<tr>
			<td><input type="datetime-local" class="form-control border-dark" name="tanggal_tb4_pasien[]"></td>
			<td><input type="text" class="form-control border-dark" name="catatan_tb4_pasien[]"></td>
			<td><input type="text" class="form-control border-dark" name="profesi_tb4_pasien[]"></td>
		</tr>
	</tbody>

</table>
</div>
<div class="ms-3">
	<button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')" id="add_button">Add</button>
	<button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')" id="delete_button">Delete</button>
</div>

<!-- BATAS GANTI -->


<script>
	function toggleTinggalInput() {
		var tinggalLainnya = document.getElementById('tinggal_lainnya');
		var inputTinggal = document.getElementById('input_tinggal');

		// If "Lainnya" is selected, enable the input field and focus on it
		if (tinggalLainnya.checked) {
			inputTinggal.readOnly = false;
			inputTinggal.focus(); // Focus on the input field
		} else {
			inputTinggal.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	toggleTinggalInput();
	// fungsi tombol readonly tidak bisa di klik

	function toggleMasalahInput() {
		var adaMasalah = document.getElementById('ada_masalah');
		var masalahInput = document.getElementById('masalah_input');

		// If "Ada Masalah perilaku" is selected, enable the input field and focus on it
		if (adaMasalah.checked) {
			masalahInput.readOnly = false;
			masalahInput.focus(); // Focus on the input field
		} else {
			masalahInput.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	toggleMasalahInput();


	function togglePekerjaanInput() {
		var tidakRiwayatPekerjaan = document.getElementById('tidakRiwayatPekerjaan');
		var inputPekerjaan = document.getElementById('input_ya_pekerjaan');

		// If "Tidak" is selected, disable the input field
		if (tidakRiwayatPekerjaan.checked) {
			inputPekerjaan.readOnly = true;
		} else {
			inputPekerjaan.readOnly = false;
		}
	}

	// Call the function to set the correct state on page load
	togglePekerjaanInput();

	function toggleInput() {
		var tidakAlergi = document.getElementById('tidakAlergi');
		var inputAlergi = document.getElementById('inputAlergi');

		// If "Tidak" is selected, disable the input field
		if (tidakAlergi.checked) {
			inputAlergi.readOnly = true;
		} else {
			inputAlergi.readOnly = false;
		}
	}

	// Call the function to set the correct state on page load
	toggleInput();

	function toggleKondisiInput() {
		var lainnya = document.getElementById('lainnya');
		var inputKondisi = document.getElementById('inputKondisi');

		// If "Lainnya" is selected, enable the input field and focus on it
		if (lainnya.checked) {
			inputKondisi.readOnly = false;
			inputKondisi.focus(); // Focus on the input field
		} else {
			inputKondisi.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	toggleKondisiInput();



	function toggleMobilisasiInput() {
		var perluMobilisasi = document.getElementById('perlu_mobilisasi');
		var inputBantuan = document.getElementById('perluBantuan');

		// If "Perlu bantuan, sebutkan" is selected, enable the input field and focus on it
		if (perluMobilisasi.checked) {
			inputBantuan.readOnly = false;
			inputBantuan.focus(); // Focus on the input field
		} else {
			inputBantuan.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	toggleMobilisasiInput();


	function togglePalpasiInput() {
		var lainPalpasi = document.getElementById('lain_palpasi');
		var inputLainPalpasi = document.getElementById('inputLainPalpasi');

		// If "lain-lain" is selected, enable the input field and focus on it
		if (lainPalpasi.checked) {
			inputLainPalpasi.readOnly = false;
			inputLainPalpasi.focus(); // Focus on the input field
		} else {
			inputLainPalpasi.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	togglePalpasiInput();




	function togglePsikologiInput() {
		var lainPsikologi = document.getElementById('lain_psikologi');
		var inputPsikologi = document.getElementById('input_psikologi');

		// If "Lainnya, sebutkan" is selected, enable the input field and focus on it
		if (lainPsikologi.checked) {
			inputPsikologi.readOnly = false;
			inputPsikologi.focus(); // Focus on the input field
		} else {
			inputPsikologi.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	togglePsikologiInput();

	// end

	let dataDokter = []
	const mode = "<?= $mode; ?>"

	// Function to add event listeners for radio buttons
	function addRadioListener(radio, input, clear = false) {
		radio.addEventListener('click', function() {
			if (clear) {
				input.value = ''; // Clear the value if another radio button is selected
			} else {
				input.focus(); // Focus on the input if the radio button is selected
			}
		});
	}

	// Get references to the radio buttons and text input fields
	const refs = {
		// "Tempat Tinggal" section
		tinggalRumah: document.getElementById('tinggal_rumah'),
		tinggalApartemen: document.getElementById('tinggal_apartemen'),
		tinggalPanti: document.getElementById('tinggal_panti'),
		tinggalLainnya: document.getElementById('tinggal_lainnya'),
		inputTinggal: document.getElementById('input_tinggal'),

		// Alergi section
		yaAlergi: document.getElementById('yaAlergi'),
		tidakAlergi: document.getElementById('tidakAlergi'),
		inputAlergi: document.getElementById('inputAlergi'),

		// Riwayat Pekerjaan section
		yaRiwayatPekerjaan: document.getElementById('yaRiwayatPekerjaan'),
		tidakRiwayatPekerjaan: document.getElementById('tidakRiwayatPekerjaan'),
		input_ya_pekerjaan: document.getElementById('input_ya_pekerjaan'),

		// Palpasi section  
		lain_palpasi: document.getElementById('lain_palpasi'),
		inputLainPalpasi: document.getElementById('inputLainPalpasi'),

		// Mobilisasi section
		mandiriMobilisasi: document.getElementById('mandiri_mobilisasi'),
		perluMobilisasi: document.getElementById('perlu_mobilisasi'),
		inputPerluBantuan: document.getElementById('perluBantuan'),

		// Other behavioral and psychological sections
		adaMasalahRadio: document.getElementById('ada_masalah'),
		inputMasalah: document.getElementById('masalah_input'),
		perilakuKekerasanRadio: document.getElementById('perilaku_kekerasan'),
		sadarRadio: document.getElementById('sadar'),
		lainPsikologiRadio: document.getElementById('lain_psikologi'),
		inputPsikologi: document.getElementById('input_psikologi'),
	};

	// Add event listeners for "Tempat Tinggal" - focus on text input for "lainnya"
	addRadioListener(refs.tinggalLainnya, refs.inputTinggal);

	// Clear input when any other radio buttons are selected in "Tempat Tinggal"
	[refs.tinggalRumah, refs.tinggalApartemen, refs.tinggalPanti].forEach(function(radio) {
		radio.addEventListener('click', function() {
			refs.inputTinggal.value = ''; // Clear the value of the input when another radio button is selected
		});
	});

	// Add event listener for "Alergi" section - focus on input when "Ya" is selected
	addRadioListener(refs.yaAlergi, refs.inputAlergi);

	// Clear input when "Tidak" is selected in "Alergi"
	addRadioListener(refs.tidakAlergi, refs.inputAlergi, true);

	// Add event listener for "Riwayat Pekerjaan" - focus on input when "Ya" is selected
	addRadioListener(refs.yaRiwayatPekerjaan, refs.input_ya_pekerjaan);

	// Clear input when "Tidak" is selected in "Riwayat Pekerjaan"
	addRadioListener(refs.tidakRiwayatPekerjaan, refs.input_ya_pekerjaan, true);

	// Add event listener for "lain_palpasi" - focus on input when selected
	refs.lain_palpasi.addEventListener('click', function() {
		refs.inputLainPalpasi.focus();
	});

	// Clear input for "lain_palpasi" when other radio buttons are selected
	document.querySelectorAll('input[name="palpasi"]').forEach(function(radio) {
		radio.addEventListener('click', function() {
			if (this.id !== 'lain_palpasi') {
				refs.inputLainPalpasi.value = '';
			}
		});
	});

	// Add event listeners for "mandiri_mobilisasi" and "perlu_mobilisasi"
	addRadioListener(refs.mandiriMobilisasi, refs.inputPerluBantuan, true); // Clear input when "mandiri_mobilisasi" is selected
	addRadioListener(refs.perluMobilisasi, refs.inputPerluBantuan);

	addRadioListener(refs.adaMasalahRadio, refs.inputMasalah);

	[refs.sadarRadio, refs.perilakuKekerasanRadio].forEach(function(radio) {
		radio.addEventListener('click', function() {
			refs.inputMasalah.value = ''; // Clear the value of the input when another radio button is selected
		});
	});

	// Add event listener for "lain_psikologi" - focus on input for "lain psikologi"
	addRadioListener(refs.lainPsikologiRadio, refs.inputPsikologi);

	// Clear input when any other psychological status radio button is selected
	document.querySelectorAll('input[name="status_psikologi"]').forEach(function(radio) {
		radio.addEventListener('click', function() {
			if (this.id !== 'lain_psikologi') {
				refs.inputPsikologi.value = '';
			}
		});
	});

	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	function cbCommon(data) {


		// on init generate table based on table-{name}-count
		let resikoCountInput = document.getElementById("table-resiko-count");
		if (resikoCountInput) {
			let count = +(resikoCountInput.value ?? "0");
			if (count > 0) {
				for (let i = 0; i < count - 1; i++) {
					let tableId = 'table-resiko';
					let table = document.getElementById(tableId);
					let newTable = table.cloneNode(true);

					newTable.id = tableId + "-copy-" + `${i + 1}`;

					table.parentNode.insertBefore(newTable, table.nextSibling);
				}
			}
		}

		let pengkajianCountInput = document.getElementById("table-pengkajian-count");
		if (pengkajianCountInput) {
			let count = +(pengkajianCountInput.value ?? "0");
			if (count > 0) {
				for (let i = 1; i < count; i++) {

					let tableId = 'table-pengkajian';
					let table = document.getElementById(tableId);
					let newTable = table.cloneNode(true);

					newTable.id = tableId + "-copy-" + `${i + 1}`;

					table.parentNode.insertBefore(newTable, table.nextSibling);
				}
			}
		}


		populateFormFields(data);

		$('#dokter_umum').prop('disabled', false)
		$('#dokter_umum').select2('open')
		$('#dokter_umum').select2('close')
		if (mode === "lihat")
			$('#dokter_umum').prop('disabled', true)

		setTimeout(() => {
			console.log(dataDokter)
			dataDokter?.map(v => {
				if (v.text === $('#dokter_umum').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_dokter_umum')
				}
			})
		}, 500)
		// callMarkerManager();
		// fill image
	}

	function listDokterUmumAPI() {
		$('#dokter_umum').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
				dataType: 'json',
				delay: 250,
				data: function(params) {
					return {
						q: params.term,
					}
				},
				processResults: function(data) {
					const {
						items,
						more
					} = data.data;
					dataDokter = items
					return {
						results: items, // Data from PHP
						pagination: {
							more: more, // Check if more data is available
						},
					};
				},
				cache: true,

			},
			placeholder: 'Search for items...',
		})
	}

	$(document).ready(function() {
		const globalData = <?= $global_data; ?>;
		const {
			id_dokter,
			id_perawat,
			nama_perawat
		} = globalData;

		$('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat)
		$('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat)
		$('#nama_perawat_form').attr('disabled', true)

		QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat')

		listDokterUmumAPI()

		QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});


	})

	function copyTable(tableId) {
		let table = document.getElementById(tableId);
		let newTable = table.cloneNode(true);

		// Hapus nilai dari input di tabel baru
		let inputs = newTable.querySelectorAll("input");
		inputs.forEach(input => input.value = '');

		let countInput = document.getElementById(tableId + "-count");
		let count = parseInt(countInput.value) + 1;
		countInput.value = count;

		newTable.id = tableId + "-copy-" + count;

		// Cari semua tabel dengan ID yang sama dan ambil yang terakhir
		let allTables = document.querySelectorAll(`table[id^='${tableId}']`);
		let lastTable = allTables[allTables.length - 1]; // Ambil yang terakhir

		// Masukkan tabel baru setelah semua tabel yang ada
		lastTable.parentNode.appendChild(newTable);
	}

	function deleteTable(tableId) {
		let countInput = document.getElementById(tableId + "-count");
		if (countInput) {
			let count = +(countInput.value);
			if (count > 0) {
				let lastCopiedTable = document.getElementById(tableId + "-copy-" + count);
				if (lastCopiedTable) {
					lastCopiedTable.remove();
					countInput.value = count - 1;
				}
			}
		}
	}
	// Function to enable/disable the input field based on radio button selection
	function togglePsikologiInput() {
		var lainPsikologi = document.getElementById("lain_psikologi");
		var inputPsikologi = document.getElementById("input_psikologi");

		// If "Lainnya, sebutkan" is selected, enable the input field and focus on it
		if (lainPsikologi.checked) {
			inputPsikologi.readOnly = false;
			inputPsikologi.focus(); // Focus on the input field
		} else {
			inputPsikologi.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	togglePsikologiInput();


	// Function to toggle the readonly state of the input field based on the "Ada Masalah" radio button
	function toggleMasalahInput() {
		var adaMasalah = document.getElementById("ada_masalah");
		var masalahInput = document.getElementById("masalah_input");

		// If "Ada Masalah perilaku" is selected, enable the input field and focus on it
		if (adaMasalah.checked) {
			masalahInput.readOnly = false;
			masalahInput.focus(); // Focus on the input field
		} else {
			masalahInput.readOnly = true;
		}
	}

	// Call the function to set the correct state on page load
	toggleMasalahInput();
</script>