<!-- Identitas Bayi dan Informasi Rumah Sakit -->
<div class="card mb-4">
	<div class="card-header bg-primary text-white">
		Identitas Bayi dan Informasi Rumah Sakit
	</div>
	<div class="card-body mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="mb-3">
					<label for="nama_bayi" class="form-label">Nama Bayi</label>
					<input type="text" class="form-control border-dark" id="nama_bayi" name="nama_bayi">
				</div>

				<div class="mb-3">
					<label for="kelamin" class="form-label">Kelamin</label>
					<div class="d-flex gap-3">
						<select name="gender" id="gender" class="form-control border-dark">
							<option value="">-- Pilih Jenis Kelamin --</option>
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						</select>
					</div>
				</div>

				<div class="mb-3">
					<label for="nama_ibu" class="form-label">Nama Ibu</label>
					<input type="text" class="form-control border-dark" id="nama_ibu" name="nama_ibu">
				</div>

				<div class="mb-3">
					<label for="nama_ayah" class="form-label">Nama Ayah</label>
					<input type="text" class="form-control border-dark" id="nama_ayah" name="nama_ayah">
				</div>

				<div class="mb-3">
					<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
					<input type="date" class="form-control border-dark" id="tgl_lahir" name="tanggal_lahir_anak" value="<?= date('Y-m-d'); ?>">
				</div>

				<div class="mb-3">
					<label for="agama" class="form-label">Agama</label>
					<input type="text" class="form-control border-dark" id="agama" name="nama_agama_anak" value="<?= $nama_agama; ?>">
				</div>

				<div class="mb-3">
					<label for="suku_bangsa" class="form-label">Suku / Bangsa</label>
					<div class="d-flex">
						<textarea rows="1" class="form-control border-dark" id="suku_bangsa" name="nama_suku_anak"><?= $nama_suku ?><?= $nama_bangsa ?></textarea>
						<div class="ms-2">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kewarganegaraan" id="wni" value="WNI">
								<label class="form-check-label" for="wni">WNI</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kewarganegaraan" id="wna" value="WNA">
								<label class="form-check-label" for="wna">WNA</label>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-3">
					<label for="alamat" class="form-label">Alamat</label>
					<textarea class="form-control border-dark" id="alamat" name="alamat_anak" rows="3"><?= $alamat ?></textarea>
				</div>
			</div>

			<div class="col-md-6">
				<div class="mb-3">
					<label for="no_rekam_medis" class="form-label">No. Rekam Medis</label>
					<input type="text" class="form-control border-dark" id="no_rekam_medis" name="no_rm">
				</div>

				<div class="mb-3">
					<label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
					<input type="text" class="form-control border-dark" id="tgl_masuk" name="tgl_admit">
				</div>

				<div class="mb-3">
					<label for="tgl_bersalin" class="form-label">Tanggal Bersalin</label>
					<input type="date" class="form-control border-dark" id="tgl_bersalin" name="tgl_bersalin">
				</div>

				<div class="mb-3">
					<label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
					<input type="date" class="form-control border-dark" id="tgl_keluar" name="tgl_keluar">
				</div>

				<div class="mb-3">
					<label for="no_penning" class="form-label">No. Penning</label>
					<input type="text" class="form-control border-dark" id="no_penning" name="no_penning">
				</div>

				<div class="mb-3">
					<label for="ruang_perawatan" class="form-label">Ruang Perawatan</label>
					<select type="select" name="ruang_perawatan" class="form-select ruangan" style="width: 100%;"></select>
				</div>

				<div class="mb-3">
					<label for="dokter_merawat" class="form-label">Dokter yang merawat</label>
					<select type="select" name="dokter_merawat" class="form-select dokter"></select>
				</div>

				<div class="mb-3">
					<label for="dokter_konsulen1" class="form-label">Dokter Konsulen 1</label>
					<select type="select" name="dokter_konsulen_1" class="form-select dokter"
						style="width: 100%;"></select>
				</div>

				<div class="mb-3">
					<label for="dokter_konsulen2" class="form-label">Dokter Konsulen 2</label>
					<select type="select" name="dokter_konsulen_2" class="form-select dokter"
						style="width: 100%;"></select>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Riwayat Kelahiran -->
<div class="card mb-4">
	<div class="card-header bg-primary text-white">
		Riwayat Kelahiran
	</div>
	<div class="card-body mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="partus_spontan" name="spontan">
						<label class="form-check-label" for="partus_spontan">
							Partus spontan letak
							<input type="text" class="form-control border-dark mt-1" id="partus_spontan_detail" name="partus_spontan_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="partus_susah" name="susah">
						<label class="form-check-label" for="partus_susah">
							Susah dengan cara
							<input type="text" class="form-control border-dark mt-1" id="partus_susah_detail" name="partus_susah_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<label for="tgl_lahir_waktu" class="form-label">Tanggal Lahir &amp; Waktu</label>
					<div class="row">
						<div class="col-md-6">
							<input type="date" class="form-control border-dark" id="tgl_lahir_waktu" name="tgl_lahir_waktu">
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<input type="time" class="form-control border-dark" id="waktu_lahir" name="waktu_lahir">
								<span class="input-group-text">WIB</span>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="cukup_bulan" name="cukup_bulan">
						<label class="form-check-label" for="cukup_bulan">
							Cukup bulan, Berat Badan
							<div class="input-group mt-1">
								<input type="number" class="form-control border-dark" id="bb_cukup_bulan" name="bb_cukup_bulan">
								<span class="input-group-text">gr</span>
							</div>
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="kurang_bulan" name="kurang_bulan">
						<label class="form-check-label" for="kurang_bulan">
							Kurang bulan, Berat Badan
							<div class="input-group mt-1">
								<input type="number" class="form-control border-dark" id="bb_kurang_bulan" name="bb_kurang_bulan">
								<span class="input-group-text">gr</span>
							</div>
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="segera_menangis" name="segera">
						<label class="form-check-label" for="segera_menangis">
							Segera menangis
							<input type="text" class="form-control border-dark mt-1" id="segera_menangis_detail" name="segera_menangis_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" id="tidak_segera_menangis" name="tidak_segera">
						<label class="form-check-label" for="tidak_segera_menangis">
							Tidak Segera menangis
							<input type="text" class="form-control border-dark mt-1" id="tidak_segera_menangis_detail" name="tidak_segera_menangis_detail">
						</label>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="mb-3">
					<label for="panjang_tali_pusat" class="form-label">Panjang tali pusat</label>
					<div class="input-group">
						<input type="number" class="form-control border-dark" id="panjang_tali_pusat" name="panjang_tali_pusat" step="0.1">
						<span class="input-group-text">cm</span>
					</div>
				</div>

				<div class="mb-3">
					<label for="panjang_badan" class="form-label">Panjang Badan</label>
					<div class="input-group">
						<input type="number" class="form-control border-dark" id="panjang_badan" name="panjang_badan" step="0.1">
						<span class="input-group-text">cm</span>
					</div>
				</div>

				<div class="mb-3">
					<label for="lingkaran_kepala" class="form-label">Lingkaran Kepala</label>
					<div class="input-group">
						<input type="number" class="form-control border-dark" id="lingkaran_kepala" name="lingkaran_kepala" step="0.1">
						<span class="input-group-text">cm</span>
					</div>
				</div>

				<div class="mb-3">
					<label for="lingkaran_dada" class="form-label">Lingkaran Dada</label>
					<div class="input-group">
						<input type="number" class="form-control border-dark" id="lingkaran_dada" name="lingkaran_dada" step="0.1">
						<span class="input-group-text">cm</span>
					</div>
				</div>

				<h5 class="mt-4 mb-3">Pemeriksaan Bayi Setelah Lahir</h5>

				<div class="row">
					<div class="col-md-6">
						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_kepala" name="kepala_bayi">
								<label class="form-check-label" for="pemeriksaan_kepala">Kepala</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_kulit" name="kulit_bayi">
								<label class="form-check-label" for="pemeriksaan_kulit">Kulit</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_mata" name="mata_bayi">
								<label class="form-check-label" for="pemeriksaan_mata">Mata</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_hidung" name="hidung_bayi">
								<label class="form-check-label" for="pemeriksaan_hidung">Hidung</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_mulut" name="mulut_bayi">
								<label class="form-check-label" for="pemeriksaan_mulut">Mulut</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_telinga" name="telinga_bayi">
								<label class="form-check-label" for="pemeriksaan_telinga">Telinga</label>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_jantung" name="jantung_bayi">
								<label class="form-check-label" for="pemeriksaan_jantung">Jantung</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_paru" name="paru_bayi">
								<label class="form-check-label" for="pemeriksaan_paru">Paru-paru</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_abdomen" name="abdomen_bayi">
								<label class="form-check-label" for="pemeriksaan_abdomen">Abdomen</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_genitalia" name="gentelia_bayi">
								<label class="form-check-label" for="pemeriksaan_genitalia">Genitalia</label>
							</div>
						</div>

						<div class="mb-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" id="pemeriksaan_anus" name="anus_bayi">
								<label class="form-check-label" for="pemeriksaan_anus">Anus</label>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-3">
					<label class="form-label">Dibantu oleh:</label>
					<div class="d-flex gap-4">
						<div class="form-check">
							<input class="custom-checkbox-success" type="checkbox" id="dibantu_dr" name="dr">
							<label class="form-check-label" for="dibantu_dr">Dokter</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="checkbox" id="dibantu_bidan" name="bidan">
							<label class="form-check-label" for="dibantu_bidan">Bidan</label>
						</div>
					</div>
				</div>

				<div class="mt-3">
					<label class="form-label">Keadaan waktu pulang:</label>
					<div class="d-flex flex-column gap-2">
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="keadaan_pulang" id="keadaan_hidup" value="hidup">
							<label class="form-check-label" for="keadaan_hidup">Hidup</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="keadaan_pulang" id="keadaan_mati_kurang_48" value="mati_kurang_48">
							<label class="form-check-label" for="keadaan_mati_kurang_48">Mati < 48 jam</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="keadaan_pulang" id="keadaan_mati_lebih_48" value="mati_lebih_48">
							<label class="form-check-label" for="keadaan_mati_lebih_48">Mati > 48 jam</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Pertolongan Terhadap Bayi -->
<div class="card mb-4">
	<div class="card-header bg-primary text-white">
		Pertolongan Terhadap Bayi
	</div>
	<div class="card-body mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="pengisapan_lendir" name="pengisapan_lendir">
						<label class="form-check-label" for="pengisapan_lendir">
							Pengisapan Lendir
							<input type="text" class="form-control border-dark mt-1" id="pengisapan_lendir_detail" name="pengisapan_lendir_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="tidak_ada" name="tidak_ada">
						<label class="form-check-label" for="tidak_ada">
							Tidak ada
							<input type="text" class="form-control border-dark mt-1" id="tidak_ada_detail" name="tidak_ada_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="pernafasan_mulut_ke_mulut" name="pernafasan_mulut_ke_mulut">
						<label class="form-check-label" for="pernafasan_mulut_ke_mulut">
							Pernafasan mulut ke mulut
							<input type="text" class="form-control border-dark mt-1" id="pernafasan_mulut_ke_mulut_detail" name="pernafasan_mulut_ke_mulut_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="pernafasan_buatan" name="pernafasan_buatan">
						<label class="form-check-label" for="pernafasan_buatan">
							Pernafasan buatan
							<input type="text" class="form-control border-dark mt-1" id="pernafasan_buatan_detail" name="pernafasan_buatan_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="massage_jantung" name="massage_jantung">
						<label class="form-check-label" for="massage_jantung">
							Massage Jantung
							<input type="text" class="form-control border-dark mt-1" id="massage_jantung_detail" name="massage_jantung_detail">
						</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="checkbox" id="pemberian_zat_asam" name="pemberian_zat_asam">
						<label class="form-check-label" for="pemberian_zat_asam">
							Pemberian Zat Asam
							<input type="text" class="form-control border-dark mt-1" id="pemberian_zat_asam_detail" name="pemberian_zat_asam_detail">
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Alasan & Diagnosa -->
<div class="card mb-4">
	<div class="card-header bg-primary text-white">
		Alasan & Diagnosa
	</div>
	<div class="card-body mt-5">
		<div class="mb-3">
			<label for="alasan_masuk" class="form-label">Alasan Masuk RS</label>
			<textarea class="form-control border-dark" id="alasan_masuk" name="alasan_masuk" rows="2"></textarea>
		</div>

		<div class="mb-3">
			<label for="diagnosa_masuk" class="form-label">Diagnosa Masuk</label>
			<select type="select" name="diagnosa_masuk" id="diagnosa_masuk" class="form-select diagnosa" style="width: 100%;">
			</select>
		</div>
	</div>
</div>

<!-- Keterangan Bayi -->
<div class="card mb-4">
	<div class="card-header bg-primary text-white">
		Keterangan Bayi
	</div>
	<div class="card-body mt-5">
		<div class="mb-3">
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="kembar" id="kembar" value="ya">
				<label class="form-check-label" for="kembar">
					Kembar
					<input type="text" class="form-control border-dark mt-1" id="kembar_detail" name="kembar_detail">
				</label>
			</div>
		</div>

		<div class="mb-3">
			<label for="tanggal_keterangan" class="form-label">Tanggal</label>
			<input type="date" class="form-control border-dark" id="tanggal_keterangan" name="tanggal_keterangan">
		</div>

		<div class="mb-3">
			<label for="lahir_di" class="form-label">Lahir di</label>
			<input type="text" class="form-control border-dark" id="lahir_di" name="lahir_di">
		</div>

		<div class="mb-3">
			<label class="form-label">Kondisi saat lahir</label>
			<div class="d-flex gap-4">
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="kondisi_saat_lahir" id="kondisi_hidup" value="hidup">
					<label class="form-check-label" for="kondisi_hidup">Hidup</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="kondisi_saat_lahir" id="kondisi_mati" value="mati">
					<label class="form-check-label" for="kondisi_mati">Mati</label>
				</div>
			</div>
		</div>

		<div class="mb-3">
			<label for="sebab_kematian" class="form-label">Sebab Kematian</label>
			<textarea class="form-control border-dark" id="sebab_kematian" name="sebab_kematian" rows="3"></textarea>
		</div>
	</div>
</div>

<!-- Nilai Apgar -->
<div class="card mb-4">
	<div class="card-header bg-primary text-white">
		Nilai Apgar
	</div>
	<div class="card-body mt-5">
		<table class="table table-bordered border-dark" id="calculate_table">
			<thead>
				<tr>
					<th>Tanda-tanda</th>
					<th>0</th>
					<th>1</th>
					<th>2</th>
					<th colspan="3">NILAI ANGKA PADA</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>DJJ</td>
					<td>
						<div class="form-check">

							<label class="form-check-label" for="djj_0">Neg</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="djj_1">
								< 100</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="djj_2"> > 100</label>
						</div>
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="djj_nilai_1">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="djj_nilai_2">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="djj_nilai_3">
					</td>
				</tr>
				<tr>
					<td>Pernafasan</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="pernafasan_0">Neg</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="pernafasan_1">Tidak teratur</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="pernafasan_2">Segera Menangis</label>
						</div>
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="pernafasan_nilai_1">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="pernafasan_nilai_2">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="pernafasan_nilai_3">
					</td>
				</tr>
				<tr>
					<td>Tonus Otot</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="tonun_otot_0">Lemah</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="tonun_otot_1">Fleksi</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="tonun_otot_2">Aktif</label>
						</div>
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="tonun_otot_nilai_1">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="tonun_otot_nilai_2">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="tonun_otot_nilai_3">
					</td>
				</tr>
				<tr>
					<td>Refleks</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="refleks_0">Neg</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="refleks_1">Merengek / Merintih</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="refleks_2">Menangis Kuat</label>
						</div>
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="refleks_nilai_1">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="refleks_nilai_2">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="refleks_nilai_3">
					</td>
				</tr>
				<tr>
					<td>Warna</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="warna_0">Biru Seluruhnya</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="warna_1">Anggota Gerak Biru</label>
						</div>
					</td>
					<td>
						<div class="form-check">
							<label class="form-check-label" for="warna_2">Merah Seluruhnya</label>
						</div>
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="warna_nilai_1">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="warna_nilai_2">
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="warna_nilai_3">
					</td>
				</tr>
				<tr>
					<td colspan="4" class="text-end fw-bold">Jumlah Angka</td>
					<td>
						<input type="number" class="form-control border-dark" name="sum_1" readonly>
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="sum_2" readonly>
					</td>
					<td>
						<input type="number" class="form-control border-dark" name="sum_3" readonly>
					</td>
				</tr>
				<tr>
					<td colspan="7">
						<input type="button" class="bg-primary text-white rounded" onclick="hitungNilaiApgar()" value="Hitung Nilai Apgar">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<!-- Diagnosa dan Tindakan -->
<div class="card mb-4">
	<div class="card-header bg-primary text-white">
		Diagnosa dan Tindakan
	</div>
	<div class="card-body mt-5">
		<div class="row mb-4">
			<div class="col-md-12">
				<label for="diagnosa_akhir" class="form-label">Diagnosa Akhir</label>
				<select type="select" name="diagnosa_akhir" id="diagnosa_akhir" class="form-select diagnosa" style="width: 100%;">
				</select>
			</div>
		</div>

		<div class="row mb-4">
			<div class="">
				<label for="tindakan_operasi" class="form-label">Tindakan / Operasi</label>
				<textarea class="form-control border-dark" id="tindakan_operasi" name="tindakan_operasi" rows="3"></textarea>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label for="infeksi_nosokomial" class="form-label">Infeksi Nosokomial</label>
				<textarea class="form-control border-dark" id="infeksi_nosokomial" name="infeksi_nosokomial" rows="3"></textarea>
			</div>
			<div class="col-md-6">
				<div class="d-flex flex-column align-items-end gap-3">
					<p class="text-end">Tanda Tangan Dokter</p>
					<img class="img-responsive center-block mt-2" style="width: 32%;" id="qr_dokter_umum" />
					<select type="select" name="dokter_umum" class="form-select dokter_umum" id="dokter_umum" style="width: 100%;"></select>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	let dataDokter = [];
	let dataListPerawat = [];
	let page = 1;
	const mode = "<?= $mode; ?>";

	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	$(document).ready(function() {
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
			{
				selector: '.perawat',
				url: '<?= site_url('backend/admission/getKaryawan'); ?>'
			},
			{
				selector: '.dokter',
				url: '<?= site_url('backend/admission/getKaryawan/5'); ?>'
			},
		];

		// Inisialisasi select2 umum (selain dokter_umum)
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

						if (selector === '.perawat') {
							dataListPerawat = items;
						}

						const defaultOption = [{
							id: '',
							text: '--pilih--'
						}];
						return {
							results: defaultOption.concat(items),
							pagination: {
								more
							},
						};
					},
					cache: true,
				},
				placeholder: '--pilih--',
				allowClear: true,
			});

			$(selector).val(null).trigger('change');

			$(selector).on('select2:open', function() {
				$('.select2-results__options').off('scroll').on('scroll', function() {
					const $this = $(this);
					if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
						page++;
					}
				});
			});
		});

		// Inisialisasi .dokter dan #dokter_umum
		initSelect2Dokter('.dokter');
		initSelect2Dokter('#dokter_umum', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum');
		});

		$('#list_perawat').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_list_perawat')
		});

		$('#list_perawat_pengkaji').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_list_perawat_pengkaji')
		});
	});

	function initSelect2Dokter(selector, onSelectCallback = null) {
		$(selector).select2({
			ajax: {
				url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
					dataDokter = items;

					const results = (selector === '#dokter_umum') ?
						items : [{
							id: '',
							text: '--pilih--'
						}].concat(items);

					return {
						results,
						pagination: {
							more
						},
					};
				},
				cache: true,
			},
			placeholder: (selector === '#dokter_umum') ? 'Search for items...' : '--pilih--',
			allowClear: true,
		});

		$(selector).val(null).trigger('change');

		$(selector).on('select2:open', function() {
			$('.select2-results__options').off('scroll').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					page++;
				}
			});
		});

		if (onSelectCallback) {
			$(selector).on('select2:select', onSelectCallback);
		}
	}

	function cbCommon(data) {
		populateFormFields(data);

		$('#dokter_umum').prop('disabled', false).select2('open').select2('close');
		if (mode === "lihat") {
			$('#dokter_umum').prop('disabled', true);
		}
		setTimeout(() => {
			console.log(dataDokter);
			const selectedText = $('#dokter_umum').select2('data')[0]?.text;
			dataDokter?.forEach(v => {
				if (v.text === selectedText) {
					QRSignatureAPI(v.id_original, 'qr_dokter_umum');
				}
			});
		}, 1000);


		$('#list_perawat').prop('disabled', false)
		$('#list_perawat').select2('open')
		$('#list_perawat').select2('close')
		if (mode === "lihat")
			$('#list_perawat').prop('disabled', true)

		setTimeout(() => {
			dataListPerawat?.map(v => {
				if (v.text === $('#list_perawat').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_list_perawat')
				}
			})
		}, 1000)

		$('#list_perawat_pengkaji').prop('disabled', false)
		$('#list_perawat_pengkaji').select2('open')
		$('#list_perawat_pengkaji').select2('close')
		if (mode === "lihat")
			$('#list_perawat_pengkaji').prop('disabled', true)

		setTimeout(() => {
			dataListPerawat?.map(v => {
				if (v.text === $('#list_perawat_pengkaji').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_list_perawat_pengkaji')
				}
			})
		}, 1000)

	}

	function hitungNilaiApgar() {
		// Daftar nama elemen penilaian
		const elemen = ['djj', 'pernafasan', 'tonun_otot', 'refleks', 'warna'];

		// Penjumlahan untuk kolom ke-1, ke-2, ke-3
		let sum1 = 0,
			sum2 = 0,
			sum3 = 0;

		elemen.forEach(function(nama) {
			// Ambil nilai dari masing-masing kolom
			let nilai1 = parseInt(document.querySelector(`[name="${nama}_nilai_1"]`).value) || 0;
			let nilai2 = parseInt(document.querySelector(`[name="${nama}_nilai_2"]`).value) || 0;
			let nilai3 = parseInt(document.querySelector(`[name="${nama}_nilai_3"]`).value) || 0;

			sum1 += nilai1;
			sum2 += nilai2;
			sum3 += nilai3;
		});

		// Set nilai total ke kolom jumlah
		document.querySelector('[name="sum_1"]').value = sum1;
		document.querySelector('[name="sum_2"]').value = sum2;
		document.querySelector('[name="sum_3"]').value = sum3;
	}
</script>