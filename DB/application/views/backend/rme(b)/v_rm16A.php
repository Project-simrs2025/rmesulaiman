<table class="table table-borderless border-dark">

    <tr>
        <td colspan="2" class="text-center">
            <em>(Dilengkapi 24 jam pertama pasien masuk rawat inap)</em>
        </td>
    </tr>
    <tr>
        <td>
            <div class="d-flex gap-2 align-items-center">
                <label for="">Tanggal</label>
                <input type="date" name="tanggal_1" class="form-control border-dark" />
            </div>
        </td>
        <td>
            <div class="d-flex gap-2 align-items-center">
                <label for="">Jam</label>
                <input type="time" name="jam" class="form-control border-dark w-25" /> WIB
            </div>
        </td>
    </tr>
    <tr>
        <td>Agama Orang Tua:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="agama"
                    id="agama-islam"
                    value="islam" />
                <label class="form-check-label" for="agama-islam">Islam</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="agama"
                    id="agama-kristen"
                    value="kristen" />
                <label class="form-check-label" for="agama-kristen">Kristen</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="agama"
                    id="agama-katolik"
                    value="katolik" />
                <label class="form-check-label" for="agama-katolik">Katolik</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="agama"
                    id="agama-hindu"
                    value="hindu" />
                <label class="form-check-label" for="agama-hindu">Hindu</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="agama"
                    id="agama-budha"
                    value="budha" />
                <label class="form-check-label" for="agama-budha">Budha</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="agama"
                    id="agama-lain"
                    value="lain" />
                <label class="form-check-label" for="agama-lain">Lainnya</label>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>IDENTITAS BAYI </strong><em>(Di isi oleh perawat)</em>
        </td>
    </tr>
    <tr>
        <td>Tanggal lahir / Umur:</td>
        <td class="d-flex" style="gap: 30px;">
            <input
                type="date"
                name="tanggal-lahir"
                class="form-control border-dark"
                id="tanggal-lahir" />
            <div class="d-flex align-items-center gap-2">
                <div>
                    <input type="text" name="_umur_" class="form-control border-dark" id="umur_" />
                </div>
                <div> Tahun</div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Nama Ayah:</td>
        <td>
            <input
                type="text"
                name="nama-ayah"
                class="form-control border-dark"
                id="nama-ayah" />
        </td>
    </tr>
    <tr>
        <td>Nama Ibu:</td>
        <td>
            <input
                type="text"
                name="nama-ibu"
                class="form-control border-dark"
                id="nama-ibu" />
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>DATA BAYI</strong> <em>(Di isi oleh perawat)</em>
        </td>
    </tr>
    <tr>
        <td>Cara Persalinan:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="persalinan"
                    id="persalinan-spontan"
                    value="spontan" />
                <label class="form-check-label" for="persalinan-spontan">Spontan</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="persalinan"
                    id="persalinan-vacum"
                    value="vacum" />
                <label class="form-check-label" for="persalinan-vacum">Vacum</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="persalinan"
                    id="persalinan-forcep"
                    value="forcep" />
                <label class="form-check-label" for="persalinan-forcep">Forcep</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="persalinan"
                    id="persalinan-sectio"
                    value="sectio" />
                <label class="form-check-label" for="persalinan-sectio">Sectio</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>Lahir di:</td>
        <td class="d-flex flex-column">
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="lahir-di"
                    id="lahir-di-rsu"
                    value="RSU Sultan Sulaiman" />
                <label class="form-check-label" for="lahir-di-rsu"><?= $site_title; ?></label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    type="radio"
                    name="lahir-di"
                    class="custom-checkbox-success"
                    id="lahir-di-rumah-sakit"
                    value="Rumah Sakit Lainnya" />
                <label class="form-check-label" for="lahir-di-rumah-sakit">Rumah Sakit Lainnya</label>
            </div>
            <input
                type="text"
                name="lahir-di-lainnya"
                class="form-control border-dark d-inline"
                id="lahir-di-lainnya"
                readonly />
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>RIWAYAT KESEHATAN</strong></td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>KELUHAN BAYI</strong> <em>(Di isi oleh dokter)</em>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <textarea
                name="keluhan-bayi"
                class="form-control border-dark"
                id="keluhan-bayi"
                rows="3"></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>RIWAYAT ANTENATAL</strong> <em>(Di isi oleh dokter)</em>
        </td>
    </tr>
    <tr>
        <td>Anak ke:</td>
        <td><input type="text" name="anak-ke" class="form-control border-dark" /></td>
    </tr>
    <tr>
        <td>Pemeriksaan Kehamilan ANC:</td>
        <td>
            <div class="d-flex gap-2 align-items-center">
                <div class="form-check form-check-inline">
                    <input
                        class="custom-checkbox-danger"
                        type="radio"
                        name="pemeriksaan-anc"
                        id="pemeriksaan-anc-tidak"
                        value="Tidak" />
                    <label class="form-check-label" for="pemeriksaan-anc-tidak">Tidak</label>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <div>
                        <input
                            class="custom-checkbox-success"
                            type="radio"
                            name="pemeriksaan-anc"
                            id="pemeriksaan-anc-ya"
                            value="Ya" />
                    </div>
                    <label class="form-check-label" for="pemeriksaan-anc-ya">Ya</label>
                    <input
                        type="text"
                        name="anc-kali"
                        class="form-control border-dark"
                        id="anc-kali"
                        readonly /> kali
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Tempat pemeriksaan ANC dr.:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="anc-tempat"
                    id="anc-tempat-umum"
                    value="Umum" />
                <label class="form-check-label" for="anc-tempat-umum">Umum</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="anc-tempat"
                    id="anc-tempat-spesialis"
                    value="spesialis" />
                <label class="form-check-label" for="anc-tempat-spesialis">Spesialis</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="anc-tempat"
                    id="anc-tempat-bidan"
                    value="Bidan" />
                <label class="form-check-label" for="anc-tempat-bidan">Bidan</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="anc-tempat"
                    id="anc-tempat-lainnya"
                    value="Lainnya" />
                <label class="form-check-label" for="anc-tempat-lainnya">Lainnya</label>
                <input
                    type="text"
                    name="anc-tempat-lainnya"
                    class="form-control border-dark" />
            </div>
        </td>
    </tr>
    <tr>
        <td>USG:</td>
        <td><input type="text" name="usg" class="form-control border-dark" /></td>
    </tr>
    <tr>
        <td>HPHT:</td>
        <td>
            <input
                type="text"
                name="hpht-day"
                class="form-control border-dark d-inline-flex"
                style="width: 30%" />
            /
            <input
                type="text"
                name="hpht-month"
                class="form-control border-dark d-inline-flex"
                style="width: 30%" />
            /
            <input
                type="text"
                name="hpht-year"
                class="form-control border-dark d-inline-flex"
                style="width: 30%" />
        </td>
    </tr>
    <tr>
        <td>Umur Kehamilan (Masa gestasi):</td>
        <td>
            <input type="text" name="umur-kehamilan" class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td>Riwayat Penyakit Ibu:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-diabetes"
                    id="penyakit-diabetes"
                    value="Diabetes Melitus" />
                <label class="form-check-label" for="penyakit-diabetes">Diabetes Melitus</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-jantung"
                    id="penyakit-jantung"
                    value="Jantung" />
                <label class="form-check-label" for="penyakit-jantung">Jantung</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-tbc"
                    id="penyakit-tbc"
                    value="TBC Paru" />
                <label class="form-check-label" for="penyakit-tbc">TBC Paru</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-hepatitis"
                    id="penyakit-hepatitis"
                    value="Hepatitis B" />
                <label class="form-check-label" for="penyakit-hepatitis">Hepatitis B</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-asma"
                    id="penyakit-asma"
                    value="Asma" />
                <label class="form-check-label" for="penyakit-asma">Asma</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>Penyakit Menular Seksual:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-menular"
                    id="penyakit-menular-spinal"
                    value="Spinal" />
                <label class="form-check-label" for="penyakit-menular-spinal">Spinal</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-menular"
                    id="penyakit-menular-herpes"
                    value="Herpes" />
                <label class="form-check-label" for="penyakit-menular-herpes">Herpes</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="penyakit-menular"
                    id="penyakit-menular-kutil"
                    value="Kutil" />
                <label class="form-check-label" for="penyakit-menular-kutil">Kutil</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>Riwayat Pengobatan Ibu:</td>
        <td>
            <input type="text" name="pengobatan-ibu" class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>RIWAYAT INTRANATAL</strong> <em>(Di isi oleh dokter)</em>
        </td>
    </tr>
    <tr>
        <td>1. Pendarahan:</td>
        <td colspan="2">
            <div class="d-flex gap-2 align-items-center">
                <div class="form-check form-check-inline">
                    <input
                        class="custom-checkbox-danger"
                        type="radio"
                        name="riwayat-intranatal-pendarahan"
                        id="riwayat-intranatal-pendarahan-tidak"
                        value="Tidak" />
                    <label
                        class="form-check-label"
                        for="riwayat-intranatal-pendarahan-tidak">Tidak</label>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <div class="form-check form-check-inline">
                        <div class="d-flex gap-2 align-items-center">
                            <div>
                                <input
                                    class="custom-checkbox-success"
                                    type="radio"
                                    name="riwayat-intranatal-pendarahan"
                                    id="riwayat-intranatal-pendarahan-ya"
                                    value="Ya" />
                            </div>
                            <label
                                class="form-check-label"
                                for="riwayat-intranatal-pendarahan-ya">Ya</label>
                            <input type="text" name="pendarahan" class="form-control border-dark" /> cc

                        </div>

                    </div>

                </div>

            </div>
        </td>
    </tr>
    <tr>
        <td>2. Ketuban Pecah:</td>
        <td colspan="2">
            <div class="d-flex align-items-center gap-2">
                <div class="form-check form-check-inline">
                    <input
                        class="custom-checkbox-danger"
                        type="radio"
                        name="riwayat-intranatal-ketuban-pecah"
                        id="riwayat-intranatal-ketuban-pecah-tidak"
                        value="Tidak" />
                    <label
                        class="form-check-label"
                        for="riwayat-intranatal-ketuban-pecah-tidak">Tidak</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="form-check form-check-inline">
                        <div class="d-flex align-items-center gap-2">
                            <div>
                                <input
                                    class="custom-checkbox-success"
                                    type="radio"
                                    name="riwayat-intranatal-ketuban-pecah"
                                    id="riwayat-intranatal-ketuban-pecah-ya"
                                    value="Ya" />
                            </div>

                            <label
                                class="form-check-label"
                                for="riwayat-intranatal-ketuban-pecah-ya">Ya</label>
                            <input
                                type="text"
                                name="ketuban-pecah-jam"
                                class="form-control border-dark" />
                            <div class="d-flex align-items-center gap-2">
                                <div>jam</div>
                                <input
                                    type="text"
                                    name="ketuban-pecah-waktu"
                                    class="form-control border-dark" />
                                <div>wib</div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>3. Gawat Janin:</td>
        <td colspan="2">
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="riwayat-intranatal-gawat-janin"
                    id="riwayat-intranatal-gawat-janin-tidak"
                    value="Tidak" />
                <label
                    class="form-check-label"
                    for="riwayat-intranatal-gawat-janin-tidak">Tidak</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="riwayat-intranatal-gawat-janin"
                    id="riwayat-intranatal-gawat-janin-ya"
                    value="Ya" />
                <label
                    class="form-check-label"
                    for="riwayat-intranatal-gawat-janin-ya">Ya</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>4. Demam:</td>
        <td colspan="2">
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="riwayat-intranatal-demam"
                    id="riwayat-intranatal-demam-tidak"
                    value="Tidak" />
                <label
                    class="form-check-label"
                    for="riwayat-intranatal-demam-tidak">Tidak</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="riwayat-intranatal-demam"
                    id="riwayat-intranatal-demam-ya"
                    value="Ya" />
                <label
                    class="form-check-label"
                    for="riwayat-intranatal-demam-ya">Ya</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>5. Riwayat Terapi Dexametason:</td>
        <td colspan="2">
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="riwayat-intranatal-terapi-dexametason"
                    id="riwayat-intranatal-terapi-dexametason-tidak"
                    value="Tidak" />
                <label
                    class="form-check-label"
                    for="riwayat-intranatal-terapi-dexametason-tidak">Tidak</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="riwayat-intranatal-terapi-dexametason"
                    id="riwayat-intranatal-terapi-dexametason-ya"
                    value="Ya" />
                <label
                    class="form-check-label"
                    for="riwayat-intranatal-terapi-dexametason-ya">Ya</label>
            </div>
        </td>
    </tr>

    <tr>
        <td>6. Riwayat Terapi Lainnya:</td>
        <td colspan="2">
            <div class="form-check form-check-inline w-100">
                <input type="text" class="form-control border-dark" name="riwayat_terapi_lainnya">
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <table class="table table-bordered">
                <tr>
                    <th colspan="2">
                        FAKTOR RESIKO INFEKSI (di isi Oleh dokter)
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Mayor:</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="demam-intra-partum"
                                id="demam-intra-partum" />
                            <label class="form-check-label" for="demam-intra-partum">Ibu demam Intra partum (T > 38° C)</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="kpd-lebih-18-jam"
                                id="kpd-lebih-18-jam" />
                            <label class="form-check-label" for="kpd-lebih-18-jam">KPD > 18 JAM</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="konoamnionitis"
                                id="konoamnionitis" />
                            <label class="form-check-label" for="konoamnionitis">Konoamnionitis</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="fetal-distress"
                                id="fetal-distress" />
                            <label class="form-check-label" for="fetal-distress">Fetal Distress DJJ >
                                <input type="text" name="djj" class="form-control border-dark w-25 d-inline-block" />
                                Kali / menit</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="ketuban-berbau"
                                id="ketuban-berbau" />
                            <label class="form-check-label" for="ketuban-berbau">Ketuban berbau</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="keputihan-tidak-diobati"
                                id="keputihan-tidak-diobati" />
                            <label
                                class="form-check-label"
                                for="keputihan-tidak-diobati">Keputihan tidak diobati</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="isk"
                                id="isk" />
                            <label class="form-check-label" for="isk">ISK / Tersangka ISK</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="demam-lebih-38"
                                id="demam-lebih-38" />
                            <label class="form-check-label" for="demam-lebih-38">Ibu demam >
                                <input type="text" name="demam" class="form-control border-dark w-25 d-inline-block" />
                                °C</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Minor:</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="kpd-lebih-12-jam"
                                id="kpd-lebih-12-jam" />
                            <label class="form-check-label" for="kpd-lebih-12-jam">KPD > 12 JAM</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="apgar-score-1-7"
                                id="apgar-score-1-7" />
                            <label class="form-check-label" for="apgar-score-1-7">Apgar Score 1 - 7</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="bb-lbsr"
                                id="bb-lbsr" />
                            <label class="form-check-label" for="bb-lbsr">BBLSR (<input
                                    type="text"
                                    name="bb-lbsr-value"
                                    class="form-control border-dark" />
                                GRAM)</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="gestasi-kurang-37-minggu"
                                id="gestasi-kurang-37-minggu" />
                            <label
                                class="form-check-label"
                                for="gestasi-kurang-37-minggu">Gestasi
                                <input
                                    type="text"
                                    name="gestasi-value"
                                    class="form-control border-dark" />
                                minggu</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="gimeli"
                                id="gimeli" />
                            <label class="form-check-label" for="gimeli">Gimeli</label>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <table class="table table-bordered">
                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">ALERGI / REAKSI (Di isi Oleh Perawat)</p>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="radio"
                                name="allergy"
                                id="noAllergy"
                                value="Tidak Alergi" />
                            <label class="form-check-label" for="noAllergy">Tidak Alergi</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="radio"
                                name="allergy"
                                id="unknownAllergy"
                                value="Tidak diketahui" />
                            <label class="form-check-label" for="unknownAllergy">Tidak diketahui</label>
                        </div>
                        <input
                            class="custom-checkbox-success"
                            type="radio"
                            name="allergy"
                            id="unknownAllergy"
                            value="Ada" />
                        <label>Ada, yaitu:</label>
                        <input
                            type="text"
                            name="allergy_detail"
                            class="form-control border-dark" />
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">HIDUNG</p>
                        <div class="form-check">

                            <div class="d-flex gap-2 align-items-center">
                                <label class="form-check-label me-4" for="nasalFlare">Nafas Cuping Hidung</label>
                                <input
                                    class="custom-checkbox-success"
                                    type="checkbox"
                                    name="nafas_cuping_ya"
                                    id="nafas_cuping_ya" />
                                <label for="nafas_cuping_ya">Ya</label>
                                <input
                                    class="custom-checkbox-danger"
                                    type="checkbox"
                                    name="nafas_cuping_tidak"
                                    id="nafas_cuping_tidak" />
                                <label for="nafas_cuping_tidak">Tidak</label>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">MULUT</p>
                        <div class="form-check">
                            <div class="d-flex gap-2 align-items-center">
                                <label class="form-check-label me-4" for="lida_cyanosis">Bibir / lidah cyanosis</label>
                                <input
                                    class="custom-checkbox-success"
                                    type="checkbox"
                                    name="lidah_cyanosis_ya"
                                    id="lidah_cyanosis_ya" />
                                <label for="lidah_cyanosis_ya">Ya</label>
                                <input
                                    class="custom-checkbox-danger"
                                    type="checkbox"
                                    name="lidah_cyanosis_tidak"
                                    id="lidah_cyanosis_tidak" />
                                <label for="lidah_cyanosis_tidak">Tidak</label>
                            </div>
                        </div>
                        <div class="form-check">
                            <label>Lain-lain:</label>
                            <input
                                type="text"
                                name="mouth_other"
                                class="form-control border-dark" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">LEHER</p>
                        <div class="form-check">
                            <input
                                type="text"
                                name="Leher_other"
                                class="form-control border-dark" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">THORAX</p>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="symmetrical"
                                id="symmetrical" />
                            <label class="form-check-label" for="symmetrical">Simetris</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="asymmetrical"
                                id="asymmetrical" />
                            <label class="form-check-label" for="asymmetrical">Asimetris</label>
                        </div>
                        <div class="form-check d-flex gap-2 align-items-center my-3">
                            <label class="col-2">Jantung HR:</label>
                            <input type="text" name="heart_rate" class="form-control border-dark w-75" />
                            /menit
                        </div>
                        <div class="form-check d-flex gap-2 align-items-center my-3">
                            <label class="col-2">Paru:</label>
                            <input type="text" name="paru_rate" class="form-control border-dark w-75" />
                            x/menit
                        </div>
                        <div class="form-check d-flex gap-2 align-items-center my-3">
                            <label class="col-2">Rektraksi:</label>
                            <input type="text" name="rektraksi_rate" class="form-control border-dark w-75" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="fw-bold">ABDOMEN</p>
                        <div class="form-check d-flex gap-2 align-items-center mt-3">
                            <label for="distensi" class="col-2">Distensi</label>
                            <input type="text" class="form-control border-dark " name="distensi" id="distensi">
                        </div>
                        <div class="form-check d-flex gap-2 align-items-center mt-3">
                            <label for="Bising_Usus" class="col-2">Bising Usus</label>
                            <input type="text" class="form-control border-dark " name="Bising_Usus" id="Bising_Usus">
                        </div>
                        <div class="form-check d-flex gap-2 align-items-center mt-3">
                            <label for="Hepar" class="col-2">Hepar</label>
                            <input type="text" class="form-control border-dark " name="Hepar" id="Hepar">
                        </div>
                        <div class="form-check d-flex gap-2 align-items-center mt-3">
                            <label for="tali_pusat" class="col-2">Tali Pusat</label>
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="tali_pusat_segar"
                                id="tali_pusat_segar" />
                            <label for="tali_segar">segar</label>
                            <input
                                class="custom-checkbox-danger"
                                type="checkbox"
                                name="tali_pusat_layu"
                                id="tali_pusat_layu" />
                            <label for="tali_layu">layu</label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">KULIT</p>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="pale"
                                id="pale" />
                            <label class="form-check-label" for="pale">Pucat</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="jaundice"
                                id="jaundice" />
                            <label class="form-check-label" for="jaundice">Icterus</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="lain_kulit"
                                id="lain_kulit" />
                            <label class="form-check-label" for="lain_kulit">lain-lain</label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">KUKU</p>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="cyanosisNail"
                                id="cyanosisNail" />
                            <label class="form-check-label" for="cyanosisNail">Sianosis</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="panjang"
                                id="panjang" />
                            <label class="form-check-label" for="panjang">panjang</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="meconium_stain"
                                id="meconium_stain" />
                            <label class="form-check-label" for="meconium_stain">Meconium stain</label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">REFLEKS</p>
                        <div class="form-check">

                            <div class="d-flex gap-2 align-items-center mt-3">
                                <label class="form-check-label me-5 col-2" for="moro">Refleks Moro</label>

                                <input
                                    class="custom-checkbox-success"
                                    type="checkbox"
                                    name="moro_ya"
                                    id="moro_ya" />
                                <label for="moro_ya" class="col-2">Ya</label>
                                <input
                                    class="custom-checkbox-danger"
                                    type="checkbox"
                                    name="moro_tidak"
                                    id="moro_tidak" />
                                <label for="moro_tidak">Tidak</label>
                            </div>

                        </div>
                        <div class="form-check">

                            <div class="d-flex gap-2 align-items-center mt-3">
                                <label class="form-check-label me-5 col-2" for="rooting">Refleks Rooting</label>

                                <input
                                    class="custom-checkbox-success"
                                    type="checkbox"
                                    name="rooting_ya"
                                    id="rooting_ya" />
                                <label for="rooting_ya" class="col-2">Ya</label>
                                <input
                                    class="custom-checkbox-danger"
                                    type="checkbox"
                                    name="rooting_tidak"
                                    id="rooting_tidak" />
                                <label for="rooting_tidak">Tidak</label>
                            </div>

                        </div>

                        <div class="form-check">

                            <div class="d-flex gap-2 align-items-center mt-3">
                                <label class="form-check-label me-5 col-2" for="sucking">Refleks sucking</label>

                                <input
                                    class="custom-checkbox-success"
                                    type="checkbox"
                                    name="sucking_ya"
                                    id="sucking_ya" />
                                <label for="sucking_ya" class="col-2">Ya</label>
                                <input
                                    class="custom-checkbox-danger"
                                    type="checkbox"
                                    name="sucking_tidak"
                                    id="sucking_tidak" />
                                <label for="sucking_tidak">Tidak</label>
                            </div>

                        </div>

                        <div class="form-check">

                            <div class="d-flex gap-2 align-items-center mt-3">
                                <label class="form-check-label me-5 col-2" for="tonick_neck">Refleks tonick neck</label>

                                <input
                                    class="custom-checkbox-success"
                                    type="checkbox"
                                    name="tonick_neck_ya"
                                    id="tonick_neck_ya" />
                                <label for="tonick_neck_ya" class="col-2">Ya</label>
                                <input
                                    class="custom-checkbox-danger"
                                    type="checkbox"
                                    name="tonick_neck_tidak"
                                    id="tonick_neck_tidak" />
                                <label for="tonick_neck_tidak">Tidak</label>
                            </div>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="fw-bold">
                        <p class="fw-bold">KELAINAN BAWAAN</p>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex flex-row gap-2 align-items-center">
                                <label>1.</label>
                                <input type="text" name="defect1" class="form-control border-dark w-25 d-inline-block" />
                            </div>
                            <div class="d-flex flex-row gap-2 align-items-center">
                                <label>2.</label>
                                <input type="text" name="defect2" class="form-control border-dark w-25 d-inline-block" />
                            </div>
                            <div class="d-flex flex-row gap-2 align-items-center">
                                <label>3.</label>
                                <input type="text" name="defect3" class="form-control border-dark w-25 d-inline-block" />
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <h2>Down Score (Di isi oleh dokter)</h2>

            <table class="table table-bordered border-dark">
                <tr>
                    <th>No.</th>
                    <th>Penilaian</th>
                    <th colspan="2">0</th>
                    <th colspan="2">1</th>
                    <th colspan="2">2</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Frekuensi Nafas</td>
                    <td>&lt; 60 x/menit</td>
                    <td><input type="text" name="frekuensi_input_1" id="frekuensi_input_60x_1" class="form-control border-dark w-75"></td>
                    <td>50 - 80 x/menit</td>
                    <td><input type="text" name="frekuensi_input_1" id="frekuensi_input_50x_1" class="form-control border-dark w-75"></td>
                    <td>&gt; 80 x/menit</td>
                    <td><input type="text" name="frekuensi_input_1" id="frekuensi_input_80x_1" class="form-control border-dark w-75"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Retraksi</td>
                    <td>Tidak Ada</td>
                    <td><input type="text" name="frekuensi_input_1" id="frekuensi_input_t_ada_1" class="form-control border-dark w-75"></td>
                    <td>Retraksi ringan</td>
                    <td><input type="text" name="frekuensi_input_1" id="frekuensi_input_retraksi_ringan_1" class="form-control border-dark w-75"></td>
                    <td>Retraksi berat</td>
                    <td><input type="text" name="frekuensi_input_1" id="frekuensi_input_retraksi_berat_1" class="form-control border-dark w-75"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sianosis</td>
                    <td>Tidak ada</td>
                    <td><input type="text" name="frekuensi_input_1" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                    <td>Hilang dengan O2</td>
                    <td><input type="text" name="hilang_dengan_02_input" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                    <td>Menetap dengan O2</td>
                    <td><input type="text" name="menetap_dengan_o2_input" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Air entry (udara masuk)</td>
                    <td>Ada</td>
                    <td><input type="text" name="ada_input" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                    <td>Menurun</td>
                    <td><input type="text" name="menurun_input" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                    <td>Tidak terdengar</td>
                    <td><input type="text" name="tidak_terdengar_input" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Merintih</td>
                    <td>Tidak ada</td>
                    <td><input type="text" name="tidak_ada_02_input" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                    <td>Terdengar dengan stetoskop</td>
                    <td><input type="text" name="terdengar_stetos" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                    <td>Terdengar tanpa alat bantu</td>
                    <td><input type="text" name="tanpa_alat" id="tidak_ada_2" class="form-control border-dark w-75"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="total_1" class="form-control border-dark"></td>
                    <td></td>
                    <td><input type="text" name="total_2" class="form-control border-dark"></td>
                    <td></td>
                    <td><input type="text" name="total_3" class="form-control border-dark"></td>
                </tr>
            </table>

            <p><strong>Keterangan:</strong></p>
            <ul>
                <li>Score &lt; 3 = Tidak ada gawat nafas</li>
                <li>Score 3 - 6 = Gawat nafas</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <img class="img-responsive center-block w-100" src="<?= base_url('assets\images\rme\rm25\rm25_Neuromuscular.png') ?>" />
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <h2>Physical Maturity</h2>

            <table class="table table-bordered border-dark">
                <tr>
                    <td>Skin</td>
                    <td>Sticky, friable, transparent</td>
                    <td>Gelatinous, red, translucent</td>
                    <td>Smooth, pink, visible veins</td>
                    <td>Superficial peeling and/or rash; few veins</td>
                    <td>Cracking, pale areas; rare veins</td>
                    <td>Parchment, deep cracking, no vessels</td>
                    <td>Leathery, cracked, wrinkled</td>
                </tr>
                <tr>
                    <td>Lanugo</td>
                    <td>None</td>
                    <td>Sparse</td>
                    <td>Abundant</td>
                    <td>Thinning</td>
                    <td>Bald areas</td>
                    <td>Mostly bald</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Plantar surface</td>
                    <td>Heel-toe < 40 mm, no crease</td>
                    <td>> 50 mm no crease</td>
                    <td>faint red marks</td>
                    <td>Anterior transverse crease only</td>
                    <td>Creases anterior 2/3</td>
                    <td>Creases over entire sole</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Breast</td>
                    <td>Imperceptible</td>
                    <td>Barely perceptible</td>
                    <td>Flat areola, no bud</td>
                    <td>Slightly raised areola, 1–2 mm bud</td>
                    <td>Raised areola, 3–4 mm bud</td>
                    <td>Full areola, 5–10 mm bud</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Eye/Ear</td>
                    <td>Lids fused loosely; loosley: -1 tightly: -2</td>
                    <td>Lids open pinna flat stays folded</td>
                    <td>Slightly curved pinna; soft; slow recoil</td>
                    <td>Well curved pinna; soft but ready recoil</td>
                    <td>Formed and firm; instant recoil</td>
                    <td>Thick cartilage; stiff ear</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Genitals (Male)</td>
                    <td>Scrotum smooth</td>
                    <td>Few rugae</td>
                    <td>Few rugae; testes in upper scrotum</td>
                    <td>Rugae; testes descending</td>
                    <td>Testes down; good rugae</td>
                    <td>Testes pendulous, deep rugae</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>Genitals (Female)</td>
                    <td>Clitoris prominent, labia flat</td>
                    <td>Clitoris prominent, small labia minora</td>
                    <td>Clitoris prominent, enlarging minora</td>
                    <td>Majora and minora equally prominent</td>
                    <td>Majora large, minora small</td>
                    <td>Majora cover clitoris and minora</td>
                    <td>—</td>
                </tr>
            </table>

            <table class="table table-bordered border-dark">
                <tr>
                    <th colspan="14">Maturity Rating</th>
                </tr>
                <tr>
                    <th>Score</th>
                    <td>-10</td>
                    <td>-5</td>
                    <td>0</td>
                    <td>5</td>
                    <td>10</td>
                    <td>15</td>
                    <td>20</td>
                    <td>25</td>
                    <td>30</td>
                    <td>35</td>
                    <td>40</td>
                    <td>45</td>
                    <td>50</td>
                </tr>
                <tr>
                    <th>Weeks</th>
                    <td>20</td>
                    <td>22</td>
                    <td>24</td>
                    <td>28</td>
                    <td>28</td>
                    <td>30</td>
                    <td>32</td>
                    <td>34</td>
                    <td>36</td>
                    <td>38</td>
                    <td>40</td>
                    <td>42</td>
                    <td>44</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <h2>RIWAYAT SOSIAL (diisi Oleh Perawat)</h2>
            <p><strong>Hubungan orangtua dan bayi (tingkah laku)</strong></p>
            <ul>
                <li>Ibu: <input type="checkbox" class="custom-checkbox-success" name="ibu-menyentuh"> menyentuh <input type="checkbox" class="custom-checkbox-success" name="ibu-memeluk"> memeluk <input type="checkbox" class="custom-checkbox-success" name="ibu-berbicara"> berbicara <input type="checkbox" class="custom-checkbox-success" name="ibu-berkunjung"> berkunjung</li>
            </ul>

            <p><strong>Alergi</strong></p>
            <ul>
                <li>Alergi Obat: <input type="text" class="form-control border-dark" name="alergi-obat"> Reaksi: <input type="text" class="form-control border-dark" name="reaksi-obat"></li>
                <li>Alergi Makanan: <input type="text" class="form-control border-dark" name="alergi-makanan"> Reaksi: <input type="text" class="form-control border-dark" name="reaksi-makanan"></li>
                <li>Alergi Lainnya: <input type="text" class="form-control border-dark" name="alergi-lainnya"> Reaksi: <input type="text" class="form-control border-dark" name="reaksi-lainnya"></li>
            </ul>

            <h2>PENILAIAN NYERI (DIISI OLEH PERAWAT)</h2>

            <table class="table table-bordered border-dark">
                <tr>
                    <th>No.</th>
                    <th>Parameter</th>
                    <th>Respon Neonatus</th>
                    <th>Score</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="left">Ekspresi Wajah</td>
                    <td>Relaksasi</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Meringis</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="left">Tangisan</td>
                    <td>Tidak Menangis</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Meringis</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Menangis Kuat</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="left">Gerakan Lengan</td>
                    <td>Relaksasi</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Fleksi / Ekstensi</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="left">Gerakan Tungkai</td>
                    <td>Relaksasi</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Fleksi / Ekstensi</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="left">Status Tegangan</td>
                    <td>Relaksasi</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Rewel</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="left">Pola Nafas</td>
                    <td>Relaksasi</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Perubahan Pola Nafas</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td><input type="text" class="form-control border-dark" name="totalCol1"></td>
                    <td><input type="text" class="form-control border-dark" name="totalCol2"></td>
                </tr>
            </table>


            <p><strong>Keterangan:</strong></p>
            <ul>
                <li>Score ≤ 3 = Tidak Nyeri</li>
                <li>Score > 3 = Nyeri</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <h2>PENILAIAN APGAR SCORE</h2>

            <table class="table table-bordered border-dark">
                <tr>
                    <th>No.</th>
                    <th>Penilaian</th>
                    <th>0</th>
                    <th>1</th>
                    <th>2</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="left">Activity (Tonus Otot)</td>
                    <td>Tidak bergerak</td>
                    <td>Sedikit bergerak</td>
                    <td>Aktif</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="left">Pulse (Denyut Jantung)</td>
                    <td>Tidak berdenyut</td>
                    <td>&lt; 100 ×/menit</td>
                    <td>&gt; 100 ×/menit</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="left">Grimace (Refleks Rangsangan)</td>
                    <td>Tidak merespon rangsangan</td>
                    <td>Menangis atau menangis lemah saat dirangsang</td>
                    <td>Menangis / bersin saat dirangsang</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="left">Appearance (Warna Kulit)</td>
                    <td>Sianosis seluruh tubuh</td>
                    <td>Hanya kaki dan tangan sianosis</td>
                    <td>Kemerahan seluruh tubuh</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="left">Respiratory (Pernapasan)</td>
                    <td>Tidak menangis</td>
                    <td>Menangis lemah, erritik</td>
                    <td>Menangis kuat</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td><input type="number" class="form-control border-dark d-inline-block" name="total-apgar-0"></td>
                    <td><input type="number" class="form-control border-dark d-inline-block" name="total-apgar-1"></td>
                    <td><input type="number" class="form-control border-dark d-inline-block" name="total-apgar-2"></td>
                </tr>
            </table>


            <p><strong>Keterangan:</strong></p>
            <ul>
                <li>Score 0 – 3 = Asfiksia ringan</li>
                <li>Score 4 – 6 = Asfiksia sedang</li>
                <li>Score 7 – 10 = Normal</li>
            </ul>

            <p><strong>Catatan:</strong> Diisi oleh dokter/perawat/bidan</p>
            <p><textarea type="text" class="form-control border-dark" name="catatan-apgar"></textarea></p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>GENERAL</strong> <em>(diisi oleh dokter)</em>
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>1. KEPALA</strong></td>
    </tr>
    <tr>
        <td>a. Bentuk:</td>
        <td><input type="text" name="bentuk" class="form-control border-dark" /></td>
    </tr>
    <tr>
        <td>b. Caput Sucademun:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="caput-sucademun"
                    id="caput-sucademun-ya"
                    value="Ya" />
                <label class="form-check-label" for="caput-sucademun-ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="caput-sucademun"
                    id="caput-sucademun-tidak"
                    value="Tidak" />
                <label class="form-check-label" for="caput-sucademun-tidak">Tidak</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>c. Cephal Hematoma:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="cephal-hematoma"
                    id="cephal-hematoma-ya"
                    value="Ya" />
                <label class="form-check-label" for="cephal-hematoma-ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="cephal-hematoma"
                    id="cephal-hematoma-tidak"
                    value="Tidak" />
                <label class="form-check-label" for="cephal-hematoma-tidak">Tidak</label>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>2. MATA</strong></td>
    </tr>

    <tr>
        <td>Mekonium:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="mekonium"
                    id="mekonium-ya"
                    value="Ya" />
                <label class="form-check-label" for="mekonium-ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="mekonium"
                    id="mekonium-tidak"
                    value="Tidak" />
                <label class="form-check-label" for="mekonium-tidak">Tidak</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>Pucat:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="pucat"
                    id="pucat-ya"
                    value="Ya" />
                <label class="form-check-label" for="pucat-ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="pucat"
                    id="pucat-tidak"
                    value="Tidak" />
                <label class="form-check-label" for="pucat-tidak">Tidak</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>Ikterus:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="ikterus"
                    id="ikterus-ya"
                    value="Ya" />
                <label class="form-check-label" for="ikterus-ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="ikterus"
                    id="ikterus-tidak"
                    value="Tidak" />
                <label class="form-check-label" for="ikterus-tidak">Tidak</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>Refleks Cahaya:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="refleks-cahaya"
                    id="refleks-cahaya-ya"
                    value="Ya" />
                <label class="form-check-label" for="refleks-cahaya-ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="refleks-cahaya"
                    id="refleks-cahaya-tidak"
                    value="Tidak" />
                <label class="form-check-label" for="refleks-cahaya-tidak">Tidak</label>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>3. EXTERMITAS</strong></td>
    </tr>
    <tr>
        <td>Plantar Crease:</td>
        <td>
            <input type="text" name="plantar-crease" class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>DISCHARGE PLANNING</strong></td>
    </tr>
    <tr>
        <td>Perencanaan rawatan <em>(diisi oleh dokter)</em>:</td>
        <td>
            <input
                type="text"
                name="perencanaan-rawatan"
                class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td>Perencanaan rawatan lainnya:</td>
        <td>
            <input
                type="text"
                name="perencanaan-rawatan-lainnya"
                class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>4. GENITALIA EKSTERNA</strong></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="gender"
                    id="gender-laki-laki"
                    value="laki-laki" />
                <label class="form-check-label" for="gender-laki-laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="gender"
                    id="gender-perempuan"
                    value="perempuan" />
                <label class="form-check-label" for="gender-perempuan">Perempuan</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="gender"
                    id="gender-ambigu"
                    value="ambigu" />
                <label class="form-check-label" for="gender-ambigu">Ambigu</label>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>5. ANUS</strong></td>
    </tr>
    <tr>
        <td>Ada:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="ada-tidak-ada"
                    id="ada-tidak-ada-ada"
                    value="Ada" />
                <label class="form-check-label" for="ada-tidak-ada-ada">Ada</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="ada-tidak-ada"
                    id="ada-tidak-ada-tidak-ada"
                    value="Tidak Ada" />
                <label class="form-check-label" for="ada-tidak-ada-tidak-ada">Tidak Ada</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>Mekonium:</td>
        <td>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-success"
                    type="radio"
                    name="mekonium-anus"
                    id="mekonium-anus-ya"
                    value="Ya" />
                <label class="form-check-label" for="mekonium-anus-ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="custom-checkbox-danger"
                    type="radio"
                    name="mekonium-anus"
                    id="mekonium-anus-tidak"
                    value="Tidak" />
                <label class="form-check-label" for="mekonium-anus-tidak">Tidak</label>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>KONTROL / PEMERIKSAAN SELANJUTNYA</strong>
        </td>
    </tr>
    <tr>
        <td><?= $site_title; ?>, Poliklinik:</td>
        <td>
            <input type="text" name="kontrol-rsu" class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td>Rumah Sakit:</td>
        <td>
            <input
                type="text"
                name="kontrol-rumah-sakit-nama"
                class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td>PUSKESMAS:</td>
        <td>
            <input
                type="text"
                name="kontrol-puskesmas"
                class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td>Lainnya:</td>
        <td>
            <input
                type="text"
                name="kontrol-lainnya-nama"
                class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td>IMUNISASI:</td>
        <td>
            <input
                type="text"
                name="imunisasi-tanggal"
                class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td>ASI / NUTRISI:</td>
        <td>
            <input type="text" name="asi-nutrisi" class="form-control border-dark" />
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>PENGAWASAN / PERAWATAN SETELAH PULANG PASIEN </strong><em>(Diisi oleh perawat)</em>
        </td>
    </tr>
    <tr>
        <td>
            <input
                type="checkbox"
                name="perawatan-tali-pusat"
                class="custom-checkbox-success" /> Perawatan tali pusat:
        </td>
    </tr>
    <tr>
        <td>
            <input
                class="custom-checkbox-success"
                type="checkbox"
                name="memandikan-bayi" /> Memandikan bayi:
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <strong>SUPPORT SISTEM</strong> (dilakukan oleh):
        </td>
    </tr>
    <tr>
        <td>
            <input
                type="checkbox"
                name="orang-terdekat"
                class="custom-checkbox-success" /> Orang terdekat / keluarga:
        </td>
    </tr>
    <tr>
        <td>
            <input
                type="checkbox"
                name="pelayanan-kesehatan"
                class="custom-checkbox-success" /> Pelayanan Kesehatan:
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div class="d-flex justify-content-evenly">
                <div class="d-flex flex-column" style="gap: 20px; max-width: 400px;">
                    <label for="dokter-yang-mengkaji">Dokter yang mengkaji:</label>
                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
                        style="width: 75%;"></select>
                </div>
                <div class="d-flex flex-column" style="gap: 20px; max-width: 400px;">
                    <label for="perawat-bidan-yang-mengkaji">Perawat / Bidan yang mengkaji:</label>
                    <div class="d-flex flex-column align-items-center gap-2">
                        <img class="img-responsive center-block " style="width: 50%;" id="qr_perawat_1" />
                        <input type="text" name="nama_perawat_form_1" id="nama_perawat_form_1" class="form-control border-dark border-dark">
                        <input type="hidden" name="id_perawat_form_1" id="id_perawat_form_1">
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <div class="d-flex justify-content-center flex-column align-items-center" style="gap: 20px; max-width: 400px;">
                <label for="verifikasi-dpjp-keterangan">VERIFIKASI DPJP:</label>
                <img class="img-responsive center-block mt-2" id="qr_dokter_dpjp" style="width: 20%;" />
            </div>
            <input
                type="text"
                name="nama_dokter"
                class="form-control border-dark w-25"
                id="verifikasi-dpjp-keterangan" />
            </div>
        </td>
    </tr>
</table>



<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

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
        }, 500)
    }

    listDokterUmumAPI()

    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;


        $('#id_perawat_form_1').val($('#id_perawat_form_1').val() || id_perawat)
        $('#nama_perawat_form_1').val($('#nama_perawat_form_1').val() || nama_perawat)
        $('#nama_perawat_form_1').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form_1').val(), 'qr_perawat_1')


        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
    })

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

    const rsuRadio = document.getElementById('lahir-di-rsu');
    const rumahSakitRadio = document.getElementById('lahir-di-rumah-sakit');
    const lainnyaInput = document.getElementById('lahir-di-lainnya');

    // Function to toggle the input field's state
    function toggleLainnyaInputState() {
        if (rumahSakitRadio.checked) {
            lainnyaInput.readOnly = false; // Enable input
            lainnyaInput.focus(); // Focus the input field
        } else {
            lainnyaInput.readOnly = true; // Disable input
            lainnyaInput.value = ''; // Clear the value
        }
    }

    // Add event listeners to the radio buttons
    rsuRadio.addEventListener('change', toggleLainnyaInputState);
    rumahSakitRadio.addEventListener('change', toggleLainnyaInputState);

    // Initial state check (in case a radio button is already selected on page load)
    toggleLainnyaInputState();



    // Get the radio buttons and the input field
    const tidakRadio = document.getElementById('pemeriksaan-anc-tidak');
    const yaRadio = document.getElementById('pemeriksaan-anc-ya');
    const ancKaliInput = document.getElementById('anc-kali');

    // Function to toggle the input field's state
    function toggleAncInputState() {
        if (yaRadio.checked) {
            ancKaliInput.readOnly = false; // Enable input
            ancKaliInput.focus(); // Focus the input field
        } else {
            ancKaliInput.readOnly = true; // Disable input
            ancKaliInput.value = ''; // Clear the value
        }
    }

    // Add event listeners to the radio buttons
    tidakRadio.addEventListener('change', toggleAncInputState);
    yaRadio.addEventListener('change', toggleAncInputState);

    // Initial state check (in case a radio button is already selected on page load)
    toggleAncInputState();
</script>