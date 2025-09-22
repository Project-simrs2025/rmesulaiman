<div class="table-responsive">
	<table class="table table-bordered border-dark">
		<tr>
			<td style="width: 50%" class="align-content-start">
				<div class="mb-3">
					<label class="form-label">No RM</label>
					<input type="text" name="no_rm" class="form-control border-dark">
				</div>
				<div class="mb-3">
					<label class="form-label">Nama Pasien</label>
					<input type="text" class="form-control border-dark" name="nama_pasien">
				</div>
				<div class="mb-3">
					<label class="form-label">Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" class="form-control border-dark">
				</div>
			</td>
			<td>
				<div class="row mb-3">
					<div class="col-6">
						<label class="form-label">Ruang Rawat</label>
						<input type="text" name="nama_ruangan" class="form-control border-dark">
					</div>
					<div class="col-6">
						<label class="form-label">No Kamar</label>
						<input type="text" name="no_bad" class="form-control border-dark">
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-8">
						<label class="form-label">Tanggal Masuk</label>
						<input type="text" name="tgl_admit" class="form-control border-dark">
					</div>
				</div>
				<div class="mb-3">
					<label class="form-label">Jenis Kelamin</label>
					<input type="text" name="jenkel" class="form-control border-dark">
				</div>
				<div class="mb-3">
					<label class="form-label">Agama</label>
					<input type="text" name="nama_agama" class="form-control border-dark">
				</div>
				<div class="mb-3">
					<label class="form-label">Pendidikan Terakhir</label>
					<input type="text" name="pendidikan_terakhir" class="form-control border-dark">
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-bordered border-dark">
		<tr>
			<td style="width: 50%">
				<div class="mb-3">
					<label class="form-label">Curiga Penganiayaan</label>
					<div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="penganiayaan" value="Ya">
							<label class="form-check-label">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="penganiayaan" value="Tidak">
							<label class="form-check-label">Tidak</label>
						</div>
					</div>
				</div>
				<div class="mb-3">
					<label class="form-label">Merokok</label>
					<div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="merokok" value="Ya">
							<label class="form-check-label">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="merokok" value="Tidak">
							<label class="form-check-label">Tidak</label>
						</div>
					</div>
				</div>
				<div class="mb-3">
					<label class="form-label">Informasi didapat dari</label>
					<div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pasien" value="pasien">
							<label class="form-check-label">Pasien</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="keluarga" value="keluarga">
							<label class="form-check-label">Keluarga</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="rekan" value="rekan">
							<label class="form-check-label">Rekan</label>
						</div>
					</div>
				</div>
			</td>
			<td>
				<div class="mb-3">
					<label class="form-label">Gelang Identitas</label>
					<div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="gelang" value="Ada">
							<label class="form-check-label">Ada</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="gelang" value="Tidak">
							<label class="form-check-label">Tidak</label>
						</div>
					</div>
				</div>
				<div class="mb-3">
					<label class="form-label">Ketepatan Pemasangan Gelang</label>
					<div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="ketepatan" value="Tepat">
							<label class="form-check-label">Tepat</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="ketepatan" value="Tidak">
							<label class="form-check-label">Tidak</label>
						</div>
					</div>
				</div>
				<div class="mb-3">
					<label class="form-label">General Consent</label>
					<div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="consent" value="Ada">
							<label class="form-check-label">Ada</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="consent" value="Tidak">
							<label class="form-check-label">Tidak</label>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<div class="row">
			<table class="table table-bordered border-dark">
				<tr>
					<td>
						<div class="mb-3">
							<label class="form-label">Alasan Masuk Rawat Inap / Rawat Jalan (Keluhan Utama)</label>
							<textarea type="textarea" name="alasan_masuk_rawat_inap" class="form-control border-dark"
								rows="3"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="mb-3">
							<label class="form-label">Pemeriksaan Penunjang</label>
							<textarea type="textarea" name="pemeriksaan_penunjang" class="form-control border-dark"
								rows="3"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="mb-3">
							<label class="form-label">Diagnosa Awal</label>
							<select type="select" name="diagnosa_awal" id="diagnosa_awal" class="form-control border-dark diagnosa" style="width: 100%;"></select>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="mb-3">
							<label class="form-label">Rencana Tindakan</label>
							<textarea class="form-control border-dark" rows="3" name="rencana_tindakan" type="textarea"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="mb-3">
							<label class="form-label">Riwayat Penyakit Sebelumnya</label>
							<textarea class="form-control border-dark" rows="3" name="riwayat_penyakit" type="textarea"></textarea>
						</div>
						<div class="mb-3">
							<label class="form-label">Obat-obatan yang dikonsumsi di rumah</label>
							<textarea class="form-control border-dark" rows="2" type="textarea" name="obat_dirumah"></textarea>
						</div>
						<div class="mb-3">
							<label class="form-label">Riwayat Penyakit Keluarga</label>
							<textarea class="form-control border-dark" rows="2" type="textarea"
								name="riwayat_penyakit_keluarga"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="mb-3">
							<label class="form-label">Alergi</label>
							<div class="row">
								<div class="col-2">
									<input class="custom-checkbox-success" type="radio" name="alergi" value="Tidak" id="tidak">
									<label class="form-check-label" for="tidak">Tidak</label>
								</div>

								<div class="col">
									<input class="custom-checkbox-success" type="radio" name="alergi" value="Ya" id="ya_obat">
									<label class="form-check-label" for="ya_obat">Ya, Obat / Makanan / Tranfusi Darah / dll , Sebutkan</label>
									<input type="text" class="form-control border-dark" name="alergi_ya" id="alergi_ya_input" readonly>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="mb-3">
							<label class="form-label">Riwayat Imunisasi</label>
							<textarea type="textarea" name="riwayat_imunisasi" class="form-control border-dark" rows="2"></textarea>
						</div>
					</td>
				</tr>
			</table>

			<div class="row">
				<table class="table table-bordered border-dark">
					<tr>
						<td><label class="form-label">TD: </label><input type="text" class="form-control border-dark"
								placeholder="mmHg" name="td">
						</td>
						<td><label class="form-label">N: </label><input type="text" class="form-control border-dark"
								placeholder="x/mnt"
								name="nadi"></td>
						<td><label class="form-label">Sh: </label><input type="text" class="form-control border-dark"
								placeholder="°C" name="suhu">
						</td>
						<td><label class="form-label">RR: </label><input type="text" class="form-control border-dark"
								placeholder="x/mnt"
								name="rate"></td>
						<td><label class="form-label">BB: </label><input type="text" class="form-control border-dark"
								placeholder="kg"
								name="weight"></td>
						<td><label class="form-label">TB: </label><input type="text" class="form-control border-dark"
								placeholder="cm"
								name="height"></td>
					</tr>
				</table>


				<div class="row">

				</div>
			</div>
		</div>

	</table>

	<div class="row">
		<div class="table-responsive">
			<table class="table table-bordered border-dark" style="width: 80%;">
				<tr>
					<th>NEUROLOGI</th>
					<td>
						<div class="d-flex flex-row align-items-center gap-3 mb-3">
							<label>GCS:</label>
							<input type="text" name="gcs" class="form-control border-dark" style="width: 150px;">
							<label>E</label>
							<input type="text" name="gcs_e" class="form-control border-dark" style="width: 150px;">
							<label>M</label>
							<input type="text" name="gcs_m" class="form-control border-dark" style="width: 150px;">
							<label>V</label>
							<input type="text" name="gcs_v" class="form-control border-dark" style="width: 150px;">
							<label>Total</label>
							<input type="text" name="gcs_total" class="form-control border-dark" style="width: 150px;">
						</div>
						<label>Pupil:</label>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="checkbox" name="Isokor">
							<label class="form-check-label">Isokor</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="checkbox" name="Anisokor">
							<label class="form-check-label">Anisokor</label>
						</div>

						<div class="d-flex flex-column  gap-3">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Normal">
								<label class="form-check-label">Normal</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Paralisis">
								<label class="form-check-label">Paralisis</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Kejang">
								<label class="form-check-label">Kejang</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Baal">
								<label class="form-check-label">Baal</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Tremor">
								<label class="form-check-label">Tremor</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Nyeri_Sendi">
								<label class="form-check-label">Nyeri Sendi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Nyeri_Kepala">
								<label class="form-check-label">Nyeri Kepala</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="pusing">
								<label class="form-check-label">Pusing</label>
							</div>
						</div>
					</td>
					<td colspan="3" class="align-content-start">
						<label>Kesadaran:</label>
						<div class="d-flex flex-wrap gap-3">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Composmentis">
								<label class="form-check-label">Composmentis</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Somnolen">
								<label class="form-check-label">Somnolen</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Sopor">
								<label class="form-check-label">Sopor</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="Coma">
								<label class="form-check-label">Coma</label>
							</div>
						</div>
						<div class="d-flex flex-column gap-2">
							<label>Pendengaran: </label>
							<div class="d-flex flex-row">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="pendengaran_normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="pendengaran_gangguan">
									<label class="form-check-label">Ada Gangguan</label>
								</div>
							</div>

							<label>Penglihatan: </label>
							<div class="d-flex flex-row">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="penglihatan_normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="penglihatan_gangguan">
									<label class="form-check-label">Ada Gangguan</label>
								</div>
							</div>

							<label>Bicara: </label>
							<div class="d-flex flex-row">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="bicara_normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="ada_gangguan_bicara">
									<label class="form-check-label">Ada Gangguan</label>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>RESPIRASI</th>
					<td>
						<div class="row">
							<div class="col d-flex flex-column gap-3">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="repirasi_normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="repirasi_cyanosis">
									<label class="form-check-label">Cyanosis</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="repirasi_dyspnea">
									<label class="form-check-label">Dyspnea</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="Whezing">
									<label class="form-check-label">Whezing</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="Batuk">
									<label class="form-check-label">Batuk</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="Hemoptoe">
									<label class="form-check-label">Hemoptoe</label>
								</div>
							</div>
							<div class="col">
								<h6>Ventilator</h6>
								<div class="mb-3">
									<label for="mode" class="form-label">Mode</label>
									<input type="text" class="form-control border-dark" id="mode" name="mode">
								</div>
								<div class="mb-3">
									<label for="peepPS" class="form-label">Peep/PS (cmH₂O)</label>
									<input type="text" class="form-control border-dark" id="peepPS" name="peepPS">
								</div>
								<div class="mb-3">
									<label for="tidalVolume" class="form-label">Tidal Volume (cc)</label>
									<input type="text" class="form-control border-dark" name="tidalVolume">
								</div>
								<div class="mb-3">
									<label for="fio2" class="form-label">FO₂ (%)</label>
									<input type="text" class="form-control border-dark" name="fio2">
								</div>
								<div class="mb-3">
									<label for="ett" class="form-label">ETT</label>
									<input type="text" class="form-control border-dark" name="ett">
								</div>
								<div class="mb-3">
									<label for="depth" class="form-label">Kedalaman</label>
									<input type="text" class="form-control border-dark" name="depth">
								</div>
							</div>
						</div>
					</td>
					<td colspan="3">
						<b>KULIT</b>
						<div class="p-3">
							<div class="mb-3 ">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_normal" name="kulit_normal">
									<label class="form-check-label" for="kulit_normal">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_merah" name="kulit_merah">
									<label class="form-check-label" for="kulit_merah">Merah</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_cyanosis" name="kulit_cyanosis">
									<label class="form-check-label" for="kulit_cyanosis">Cyanosis</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_pucat" name="kulit_pucat">
									<label class="form-check-label" for="kulit_pucat">Pucat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_panas" name="kulit_panas">
									<label class="form-check-label" for="kulit_panas">Panas</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_dehidrasi" name="kulit_dehidrasi">
									<label class="form-check-label" for="kulit_dehidrasi">Dehidrasi</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_ikterik" name="kulit_ikterik">
									<label class="form-check-label" for="kulit_ikterik">Ikterik</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" id="kulit_berkeringat"
										name="kulit_berkeringat">
									<label class="form-check-label" for="kulit_berkeringat">Berkeringat</label>
								</div>
							</div>

							<div class="row mb-3">
								<label class="form-label">Dekubitus</label>
								<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="checkbox" id="dekubitus_ya" name="dekubitus_ya">
										<label class="form-check-label" for="dekubitus_ya">Ya</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="checkbox" id="dekubitus_tidak" name="dekubitus_tidak">
										<label class="form-check-label" for="dekubitus_tidak">Tidak</label>
									</div>
								</div>

							</div>
							<div class="col-md-6 my-2">
								<label class="form-label">Skala Norton</label>
								<input type="text" class="form-control border-dark" name="skalanorton">
							</div>

							<!-- Physical Condition Table -->
							<table class="table table-bordered border-dark">
								<tbody>
									<tr>
										<th>URAIAN</th>
										<th>1</th>
										<th>2</th>
										<th>3</th>
										<th>4</th>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KONDISI FISIK</td>
										<td>SANGAT BURUK</td>
										<td>BURUK</td>
										<td>CUKUP</td>
										<td>BAIK</td>
									</tr>
									<tr>
										<td>MENTAL</td>
										<td>STUPOR</td>
										<td>DELIRIUM</td>
										<td>APATIS</td>
										<td>COMPOS MENTIS</td>
									</tr>
									<tr>
										<td>AKTIVITAS</td>
										<td>TIRAH BARING</td>
										<td>KURSI RODA</td>
										<td>DIPAPAH</td>
										<td>MANDIRI</td>
									</tr>
									<tr>
										<td>MOBILITAS</td>
										<td>IMMOBILISASI</td>
										<td>SANGAT TERBATAS</td>
										<td>AGAK TERBATAS</td>
										<td>BAIK</td>
									</tr>
									<tr>
										<td>INKONTINENSIA</td>
										<td>SELALU</td>
										<td>SERING</td>
										<td>TERKADANG</td>
										<td>TIDAK</td>
									</tr>
								</tbody>
							</table>
							<div class="mt-3 text-muted">
								<small>Bila jumlah total < 16 lakukan protocol pencegahan dekubitus</small>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>CARDIOVASCULER</th>
					<td class="align-content-start">
						<div class="d-flex flex-column gap-3">
							<div class="d-flex flex-row align-items-center gap-2">
								<label>Chest Pain:</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="chest_pain_ya" id="chest_pain_ya">
									<label for="chest_pain_ya" class="form-check-label">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="chest_pain_tidak" id="chest_pain_tidak">
									<label class="form-check-label" for="chest_pain_tidak">Tidak</label>
								</div>
							</div>

							<div class="d-flex flex-row align-items-center gap-2">
								<label>Nadi:</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="Reguler">
									<label class="form-check-label">Reguler</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="Irreguler">
									<label class="form-check-label">Irreguler</label>
								</div>
							</div>

							<div class="d-flex flex-row align-items-center gap-2">
								<label>Irama:</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="irama_reguler">
									<label class="form-check-label">Reguler</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="irama_Irreguler">
									<label class="form-check-label">Irreguler</label>
								</div>
							</div>

							<div class="d-flex flex-row align-items-center gap-2">
								<label>Volume:</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="Edema">
									<label class="form-check-label">Edema</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="valume_tidak">
									<label class="form-check-label">Tidak</label>
								</div>
							</div>
						</div>
					</td>
					<td class="align-content-start">
						<b>Saluran Pencernaan</b>
						<div class="row" style="width: 300px;">
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="saluran_Normal">
								<label class="form-check-label">Normal</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="Konstipasi">
								<label class="form-check-label">Konstipasi</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="Diare">
								<label class="form-check-label">Diare</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="Melena">
								<label class="form-check-label">Melena</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="Acties">
								<label class="form-check-label">Acties</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="Hematemesis">
								<label class="form-check-label">Hematemesis</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="saluran_muntah">
								<label class="form-check-label">Muntah</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="Colonostomy">
								<label class="form-check-label">Colonostomy</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="Mual">
								<label class="form-check-label">Mual</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="distensi_abdomen">
								<label class="form-check-label">Distensi Abdomen</label>
							</div>
						</div>
					</td>
					<td>
						<b>Mulut</b>
						<div class="d-flex flex-column gap-3">
							<div class="form-check mt-3">
								<input class="custom-checkbox-success" type="checkbox" name="mulut_normal">
								<label class="form-check-label">Normal</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="Stomatitis">
								<label class="form-check-label">Stomatitis</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="Gusi_Bengkak">
								<label class="form-check-label">Gusi Bengkak</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="Gigi_Pecah">
								<label class="form-check-label">Gigi Pecah/Berlubang</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="Lidah_Patologis">
								<label class="form-check-label">Lidah Patologis</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="Dll_mulut">
								<label class="form-check-label">Dll............</label>
								<input type="text" class="form-control border-dark" name="kondisi_mulut_lainnya">
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>SALURAN KEMIH</th>
					<td colspan="3">
						<div class="row">
							<div class="col-3">
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="kemih_normal" value="Normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="kemih_inkontinensia"
										value="Inkontinensia">
									<label class="form-check-label">Inkontinensia</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="kemih_retensi" value="Retensio">
									<label class="form-check-label">Retensio</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="kemih_hematuri" value="Hematuri">
									<label class="form-check-label">Hematuri</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="kemih_pus" value="Pus">
									<label class="form-check-label">Pus</label>
								</div>
							</div>
							<div class="col">
								<label>Kateter:</label>
								<div class="d-flex flex-row align-items-center gap-3">
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="checkbox" name="kateter_Ya">
										<label class="form-check-label">Ya</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="checkbox" name="kateter_Tidak">
										<label class="form-check-label">Tidak</label>
									</div>
								</div>

								<label>Tipe Kateter:</label>
								<div class="d-flex flex-row align-items-center gap-3">
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="Foley">
										<label class="form-check-label">Foley</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="Condom">
										<label class="form-check-label">Condom</label>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>PSIKOLOGIS</th>
					<td colspan="3">
						<div class="d-flex flex-row gap-3">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="psikologis_baik">
								<label class="form-check-label">Baik/Stabil</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="psikologis_cemas">
								<label class="form-check-label">Cemas</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="psikologis_sedih">
								<label class="form-check-label">Sedih</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="psikologis_marah">
								<label class="form-check-label">Marah</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="checkbox" name="psikologis_kecenderungan">
								<label class="form-check-label">Kecenderungan Bunuh Diri/Potensial menyakiti diri
									sendiri</label>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>KOMUNIKASI & EDUKASI</th>
					<td colspan="3">
						<div class="d-flex flex-column gap-3">
							<label>Ada hambatan Komunikasi:</label>
							<div class="d-flex flex-column gap-2">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="hambatan_komunikasi_tidak">
									<label class="form-check-label">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="hambatan_komunikasi_ya">
									<label class="form-check-label">Ya</label>
									<div class="d-flex flex-row gap-3">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="checkbox" name="hambatan_komunikasi_apsia">
											<label class="form-check-label">Apasia</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="checkbox" name="hambatan_Bahasa">
											<label class="form-check-label">Bahasa</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="checkbox" name="hambatan_konitif">
											<label class="form-check-label">Kognitif</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="checkbox"
												name="hambatan_dll">
											<label class="form-check-label">Dll</label>
											<input type="text" class="form-control border-dark" name="hambatan_komunikasi_ya_lainnya">
										</div>
									</div>
								</div>
							</div>

							<label>Perlu Edukasi:</label>
							<div class="d-flex flex-column gap-2">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="perlu_edukasi_tidak">
									<label class="form-check-label">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="checkbox" name="perlu_edukasi_ya">
									<label class="form-check-label">Ya, Topik</label>
									<input type="text" class="form-control border-dark" name="topik_edukasi">
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>MENSTRUASI</th>
					<td colspan="3">
						<div class="d-flex flex-column gap-2">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="Teratur">
								<label class="form-check-label">Teratur</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="tidak_teratur">
								<label class="form-check-label">Tidak Teratur</label>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>FUNGSIONAL</th>
					<td colspan="3">
						<table class="table table-bordered border-dark">
							<tr>
								<th>AKTIFITAS</th>
								<th>MANDIRI</th>
								<th>PERLU BANTUAN</th>
								<th>KETERGANTUNGAN TOTAL</th>
							</tr>
							<tr>
								<td>Jalan</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="mandiri"></td>
								<td><input type="checkbox" class="custom-checkbox-success" name="perlu_bantuan">
								</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Makan/Minum</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="makan_mandiri">
								</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="makan_perlu_bantuan">
								</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="makan_ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Mandi</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="mandi_mandiri"></td>
								<td><input type="checkbox" class="custom-checkbox-success" name="mandi_perlu_bantuan">
								</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="mandi_ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Berpakaian</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="berpakaian_mandiri">
								</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="berpakaian_perlu_bantuan">
								</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="berpakaian_ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Bak/Bab</td>
								<td><input type="checkbox" class="custom-checkbox-success" name="bak_mandiri"></td>
								<td><input type="checkbox" class="custom-checkbox-success" name="bak_perlu_bantuan"></td>
								<td><input type="checkbox" class="custom-checkbox-success" name="bak_ketergantungan_total">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th>NUTRISI</th>
					<td colspan="3">
						<table class="table table-bordered border-dark">
							<tr>
								<th>ITEM</th>
								<th>SKOR</th>
							</tr>
							<tr>
								<td>
									a. Apakah pasien tampak kurus?
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="tampak_kurus_tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="tampak_kurus_ya">
										<label class="form-check-label">Ya</label>
									</div>
								</td>
								<td>
									<div>0</div>
									<div>1</div>
								</td>
							</tr>
							<tr>
								<td>
									b. Apakah terdapat penurunan BB selama 1 bulan terakhir?
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="penurunan_bb_tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="penurunan_bb_ya">
										<label class="form-check-label">Ya</label>
									</div>
								</td>
								<td>
									<div>0</div>
									<div>1</div>
								</td>
							</tr>
							<tr>
								<td>
									c. Apakah salah satu kondisi berikut?
									<div>- Diare > 3 x/hari atau muntah 3 x/hari dalam 1 minggu terakhir</div>
									<div>- Asupan makan berkurang selama 1 minggu terakhir</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="kondisi_khusus_tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="kondisi_khusus_ya">
										<label class="form-check-label">Ya</label>
									</div>
								</td>
								<td>
									<div>0</div>
									<div>1</div>
								</td>
							</tr>
							<tr>
								<td>
									d. Ada terdapat penyakit yang mengakibatkan pasien berisiko malnutrisi?
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="manultrisi_tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="manultrisi_ya">
										<label class="form-check-label">Ya</label>
									</div>
								</td>
								<td>
									<div>0</div>
									<div>1</div>
								</td>
							</tr>
							<tr>
								<td>
									<div>Total (jumlah = a+b)</div>
									<div><i>NB : Jika nilai total ≥ 1, Kolaborasi dengan ahli gizi</i></div>
								</td>
								<td>
									<input type="text" name="score_nutrisi" id="score_nutrisi" class="form-control border-dark" readonly>
									<!-- <p id="score_nutrisi"></p> -->
									<div id="keterangan_nutrisi" class="mt-2 text-danger fw-bold"></div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th>NYERI</th>
					<td colspan="3">
						<div class="mb-3">
							<label>Skor (Numerik Scale):</label>
							<div class="d-flex flex-row gap-3">
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="skor_nyeri_0">
									<label class="form-check-label">Tidak Nyeri (0)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="skor_nyeri_1-3">
									<label class="form-check-label">Ringan (1-3)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="skor_nyeri_4-6">
									<label class="form-check-label">Sedang (4-6)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="skor_nyeri_7-10">
									<label class="form-check-label">Berat (7-10)</label>
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label>Waktu Onset:</label>
							<input type="text" class="form-control border-dark" name="waktu_onset">
						</div>

						<div class="mb-3">
							<label>Lokasi:</label>
							<input type="text" class="form-control border-dark" name="lokasi">
						</div>

						<div class="mb-3">
							<label>Frekuensi:</label>
							<input type="text" class="form-control border-dark" name="frekuensi">
						</div>

						<div class="mb-3">
							<label>Kualitas Nyeri:</label>
							<div class="d-flex flex-wrap gap-3">
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="nyeri">
									<label class="form-check-label">Nyeri</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="tumpul">
									<label class="form-check-label">Tumpul</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="tajam">
									<label class="form-check-label">Tajam</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="menusuk">
									<label class="form-check-label">Menusuk</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="kram">
									<label class="form-check-label">Kram</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="tekan">
									<label class="form-check-label">Tekan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="terbakar">
									<label class="form-check-label">Terbakar</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="custom-checkbox-success" name="dll_kualitas">
									<label class="form-check-label">dll:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 100px; " name="dll_kualitas_keterangan">
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label>Faktor Pemberat:</label>
							<div class="d-flex flex-wrap gap-3">
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="faktor_pemberat_cahaya">
									<label class="form-check-label">Cahaya</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="faktor_pemeberat_gerakan">
									<label class="form-check-label">Gerakan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="Emosi">
									<label class="form-check-label">Emosi</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="custom-checkbox-success" name="dll">
									<label class="form-check-label">dll:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2"
										name="faktor_pemberat_dll">
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label>Faktor Peringan:</label>
							<div class="d-flex flex-wrap gap-3">
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="faktor_peringan_cahaya">
									<label class="form-check-label">Cahaya</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="faktor_peringan_gerakan">
									<label class="form-check-label">Gerakan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="fakor_peringan_emosi">
									<label class="form-check-label">Emosi</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="custom-checkbox-success" name="faktor_peringan_dll">
									<label class="form-check-label">dll:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" name="faktor_peringan_dll_keterangan">
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label>Obat-Obatan yang dikonsumsi:</label>
							<input type="text" class="form-control border-dark" name="obat_dikonsumsi">
						</div>

						<div class="mb-3">
							<label>Efek Nyeri:</label>
							<div class="d-flex flex-wrap gap-3">
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="efek_mosi">
									<label class="form-check-label">Emosi</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="efek_mual">
									<label class="form-check-label">Mual/Muntah</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="efek_nyeri_aktivitas">
									<label class="form-check-label">Aktivitas</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="efek_nyeri_nafsu_makan">
									<label class="form-check-label">Nafsu makan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="checkbox" name="efek_nyeri_tidur">
									<label class="form-check-label">Tidur</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="custom-checkbox-success" name="efek_nyeri_dll">
									<label class="form-check-label">dll:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" name="efek_nyeri_dll_keterangan">
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label>Intervensi:</label>
							<input type="text" class="form-control border-dark" name="intervensi">
						</div>

						<div class="text-center col d-flex flex-column justify-content-center align-items-center">
							<b>Untuk pasien anak atau yang tidak dapat bicara</b>
							<img src="<?= base_url() . "assets/images/form/wong-baker-10.jpg" ?>" width="700" height="300"
								alt="">
						</div>
						<div class="mt-3 col-4">
							<label>Skala WONG BAKER: </label>
							<input type="number" class="form-control border-dark" name="score_nyeri_wong_baker">
						</div>
					</td>
				</tr>
				<tr>
					<th>PERTUMBUHAN DAN PERKEMBANGAN</th>
					<td colspan="2" style="width: 40%">
						<div class="mb-3">
							<label class="fw-bold">A. Pertumbuhan:</label>
							<div class="d-flex flex-column gap-2 ms-3">
								<div class="d-flex align-items-center gap-2">
									<label class="col-5">1. Kehamilan</label>
									<input type="text" class="form-control border-dark" name="kehamilan">
									<span>mggu</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label class="col-5">2. Lahir ditolong oleh</label>
									<input type="text" class="form-control border-dark" name="lahir_ditolong">
								</div>

								<div class="d-flex align-items-center gap-2">
									<label class="col-5">3. Anak ke</label>
									<input type="text" class="form-control border-dark" name="anak_ke">
								</div>

								<div class="d-flex align-items-center gap-2">
									<label class="col-5">4. BB/TB saat lahir</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="bb_lahir">
									<span>gram /</span>
									<input type="text" class="form-control border-dark" style="width: 100px" name="tb_lahir">
									<span>cm</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label class="col-5">5. Kelainan</label>
									<input type="text" class="form-control border-dark" name="kelainan">
								</div>

								<div class="d-flex align-items-center gap-2">
									<label class="col-5">6. Makan/minum</label>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="asi">
										<label class="form-check-label">ASI</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="pasi">
										<label class="form-check-label">PASI</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="pasi_makanan">
										<label class="form-check-label">Makanan</label>
									</div>
								</div>

								<div class="d-flex flex-column gap-2">
									<label class="col-5">7. a. Imunisasi Dasar</label>
									<div class="d-flex gap-3 ms-4">
										<div class="form-check">
											<input class="custom-checkbox-success" type="checkbox" name="lengkap_imunisasi">
											<label class="form-check-label">Lengkap</label>
										</div>
										<div class="form-check">
											<input class="custom-checkbox-success" type="checkbox" name="tidak_imunisasi">
											<label class="form-check-label">Tidak</label>
										</div>
									</div>

									<label class="col-10 ms-3">b. Imunisasi Lanjutan yang telah diberikan:</label>
									<div class="d-flex flex-column gap-2">
										<input type="text" class="form-control border-dark" name="imunisasi_lanjutan_1" placeholder="1.">
										<input type="text" class="form-control border-dark" name="imunisasi_lanjutan_2" placeholder="2.">
										<input type="text" class="form-control border-dark" name="imunisasi_lanjutan_3" placeholder="3.">
										<input type="text" class="form-control border-dark" name="imunisasi_lanjutan_4" placeholder="4.">
										<input type="text" class="form-control border-dark" name="imunisasi_lanjutan_5" placeholder="5.">
									</div>
								</div>
							</div>
						</div>
					</td>
					<td class="align-content-start">
						<div class="mb-3">
							<label class="fw-bold">B. Perkembangan:</label>
							<div class="d-flex flex-column gap-2">
								<div class="d-flex align-items-center gap-2">
									<label>1. Tengkurap badan</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="tengkurap_badan">
									<span>bulan</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label>2. Tengkurap</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="tengkurap">
									<span>bulan</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label>3. Tumbuh gigi</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="tumbuh_gigi">
									<span>bulan</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label>4. Duduk</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="duduk">
									<span>bulan</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label>5. Berdiri</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="berdiri">
									<span>bulan</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label>6. Belajar Bicara</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="belajar_bicara">
									<span>bulan</span>
								</div>

								<div class="d-flex align-items-center gap-2">
									<label>7. Berjalan</label>
									<input type="text" class="form-control border-dark" style="width: 100px" name="berjalan">
									<span>bulan</span>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>RISIKO JATUH</th>
					<td colspan="4">
						<!-- Initial Risk Assessment Table -->
						<table class="table table-bordered border-dark mb-3">
							<tr>
								<th>Risiko</th>
								<th>Skor</th>
								<th>Rencana Tindak Lanjut</th>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="resiko_tinggi">
										<label class="form-check-label">Risiko Tinggi</label>
									</div>
								</td>
								<td>≥12</td>
								<td>
									<input type="text" class="form-control border-dark" name="rencana_tindak_lanjut_tinggi">
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="resiko_rendah">
										<label class="form-check-label">Risiko Rendah</label>
									</div>
								</td>
								<td>7-11</td>
								<td>
									<input type="text" class="form-control border-dark" name="rencana_tindak_lanjut_rendah">
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="custom-checkbox-success" type="checkbox" name="resiko_minimal">
										<label class="form-check-label">Risiko minimal</label>
									</div>
								</td>
								<td>≤6</td>
								<td>
									<input type="text" class="form-control border-dark" name="rencana_tindak_lanjut_minimal">
								</td>
							</tr>
						</table>

						<!-- Humpty Dumpty Scale -->
						<div class="fw-bold mb-2 text-center">SKALA HUMPTY DUMPTY</div>
						<table class="table table-bordered border-dark">
							<tr>
								<th>PARAMETER</th>
								<th>KRITERIA</th>
								<th>POIN</th>
								<th>SKOR</th>
							</tr>

							<!-- Umur -->
							<tr>
								<td rowspan="4">Umur</td>
								<td>Kurang dari 3 th</td>
								<td>4</td>
								<td><input type="checkbox" name="parameter_umur_1" value="4" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>3-<7 th</td>
								<td>3</td>
								<td><input type="checkbox" name="parameter_umur_2" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>7-13 th</td>
								<td>2</td>
								<td><input type="checkbox" name="parameter_umur_3" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>13-18 th</td>
								<td>1</td>
								<td><input type="checkbox" name="parameter_umur_4" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Jenis Kelamin -->
							<tr>
								<td rowspan="2">Jenis Kelamin</td>
								<td>Pria</td>
								<td>2</td>
								<td><input type="checkbox" name="parameter_jenkel_1" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Wanita</td>
								<td>1</td>
								<td><input type="checkbox" name="parameter_jenkel_2" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Diagnosis -->
							<tr>
								<td rowspan="4">Diagnosis</td>
								<td>Kelainan neurologis</td>
								<td>4</td>
								<td><input type="checkbox" name="parameter_diagnosis_1" value="4" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Ggn oksigenasi<br>(respirasi, dehidrasi, anemia, anoreksia, pingsan, pusing, sinkop)</td>
								<td>3</td>
								<td><input type="checkbox" name="parameter_diagnosis_2" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Gangguan psikologis tingkah laku</td>
								<td>2</td>
								<td><input type="checkbox" name="parameter_diagnosis_3" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Diagnosa lain</td>
								<td>1</td>
								<td><input type="checkbox" name="parameter_diagnosis_4" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Gangguan Kognitif -->
							<tr>
								<td rowspan="3">Gangguan Kognitif</td>
								<td>Tidak mengakui kemampuannya</td>
								<td>3</td>
								<td><input type="checkbox" name="parameter_kognitif_1" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Lupa akan kemampuannya</td>
								<td>2</td>
								<td><input type="checkbox" name="parameter_kognitif_2" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Sadar akan kemampuannya</td>
								<td>1</td>
								<td><input type="checkbox" name="parameter_kognitif_3" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Factor Lingkungan -->
							<tr>
								<td rowspan="4">Factor Lingkungan</td>
								<td>Riwayat jatuh dari TT saat bayi/anak</td>
								<td>4</td>
								<td><input type="checkbox" name="parameter_lingkungan_1" value="4" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Menggunakan alat bantu box</td>
								<td>3</td>
								<td><input type="checkbox" name="parameter_lingkungan_2" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Pasien menggunakan Bed</td>
								<td>2</td>
								<td><input type="checkbox" name="parameter_lingkungan_3" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Area rawat jalan</td>
								<td>1</td>
								<td><input type="checkbox" name="parameter_lingkungan_4" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Respon terhadap pembedahan/sedasi/anestesi -->
							<tr>
								<td rowspan="3">Respon terhadap pembedahan/sedasi/anestesi</td>
								<td>Antara 24 jam</td>
								<td>3</td>
								<td><input type="checkbox" name="parameter_respon_pembedahan_1" value="3" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Antara 48 jam</td>
								<td>2</td>
								<td><input type="checkbox" name="parameter_respon_pembedahan_2" value="2" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Lebih dari 48 jam atau tak ada</td>
								<td>1</td>
								<td><input type="checkbox" name="parameter_respon_pembedahan_3" value="1" class="custom-checkbox-success">
								</td>
							</tr>

							<!-- Penggunaan obat-obatan -->
							<tr>
								<td rowspan="3">Penggunaan obat-obatan</td>
								<td>Penggunaan obat-obatan:<br>Sedasive (tidak termasuk sedasi pada pasien ICU dan
									paralisis),<br>Hipnotic,
									Barbiturate, Phenothiazine, Anti depresan, Laxative, Narcotic
								</td>
								<td>3</td>
								<td><input type="checkbox" name="parameter_penggunaan_obat_1" value="3" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Menggunakan salah satu dari list diatas</td>
								<td>2</td>
								<td><input type="checkbox" name="parameter_penggunaan_obat_2" value="2" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Pengobatan lain / tidak menggunakan obat- obatan</td>
								<td>1</td>
								<td><input type="checkbox" name="parameter_penggunaan_obat_3" value="1" class="custom-checkbox-success">
								</td>
							</tr>

							<!-- Total Row -->
							<tr>
								<td colspan="3" class="text-center fw-bold">Total</td>
								<td>
									<input type="text" name="score_parameter" id="score_parameter" class="form-control border-dark" readonly>
									<!-- <p class="text-center" id="score_parameter"></p> -->
								</td>
							</tr>
						</table>

						<p class="mt-4">Kelompok Pasien: </p>
						<div class="d-flex flex-column gap-3">
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="kelompok_pasien" value="Terminal">
								<label class="form-check-label">Terminal</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="termnial_menular">
								<label class="form-check-label">Menular</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="terminal_imunosurpresive">
								<label class="form-check-label">Imunosurpresive</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="checkbox" name="teriminal_dll">
								<label class="form-check-label">Dll</label>
								<input type="text" class="form-control border-dark" name="kelompok_pasien_lainnya">
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="5">
						<div class="p-3 row">
							<div class="col-4">
								<p>NB: Rawat Inap harus mengisi seluruh asesmen</p>
								<div class="d-flex align-items-center gap-2">
									<label>Jam: </label>
									<input type="time" class="form-control border-dark" name="time_assesment" style="width: 120px;"> WIB
								</div>
								<p> Assesmen ulang dilakukan setelah 30 hari
									(*) pada pasien ICU
								</p>
							</div>
							<div class="col-8 d-flex flex-column align-items-end">
								<div class="d-flex flex-row gap-2 align-items-center">
									<div class="col">
										<label><?= $city_sign; ?> </label>
									</div>
									<div class="col">
										<input type="date" name="tanggal_2" class="form-control border-dark border-dark" value="<?= date('Y-m-d'); ?>">
									</div>
								</div>

								<div class="row col-12 gap-5 mt-5">
									<div class="col-5 d-flex flex-column gap-3">
										<label>Tanda Tangan Dokter</label>
										<img class="img-responsive" style="max-width: 100px; max-height: 100px"
											id="qr_perawat_pengkaji" />
										<select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-control border-dark dokter"
											style="width: 100%;"></select>
									</div>

									<div class="col-5 d-flex flex-column gap-3">
										<label for="perawat" class="form-label">Tanda Tangan Perawat</label>
										<img class="img-responsive" style="max-width: 100px; max-height: 100px"
											id="qr_dokter_umum" />
										<select type="select" name="dokter_umum" id="dokter_umum" class="form-control border-dark perawat"
											style="width: 100%;"></select>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>

</div>


<script>
	const mode = "<?= $mode; ?>"
	let dataListPerawat = []
	let dataDokter = []

	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	function cbCommon(data) {
		populateFormFields(data);


		// $('#dokter_umum').prop('disabled', false)
		// $('#dokter_umum').select2('open')
		// $('#dokter_umum').select2('close')
		// if (mode === "lihat")
		// 	$('#dokter_umum').prop('disabled', true)

		// setTimeout(() => {
		// 	dataDokter?.map(v => {
		// 		if (v.text === $('#dokter_umum').select2('data')[0].text) {
		// 			QRSignatureAPI(v.id_original, 'qr_dokter_umum')
		// 		}
		// 	})
		// }, 1000)

		$('#dokter_umum').prop('disabled', false)
		$('#dokter_umum').select2('open')
		$('#dokter_umum').select2('close')
		if (mode === "lihat")
			$('#dokter_umum').prop('disabled', true)

		setTimeout(() => {
			dataDokter?.map(v => {
				if (v.text === $('#dokter_umum').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_dokter_umum')
				}
			})
		}, 1000);

		$('#perawat_pengkaji').prop('disabled', false)
		$('#perawat_pengkaji').select2('open')
		$('#perawat_pengkaji').select2('close')
		if (mode === "lihat")
			$('#perawat_pengkaji').prop('disabled', true)

		setTimeout(() => {
			dataListPerawat?.map(v => {
				if (v.text === $('#perawat_pengkaji').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji')
				}
			})
		}, 1000)

	}

	$(document).ready(function() {
		let page = 1;


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

						// Assign ke variabel tertentu jika perlu
						if (selector === '.perawat') {
							dataListPerawat = items;
						} else if (selector === '.dokter') {
							dataDokter = items;
						}

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



		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});

		$('#perawat_pengkaji').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_pengkaji')
		});

		//================ new =====================//
	});


	function hitungSkorNutrisi() {
		let skor = 0;

		// Cek setiap checkbox "ya"
		if (document.querySelector('input[name="tampak_kurus_ya"]').checked) skor += 1;
		if (document.querySelector('input[name="penurunan_bb_ya"]').checked) skor += 1;
		if (document.querySelector('input[name="kondisi_khusus_ya"]').checked) skor += 1;
		if (document.querySelector('input[name="manultrisi_ya"]').checked) skor += 1;

		// Set hasil skor ke input
		document.getElementById("score_nutrisi").value = skor;

		// Tampilkan keterangan
		const keterangan = document.getElementById("keterangan_nutrisi");
		if (skor >= 1) {
			keterangan.textContent = "Kolaborasi dengan ahli gizi diperlukan";
		} else {
			keterangan.textContent = "";
		}
	}

	document.addEventListener('DOMContentLoaded', function() {
		const checkboxes = document.querySelectorAll('input[type="checkbox"]');
		checkboxes.forEach(cb => {
			cb.addEventListener('change', hitungSkorNutrisi);
		});
	});

	function hitungSkorHumptyDumpty() {
		let total = 0;

		// Daftar nama grup parameter (satu grup = satu parameter dengan beberapa pilihan)
		const parameterGroups = [
			["parameter_umur_1", "parameter_umur_2", "parameter_umur_3", "parameter_umur_4"],
			["parameter_jenkel_1", "parameter_jenkel_2"],
			["parameter_diagnosis_1", "parameter_diagnosis_2", "parameter_diagnosis_3", "parameter_diagnosis_4"],
			["parameter_kognitif_1", "parameter_kognitif_2", "parameter_kognitif_3"],
			["parameter_lingkungan_1", "parameter_lingkungan_2", "parameter_lingkungan_3", "parameter_lingkungan_4"],
			["parameter_respon_pembedahan_1", "parameter_respon_pembedahan_2", "parameter_respon_pembedahan_3"],
			["parameter_penggunaan_obat_1", "parameter_penggunaan_obat_2", "parameter_penggunaan_obat_3"]
		];

		parameterGroups.forEach(group => {
			group.forEach(name => {
				const checkbox = document.querySelector(`input[name="${name}"]`);
				if (checkbox && checkbox.checked) {
					total += parseInt(checkbox.value);
				}
			});
		});

		// Tampilkan skor ke field input
		document.getElementById("score_parameter").value = total;
	}

	document.addEventListener('DOMContentLoaded', function() {
		const checkboxes = document.querySelectorAll('input[type="checkbox"]');
		checkboxes.forEach(cb => {
			cb.addEventListener('change', hitungSkorHumptyDumpty);
		});
	});
</script>