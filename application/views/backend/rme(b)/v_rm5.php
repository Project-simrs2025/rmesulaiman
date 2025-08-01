<style>
	u {
		font-weight: bold;
	}

	/* Custom CSS for the range input */
	input[type="range"] {
		-webkit-appearance: none;
		width: 100%;
		height: 8px;
		background: linear-gradient(to right, red, yellow, green);
		border-radius: 5px;
		outline: none;
		opacity: 0.7;
		transition: opacity .2s;
	}

	input[type="range"]:hover {
		opacity: 1;
	}

	input[type="range"]::-webkit-slider-thumb {
		-webkit-appearance: none;
		appearance: none;
		width: 20px;
		height: 20px;
		background: #007bff;
		border-radius: 50%;
		cursor: pointer;
	}

	input[type="range"]::-moz-range-thumb {
		width: 20px;
		height: 20px;
		background: #007bff;
		border-radius: 50%;
		cursor: pointer;
	}
</style>

<p class="text-center">( diisi oleh DPJP dalam waktu 24 jam pertama sejak pasien masuk ruang rawat inap ) </p>

<!--Data Pribadi OK-->
<div class="row ">
	<div class="col-6 form-group">
		<label>Nama Pasien</label>
		<input type="text" name="nama_pasien" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>No. RM</label>
		<input type="text" name="no_rm" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>NIK</label>
		<input type="text" name="nik" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Tanggal Lahir / Umur</label>
		<div class="d-flex flex-row gap-3">
			<input type="text" name="nama_pasien" class="form-control border-dark">
			<input type="text" name="umur" class="form-control border-dark">
		</div>
	</div>
	<div class="col-6 form-group">
		<label>Suku</label>
		<input type="text" name="nama_suku" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Jenis Kelamin</label>
		<input type="text" name="jenkel" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Agama</label>
		<input type="text" name="nama_agama" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Tanggal Masuk</label>
		<input type="text" name="tgl_admit" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Pendidikan</label>
		<input type="text" name="pendidikan_terakhir" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Nama DPJP</label>
		<input type="text" name="nama_dokter" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Pekerjaan</label>
		<input type="text" name="nama_pekerjaan" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Nama PPJP</label>
		<select type="select" name="ppjp" id="" class="form-select perawat"
			style="width: 100%;"></select>
	</div>
	<div class="col-6 form-group">
		<label>Pendidikan</label>
		<input type="text" name="pendidikan_terakhir" class="form-control border-dark">
	</div>
	<div class="col-6 form-group">
		<label>Nilai Pribadi</label>
		<input type="text" name="nilai_pribadi" class="form-control border-dark">
	</div>
</div>

<!--Data Rujukan OK-->
<div class="row mt-5">
	<div class="col-6 form-group">
		<label>Tanggal Masuk</label>
		<input type="text" name="tgl_admit" class="form-control border-dark">
	</div>
	<div class="col-3 form-group">
		<label>Pukul</label>
		<div class="d-flex flex-row align-items-center gap-2">
			<input type="time" name="pukul_masuk" class="form-control border-dark">
			<span>WIB</span>
		</div>
	</div>
	<div class="col-3 form-group">
		<label>Ruangan</label>
		<div class="d-flex gap-2 align-items-center">
			<input type="text" name="nama_ruangan" class="form-control border-dark"> /
			<input type="text" name="no_bad" class="form-control border-dark">
		</div>
	</div>
	<div class="col-6 form-group">
		<label>Tanggal Pengkajian</label>
		<input type="date" name="tanggal_pengkajian" class="form-control border-dark">
	</div>
	<div class="col-3 form-group">
		<label>Pukul</label>
		<div class="d-flex flex-row align-items-center gap-2">
			<input type="time" name="pukul_pengkajian" class="form-control border-dark">
			<span>WIB</span>
		</div>
	</div>
	<div class="col-12 form-group">
		<label>Sumber Data</label>
		<div class="col">
			<div class="col form-group">
				<input class="custom-checkbox-success" type="radio" name="sumber_data" value="pasien">
				<label class="form-check-label" for="diijinkan-pulang">Pasien</label>
			</div>
			<div class="col form-group">
				<input class="custom-checkbox-success" type="radio" name="sumber_data" value="keluarga">
				<label class="form-check-label">Keluarga</label>
			</div>
			<div class="col-10 form-group d-flex flex-wrap">
				<input class="custom-checkbox-success" type="radio" name="sumber_data" value="lainnya">
				<label class="form-check-label">Lainnya</label>
				<input type="text" name="sumber_data_lainnya" class="form-control border-dark">
			</div>
		</div>
	</div>
	<div class="col-12 form-group">
		<label>Rujukan</label>
		<div class="col">
			<div class="col form-group">
				<input class="custom-checkbox-success" type="radio" name="rujukan" value="tidak">
				<label class="form-check-label" for="diijinkan-pulang">Tidak</label>
			</div>
			<div class="col form-group">
				<input class="custom-checkbox-success" type="radio" name="rujukan" value="ya">
				<label class="form-check-label">Ya, RS</label>
				<div class="col ms-3 form-group mt-2">
					<input type="text" name="rujukan_ya_rs" class="form-control border-dark">
				</div>
				<div class="col ms-3 form-group mt-2">
					<input class="custom-checkbox-success" type="radio" name="rujukan_ya" value="puskesmas">
					<label class="form-check-label">Puskesmas</label>
				</div>
				<div class="col ms-3 form-group mt-2">
					<input class="custom-checkbox-success" type="radio" name="rujukan_ya" value="dokter">
					<label class="form-check-label">Dokter</label>
				</div>
				<div class="col-10 ms-3 form-group d-flex flex-wrap">
					<label class="form-check-label">Diagnosa Rujukan</label>
					<select type="select" name="diagnosa_rujukan"
						class="form-select diagnosa"></select>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Data Screening OK-->
<div class="d-flex flex-column gap-4 mt-5">
	<div class="col">
		<label class="font-bold">1. Keluhan Utama</label>
		<textarea type="textarea" name="keluhan_utama" cols="30" rows="3" class="form-control border-dark"></textarea>
	</div>
	<div class="col">
		<label class="font-bold">2. Pemeriksaan Penunjang</label>
		<textarea type="textarea" name="pemeriksaan_penunjang" cols="30" rows="3" class="form-control border-dark"></textarea>
	</div>
	<div class="col">
		<label class="font-bold">3. Riwayat Kesehatan <i>(Diisi oleh perawat)</i></label>
		<div class="col form-group mt-2">
			<!--a-->
			<div class="col">
				<div class="row">
					<div class="col-4">
						<label class="ms-2" l>a. Riwayat penyakit lalu</label>
					</div>
					<div class="col-2 form-group">
						<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit" value="tidak">
						<label class="form-check-label">Tidak</label>
					</div>
					<div class="col-6 form-group d-flex flex-wrap">
						<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit" value="ya">
						<label class="form-check-label">Ya, penyakit</label>
						<input type="text" name="riwayat_penyakit_detail" class="form-control border-dark">
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<label class="ms-4">- Pernah dirawat</label>
					</div>
					<div class="col-2 form-group">
						<input class="custom-checkbox-success" type="radio" name="pernah_dirawat" value="tidak">
						<label class="form-check-label">Tidak</label>
					</div>
					<div class="col-6 form-group d-flex flex-column gap-2">
						<div class="col">
							<input class="custom-checkbox-success" type="radio" name="pernah_dirawat" value="ya">
							<label class="form-check-label">Ya, diagnosa</label>
							<select type="select" name="riwayat_diagnosa"
								class="form-select diagnosa w-75"></select>
						</div>
						<div class="col">
							<label class="form-check-label">Kapan</label>
							<input type="date" name="pernah_dirawat_kapan" class="form-control border-dark">
						</div>
						<div class="col">
							<label class="form-check-label">Di</label>
							<input type="text" name="pernah_dirawat_di" class="form-control border-dark">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<label class="ms-4">- Pernah dioperasi</label>
					</div>
					<div class="col-2 form-group">
						<input class="custom-checkbox-success" type="radio" name="pernah_dioperasi" value="tidak">
						<label class="form-check-label">Tidak</label>
					</div>
					<div class="col-6 form-group d-flex flex-column gap-2">
						<div class="col">
							<input class="custom-checkbox-success" type="radio" name="pernah_dioperasi" value="ya">
							<label class="form-check-label">Ya, jenis operasi</label>
							<input type="text" name="riwayat_operasi" class="form-control border-dark">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<label class="ms-4">- Masih dalam pengobatan</label>
					</div>
					<div class="col-2 form-group">
						<input class="custom-checkbox-success" type="radio" name="masih_pengobatan" value="tidak">
						<label class="form-check-label">Tidak</label>
					</div>
					<div class="col-6 form-group d-flex flex-column gap-2">
						<div class="col">
							<input class="custom-checkbox-success" type="radio" name="masih_pengobatan" value="ya">
							<label class="form-check-label">Ya, obat</label>
							<input type="text" name="masih_pengobatan_obat" class="form-control border-dark">
						</div>
					</div>
				</div>
			</div>
			<!--b-->
			<div class="col mt-3">
				<div class="row">
					<div class="col-4">
						<label class="ms-2" l>b. Riwayat Penyakit Keluarga</label>
					</div>
					<div class="col row">
						<div class="col-3 form-group">
							<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit_keluarga" value="tidak">
							<label class="form-check-label">Tidak</label>
						</div>
						<div class="col-8 form-group d-flex flex-wrap gap-3">
							<div class="col">
								<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit_keluarga"
									value="ya">
								<label class="form-check-label">Ya, </label>
							</div>
							<div class="col-10">
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit_keluarga_ya"
										value="hipertensi">
									<label class="form-check-label">Hipertensi</label>
								</div>
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit_keluarga_ya"
										value="jantung">
									<label class="form-check-label">Jantung</label>
								</div>
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit_keluarga_ya"
										value="paru">
									<label class="form-check-label">Paru</label>
								</div>
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit_keluarga_ya"
										value="DM">
									<label class="form-check-label">DM</label>
								</div>
								<div class="col-8 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_penyakit_keluarga_ya"
										value="lainnya">
									<label class="form-check-label">Lainnya</label>
									<input type="text" name="riwayat_penyakit_keluarga_ya_lainnya" class="form-control border-dark">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--c-->
			<div class="col mt-3">
				<div class="row">
					<div class="col-4">
						<label class="ms-2" l>c. Ketergantungan Terhadap</label>
					</div>
					<div class="col row">
						<div class="col-3 form-group">
							<input class="custom-checkbox-success" type="radio" name="ketergantungan_terhadap" value="tidak">
							<label class="form-check-label">Tidak</label>
						</div>
						<div class="col-8 form-group d-flex flex-wrap gap-3">
							<div class="col">
								<input class="custom-checkbox-success" type="radio" name="ketergantungan_terhadap"
									value="ya">
								<label class="form-check-label">Ya, </label>
							</div>
							<div class="col-10">
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="ketergantungan_terhadap_ya"
										value="obat-obatan">
									<label class="form-check-label">Obat-obatan</label>
								</div>
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="ketergantungan_terhadap_ya"
										value="rokok">
									<label class="form-check-label">Rokok</label>
								</div>
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="ketergantungan_terhadap_ya"
										value="alkohol">
									<label class="form-check-label">Alkohol</label>
								</div>
								<div class="col-8 form-group">
									<input class="custom-checkbox-success" type="radio" name="ketergantungan_terhadap_ya"
										value="lainnya">
									<label class="form-check-label">Lainnya</label>
									<input type="text" name="ketergantungan_terhadap_ya_lainnya" class="form-control border-dark">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--d-->
			<div class="col mt-3">
				<div class="row">
					<div class="col-4">
						<label class="ms-2" l>d. Riwayat pekerjaan (apakah berhubungan dengan zat-zat berbahaya)</label>
					</div>
					<div class="col row">
						<div class="col-3 form-group">
							<input class="custom-checkbox-success" type="radio" name="riwayat_pekerjaan" value="tidak">
							<label class="form-check-label">Tidak</label>
						</div>
						<div class="col-8 form-group d-flex flex-wrap gap-3">
							<div class="col">
								<input class="custom-checkbox-success" type="radio" name="riwayat_pekerjaan"
									value="ya">
								<label class="form-check-label">Ya, sebutkan</label>
								<input type="text" name="riwayat_pekerjaan_ya" class="form-control border-dark">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--e-->
			<div class="col mt-3">
				<div class="row">
					<div class="col-4">
						<label class="ms-2" l>e. Riwayat Alergi</label>
					</div>
					<div class="col row">
						<div class="col-3 form-group">
							<input class="custom-checkbox-success" type="radio" name="riwayat_alergi" value="tidak">
							<label class="form-check-label">Tidak</label>
						</div>
						<div class="col-8 form-group d-flex flex-wrap gap-3">
							<div class="col">
								<input class="custom-checkbox-success" type="radio" name="riwayat_alergi"
									value="ya">
								<label class="form-check-label">Ya, </label>
							</div>
							<div class="col-10">
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_alergi_ya"
										value="obat">
									<label class="form-check-label">Obat</label>
								</div>
								<div class="col-4 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_alergi_ya"
										value="makanan">
									<label class="form-check-label">Makanan</label>
								</div>
								<div class="col-8 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_alergi_ya"
										value="lainnya">
									<label class="form-check-label">Lainnya</label>
									<input type="text" name="riwayat_alergi_ya_lainnya" class="form-control border-dark">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col">
		<label class="font-bold">4. Riwayat Psikologis, Spritual, dan Sosial Ekonomi <i>(Diisi oleh perawat)</i></label>
		<div class="col form-group mt-2">
			<!--a-->
			<div class="col-4">
				<label class="ms-2" l>a. Status Psikologi</label>
				<div class="row ms-4">
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_psikologi"
							value="cemas">
						<label class="form-check-label">Cemas</label>
					</div>
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_psikologi"
							value="takut">
						<label class="form-check-label">Takut</label>
					</div>
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_psikologi"
							value="marah">
						<label class="form-check-label">Marah</label>
					</div>
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_psikologi"
							value="sedih">
						<label class="form-check-label">Sedih</label>
					</div>
					<div class="col-12 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_psikologi"
							value="kecendrungan_bunuh_diri">
						<label class="form-check-label">Kecendrungan Bunuh Diri</label>
					</div>
					<div class="col-12 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_psikologi" value="lainnya">
						<label class="form-check-label">Lainnya</label>
						<input type="text" name="status_psikologi_lainnya" class="form-control border-dark">
					</div>
				</div>
			</div>
			<!--b-->
			<div class="col mt-3">
				<div class="col-4">
					<label class="ms-2" l>b. Status Mental (lampirkan form AMT)</label>
				</div>
				<div class="row ms-4">
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_mental"
							value="gangguan_ingatan_berat">
						<label class="form-check-label">Gangguan ingatan berat</label>
					</div>
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_mental"
							value="gangguan_ingatan_sedang">
						<label class="form-check-label">Gangguan ingatan sedang</label>
					</div>
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_mental"
							value="normal">
						<label class="form-check-label">Normal</label>
					</div>
					<div class="col-8 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_mental"
							value="masalah_perilaku">
						<label class="form-check-label">Ada masalah perilaku, sebutkan</label>
						<input type="text" name="status_mental_masalah_perilaku" class="form-control border-dark">
					</div>
					<div class="col-8 form-group">
						<input class="custom-checkbox-success" type="radio" name="status_mental" value="kekerasan">
						<label class="form-check-label">Perilaku kekerasan yang dialami pasien sebelumnya, </label>
						<input type="text" name="status_mental_kekerasan" class="form-control border-dark">
					</div>
				</div>
			</div>
			<!--c-->
			<div class="col mt-3">
				<div class="col-4">
					<label class="ms-2" l>c. Status Sosial</label>
				</div>
				<div class="col ms-4">
					<div class="d-flex flex-row gap-4">
						<label>Hubungan pasien dengan anggota keluarga</label>
						<div class="row col-8">
							<div class="col-5 form-group">
								<input class="custom-checkbox-success" type="radio" name="hubungan_pasien_keluarga"
									value="baik">
								<label class="form-check-label">Baik</label>
							</div>
							<div class="col-12 form-group">
								<input class="custom-checkbox-success" type="radio" name="hubungan_pasien_keluarga"
									value="tidak_baik">
								<label class="form-check-label">Tidak Baik</label>
							</div>
						</div>
					</div>
					<div class="col">
						<label>Tempat tinggal</label>
						<div class="row">
							<div class="col-4 form-group">
								<input class="custom-checkbox-success" type="radio" name="tempat_tinggal"
									value="rumah">
								<label class="form-check-label">Rumah</label>
							</div>
							<div class="col-4 form-group">
								<input class="custom-checkbox-success" type="radio" name="tempat_tinggal"
									value="apartmen">
								<label class="form-check-label">Apartmen</label>
							</div>
							<div class="col-4 form-group">
								<input class="custom-checkbox-success" type="radio" name="tempat_tinggal"
									value="panti">
								<label class="form-check-label">Panti</label>
							</div>
							<div class="col-4 form-group">
								<input class="custom-checkbox-success" type="radio" name="tempat_tinggal"
									value="lainnya">
								<label class="form-check-label">Lainnya</label>
								<input type="text" name="tempat_tinggal_lainnya" class="form-control border-dark">
							</div>
						</div>
					</div>
					<label>Kerabat terdekat yang dapat dihubungi</label>
					<div class="d-flex flex-row align-items-center gap-3">
						<label>Nama</label>
						<input type="text" name="nama_kerabat" class="form-control border-dark">
						<label>Hubungan</label>
						<input type="text" name="hubungan_kerabat" class="form-control border-dark">
						<label>Telepon</label>
						<input type="text" name="handphone_kerabat" class="form-control border-dark">
					</div>
				</div>
			</div>
			<!--d-->
			<div class="col mt-3">
				<div class="col-4">
					<label class="ms-2" l>d. Status Spritual</label>
				</div>
				<div class="ms-4 d-flex flex-wrap align-items-center gap-2">
					<label class="mt-2">Kegiatan agama</label>
					<input type="text" name="kegiatan_agama" class="form-control border-dark">
					<label> Kegiatan spiritual selama perawatan</label>
					<input type="text" name="kegiatan_agama_perawatan" class="form-control border-dark">
				</div>
			</div>
			<!--e-->
			<div class="col mt-3">
				<div class="col-4">
					<label class="ms-2" l>e. Riwayat Merokok</label>
				</div>
				<div class="col ms-4">
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="riwayat_merokok" value="tidak">
						<label class="form-check-label">Tidak</label>
					</div>
					<div class="form-group row">
						<div class="col-2">
							<input class="custom-checkbox-success" type="radio" name="riwayat_merokok" value="ya">
							<label class="form-check-label">Ya, Jenis</label>
						</div>
						<div class="col-8">
							<div class="row">
								<div class="col-3 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_merokok_ya"
										value="sigaret">
									<label class="form-check-label">Sigaret</label>
								</div>
								<div class="col-2 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_merokok_ya" value="pipa">
									<label class="form-check-label">Pipa</label>
								</div>
								<div class="col-2 form-group">
									<input class="custom-checkbox-success" type="radio" name="riwayat_merokok_ya"
										value="kretek">
									<label class="form-check-label">Kretek</label>
								</div>
							</div>
							<div class="col d-flex flex-row align-items-center gap-3">
								<label>Jumlah / Hari</label>
								<input type="number" name="riwayat_merokok_jumlah_hari" class="form-control border-dark">
								<label>Lama </label>
								<input type="text" name="riwayat_merokok_lama" class="form-control border-dark">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--f-->
			<div class="col mt-3">
				<div class="col-4">
					<label class="ms-2" l>f. Riwayat minum-minuman keras</label>
				</div>
				<div class="col ms-4">
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="riwayat_minum" value="tidak">
						<label class="form-check-label">Tidak</label>
					</div>
					<div class="form-group row">
						<div class="col-3">
							<input class="custom-checkbox-success" type="radio" name="riwayat_minum" value="ya">
							<label class="form-check-label">Ya, Jenis</label>
							<input type="text" name="riwayat_minum_ya" class="form-control border-dark">
						</div>
						<div class="col-8">
							<div class="col d-flex flex-row align-items-center gap-3">
								<label>Jumlah / Hari</label>
								<input type="number" name="riwayat_minum_jumlah_hari" class="form-control border-dark">
								<label>Lama </label>
								<input type="text" name="riwayat_minum_lama" class="form-control border-dark">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--g-->
			<div class="col mt-3">
				<div class="col">
					<label class="ms-2" l>g. Riwayat penggunaan obat penenang <i>(Diluar yang diresepkan
							dokter)</i></label>
				</div>
				<div class="col ms-4">
					<div class="col-4 form-group">
						<input class="custom-checkbox-success" type="radio" name="riwayat_obat_penenang" value="tidak">
						<label class="form-check-label">Tidak</label>
					</div>
					<div class="form-group row">
						<div class="col-3">
							<input class="custom-checkbox-success" type="radio" name="riwayat_obat_penenang" value="ya">
							<label class="form-check-label">Ya, Jelaskan</label>
							<input type="text" name="riwayat_obat_penenang_ya" class="form-control border-dark">
						</div>
					</div>
					<div class="col form-group">
						<label>Apakah alkohol / obat-obatan menyebabkan masalah dalam hidup pasien?</label>
						<input class="custom-checkbox-success" type="radio" name="alkohol_masalah_hidup" value="tidak">
						<label class="form-check-label">Tidak</label>
						<input class="custom-checkbox-success" type="radio" name="alkohol_masalah_hidup" value="ya">
						<label class="form-check-label">Ya (Rafer, untuk konseling)</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Tanda Vital OK-->
<table class="table table-bordered mt-5 border-dark">
	<thead>
		<tr class="bg-light">
			<th class="col-6">Tanda Vital (diisi oleh Dokter)</th>
			<th class="col-6">Masalah Keperawatan (diisi oleh perawat)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<div class="row">
					<div class="col-8 mb-3">
						<label class="form-label">TD</label>
						<div class="input-group">
							<input type="number" class="form-control border-dark" name="nadi_mmhg_1">
							<span class="ms-2 me-2 fs-3">/</span>
							<input type="number" class="form-control border-dark" name="nadi_mmhg_2">
							<span class="input-group-text">mmHg</span>
						</div>
					</div>

					<div class="col-4 mb-3">
						<label class="form-label">Nadi</label>
						<div class="input-group">
							<input type="text" class="form-control border-dark" name="nadi_x_mnt">
							<span class="input-group-text">x/mnt</span>
						</div>
					</div>

					<div class="col-6 mb-3">
						<label class="form-label">RR</label>
						<div class="input-group">
							<input type="number" class="form-control border-dark" name="respiratory_rate">
							<span class="input-group-text">x/mnt</span>
						</div>
					</div>

					<div class="col-6 mb-3">
						<label class="form-label">TB</label>
						<div class="input-group">
							<input type="text" class="form-control border-dark" name="height">
							<span class="input-group-text">cm</span>
						</div>
					</div>

					<div class="col-6 mb-3">
						<label class="form-label">Suhu</label>
						<div class="input-group">
							<input type="text" class="form-control border-dark" name="temperature">
							<span class="input-group-text">°C</span>
						</div>
					</div>

					<div class="col-6 mb-3">
						<label class="form-label">BB</label>
						<div class="input-group">
							<input type="text" class="form-control border-dark" name="weight">
							<span class="input-group-text">kg</span>
						</div>
					</div>

					<div class="col-12 mb-3">
						<label class="form-label">Kesadaran </label>
						<div class="input-group">
							<span class="input-group-text">GCS:</span>
							<input type="text" class="form-control border-dark" name="kesadaran_gcs">
							<span class="input-group-text">E:</span>
							<input type="text" class="form-control border-dark" name="kesadaran_e">
							<span class="input-group-text">V:</span>
							<input type="text" class="form-control border-dark" name="kesadaran_v">
							<span class="input-group-text">M:</span>
							<input type="text" class="form-control border-dark" name="kesadaran_m">
						</div>
					</div>

					<div class="col-12 mb-3">
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="checkbox" name="composMentis">
							<label class="form-check-label" for="composMentis">Compos Mentis</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="checkbox" name="apatis">
							<label class="form-check-label" for="apatis">Apatis</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="checkbox" name="somnolen">
							<label class="form-check-label" for="somnolen">Somnolen</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="checkbox" name="sopor">
							<label class="form-check-label" for="sopor">Sopor</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="checkbox" name="koma">
							<label class="form-check-label" for="koma">Koma</label>
						</div>
						<div class="input-group mt-3">
							<span class="input-group-text">Lainnya:</span>
							<input type="text" class="form-control border-dark" name="kesadaran_lainnya">
						</div>
					</div>
				</div>

			</td>
			<td class="align-content-start">
				<label class="form-label">1. Gangguan Termoregulasi:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="gangguan_termogulasi" id="hipotermi">
					<label class="form-check-label" for="hipotermi">Hipotermi</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="gangguan_termogulasi" id="hipertermi">
					<label class="form-check-label" for="hipertermi">Hipertermi</label>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<!--Penilaian Nyeri OK-->
<table class="table table-bordered mt-5 border-dark">
	<thead>
		<tr>
			<th colspan="4" class="bg-light">Penilaian Nyeri(diisi oleh Perawat)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="2">
				<label>Nyeri</label>
				<div class="mb-2">
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="nyeri" value="tidak">
						<label class="form-check-label" for="tidak">tidak</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="nyeri" value="ya">
						<label class="form-check-label" for="ya">ya</label>
					</div>
				</div>
				<div class="mb-2">
					<label for="faktorPemicu" class="form-label">Faktor-faktor pemicu</label>
					<input type="text" class="form-control border-dark" id="faktorPemicu" name="faktor_pemicu">
				</div>
				<div class="mb-2">
					<label for="faktorMengurangi" class="form-label">Faktor-faktor mengurangi nyeri</label>
					<input type="text" class="form-control border-dark" id="faktorMengurangi" name="faktor_mengurangi">
				</div>
				<label>Frekuensi</label>
				<div class="input-group">
					<input type="number" class="form-control border-dark" name="frekuensi_nyeri">
					<span class="input-group-text">x/hari</span>
				</div>
			</td>
			<td colspan="2" class="align-content-start">
				<div class="mb-2">
					<label for="lokasi" class="form-label">Lokasi</label>
					<input type="text" class="form-control border-dark" name="lokasi_nyeri">
				</div>
				<div class="mb-2">
					<label for="menjalar" class="form-label">Menjalar</label>
					<input type="text" class="form-control border-dark" name="menjalar_nyeri">
				</div>
				<div class="mb-2">
					<label for="lamaNyeri" class="form-label">Lama nyeri</label>
					<input type="text" class="form-control border-dark" name="lama_nyeri">
				</div>
			</td>
		</tr>
	</tbody>
</table>

<!--Tools yang digunakan -->
<div class="card mt-5 border">
	<div class="card-header bg-light">
		<h5 class="mb-0 text-black">Tools yang digunakan (*pilih dan kaji sesuai keadaan pasien)</h5>
	</div>
	<div class="card-body">
		<div class="row">
			<!-- CRIES Scale -->
			<div class="col-md-6 mb-4">
				<div class="table-responsive">
					<div class="col mt-3">
						<input class="custom-checkbox-success" type="radio" name="tools_penilaian" value="cries">
						<label>CRIES (Usia < 2 Bulan) </label>
					</div>
					<div class="d-flex flex-row gap-3 align-items-center mt-3 col-6">
						<label class="col-4">Skala Nyeri</label>
						<input type="number" name="skala_nyeri_cries" class="form-control border-dark">
					</div>
					<table class="table table-bordered mt-4 border-dark">
						<thead class="table-light">
							<tr>
								<th>Kategori</th>
								<th>0</th>
								<th>1</th>
								<th>2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Crying (Menangis)</td>
								<td>Tidak ada</td>
								<td>Menangis x kuat dapat dihibur</td>
								<td>Menangis kuat tidak dapat dihibur</td>
							</tr>
							<tr>
								<td>Requires O₂ for oxygen saturation 95% (Membutuhkan O₂ untuk saturasi oksigen > 95%)</td>
								<td>Tidak ada</td>
								<td>
									< 30%</td>
								<td>> 30%</td>
							</tr>
							<tr>
								<td>Increases Vital Sign (Tanda Vital Meningkat)</td>
								<td>Nadi dan tekanan darah = atau < nilai dasar</td>
								<td>Nadi dan tekanan darah <20% nilai dasar</td>
								<td>Nadi dan tekanan darah >20% nilai dasar</td>
							</tr>
							<tr>
								<td>Expression (Ekspresi)</td>
								<td>Tidak ada</td>
								<td>Meringis/menyeringai</td>
								<td>Meringis/menyeringai + mendengkur/mengorok</td>
							</tr>
							<tr>
								<td>Sleeplessness (Sulit Tidur)</td>
								<td>Tidak ada</td>
								<td>Bayi terbangun pada rentang yang sering</td>
								<td>Bayi terjaga terus menerus</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- FLACC Scale -->
			<div class="col-md-6 mb-4">
				<div class="table-responsive">
					<div class="col mt-3">
						<input class="custom-checkbox-success" type="radio" name="tools_penilaian" value="flacc">
						<label>FLACC (Usia 2 bulan - 3 Tahun) </label>
					</div>
					<div class="d-flex flex-row gap-3 align-items-center mt-3 col-6">
						<label class="col-4">Skala Nyeri</label>
						<input type="number" name="skala_nyeri_flacc" class="form-control border-dark">
					</div>
					<table class="table table-bordered mt-4 border-dark">
						<thead class="table-light">
							<tr>
								<th>Kategori</th>
								<th>0</th>
								<th>1</th>
								<th>2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Face (Wajah)</td>
								<td>Tidak ada ekspresi tertentu atau senyum</td>
								<td>Sesekali meringis atau mengerukan kening, menarik diri, tidak tertarik</td>
								<td>Sering/selalu mengkerutan kening/rahang mengatup, dagu gemetar</td>
							</tr>
							<tr>
								<td>Legs (Kaki)</td>
								<td>Posisi normal & rileks</td>
								<td>Gelisah, tegang</td>
								<td>Menendang/menarik kaki</td>
							</tr>
							<tr>
								<td>Activities (Kegiatan)</td>
								<td>Berbaring tenang, posisi normal bergerak dengan mudah</td>
								<td>Menggeliat, mondar-mandir, tegang</td>
								<td>Meringkuk, kaku, atau menyentak</td>
							</tr>
							<tr>
								<td>Cry (Menangis)</td>
								<td>Tidak menangis (bangun atau tidur)</td>
								<td>Mengerang/merengek, sesekali mengeluh</td>
								<td>Menangis terus menerus, berteriak/tersiak sering mengeluh</td>
							</tr>
							<tr>
								<td>Consolability (Penghiburan)</td>
								<td>Puas/senang, rileks/santai</td>
								<td>Sesekali diayakinkan dengan sentuhan, pelukan atau diajak berbicara, dialihkan</td>
								<td>Sulit untuk dihibur atau dibuat nyaman</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- WONG BAKER Scale -->
			<div class="col-md-6 mb-4">
				<div class="col mt-3">
					<input class="custom-checkbox-success" type="radio" name="tools_penilaian" value="flacc">
					<label>WONG BAKER (Usia 3 - 10 Tahun)</label>
				</div>
				<div class="d-flex flex-row gap-3 align-items-center mt-3 col-6">
					<label class="col-4">Skala Nyeri</label>
					<input type="number" name="skala_nyeri_wong" class="form-control border-dark">
				</div>
				<div class="col-10 mt-4 text-center">
					<img width="550" height="150" src="<?= base_url() . 'assets/images/form/wong-baker.jpeg' ?>" alt="">
				</div>
			</div>

			<!-- Numeric Scale -->
			<div class="col-md-6 mb-4">
				<div class="col mt-3">
					<input class="custom-checkbox-success" type="radio" name="tools_penilaian" value="flacc">
					<label>Numerik (Usia > 10 Tahun)</label>
				</div>
				<div class="col mt-3">
					<label for="customRange" class="form-label">Skala Nyeri: <span id="rangeValue">5</span></label>
					<input type="range" name="skala_nyeri" class="form-range" id="customRange" min="1" max="10"
						value="5">
				</div>
			</div>

			<!-- CPOT Scale -->
			<div class="mt-4 col-12 mb-4">
				<div class="col mt-3">
					<input class="custom-checkbox-success" type="radio" name="tools_penilaian" value="flacc">
					<label>CPOT (Pasien tidak sadar)</label>
				</div>
				<div class="d-flex flex-row gap-3 align-items-center mt-3 col-3">
					<label class="col-4">Skala Nyeri</label>
					<input type="number" name="skala_nyeri_cpot" class="form-control border-dark">
				</div>
				<div class="row mt-4">
					<div class="col">
						<table class="table table-bordered border-dark">
							<thead class="table-light">
								<tr>
									<th>Indikator</th>
									<th>Kondisi</th>
									<th>Skor</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="3">Ekspresi Wajah</td>
									<td>Rileks</td>
									<td>0</td>
									<td>Tidak ada ketegangan otot yang terlihat</td>
								</tr>
								<tr>
									<td>Kaku</td>
									<td>1</td>
									<td>Merengut, alis menurun, orbit menegang dan terdapat kerutan levator atau perubahan
										lainnya (misalnya membuka mata atau menangis selama prosedur nonseptif)
									</td>
								</tr>
								<tr>
									<td>Meringis</td>
									<td>2</td>
									<td>Semua gerakan wajah sebelumnya ditambah kelopak mata tertutup rapat (pasien dapat
										mengalami mulut terbuka atau menggigit tabung endotrakeal)
									</td>
								</tr>
								<tr>
									<td>Gerakan Tubuh</td>
									<td>Tidak ada gerakan abnormal</td>
									<td>0</td>
									<td>Tidak bergerak sama sekali (tidak berarti tidak adanya rasa sakit atau posisi normal
										gerakan tidak dilakukan terhadap bagian yang terasa nyeri atau tidak dilakukan untuk
										tujuan perlindungan)
									</td>
								</tr>
								<tr>
									<td>Lokalisasi Nyeri</td>
									<td></td>
									<td>1</td>
									<td>Lambat, gerakan hati-hati, menyentuh atau menggosok bagian yang nyeri, mencari
										perhatian melalui gerakan
									</td>
								</tr>
								<tr>
									<td>Gelisah</td>
									<td></td>
									<td>2</td>
									<td>Menarik tabung, mencoba untuk duduk, menggerakkan tungkai/meronta-ronta, tidak
										mengikuti perintah, menyerang staf, mencoba turun dari tempat tidur
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col">
						<table class="table table-bordered border-dark">
							<thead class="table-light">
								<tr>
									<th>Indikator</th>
									<th>Kondisi</th>
									<th>Skor</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="3">Aktivasi Alarm Ventilator Mekanik</td>
									<td>Pasien kooperatif terhadap kerja ventilator</td>
									<td>0</td>
									<td>Alarm tidak berbunyi, ventilasi mudah</td>
								</tr>
								<tr>
									<td>Alarm aktif tapi mati</td>
									<td>1</td>
									<td>Batuk, alarm berbunyi tetapi berhenti secara spontan</td>
								</tr>
								<tr>
									<td>Alarm selalu aktif</td>
									<td>2</td>
									<td>Alarm sering berbunyi</td>
								</tr>
								<tr>
									<td rowspan="3">* Berbicara jika pasien diekstubasi</td>
									<td>Berbicara dalam nada normal atau tidak ada suara</td>
									<td>0</td>
									<td>Berbicara dengan nada pelan</td>
								</tr>
								<tr>
									<td>Mendesah, menggerang</td>
									<td>1</td>
									<td>Mendesah, berteriak</td>
								</tr>
								<tr>
									<td>Menangis</td>
									<td>2</td>
									<td>Menangis, berteriak</td>
								</tr>
								<tr>
									<td rowspan="2">Ketegangan Otot</td>
									<td>Tidak ada ketegangan otot</td>
									<td>0</td>
									<td>Tidak ada ketegangan otot</td>
								</tr>
								<tr>
									<td>Tegang, kaku</td>
									<td>1</td>
									<td>Gerakan otot pasif</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="table-responsive">
	<table class="table table-bordered mt-5 border-dark">
		<tbody>
			<!--2-->
			<tr>
				<th>2. Aktivitas, Latihan dan Istirahat <small>(diisi oleh dokter)</small></th>
				<th>Masalah keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<label class="form-label">Keterbatasan gerak:</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" id="gerakYa"
								name="keterbatasanGerak" value="Ya">
							<label class="form-check-label" for="gerakYa">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" id="gerakTidak"
								name="keterbatasanGerak" value="Tidak">
							<label class="form-check-label" for="gerakTidak">Tidak</label>
						</div>
					</div>
					<div class="mb-3">
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="nyeriOtot"
								name="kondisi_gerak" value="Nyeri Otot">
							<label class="form-check-label" for="nyeriOtot">Nyeri Otot</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="kakuOtot"
								name="kondisi_gerak" value="Kaku Otot">
							<label class="form-check-label" for="kakuOtot">Kaku otot</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="lemahOtot"
								name="kondisi_gerak" value="Lemah Otot">
							<label class="form-check-label" for="lemahOtot">Lemah otot</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="nyeriSendi"
								name="kondisi_gerak" value="Nyeri Sendi">
							<label class="form-check-label" for="nyeriSendi">Nyeri sendi</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="bengkakSendi"
								name="kondisi_gerak" value="Bengkak Sendi">
							<label class="form-check-label" for="bengkakSendi">Bengkak sendi</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="inkoordinasi"
								name="kondisi_gerak" value="Inkoordinasi">
							<label class="form-check-label" for="inkoordinasi">Inkoordinasi</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="parese" name="kondisi_gerak"
								value="Parese/Paralise">
							<label class="form-check-label" for="parese">Parese/ paralise, di bagian:
							</label>
							<input type="text" class="form-control border-dark" name="parese_paralise">
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="amputasi"
								name="kondisi_gerak" value="Amputasi">
							<label class="form-check-label" for="amputasi">Amputasi</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="deformitas"
								name="kondisi_gerak" value="Deformitas">
							<label class="form-check-label" for="deformitas">Deformitas</label>
						</div>
					</div>
					<div class="mb-3">
						<label class="form-label">Lama tidur:</label>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label">Malam:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control border-dark form-control border-dark-sm" name="tidurMalam">
							<small class="text-muted">jam</small>
						</div>
						<label class="col-sm-2 col-form-label">siang:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control border-dark form-control border-dark-sm" name="tidurSiang">
							<small class="text-muted">jam</small>
						</div>
					</div>
					<div class="mb-3">
						<label class="form-label">Kesulitan tidur:</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" id="kesulitanTidurYa"
								name="kesulitanTidur" value="Ya">
							<label class="form-check-label" for="kesulitanTidurYa">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" id="kesulitanTidurTidak"
								name="kesulitanTidur" value="Tidak">
							<label class="form-check-label" for="kesulitanTidurTidak">Tidak</label>
						</div>
					</div>
					<div class="mb-3">
						<label class="form-label">Penilaian Resiko Jatuh</label>
						<div class="mb-2">
							<label class="form-label">Tools:</label>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" id="humptyDumpty"
									name="resikoJatuhTool" value="Humpty Dumpty">
								<label class="form-check-label" for="humptyDumpty">Humpty Dumpty</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" id="morse"
									name="resikoJatuhTool" value="Morse">
								<label class="form-check-label" for="morse">Morse</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" id="sidney"
									name="resikoJatuhTool" value="Sidney">
								<label class="form-check-label" for="sidney">Sidney</label>
							</div>
						</div>
						<div class="mb-2">
							<label class="form-label">Resiko Jatuh:</label>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" id="resikoJatuhYa"
									name="adaResikoJatuh" value="Ya">
								<label class="form-check-label" for="resikoJatuhYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" id="resikoJatuhTinggi"
									name="tingkatResikoJatuh" value="Tinggi">
								<label class="form-check-label" for="resikoJatuhTinggi">Tinggi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" id="resikoJatuhRendah"
									name="tingkatResikoJatuh" value="Rendah">
								<label class="form-check-label" for="resikoJatuhRendah">Rendah</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" id="tidakAdaResikoJatuh"
									name="adaResikoJatuh" value="Tidak Ada Resiko Jatuh">
								<label class="form-check-label" for="tidakAdaResikoJatuh">Tidak Ada Resiko
									Jatuh</label>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" id="intoleransiAktivitas"
							name="masalahKeperawatan" value="Intoleransi Aktivitas">
						<label class="form-check-label" for="intoleransiAktivitas">Intoleransi
							Aktivitas</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" id="resikoJatuh"
							name="masalahKeperawatan" value="Resiko Jatuh/Cedera">
						<label class="form-check-label" for="resikoJatuh">Resiko jatuh/
							cedera</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" id="gangguanMobilitas"
							name="masalahKeperawatan" value="Hambatan/Gangguan Mobilitas Fisik">
						<label class="form-check-label" for="gangguanMobilitas">Hambatan/ Gangguan
							Mobilitas Fisik</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" id="gangguanPolaTidur"
							name="masalahKeperawatan" value="Gangguan Pola Tidur">
						<label class="form-check-label" for="gangguanPolaTidur">Gangguan pola
							tidur</label>
					</div>
				</td>
			</tr>
			<!-- Section 3: Skrining Gizi -->
			<tr>
				<th>3. Skrining Gizi <small>(diisi oleh perawat)</small></th>
				<th>Masalah keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<label class="form-label fw-bold">USIA</label>
						<div class="row mt-2">
							<div class="col-md-4">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="usiaKurang1"
										name="kategoriaUsia" value="Usia < 1 tahun">
									<label class="form-check-label" for="usiaKurang1">Usia < 1 tahun</label>
								</div>
								<div class="small text-secondary">STRONG-kids</div>
							</div>
							<div class="col-md-4">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="usia1sampai18"
										name="kategoriaUsia" value="Usia 1 sampai < 18 tahun">
									<label class="form-check-label" for="usia1sampai18">Usia 1 sampai < 18
											tahun</label>
								</div>
								<div class="small text-secondary">PEDIATRIC YORKHILL MALNUTRITION SCORE
									(PYMS)
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="usiaLebih18"
										name="kategoriaUsia" value="Usia > 18 tahun">
									<label class="form-check-label" for="usiaLebih18">Usia > 18
										tahun</label>
								</div>
								<div class="small text-secondary">MALNUTRITION UNIVERSAL SCREENING TOOL
									(MUST)
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<label class="form-label fw-bold">TOTAL SCORE</label>
						<div class="row mt-2">
							<div class="col-md-4">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="risikoTinggi"
										name="totalScore" value="≥ 2 (berisiko malnutrisi)">
									<label class="form-check-label" for="risikoTinggi">≥ 2 (berisiko
										malnutrisi)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="tidakBerisiko"
										name="totalScore" value="< 2 (tidak berisiko)">
									<label class="form-check-label" for="tidakBerisiko">
										< 2 (tidak
											berisiko)</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="risikoTinggi2"
										name="totalScore2" value="≥ 2 (berisiko malnutrisi)">
									<label class="form-check-label" for="risikoTinggi2">≥ 2 (berisiko
										malnutrisi)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="tidakBerisiko2"
										name="totalScore2" value="< 2 (tidak berisiko)">
									<label class="form-check-label" for="tidakBerisiko2">
										< 2 (tidak
											berisiko</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="risikoTinggi3"
										name="totalScore3" value="≥ 2 (risiko tinggi)">
									<label class="form-check-label" for="risikoTinggi3">≥ 2 (risiko
										tinggi)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="risikoSedang"
										name="totalScore3" value="1 (risiko sedang)">
									<label class="form-check-label" for="risikoSedang">1 (risiko
										sedang)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" id="risikoRendah"
										name="totalScore3" value="0 (risiko rendah)">
									<label class="form-check-label" for="risikoRendah">0 (risiko
										rendah)</label>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label fw-bold">Rumus IMT:</label>
								<div class="mb-2">
									<label class="form-label">BB (Kg)</label>
									<input type="text" class="form-control border-dark" name="beratBadan">
								</div>
								<div class="mb-2">
									<label class="form-label">(TB (m))²</label>
									<input type="text" class="form-control border-dark" name="tinggiBadan">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label fw-bold">Bila beresiko Malnutrisi : Sudah Konsul
									dengan Ahli Gizi</label>
								<div class="mb-2">
									<label class="form-label">Nama:</label>
									<input type="text" class="form-control border-dark" name="namaAhliGizi">
								</div>
								<div class="row">
									<div class="col-7">
										<label class="form-label">Tanggal:</label>
										<input type="date" class="form-control border-dark" name="tanggalKonsul">
									</div>
									<div class="col-5">
										<label class="form-label">Jam:</label>
										<input type="time" class="form-control border-dark" name="jamKonsul">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<label class="form-label">IMT:</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm" name="hasilIMT">
					</div>
				</td>
				<td class="align-content-start">
					<div class="card-body">
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="gangguanNutrisiKurang"
								name="masalahKeperawatanGizi" value="Gangguan resiko pemenuhan nutrisi
							kurang dari kebutuhan">
							<label class="form-check-label" for="gangguanNutrisiKurang">Gangguan/ resiko pemenuhan nutrisi
								kurang dari kebutuhan</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" id="gangguanNutrisiLebih"
								name="masalahKeperawatanGizi" value="Gangguan resiko pemenuhan nutrisi
							lebih dari kebutuhan">
							<label class="form-check-label" for="gangguanNutrisiLebih">Gangguan/ resiko pemenuhan nutrisi
								lebih dari kebutuhan</label>
						</div>
					</div>
				</td>
			</tr>
			<!--4-->
			<tr>
				<th>4. Perawatan Diri <small>(diisi oleh perawat)</small></th>
				<th>Masalah keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<p class="fw-bold">Isi format pengkajian status fungsional Barthel Indeks</p>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="statusFungsional" id="mandiri"
								value="mandiri">
							<label class="form-check-label" for="mandiri">Mandiri</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="statusFungsional" id="ketergantunganRingan"
								value="ketergantunganRingan">
							<label class="form-check-label" for="ketergantunganRingan">Ketergantungan Ringan</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="statusFungsional" id="ketergantunganSedang"
								value="ketergantunganSedang">
							<label class="form-check-label" for="ketergantunganSedang">Ketergantungan Sedang</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="statusFungsional" id="ketergantunganBerat"
								value="ketergantunganBerat">
							<label class="form-check-label" for="ketergantunganBerat">Ketergantungan Berat</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="statusFungsional" id="ketergantunganTotal"
								value="ketergantunganTotal">
							<label class="form-check-label" for="ketergantunganTotal">Ketergantungan Total</label>
						</div>
					</div>
				</td>
				<td>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan1" id="defisitPerawatanDiri"
							value="defisitPerawatanDiri">
						<label class="form-check-label" for="defisitPerawatanDiri">
							Defisit perawatan diri: Toileting/ Bathing/ Feeding/ Dressing
						</label>
					</div>
				</td>
			</tr>
			<!--5-->
			<tr>
				<th>5. Sistem Pernafasan <small>(diisi oleh perawat)</small></th>
				<th>Masalah keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row">
							<div class="col-2">a.</div>
							<div class="col-4">Septum nasi :</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="septumNasi" id="simetris"
										value="simetris">
									<label class="form-check-label" for="simetris">Simetris</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="septumNasi" id="tidakSimetris"
										value="tidakSimetris">
									<label class="form-check-label" for="tidakSimetris">Tidak simetris</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">b.</div>
							<div class="col-4">Bentuk dada :</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bentukDada" id="simetrisDada"
										value="simetris">
									<label class="form-check-label" for="simetrisDada">Simetris</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bentukDada" id="asimetris"
										value="asimetris">
									<label class="form-check-label" for="asimetris">Asimetris</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bentukDada" id="barrelChest"
										value="barrelChest">
									<label class="form-check-label" for="barrelChest">Barrel chest</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="bentukDada" id="funnelChest"
										value="funnelChest">
									<label class="form-check-label" for="funnelChest">Funnel chest</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="bentukDada" id="pigeonsChest"
										value="pigeonsChest">
									<label class="form-check-label" for="pigeonsChest">Pigeons chest</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">c.</div>
							<div class="col-4">RR:</div>
							<div class="col-7">
								<input type="text" class="form-control border-dark" id="rr" placeholder="X/Menit">
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">d.</div>
							<div class="col-4">Sesak:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sesak" id="sesakYa" value="ya">
									<label class="form-check-label" for="sesakYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sesak" id="sesakTidak" value="tidak">
									<label class="form-check-label" for="sesakTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">e.</div>
							<div class="col-4">Sianosis:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sianosis" id="sianosisYa" value="ya">
									<label class="form-check-label" for="sianosisYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sianosis" id="sianosisTidak"
										value="tidak">
									<label class="form-check-label" for="sianosisTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">f.</div>
							<div class="col-4">Batuk:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="batuk" id="produktif"
										value="produktif">
									<label class="form-check-label" for="produktif">Produktif</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="batuk" id="tidakProduktif"
										value="tidakProduktif">
									<label class="form-check-label" for="tidakProduktif">Tidak produktif</label>
								</div>

								<div class="mt-2">
									<div class="row mb-2">
										<label class="col-4">Sekret :</label>
										<div class="col-8">
											<input type="text" class="form-control border-dark" id="sekret"
												placeholder="Konsistensi...">
										</div>
									</div>

									<div class="row">
										<label class="col-4">Warna:</label>
										<div class="col-8">
											<input type="text" class="form-control border-dark" id="warnaSekret">
										</div>
									</div>

									<div class="row mt-2">
										<label class="col-4">Bau:</label>
										<div class="col-8">
											<input type="text" class="form-control border-dark" id="bauSekret">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">g.</div>
							<div class="col-4">Pola nafas/irama:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="polaNafas" id="teratur"
										value="teratur">
									<label class="form-check-label" for="teratur">Teratur</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="polaNafas" id="tidakTeratur"
										value="tidakTeratur">
									<label class="form-check-label" for="tidakTeratur">Tidak teratur</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">h.</div>
							<div class="col-4">Jenis pernafasan:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="jenisPernafasan" id="dispnoe"
										value="dispnoe">
									<label class="form-check-label" for="dispnoe">Dispnoe</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="jenisPernafasan" id="kusmaul"
										value="kusmaul">
									<label class="form-check-label" for="kusmaul">Kusmaul</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="jenisPernafasan" id="ceyneStokes"
										value="ceyneStokes">
									<label class="form-check-label" for="ceyneStokes">Ceyne Stokes</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">i.</div>
							<div class="col-4">Pernafasan cuping hidung:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pernafasanCupingHidung"
										id="cupingAda" value="ada">
									<label class="form-check-label" for="cupingAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pernafasanCupingHidung"
										id="cupingTidak" value="tidak">
									<label class="form-check-label" for="cupingTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">j.</div>
							<div class="col-4">Suara nafas:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="suaraNafas" id="vesiculer"
										value="vesiculer">
									<label class="form-check-label" for="vesiculer">Vesiculer</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="suaraNafas" id="ronchi"
										value="ronchi">
									<label class="form-check-label" for="ronchi">Ronchi</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="suaraNafas" id="wheezingDS"
										value="wheezingDS">
									<label class="form-check-label" for="wheezingDS">Wheezing D/S</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">k.</div>
							<div class="col-4">Alat bantu nafas:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="alatBantuNafas" id="bantuYa"
										value="ya">
									<label class="form-check-label" for="bantuYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="alatBantuNafas" id="bantuTidak"
										value="tidak">
									<label class="form-check-label" for="bantuTidak">Tidak</label>
								</div>

								<div class="mt-2">
									<div class="row mb-2">
										<label class="col-4">Flow O<sub>2</sub>:</label>
										<div class="col-8">
											<div class="input-group">
												<input type="number" class="form-control border-dark" id="flowO2">
												<span class="input-group-text">Liter/menit</span>
											</div>
										</div>
									</div>

									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="jenisAlatBantu" id="nasalCanule"
											value="nasalCanule">
										<label class="form-check-label" for="nasalCanule">Nasal canule</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="jenisAlatBantu" id="sungkup"
											value="sungkup">
										<label class="form-check-label" for="sungkup">Sungkup</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="jenisAlatBantu"
											id="reBreathingMask" value="reBreathingMask">
										<label class="form-check-label" for="reBreathingMask">Re-Breathing Mask</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">l.</div>
							<div class="col-4">Penggunaan WSD:</div>
							<div class="col-7">
								<div class="mb-2">
									<label for="jenisCairan" class="form-label">Jenis cairan:</label>
									<input type="text" class="form-control border-dark" id="jenisCairan">
								</div>
								<div class="mb-2">
									<label for="jumlahCairan" class="form-label">Jumlah cairan:</label>
									<input type="text" class="form-control border-dark" id="jumlahCairan">
								</div>
								<div class="mb-2">
									<label for="undulasi" class="form-label">Undulasi:</label>
									<input type="text" class="form-control border-dark" id="undulasi">
								</div>
								<div class="mb-2">
									<label for="tekanan" class="form-label">Tekanan:</label>
									<input type="text" class="form-control border-dark" id="tekanan">
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">m.</div>
							<div class="col-4">Trakeostomy:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="trakeostomy" id="trakeostomyYa"
										value="ya">
									<label class="form-check-label" for="trakeostomyYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="trakeostomy" id="trakeostomyTidak"
										value="tidak">
									<label class="form-check-label" for="trakeostomyTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan2" id="gangguanPolaNafas"
							value="gangguanPolaNafas">
						<label class="form-check-label" for="gangguanPolaNafas">Gangguan Pola Nafas</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan2" id="bersihkanJalanNafas"
							value="bersihkanJalanNafas">
						<label class="form-check-label" for="bersihkanJalanNafas">Bersihkan Jalan Nafas tidak
							efektif</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan2" id="gangguan"
							value="gangguan">
						<label class="form-check-label" for="gangguan">Gangguan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan2" id="pertukaranGas"
							value="pertukaranGas">
						<label class="form-check-label" for="pertukaranGas">Pertukaran gas</label>
					</div>
				</td>
			</tr>
			<!--6-->
			<tr>
				<th>6. Sistem Kardiovaskuler <small>(diisi oleh dokter)</small></th>
				<th>Masalah keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row">
							<div class="col-2">a.</div>
							<div class="col-4">Konjungtiva pucat:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konjungtivaPucat" id="konjungtivaYa"
										value="ya">
									<label class="form-check-label" for="konjungtivaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konjungtivaPucat"
										id="konjungtivaTidak" value="tidak">
									<label class="form-check-label" for="konjungtivaTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">b.</div>
							<div class="col-4">Bunyi jantung:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bunyiJantung" id="normal"
										value="normal">
									<label class="form-check-label" for="normal">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bunyiJantung" id="murmur"
										value="murmur">
									<label class="form-check-label" for="murmur">Murmur</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bunyiJantung" id="gallop"
										value="gallop">
									<label class="form-check-label" for="gallop">Gallop</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bunyiJantung" id="lainLain"
										value="lainLain">
									<label class="form-check-label" for="lainLain">Lain-lain</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">c.</div>
							<div class="col-4">Irama jantung:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="iramaJantung" id="reguler"
										value="reguler">
									<label class="form-check-label" for="reguler">Reguler</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="iramaJantung" id="ireguler"
										value="ireguler">
									<label class="form-check-label" for="ireguler">Ireguler</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="iramaJantung" id="s1s2Tunggal"
										value="s1s2Tunggal">
									<label class="form-check-label" for="s1s2Tunggal">S1/S2 Tunggal</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">d.</div>
							<div class="col-4">Dispnoe:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="dispnoe" id="dispnoeYa" value="ya">
									<label class="form-check-label" for="dispnoeYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="dispnoe" id="dispnoeTidak"
										value="tidak">
									<label class="form-check-label" for="dispnoeTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">e.</div>
							<div class="col-4">Ortopnoe:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ortopnoe" id="ortopnoeYa" value="ya">
									<label class="form-check-label" for="ortopnoeYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ortopnoe" id="ortopnoeTidak"
										value="tidak">
									<label class="form-check-label" for="ortopnoeTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">f.</div>
							<div class="col-4">Akral Dingin:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="akralDingin" id="akralDinginYa"
										value="ya">
									<label class="form-check-label" for="akralDinginYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="akralDingin" id="akralDinginTidak"
										value="tidak">
									<label class="form-check-label" for="akralDinginTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">g.</div>
							<div class="col-4">Kulit Pucat:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulitPucat" id="kulitPucatYa"
										value="ya">
									<label class="form-check-label" for="kulitPucatYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulitPucat" id="kulitPucatTidak"
										value="tidak">
									<label class="form-check-label" for="kulitPucatTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">h.</div>
							<div class="col-4">Edema:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="edema" id="edemaYa" value="ya">
									<label class="form-check-label" for="edemaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="edema" id="edemaTidak" value="tidak">
									<label class="form-check-label" for="edemaTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-2">i.</div>
							<div class="col-4">Distensi Vena Jugularis:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="distensiVena" id="distensiVenaYa"
										value="ya">
									<label class="form-check-label" for="distensiVenaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="distensiVena" id="distensiVenaTidak"
										value="tidak">
									<label class="form-check-label" for="distensiVenaTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan3" id="penurunanCurahJantung"
							value="penurunanCurahJantung">
						<label class="form-check-label" for="penurunanCurahJantung">Penurunan curah jantung</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan3" id="intoleransiAktivitas"
							value="intoleransiAktivitas">
						<label class="form-check-label" for="intoleransiAktivitas">Intoleransi aktivitas</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan3"
							id="perfusiJaringanTidakEfektif" value="perfusiJaringanTidakEfektif">
						<label class="form-check-label" for="perfusiJaringanTidakEfektif">Perfusi jaringan tidak
							efektif</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan3" id="ansietas"
							value="ansietas">
						<label class="form-check-label" for="ansietas">Ansietas</label>
					</div>
				</td>
			</tr>
			<!--7-->
			<tr>
				<th>7. Sistem Persarafan <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row">
							<div class="col-1">a.</div>
							<div class="col-4">Refleks fisiologis:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<label class="form-check-label">Patella Kiri</label>
									<div class="ms-2">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="patellaKiri"
												id="patellaKiriNormal" value="normal">
											<label class="form-check-label" for="patellaKiriNormal">Normal</label>
										</div>
									</div>
								</div>
								<div class="form-check form-check-inline">
									<label class="form-check-label">Patella Kanan</label>
									<div class="ms-2">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="patellaKanan"
												id="patellaKananNormal" value="normal">
											<label class="form-check-label" for="patellaKananNormal">Normal</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">b.</div>
							<div class="col-4">Refleks patologis:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="refleksPatologis" id="babinsky"
										value="babinsky">
									<label class="form-check-label" for="babinsky">babinsky</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="refleksPatologis" id="budzinski"
										value="budzinski">
									<label class="form-check-label" for="budzinski">budzinski</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="refleksPatologis" id="kernig"
										value="kernig">
									<label class="form-check-label" for="kernig">kernig</label>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">c.</div>
							<div class="col-4">Pemeriksaan saraf kranial:</div>
							<div class="col-7">
								<div class="row mb-2">
									<div class="col-2">N1</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN1" id="n1Normal"
												value="normal">
											<label class="form-check-label" for="n1Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN1" id="n1Tidak"
												value="tidak">
											<label class="form-check-label" for="n1Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n1Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n1Keterangan"
												name="n1Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N2</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN2" id="n2Normal"
												value="normal">
											<label class="form-check-label" for="n2Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN2" id="n2Tidak"
												value="tidak">
											<label class="form-check-label" for="n2Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n2Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n2Keterangan"
												name="n2Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N3</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN3" id="n3Normal"
												value="normal">
											<label class="form-check-label" for="n3Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN3" id="n3Tidak"
												value="tidak">
											<label class="form-check-label" for="n3Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n3Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n3Keterangan"
												name="n3Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N4</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN4" id="n4Normal"
												value="normal">
											<label class="form-check-label" for="n4Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN4" id="n4Tidak"
												value="tidak">
											<label class="form-check-label" for="n4Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n4Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n4Keterangan"
												name="n4Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N5</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN5" id="n5Normal"
												value="normal">
											<label class="form-check-label" for="n5Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN5" id="n5Tidak"
												value="tidak">
											<label class="form-check-label" for="n5Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n5Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n5Keterangan"
												name="n5Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N6</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN6" id="n6Normal"
												value="normal">
											<label class="form-check-label" for="n6Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN6" id="n6Tidak"
												value="tidak">
											<label class="form-check-label" for="n6Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n6Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n6Keterangan"
												name="n6Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N7</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN7" id="n7Normal"
												value="normal">
											<label class="form-check-label" for="n7Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN7" id="n7Tidak"
												value="tidak">
											<label class="form-check-label" for="n7Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n7Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n7Keterangan"
												name="n7Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N8</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN8" id="n8Normal"
												value="normal">
											<label class="form-check-label" for="n8Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN8" id="n8Tidak"
												value="tidak">
											<label class="form-check-label" for="n8Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n8Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n8Keterangan"
												name="n8Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N9</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN9" id="n9Normal"
												value="normal">
											<label class="form-check-label" for="n9Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN9" id="n9Tidak"
												value="tidak">
											<label class="form-check-label" for="n9Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n9Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n9Keterangan"
												name="n9Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N10</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN10" id="n10Normal"
												value="normal">
											<label class="form-check-label" for="n10Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN10" id="n10Tidak"
												value="tidak">
											<label class="form-check-label" for="n10Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n10Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n10Keterangan"
												name="n10Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N11</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN11" id="n11Normal"
												value="normal">
											<label class="form-check-label" for="n11Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN11" id="n11Tidak"
												value="tidak">
											<label class="form-check-label" for="n11Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n11Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n11Keterangan"
												name="n11Keterangan">
										</div>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-2">N12</div>
									<div class="col-5">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN12" id="n12Normal"
												value="normal">
											<label class="form-check-label" for="n12Normal">Normal</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="sarafN12" id="n12Tidak"
												value="tidak">
											<label class="form-check-label" for="n12Tidak">Tidak</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="n12Keterangan">Ket.</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="n12Keterangan"
												name="n12Keterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">d.</div>
							<div class="col-4">Riwayat Kejang:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="riwayatKejang" id="kejangYa"
										value="ya">
									<label class="form-check-label" for="kejangYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="riwayatKejang" id="kejangTidak"
										value="tidak">
									<label class="form-check-label" for="kejangTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="kejangKapan">Jika Ya, Kapan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="kejangKapan"
												name="kejangKapan">
										</div>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="kejangDurasi">Durasi Kejang:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="kejangDurasi"
												name="kejangDurasi">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan7"
							id="gangguanPerfusiJaringanSerebral" value="gangguanPerfusiJaringanSerebral">
						<label class="form-check-label" for="gangguanPerfusiJaringanSerebral">Gangguan perfusi jaringan
							serebral</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan7" id="kelemahan"
							value="kelemahan">
						<label class="form-check-label" for="kelemahan">Kelemahan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan7" id="resikoJatuh"
							value="resikoJatuh">
						<label class="form-check-label" for="resikoJatuh">Resiko cedera/jatuh</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan7" id="hipertermi"
							value="hipertermi">
						<label class="form-check-label" for="hipertermi">Hipertermi</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan7" id="konfusiKronik"
							value="konfusiKronik">
						<label class="form-check-label" for="konfusiKronik">Konfusi Kronik</label>
					</div>
				</td>
			</tr>
			<!--8-->
			<tr>
				<th>8. Sistem Penglihatan <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row">
							<div class="col-1">a.</div>
							<div class="col-4">Mata:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mata" id="simetris" value="simetris">
									<label class="form-check-label" for="simetris">Simetris</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mata" id="asimetris"
										value="asimetris">
									<label class="form-check-label" for="asimetris">Asimetris</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="mataKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="mataKeterangan"
												name="mataKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">b.</div>
							<div class="col-4">Pupil:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pupil" id="isokor" value="isokor">
									<label class="form-check-label" for="isokor">Isokor</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pupil" id="anisokor"
										value="anisokor">
									<label class="form-check-label" for="anisokor">Anisokor</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pupil" id="midriasis"
										value="midriasis">
									<label class="form-check-label" for="midriasis">Midriasis</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pupil" id="miosis" value="miosis">
									<label class="form-check-label" for="miosis">Miosis</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="pupilKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="pupilKeterangan"
												name="pupilKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">c.</div>
							<div class="col-4">Refleks cahaya:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="refleksCahaya" id="positif"
										value="positif">
									<label class="form-check-label" for="positif">Positif</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="refleksCahaya" id="negatif"
										value="negatif">
									<label class="form-check-label" for="negatif">Negatif</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="refleksCahayaKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm"
												id="refleksCahayaKeterangan" name="refleksCahayaKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">d.</div>
							<div class="col-4">Sklera:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sklera" id="anikterus"
										value="anikterus">
									<label class="form-check-label" for="anikterus">Anikterus</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sklera" id="ikterus" value="ikterus">
									<label class="form-check-label" for="ikterus">Ikterus</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="skleraKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="skleraKeterangan"
												name="skleraKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">e.</div>
							<div class="col-4">Konjungtiva:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konjungtiva" id="pucat"
										value="pucat">
									<label class="form-check-label" for="pucat">Pucat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konjungtiva" id="merahMuda"
										value="merahMuda">
									<label class="form-check-label" for="merahMuda">Merah muda</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konjungtiva" id="merah"
										value="merah">
									<label class="form-check-label" for="merah">Merah</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="konjungtivaKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm"
												id="konjungtivaKeterangan" name="konjungtivaKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">f.</div>
							<div class="col-4">Palpebra:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="palpebra" id="edema" value="edema">
									<label class="form-check-label" for="edema">Edema</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="palpebra" id="palpebraTidak"
										value="tidak">
									<label class="form-check-label" for="palpebraTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="palpebraKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="palpebraKeterangan"
												name="palpebraKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">g.</div>
							<div class="col-4">Pergerakan bola mata:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pergerakanBolaMata"
										id="pergerakanAda" value="ada">
									<label class="form-check-label" for="pergerakanAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pergerakanBolaMata"
										id="pergerakanTidak" value="tidak">
									<label class="form-check-label" for="pergerakanTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="pergerakanKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm"
												id="pergerakanKeterangan" name="pergerakanKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">h.</div>
							<div class="col-4">Strabismus:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="strabismus" id="strabismusAda"
										value="ada">
									<label class="form-check-label" for="strabismusAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="strabismus" id="strabismusTidak"
										value="tidak">
									<label class="form-check-label" for="strabismusTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="strabismusKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm"
												id="strabismusKeterangan" name="strabismusKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">i.</div>
							<div class="col-4">Menggunakan alat bantu:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="alatBantuYa"
										value="ya">
									<label class="form-check-label" for="alatBantuYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="alatBantuTidak"
										value="tidak">
									<label class="form-check-label" for="alatBantuTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="alatBantuKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="alatBantuKeterangan"
												name="alatBantuKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<div class="row">
							<div class="col-1">j.</div>
							<div class="col-4">Massa:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="massa" id="massaAda" value="ada">
									<label class="form-check-label" for="massaAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="massa" id="massaTidak" value="tidak">
									<label class="form-check-label" for="massaTidak">Tidak</label>
								</div>
								<div class="form-check form-check-inline ms-3">
									<label class="form-check-label">Jika</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group">
											<label for="massaKeterangan">Keterangan:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="massaKeterangan"
												name="massaKeterangan">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan8" id="gangguanPersepsiSensori"
							value="gangguanPersepsiSensori">
						<label class="form-check-label" for="gangguanPersepsiSensori">Gangguan persepsi sensori:
							penglihatan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan8" id="resikoTrauma"
							value="resikoTrauma">
						<label class="form-check-label" for="resikoTrauma">Resiko trauma</label>
					</div>
				</td>
			</tr>
			<!--9-->
			<tr>
				<th class="align-middle">9. Sistem Penghidung dan Pendengaran <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row">
							<div class="col-12 fw-bold mb-2">1. Penghidung</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">a)</div>
							<div class="col-4">Tulang hidung dan posisi septum nasi:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="tulangHidung" id="simetris"
										value="simetris">
									<label class="form-check-label" for="simetris">Simetris</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="tulangHidung" id="asimetris"
										value="asimetris">
									<label class="form-check-label" for="asimetris">Asimetris</label>
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">b)</div>
							<div class="col-4">Mukosa:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosa" id="lembab" value="lembab">
									<label class="form-check-label" for="lembab">Lembab</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosa" id="kering" value="kering">
									<label class="form-check-label" for="kering">Kering</label>
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">c)</div>
							<div class="col-4">Sekret:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sekretHidung" id="jernih"
										value="jernih">
									<label class="form-check-label" for="jernih">Jernih</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sekretHidung" id="purulen"
										value="purulen">
									<label class="form-check-label" for="purulen">Purulen</label>
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">d)</div>
							<div class="col-4">Massa:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="massaHidung" id="massaHidungAda"
										value="ada">
									<label class="form-check-label" for="massaHidungAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="massaHidung" id="massaHidungTidak"
										value="tidak">
									<label class="form-check-label" for="massaHidungTidak">Tidak</label>
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-1"></div>
							<div class="col-4">Keterangan:</div>
							<div class="col-7">
								<div class="form-group">
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="hidungKeterangan"
										name="hidungKeterangan">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12 fw-bold mb-2">2. Pendengaran</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">a)</div>
							<div class="col-4">Bentuk telinga:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bentukTelinga" id="telingaSimetris"
										value="simetris">
									<label class="form-check-label" for="telingaSimetris">Simetris</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bentukTelinga" id="telingaAsimetris"
										value="asimetris">
									<label class="form-check-label" for="telingaAsimetris">Asimetris</label>
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">b)</div>
							<div class="col-4">Massa:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="massaTelinga" id="massaTelingaAda"
										value="ada">
									<label class="form-check-label" for="massaTelingaAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="massaTelinga" id="massaTelingaTidak"
										value="tidak">
									<label class="form-check-label" for="massaTelingaTidak">Tidak</label>
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1"></div>
							<div class="col-4">Keterangan:</div>
							<div class="col-7">
								<div class="form-group">
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="massaTelingaKeterangan"
										name="massaTelingaKeterangan">
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">c)</div>
							<div class="col-4">Benda Asing:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bendaAsing" id="bendaAsingAda"
										value="ada">
									<label class="form-check-label" for="bendaAsingAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bendaAsing" id="bendaAsingTidak"
										value="tidak">
									<label class="form-check-label" for="bendaAsingTidak">Tidak</label>
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1"></div>
							<div class="col-4">Keterangan:</div>
							<div class="col-7">
								<div class="form-group">
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="bendaAsingKeterangan"
										name="bendaAsingKeterangan">
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">d)</div>
							<div class="col-4">Sekret:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sekretTelinga" id="sekretTidak"
										value="tidak">
									<label class="form-check-label" for="sekretTidak">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="sekretTelinga" id="adaDanBerbau"
										value="adaDanBerbau">
									<label class="form-check-label" for="adaDanBerbau">Ada dan berbau</label>
								</div>
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">e)</div>
							<div class="col-4">Alat bantu:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="alatBantuTelinga" id="alatBantuYa"
										value="ya">
									<label class="form-check-label" for="alatBantuYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="alatBantuTelinga" id="alatBantuTidak"
										value="tidak">
									<label class="form-check-label" for="alatBantuTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan9"
							id="gangguanPersepsiPenciuman" value="gangguanPersepsiPenciuman">
						<label class="form-check-label" for="gangguanPersepsiPenciuman">Gangguan persepsi sensori :
							penciuman</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan9"
							id="gangguanPersepsiPendengaran" value="gangguanPersepsiPendengaran">
						<label class="form-check-label" for="gangguanPersepsiPendengaran">Gangguan persepsi sensori :
							pendengaran</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan9"
							id="hambatanKomunikasiVerbal" value="hambatanKomunikasiVerbal">
						<label class="form-check-label" for="hambatanKomunikasiVerbal">Hambatan komunikasi verbal</label>
					</div>
				</td>
			</tr>
			<!--10-->
			<tr>
				<th class="align-middle">10. Sistem Pencernaan <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row mb-2">
							<div class="col-1">a.</div>
							<div class="col-4">Mulut:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mulut" id="bersih" value="bersih">
									<label class="form-check-label" for="bersih">Bersih</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mulut" id="kotor" value="kotor">
									<label class="form-check-label" for="kotor">Kotor</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">b.</div>
							<div class="col-4">Mukosa mulut:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosaMulut" id="lembab"
										value="lembab">
									<label class="form-check-label" for="lembab">Lembab</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosaMulut" id="kering"
										value="kering">
									<label class="form-check-label" for="kering">Kering</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosaMulut" id="merah"
										value="merah">
									<label class="form-check-label" for="merah">Merah</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosaMulut" id="stomatitis"
										value="stomatitis">
									<label class="form-check-label" for="stomatitis">Stomatitis</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">c.</div>
							<div class="col-4">Tenggorokan:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="tenggorokan" id="nyeriTelan"
										value="nyeriTelan">
									<label class="form-check-label" for="nyeriTelan">Nyeri telan</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="tenggorokan" id="sulitMenelan"
										value="sulitMenelan">
									<label class="form-check-label" for="sulitMenelan">Sulit menelan</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Pembesaran tonsil:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pembesaranTonsil"
										id="pembesaranTonsilYa" value="ya">
									<label class="form-check-label" for="pembesaranTonsilYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pembesaranTonsil"
										id="pembesaranTonsilNyeri" value="nyeriTekan">
									<label class="form-check-label" for="pembesaranTonsilNyeri">Nyeri tekan</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">d.</div>
							<div class="col-4">Abdomen:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="abdomen" id="supel" value="supel">
									<label class="form-check-label" for="supel">Supel</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="abdomen" id="tegang" value="tegang">
									<label class="form-check-label" for="tegang">Tegang</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="abdomen" id="abdomenNyeriTekan"
										value="nyeriTekan">
									<label class="form-check-label" for="abdomenNyeriTekan">Nyeri tekan</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Pembesaran hepar:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pembesaranHepar"
										id="pembesaranHeparYa" value="ya">
									<label class="form-check-label" for="pembesaranHeparYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pembesaranHepar"
										id="pembesaranHeparTidak" value="tidak">
									<label class="form-check-label" for="pembesaranHeparTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Pembesaran lien:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pembesaranLien" id="pembesaranLienYa"
										value="ya">
									<label class="form-check-label" for="pembesaranLienYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pembesaranLien"
										id="pembesaranLienTidak" value="tidak">
									<label class="form-check-label" for="pembesaranLienTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Ascites:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ascites" id="ascitesYa" value="ya">
									<label class="form-check-label" for="ascitesYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ascites" id="ascitesTidak"
										value="tidak">
									<label class="form-check-label" for="ascitesTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Drain:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="drain" id="drainAda" value="ada">
									<label class="form-check-label" for="drainAda">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="drain" id="drainTidak" value="tidak">
									<label class="form-check-label" for="drainTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<ul class="list-style-bullet ps-0">
											<li>
												<div class="form-group mb-2">
													<label for="drainJumlah">Jumlah:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="drainJumlah"
														name="drainJumlah">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="drainWarna">Warna:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="drainWarna"
														name="drainWarna">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="drainKondisiArea">Kondisi area sekitar insersi:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm"
														id="drainKondisiArea" name="drainKondisiArea">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">e.</div>
							<div class="col-4">Mual:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mual" id="mualYa" value="ya">
									<label class="form-check-label" for="mualYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mual" id="mualTidak" value="tidak">
									<label class="form-check-label" for="mualTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">f.</div>
							<div class="col-4">Muntah:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="muntah" id="muntahYa" value="ya">
									<label class="form-check-label" for="muntahYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="muntah" id="muntahTidak"
										value="tidak">
									<label class="form-check-label" for="muntahTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group mb-2">
											<label for="muntahFrekuensi">Frekuensi:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="muntahFrekuensi"
												name="muntahFrekuensi">
										</div>
										<div class="form-group">
											<label for="muntahIsi">Isi Muntah:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="muntahIsi"
												name="muntahIsi">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">g.</div>
							<div class="col-4">Terpasang NGT:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ngt" id="ngtYa" value="ya">
									<label class="form-check-label" for="ngtYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ngt" id="ngtTidak" value="tidak">
									<label class="form-check-label" for="ngtTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">h.</div>
							<div class="col-4">Bising usus:</div>
							<div class="col-7">
								<div class="form-group">
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="bisingUsus"
										name="bisingUsus" placeholder="....... x/mnt">
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">i.</div>
							<div class="col-4">BAB:</div>
							<div class="col-7">
								<div class="form-group">
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="bab" name="bab"
										placeholder="....... x/hr">
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">j.</div>
							<div class="col-4">Konsistensi:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konsistensi" id="padat"
										value="padat">
									<label class="form-check-label" for="padat">Padat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konsistensi" id="lunak"
										value="lunak">
									<label class="form-check-label" for="lunak">Lunak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="konsistensi" id="cairLendir"
										value="cairLendir">
									<label class="form-check-label" for="cairLendir">Cair lendir/darah</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="konsistensi" id="konstipasi"
										value="konstipasi">
									<label class="form-check-label" for="konstipasi">Konstipasi</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="konsistensi" id="inkontinensia"
										value="inkontinensia">
									<label class="form-check-label" for="inkontinensia">Inkontinensia</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="konsistensi" id="kolostomi"
										value="kolostomi">
									<label class="form-check-label" for="kolostomi">Kolostomi</label>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan10" id="konstipasiBab"
							value="konstipasiBab">
						<label class="form-check-label" for="konstipasiBab">Gangguan pola eliminasi BAB : Konstipasi</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan10" id="diare" value="diare">
						<label class="form-check-label" for="diare">Gangguan pola eliminasi BAB: Diare</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan10" id="gangguanMenelan"
							value="gangguanMenelan">
						<label class="form-check-label" for="gangguanMenelan">Gangguan menelan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan10" id="gangguanMembranMukosa"
							value="gangguanMembranMukosa">
						<label class="form-check-label" for="gangguanMembranMukosa">Gangguan membran mukosa</label>
					</div>
				</td>
			</tr>
			<!--11-->
			<tr>
				<th>11. Sistem Perkemihan <small>(diisi oleh dokter)</small></th>
				<th>Masalah keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="row mb-2">
						<div class="col-1">a.</div>
						<div class="col-4">Kebersihan genitalia:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kebersihanGenitalia" id="bersih"
									value="bersih">
								<label class="form-check-label" for="bersih">Bersih</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kebersihanGenitalia" id="kotor"
									value="kotor">
								<label class="form-check-label" for="kotor">Kotor</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">b.</div>
						<div class="col-4">Sekret:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="sekret" id="sekretAda" value="ada">
								<label class="form-check-label" for="sekretAda">Ada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="sekret" id="sekretTidak" value="tidak">
								<label class="form-check-label" for="sekretTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">c.</div>
						<div class="col-4">Ulkus:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="ulkus" id="ulkusAda" value="ada">
								<label class="form-check-label" for="ulkusAda">Ada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="ulkus" id="ulkusTidak" value="tidak">
								<label class="form-check-label" for="ulkusTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">d.</div>
						<div class="col-4">Kebersihan Meatus uretera:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kebersihanMeatus" id="meatusBersih"
									value="bersih">
								<label class="form-check-label" for="meatusBersih">Bersih</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kebersihanMeatus" id="meatusKotor"
									value="kotor">
								<label class="form-check-label" for="meatusKotor">Kotor</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">e.</div>
						<div class="col-4">Keluhan Miksi:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="keluhanMiksi" id="miksiAda" value="ada">
								<label class="form-check-label" for="miksiAda">Ada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="keluhanMiksi" id="miksiTidak"
									value="tidak">
								<label class="form-check-label" for="miksiTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Retensi urine:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="retensiUrine" id="retensiYa" value="ya">
								<label class="form-check-label" for="retensiYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="retensiUrine" id="retensiTidak"
									value="tidak">
								<label class="form-check-label" for="retensiTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Inkontinensia urine:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="inkontinensia" id="inkontinensiaYa"
									value="ya">
								<label class="form-check-label" for="inkontinensiaYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="inkontinensia" id="inkontinensiaTidak"
									value="tidak">
								<label class="form-check-label" for="inkontinensiaTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Urgensi urine:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="urgensiUrine" id="urgensiYa" value="ya">
								<label class="form-check-label" for="urgensiYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="urgensiUrine" id="urgensiTidak"
									value="tidak">
								<label class="form-check-label" for="urgensiTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Nocturia:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="nocturia" id="nocturiaYa" value="ya">
								<label class="form-check-label" for="nocturiaYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="nocturia" id="nocturiaTidak"
									value="tidak">
								<label class="form-check-label" for="nocturiaTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Disuria:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="disuria" id="disuriaYa" value="ya">
								<label class="form-check-label" for="disuriaYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="disuria" id="disuriaTidak" value="tidak">
								<label class="form-check-label" for="disuriaTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Oliguri:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="oliguri" id="oliguriYa" value="ya">
								<label class="form-check-label" for="oliguriYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="oliguri" id="oliguriTidak" value="tidak">
								<label class="form-check-label" for="oliguriTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Anuria:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="anuria" id="anuriaYa" value="ya">
								<label class="form-check-label" for="anuriaYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="anuria" id="anuriaTidak" value="tidak">
								<label class="form-check-label" for="anuriaTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">-</div>
						<div class="col-4">Poliuri:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="poliuri" id="poliuriYa" value="ya">
								<label class="form-check-label" for="poliuriYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="poliuri" id="poliuriTidak" value="tidak">
								<label class="form-check-label" for="poliuriTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">f.</div>
						<div class="col-4">Nyeri BAK:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="nyeriBak" id="nyeriBakYa" value="ya">
								<label class="form-check-label" for="nyeriBakYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="nyeriBak" id="nyeriBakTidak"
									value="tidak">
								<label class="form-check-label" for="nyeriBakTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">g.</div>
						<div class="col-4">Dialysis:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="dialysis" id="dialysisYa" value="ya">
								<label class="form-check-label" for="dialysisYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="dialysis" id="dialysisTidak"
									value="tidak">
								<label class="form-check-label" for="dialysisTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">h.</div>
						<div class="col-4">Kemampuan berkemih:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kemampuanBerkemih" id="spontan"
									value="spontan">
								<label class="form-check-label" for="spontan">Spontan</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kemampuanBerkemih" id="alatBantu"
									value="alatBantu">
								<label class="form-check-label" for="alatBantu">Alat bantu</label>
							</div>
							<div class="row mt-2">
								<div class="col-12">
									<div class="form-group mb-2">
										<label for="sebutkanAlat">Sebutkan:</label>
										<input type="text" class="form-control border-dark form-control border-dark-sm" id="sebutkanAlat"
											name="sebutkanAlat" placeholder="Jenis:">
									</div>
									<div class="form-group mb-2">
										<label for="ukuranAlat">Ukuran:</label>
										<input type="text" class="form-control border-dark form-control border-dark-sm" id="ukuranAlat"
											name="ukuranAlat">
									</div>
									<div class="form-group mb-2">
										<label for="hariKe">Hari ke:</label>
										<input type="text" class="form-control border-dark form-control border-dark-sm" id="hariKe" name="hariKe">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">i.</div>
						<div class="col-4">Produksi urine:</div>
						<div class="col-7">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="produksiUrine"
									name="produksiUrine" placeholder="............ ml/jam">
							</div>
							<div class="form-group mb-2">
								<label for="warnaUrine">Warna:</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="warnaUrine" name="warnaUrine">
							</div>
							<div class="form-group mb-2">
								<label for="bauUrine">Bau:</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="bauUrine" name="bauUrine">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">j.</div>
						<div class="col-4">Kandung kemih:</div>
						<div class="col-7">
							<div class="row mb-2">
								<div class="col-4">Membesar:</div>
								<div class="col-8">
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="radio" name="membesar" id="membesarYa"
											value="ya">
										<label class="form-check-label" for="membesarYa">Ya</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="radio" name="membesar" id="membesarTidak"
											value="tidak">
										<label class="form-check-label" for="membesarTidak">Tidak</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-4">Nyeri Tekan:</div>
								<div class="col-8">
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="radio" name="nyeriTekan" id="nyeriTekanYa"
											value="ya">
										<label class="form-check-label" for="nyeriTekanYa">Ya</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="radio" name="nyeriTekan" id="nyeriTekanTidak"
											value="tidak">
										<label class="form-check-label" for="nyeriTekanTidak">Tidak</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">k.</div>
						<div class="col-4">Intake Cairan:</div>
						<div class="col-7">
							<div class="form-group mb-2">
								<label for="oralIntake">Oral:</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="oralIntake" name="oralIntake"
									placeholder="............ cc/hari">
							</div>
							<div class="form-group mb-2">
								<label for="parenteralIntake">Parenteral:</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="parenteralIntake"
									name="parenteralIntake" placeholder="............ cc/hari">
							</div>
							<div class="form-group mb-2">
								<label for="balanceCairan">Balance Cairan:</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="balanceCairan"
									name="balanceCairan">
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan11" id="gangguanBak"
							value="gangguanBak">
						<label class="form-check-label" for="gangguanBak">Gangguan pola eliminasi BAK</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan11"
							id="gangguanKeseimbanganCairan" value="gangguanKeseimbanganCairan">
						<label class="form-check-label" for="gangguanKeseimbanganCairan">Gangguan keseimbangan
							cairan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan11" id="resikoInfeksi"
							value="resikoInfeksi">
						<label class="form-check-label" for="resikoInfeksi">Resiko infeksi</label>
					</div>
				</td>
			</tr>
			<!--12-->
			<tr>
				<th>12. Sistem Muskuloskeletal <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="row mb-2">
						<div class="col-1">1.</div>
						<div class="col-11">Persendian:</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">A.</div>
						<div class="col-11">Kekakuan</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">a.</div>
						<div class="col-4">Apakah terjadinya pagi hari</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kekakuanPagiHari" id="kekakuanPagiHariYa"
									value="ya">
								<label class="form-check-label" for="kekakuanPagiHariYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kekakuanPagiHari"
									id="kekakuanPagiHariTidak" value="tidak">
								<label class="form-check-label" for="kekakuanPagiHariTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">b.</div>
						<div class="col-4">Apakah terjadi setelah istirahat</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kekakuanSetelahIstirahat"
									id="kekakuanSetelahIstirahatYa" value="ya">
								<label class="form-check-label" for="kekakuanSetelahIstirahatYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kekakuanSetelahIstirahat"
									id="kekakuanSetelahIstirahatTidak" value="tidak">
								<label class="form-check-label" for="kekakuanSetelahIstirahatTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">B.</div>
						<div class="col-11">Pembengkakan, panas dan kemerahan pada sendi</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">a.</div>
						<div class="col-4">Pembengkakan</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="pembengkakan" id="pembengkakanYa"
									value="ya">
								<label class="form-check-label" for="pembengkakanYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="pembengkakan" id="pembengkakanTidak"
									value="tidak">
								<label class="form-check-label" for="pembengkakanTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">b.</div>
						<div class="col-4">Kemerahan</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kemerahan" id="kemerahanYa" value="ya">
								<label class="form-check-label" for="kemerahanYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kemerahan" id="kemerahanTidak"
									value="tidak">
								<label class="form-check-label" for="kemerahanTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">c.</div>
						<div class="col-4">Panas/nyeri</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="panasNyeri" id="panasNyeriYa" value="ya">
								<label class="form-check-label" for="panasNyeriYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="panasNyeri" id="panasNyeriTidak"
									value="tidak">
								<label class="form-check-label" for="panasNyeriTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">C.</div>
						<div class="col-4">Keterbatasan Gerak</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="keterbatasanGerak"
									id="keterbatasanGerakYa" value="ya">
								<label class="form-check-label" for="keterbatasanGerakYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="keterbatasanGerak"
									id="keterbatasanGerakTidak" value="tidak">
								<label class="form-check-label" for="keterbatasanGerakTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">a.</div>
						<div class="col-4">Pergerakan sendi</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="pergerakanSendi"
									id="pergerakanSendiBebas" value="bebas">
								<label class="form-check-label" for="pergerakanSendiBebas">bebas</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="pergerakanSendi"
									id="pergerakanSendiTerbatas" value="terbatas">
								<label class="form-check-label" for="pergerakanSendiTerbatas">terbatas</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">b.</div>
						<div class="col-4">Kelainan ekstremitas</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kelainanEkstremitas"
									id="kelainanEkstremitasYa" value="ya">
								<label class="form-check-label" for="kelainanEkstremitasYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kelainanEkstremitas"
									id="kelainanEkstremitasTidak" value="tidak">
								<label class="form-check-label" for="kelainanEkstremitasTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">c.</div>
						<div class="col-4">Traksi/spalk/gips</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="traksiSpalkGips" id="traksiSpalkGipsYa"
									value="ya">
								<label class="form-check-label" for="traksiSpalkGipsYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="traksiSpalkGips"
									id="traksiSpalkGipsTidak" value="tidak">
								<label class="form-check-label" for="traksiSpalkGipsTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1"></div>
						<div class="col-3">1. Jenis :</div>
						<div class="col-7">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="jenisAlat" name="jenisAlat">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1"></div>
						<div class="col-3">2. Beban :</div>
						<div class="col-7">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="bebanAlat" name="bebanAlat">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1"></div>
						<div class="col-3">3. Lama pemasangan :</div>
						<div class="col-7">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="lamaPemasangan"
									name="lamaPemasangan">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">d.</div>
						<div class="col-4">Penggunaan spalk/gips</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="penggunaanSpalkGips"
									id="penggunaanSpalkGipsYa" value="ya">
								<label class="form-check-label" for="penggunaanSpalkGipsYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="penggunaanSpalkGips"
									id="penggunaanSpalkGipsTidak" value="tidak">
								<label class="form-check-label" for="penggunaanSpalkGipsTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">e.</div>
						<div class="col-4">Kompartemen sindrom</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kompartemenSindrom"
									id="kompartemenSindromYa" value="ya">
								<label class="form-check-label" for="kompartemenSindromYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kompartemenSindrom"
									id="kompartemenSindromTidak" value="tidak">
								<label class="form-check-label" for="kompartemenSindromTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">2.</div>
						<div class="col-11">Kulit : kemerahan Hiperpigmentasi</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">a.</div>
						<div class="col-3">Akral :</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="akral" id="akralHangat" value="hangat">
								<label class="form-check-label" for="akralHangat">hangat</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="akral" id="akralPanas" value="panas">
								<label class="form-check-label" for="akralPanas">panas</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="akral" id="akralDingin" value="dingin">
								<label class="form-check-label" for="akralDingin">dingin</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">b.</div>
						<div class="col-3">Torgor:</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="torgor" id="torgorKembaliKurang2Detik"
									value="kembaliKurang2Detik">
								<label class="form-check-label" for="torgorKembaliKurang2Detik">kembali < 2 detik
										(elastis)</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1"></div>
						<div class="col-10">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="torgor" id="torgorKembaliLebih2Detik"
									value="kembaliLebih2Detik">
								<label class="form-check-label" for="torgorKembaliLebih2Detik">kembali > 2 detik (tidak
									elastis)</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">c.</div>
						<div class="col-3">Odema :</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="odema" id="odemaAda" value="ada">
								<label class="form-check-label" for="odemaAda">Ada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="odema" id="odemaTidakAda"
									value="tidakAda">
								<label class="form-check-label" for="odemaTidakAda">Tidak ada</label>
							</div>
							<div class="form-group mb-2 mt-2">
								<label for="lokasiOdema">Lokasi:</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="lokasiOdema" name="lokasiOdema">
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan12" id="gangguanMobilitasFisik"
							value="gangguanMobilitasFisik">
						<label class="form-check-label" for="gangguanMobilitasFisik">Gangguan Mobilitas fisik</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan12"
							id="kerusakanIntegritasKulit" value="kerusakanIntegritasKulit">
						<label class="form-check-label" for="kerusakanIntegritasKulit">Kerusakan Integritas Kulit</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan12" id="resikoInfeksi"
							value="resikoInfeksi">
						<label class="form-check-label" for="resikoInfeksi">Resiko Infeksi</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan12" id="gangguanBodyImage"
							value="gangguanBodyImage">
						<label class="form-check-label" for="gangguanBodyImage">Gangguan Body Image</label>
					</div>
				</td>
			</tr>
			<!--13-->
			<tr>
				<th>13. Sistem Integumen <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="row mb-2">
						<div class="col-1">A.</div>
						<div class="col-11">Pengkajian Luka Operasi :</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">1.</div>
						<div class="col-3">Jenis :</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenisLukaOperasi" id="bersih"
									value="bersih">
								<label class="form-check-label" for="bersih">bersih</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenisLukaOperasi" id="kotor"
									value="kotor">
								<label class="form-check-label" for="kotor">kotor</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">2.</div>
						<div class="col-4">Tanggal operasi :</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="tanggalOperasi"
									name="tanggalOperasi">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">3.</div>
						<div class="col-4">Jenis operasi:</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="jenisOperasi"
									name="jenisOperasi">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">4.</div>
						<div class="col-4">Lokasi:</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="lokasiOperasi"
									name="lokasiOperasi">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">5.</div>
						<div class="col-4">Keadaan :</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="keadaanLuka" name="keadaanLuka">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">6.</div>
						<div class="col-4">Ukuran Luka :</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="ukuranLukaOperasi"
									name="ukuranLukaOperasi">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">7.</div>
						<div class="col-4">Drain :</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="drain" id="drainAda" value="ada">
								<label class="form-check-label" for="drainAda">Ada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="drain" id="drainTidak" value="tidak">
								<label class="form-check-label" for="drainTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1"></div>
						<div class="col-2">a. Jumlah :</div>
						<div class="col-3">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="jumlahDrain" name="jumlahDrain">
							</div>
						</div>
						<div class="col-2">b. Warna :</div>
						<div class="col-3">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="warnaDrain" name="warnaDrain">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">8.</div>
						<div class="col-4">Kondisi area sekitar insersi :</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="kondisiAreaInsersi"
									name="kondisiAreaInsersi">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">B.</div>
						<div class="col-11">Pengkajian Luka Non Operasi :</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">1.</div>
						<div class="col-2">Luka :</div>
						<div class="col-8">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="lukaNonOperasi" id="lukaNonOperasiAda"
									value="ada">
								<label class="form-check-label" for="lukaNonOperasiAda">Ada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="lukaNonOperasi" id="lukaNonOperasiTidak"
									value="tidak">
								<label class="form-check-label" for="lukaNonOperasiTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">2.</div>
						<div class="col-4">Lokasi :</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="lokasiLukaNonOperasi"
									name="lokasiLukaNonOperasi">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">3.</div>
						<div class="col-4">Ukuran Luka (PxL) :</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="ukuranLukaNonOperasi"
									name="ukuranLukaNonOperasi">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">4.</div>
						<div class="col-4">Kedalaman Luka :</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="kedalamanLuka"
									name="kedalamanLuka">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">5.</div>
						<div class="col-4">Eksudat :</div>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="eksudat" id="eksudatAda" value="ada">
								<label class="form-check-label" for="eksudatAda">Ada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="eksudat" id="eksudatTidak" value="tidak">
								<label class="form-check-label" for="eksudatTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1"></div>
						<div class="col-1">6.</div>
						<div class="col-4">Warna kulit sekitar luka:</div>
						<div class="col-6">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="warnaKulitSekitarLuka"
									name="warnaKulitSekitarLuka">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">C.</div>
						<div class="col-4">Pitting edema :</div>
						<div class="col-7">
							<div class="form-group mb-2">
								<input type="text" class="form-control border-dark form-control border-dark-sm" id="pittingEdema"
									name="pittingEdema" placeholder="+/- grade :">
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">D.</div>
						<div class="col-4">Ekskosiasis :</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="ekskosiasis" id="ekskosiasisYa"
									value="ya">
								<label class="form-check-label" for="ekskosiasisYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="ekskosiasis" id="ekskosiasisTidak"
									value="tidak">
								<label class="form-check-label" for="ekskosiasisTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">E.</div>
						<div class="col-4">Psoriasis :</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="psoriasis" id="psoriasisYa" value="ya">
								<label class="form-check-label" for="psoriasisYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="psoriasis" id="psoriasisTidak"
									value="tidak">
								<label class="form-check-label" for="psoriasisTidak">Tidak</label>
							</div>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-1">F.</div>
						<div class="col-4">Urtikaria :</div>
						<div class="col-7">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="urtikaria" id="urtikariaYa" value="ya">
								<label class="form-check-label" for="urtikariaYa">Ya</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="urtikaria" id="urtikariaTidak"
									value="tidak">
								<label class="form-check-label" for="urtikariaTidak">Tidak</label>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan13"
							id="kerusakanIntegritasKulit" value="kerusakanIntegritasKulit">
						<label class="form-check-label" for="kerusakanIntegritasKulit">Kerusakan integritas kulit</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan13" id="resikoInfeksi"
							value="resikoInfeksi">
						<label class="form-check-label" for="resikoInfeksi">Resiko infeksi</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan13" id="gangguanBodyImage"
							value="gangguanBodyImage">
						<label class="form-check-label" for="gangguanBodyImage">Gangguan body image</label>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p>G. Luka bakar</p>
					<div class="col text-center">
						<img class="marker-image" src="<?= base_url() . 'assets/images/form/rm5/luka-bakar.png' ?>"
							data-input-name="image_drawer_state_luka_bakar" alt="">
						<input type="hidden" id="image_drawer_state_luka_bakar" name="image_drawer_state_luka_bakar"
							value="" />
					</div>
					<p class="mt-3">Derajat Luka Bakar</p>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="derajat_luka_bakar"
							value="Derajat 1">
						<label class="form-check-label" for="bersih">Derajat 1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="derajat_luka_bakar"
							value="Derajat 2">
						<label class="form-check-label" for="kotor">Derajat 2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="derajat_luka_bakar"
							value="Derajat 3">
						<label class="form-check-label" for="kotor">Derajat 3</label>
					</div>
					<p>H. Pengkajian Dekubitus (Lihat Pengkajian Fungsional, Dikaji jika ketergantungan berat dan total)</p>
					<table class="table table-bordered border-dark" id="table_pengkajian_dekubitus">
						<thead class="table-light">
							<tr>
								<th rowspan="2">Aspek yang dinilai</th>
								<th colspan="4" class="text-center">KRITERIA YANG DI NILAI</th>
								<th rowspan="2" class="text-center" style="width: 100px;">NILAI</th>
							</tr>
							<tr>
								<th class="text-center">1</th>
								<th class="text-center">2</th>
								<th class="text-center">3</th>
								<th class="text-center">4</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>persepsi sensori</td>
								<td>terbatas sepenuhnya</td>
								<td>sangat terbatas</td>
								<td>keterbatasan ringan</td>
								<td>tidak ada gangguan</td>
								<td class="text-center">
									<input type="number" min="1" max="4"
										class="form-control border-dark form-control border-dark-sm nilai-input mx-auto" name="nilai_1" id="nilai_1"
										onchange="calculateTotal()">
								</td>
							</tr>
							<tr>
								<td>kelembaban</td>
								<td>terus menerus basah</td>
								<td>sangat lembab</td>
								<td>kadang-kadang basah</td>
								<td>jarang basah</td>
								<td class="text-center">
									<input type="number" min="1" max="4"
										class="form-control border-dark form-control border-dark-sm nilai-input mx-auto" name="nilai_2" id="nilai_2"
										onchange="calculateTotal()">
								</td>
							</tr>
							<tr>
								<td>aktivitas</td>
								<td>Bedfast</td>
								<td>Chairfast</td>
								<td>kadang-kadang jalan</td>
								<td>lebih sering jalan</td>
								<td class="text-center">
									<input type="number" min="1" max="4"
										class="form-control border-dark form-control border-dark-sm nilai-input mx-auto" name="nilai_3" id="nilai_3"
										onchange="calculateTotal()">
								</td>
							</tr>
							<tr>
								<td>mobilisasi</td>
								<td>immobile sepenuhnya</td>
								<td>sangat terbatas</td>
								<td>keterbatasan ringan</td>
								<td>tidak ada keterbatasan</td>
								<td class="text-center">
									<input type="number" min="1" max="4"
										class="form-control border-dark form-control border-dark-sm nilai-input mx-auto" name="nilai_4" id="nilai_4"
										onchange="calculateTotal()">
								</td>
							</tr>
							<tr>
								<td>nutrisi</td>
								<td>sangat buruk</td>
								<td>kemungkinan tidak adekuat</td>
								<td>adekuat</td>
								<td>sangat baik</td>
								<td class="text-center">
									<input type="number" min="1" max="4"
										class="form-control border-dark form-control border-dark-sm nilai-input mx-auto" name="nilai_5" id="nilai_5"
										onchange="calculateTotal()">
								</td>
							</tr>
							<tr>
								<td>gesekan dan pergeseran</td>
								<td>bermasalah</td>
								<td>potensial bermasalah</td>
								<td>tidak menimbulkan masalah</td>
								<td></td>
								<td class="text-center">
									<input type="number" min="1" max="3"
										class="form-control border-dark form-control border-dark-sm nilai-input mx-auto" name="nilai_6" id="nilai_6"
										onchange="calculateTotal()">
								</td>
							</tr>
							<tr>
								<td colspan="5">
									<strong>Catatan:</strong> Pasien dengan nilai total &lt; 16 maka dapat dikatakan bahwa
									pasien beresiko mengalami dekubitus (Pressure ulcers)<br>
									<strong>(15-16 = resiko rendah, 13-14 = resiko sedang, ≤ 12 = resiko tinggi)</strong>
								</td>
								<td class="text-center bg-light">
									<strong>TOTAL NILAI</strong><br>
									<input type="number" class="form-control border-dark form-control border-dark-sm nilai-input mx-auto"
										name="total_nilai" id="total_nilai" readonly>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<!--14-->
			<tr>
				<th class="align-middle">14. Sistem Endokrin <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row mb-2">
							<div class="col-1">a.</div>
							<div class="col-4">Pembersaran kelenjar tyroid:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kelenjarTyroid" id="kelenjarTyroidYa"
										value="ya">
									<label class="form-check-label" for="kelenjarTyroidYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kelenjarTyroid"
										id="kelenjarTyroidTidak" value="tidak">
									<label class="form-check-label" for="kelenjarTyroidTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">b.</div>
							<div class="col-4">Pembersaran kelenjar getah bening:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kelenjarGetahBening"
										id="kelenjarGetahBeningYa" value="ya">
									<label class="form-check-label" for="kelenjarGetahBeningYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kelenjarGetahBening"
										id="kelenjarGetahBeningTidak" value="tidak">
									<label class="form-check-label" for="kelenjarGetahBeningTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">c.</div>
							<div class="col-4">Hiperglikemia:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hiperglikemia" id="hiperglikemiaYa"
										value="ya">
									<label class="form-check-label" for="hiperglikemiaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hiperglikemia"
										id="hiperglikemiaTidak" value="tidak">
									<label class="form-check-label" for="hiperglikemiaTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">d.</div>
							<div class="col-4">Hipoglikemia:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hipoglikemia" id="hipoglikemiaYa"
										value="ya">
									<label class="form-check-label" for="hipoglikemiaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hipoglikemia" id="hipoglikemiaTidak"
										value="tidak">
									<label class="form-check-label" for="hipoglikemiaTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">e.</div>
							<div class="col-4">Kondisi kaki DM:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kondisiKakiDM" id="kondisiKakiDMYa"
										value="ya">
									<label class="form-check-label" for="kondisiKakiDMYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kondisiKakiDM"
										id="kondisiKakiDMTidak" value="tidak">
									<label class="form-check-label" for="kondisiKakiDMTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<ul class="list-style-bullet ps-0">
											<li>
												<div class="form-group mb-2">
													<label for="lukaGangrene">Luka gangrene:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm"
														id="lukaGangrene" name="lukaGangrene">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="jenisLuka">Jenis luka:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="jenisLuka"
														name="jenisLuka">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="warnaLuka">Warna:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="warnaLuka"
														name="warnaLuka">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="luasLuka">Luas luka:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="luasLuka"
														name="luasLuka">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="kedalamanLuka">Kedalaman:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm"
														id="kedalamanLuka" name="kedalamanLuka">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="kulitKaki">Kulit kaki:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="kulitKaki"
														name="kulitKaki">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="kukuKaki">Kuku kaki:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="kukuKaki"
														name="kukuKaki">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="telapakKaki">Telapak kaki:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="telapakKaki"
														name="telapakKaki">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="jariKaki">Jari kaki:</label>
													<input type="text" class="form-control border-dark form-control border-dark-sm" id="jariKaki"
														name="jariKaki">
												</div>
											</li>
											<li>
												<div class="form-group mb-2">
													<label for="infeksi">Infeksi:</label>
													<div class="form-check form-check-inline">
														<input class="custom-checkbox-success" type="radio" name="infeksi"
															id="infeksiYa" value="ya">
														<label class="form-check-label" for="infeksiYa">Ya</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="custom-checkbox-success" type="radio" name="infeksi"
															id="infeksiTidak" value="tidak">
														<label class="form-check-label" for="infeksiTidak">Tidak</label>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">f.</div>
							<div class="col-4">Riwayat luka sebelumnya:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="riwayatLuka" id="riwayatLukaYa"
										value="ya">
									<label class="form-check-label" for="riwayatLukaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="riwayatLuka" id="riwayatLukaTidak"
										value="tidak">
									<label class="form-check-label" for="riwayatLukaTidak">Tidak</label>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-group mb-2">
											<label for="tahunLuka">Tahun:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="tahunLuka"
												name="tahunLuka">
										</div>
										<div class="form-group">
											<label for="lokasiLuka">Lokasi:</label>
											<input type="text" class="form-control border-dark form-control border-dark-sm" id="lokasiLuka"
												name="lokasiLuka">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan14"
							id="kerusakanIntegritasKulit" value="kerusakanIntegritasKulit">
						<label class="form-check-label" for="kerusakanIntegritasKulit">Kerusakan integritas kulit</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan14" id="resikoCedera"
							value="resikoCedera">
						<label class="form-check-label" for="resikoCedera">Resiko cedera</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan14" id="gangguanBodiImage"
							value="gangguanBodiImage">
						<label class="form-check-label" for="gangguanBodiImage">Gangguan bodi image</label>
					</div>
				</td>
			</tr>
			<!--15-->
			<tr>
				<th class="align-middle">15. Seksualitas <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row mb-2">
							<div class="col-1">a.</div>
							<div class="col-4">Wanita:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="menstruasi" id="menstruasiYa"
										value="ya">
									<label class="form-check-label" for="menstruasiYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="menstruasi" id="menstruasiTidak"
										value="tidak">
									<label class="form-check-label" for="menstruasiTidak">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="menstruasi" id="menstruasiTeratur"
										value="teratur">
									<label class="form-check-label" for="menstruasiTeratur">Teratur</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="menstruasi"
										id="menstruasiTidakTeratur" value="tidakTeratur">
									<label class="form-check-label" for="menstruasiTidakTeratur">Tidak teratur</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="menstruasi" id="menopause"
										value="menopause">
									<label class="form-check-label" for="menopause">Menopause</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Hamil:</div>
							<div class="col-7">
								<div class="form-group">
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="hamilMinggu"
										name="hamilMinggu" placeholder="……………… Minggu">
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">b.</div>
							<div class="col-4">Pria:</div>
							<div class="col-7">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="herniaInguinal" id="herniaInguinal"
										value="herniaInguinal">
									<label class="form-check-label" for="herniaInguinal">Hernia inguinal</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="reponible" id="reponible"
										value="reponible">
									<label class="form-check-label" for="reponible">Reponible</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="ireponible" id="ireponible"
										value="ireponible">
									<label class="form-check-label" for="ireponible">Ireponible</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="lateral" id="lateral"
										value="lateral">
									<label class="form-check-label" for="lateral">Lateral d/s</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="hidrokel" id="hidrokel"
										value="hidrokel">
									<label class="form-check-label" for="hidrokel">Hidrokel</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="vericokel" id="vericokel"
										value="vericokel">
									<label class="form-check-label" for="vericokel">Vericokel</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Skrining Prostat:</div>
							<div class="col-7">
								<div class="form-group">
									<label for="tglSkrining">Tanggal:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="tglSkrining"
										name="tglSkrining" placeholder="………">
								</div>
								<div class="form-group">
									<label for="bulanSkrining">Bulan:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="bulanSkrining"
										name="bulanSkrining" placeholder="………">
								</div>
								<div class="form-group">
									<label for="tahunSkrining">Tahun:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="tahunSkrining"
										name="tahunSkrining" placeholder="………">
								</div>
								<div class="form-group">
									<label for="hasilSkrining">Hasil:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm" id="hasilSkrining"
										name="hasilSkrining" placeholder="………">
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">c.</div>
							<div class="col-4">Perubahan fungsi seksual:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="perubahanFungsiSeksual"
										id="perubahanFungsiSeksualYa" value="ya">
									<label class="form-check-label" for="perubahanFungsiSeksualYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="perubahanFungsiSeksual"
										id="perubahanFungsiSeksualTidak" value="tidak">
									<label class="form-check-label" for="perubahanFungsiSeksualTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Perasaan puas dalam berhubungan:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="perasaanPuas" id="perasaanPuasYa"
										value="ya">
									<label class="form-check-label" for="perasaanPuasYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="perasaanPuas" id="perasaanPuasTidak"
										value="tidak">
									<label class="form-check-label" for="perasaanPuasTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan15" id="disfungsiSeksual"
							value="disfungsiSeksual">
						<label class="form-check-label" for="disfungsiSeksual">Disfungsi seksual</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan15"
							id="gangguanPemenuhanKebutuhanSeksual" value="gangguanPemenuhanKebutuhanSeksual">
						<label class="form-check-label" for="gangguanPemenuhanKebutuhanSeksual">Gangguan pemenuhan kebutuhan
							seksual</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan15"
							id="masalahKeperawatan15Lainnya" value="lainnya">
						<label class="form-check-label" for="masalahKeperawatan15Lainnya"><textarea name="d_lain_lain" id="" rows="5" class="form-control border-dark w-100"></textarea></label>
					</div>
				</td>
			</tr>
			<!--16-->
			<tr>
				<th class="align-middle">16. Cairan dan Elektrolit <small>(diisi oleh Dokter)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Turgor Kulit:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="turgorKulit" id="turgorKulitElastis"
										value="elastis">
									<label class="form-check-label" for="turgorKulitElastis">Elastis (kembali < 2
											dtk)</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="turgorKulit"
										id="turgorKulitTidakElastis" value="tidakElastis">
									<label class="form-check-label" for="turgorKulitTidakElastis">Tidak elastis (>2
										detik)</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Mukosa mulut:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosaMulut" id="mukosaMulutKering"
										value="kering">
									<label class="form-check-label" for="mukosaMulutKering">Kering</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mukosaMulut" id="mukosaMulutLembab"
										value="lembab">
									<label class="form-check-label" for="mukosaMulutLembab">Lembab</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Mata cekung:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mataCekung" id="mataCekungYa"
										value="ya">
									<label class="form-check-label" for="mataCekungYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="mataCekung" id="mataCekungTidak"
										value="tidak">
									<label class="form-check-label" for="mataCekungTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Edema:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="edema" id="edemaYa" value="ya">
									<label class="form-check-label" for="edemaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="edema" id="edemaTidak" value="tidak">
									<label class="form-check-label" for="edemaTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Distensi vena jugularis:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="distensiVenaJugularis"
										id="distensiVenaJugularisYa" value="ya">
									<label class="form-check-label" for="distensiVenaJugularisYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="distensiVenaJugularis"
										id="distensiVenaJugularisTidak" value="tidak">
									<label class="form-check-label" for="distensiVenaJugularisTidak">Tidak</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-4">Ascites:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ascites" id="ascitesYa" value="ya">
									<label class="form-check-label" for="ascitesYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="ascites" id="ascitesTidak"
										value="tidak">
									<label class="form-check-label" for="ascitesTidak">Tidak</label>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan16" id="kelebihanVolumeCairan"
							value="kelebihanVolumeCairan">
						<label class="form-check-label" for="kelebihanVolumeCairan">Kelebihan volume cairan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan16" id="defisitVolumeCairan"
							value="defisitVolumeCairan">
						<label class="form-check-label" for="defisitVolumeCairan">Defisit volume cairan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan16" id="gangguanElektrolit"
							value="gangguanElektrolit">
						<label class="form-check-label" for="gangguanElektrolit">Gangguan elektrolit</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan16" id="hipertermi"
							value="hipertermi">
						<label class="form-check-label" for="hipertermi">Hipertermi</label>
					</div>
				</td>
			</tr>
			<!--17-->
			<tr>
				<th class="align-middle">17. Perilaku/ Koping <small>(diisi oleh perawat)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row mb-2">
							<div class="col-1">a.</div>
							<div class="col-4">Status psikologis:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="statusPsikologis" id="cemas"
										value="cemas">
									<label class="form-check-label" for="cemas">Cemas</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="statusPsikologis" id="takut"
										value="takut">
									<label class="form-check-label" for="takut">Takut</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="statusPsikologis" id="marah"
										value="marah">
									<label class="form-check-label" for="marah">Marah</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">b.</div>
							<div class="col-4">Status Mental:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="statusMental" id="sadarOrientasiBaik"
										value="sadarOrientasiBaik">
									<label class="form-check-label" for="sadarOrientasiBaik">Sadar dan Orientasi
										Baik</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="statusMental" id="perilakuKekerasan"
										value="perilakuKekerasan">
									<label class="form-check-label" for="perilakuKekerasan">Perilaku kekerasan</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">c.</div>
							<div class="col-4">Masalah perkawinan:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="masalahPerkawinan" id="tidakAda"
										value="tidakAda">
									<label class="form-check-label" for="tidakAda">Tidak ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="masalahPerkawinan" id="ada"
										value="ada">
									<label class="form-check-label" for="ada">Ada</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">d.</div>
							<div class="col-4">Hubungan pasien dengan anggota keluarga:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hubunganKeluarga" id="baik"
										value="baik">
									<label class="form-check-label" for="baik">Baik</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hubunganKeluarga" id="tidakBaik"
										value="tidakBaik">
									<label class="form-check-label" for="tidakBaik">Tidak baik</label>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan17"
							id="resikoPerilakuKekerasan" value="resikoPerilakuKekerasan">
						<label class="form-check-label" for="resikoPerilakuKekerasan">Resiko perilaku kekerasan</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan17"
							id="kopingIndividuInefektif" value="kopingIndividuInefektif">
						<label class="form-check-label" for="kopingIndividuInefektif">Koping individu inefektif</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan17" id="ansietas"
							value="ansietas">
						<label class="form-check-label" for="ansietas">Ansietas</label>
					</div>
				</td>
			</tr>
			<!--18-->
			<tr>
				<th class="align-middle">18. Keamanan/ Safety <small>(diisi oleh perawat)</small></th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<td>
					<div class="mb-3">
						<div class="row mb-2">
							<div class="col-1">a.</div>
							<div class="col-4">Penggunaan alat bantu:</div>
							<div class="col-7">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="tongkat"
										value="tongkat">
									<label class="form-check-label" for="tongkat">Tongkat</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="walker"
										value="walker">
									<label class="form-check-label" for="walker">Walker</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="kursiRoda"
										value="kursiRoda">
									<label class="form-check-label" for="kursiRoda">Kursi Roda</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="kruk" value="kruk">
									<label class="form-check-label" for="kruk">Kruk</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="penompang"
										value="penompang">
									<label class="form-check-label" for="penompang">Penompang</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatBantu" id="protesis"
										value="protesis">
									<label class="form-check-label" for="protesis">Protesis</label>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">b.</div>
							<div class="col-4">Resiko Jatuh:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="resikoJatuh" id="resikoJatuhTidak"
										value="tidak">
									<label class="form-check-label" for="resikoJatuhTidak">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="resikoJatuh" id="resikoJatuhYa"
										value="ya">
									<label class="form-check-label" for="resikoJatuhYa">Ya, Skor:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline-block w-50"
										id="resikoJatuhSkor" name="resikoJatuhSkor">
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-1">c.</div>
							<div class="col-4">Pemasangan alat invasif:</div>
							<div class="col-7">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatInvasif" id="ivfdTerpasang"
										value="ivfdTerpasang">
									<label class="form-check-label" for="ivfdTerpasang">IVFD terpasang</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatInvasif" id="cvcTerpasang"
										value="cvcTerpasang">
									<label class="form-check-label" for="cvcTerpasang">CVC terpasang</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatInvasif" id="dowerChatter"
										value="dowerChatter">
									<label class="form-check-label" for="dowerChatter">Dower chatter</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatInvasif" id="selangNGT"
										value="selangNGT">
									<label class="form-check-label" for="selangNGT">Selang NGT</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatInvasif" id="tracheostomy"
										value="tracheostomy">
									<label class="form-check-label" for="tracheostomy">Tracheostomy</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="alatInvasif" id="wsd" value="wsd">
									<label class="form-check-label" for="wsd">WSD, tgl pemasangan:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline-block w-50"
										id="wsdTglPemasangan" name="wsdTglPemasangan">
								</div>
							</div>
						</div>
					</div>
				</td>
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan18" id="resikoJatuh"
							value="resikoJatuh">
						<label class="form-check-label" for="resikoJatuh">Resiko jatuh</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan18" id="hambatanMobilitasFisik"
							value="hambatanMobilitasFisik">
						<label class="form-check-label" for="hambatanMobilitasFisik">Hambatan/Gangguan Mobilitas
							fisik</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan18" id="resikoCedera"
							value="resikoCedera">
						<label class="form-check-label" for="resikoCedera">Resiko Cedera</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="masalahKeperawatan18" id="resikoInfeksi"
							value="resikoInfeksi">
						<label class="form-check-label" for="resikoInfeksi">Resiko Infeksi</label>
					</div>
				</td>
			</tr>
			<!--19-->
			<tr>
				<th class="align-middle">
					19. Kebutuhan Edukasi / Komunikasi dan Pengajaran
					<small>(diisi oleh Perawat)</small>
				</th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<!-- Left Column -->
				<td>
					<div class="mb-3">
						<!-- Kebutuhan Edukasi -->
						<div class="row mb-2">
							<div class="col-12 fw-bold">Kebutuhan Edukasi:</div>
						</div>
						<div class="row mb-2">
							<div class="col-1">-</div>
							<div class="col-11">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kebutuhanEdukasi" id="prosesPenyakit" value="prosesPenyakit">
									<label class="form-check-label" for="prosesPenyakit">Proses penyakit</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kebutuhanEdukasi" id="pengobatanTindakan" value="pengobatanTindakan">
									<label class="form-check-label" for="pengobatanTindakan">Pengobatan / tindakan</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kebutuhanEdukasi" id="terapiObat" value="terapiObat">
									<label class="form-check-label" for="terapiObat">Terapi / Obat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kebutuhanEdukasi" id="nutrisi" value="nutrisi">
									<label class="form-check-label" for="nutrisi">Nutrisi</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kebutuhanEdukasi" id="supportPsikolog" value="supportPsikolog">
									<label class="form-check-label" for="supportPsikolog">Support / Psikolog</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="kebutuhanEdukasi" id="lainLainEdukasi" value="lainLainEdukasi">
									<label class="form-check-label" for="lainLainEdukasi">Lain-lain, jelaskan:</label>
								</div>
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="kebutuhanEdukasiLain"
									placeholder="Jelaskan...">
							</div>
						</div>

						<!-- a. Edukasi yang akan diberikan kepada: -->
						<div class="row mb-2">
							<div class="col-1">a.</div>
							<div class="col-4">Edukasi yang akan diberikan kepada:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="edukasiKepada" id="pasien" value="pasien">
									<label class="form-check-label" for="pasien">Pasien</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="edukasiKepada" id="keluarga" value="keluarga">
									<label class="form-check-label" for="keluarga">
										Keluarga (hubungan dengan pasien)
									</label>
								</div>
							</div>
						</div>

						<!-- b. Bicara -->
						<div class="row mb-2">
							<div class="col-1">b.</div>
							<div class="col-4">Bicara:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bicara" id="normal" value="normal">
									<label class="form-check-label" for="normal">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bicara" id="terganggu" value="terganggu">
									<label class="form-check-label" for="terganggu">Terganggu, jelaskan:</label>
								</div>
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="bicaraTerganggu"
									placeholder="Jelaskan...">
							</div>
						</div>

						<!-- c. Bahasa sehari-hari -->
						<div class="row mb-2">
							<div class="col-1">c.</div>
							<div class="col-4">Bahasa sehari-hari:</div>
							<div class="col-7">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="bahasaSeharihari" id="indonesia" value="indonesia">
									<label class="form-check-label" for="indonesia">Indonesia, aktif/pasif</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="bahasaSeharihari" id="daerah" value="daerah">
									<label class="form-check-label" for="daerah">Daerah, jelaskan:</label>
								</div>
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="bahasaDaerah"
									placeholder="Jelaskan...">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="bahasaSeharihari" id="asing" value="asing">
									<label class="form-check-label" for="asing">Asing, aktif/pasif</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="bahasaSeharihari" id="lainLainBahasa" value="lainLainBahasa">
									<label class="form-check-label" for="lainLainBahasa">Lain-lain, jelaskan:</label>
								</div>
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="bahasaLain"
									placeholder="Jelaskan...">
							</div>
						</div>

						<!-- d. Perlu penerjemah? -->
						<div class="row mb-2">
							<div class="col-1">d.</div>
							<div class="col-4">Perlu penerjemah?</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="penerjemah" id="penerjemahTidak" value="tidak">
									<label class="form-check-label" for="penerjemahTidak">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="penerjemah" id="penerjemahYa" value="ya">
									<label class="form-check-label" for="penerjemahYa">Ya, bahasa:</label>
								</div>
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="bahasaPenerjemah"
									placeholder="Jelaskan...">
							</div>
						</div>

						<!-- e. Bahasa Isyarat? -->
						<div class="row mb-2">
							<div class="col-1">e.</div>
							<div class="col-4">Bahasa Isyarat?</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bahasaIsyarat" id="bahasaIsyaratTidak" value="tidak">
									<label class="form-check-label" for="bahasaIsyaratTidak">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bahasaIsyarat" id="bahasaIsyaratYa" value="ya">
									<label class="form-check-label" for="bahasaIsyaratYa">Ya</label>
								</div>
							</div>
						</div>

						<!-- f. Nilai-nilai atau kepercayaan -->
						<div class="row mb-2">
							<div class="col-1">f.</div>
							<div class="col-4">
								Nilai-nilai atau kepercayaan yang perlu diperhatikan:
							</div>
							<div class="col-7">
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm"
									name="nilaiKepercayaan"
									placeholder="Jelaskan...">
							</div>
						</div>

						<!-- Hambatan Penerimaan Belajar -->
						<div class="row mb-2">
							<div class="col-12 fw-bold">Hambatan Penerimaan Belajar</div>
						</div>
						<div class="row mb-2">
							<div class="col-11">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hambatanBelajar" id="tidakDitemukan" value="tidakDitemukan">
									<label class="form-check-label" for="tidakDitemukan">Tidak ditemukan hambatan belajar</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hambatanBelajar" id="adaHambatan" value="adaHambatan">
									<label class="form-check-label" for="adaHambatan">Ada, sebutkan:</label>
								</div>
							</div>
						</div>
						<div class="row mb-2 ms-5">
							<div class="col-12">
								<!-- List of possible hambatan -->
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="visualGambar" name="visualGambar">
									<label class="form-check-label" for="visualGambar">Visual/gambar</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="baca" name="baca">
									<label class="form-check-label" for="baca">Baca</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="mendengar" name="mendengar">
									<label class="form-check-label" for="mendengar">Mendengar</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="bahasa" name="bahasa">
									<label class="form-check-label" for="bahasa">Bahasa</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="budaya" name="budaya">
									<label class="form-check-label" for="budaya">Budaya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="penyakitFisik" name="penyakitFisik">
									<label class="form-check-label" for="penyakitFisik">Penyakit fisik</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="pikiranEmosi" name="pikiranEmosi">
									<label class="form-check-label" for="pikiranEmosi">Pikiran/emosi</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="motivasi" name="motivasi">
									<label class="form-check-label" for="motivasi">Motivasi</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="fasilitas" name="fasilitas">
									<label class="form-check-label" for="fasilitas">Tidak punya fasilitas pendukung</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" id="lainLainHambatan" name="lainLainHambatan">
									<label class="form-check-label" for="lainLainHambatan">Lain-lain</label>
								</div>
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="hambatanLain"
									placeholder="Jelaskan...">
							</div>
						</div>

						<!-- Cara belajar yang disukai -->
						<div class="row mb-2">
							<div class="col-12 fw-bold">Cara belajar yang disukai</div>
						</div>
						<div class="row mb-2 ms-3">
							<div class="col-12">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="caraBelajar" id="menulis" value="menulis">
									<label class="form-check-label" for="menulis">Menulis</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="caraBelajar" id="audio" value="audio">
									<label class="form-check-label" for="audio">Audio</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="caraBelajar" id="membaca" value="membaca">
									<label class="form-check-label" for="membaca">Membaca</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="caraBelajar" id="menggambar" value="menggambar">
									<label class="form-check-label" for="menggambar">Menggambar</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="caraBelajar" id="daring" value="daring">
									<label class="form-check-label" for="daring">Daring</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="caraBelajar" id="lainLainBelajar" value="lainLainBelajar">
									<label class="form-check-label" for="lainLainBelajar">Lain-lain</label>
								</div>
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="caraBelajarLain"
									placeholder="Jelaskan...">
							</div>
						</div>
					</div>
				</td>

				<!-- Right Column: Masalah Keperawatan -->
				<td class="align-content-start">
					<div class="form-check mb-2">
						<input
							class="custom-checkbox-success"
							type="radio"
							name="masalahKeperawatan19"
							id="kurangPengetahuanKondisi"
							value="kurangPengetahuanKondisi">
						<label class="form-check-label" for="kurangPengetahuanKondisi">
							Kurang pengetahuan tentang kondisi dan kronis dan kebutuhan pengobatan
						</label>
					</div>
					<div class="form-check mb-2">
						<input
							class="custom-checkbox-success"
							type="radio"
							name="masalahKeperawatan19"
							id="kurangPengetahuanPenyerapan"
							value="kurangPengetahuanPenyerapan">
						<label class="form-check-label" for="kurangPengetahuanPenyerapan">
							Kurang pengetahuan b/d kurangnya penyerapan informasi
						</label>
					</div>
				</td>
			</tr>
			<!--20-->
			<tr>
				<th class="align-middle">
					20. Perencanaan Pulang / Discharge Planning
					<small>(diisi oleh Perawat)</small>
				</th>
				<th>Masalah Keperawatan</th>
			</tr>
			<tr>
				<!-- Left Column: Perencanaan Pulang / Discharge Planning -->
				<td>
					<div class="mb-3">
						<!-- a. Gambaran tentang aktifitas di rumah -->
						<div class="row mb-2">
							<div class="col-1">a.</div>
							<div class="col-4">Gambaran tentang aktifitas di rumah:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="gambaranAktifitas"
										id="gambaranAktifitasYa"
										value="ya">
									<label class="form-check-label" for="gambaranAktifitasYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="gambaranAktifitas"
										id="gambaranAktifitasTidak"
										value="tidak">
									<label class="form-check-label" for="gambaranAktifitasTidak">Tidak</label>
								</div>
							</div>
						</div>

						<!-- b. Pemberian obat di rumah -->
						<div class="row mb-2">
							<div class="col-1">b.</div>
							<div class="col-4">Pemberian obat di rumah:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="pemberianObatRumah"
										id="pemberianObatRumahYa"
										value="ya">
									<label class="form-check-label" for="pemberianObatRumahYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="pemberianObatRumah"
										id="pemberianObatRumahTidak"
										value="tidak">
									<label class="form-check-label" for="pemberianObatRumahTidak">Tidak</label>
								</div>
							</div>
						</div>

						<!-- c. Instalasi pelayanan kesehatan yang bisa dihubungi jika terjadi keadaan darurat -->
						<div class="row mb-2">
							<div class="col-1">c.</div>
							<div class="col-4">
								Instalasi pelayanan kesehatan yang bisa dihubungi jika terjadi keadaan darurat:
							</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="instalasiPelayanan"
										id="instalasiPelayananYa"
										value="ya">
									<label class="form-check-label" for="instalasiPelayananYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="instalasiPelayanan"
										id="instalasiPelayananTidak"
										value="tidak">
									<label class="form-check-label" for="instalasiPelayananTidak">Tidak</label>
								</div>
							</div>
						</div>

						<!-- d. Rencana kontrol hasil pemeriksaan laboratorium dan penunjang lainnya -->
						<div class="row mb-2">
							<div class="col-1">d.</div>
							<div class="col-4">
								Rencana kontrol hasil pemeriksaan laboratorium dan penunjang lainnya:
							</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="rencanaKontrol"
										id="rencanaKontrolYa"
										value="ya">
									<label class="form-check-label" for="rencanaKontrolYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="rencanaKontrol"
										id="rencanaKontrolTidak"
										value="tidak">
									<label class="form-check-label" for="rencanaKontrolTidak">Tidak</label>
								</div>
							</div>
						</div>

						<!-- e. Kontrol selanjutnya -->
						<div class="row mb-2">
							<div class="col-1">e.</div>
							<div class="col-4">Kontrol selanjutnya:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="kontrolSelanjutnya"
										id="kontrolSelanjutnyaYa"
										value="ya">
									<label class="form-check-label" for="kontrolSelanjutnyaYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="kontrolSelanjutnya"
										id="kontrolSelanjutnyaTidak"
										value="tidak">
									<label class="form-check-label" for="kontrolSelanjutnyaTidak">Tidak</label>
								</div>
							</div>
						</div>

						<!-- f. Lain-lain, jelaskan -->
						<div class="row mb-2">
							<div class="col-1">f.</div>
							<div class="col-4">Lain-lain, jelaskan:</div>
							<div class="col-7">
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="lainLainDischarge"
										id="lainLainDischargeYa"
										value="ya">
									<label class="form-check-label" for="lainLainDischargeYa">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input
										class="custom-checkbox-success"
										type="radio"
										name="lainLainDischarge"
										id="lainLainDischargeTidak"
										value="tidak">
									<label class="form-check-label" for="lainLainDischargeTidak">Tidak</label>
								</div>
								<!-- Text field if "Ya" -->
								<input
									type="text"
									class="form-control border-dark form-control border-dark-sm mt-2"
									name="lainLainDischargeDetail"
									placeholder="Jelaskan...">
							</div>
						</div>
					</div>
				</td>

				<!-- Right Column: Masalah Keperawatan -->
				<td class="align-content-start">
					<div class="form-check mb-2">
						<label class="form-check-label" for="resikoPenatalaksanaanPengobatan">
							1. Resiko penatalaksanaan pengobatan yang efektif b/d pengetahuan tentang prosedur perawatan yang tidak adekuat
						</label>
					</div>
					<div class="form-check mb-2">
						<label class="form-check-label" for="resikoKurangPengetahuanProsedur">
							2. Resiko kurang pengetahuan tentang prosedur perawatan
						</label>
					</div>
					<input type="text" name="masalah_no_20" class="form-control border-dark">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h6>Prioritas Masalah Keperawatan <small>(diisi oleh Dokter)</small></h6>
					<input type="text" name="prioritas_1" class="form-control border-dark mt-3" placeholder="Masalah 1">
					<input type="text" name="prioritas_2" class="form-control border-dark mt-3" placeholder="Masalah 2">
					<input type="text" name="prioritas_3" class="form-control border-dark mt-3" placeholder="Masalah 3">
					<input type="text" name="prioritas_4" class="form-control border-dark mt-3" placeholder="Masalah 4">
				</td>
			</tr>
			<!--Diagnosa-->
			<tr>
				<td class="align-content-start">
					<u>DIAGNOSA KERJA</u><small> (diisi oleh perawat)</small>
					<p class="mt-4">Diagnosa Utama: </p>
					<select type="select" name="diagnosa_utama" class="form-select diagnosa"
						style="width: 100%;">
					</select>
					<p class="mt-4">Diagnosa Tambahan: </p>
					<select type="select" name="diagnosa_tambahan" id="diagnosa_tambahan" class="form-select"
						style="width: 100%;">
					</select>
				</td>
				<td>
					<u>DIAGNOSA BANDING</u>
					<textarea name="diagnosa_banding" type="textarea" rows="5" class="form-control border-dark"></textarea>
					<u>PROGNOSIS</u>
					<textarea name="prognosis" type="textarea" rows="5" class="form-control border-dark"></textarea>
				</td>
			</tr>
			<!--Rencana-->
			<tr>
				<td colspan="2">
					<u>RENCANA <small>(diisi oleh dokter)</small></u>
					<textarea name="rencana" id="" rows="7" class="form-control border-dark mt-3" type="textarea"></textarea>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="d-flex flex-column align-items-end gap-2 ">
	<div class="col-6 d-flex align-items-center gap-2">
		<div class="flex-shrink-0"><?= $city_sign ?>, Tanggal</div>
		<input type="date" class="form-control border-dark" name="footer_date" value="<?= date('Y-m-d') ?>">
		<div> Pukul</div>
		<input type="time" class="form-control border-dark" name="footer_time">
	</div>
	<div class="col mt-4 d-flex gap-5 flex-row justify-content-between text-center">
		<div class="col">
			<p>Tanda Tangan Dokter</p>
			<img class="img-responsive center-block mt-2 mb-3" style="width: 20%;" id="qr_dokter_pengkaji" />
			<select type="select" name="dokter_pengkaji" id="dokter_pengkaji" class="form-select"
				style="width: 100%;"></select>
		</div>
		<div class="col">
			<p>Tanda Tangan Perawat</p>
			<img class="img-responsive center-block mt-2 mb-3" style="width: 20%;" id="qr_suster_pengkaji" />
			<select type="select" name="suster_pengkaji" id="" class="form-select perawat"
				style="width: 100%;"></select>

		</div>
	</div>
</div>

<script>
	let dataDokter = []
	let dataSuster = []
	const mode = "<?= $mode; ?>"

	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	const rangeInput = document.getElementById('customRange');
	const rangeValue = document.getElementById('rangeValue');

	rangeInput.addEventListener('input', () => {
		rangeValue.textContent = rangeInput.value;
	});

	$(document).ready(function() {
		listDokterAPI()
		listSusterAPI()

		let page = 1;
		$('.diagnosa').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
				dataType: 'json',
				delay: 250, // Delay in ms while typing
				data: function(params) {
					// Send search term, limit, and offset
					return {
						q: params.term, // Search query
						limit: 100, // Number of items per page
						offset: (page - 1) * 100, // Calculate offset based on the page
					};
				},
				processResults: function(data) {
					console.log(data)
					const {
						items,
						more
					} = data.data;

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
		});

		$('.diagnosa').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					if (page > 0) { // Check if more pages are available
						page++; // Increment page
						$('.diagnosa').select2('open'); // Keep dropdown open
						$('.diagnosa').select2('data', null); // Clear current data
					}
				}
			});
		});

		$('#diagnosa_tambahan').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
				dataType: 'json',
				delay: 250, // Delay in ms while typing
				data: function(params) {
					// Send search term, limit, and offset
					return {
						q: params.term, // Search query
						limit: 100, // Number of items per page
						offset: (page - 1) * 100, // Calculate offset based on the page
					};
				},
				processResults: function(data) {
					console.log(data)
					const {
						items,
						more
					} = data.data;

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
		});

		$('#diagnosa_tambahan').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					if (page > 0) { // Check if more pages are available
						page++; // Increment page
						$('#diagnosa_tambahan').select2('open'); // Keep dropdown open
						$('#diagnosa_tambahan').select2('data', null); // Clear current data
					}
				}
			});
		});

		$('#dokter_pengkaji').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_pengkaji')
		});

		$('#suster_pengkaji').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_suster_pengkaji')
		});
	})

	function calculateTotal() {
		// Get the values from the input fields
		var nilai1 = parseInt(document.getElementById('nilai_1').value) || 0;
		var nilai2 = parseInt(document.getElementById('nilai_2').value) || 0;
		var nilai3 = parseInt(document.getElementById('nilai_3').value) || 0;
		var nilai4 = parseInt(document.getElementById('nilai_4').value) || 0;
		var nilai5 = parseInt(document.getElementById('nilai_5').value) || 0;
		var nilai6 = parseInt(document.getElementById('nilai_6').value) || 0;

		// Calculate the total
		var total = nilai1 + nilai2 + nilai3 + nilai4 + nilai5 + nilai6;

		// Update the total_nilai field
		document.getElementById('total_nilai').value = total;
	}

	function cbCommon(data) {
		populateFormFields(data);

		$('#dokter_pengkaji').prop('disabled', false)
		$('#dokter_pengkaji').select2('open')
		$('#dokter_pengkaji').select2('close')
		$('#suster_pengkaji').prop('disabled', false)
		$('#suster_pengkaji').select2('open')
		$('#suster_pengkaji').select2('close')
		if (mode === "lihat") {
			$('#dokter_pengkaji').prop('disabled', true)
			$('#suster_pengkaji').prop('disabled', true)
		}

		setTimeout(() => {
			dataDokter?.map(v => {
				if (v.text === $('#dokter_pengkaji').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_dokter_pengkaji')
				}
			})
			dataSuster?.map(v => {
				if (v.text === $('#suster_pengkaji').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_suster_pengkaji')
				}
			})
		}, 1000)
	}

	function listDokterAPI() {
		$('#dokter_pengkaji').select2({
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

	function listSusterAPI() {
		$('.perawat').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getKaryawan'); ?>',
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
					dataSuster = items
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
</script>