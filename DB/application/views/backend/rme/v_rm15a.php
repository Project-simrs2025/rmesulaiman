<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control border-dark" id="nama" name="nama_pasien">
		</div>
		<div class="col-6">
			<label for="no_rm" class="form-label">No. RM</label>
			<input type="text" class="form-control border-dark" id="no_rm" name="no_rm">
		</div>
		<div class="col-6">
			<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
			<input type="text" class="form-control border-dark" id="tgl_lahir" name="tanggal_lahir">
		</div>
		<div class="col-6">
			<label for="jenkel" class="form-label">Jenis Kelamin</label>
			<input type="text" class="form-control border-dark" id="jenkel" name="jenkel">
		</div>
		<div class="col-6">
			<label for="ruang" class="form-label">Ruang</label>
			<input type="text" class="form-control border-dark" id="ruang" name="nama_ruangan">
		</div>
		<div class="col-6">
			<label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
			<input type="text" class="form-control border-dark" id="tgl_masuk" name="tgl_admit">
		</div>
		<div class="col-6">
			<label for="kelas" class="form-label">Kelas</label>
			<input type="text" class="form-control border-dark" id="kelas" name="kelas">
		</div>
	</div>


	<h2 class="mt-4">Pendarahan Antepartum</h2>
	<div class="row">
		<div class="col-6">
			<label for="kapan_mulai" class="form-label">Kapan Mulai</label>
			<input type="date" class="form-control border-dark" id="kapan_mulai" name="kapan_mulai">
		</div>
		<div class="col-6">
			<label for="pendarahan_ke" class="form-label">Pendarahan ke</label>
			<input type="text" class="form-control border-dark" id="pendarahan_ke" name="pendarahan_ke">
		</div>
		<div class="col-6">
			<label for="banyaknya" class="form-label">Banyaknya</label>
			<input type="text" class="form-control border-dark" id="banyaknya" name="banyaknya">
		</div>
		<div class="col-6">
			<label for="darah_beku" class="form-label">Darah Beku</label>
			<input type="text" class="form-control border-dark" id="darah_beku" name="darah_beku">
		</div>
		<div class="col-6 d-flex flex-row my-2 gap-2">
			<label class="form-label me-3">Rasa Nyeri</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="rasa_nyeri" id="rasa_nyeri_ada" value="ada">
				<label class="form-check-label" for="rasa_nyeri_ada">Ada</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="rasa_nyeri" id="rasa_nyeri_tidak" value="tidak">
				<label class="form-check-label" for="rasa_nyeri_tidak">Tidak</label>
			</div>
		</div>
		<div class="col-6">
			<label for="trauma" class="form-label">Trauma</label>
			<input type="text" class="form-control border-dark" id="trauma" name="trauma">
		</div>
	</div>


	<h2 class="mt-4">Tanda-Tanda Keracunan Hamil</h2>
	<div class="row">
		<div class="row">
			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Edema</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="edema" id="edema_ada" value="ada">
					<label class="form-check-label" for="edema_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="edema" id="edema_tidak" value="tidak">
					<label class="form-check-label" for="edema_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Vertigo</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="vertigo" id="vertigo_ada" value="ada">
					<label class="form-check-label" for="vertigo_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="vertigo" id="vertigo_tidak" value="tidak">
					<label class="form-check-label" for="vertigo_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Pening</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="pening" id="pening_ada" value="ada">
					<label class="form-check-label" for="pening_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="pening" id="pening_tidak" value="tidak">
					<label class="form-check-label" for="pening_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Gangg. Visus</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="gangg_visus" id="gangg_visus_ada" value="ada">
					<label class="form-check-label" for="gangg_visus_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="gangg_visus" id="gangg_visus_tidak" value="tidak">
					<label class="form-check-label" for="gangg_visus_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Mual</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="mual" id="mual_ada" value="ada">
					<label class="form-check-label" for="mual_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="mual" id="mual_tidak" value="tidak">
					<label class="form-check-label" for="mual_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Kejang-kejang</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="kejang2" id="kejang2_ada" value="ada">
					<label class="form-check-label" for="kejang2_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="kejang2" id="kejang2_tidak" value="tidak">
					<label class="form-check-label" for="kejang2_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Muntah</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="muntah" id="muntah_ada" value="ada">
					<label class="form-check-label" for="muntah_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="muntah" id="muntah_tidak" value="tidak">
					<label class="form-check-label" for="muntah_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Coma</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="coma" id="coma_ada" value="ada">
					<label class="form-check-label" for="coma_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="coma" id="coma_tidak" value="tidak">
					<label class="form-check-label" for="coma_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Nyeri Ulu Hati</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="nyeri_ulu_hati" id="nyeri_ulu_hati_ada" value="ada">
					<label class="form-check-label" for="nyeri_ulu_hati_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="nyeri_ulu_hati" id="nyeri_ulu_hati_tidak" value="tidak">
					<label class="form-check-label" for="nyeri_ulu_hati_tidak">Tidak</label>
				</div>
			</div>

			<div class="col-6 d-flex flex-row gap-2 mb-3">
				<label class="form-label col-3">Icterus</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="icterus" id="icterus_ada" value="ada">
					<label class="form-check-label" for="icterus_ada">Ada</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-danger" type="radio" name="icterus" id="icterus_tidak" value="tidak">
					<label class="form-check-label" for="icterus_tidak">Tidak</label>
				</div>
			</div>
		</div>



		<h2 class="mt-4">Anamnese Genekologi</h2>
		<div class="col-6 d-flex gap-2 align-items-center">
			<label for="menarche_umur" class="form-label flex-shrink-0">Menarche :</label>
			<input type="text" class="form-control border-dark" id="menarche_umur" name="menarche_umur"> Umur
			<input type="text" class="form-control border-dark" id="menarche_tahun" name="menarche_tahun"> Tahun
		</div>
		<div class="my-3 d-flex align-items-center gap-2">
			<label for="haid_hari" class="form-label flex-shrink-0 col-2">Haid :</label>
			<input type="text" class="form-control border-dark" id="haid_hari" name="haid_hari">Hari
		</div>
		<div class="mb-3 d-flex align-items-center gap-2">
			<label for="haid_terakhir" class="form-label flex-shrink-0 col-2">Haid Terakhir :</label>
			<input type="date" class="form-control border-dark" id="haid_terakhir" name="haid_terakhir">
		</div>
		<div class="mb-3">
			<label for="ttp" class="form-label">T.T.P</label>
			<input type="date" class="form-control border-dark" id="ttp" name="ttp">
		</div>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Dysmenorrhea</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="dysmenorrhea" id="dysmenorrhea_ada" value="ada">
				<label class="form-check-label" for="dysmenorrhea_ada">Ada</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="dysmenorrhea" id="dysmenorrhea_tidak" value="tidak">
				<label class="form-check-label" for="dysmenorrhea_tidak">Tidak</label>
			</div>
		</div>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Hamil Kembar</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="hamil_kembar" id="hamil_kembar_ada" value="ada">
				<label class="form-check-label" for="hamil_kembar_ada">Ada</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="hamil_kembar" id="hamil_kembar_tidak" value="tidak">
				<label class="form-check-label" for="hamil_kembar_tidak">Tidak</label>
			</div>
		</div>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Fluor Albus</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="fluor_albus" id="fluor_albus_ada" value="ada">
				<label class="form-check-label" for="fluor_albus_ada">Ada</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="fluor_albus" id="fluor_albus_tidak" value="tidak">
				<label class="form-check-label" for="fluor_albus_tidak">Tidak</label>
			</div>
		</div>

		<h2 class="mt-4">Pendarahan Postparfum</h2>
		<div class="mb-3">
			<label for="anak_ke" class="form-label">Anak ke</label>
			<input type="text" class="form-control border-dark" id="anak_ke" name="anak_ke">
		</div>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Retentio Placenta</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="retentio_placenta" id="retentio_placenta_pernah"
					value="pernah">
				<label class="form-check-label" for="retentio_placenta_pernah">Pernah</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="retentio_placenta" id="retentio_placenta_tidak"
					value="tidak">
				<label class="form-check-label" for="retentio_placenta_tidak">Tidak</label>
			</div>
		</div>
		<div class="mb-3">
			<label for="kala" class="form-label">Kala</label>
			<input type="text" class="form-control border-dark" id="kala" name="kala">
		</div>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Placenta Rest</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="placenta_rest" id="placenta_rest_pernah" value="pernah">
				<label class="form-check-label" for="placenta_rest_pernah">Pernah</label>
			</div>
			<div class="form-check ">
				<input class="custom-checkbox-danger" type="radio" name="placenta_rest" id="placenta_rest_tidak" value="tidak">
				<label class="form-check-label" for="placenta_rest_tidak">Tidak</label>
			</div>
		</div>
		<div class="mb-3">
			<label for="banyaknya_postparfum" class="form-label">Banyaknya</label>
			<input type="text" class="form-control border-dark" id="banyaknya_postparfum" name="banyaknya_postparfum">
		</div>
		<div class="mb-3">
			<label for="atonia_uteri" class="form-label">Atonia Uteri</label>
			<input type="text" class="form-control border-dark" id="atonia_uteri" name="atonia_uteri">
		</div>

		<h2 class="mt-4">Riwayat Perkawinan</h2>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Kawin</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="kawin" id="kawin_ya" value="ya">
				<label class="form-check-label" for="kawin_ya">Ya</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="kawin" id="kawin_tidak" value="tidak">
				<label class="form-check-label" for="kawin_tidak">Tidak</label>
			</div>
		</div>
		<div class="mb-3">
			<label for="umur_kawin_i" class="form-label">Umur Kawin I</label>
			<input type="text" class="form-control border-dark" id="umur_kawin_i" name="umur_kawin_i">
		</div>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Berobat Mandul</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="berobat_mandul" id="berobat_mandul_pernah"
					value="pernah">
				<label class="form-check-label" for="berobat_mandul_pernah">Pernah</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="berobat_mandul" id="berobat_mandul_tidak" value="tidak">
				<label class="form-check-label" for="berobat_mandul_tidak">Tidak</label>
			</div>
		</div>
		<div class="mb-3">
			<label for="umur_kawin_ii" class="form-label">Umur Kawin II</label>
			<input type="text" class="form-control border-dark" id="umur_kawin_ii" name="umur_kawin_ii">
		</div>
		<div class="mb-3 d-flex align-items-center">
			<label class="form-label">Family Planning</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="family_planning" id="family_planning_pernah"
					value="pernah">
				<label class="form-check-label" for="family_planning_pernah">Pernah</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-danger" type="radio" name="family_planning" id="family_planning_tidak"
					value="tidak">
				<label class="form-check-label" for="family_planning_tidak">Tidak</label>
			</div>
		</div>
		<div class="mb-3">
			<label for="umur_kawin_iii" class="form-label">Umur Kawin III</label>
			<input type="text" class="form-control border-dark" id="umur_kawin_iii" name="umur_kawin_iii">
		</div>

	</div>