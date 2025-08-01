<div class="row overflow-auto">
    <div class="col-12">
        <table class="table  border-collapse border-dark">
            <tr>
                <td>
                    <p>No. RM</p>
                </td>
                <td><input class="form-control border-dark" type="text" name="no_rm" /></td>
            </tr>
            <tr>
                <td>
                    <p>Tanggal Pengisian</p>
                </td>
                <td><input class="form-control border-dark" type="date" name="tanggal_pengisian" value="<?= date('Y-m-d') ?>" /></td>
            </tr>
            <tr>
                <td>
                    <p>Nama</p>
                </td>
                <td><input class="form-control border-dark" type="text" name="nama_pasien" /></td>
            </tr>
            <tr>
                <td>
                    <p>Tgl. Lahir / Umur</p>
                </td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="col-4">
                            <input class="form-control border-dark border-dark " type="text" name="tanggal_lahir" />
                        </div>
                        <span>/</span>
                        <div class="col-4">
                            <input type="text" class="form-control border-dark border-dark " name="umur">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control border-dark border-dark " name="jenkel">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Alamat</p>
                </td>
                <td><input class="form-control border-dark" type="text" name="alamat" /></td>
            </tr>
        </table>
        <p><em>Diisi oleh Dokter</em></p>
        <p><strong>KAJIAN SISTEM </strong></p>
        <table class="table  border-collapse border-dark">
            <tr>
                <td>
                    <p>Hilangnya gigi</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="hilangnya_gigi"
                            id="hilangnya_gigi_ya"
                            value="Ya" />
                        <label class="form-check-label" for="hilangnya_gigi_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="hilangnya_gigi"
                            id="hilangnya_gigi_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="hilangnya_gigi_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Muntah</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="muntah"
                            id="muntah_ya"
                            value="Ya" />
                        <label class="form-check-label" for="muntah_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="muntah"
                            id="muntah_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="muntah_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Masalah mobilisasi leher</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="mobilisasi_leher"
                            id="mobilisasi_leher_ya"
                            value="Ya" />
                        <label class="form-check-label" for="mobilisasi_leher_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="mobilisasi_leher"
                            id="mobilisasi_leher_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="mobilisasi_leher_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Pingsan</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="pingsan"
                            id="pingsan_ya"
                            value="Ya" />
                        <label class="form-check-label" for="pingsan_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="pingsan"
                            id="pingsan_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="pingsan_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Leher pendek</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="leher_pendek"
                            id="leher_pendek_ya"
                            value="Ya" />
                        <label class="form-check-label" for="leher_pendek_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="leher_pendek"
                            id="leher_pendek_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="leher_pendek_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Stroke</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="stroke"
                            id="stroke_ya"
                            value="Ya" />
                        <label class="form-check-label" for="stroke_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="stroke"
                            id="stroke_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="stroke_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Batuk</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="batuk"
                            id="batuk_ya"
                            value="Ya" />
                        <label class="form-check-label" for="batuk_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="batuk"
                            id="batuk_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="batuk_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Kejang</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="kejang"
                            id="kejang_ya"
                            value="Ya" />
                        <label class="form-check-label" for="kejang_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="kejang"
                            id="kejang_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="kejang_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Sesak napas</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="sesak_napas"
                            id="sesak_napas_ya"
                            value="Ya" />
                        <label class="form-check-label" for="sesak_napas_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="sesak_napas"
                            id="sesak_napas_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="sesak_napas_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Sedang hamil</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="hamil"
                            id="hamil_ya"
                            value="Ya" />
                        <label class="form-check-label" for="hamil_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="hamil"
                            id="hamil_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="hamil_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Baru saja menderita infeksi</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="infeksi"
                            id="infeksi_ya"
                            value="Ya" />
                        <label class="form-check-label" for="infeksi_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="infeksi"
                            id="infeksi_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="infeksi_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Kelainan tulang belakang</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="tulang_belakang"
                            id="tulang_belakang_ya"
                            value="Ya" />
                        <label class="form-check-label" for="tulang_belakang_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="tulang_belakang"
                            id="tulang_belakang_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="tulang_belakang_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Saluran napas atas</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="saluran_napas"
                            id="saluran_napas_ya"
                            value="Ya" />
                        <label class="form-check-label" for="saluran_napas_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="saluran_napas"
                            id="saluran_napas_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="saluran_napas_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Obesitas</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="obesitas"
                            id="obesitas_ya"
                            value="Ya" />
                        <label class="form-check-label" for="obesitas_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="obesitas"
                            id="obesitas_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="obesitas_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Sakit dada</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="sakit_dada"
                            id="sakit_dada_ya"
                            value="Ya" />
                        <label class="form-check-label" for="sakit_dada_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="sakit_dada"
                            id="sakit_dada_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="sakit_dada_tidak">Tidak</label>
                    </div>
                </td>
                <td>
                    <p>Denyut jantung tidak normal</p>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-success"
                            name="denyut_jantung"
                            id="denyut_jantung_ya"
                            value="Ya" />
                        <label class="form-check-label" for="denyut_jantung_ya">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio" class="custom-checkbox-danger"
                            name="denyut_jantung"
                            id="denyut_jantung_tidak"
                            value="Tidak" />
                        <label class="form-check-label" for="denyut_jantung_tidak">Tidak</label>
                    </div>
                </td>
            </tr>
        </table>
        <p>
            Keterangan:
            <input
                class="form-control border-dark"
                type="text"
                name="keterangan_kajian_sistem"
                style="width: 100%" />
        </p>
        <p><strong>PEMERIKSAAN FISIK</strong></p>
        <p>
            TD <input class="form-control border-dark" type="text" name="td" /> HR :
            <input class="form-control border-dark" type="text" name="hr" /> RR :
            <input class="form-control border-dark" type="text" name="rr" /> Suhu :
            <input class="form-control border-dark" type="text" name="suhu" /> Skala Nyeri :
            <input class="form-control border-dark" type="text" name="skala_nyeri" />
        </p>
        <p>
            Tinggi <input class="form-control border-dark" type="text" name="tinggi" /> Berat
            :
            <input class="form-control border-dark" type="text" name="berat" />
        </p>
        <p><strong>KEADAAN UMUM</strong></p>
        <p>
            Skor mallampati :
            <input class="form-control border-dark" type="text" name="skor_mallampati" />
        </p>
        <p>Jantung <input class="form-control border-dark" type="text" name="jantung" /></p>
        <p>
            Paru-paru <input class="form-control border-dark" type="text" name="paru_paru" />
        </p>
        <p>Abdomen <input class="form-control border-dark" type="text" name="abdomen" /></p>
        <p>
            Tulang belakang :
            <input class="form-control border-dark" type="text" name="tulangBelakang" />
        </p>
        <p>
            Ekstremitas :
            <input class="form-control border-dark" type="text" name="ekstremitas" />
        </p>
        <p>
            Neurologi (bila dapat diperiksa) :
            <input class="form-control border-dark" type="text" name="neurologi" />
        </p>
        <p>
            Keterangan :
            <input
                class="form-control border-dark"
                type="text"
                name="keterangan_keadaan_umum" />
        </p>
        <p><strong>LABORATORIUM</strong> (bila tersedia)</p>
        <table class="table  border-collapse border-dark">
            <tr>
                <td>
                    <p>Hb/Ht</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="hb_ht" /></p>
                </td>
                <td>
                    <p>Leukosit</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="leukosit" /></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>PT</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="pt" /></p>
                </td>
                <td>
                    <p>Trombosit</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="trombosit" /></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Glukosa darah</p>
                </td>
                <td>
                    <p>
                        <input class="form-control border-dark" type="text" name="glukosa_darah" />
                    </p>
                </td>

                <td>
                    <p>Rontgen dada</p>
                </td>
                <td>
                    <p>
                        <input class="form-control border-dark" type="text" name="rontgen_dada" />
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Tes Kehamilan</p>
                </td>
                <td>
                    <p>
                        <input class="form-control border-dark" type="text" name="tes_kehamilan" />
                    </p>
                </td>

                <td>
                    <p>EKG (40 Tahun keatas)</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="ekg" /></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Kalium</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="kalium" /></p>
                </td>

                <td>
                    <p>Na/Cl</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="na_cl" /></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Ureum</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="ureum" /></p>
                </td>

                <td>
                    <p>Kreatinin</p>
                </td>
                <td>
                    <p><input class="form-control border-dark" type="text" name="kreatinin" /></p>
                </td>
            </tr>
        </table>
        <p>
            Keterangan :
            <input
                class="form-control border-dark"
                type="text"
                name="keterangan_laboratorium"
                style="width: 100%" />
        </p>
        <div class="row">
            <div class="col-md-6">
                <p><strong>DIAGNOSIS (ICD X)</strong></p>
                <ol>
                    <li>
                        <input
                            class="form-control border-dark"
                            type="text"
                            name="icd_x[]"
                            style="width: 100%" />
                    </li>
                    <li>
                        <input
                            class="form-control border-dark"
                            type="text"
                            name="icd_x[]"
                            style="width: 100%" />
                    </li>
                </ol>
            </div>
            <div class="col-md-6">
                <p><strong>ASA CLASSIFICATION</strong></p>
                <ol>
                    <li>
                        <input
                            class="custom-checkbox-success"
                            type="checkbox"
                            name="diagnosis_asa_1" id="asa_1" />
                        <label for="asa_1">
                            ASA 1 Pasien normal yang sehat</label>
                    </li>
                    <li>
                        <input
                            class="custom-checkbox-success"
                            type="checkbox"
                            name="diagnosis_asa_2" id="asa_2" />
                        <label for="asa_2">
                            ASA 2 Pasien dengan penyakit sistemik ringan</label>
                    </li>
                    <li>
                        <input
                            class="custom-checkbox-success"
                            type="checkbox"
                            name="diagnosis_asa_3" id="asa_3" />
                        <label for="asa_3">ASA 3 Pasien dengan penyakit sistemik berat</label>

                    </li>
                    <li>
                        <div class="d-flex gap-2">
                            <input
                                class="custom-checkbox-success"
                                type="checkbox"
                                name="diagnosis_asa_4" id="asa_4" />
                            <label for="asa_4" class="col-11">ASA 4 Pasien dengan penyakit sistemik berat yang mengancam nyawa </label>
                        </div>

                    </li>
                </ol>
            </div>
        </div>
        <p><strong>PENYULIT ANASTESIA LAIN:</strong></p>
        <ol>
            <li>
                <input
                    class="form-control border-dark"
                    type="text"
                    name="penyulit_anastesia[]"
                    style="width: 100%" />
            </li>
            <li>
                <input
                    class="form-control border-dark"
                    type="text"
                    name="penyulit_anastesia[]"
                    style="width: 100%" />
            </li>
        </ol>
        <p><strong>CATATAN TINDAK LANJUT:</strong></p>
        <p>
            <textarea
                class="form-control border-dark"
                name="catatan_tindak_lanjut"
                style="width: 100%"></textarea>
        </p>
        <p><strong>PERENCANAAN ANASTESIA&amp; SEDASI</strong></p>
        <p><strong>Teknik Anastesia dan Sedasi:</strong></p>
        <ul>
            <li class="my-3">
                <input
                    class="custom-checkbox-success"
                    type="checkbox"
                    name="teknik_anastesia_sedasi_sedasi"
                    id="sedasiCheckbox" />
                <label for="sedasiCheckbox">Sedasi :</label>
                <input type="text" class="form-control border-dark" name="sedasi">
            </li>
            <li class="my-3">
                <input
                    class="custom-checkbox-success"
                    type="checkbox"
                    name="teknik_anastesia_sedasi_sedasi"
                    id="gaCheckbox"
                    onclick="toggleGaInput(true)" />
                <label for="gaCheckbox">GA</label>
                <input class="form-control border-dark" type="text" name="ga" id="gaInput" />
            </li>
            <li class="my-3">
                <input
                    class="custom-checkbox-success"
                    type="checkbox"
                    name="teknik_anastesia_sedasi_sedasi"
                    id="regionalCheckbox" />
                <label for="regionalCheckbox">Regional :</label>
                <div class="d-flex mt-2 mb-2" style="gap: 20px;">
                    <div class="">
                        <input type="radio" class="custom-checkbox-success"
                            name="regional"
                            id="regional_spinal"
                            value="Spinal" />
                        <label for="regional_spinal">Spinal</label>
                    </div>
                    <div class="">
                        <input type="radio" class="custom-checkbox-success"
                            name="regional"
                            id="regional_epidural"
                            value="Epidural" />
                        <label for="regional_epidural">Epidural</label>
                    </div>
                    <div class="">
                        <input type="radio" class="custom-checkbox-success"
                            name="regional"
                            id="regional_kaudal"
                            value="Kaudal" />
                        <label for="regional_kaudal">Kaudal</label>
                    </div>
                    <div class="">
                        <input type="radio" class="custom-checkbox-success"
                            name="regional"
                            id="regional_blok_perifer"
                            value="Blok Perifer" />
                        <label for="regional_blok_perifer">Blok Perifer</label>
                    </div>
                </div>
            </li>
            <li class="my-3">
                <input
                    class="custom-checkbox-success"
                    type="checkbox"
                    name="teknik_anastesia_sedasi_sedasi"
                    id="lainCheckbox"
                    onclick="toggleLainInput(true)" />
                <label for="lainCheckbox">Lain-lain :</label>
                <input class="form-control border-dark" type="text" name="teknik_anastesia_sedasi_sedasi_lain_lain" id="lainInput" />
            </li>
        </ul>

        <p><strong>Monitoring:</strong></p>
        <div class="ml-5">
            <div class="my-3">
                <input
                    class="custom-checkbox-success"
                    type="checkbox"
                    name="ekg_lead"
                    id="ekgCheckbox"
                    onclick="toggleEkgInput(this)" />
                <label for="ekgCheckbox">EKG Lead</label>
                <input class="form-control border-dark" type="text" name="ekg_lead_more" id="ekgInput" />
            </div>

            <div class="my-3">
                <input class="custom-checkbox-success" type="checkbox" name="spo2" id="spo2Checkbox" />
                <label for="spo2Checkbox">SpO<sub>2</sub></label>
            </div>

            <div class="my-3">
                <input class="custom-checkbox-success" type="checkbox" name="nibp" id="nibpCheckbox" />
                <label for="nibpCheckbox">NIBP</label>
            </div>

            <div class="my-3">
                <input class="custom-checkbox-success" type="checkbox" name="temp" id="tempCheckbox" />
                <label for="tempCheckbox">Temp</label>
            </div>

            <div class="my-3">
                <input class="custom-checkbox-success" type="checkbox" name="lain_lain_check" id="lainLainCheckbox" onclick="toggleLainInput(this)" />
                <label for="lainLainCheckbox">Lain-lain</label>
                <input class="form-control border-dark" type="text" name="lain_lain_more" id="lainLainInput" />
            </div>

        </div>
        <div class="my-2"><strong>Perawatan pasca anastesia : </strong></div>
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <div class="my-2">
                <input class="custom-checkbox-success" type="checkbox" name="rawat_jalan" id="rawatJalanCheckbox" />
                <label for="rawatJalanCheckbox">Rawat jalan</label>
            </div>

            <div class="my-2">
                <input class="custom-checkbox-success" type="checkbox" name="icu" id="icuCheckbox" />
                <label for="icuCheckbox">ICU</label>
            </div>

            <div class="my-2">
                <input class="custom-checkbox-success" type="checkbox" name="rawat_inap" id="rawatInapCheckbox" />
                <label for="rawatInapCheckbox">Rawat inap</label>
            </div>

            <div class="my-2">
                <input class="custom-checkbox-success" type="checkbox" name="lain_lain_perawatan_check" id="lainLainPerawatanCheckbox" onclick="toggleLainPerawatanInput(this)" />
                <label for="lainLainPerawatanCheckbox">Lain-lain :</label>
                <input class="form-control border-dark" type="text" name="lain_lain_perawatan" id="lainLainPerawatanInput" />
            </div>

        </div>
        <p class="mt-4 mb-2"><strong>PERSIAPAN PRA ANESTESIA</strong></p>
        <p class="mb-5">
            Puasa : - Makan : Jam
            <input class="form-control border-dark" type="time" name="jam_makan" value="<?= date('H:i') ?>" /> Tanggal :
            <input class="form-control border-dark" type="date" name="tanggal_makan" value="<?= date('Y-m-d') ?>" />
        </p>
        <p class="my-5">
            - Minum : Jam
            <input class="form-control border-dark" type="time" name="jam_minum" value="<?= date('H:i') ?>" /> Tanggal :
            <input class="form-control border-dark" type="date" name="tanggal_minum" value="<?= date('Y-m-d') ?>" />
        </p>
        <p class="my-5">
            Pre medikasi : Jam
            <input class="form-control border-dark" type="time" name="jam_pre_medikasi" value="<?= date('H:i') ?>" />
            Tanggal :
            <input class="form-control border-dark" type="date" name="tanggal_pre_medikasi" value="<?= date('Y-m-d') ?>" />
        </p>
        <p class="my-5">
            Transportasi ke Kamar Bedah : Jam
            <input class="form-control border-dark" type="time" name="jam_transportasi" value="<?= date('H:i') ?>" />
            Tanggal :
            <input class="form-control border-dark" type="date" name="tanggal_transportasi" value="<?= date('Y-m-d') ?>" />
        </p>
        <p class="my-5">
            Rencana Operasi : Jam
            <input class="form-control border-dark" type="time" name="jam_rencana_operasi" value="<?= date('H:i') ?>" />
            Tanggal :
            <input
                class="form-control border-dark"
                type="date"
                name="tanggal_rencana_operasi" value="<?= date('Y-m-d') ?>" />
        </p>

        <div class="mb-3 text-end">Dokter Anestesi,</div>
        <div class="d-flex justify-content-end flex-column align-items-end gap-2">

            <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
            <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 35%;"></select>

        </div>
    </div>
</div>

<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')


        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
    });


    document.addEventListener("DOMContentLoaded", () => {
        // new MarkerManager(".marker-image");
    });

    function cbCommon(data) {
        populateFormFields(data);

        // fill image
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
        }, 1000)
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

    // Focus the input for GA
    function toggleGaInput(isGaClicked) {
        const gaInput = document.getElementById('gaInput');
        if (isGaClicked) {
            gaInput.focus(); // Focus the input field for GA
        }
    }

    // Focus the input for Lain-lain
    function toggleLainInput(isLainClicked) {
        const lainInput = document.getElementById('lainInput');
        if (isLainClicked) {
            lainInput.focus(); // Focus the input field for Lain-lain
        } else {
            lainInput.value = ''; // Clear the value of "Lain-lain" input if not clicked
        }
    }

    // Focus or clear the "EKG Lead" input when checkbox is clicked
    function toggleEkgInput(checkbox) {
        const ekgInput = document.getElementById('ekgInput');

        // If checkbox is checked, focus the input field
        if (checkbox.checked) {
            ekgInput.focus(); // Focus the input field for EKG Lead
        } else {
            ekgInput.value = ''; // Clear the value if checkbox is unchecked
        }
    }

    // Fungsi untuk fokuskan input atau kosongkan nilai input berdasarkan status checkbox
    function toggleLainInput(checkbox) {
        const lainLainInput = document.getElementById('lainLainInput');

        // Jika checkbox dicentang, fokuskan input
        if (checkbox.checked) {
            lainLainInput.focus();
        } else {
            lainLainInput.value = ''; // Jika checkbox tidak dicentang, kosongkan input
        }
    }

    // Fungsi untuk fokuskan input atau kosongkan nilai input berdasarkan status checkbox
    function toggleLainPerawatanInput(checkbox) {
        const lainLainPerawatanInput = document.getElementById('lainLainPerawatanInput');

        // Jika checkbox dicentang, fokuskan input
        if (checkbox.checked) {
            lainLainPerawatanInput.focus();
        } else {
            lainLainPerawatanInput.value = ''; // Jika checkbox tidak dicentang, kosongkan input
        }
    }
</script>