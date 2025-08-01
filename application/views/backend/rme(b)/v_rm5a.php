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
					<div class="col-4">
						<label class="form-label">Jam</label>
						<input type="time" name="waktu_admit" class="form-control border-dark">
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
							<textarea class="form-control border-dark" name="diagnosa_awal" type="textarea" rows="3"></textarea>
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
							<input class="custom-checkbox-success" type="radio" name="pupil" value="Isokor">
							<label class="form-check-label">Isokor</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="custom-checkbox-success" type="radio" name="pupil" value="Anisokor">
							<label class="form-check-label">Anisokor</label>
						</div>

						<div class="d-flex flex-column  gap-3">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="Normal">
								<label class="form-check-label">Normal</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="Paralisis">
								<label class="form-check-label">Paralisis</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="Kejang">
								<label class="form-check-label">Kejang</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="Baal">
								<label class="form-check-label">Baal</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="Tremor">
								<label class="form-check-label">Tremor</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="Nyeri_Sendi">
								<label class="form-check-label">Nyeri Sendi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="Nyeri_Kepala">
								<label class="form-check-label">Nyeri Kepala</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="jenis_kesadaran" value="pusing">
								<label class="form-check-label">Pusing</label>
							</div>
						</div>
					</td>
					<td colspan="3" class="align-content-start">
						<label>Kesadaran:</label>
						<div class="d-flex flex-wrap gap-3">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kesadaran" value="Composmentis">
								<label class="form-check-label">Composmentis</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kesadaran" value="Somnolen">
								<label class="form-check-label">Somnolen</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kesadaran" value="Sopor">
								<label class="form-check-label">Sopor</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="kesadaran" value="Coma">
								<label class="form-check-label">Coma</label>
							</div>
						</div>
						<div class="d-flex flex-column gap-2">
							<label>Pendengaran: </label>
							<div class="d-flex flex-row">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pendengaran" value="Normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="pendengaran" value="Gangguan">
									<label class="form-check-label">Ada Gangguan</label>
								</div>
							</div>

							<label>Penglihatan: </label>
							<div class="d-flex flex-row">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="penglihatan" value="Normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="penglihatan" value="Gangguan">
									<label class="form-check-label">Ada Gangguan</label>
								</div>
							</div>

							<label>Bicara: </label>
							<div class="d-flex flex-row">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bicara" value="Normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="bicara" value="Gangguan">
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
									<input class="custom-checkbox-success" type="radio" name="respirasi_choice" value="Normal">
									<label class="form-check-label">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="respirasi_choice" value="Cyanosis">
									<label class="form-check-label">Cyanosis</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="respirasi_choice" value="Dyspnea">
									<label class="form-check-label">Dyspnea</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="respirasi_choice" value="Whezing">
									<label class="form-check-label">Whezing</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="respirasi_choice" value="Batuk">
									<label class="form-check-label">Batuk</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="respirasi_choice" value="Hemoptoe">
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
									<input class="custom-checkbox-success" type="radio" name="kulit" id="normal" value="normal">
									<label class="form-check-label" for="normal">Normal</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulit" id="merah" value="merah">
									<label class="form-check-label" for="merah">Merah</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulit" id="cyanosis" value="cyanosis">
									<label class="form-check-label" for="cyanosis">Cyanosis</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulit" id="pucat" value="pucat">
									<label class="form-check-label" for="pucat">Pucat</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulit" id="panas" value="panas">
									<label class="form-check-label" for="panas">Panas</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulit" id="dehidrasi" value="dehidrasi">
									<label class="form-check-label" for="dehidrasi">Dehidrasi</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulit" id="ikterik" value="ikterik">
									<label class="form-check-label" for="ikterik">Ikterik</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="kulit" id="berkeringat"
										value="berkeringat">
									<label class="form-check-label" for="berkeringat">Berkeringat</label>
								</div>
							</div>

							<div class="row mb-3">
								<label class="form-label">Dekubitus</label>
								<div class="col-md-6">
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="radio" name="dekubitus" id="ya" value="ya">
										<label class="form-check-label" for="ya">Ya</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="radio" name="dekubitus" id="tidak" value="tidak">
										<label class="form-check-label" for="tidak">Tidak</label>
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
									<input class="custom-checkbox-success" type="radio" name="chest_pain" value="Ya">
									<label class="form-check-label">Ya</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="chest_pain" value="Tidak">
									<label class="form-check-label">Tidak</label>
								</div>
							</div>

							<div class="d-flex flex-row align-items-center gap-2">
								<label>Nadi:</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="nadi_reguler" value="Reguler">
									<label class="form-check-label">Reguler</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="nadi_reguler" value="Irreguler">
									<label class="form-check-label">Irreguler</label>
								</div>
							</div>

							<div class="d-flex flex-row align-items-center gap-2">
								<label>Irama:</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="irama" value="Reguler">
									<label class="form-check-label">Reguler</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="irama" value="Irreguler">
									<label class="form-check-label">Irreguler</label>
								</div>
							</div>

							<div class="d-flex flex-row align-items-center gap-2">
								<label>Volume:</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="volume_reguler" value="Edema">
									<label class="form-check-label">Edema</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="volume_reguler" value="Tidak">
									<label class="form-check-label">Tidak</label>
								</div>
							</div>
						</div>
					</td>
					<td class="align-content-start">
						<b>Saluran Pencernaan</b>
						<div class="row" style="width: 300px;">
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Normal">
								<label class="form-check-label">Normal</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Konstipasi">
								<label class="form-check-label">Konstipasi</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Diare">
								<label class="form-check-label">Diare</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Melena">
								<label class="form-check-label">Melena</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Acties">
								<label class="form-check-label">Acties</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Hematemesis">
								<label class="form-check-label">Hematemesis</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Muntah">
								<label class="form-check-label">Muntah</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Colonostomy">
								<label class="form-check-label">Colonostomy</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Mual">
								<label class="form-check-label">Mual</label>
							</div>
							<div class="col-6 mt-3">
								<input class="custom-checkbox-success" type="radio" name="saluran" value="Distensi Abdomen">
								<label class="form-check-label">Distensi Abdomen</label>
							</div>
						</div>
					</td>
					<td>
						<b>Mulut</b>
						<div class="d-flex flex-column gap-3">
							<div class="form-check mt-3">
								<input class="custom-checkbox-success" type="radio" name="kondisi_mulut" value="Normal">
								<label class="form-check-label">Normal</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kondisi_mulut" value="Stomatitis">
								<label class="form-check-label">Stomatitis</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kondisi_mulut" value="Gusi Bengkak">
								<label class="form-check-label">Gusi Bengkak</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kondisi_mulut" value="Gigi Pecah/Berlubang">
								<label class="form-check-label">Gigi Pecah/Berlubang</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kondisi_mulut" value="Lidah Patologis">
								<label class="form-check-label">Lidah Patologis</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kondisi_mulut" value="Dll">
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
										<input class="custom-checkbox-success" type="radio" name="kateter" value="Ya">
										<label class="form-check-label">Ya</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="radio" name="kateter" value="Tidak">
										<label class="form-check-label">Tidak</label>
									</div>
								</div>

								<label>Tipe Kateter:</label>
								<div class="d-flex flex-row align-items-center gap-3">
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="tipe_kateter" value="Foley">
										<label class="form-check-label">Foley</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="tipe_kateter" value="Condom">
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
								<input class="custom-checkbox-success" type="radio" name="psikologis" value="Baik/Stabil">
								<label class="form-check-label">Baik/Stabil</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="psikologis" value="Cemas">
								<label class="form-check-label">Cemas</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="psikologis" value="Sedih">
								<label class="form-check-label">Sedih</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="psikologis" value="Marah">
								<label class="form-check-label">Marah</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="psikologis" value="Kecenderungan Bunuh Diri">
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
									<input class="custom-checkbox-success" type="radio" name="hambatan_komunikasi" value="Tidak">
									<label class="form-check-label">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="hambatan_komunikasi" value="Ya">
									<label class="form-check-label">Ya</label>
									<div class="d-flex flex-row gap-3">
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="hambatan_komunikasi_ya"
												value="Apasia">
											<label class="form-check-label">Apasia</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="hambatan_komunikasi_ya"
												value="Bahasa">
											<label class="form-check-label">Bahasa</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="hambatan_komunikasi_ya"
												value="Kognitif">
											<label class="form-check-label">Kognitif</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="hambatan_komunikasi_ya"
												value="Kognitif">
											<label class="form-check-label">Kognitif</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="custom-checkbox-success" type="radio" name="hambatan_komunikasi_ya"
												value="dll">
											<label class="form-check-label">Dll</label>
											<input type="text" class="form-control border-dark" name="hambatan_komunikasi_ya_lainnya">
										</div>
									</div>
								</div>
							</div>

							<label>Perlu Edukasi:</label>
							<div class="d-flex flex-column gap-2">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="perlu_edukasi" value="Tidak">
									<label class="form-check-label">Tidak</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="perlu_edukasi" value="Ya">
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
								<input class="custom-checkbox-success" type="radio" name="menstruasi" value="Teratur">
								<label class="form-check-label">Teratur</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="menstruasi" value="Tidak Teratur">
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
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_jalan" value="mandiri"></td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_jalan" value="perlu_bantuan">
								</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_jalan"
										value="ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Makan/Minum</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_makan_minum" value="mandiri">
								</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_makan_minum"
										value="perlu_bantuan">
								</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_makan_minum"
										value="ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Mandi</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_mandi" value="mandiri"></td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_mandi" value="perlu_bantuan">
								</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_mandi"
										value="ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Berpakaian</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_berpakaian" value="mandiri">
								</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_berpakaian"
										value="perlu_bantuan">
								</td>
								<td><input type="radio" class="custom-checkbox-success" name="aktifitas_berpakaian"
										value="ketergantungan_total"></td>
							</tr>
							<tr>
								<td>Bak/Bab</td>
								<td><input type="radio" class="custom-checkbox-success" name="bak_bab" value="mandiri"></td>
								<td><input type="radio" class="custom-checkbox-success" name="bak_bab" value="perlu_bantuan"></td>
								<td><input type="radio" class="custom-checkbox-success" name="bak_bab" value="ketergantungan_total">
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
										<input class="custom-checkbox-success" type="radio" name="tampak_kurus" value="tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="tampak_kurus" value="ya">
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
										<input class="custom-checkbox-success" type="radio" name="penurunan_bb" value="tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="penurunan_bb" value="ya">
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
										<input class="custom-checkbox-success" type="radio" name="kondisi_khusus" value="tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="kondisi_khusus" value="ya">
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
										<input class="custom-checkbox-success" type="radio" name="risiko_malnutrisi" value="tidak">
										<label class="form-check-label">Tidak</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="risiko_malnutrisi" value="ya">
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
									<p id="score_nutrisi"></p>
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
									<input class="custom-checkbox-success" type="radio" name="skor_nyeri" value="0">
									<label class="form-check-label">Tidak Nyeri (0)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="skor_nyeri" value="1-3">
									<label class="form-check-label">Ringan (1-3)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="skor_nyeri" value="4-6">
									<label class="form-check-label">Sedang (4-6)</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="skor_nyeri" value="7-10">
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
									<input class="custom-checkbox-success" type="radio" name="kualitas_nyeri" value="Nyeri">
									<label class="form-check-label">Nyeri</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="kualitas_nyeri" value="Tumpul">
									<label class="form-check-label">Tumpul</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="kualitas_nyeri" value="Tajam">
									<label class="form-check-label">Tajam</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="kualitas_nyeri" value="Menusuk">
									<label class="form-check-label">Menusuk</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="kualitas_nyeri" value="Kram">
									<label class="form-check-label">Kram</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="kualitas_nyeri" value="Tekan">
									<label class="form-check-label">Tekan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="kualitas_nyeri" value="Terbakar">
									<label class="form-check-label">Terbakar</label>
								</div>
								<div class="form-check">
									<input type="radio" class="custom-checkbox-success" name="kualitas_nyeri" value="dll">
									<label class="form-check-label">dll:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" style="width: 100px;">
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label>Faktor Pemberat:</label>
							<div class="d-flex flex-wrap gap-3">
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="faktor_pemberat" value="Cahaya">
									<label class="form-check-label">Cahaya</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="faktor_pemberat" value="Gerakan">
									<label class="form-check-label">Gerakan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="faktor_pemberat" value="Emosi">
									<label class="form-check-label">Emosi</label>
								</div>
								<div class="form-check">
									<input type="radio" class="custom-checkbox-success" name="faktor_pemberat" value="dll">
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
									<input class="custom-checkbox-success" type="radio" name="faktor_peringan" value="Cahaya">
									<label class="form-check-label">Cahaya</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="faktor_peringan" value="Gerakan">
									<label class="form-check-label">Gerakan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="faktor_peringan" value="Emosi">
									<label class="form-check-label">Emosi</label>
								</div>
								<div class="form-check">
									<input type="radio" class="custom-checkbox-success" name="faktor_peringan" value="dll">
									<label class="form-check-label">dll:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2"
										name="faktor_peringan_dll">
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
									<input class="custom-checkbox-success" type="radio" name="efek_nyeri" value="Emosi">
									<label class="form-check-label">Emosi</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="efek_nyeri" value="Mual/Muntah">
									<label class="form-check-label">Mual/Muntah</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="efek_nyeri" value="Aktivitas">
									<label class="form-check-label">Aktivitas</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="efek_nyeri" value="Nafsu_makan">
									<label class="form-check-label">Nafsu makan</label>
								</div>
								<div class="form-check">
									<input class="custom-checkbox-success" type="radio" name="efek_nyeri" value="Tidur">
									<label class="form-check-label">Tidur</label>
								</div>
								<div class="form-check">
									<input type="radio" class="custom-checkbox-success" name="efek_nyeri" value="dll">
									<label class="form-check-label">dll:</label>
									<input type="text" class="form-control border-dark form-control border-dark-sm d-inline ms-2" name="efek_nyeri_dll">
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
										<input class="custom-checkbox-success" type="radio" name="makan_minum" value="ASI">
										<label class="form-check-label">ASI</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="makan_minum" value="PASI">
										<label class="form-check-label">PASI</label>
									</div>
									<div class="form-check">
										<input class="custom-checkbox-success" type="radio" name="makan_minum" value="Makanan">
										<label class="form-check-label">Makanan</label>
									</div>
								</div>

								<div class="d-flex flex-column gap-2">
									<label class="col-5">7. a. Imunisasi Dasar</label>
									<div class="d-flex gap-3 ms-4">
										<div class="form-check">
											<input class="custom-checkbox-success" type="radio" name="imunisasi_dasar" value="lengkap">
											<label class="form-check-label">Lengkap</label>
										</div>
										<div class="form-check">
											<input class="custom-checkbox-success" type="radio" name="imunisasi_dasar" value="tidak">
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
										<input class="custom-checkbox-success" type="radio" name="resiko_jatuh" value="tinggi">
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
										<input class="custom-checkbox-success" type="radio" name="resiko_jatuh" value="rendah">
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
										<input class="custom-checkbox-success" type="radio" name="resiko_jatuh" value="minimal">
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
								<td><input type="radio" name="parameter_umur" value="4" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>3-<7 th</td>
								<td>3</td>
								<td><input type="radio" name="parameter_umur" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>7-13 th</td>
								<td>2</td>
								<td><input type="radio" name="parameter_umur" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>13-18 th</td>
								<td>1</td>
								<td><input type="radio" name="parameter_umur" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Jenis Kelamin -->
							<tr>
								<td rowspan="2">Jenis Kelamin</td>
								<td>Pria</td>
								<td>2</td>
								<td><input type="radio" name="parameter_jenkel" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Wanita</td>
								<td>1</td>
								<td><input type="radio" name="parameter_jenkel" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Diagnosis -->
							<tr>
								<td rowspan="4">Diagnosis</td>
								<td>Kelainan neurologis</td>
								<td>4</td>
								<td><input type="radio" name="parameter_diagnosis" value="4" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Ggn oksigenasi<br>(respirasi, dehidrasi, anemia, anoreksia, pingsan, pusing, sinkop)</td>
								<td>3</td>
								<td><input type="radio" name="parameter_diagnosis" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Gangguan psikologis tingkah laku</td>
								<td>2</td>
								<td><input type="radio" name="parameter_diagnosis" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Diagnosa lain</td>
								<td>1</td>
								<td><input type="radio" name="parameter_diagnosis" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Gangguan Kognitif -->
							<tr>
								<td rowspan="3">Gangguan Kognitif</td>
								<td>Tidak mengakui kemampuannya</td>
								<td>3</td>
								<td><input type="radio" name="parameter_kognitif" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Lupa akan kemampuannya</td>
								<td>2</td>
								<td><input type="radio" name="parameter_kognitif" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Sadar akan kemampuannya</td>
								<td>1</td>
								<td><input type="radio" name="parameter_kognitif" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Factor Lingkungan -->
							<tr>
								<td rowspan="4">Factor Lingkungan</td>
								<td>Riwayat jatuh dari TT saat bayi/anak</td>
								<td>4</td>
								<td><input type="radio" name="parameter_lingkungan" value="4" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Menggunakan alat bantu box</td>
								<td>3</td>
								<td><input type="radio" name="parameter_lingkungan" value="3" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Pasien menggunakan Bed</td>
								<td>2</td>
								<td><input type="radio" name="parameter_lingkungan" value="2" class="custom-checkbox-success"></td>
							</tr>
							<tr>
								<td>Area rawat jalan</td>
								<td>1</td>
								<td><input type="radio" name="parameter_lingkungan" value="1" class="custom-checkbox-success"></td>
							</tr>

							<!-- Respon terhadap pembedahan/sedasi/anestesi -->
							<tr>
								<td rowspan="3">Respon terhadap pembedahan/sedasi/anestesi</td>
								<td>Antara 24 jam</td>
								<td>3</td>
								<td><input type="radio" name="parameter_respon_pembedahan" value="3" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Antara 48 jam</td>
								<td>2</td>
								<td><input type="radio" name="parameter_respon_pembedahan" value="2" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Lebih dari 48 jam atau tak ada</td>
								<td>1</td>
								<td><input type="radio" name="parameter_respon_pembedahan" value="1" class="custom-checkbox-success">
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
								<td><input type="radio" name="parameter_penggunaan_obat" value="3" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Menggunakan salah satu dari list diatas</td>
								<td>2</td>
								<td><input type="radio" name="parameter_penggunaan_obat" value="2" class="custom-checkbox-success">
								</td>
							</tr>
							<tr>
								<td>Pengobatan lain / tidak menggunakan obat- obatan</td>
								<td>1</td>
								<td><input type="radio" name="parameter_penggunaan_obat" value="1" class="custom-checkbox-success">
								</td>
							</tr>

							<!-- Total Row -->
							<tr>
								<td colspan="3" class="text-center fw-bold">Total</td>
								<td>
									<p class="text-center" id="score_parameter"></p>
								</td>
							</tr>
						</table>

						<p class="mt-4">Kelompok Pasien: </p>
						<div class="d-flex flex-column gap-3">
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kelompok_pasien" value="Terminal">
								<label class="form-check-label">Terminal</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kelompok_pasien" value="Menular">
								<label class="form-check-label">Menular</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kelompok_pasien" value="Imunosurpresive">
								<label class="form-check-label">Imunosurpresive</label>
							</div>
							<div class="form-check">
								<input class="custom-checkbox-success" type="radio" name="kelompok_pasien" value="dll">
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
								<label>Jam: </label>
								<input type="time" class="form-control border-dark" name="time_assesment"> WIB
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
											id="qr_dokter_umum" />
										<select type="select" name="dokter_umum" id="dokter_umum" class="form-control border-dark"
											style="width: 100%;"></select>
									</div>

									<div class="col-5 d-flex flex-column gap-3">
										<label for="perawat" class="form-label">Tanda Tangan Perawat</label>
										<img class="img-responsive" style="max-width: 100px; max-height: 100px"
											id="qr_perawat" />
										<select type="select" name="perawat" id="perawat" class="form-control border-dark"
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
	let dataListPerawat = []
	let dataListDokter = []

	function cbCommon() {
		$('#dokter_umum').prop('disabled', false)
		$('#dokter_umum').select2('open')
		$('#dokter_umum').select2('close')
		$('#perawat').prop('disabled', false)
		$('#perawat').select2('open')
		$('#perawat').select2('close')
		if (mode === "lihat") {
			$('#dokter_umum').prop('disabled', true)
			$('#perawat').prop('disabled', true)

		}

		setTimeout(() => {
			console.log(dataListDokter)
			dataListDokter?.map(v => {
				if (v.text === $('#dokter_umum').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_dokter_umum')
				}
			})
			dataListPerawat?.map(v => {
				if (v.text === $('#perawat').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat')
				}
			})
		}, 1000)

	}

	$(document).ready(function() {
		listPerawatAPI()
		listDokterUmumAPI()
		$('#perawat').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat')
		});
		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});
	})

	function listPerawatAPI() {
		$('#perawat').select2({
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
					dataListPerawat = items
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
					dataListDokter = items
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

	function calculateScoreNutrition() {
		const radioNames = ['risiko_malnutrisi', 'kondisi_khusus', 'penurunan_bb', 'tampak_kurus'];
		let totalScore = 0;

		radioNames.forEach(name => {
			const yaRadio = document.querySelector(`input[type="radio"][name="${name}"][value="ya"]:checked`);
			if (yaRadio) {
				totalScore += 1;
			}
		});

		document.getElementById('score_nutrisi').textContent = totalScore;

		if (totalScore >= 1) {
			document.getElementById('score_nutrisi').innerHTML += '<br><i>Kolaborasi dengan ahli gizi</i>';
		}
	}

	function calculateScoreParameter() {
		const radioNames = ['parameter_umur', 'parameter_jenkel', 'parameter_diagnosis', 'parameter_kognitif', 'parameter_lingkungan', 'parameter_respon_pembedahan', 'parameter_penggunaan_obat'];
		let totalScore = 0;

		radioNames.forEach(name => {
			const selectedRadio = document.querySelector(`input[name="${name}"]:checked`);

			if (selectedRadio) {
				totalScore += parseInt(selectedRadio.value, 10);
			}
		});
		document.getElementById('score_parameter').textContent = totalScore;
	}

	const radioScoreNames = ['risiko_malnutrisi', 'kondisi_khusus', 'penurunan_bb', 'tampak_kurus'];
	const radioParameterNames = ['parameter_umur', 'parameter_jenkel', 'parameter_diagnosis', 'parameter_kognitif', 'parameter_lingkungan', 'parameter_respon_pembedahan', 'parameter_penggunaan_obat'];

	radioScoreNames.forEach(name => {
		const radioButtons = document.querySelectorAll(`input[type="radio"][name="${name}"]`);
		radioButtons.forEach(radio => {
			radio.addEventListener('change', calculateScoreNutrition);
		});
	});
	radioParameterNames.forEach(name => {
		const radioButtons = document.querySelectorAll(`input[type="radio"][name="${name}"]`);
		radioButtons.forEach(radio => {
			radio.addEventListener('change', calculateScoreParameter);
		});
	});

	window.addEventListener('load', calculateScoreNutrition);
	window.addEventListener('load', calculateScoreParameter);


	const tidakRadio = document.getElementById('tidak');
	const yaRadio = document.getElementById('ya_obat');
	const alergiInput = document.getElementById('alergi_ya_input');

	// Function to handle enabling/disabling the input
	function toggleInputState() {
		if (yaRadio.checked) {
			alergiInput.readOnly = false; // Enable input
			alergiInput.focus(); // Focus the input
		} else {
			alergiInput.readOnly = true; // Disable input
			alergiInput.value = ''; // Clear the value
		}
	}

	// Add event listeners for the radio buttons
	tidakRadio.addEventListener('change', toggleInputState);
	yaRadio.addEventListener('change', toggleInputState);

	// Initial state check
	toggleInputState();
</script>