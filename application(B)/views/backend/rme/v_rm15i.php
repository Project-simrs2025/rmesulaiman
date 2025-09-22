<div class="row">
	<div class="col-6">
		<label for="">No. RM</label>
		<input type="text" name="no_rm" class="form-control border-dark">
	</div>
	<div class="col-6">
		<label for="">Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" class="form-control border-dark">
	</div>
	<div class="col-6">
		<label for="">Nama Pasien</label>
		<input type="text" name="nama_pasien" class="form-control border-dark">
	</div>
	<div class="col-6">
		<label for="">Suku</label>
		<input type="text" name="nama_suku" class="form-control border-dark">
	</div>
	<div class="col-6">
		<label for="">Jenis Kelamin</label>
		<input type="text" name="jenkel" class="form-control border-dark">
	</div>
	<div class="col-6">
		<label for="">Agama</label>
		<input type="text" name="nama_agama" class="form-control border-dark">
	</div>
</div>

<div class="card mb-3 mt-5">
	<div class="card-body">
		<div class="row mb-5">
			<div class="col-md-6">
				<div class="input-group d-flex flex-row gap-3 align-items-center">
					<label>Tanggal</label>
					<input type="date" class="form-control border-dark" name="tanggal">
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group d-flex flex-row align-items-center">
					<label class="me-3">Jam</label>
					<input type="time" class="form-control border-dark" name="jam">
					<span class="input-group-text">WIB</span>
				</div>
			</div>
		</div>

		<label class="fw-bold">ALERGI TERHADAP :</label>
		<div class="ms-3 mb-5">
			<textarea type="textarea" class="form-control border-dark" rows="3" name="alergi"></textarea>
		</div>

		<label class="fw-bold">ANAMNESA :</label>
		<div class="ms-3 mb-5">
			<div class="mb-2">
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="sumberAnamnesa" id="pasien"
						value="pasien">
					<label class="form-check-label" for="pasien">Pasien</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="sumberAnamnesa" id="keluarga"
						value="keluarga">
					<label class="form-check-label" for="keluarga">Keluarga</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="sumberAnamnesa" id="teman" value="teman">
					<label class="form-check-label" for="teman">Teman</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="sumberAnamnesa" id="lainnya"
						value="lainnya">
					<label class="form-check-label" for="lainnya">Lainnya</label>
					<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
						name="sumberAnamnesaLainnya">
				</div>
			</div>
			<div class="mb-3 mt-4">
				<label class="form-label">1. Keluhan Utama</label>
				<textarea type="textarea" class="form-control border-dark" rows="2" name="keluhanUtama"></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">2. Riwayat Penyakit Sekarang</label>
				<textarea type="textarea" class="form-control border-dark" rows="2" name="riwayatPenyakitSekarang"></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">3. Riwayat Menstruasi</label>
				<div class="ms-3 mb-2">
					<div class="row mb-2 align-items-center">
						<div class="col-auto">
							<label class="form-label mb-0">Menarche umur :</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px" name="menarche">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">Tahun Siklus :</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px"
								name="siklusMenstruasi">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">hari</label>
						</div>
						<div class="col-auto">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="sifatMenstruasi" id="teratur"
									value="teratur">
								<label class="form-check-label" for="teratur">Teratur</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="sifatMenstruasi"
									id="tidakTeratur"
									value="tidakTeratur">
								<label class="form-check-label" for="tidakTeratur">Tidak Teratur</label>
							</div>
						</div>
					</div>
					<div class="row mb-2 align-items-center">
						<div class="col-auto">
							<label class="form-label mb-0">Lama :</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px"
								name="lamaMenstruasi">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">hari</label>
						</div>
					</div>
					<div class="row mb-2 align-items-center">
						<div class="col-auto">
							<label class="form-label mb-0">Volume :</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px"
								name="volumeMenstruasi">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">cc, Keluhan saat haid :</label>
						</div>
						<div class="col">
							<input type="text" class="form-control border-dark form-control border-dark-sm" name="keluhanHaid">
						</div>
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label class="form-label">4. Riwayat Perkawinan</label>
				<div class="ms-3 mb-2">
					<div class="row mb-2 align-items-center">
						<div class="col-auto">
							<label class="form-label mb-0">Status :</label>
						</div>
						<div class="col-auto">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="statusPerkawinan"
									id="belumKawin"
									value="belumKawin">
								<label class="form-check-label" for="belumKawin">belum kawin</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="statusPerkawinan" id="cerai"
									value="cerai">
								<label class="form-check-label" for="cerai">cerai</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="statusPerkawinan" id="kawin"
									value="kawin">
								<label class="form-check-label" for="kawin">kawin,</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2"
									style="width: 60px" name="jumlahKawin">
								<span class="ms-2">kali</span>
							</div>
						</div>
					</div>
					<div class="row mb-2 align-items-center">
						<div class="col-auto">
							<label class="form-label mb-0">Umur waktu pertama kawin :</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px"
								name="umurPertamaKawin">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">tahun kawin dengan suami 1 :</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px"
								name="tahunKawin1">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">tahun, ke 2,3, ..</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px"
								name="nTahunKawin">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">:</label>
						</div>
						<div class="col-auto">
							<input type="text" class="form-control border-dark form-control border-dark-sm" style="width: 80px"
								name="tahunKawinLainnya">
						</div>
						<div class="col-auto">
							<label class="form-label mb-0">tahun</label>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label class="form-label">5. Riwayat kehamilan, persalinan dan nifas yang lalu</label>
				<div class="table-responsive">
					<table class="table table-bordered border-dark table-sm">
						<thead class="table-light text-center">
							<tr>
								<th rowspan="3">No</th>
								<th rowspan="3">Tgl Partus</th>
								<th colspan="3">Umur Hamil</th>
								<th rowspan="3">Jenis Partus</th>
								<th colspan="2">Penolong</th>
								<th colspan="2">Anak</th>
								<th colspan="3">Keadaan Anak Sekarang</th>
								<th rowspan="3">Keterangan / Komplikasi</th>
							</tr>
							<tr>
								<th>Abortus</th>
								<th>Prematur</th>
								<th>Aterm</th>
								<th>Nakes</th>
								<th>Non</th>
								<th colspan="2">Jenis Kelamin</th>
								<th colspan="2">Hidup</th>
								<th rowspan="2">Meninggal</th>
							</tr>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th>Pria</th>
								<th>Wanita</th>
								<th>Normal</th>
								<th>Cacat</th>
							</tr>
						</thead>
						<tbody class="text-center">
							<!-- 6 empty rows -->
							<tr>
								<td>1</td>
								<td><input type="date" class="form-control border-dark form-control border-dark-sm" name="tglPartus_1"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_1"
										value="abortus_1"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_1"
										value="prematur_1"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_1" value="aterm_1">
								</td>
								<td><input type="text" class="form-control border-dark" name="jenisPartus_1" style="width: 200px"></td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_1" value="nakes_1">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_1" value="non_1">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_1"
										value="pria_1"></td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_1"
										value="wanita_1">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_1" value="normal_1">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_1" value="cacat_1"></td>
								<td><input class="custom-checkbox-success" type="radio" name="status_1" value="meninggal_1">
								</td>
								<td><textarea type="text" class="form-control border-dark" rows="3" name="keterangan_1"
										style="width: 200px"></textarea></td>
							</tr>
							<tr>
								<td>2</td>
								<td><input type="date" class="form-control border-dark form-control border-dark-sm" name="tglPartus_2"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_2"
										value="abortus_2"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_2"
										value="prematur_2"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_2" value="aterm_2">
								</td>
								<td><input type="text" class="form-control border-dark form-control border-dark-sm" name="jenisPartus_2"></td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_2" value="nakes_2">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_2" value="non_2">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_2"
										value="pria_2"></td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_2"
										value="wanita_2">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_2" value="normal_2">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_2" value="cacat_2"></td>
								<td><input class="custom-checkbox-success" type="radio" name="status_2" value="meninggal_2">
								</td>
								<td><textarea type="text" class="form-control border-dark" rows="3" name="keterangan_2"
										style="width: 200px"></textarea></td>
							</tr>
							<tr>
								<td>3</td>
								<td><input type="date" class="form-control border-dark form-control border-dark-sm" name="tglPartus_3"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_3"
										value="abortus_3"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_3"
										value="prematur_3"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_3" value="aterm_3">
								</td>
								<td><input type="text" class="form-control border-dark form-control border-dark-sm" name="jenisPartus_3"></td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_3" value="nakes_3">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_3" value="non_3">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_3"
										value="pria_3"></td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_3"
										value="wanita_3">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_3" value="normal_3">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_3" value="cacat_3"></td>
								<td><input class="custom-checkbox-success" type="radio" name="status_3" value="meninggal_3">
								</td>
								<td><textarea type="text" class="form-control border-dark" rows="3" name="keterangan_3"
										style="width: 200px"></textarea></td>
							</tr>
							<tr>
								<td>4</td>
								<td><input type="date" class="form-control border-dark form-control border-dark-sm" name="tglPartus_4"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_4"
										value="abortus_4"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_4"
										value="prematur_4"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_4" value="aterm_4">
								</td>
								<td><input type="text" class="form-control border-dark form-control border-dark-sm" name="jenisPartus_4"></td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_4" value="nakes_4">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_4" value="non_4">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_4"
										value="pria_4"></td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_4"
										value="wanita_4">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_4" value="normal_4">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_4" value="cacat_4"></td>
								<td><input class="custom-checkbox-success" type="radio" name="status_4" value="meninggal_4">
								</td>
								<td><textarea type="text" class="form-control border-dark" rows="3" name="keterangan_4"
										style="width: 200px"></textarea></td>
							</tr>
							<tr>
								<td>5</td>
								<td><input type="date" class="form-control border-dark form-control border-dark-sm" name="tglPartus_5"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_5"
										value="abortus_5"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_5"
										value="prematur_5"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_5" value="aterm_5">
								</td>
								<td><input type="text" class="form-control border-dark form-control border-dark-sm" name="jenisPartus_5"></td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_5" value="nakes_5">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_5" value="non_5">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_5"
										value="pria_5"></td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_5"
										value="wanita_5">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_5" value="normal_5">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_5" value="cacat_5"></td>
								<td><input class="custom-checkbox-success" type="radio" name="status_5" value="meninggal_5">
								</td>
								<td><textarea type="text" class="form-control border-dark" rows="3" name="keterangan_5"
										style="width: 200px"></textarea></td>
							</tr>
							<tr>
								<td>6</td>
								<td><input type="date" class="form-control border-dark form-control border-dark-sm" name="tglPartus_6"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_6"
										value="abortus_6"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_6"
										value="prematur_6"></td>
								<td><input class="custom-checkbox-success" type="radio" name="umurHamil_6" value="aterm_6">
								</td>
								<td><input type="text" class="form-control border-dark form-control border-dark-sm" name="jenisPartus_6"></td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_6" value="nakes_6">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="penolong_6" value="non_6">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_6"
										value="pria_6"></td>
								<td><input class="custom-checkbox-success" type="radio" name="jenisKelamin_6"
										value="wanita_6">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_6" value="normal_6">
								</td>
								<td><input class="custom-checkbox-success" type="radio" name="hidup_6" value="cacat_6"></td>
								<td><input class="custom-checkbox-success" type="radio" name="status_6" value="meninggal_6">
								</td>
								<td><textarea type="text" class="form-control border-dark" rows="3" name="keterangan_6"
										style="width: 200px"></textarea></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="mb-3">
				<label class="form-label">6. Riwayat pemakaian alat kontrasepsi :</label>
				<div class="ms-3">
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="statusKontrasepsi"
							id="tidakMenggunakan"
							value="tidakMenggunakan">
						<label class="form-check-label" for="tidakMenggunakan">tidak menggunakan</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="statusKontrasepsi" id="menggunakan"
							value="menggunakan">
						<label class="form-check-label" for="menggunakan">menggunakan, jenis :</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="jenisKontrasepsi">
						<span class="ms-2">, lama pemakaian :</span>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 120px"
							name="lamaPemakaian">
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label class="form-label">7. Riwayat hamil ini</label>
				<div class="mb-2 ms-3">
					<label class="form-label">Hari pertama haid terakhir :</label>
					<input type="text" class="form-control border-dark" name="hariPertamaHaid">
				</div>
				<div class="mb-2 ms-3">
					<label class="form-label">Taksiran partus :</label>
					<input type="text" class="form-control border-dark" name="taksiranPartus">
				</div>
				<div class="mb-2 ms-3">
					<label class="form-label">Ante Natal Care :</label>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="anteNatalCare" id="anteNatalCareTidak"
							value="tidak">
						<label class="form-check-label" for="anteNatalCareTidak">Tidak</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="anteNatalCare" id="anteNatalCareYa"
							value="ya">
						<label class="form-check-label" for="anteNatalCareYa">Ya</label>
					</div>
					<div class="mb-2">
						<label class="form-label">Di :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="tempatAnteNatalCare"
								id="dokterKandungan"
								value="dokter kandungan">
							<label class="form-check-label" for="dokterKandungan">Dokter kandungan</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="tempatAnteNatalCare"
								id="dokterUmum"
								value="dokter umum">
							<label class="form-check-label" for="dokterUmum">Dokter umum</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="tempatAnteNatalCare" id="bidan"
								value="bidan">
							<label class="form-check-label" for="bidan">Bidan</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="tempatAnteNatalCare" id="lainnya"
								value="lainnya">
							<label class="form-check-label" for="lainnya">Lainnya</label>
							<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
								name="tempatAnteNatalCareLainnya">
						</div>
					</div>
				</div>
				<div class="mb-2 ms-3">
					<label class="form-label">Frekuensi :</label>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="frekuensiAnteNatalCare"
							id="frekuensi1x"
							value="1x">
						<label class="form-check-label" for="frekuensi1x">1x</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="frekuensiAnteNatalCare"
							id="frekuensi2x"
							value="2x">
						<label class="form-check-label" for="frekuensi2x">2x</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="frekuensiAnteNatalCare"
							id="frekuensi3x"
							value="3x">
						<label class="form-check-label" for="frekuensi3x">3x</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="frekuensiAnteNatalCare"
							id="frekuensiLebih3x"
							value=">3x">
						<label class="form-check-label" for="frekuensiLebih3x">>3x</label>
					</div>
				</div>
				<div class="mb-2 ms-3">
					<label class="form-label">Imunisasi TT :</label>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="imunisasiTT" id="imunisasiTTTidak"
							value="tidak">
						<label class="form-check-label" for="imunisasiTTTidak">Tidak</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="imunisasiTT" id="imunisasiTTYa"
							value="ya">
						<label class="form-check-label" for="imunisasiTTYa">Ya,</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 100px"
							name="imunisasiTTKali">
						<label class="form-check-label">kali</label>
					</div>
				</div>
				<div class="mb-2 ms-3">
					<label class="form-label">Keluhan saat hamil :</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="keluhanHamil" id="mual" value="mual">
						<label class="form-check-label" for="mual">Mual</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="keluhanHamil" id="muntah"
							value="muntah">
						<label class="form-check-label" for="muntah">Muntah</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="keluhanHamil" id="pendarahan"
							value="pendarahan">
						<label class="form-check-label" for="pendarahan">Pendarahan</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="keluhanHamil" id="pusing"
							value="pusing">
						<label class="form-check-label" for="pusing">Pusing</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="keluhanHamil" id="sakitKepala"
							value="sakit kepala">
						<label class="form-check-label" for="sakitKepala">Sakit kepala</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="keluhanHamil" id="lainnya"
							value="lainnya">
						<label class="form-check-label" for="lainnya">Lainnya</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="keluhanHamilLainnya">
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label class="form-label">8. Riwayat penyakit yang lain / operasi</label>
				<div class="mb-2 ms-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="hipertensi"
							value="Hipertensi">
						<label class="form-check-label" for="hipertensi">Hipertensi</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="dm" value="DM">
						<label class="form-check-label" for="dm">DM</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="jantung"
							value="Jantung">
						<label class="form-check-label" for="jantung">Jantung</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="asthma"
							value="Asthma">
						<label class="form-check-label" for="asthma">Asthma</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="jiwa"
							value="Jiwa">
						<label class="form-check-label" for="jiwa">Jiwa</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="hepatitis"
							value="Hepatitis">
						<label class="form-check-label" for="hepatitis">Hepatitis</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="tumor"
							value="Tumor">
						<label class="form-check-label" for="tumor">Tumor di</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="tumorLokasi">
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakit" id="lainnya"
							value="Lainnya">
						<label class="form-check-label" for="lainnya">Lainnya</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="riwayatPenyakitLainnya">
					</div>
				</div>
				<div class="mb-2 ms-3">
					<label class="form-label">Pernah dirawat :</label>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="pernahDirawat" id="pernahDirawatTidak"
							value="tidak">
						<label class="form-check-label" for="pernahDirawatTidak">Tidak</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="pernahDirawat" id="pernahDirawatYa"
							value="ya">
						<label class="form-check-label" for="pernahDirawatYa">Ya, alasan dirawat :</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="alasanDirawat">
						<label class="form-check-label">tanggal :</label>
						<input type="date" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 150px"
							name="tanggalDirawat">
						<label class="form-check-label">di :</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="tempatDirawat">
					</div>
				</div>
				<div class="mb-2 ms-3">
					<label class="form-label">Pernah dioperasi :</label>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="pernahDioperasi"
							id="pernahDioperasiTidak"
							value="tidak">
						<label class="form-check-label" for="pernahDioperasiTidak">Tidak</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="pernahDioperasi"
							id="pernahDioperasiYa"
							value="ya">
						<label class="form-check-label" for="pernahDioperasiYa">Ya, jenis operasi :</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="jenisOperasi">
						<label class="form-check-label">tanggal :</label>
						<input type="date" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 150px"
							name="tanggalOperasi">
						<label class="form-check-label">di :</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="tempatOperasi">
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label class="form-label">9. Riwayat penyakit keluarga</label>
				<div class="mb-2 ms-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga" id="tidakAda"
							value="tidak ada">
						<label class="form-check-label" for="tidakAda">Tidak ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga"
							id="hipertensi"
							value="Hipertensi">
						<label class="form-check-label" for="hipertensi">Hipertensi</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga" id="dm"
							value="DM">
						<label class="form-check-label" for="dm">DM</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga" id="jantung"
							value="Jantung">
						<label class="form-check-label" for="jantung">Jantung</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga" id="tbc"
							value="TBC">
						<label class="form-check-label" for="tbc">TBC</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga" id="epilepsi"
							value="Epilepsi">
						<label class="form-check-label" for="epilepsi">Epilepsi</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga"
							id="kelainanBawaan"
							value="Kelainan bawaan">
						<label class="form-check-label" for="kelainanBawaan">Kelainan bawaan</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitKeluarga" id="lainnya"
							value="Lainnya">
						<label class="form-check-label" for="lainnya">Lainnya</label>
						<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 200px"
							name="riwayatPenyakitKeluargaLainnya">
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label class="form-label">10. Riwayat penyakit gynekologi</label>
				<div class="mb-2 ms-3">
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitGynekologi"
							id="tidakAda"
							value="tidak ada">
						<label class="form-check-label" for="tidakAda">Tidak ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitGynekologi"
							id="infertilitas"
							value="Infertilitas">
						<label class="form-check-label" for="infertilitas">Infertilitas</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitGynekologi"
							id="infeksiVirus"
							value="Infeksi virus">
						<label class="form-check-label" for="infeksiVirus">Infeksi virus</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitGynekologi" id="pms"
							value="PMS">
						<label class="form-check-label" for="pms">PMS</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="riwayatPenyakitGynekologi"
							id="cervisitisKronis" value="Cervisitis kronis">
						<label class="form-check-label" for="cervisitisKronis">Cervisitis kronis</label>
					</div>
				</div>
			</div>
		</div>

		<label class="fw-bold">DATA OBJEKTIF</label>
		<div class="mb-5 mt-3">
			<label>1. Pemeriksaan Umum</label>
			<div class="col mt-2 ms-3 d-flex flex-column gap-3">
				<div class="col d-flex flex-row align-items-center gap-3">
					<label for="kesadaran" class="form-label" name="kesadaran">Kesadaran:</label>
					<input type="text" class="form-control border-dark" name="kesadaran">
					<label for="bb" class="form-label">BB:</label>
					<input type="text" class="form-control border-dark" name="bb">
					<label for="tb" class="form-label">TB:</label>
					<input type="text" class="form-control border-dark" name="tb">
				</div>
				<div class="col d-flex flex-row align-items-center gap-3">
					<label for="tensi" class="form-label">TB:</label>
					<input type="text" class="form-control border-dark" name="tensi1">
					<span>/</span>
					<input type="text" class="form-control border-dark" name="tensi2">
					<span>mmHg</span>
					<label for="nadi" class="form-label">Nadi:</label>
					<input type="text" class="form-control border-dark" name="nadi">
					<span>x/mnt</span>
					<label for="pernafasan" class="form-label">Pernafasan:</label>
					<input type="text" class="form-control border-dark" name="pernafasan">
					<span>x/mnt</span>
					<label for="suhu" class="form-label">Suhu:</label>
					<input type="text" class="form-control border-dark" name="suhu">
					<span>C</span>
				</div>
			</div>
		</div>

		<label>2. Pemeriksaan Fisik</label>
		<div class="mb-5 ms-3 mt-2">
			<label>Mata</label>
			<label>Konjunctiva:</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" value="Pucat" name="konjunctiva"
					id="konjunctivaPucat">
				<label class="form-check-label" for="konjunctivaPucat">Pucat</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" value="Normal" name="konjunctiva"
					id="konjunctivaNormal">
				<label class="form-check-label" for="konjunctivaNormal">Normal</label>
			</div>

			<label class="mt-3">Solera:</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" value="Putih" name="solera" id="soleraPutih">
				<label class="form-check-label" for="soleraPutih">Putih</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" value="Kuning" name="solera" id="soleraKuning">
				<label class="form-check-label" for="soleraKuning">Kuning</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" value="Merah" name="solera" id="soleraMerah">
				<label class="form-check-label" for="soleraMerah">Merah</label>
			</div>

			<label class="mt-3">Leher Tyroid:</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" value="Teraeba" name="tyroid" id="tyroidTeraba">
				<label class="form-check-label" for="tyroidTeraba">Teraba</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" value="Tidak Teraba" name="tyroid"
					id="tyroidTidakTeraba">
				<label class="form-check-label" for="tyroidTidakTeraba">Tidak Teraba</label>
			</div>

			<label class="mt-3">Dada Jantung:</label>
			<input type="text" class="form-control border-dark" name="jantung">
			<label for="paru" class="form-label mt-3">Paru:</label>
			<input type="text" class="form-control border-dark" name="paru">

			<p class="mt-3">Mamae </p>
			<div class="ms-3 mb-4">
				<label for="">Bentuk:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="bentuk" id="bentukSimetris"
						value="Simteris">
					<label class="form-check-label" for="bentukSimetris">Simetris</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="bentuk" id="bentukAsimetris"
						value="Asimetris">
					<label class="form-check-label" for="bentukAsimetris">Asimetris</label>
				</div>

				<label class="mt-3">Putting Susu:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="puttingSusu" id="puttingSusuMenonjol"
						value="Menonjol">
					<label class="form-check-label" for="puttingSusuMenonjol">Menonjol</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="puttingSusu" id="puttingSusuDatar"
						value="Datar">
					<label class="form-check-label" for="puttingSusuDatar">Datar</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="puttingSusu" id="puttingSusuMasuk"
						value="Masuk">
					<label class="form-check-label" for="puttingSusuMasuk">Masuk</label>
				</div>

				<label class="mt-3">Pengeluaran:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="pengeluaran" id="pengeluaranTidakAda"
						value="Tidak Ada">
					<label class="form-check-label" for="pengeluaranTidakAda">Tidak Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="pengeluaran" id="pengeluaranAda"
						value="Ada">
					<label class="form-check-label" for="pengeluaranAda">Ada</label>
				</div>

				<label class="mt-3">Kebersihan:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="kebersihan" id="kebersihanCukup"
						value="Cukup">
					<label class="form-check-label" for="kebersihanCukup">Cukup</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="kebersihan" id="kebersihanKurang"
						value="Kurang">
					<label class="form-check-label" for="kebersihanKurang">Kurang</label>
				</div>

				<label for="kelainan" class="form-label mt-3">Kelainan:</label>
				<input type="text" class="form-control border-dark" id="kelainan" name="kelainan">
			</div>

			<p>Extremitas</p>
			<div class="ms-3">
				<label>Tungkai:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="tungkai" id="tungkaiSimetris"
						value="Simeteris">
					<label class="form-check-label" for="tungkaiSimetris">Simetris</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="tungkai" id="tungkaiAsimetris"
						value="Asimetris">
					<label class="form-check-label" for="tungkaiAsimetris">Asimetris</label>
				</div>

				<label for="edema" class="form-label mt-3">Edema:</label>
				<input type="text" class="form-control border-dark" name="edema">

				<label class="mt-3">Refleks:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="refleks" id="refleksPositif" value="+">
					<label class="form-check-label" for="refleksPositif">+</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="refleks" id="refleksNegatif" value="-">
					<label class="form-check-label" for="refleksNegatif">-</label>
				</div>
			</div>
		</div>

		<label>3. Pemeriksaan Khusus</label>
		<div class="mb-5">
			<div class="ms-3">
				<p>a. Abdomen</p>
				<div class="ms-3">
					<h6>Inspeksi</h6>
					<label>Luka bekas operasi:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="lukaBekasOperasi" value="Tidak Ada"
							id="lukaBekasOperasiTidakAda">
						<label class="form-check-label" for="lukaBekasOperasiTidakAda">Tidak Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="lukaBekasOperasi" value="Ada"
							id="lukaBekasOperasiAda">
						<label class="form-check-label" for="lukaBekasOperasiAda">Ada</label>
					</div>

					<label>Arah pembesaran:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="arahPembesaran" value="Tidak Ada"
							id="arahPembesaranTidakAda">
						<label class="form-check-label" for="arahPembesaranTidakAda">Tidak Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="arahPembesaran" value="Ada"
							id="arahPembesaranAda">
						<label class="form-check-label" for="arahPembesaranAda">Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="arahPembesaran" value="Memanjang">
						<label class="form-check-label" for="arahPembesaranAda">Memanjang</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="arahPembesaran" value="Melebar">
						<label class="form-check-label">Melebar</label>
					</div>

					<label for="kelainanAbdomen" class="form-label">Kelainan:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="inspeksiKelainan" value="Tidak Ada">
						<label class="form-check-label" for="inspeksiKelainanTidakAda">Tidak Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="inspeksiKelainan" value="Ada">
						<label class="form-check-label" for="inspeksiKelainanAda">Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="inspeksiKelainan" value="Bandi">
						<label class="form-check-label" for="inspeksiKelainanAda">Bandi</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="inspeksiKelainan" value="Distensi">
						<label class="form-check-label">Distensi</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="inspeksiKelainan" value="Lainnya">
						<label class="form-check-label">Lainnya</label>
					</div>
					<input type="text" class="form-control border-dark" name="inspeksiKelainanLainnya">
				</div>
				<div class="ms-3">
					<h6 class="mt-5">Palpasi</h6>
					<div class="row">
						<div class="col d-flex flex-row align-items-center gap-3 ">
							<label for="tinggiFundusUteri" class="form-label col-4">Tinggi fundus uteri:</label>
							<input type="text" class="form-control border-dark" name="tinggiFundusUteri"> cm

						</div>
						<div class="col d-flex flex-row align-items-center gap-3 ms-5">
							<label for="taksiranBeratJanin" class="form-label col-4">Taksiran berat janin:</label>
							<input type="text" class="form-control border-dark" name="taksiranBeratJanin"> gram
						</div>

					</div>

					<label class="mt-3">Letak punggung:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="letakPunggung" id="letakPunggungKanan"
							value="Punggung Kanan">
						<label class="form-check-label" for="letakPunggungKanan">Punggung Kanan</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="letakPunggung" id="letakPunggungKiri"
							value="Punggung Kiri">
						<label class="form-check-label" for="letakPunggungKiri">Punggung Kiri</label>
					</div>

					<label class="mt-3">Persentasi:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="persentasi" id="persentasiKepala"
							value="Kepala">
						<label class="form-check-label" for="persentasiKepala">Kepala</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="persentasi" id="persentasiBokong"
							value="Bokong">
						<label class="form-check-label" for="persentasiBokong">Bokong</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="persentasi" id="persentasiKosong"
							value="Kosong">
						<label class="form-check-label" for="persentasiKosong">Kosong</label>
					</div>

					<label for="bagianTerendah" class="form-label mt-3">Bagian terendah:</label>
					<div class="d-flex flex-row align-items-center gap-3">
						<input type="text" class="form-control border-dark w-25" name="bagianTerendah1">
						<span>/</span>
						<input type="text" class="form-control border-dark w-25" name="bagianTerendah2">
						<label for="">(Perlimaan)</label>
						<label class="col-1">Osborn test:</label>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="osbornTest" id="osbornTestPositif"
								value="positif">
							<label class="form-check-label" for="osbornTestPositif">+</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="osbornTest" id="osbornTestNegatif"
								value="negatif">
							<label class="form-check-label" for="osbornTestNegatif">-</label>
						</div>
					</div>


					<label class="mt-3">Kontraksi uterus:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="kontraksiUterus" value="Tidak Ada"
							id="kontraksiUterusTidakAda">
						<label class="form-check-label" for="kontraksiUterusTidakAda">Tidak Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="kontraksiUterus"
							id="kontraksiUterusAda"
							value="Ada">
						<label class="form-check-label" for="kontraksiUterusAda">Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="kontraksiUterus"
							id="kontraksiUterusBaik"
							value="Baik">
						<label class="form-check-label" for="kontraksiUterusBaik">Baik</label>
					</div>
					<div class="form-check d-flex flex-row align-items-center gap-3">
						<div class="col">
							<input class="custom-checkbox-success" type="radio" name="kontraksiUterus" value="Lembek"
								id="kontraksiUterusLembek">
							<label class="form-check-label" for="kontraksiUterusLembek">Lembek, </label>
						</div>
						<label for="his" class="form-label">His:</label>
						<input type="text" class="form-control border-dark" name="his">
						<label for="">x/10mnt, </label>
						<label for="lama" class="form-label">Lama:</label>
						<input type="text" class="form-control border-dark" name="lama">
						<label for="">Detik</label>
					</div>


					<label class="mt-3">Kelainan:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="kelainanAbdomenPalpasi"
							id="kelainanAbdomenPalpasiNyeriTekan">
						<label class="form-check-label" for="kelainanAbdomenPalpasiNyeriTekan">Nyeri tekan</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="kelainanAbdomenPalpasi"
							id="kelainanAbdomenPalpasiCekungan">
						<label class="form-check-label" for="kelainanAbdomenPalpasiCekungan">Cekungan pada perut</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="kelainanAbdomenPalpasi"
							id="kelainanAbdomenPalpasiBlassPenuh">
						<label class="form-check-label" for="kelainanAbdomenPalpasiBlassPenuh">Blass penuh</label>
					</div>

					<label class="mt-3">Teraba massa:</label>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="terabaMassa" id="terabaMassaTidakAda">
						<label class="form-check-label" for="terabaMassaTidakAda">Tidak Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="terabaMassa" id="terabaMassaAda">
						<label class="form-check-label" for="terabaMassaAda">Ada</label>
					</div>
					<div class="form-check">
						<input class="custom-checkbox-success" type="radio" name="terabaMassa" value="Solid">
						<label class="form-check-label" for="terabaMassaTidakAda">Solid</label>
					</div>
					<div class="form-check">
						<div class="d-flex flex-row align-items-center gap-3">
							<div>
								<input class="custom-checkbox-success" type="radio" name="terabaMassa"
									id="terabaMassaAda"
									value="Kistik">
								<label class="form-check-label" for="terabaMassaAda">Kistik, </label>
							</div>
							<label for="ukuranMassa" class="form-label">Ukuran:</label>
							<input type="text" class="form-control border-dark w-25" name="massaKistik1">
							<span>x</span>
							<input type="text" class="form-control border-dark w-25" name="massaKistik2">
							<span>cm</span>
						</div>

					</div>


				</div>
				<div class="ms-3">
					<h6 class="mt-5">Auskultasi</h6>
					<label>Bising usus:</label>
					<div class="form-check mt-2">
						<input class="custom-checkbox-success" type="radio" name="bisingUsus" id="bisingUsusTidakAda">
						<label class="form-check-label" for="bisingUsusTidakAda">Tidak Ada</label>
					</div>
					<div class="form-check d-flex flex-row align-items-center gap-3">
						<div class="col-1">
							<input class="custom-checkbox-success" type="radio" name="bisingUsus" id="bisingUsusAda">
							<label class="form-check-label" for="bisingUsusAda">Ada</label>
						</div>
						<label for="dji" class="form-label">DJI:</label>
						<input type="text" class="form-control border-dark w-25" id="dji">
						<span>x/mnt, </span>
						<label>Teratur:</label>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="auskultasiTeratur"
								value="Teratur">
							<label class="form-check-label" for="teraturYa">Teratur</label>
						</div>
						<div class="form-check">
							<input class="custom-checkbox-success" type="radio" name="auskultasiTeratur"
								value="Tidak Teratur">
							<label class="form-check-label" for="teraturTidak">Tidak teratur</label>
						</div>
					</div>
				</div>

				<p class="mt-5">b. Anogenital</p>
				<div class="ms-3 row mb-3">
					<h6>Inspeksi :</h6>
					<div class="col-12 mb-2">
						<label class="form-label">Pengeluaran pervaginam :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginam"
								id="tidakAda1"
								value="Tidak ada">
							<label class="form-check-label" for="tidakAda1">Tidak ada</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginam" id="ada1"
								value="Ada">
							<label class="form-check-label" for="ada1">Ada ;</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginamJenis"
								id="darah"
								value="Darah">
							<label class="form-check-label" for="darah">Darah</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginamJenis"
								id="lendir"
								value="Lendir">
							<label class="form-check-label" for="lendir">Lendir</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginamJenis"
								id="airKetuban" value="Air ketuban">
							<label class="form-check-label" for="airKetuban">Air ketuban</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginamJenis"
								id="taliPusat" value="Tali pusat">
							<label class="form-check-label" for="taliPusat">Tali pusat</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginamJenis"
								id="bagianKecilJanin" value="Bagian kecil janin">
							<label class="form-check-label" for="bagianKecilJanin">Bagian kecil janin</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pengeluaranPervaginamJenis"
								id="nanah"
								value="Nanah">
							<label class="form-check-label" for="nanah">Nanah</label>
						</div>
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Lochea :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="lochea" id="tidakAda2"
								value="Tidak ada">
							<label class="form-check-label" for="tidakAda2">Tidak ada</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="lochea" id="ada2" value="Ada">
							<label class="form-check-label" for="ada2">Ada ;</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="locheaJenis" id="rubra"
								value="Rubra">
							<label class="form-check-label" for="rubra">Rubra</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="locheaJenis" id="sanguineOlenta"
								value="Sanguine olenta">
							<label class="form-check-label" for="sanguineOlenta">Sanguine olenta</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="locheaJenis" id="alba"
								value="Alba">
							<label class="form-check-label" for="alba">Alba</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="locheaJenis" id="lainnya1"
								value="Lainnya">
							<label class="form-check-label" for="lainnya1">Lainnya</label>
							<input type="text" class="form-control border-dark form-control border-dark-sm ms-2" name="locheaLainnya"
								style="width: 150px; display: inline-block;">
						</div>
					</div>

					<div class="col-12 mb-2">
						<div class="row align-items-center">
							<div class="col-auto">
								<label class="form-label">Volume :</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" name="volume"
									style="width: 80px; display: inline-block;"> cc,
							</div>
							<div class="col-auto">
								<label class="form-label">Berbau :</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="berbau" id="berbauTidak"
										value="Tidak">
									<label class="form-check-label" for="berbauTidak">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="berbau" id="berbauYa"
										value="Ya">
									<label class="form-check-label" for="berbauYa">Ya,</label>
								</div>
							</div>
							<div class="col-auto">
								<label class="form-label">Bau :</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bau" id="bauAmis"
										value="Amis">
									<label class="form-check-label" for="bauAmis">Amis</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bau" id="bauBusuk"
										value="Busuk">
									<label class="form-check-label" for="bauBusuk">Busuk</label>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Perineum :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="perineum" id="perineumUtuh"
								value="Utuh">
							<label class="form-check-label" for="perineumUtuh">Utuh</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="perineum" id="perineumLaserasi"
								value="Laserasi">
							<label class="form-check-label" for="perineumLaserasi">Laserasi ; derajat</label>
							<input type="text" class="form-control border-dark form-control border-dark-sm ms-2" name="derajatLaserasi"
								style="width: 80px; display: inline-block;">
						</div>
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Jahitan :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="jahitan" id="jahitanBaik"
								value="Baik">
							<label class="form-check-label" for="jahitanBaik">Baik</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="jahitan" id="jahitanTerlepas"
								value="Terlepas">
							<label class="form-check-label" for="jahitanTerlepas">Terlepas</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="jahitan" id="jahitanHematom"
								value="Hematom">
							<label class="form-check-label" for="jahitanHematom">Hematom</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="jahitan" id="jahitanOedem"
								value="Oedem">
							<label class="form-check-label" for="jahitanOedem">Oedem</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="jahitan" id="jahitanEkimosis"
								value="Ekimosis">
							<label class="form-check-label" for="jahitanEkimosis">Ekimosis</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="jahitan" id="jahitanKemerahan"
								value="Kemerahan">
							<label class="form-check-label" for="jahitanKemerahan">Kemerahan</label>
						</div>
					</div>
				</div>

				<div class="ms-3 row mb-3">
					<h6>Inspekulo Vagina :</h6>
					<div class="col-12 mb-2">
						<label class="form-label">Vagina :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="vagina" id="vaginaTidakAda"
								value="Tidak ada">
							<label class="form-check-label" for="vaginaTidakAda">Tidak ada</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="vagina" id="vaginaAda"
								value="Ada">
							<label class="form-check-label" for="vaginaAda">Ada ;</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="kelainanVagina" id="fistel"
								value="Fistel">
							<label class="form-check-label" for="fistel">Fistel</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="kelainanVagina" id="condiloma"
								value="Condiloma">
							<label class="form-check-label" for="condiloma">Condiloma</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="kelainanVagina" id="septum"
								value="Septum">
							<label class="form-check-label" for="septum">Septum</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="kelainanVagina" id="varises"
								value="Varises">
							<label class="form-check-label" for="varises">Varises</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="kelainanVagina" id="lainnya2"
								value="Lainnya">
							<label class="form-check-label" for="lainnya2">Lainnya</label>
							<input type="text" class="form-control border-dark form-control border-dark-sm ms-2" name="kelainanVaginaLainnya"
								style="width: 150px; display: inline-block;">
						</div>
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Hymen :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="hymen" id="hymenUtuh"
								value="Utuh">
							<label class="form-check-label" for="hymenUtuh">Utuh</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="hymen" id="hymenRobek"
								value="Robek">
							<label class="form-check-label" for="hymenRobek">Robek ;</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="waktuRobek" id="sampaiDasar"
								value="Sampai dasar arah robekan (jam)">
							<label class="form-check-label" for="sampaiDasar">Sampai dasar arah robekan (jam)</label>
						</div>
						<div class="form-check form-check-inline">
							<div class="d-flex flex-row align-items-center gap-3">
								<label class="form-label ms-3">Keadaan sekitar robekan</label>
								<input type="text" class="form-control border-dark w-25" name="keadaanSekitarRobekan">
							</div>
						</div>

					</div>


					<div class="col-12 mb-2">
						<label class="form-label">Portio :</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="portio" id="portioUtuh"
								value="Utuh">
							<label class="form-check-label" for="portioUtuh">Utuh</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="portio" id="portioRapuh"
								value="Rapuh">
							<label class="form-check-label" for="portioRapuh">Rapuh</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="portio" id="portioLainnya"
								value="Lainnya">
							<label class="form-check-label" for="portioLainnya">Lainnya</label>
							<input type="text" class="form-control border-dark form-control border-dark-sm ms-2" name="portioLainnya"
								style="width: 150px; display: inline-block;">
						</div>
					</div>

					<div class="col-12 mb-2">
						<div class="row">
							<div class="col-md-4">
								<label class="form-label">Vagina toucher : oleh</label>
								<input type="text" class="form-control border-dark" name="vaginaToucherOleh">
							</div>
							<div class="col-md-4">
								<label class="form-label">Tanggal :</label>
								<input type="date" class="form-control border-dark" name="vaginaToucherTanggal">
							</div>
							<div class="col-md-4">
								<label class="form-label">Jam :</label>
								<input type="time" class="form-control border-dark" name="vaginaToucherJam">
								<label class="form-label">WIB</label>
							</div>
						</div>
					</div>

					<div class="col-12 mb-2">
						<div class="row align-items-center">
							<div class="col-md-4">
								<label class="form-label">Pembukaan :</label>
								<input type="text" class="form-control border-dark form-control border-dark-sm" name="pembukaan"
									style="width: 80px; display: inline-block;"> cm,
							</div>
							<div class="col-md-4">
								<label class="form-label">Effacement :</label>
								<input type="text" class="form-control border-dark" name="effacement">
							</div>
							<div class="col-md-4">
								<label class="form-label">Terbawah :</label>
								<input type="text" class="form-control border-dark" name="terbawah">
							</div>
						</div>
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Cervix :</label>
						<input type="text" class="form-control border-dark" name="cervix">
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Cavum douglasi :</label>
						<input type="text" class="form-control border-dark" name="cavumDouglasi">
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Pemeriksaan panggul :</label>
						<div class="row">
							<div class="col-md-4">
								<label class="form-label">Promont :</label>
								<input type="text" class="form-control border-dark" name="promont">
							</div>
							<div class="col-md-4">
								<label class="form-label">Linea Innom :</label>
								<input type="text" class="form-control border-dark" name="lineaInnom">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-4">
								<label class="form-label">Sacrum :</label>
								<input type="text" class="form-control border-dark" name="sacrum">
							</div>
							<div class="col-md-4">
								<label class="form-label">Spin Isch :</label>
								<input type="text" class="form-control border-dark" name="spinIsch">
							</div>
						</div>
					</div>

					<div class="col-12 mb-2">
						<label class="form-label">Kesan Panggul :</label>
						<input type="text" class="form-control border-dark" name="kesanPanggul">
					</div>
				</div>
			</div>
		</div>

		<h6>Hasil Pemeriksaan Penunjang: </h6>
		<div class="row mt-3">
			<div class="col">
				<b>USG</b>
				<textarea name="hasil_usg" class="form-control border-dark mt-2" rows="3" type="textarea"></textarea>
			</div>
			<div class="col">
				<b>LABORATORIUM</b>
				<textarea name="hasil_lab" class="form-control border-dark mt-2" rows="3" type="textarea"></textarea>
			</div>
		</div>
		<div class="mt-3">
			<b>Terapi / Tindakan</b>
			<textarea name="terapi_tindakan" class="form-control border-dark mt-2" rows="3" type="textarea"></textarea>
		</div>
		<div class="mt-3">
			<b>Rencana Kerja</b>
			<textarea name="rencana_kerja" class="form-control border-dark mt-2" rows="3" type="textarea"></textarea>
		</div>
		<div class="mt-3">
			<b>Diposisi</b>
			<div class="row mb-3">
				<div class="col-md-6">
					<div class="d-flex align-items-center mb-2">
						<div class="me-2">
							<span>Kontrol Poliklinik</span>
						</div>
						<div class="form-check form-check-inline ms-2">
							<input class="custom-checkbox-success" type="radio" name="kontrolPoliklinik" id="kontrolYa"
								value="Ya">
							<label class="form-check-label" for="kontrolYa">Ya</label>
							<input type="text" class="form-control border-dark form-control border-dark-sm ms-2" name="kontrolKeterangan"
								style="width: 150px; display: inline-block;">
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="kontrolPoliklinik"
								id="kontrolTidak"
								value="Tidak">
							<label class="form-check-label" for="kontrolTidak">Tidak</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-2">
						<label class="form-label">Tanggal :</label>
						<input type="date" class="form-control border-dark" name="tanggalDiposisi">
					</div>
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-12">
					<div class="d-flex align-items-center">
						<div class="me-2">
							<span>Dirawat diruang :</span>
						</div>
						<div class="ms-2">
							<input type="text" class="form-control border-dark" name="ruang">
						</div>
					</div>
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-12">
					<div class="d-flex align-items-center">
						<div class="me-2">
							<span>Kelas</span>
						</div>
						<div class="ms-2 flex-grow-1">
							<input type="text" class="form-control border-dark" name="kelas">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mt-5 d-flex flex-column gap-3 align-items-end justify-content-end">
	<div class="row align-items-center">
		<div class="col"><?= $city_sign; ?>,</div>
		<div class="col"><input type="date" class="form-control border-dark" name="footer_date" value="<?= date('Y-m-d') ?>"></div>
	</div>

	<div class="d-flex flex-column align-items-end gap-4">
		<p class="text-end">Tanda Tangan dan Nama Dokter DPJP</p>
		<img class="img-responsive center-block mt-2" style="width: 150px" id="qr_dokter_dpjp" />
		<textarea name="nama_dokter" class="form-control border-dark"></textarea>
	</div>
</div>


<script>
	$(document).ready(function() {
		const globalData = <?= $global_data; ?>;
		const {
			id_dokter
		} = globalData;

		QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')
	})
</script>