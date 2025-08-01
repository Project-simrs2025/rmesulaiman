<!-- Header Section -->
<div class="row mb-4">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="nama_pasien" class="form-label">Nama Pasien</label>
			<input type="text" class="form-control border-dark" id="nama_pasien" name="nama_pasien">
		</div>
		<div class="mb-3">
			<label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
			<input type="text" class="form-control border-dark" id="tanggal_lahir" name="tanggal_lahir">
		</div>
		<div class="mb-3">
			<label for="no_rm" class="form-label">No. RM</label>
			<input type="text" class="form-control border-dark" id="no_rm" name="no_rm">
		</div>
		<div class="mb-3">
			<label for="dokter_jaga" class="form-label">Dokter Jaga</label>
			<input type="text" class="form-control border-dark" id="dokter_jaga" name="nama_dokter">
		</div>
		<div class="mb-3">
			<label for="nama_dokter" class="form-label">DPJP</label>
			<input type="text" class="form-control border-dark" id="nama_dokter" name="nama_dokter" disabled>
		</div>
		<div class="mb-3 d-flex flex-column">
			<label for="diagnosa" class="form-label">Diagnosa</label>
			<select type="select" name="diagnosa1" class="form-select diagnosa ">
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="mb-3">
			<label for="tgl_admit" class="form-label">Tanggal Masuk</label>
			<input type="text" class="form-control border-dark" id="tgl_admit" name="tgl_admit">
		</div>
		<div class="mb-3">
			<label for="nama_ruangan" class="form-label">Ruangan</label>
			<input type="text" class="form-control border-dark" id="nama_ruangan" name="nama_ruangan">
		</div>
		<div class="mb-3">
			<label for="tgl_jam_pindah" class="form-label">Tgl / Jam Pindah</label>
			<input type="datetime-local" class="form-control border-dark" id="tgl_jam_pindah" name="tgl_jam_pindah"
				value="<?= date('Y-m-d H:i') ?>">
		</div>
		<div class="mb-3">
			<label for="pindah_ke_ruangan" class="form-label">Pindah ke Ruangan</label>
			<!-- <input type="text" class="form-control border-dark" id="pindah_ke_ruangan" name="pindah_ke_ruangan"> -->
			<select type="select" name="pindah_ke_ruangan" class="form-select ruangan">
			</select>
		</div>
		<div class="mb-3">
			<label for="diagnosa_sekarang" class="form-label">Diagnosa Sekarang</label>
			<select type="select" name="diagnosa1" class="form-select diagnosa ">
			</select>
		</div>
	</div>
</div>

<!-- Pengkajian Section -->
<div class="card mb-4">
	<div class="card-header">
		<h5 class="mb-0">I. PENGKAJIAN</h5>
	</div>
	<div class="card-body">
		<div class="mb-3">
			<label for="keluhan_utama" class="form-label">A. Keluhan Utama</label>
			<textarea class="form-control border-dark" id="keluhan_utama" name="keluhan_utama" rows="3"></textarea>
		</div>
		<div class="mb-3">
			<label for="riwayat_penyakit" class="form-label">B. Riwayat Penyakit</label>
			<textarea class="form-control border-dark" id="riwayat_penyakit" name="riwayat_penyakit" rows="3"></textarea>
		</div>
	</div>
</div>

<!-- Pemeriksaan Fisik Section -->
<div class="card mb-4">
	<div class="card-header">
		<h5 class="mb-0">II. PEMERIKSAAN FISIK</h5>
	</div>
	<div class="card-body">
		<div class="mb-3">
			<label for="keadaan_umum" class="form-label">A. Keadaan Umum</label>
			<input type="text" class="form-control border-dark" id="keadaan_umum" name="keadaan_umum">
		</div>

		<div class="row mb-3">
			<div class="col-md-3">
				<label for="tekanan_darah" class="form-label">TD (mmHg)</label>
				<input type="text" class="form-control border-dark" id="tekanan_darah" name="tekanan_darah">
			</div>
			<div class="col-md-3">
				<label for="nadi" class="form-label">Nadi (x/i)</label>
				<input type="text" class="form-control border-dark" id="nadi" name="nadi">
			</div>
			<div class="col-md-3">
				<label for="skala_nyeri" class="form-label">Skala Nyeri</label>
				<input type="text" class="form-control border-dark" id="skala_nyeri" name="skala_nyeri">
			</div>
		</div>

		<div class="row mb-3">
			<div class="col-md-3">
				<label for="pernafasan" class="form-label">Pernafasan (x/i)</label>
				<input type="text" class="form-control border-dark" id="pernafasan" name="pernafasan">
			</div>
			<div class="col-md-3">
				<label for="suhu" class="form-label">Suhu (°C)</label>
				<input type="text" class="form-control border-dark" id="suhu" name="suhu">
			</div>
		</div>

		<div class="mb-3">
			<label for="pemeriksaan_fisik" class="form-label">C. Pemeriksaan Fisik</label>
			<textarea class="form-control border-dark" id="pemeriksaan_fisik" name="pemeriksaan_fisik" rows="3"></textarea>
		</div>

		<div class="mb-3">
			<label for="riwayat_alergi" class="form-label">D. Riwayat Alergi</label>
			<input type="text" class="form-control border-dark" id="riwayat_alergi" name="riwayat_alergi">
		</div>

		<div class="mb-3">
			<label for="alasan_pindah_ruangan" class="form-label">E. Alasan Pindah Ruangan</label>
			<input type="text" class="form-control border-dark" id="alasan_pindah_ruangan" name="alasan_pindah_ruangan">
			
		</div>
	</div>
</div>

<!-- Pemeriksaan Penunjang Section -->
<div class="card mb-4">
	<div class="card-header">
		<h5 class="mb-0">III. PEMERIKSAAN PENUNJANG / DIAGNOSTIK</h5>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-3">
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="laboratorium" name="laboratorium">
					<label class="form-check-label" for="laboratorium">Laboratorium</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="ekg" name="ekg">
					<label class="form-check-label" for="ekg">EKG</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="radiologi" name="radiologi">
					<label class="form-check-label" for="radiologi">Radiologi</label>
				</div>
			</div>
			<div class="col-md-3">
				<input type="checkbox" class="custom-checkbox-success" id="lain_lain" name="lain_input" onclick="toggleInputLain(true)">
				<label for="lain_lain" class="form-label">Lain-lain</label>
				<input type="text" class="form-control border-dark" id="lain_lain_input" name="lain_lain_input">
			</div>
		</div>

	</div>
</div>

<!-- Pemberian Terapi Section -->
<div class="card mb-2">
	<div class="card-header">
		<h5 class="mb-0">IV. PEMBERIAN TERAPI</h5>
	</div>
	<div class="card-body">
		<div class="mb-3">
			<textarea class="form-control border-dark" id="pemberian_terapi" name="pemberian_terapi" rows="4"></textarea>
		</div>
	</div>
</div>

<!-- Tindakan Medis Section -->
<div class="card mb-2">
	<div class="card-header">
		<h5 class="mb-0">V. TINDAKAN MEDIS YANG TELAH DILAKUKAN</h5>
	</div>
	<div class="card-body">
		<div class="mb-3">
			<textarea class="form-control border-dark" id="tindakan_medis" name="tindakan_medis" rows="4"></textarea>
		</div>
	</div>
</div>

<!-- Diet Section -->
<div class="card mb-2">
	<div class="card-header">
		<h5 class="mb-0">VI. DIET</h5>
	</div>
	<div class="card-body">
		<div class="mb-3">
			<textarea name="diet_1" id="diet_1" class="form-control border-dark" rows="4"></textarea>
		</div>
	</div>
</div>

<!-- Indikasi Pasien Masuk Section -->
<div class="card mb-2">
	<div class="card-header">
		<h5 class="mb-0">VII. INDIKASI PASIEN MASUK</h5>
	</div>
	<div class="card-body">
		<div class="mb-3">
			<textarea class="form-control border-dark" id="indikasi_pasien_masuk" name="indikasi_pasien_masuk" rows="3"></textarea>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" name="preventif" id="preventif">
					<label class="form-check-label" for="preventif">Preventif</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" name="kuratif" id="kuratif">
					<label class="form-check-label" for="kuratif">Kuratif</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" name="paliatif" id="paliatif">
					<label class="form-check-label" for="paliatif">Paliatif</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" name="rehabilitatif" id="rehabilitatif">
					<label class="form-check-label" for="rehabilitatif">Rehabilitatif</label>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Kondisi Pasien Section -->
<div class="card mb-2">
	<div class="card-header">
		<h5 class="mb-0">VIII. KONDISI PASIEN SAAT TRANSFER</h5>
	</div>
	<div class="card-body">
		<div class="mb-3">
			<textarea class="form-control border-dark" id="kondisi_pasien" name="kondisi_pasien" rows="3"></textarea>
		</div>
	</div>
</div>

<!-- Signature Section -->
<div class="row mt-4">
	<div class="col-md-6">
		<div class="mb-3 d-flex flex-column gap-3 align-items-center">
			<label for="perawat_menyerahkan" class="form-label">Perawat yang menyerahkan</label>
			<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_menyerahkan" />
			<select type="select" name="perawat_menyerahkan" id="perawat_menyerahkan" class="form-select"
				style="width: 100%;"></select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="mb-3 d-flex flex-column gap-3 align-items-center">
			<label for="perawat_menerima" class="form-label">Perawat yang menerima</label>
			<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_menerima" />
			<select type="select" name="perawat_menerima" id="perawat_menerima" class="form-select"
				style="width: 100%;"></select>
		</div>
	</div>
</div>


<!-- add 2 page -->
<?php for ($i = 1; $i <= 2; $i++) : ?>
	<div style="margin-top:280px; ">
		<h5 class="text-end">RM 3A</h5>
		<h3 class="text-center mb-4">FORMULIR TRANSFER PASIEN INTRA RUMAH SAKIT</h3>
		<div class="row mb-4">
			<div class="col-md-6">
				<div class="mb-3">
					<label for="nama_pasien" class="form-label">Nama Pasien</label>
					<input type="text" class="form-control border-dark" id="nama_pasien" name="nama_pasien">
				</div>
				<div class="mb-3">
					<label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
					<input type="text" class="form-control border-dark" id="tanggal_lahir" name="tanggal_lahir">
				</div>
				<div class="mb-3">
					<label for="no_rm" class="form-label">No. RM</label>
					<input type="text" class="form-control border-dark" id="no_rm" name="no_rm">
				</div>
				<div class="mb-3">
					<label for="dokter_jaga" class="form-label">Dokter Jaga</label>
					<select type="select" name="dokter_jaga_<?= $i ?>" class="form-select dokter">
					</select>
					<!-- <input type="text" class="form-control border-dark" id="dokter_jaga" name="nama_dokter"> -->
				</div>
				<div class="mb-3">
					<label for="nama_dokter" class="form-label">DPJP</label>
					<select type="select" name="nama_dokter_<?= $i ?>" class="form-select dokter">
					</select>
					<!-- <input type="text" class="form-control border-dark" id="nama_dokter" name="nama_dokter" disabled> -->
				</div>
				<div class="mb-3 d-flex flex-column">
					<label for="diagnosa" class="form-label">Diagnosa</label>
					<select type="select" name="diagnosa_dpjp_<?= $i; ?>" class="form-select diagnosa ">
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3">
					<label for="tgl_admit" class="form-label">Tanggal Masuk</label>
					<input type="text" class="form-control border-dark" id="tgl_admit" name="tgl_admit">
				</div>
				<div class="mb-3">
					<label for="" class="form-label">Ruangan</label>
					<input type="text" name="nama_ruangan_<?= $i ?>" class="form-control border-dark">
					<!-- <input type="text" class="form-control border-dark" id="nama_ruangan" name="nama_ruangan"> -->
				</div>
				<div class="mb-3">
					<label for="tgl_jam_pindah_<?= $i; ?>" class="form-label">Tgl / Jam Pindah</label>
					<input type="datetime-local" class="form-control border-dark" id="tgl_jam_pindah_<?= $i; ?>" name="tgl_jam_pindah_<?= $i; ?>">
				</div>
				<div class="mb-3">
					<label for="pindah_ke_ruangan_<?= $i; ?>" class="form-label">Pindah ke Ruangan</label>
					<select type="select" name="pindah_ke_ruangan<?= $i; ?>" id="pindah_ke_ruangan<?= $i; ?>" class="form-select ruangan">
					</select>
				</div>
				<div class="mb-3">
					<label for="diagnosa_sekarang_<?= $i; ?>" class="form-label">Diagnosa Sekarang</label>
					<select type="select" name="diagnosa_sekarang<?= $i; ?>" class="form-select diagnosa ">
					</select>
				</div>
			</div>
		</div>

		<!-- Pengkajian Section -->
		<div class="card mb-4">
			<div class="card-header">
				<h5 class="mb-0">I. PENGKAJIAN</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<label for="keluhan_utama" class="form-label">A. Keluhan Utama</label>
					<textarea class="form-control border-dark" id="keluhan_utama_<?= $i; ?>" name="keluhan_utama_<?= $i; ?>" rows="3"></textarea>
				</div>
				<div class="mb-3">
					<label for="riwayat_penyakit_<?= $i; ?>" class="form-label">B. Riwayat Penyakit</label>
					<textarea class="form-control border-dark" id="riwayat_penyakit_<?= $i; ?>" name="riwayat_penyakit_<?= $i; ?>" rows="3"></textarea>
				</div>
			</div>
		</div>

		<!-- Pemeriksaan Fisik Section -->
		<div class="card mb-4">
			<div class="card-header">
				<h5 class="mb-0">II. PEMERIKSAAN FISIK</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<label for="keadaan_umum_<?= $i; ?>" class="form-label">A. Keadaan Umum</label>
					<input type="text" class="form-control border-dark" id="keadaan_umum_<?= $i; ?>" name="keadaan_umum_<?= $i; ?>">
				</div>

				<div class="row mb-3">
					<div class="col-md-3">
						<label for="tekanan_darah_<?= $i; ?>" class="form-label">TD (mmHg)</label>
						<input type="text" class="form-control border-dark" id="tekanan_darah_<?= $i; ?>" name="tekanan_darah_<?= $i; ?>">
					</div>
					<div class="col-md-3">
						<label for="nadi_<?= $i; ?>" class="form-label">Nadi (x/i)</label>
						<input type="text" class="form-control border-dark" id="nadi_<?= $i; ?>" name="nadi_<?= $i; ?>">
					</div>
					<div class="col-md-3">
						<label for="skala_nyeri_<?= $i; ?>" class="form-label">Skala Nyeri</label>
						<input type="text" class="form-control border-dark" id="skala_nyeri_<?= $i; ?>" name="skala_nyeri_<?= $i; ?>">
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-md-3">
						<label for="pernafasan_<?= $i; ?>" class="form-label">Pernafasan (x/i)</label>
						<input type="text" class="form-control border-dark" id="pernafasan_<?= $i; ?>" name="pernafasan_<?= $i; ?>">
					</div>
					<div class="col-md-3">
						<label for="suhu_<?= $i; ?>" class="form-label">Suhu (°C)</label>
						<input type="text" class="form-control border-dark" id="suhu_<?= $i; ?>" name="suhu_<?= $i; ?>">
					</div>
				</div>

				<div class="mb-3">
					<label for="pemeriksaan_fisik_<?= $i; ?>" class="form-label">C. Pemeriksaan Fisik</label>
					<textarea class="form-control border-dark" id="pemeriksaan_fisik_<?= $i; ?>" name="pemeriksaan_fisik_<?= $i; ?>" rows="3"></textarea>
				</div>

				<div class="mb-3">
					<label for="riwayat_alergi_<?= $i; ?>" class="form-label">D. Riwayat Alergi</label>
					<input type="text" class="form-control border-dark" id="riwayat_alergi_<?= $i; ?>" name="riwayat_alergi_<?= $i; ?>">
				</div>

				<div class="mb-3">
					<label for="alasan_pindah_ruangan_<?= $i; ?>" class="form-label">E. Alasan Pindah Ruangan</label>
					<input type="text" class="form-control border-dark" id="alasan_pindah_ruangan_<?= $i; ?>" name="alasan_pindah_ruangan_<?= $i; ?>">
				</div>
			</div>
		</div>

		<!-- Pemeriksaan Penunjang Section -->
		<div class="card mb-4">
			<div class="card-header">
				<h5 class="mb-0">III. PEMERIKSAAN PENUNJANG / DIAGNOSTIK</h5>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="checkbox" name="laboratorium_<?= $i; ?>" id="laboratorium_<?= $i; ?>">
							<label class="form-check-label" for="laboratorium_<?= $i; ?>">Laboratorium</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="checkbox" name="ekg_<?= $i; ?>" id="ekg_<?= $i; ?>">
							<label class="form-check-label" for="ekg_<?= $i; ?>">EKG</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="checkbox" name="radiologi_<?= $i; ?>" id="radiologi_<?= $i; ?>">
							<label class="form-check-label" for="radiologi_<?= $i; ?>">Radiologi</label>
						</div>
					</div>
					<div class="col-md-3">
						<input type="checkbox" class="custom-checkbox-success" name="pemeriksaan_penunjang_<?= $i; ?>" id="lain_lain_<?= $i; ?>">
						<label for="lain_lain_<?= $i; ?>" class="form-label">Lain-lain</label>
						<input type="text" class="form-control border-dark" id="lain_lain_input_<?= $i; ?>" name="lain_lain_input_<?= $i; ?>">
					</div>
				</div>

			</div>
		</div>

		<!-- Pemberian Terapi Section -->
		<div class="card mb-2">
			<div class="card-header">
				<h5 class="mb-0">IV. PEMBERIAN TERAPI</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<textarea class="form-control border-dark" id="pemberian_terapi_<?= $i; ?>" name="pemberian_terapi_<?= $i; ?>" rows="4"></textarea>
				</div>
			</div>
		</div>

		<!-- Tindakan Medis Section -->
		<div class="card mb-2">
			<div class="card-header">
				<h5 class="mb-0">V. TINDAKAN MEDIS YANG TELAH DILAKUKAN</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<textarea class="form-control border-dark" id="tindakan_medis_<?= $i; ?>" name="tindakan_medis_<?= $i; ?>" rows="4"></textarea>
				</div>
			</div>
		</div>

		<!-- Diet Section -->
		<div class="card mb-2">
			<div class="card-header">
				<h5 class="mb-0">VI. DIET</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<textarea name="diet_<?= $i; ?>_<?= $i; ?>" id="diet_<?= $i; ?>_<?= $i; ?>" class="form-control border-dark" rows="4"></textarea>
				</div>
			</div>
		</div>

		<!-- Indikasi Pasien Masuk Section -->
		<div class="card mb-2">
			<div class="card-header">
				<h5 class="mb-0">VII. INDIKASI PASIEN MASUK</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<textarea class="form-control border-dark" id="indikasi_pasien_masuk_<?= $i; ?>" name="indikasi_pasien_masuk_<?= $i; ?>" rows="3"></textarea>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="indikasi_type_<?= $i; ?>" id="preventif_<?= $i; ?>">
							<label class="form-check-label" for="preventif_<?= $i; ?>">Preventif</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="indikasi_type_<?= $i; ?>" id="kuratif_<?= $i; ?>">
							<label class="form-check-label" for="kuratif_<?= $i; ?>">Kuratif</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="indikasi_type_<?= $i; ?>" id="paliatif_<?= $i; ?>">
							<label class="form-check-label" for="paliatif_<?= $i; ?>">Paliatif</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="indikasi_type_<?= $i; ?>" id="rehabilitatif_<?= $i; ?>">
							<label class="form-check-label" for="rehabilitatif_<?= $i; ?>">Rehabilitatif</label>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Kondisi Pasien Section -->
		<div class="card mb-2">
			<div class="card-header">
				<h5 class="mb-0">VIII. KONDISI PASIEN SAAT TRANSFER</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<textarea class="form-control border-dark" id="kondisi_pasien_<?= $i; ?>" name="kondisi_pasien_<?= $i; ?>" rows="3"></textarea>
				</div>
			</div>
		</div>

		<!-- Signature Section -->
		<div class="row mt-4">
			<div class="col-md-6">
				<div class="mb-3 d-flex flex-column gap-3 align-items-center">
					<label for="perawat_menyerahkan_<?= $i; ?>" class="form-label">Perawat yang menyerahkan</label>
					<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_menyerahkan_<?= $i; ?>" />
					<select type="select" name="perawat_menyerahkan_<?= $i; ?>" id="perawat_menyerahkan_<?= $i; ?>" class="form-select newperawat"
						style="width: 100%;"></select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3 d-flex flex-column gap-3 align-items-center">
					<label for="perawat_menerima_<?= $i; ?>" class="form-label">Perawat yang menerima</label>
					<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_menerima_<?= $i; ?>" />
					<select type="select" name="perawat_menerima_<?= $i; ?>" id="perawat_menerima_<?= $i; ?>" class="form-select newperawat"
						style="width: 100%;"></select>
				</div>
			</div>
		</div>

	</div>


<?php endfor; ?>






<script>
	const mode = "<?= $mode; ?>"
	let dataListPerawatMenyerahkan = []
	let dataListPerawatMenerima = []
	let dataListPerawatNew = []
	let dataListDokter = []

	function cbCommon() {
		$('#perawat_menyerahkan').prop('disabled', false)
		$('#perawat_menyerahkan').select2('open')
		$('#perawat_menyerahkan').select2('close')
		$('#perawat_menerima').prop('disabled', false)
		$('#perawat_menerima').select2('open')
		$('#perawat_menerima').select2('close')

		// new
		$('#perawat_menyerahkan_1').prop('disabled', false)
		$('#perawat_menyerahkan_1').select2('open')
		$('#perawat_menyerahkan_1').select2('close')
		$('#perawat_menerima_1').prop('disabled', false)
		$('#perawat_menerima_1').select2('open')
		$('#perawat_menerima_1').select2('close')
		$('#perawat_menyerahkan_2').prop('disabled', false)
		$('#perawat_menyerahkan_2').select2('open')
		$('#perawat_menyerahkan_2').select2('close')
		$('#perawat_menerima_2').prop('disabled', false)
		$('#perawat_menerima_2').select2('open')
		$('#perawat_menerima_2').select2('close')

		if (mode === "lihat") {
			$('#perawat_menyerahkan').prop('disabled', true)
			$('#perawat_menerima').prop('disabled', true)
			$('#perawat_menyerahkan_1').prop('disabled', true)
			$('#perawat_menerima_1').prop('disabled', true)
			$('#perawat_menyerahkan_2').prop('disabled', true)
			$('#perawat_menerima_2').prop('disabled', true)

		}

		setTimeout(() => {
			dataListPerawatMenyerahkan?.map(v => {
				if (v.text === $('#perawat_menyerahkan').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat_menyerahkan')
				}
			})
			dataListPerawatMenerima?.map(v => {
				if (v.text === $('#perawat_menerima').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat_menerima')
				}
			})
		}, 1000)

		// new
		setTimeout(() => {
			dataListPerawatMenyerahkan?.map(v => {
				if (v.text === $('#perawat_menyerahkan_1').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat_menyerahkan_1')
				}
			})
			dataListPerawatMenerima?.map(v => {
				if (v.text === $('#perawat_menerima_1').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat_menerima_1')
				}
			})
		}, 1000)

		setTimeout(() => {
			dataListPerawatMenyerahkan?.map(v => {
				if (v.text === $('#perawat_menyerahkan_2').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat_menyerahkan_2')
				}
			})
			dataListPerawatMenerima?.map(v => {
				if (v.text === $('#perawat_menerima_2').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat_menerima_2')
				}
			})
		}, 1000)



	}

	$(document).ready(function() {
		let page = 1;

		listPerawatAPI()
		listPerawatNew()
		listDokter()

		const globalData = <?= $global_data; ?>;
		const {
			id_dokter
		} = globalData;


		const select2Configs = [{
				selector: '.diagnosa',
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>'
			},
			{
				selector: '.poli',
				url: '<?= site_url('backend/admission/getPoli'); ?>'
			},
			{
				selector: '.ruangan',
				url: '<?= site_url('backend/admission/getRuangan'); ?>'
			},
		];

		select2Configs.forEach(({
			selector,
			url
		}) => {
			$(selector).select2({
				ajax: {
					url: url,
					dataType: 'json',
					delay: 250,
					data: function(params) {
						return {
							q: params.term,
							limit: 100,
							offset: (page - 1) * 100,
						};
					},
					processResults: function(data) {
						const {
							items,
							more
						} = data.data;

						// Tambahkan opsi default "--pilih--"
						const defaultOption = [{
							id: '',
							text: '--pilih--'
						}];
						const combinedItems = defaultOption.concat(items);

						return {
							results: combinedItems,
							pagination: {
								more: more
							},
						};
					},
					cache: true,
				},
				placeholder: '--pilih--',
				allowClear: true,
			});

			// Reset nilai saat awal load
			$(selector).val(null).trigger('change');

			// Infinite scroll handler
			$(selector).on('select2:open', function() {
				$('.select2-results__options').off('scroll').on('scroll', function() {
					const $this = $(this);
					if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
						page++;
						$(selector).select2('data', null); // Optional
					}
				});
			});
		});




		$('#perawat_menyerahkan').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_menyerahkan')
		});
		$('#perawat_menerima').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_menerima')
		});



		//================ new =====================//
		// new set time out
		$('#perawat_menyerahkan_1').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_menyerahkan_1')
		});
		$('#perawat_menerima_1').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_menerima_1')
		});
		$('#perawat_menyerahkan_2').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_menyerahkan_2')
		});
		$('#perawat_menerima_2').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_menerima_2')
		});
		//======================================================//
	});

	function listPerawatAPI() {
		$('#perawat_menyerahkan').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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
					dataListPerawatMenyerahkan = items
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

		$('#perawat_menerima').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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
					dataListPerawatMenerima = items
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

	function listPerawatNew() {
		$('.newperawat').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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

					// Sisipkan pilihan "--pilih--" di awal
					const defaultOption = [{
						id: '',
						text: '--pilih--'
					}];
					const combinedItems = defaultOption.concat(items);

					dataDokter = items;

					return {
						results: combinedItems,
						pagination: {
							more: more,
						},
					};
				},
				cache: true,
			}
		});

		// Set nilai default (optional)
		$('.newperawat').val('').trigger('change');
	}

	function listDokter() {
		$('.dokter').select2({
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

					// Sisipkan pilihan "--pilih--" di awal
					const defaultOption = [{
						id: '',
						text: '--pilih--'
					}];
					const combinedItems = defaultOption.concat(items);

					dataDokter = items;

					return {
						results: combinedItems,
						pagination: {
							more: more,
						},
					};
				},
				cache: true,
			}
		});

		// Set nilai default (optional)
		$('.dokter').val('').trigger('change');
	}
</script>