<div class="row">
    <?php
    $dataPasien = [
        ['label' => 'Nama Pasien', 'value' => $nama_pasien, 'label2' => 'Agama', 'value2' => $nama_agama],
        ['label' => 'Tanggal Lahir', 'value' => $tgl_lahir, 'label2' => 'Suku/Bangsa', 'value2' => "$nama_suku / $nama_bangsa"],
        ['label' => 'Jenis Kelamin', 'value' => $jenkel, 'label2' => 'Alamat', 'value2' => $alamat],
        ['label' => 'No. RM', 'value' => $no_rm, 'label2' => 'NIK', 'value2' => $nik],
    ];
    ?>

    <div class="container-fluid">
        <?php foreach ($dataPasien as $row): ?>
            <div class="row mb-2">
                <div class="col-md-2 fw-bold"><?= $row['label'] ?></div>
                <div class="col-md-4"> <?= $row['value'] ?></div>
                <div class="col-md-2 fw-bold"><?= $row['label2'] ?></div>
                <div class="col-md-4"> <?= $row['value2'] ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row my-4">
        <div class="text-center">DATA MEDIS DAN KEPERAWATAN PASIEN HEMODIALIS</div>
    </div>


    <div class="row">
        <table class="table table-bordered border-dark">
            <tr>
                <td>
                    <strong>Data Pre HD</strong><br>
                    <div class="row">
                        <div class="d-flex align-items-start gap-2">
                            <div class="col-2">Keluhan Pasien</div>
                            <textarea name="keluhan_pasien" id="" class="form-control border-dark" rows="2"></textarea>
                        </div>

                        <div class="text-decoration-underline">Pemeriksaan Fisik</div>

                        <!-- vital sign -->
                        <div class="col-md-3 d-flex flex-column">
                            <div class="text-decoration-underline">Vital Sign</div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-4">Td</div>
                                : <input type="text" name="vital_td" id="" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-4">Nadi</div>
                                : <input type="text" name="vital_nadi" id="" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-4">RR</div>
                                : <input type="text" name="vital_rr" id="" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-4">Temp</div>
                                : <input type="text" name="vital_temp" id="" class="form-control border-dark">
                            </div>
                        </div>

                        <!-- Respiratory -->
                        <div class="col-md-2 d-flex flex-column">
                            <div class="text-decoration-underline">Respiratory</div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="normal_respiratory" id="normal_respiratory" class="custom-checkbox-success">
                                <label for="normal_respiratory">normal</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="dyspnoe_respiratory" id="dyspnoe_respiratory" class="custom-checkbox-success">
                                <label for="dyspnoe_respiratory">Dyspnoe</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="ronchi_respiratory" id="ronchi_respiratory" class="custom-checkbox-success">
                                <label for="ronchi_respiratory">Ronchi</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="Wheezing_respiratory" id="Wheezing_respiratory" class="custom-checkbox-success">
                                <label for="Wheezing_respiratory">Wheezing</label>
                            </div>
                        </div>
                        <!-- Respiratory -->

                        <!-- Edema -->
                        <div class="col-md-2 d-flex flex-column">
                            <div class="text-decoration-underline">Edema</div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="tidak_ada_edema" id="tidak_ada_edema" class="custom-checkbox-success">
                                <label for="tidak_ada_edema">Tidak ada</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="ektremitas_edema" id="ektremitas_edema" class="custom-checkbox-success">
                                <label for="ektremitas_edema">Ektremitas</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="wajah_edema" id="wajah_edema" class="custom-checkbox-success">
                                <label for="wajah_edema">Wajah</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="asites_edema" id="asites_edema" class="custom-checkbox-success">
                                <label for="asites_edema">Asites</label>
                            </div>
                        </div>
                        <!-- Edema -->

                        <!-- Data berat badan -->
                        <div class="col-md-3 d-flex flex-column">
                            <div class="text-decoration-underline">Data Berat Badan</div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-3">BBK</div>
                                <input type="text" name="data_berat_badan_bbk" id="" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-3">BB pre</div>
                                <input type="text" name="data_berat_badan_bb_pre" id="" class="form-control border-dark">
                            </div>
                        </div>
                        <!-- Data berat badan -->


                        <!-- Tipe Akses Vaskuler -->
                        <div class="col-md-2 d-flex flex-column">
                            <div class="text-decoration-underline">Tipe Akses Vaskuler</div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="fistula_vaskuler" id="fistula_vaskuler" class="custom-checkbox-success">
                                <label for="fistula_vaskuler">AV fistula</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="femolaris_vaskuler" id="femolaris_vaskuler" class="custom-checkbox-success">
                                <label for="femolaris_vaskuler">Femolaris</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="lumen_vaskuler" id="lumen_vaskuler" class="custom-checkbox-success">
                                <label for="lumen_vaskuler">Double lumen</label>
                            </div>

                        </div>
                        <!-- Tipe Akses Vaskuler -->
                    </div>

                    <div class="row">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-md-2">Pengkajian risiko jatuh :</div>
                            <div class="col-md-4 d-flex align-items-center gap-2">
                                <div class="col-md-3">Skor :</div>
                                <input type="text" name="skor_pengkajian" id="" class="form-control border-dark">
                                <div class="col-md-3"></div>
                            </div>
                            <div class="col-md d-flex align-items-center gap-2">
                                <div class="col-md-2">kriteria</div>
                                <div class="col-md-2">
                                    <input type="checkbox" name="kriteria_rendah" id="kriteria_rendah" class="custom-checkbox-success">
                                    <label for="kriteria_rendah">rendah</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" name="kriteria_sedang" id="kriteria_sedang" class="custom-checkbox-success">
                                    <label for="kriteria_sedang">sedang</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" name="kriteria_tinggi" id="kriteria_tinggi" class="custom-checkbox-success">
                                    <label for="kriteria_tinggi">tinggi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="row">
                        <div class="text-decoration-underline fw-bold">Data Nyeri</div>
                        <div class="text-decoration-underline fw-bold">PENILAIAN NYERI</div>

                        <div class="d-flex align-items-center gap-2">
                            <div class="col-md-3">Nyeri :</div>
                            <div class="d-flex align-items-center gap-2 col-md-1">
                                <input type="checkbox" name="nyeri_tidak" id="nyeri_tidak" class="custom-checkbox-success">
                                <label for="nyeri_tidak">Tidak</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-md-4">
                                <input type="checkbox" name="nyeri_ya" id="nyeri_ya" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="nyeri_ya" class="col-md-3">Ya, Lokasi</label>
                                    <input type="text" name="nyeri_lokasi" id="" class="form-control border-dark">
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-md">
                                <input type="checkbox" name="intensitas_ya" id="intensitas_ya" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="intensitas_ya" class="col-md-6">Intensitas (0-10)</label>
                                    <input type="text" name="intensitas_lokasi" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/nyeri.png') ?>"
                            style="width:100%; height:150px" data-input-name="image_drawer_state_image_11" />
                        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                            value="" />
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-md-1">jenis : </div><input type="checkbox" name="jenis_nyeri_akut" id="jenis_nyeri_akut" class="custom-checkbox-success"> akut
                        <input type="checkbox" name="jenis_nyeri_kronis" id="jenis_nyeri_kronis" class="custom-checkbox-success"> kronis
                    </div>

                    <br>

                    <div class="text-decoration-underline">
                        Data dialize
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div class="col-md-4 d-flex align-items-center gap-2">
                            <div class="col-md-4">Luas Membran : </div>
                            <input type="text" name="luas_membran" id="" class="form-control border-dark">
                        </div>

                        <div class="d-flex align-items-center gap-2 col-md-2">
                            <input type="checkbox" name="low_flux" id="low_flux" class="custom-checkbox-success">
                            <label for="low_flux">Low Flux</label>
                        </div>

                        <div class="d-flex align-items-center gap-2 col-md-2">
                            <input type="checkbox" name="hight_flux" id="hight_flux" class="custom-checkbox-success">
                            <label for="hight_flux">Hight Flux</label>
                        </div>

                        <div class="d-flex align-items-center gap-2 col-md flex-wrap">
                            <div>Jenis Dializer</div>
                            <div>
                                <input type="checkbox" name="dializer_baru" id="dializer_baru" class="custom-checkbox-success"> Baru
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="dializer_reuse" id="dializer_reuse" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="col-4">Reuse ke -</div> <input type="text" name="reuse_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex align-items-center">
                            <div class="text-decoration-underline col-2">Parameter Mesin :</div>
                            <div class="col-1">Alarm test : </div>
                            <div class="d-flex align-items-center gap-2 col-md-4">
                                <input type="checkbox" name="conductivity" id="conductuvity" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2">
                                    <label for="conductivity" class="col-5">Conductivity :</label>
                                    <input type="text" name="conductivity_input" id="" class="form-control border-dark">
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="col-md-1">Suhu :</div>
                            <input type="text" name="suhu" id="suhu" class="form-control border-dark">
                        </div>
                    </div>

                    <div class="text-decoration-underline">Anticoagulan: </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center gap-2 col-4">
                            <div class="col-2">Tipe :</div>
                            <div class="flex-shrink-0">Dosis Awal :</div>
                            <input type="text" name="dosis_awal" class="form-control border-dark"> unit
                        </div>

                        <div class="d-flex align-items-center gap-2 col-5">
                            <div class="flex-shrink-0">Dosis Pemeliharaan :</div>
                            <input type="text" name="dosis_pemeliharaan" class="form-control border-dark">
                            <div class="d-flex col-3">unit / jam</div>
                        </div>

                        <div class="d-flex align-items-center gap-2 col">
                            <div class="flex-shrink-0">Total :</div>
                            <input type="text" name="total_dosis" class="form-control border-dark"> unit
                        </div>
                    </div>

                    <br>

                    <table class="table table-bordered border-dark">
                        <tr align="center">
                            <td width="10%">Jam</td>
                            <td width="40%">Masalah Keperawatan</td>
                            <td width="10%">Jam</td>
                            <td width="40%">Masalah Keperawatan</td>
                        </tr>
                        <tr align="center">
                            <td>
                                <input type="time" name="pola_waktu_keperawatan_1" id="pola_waktu_keperawatan_1" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="checkbox" name="pola_keperawatan" id="pola_keperawatan" class="custom-checkbox-success">
                                <label for="pola_keperawtan">Pola Nafas tidak efektif</label>
                            </td>
                            <td>
                                <input type="time" name="pola_waktu_keperawatan_2" id="pola_waktu_keperawatan_2" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="checkbox" name="hipotermi_keperawatan" id="hipotermi_keperawatan" class="custom-checkbox-success">
                                <label for="hipotermi_keperawtan">Hiportermi</label>
                            </td>
                        </tr>


                        <tr align="center">
                            <td>
                                <input type="time" name="gangguan_waktu_keperawatan_1" id="gangguan_waktu_keperawatan_1" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="checkbox" name="gangguan_keperawatan" id="gangguan_keperawatan" class="custom-checkbox-success">
                                <label for="gangguan_keperawtan">Gangguan / Kelebihan volume cairan</label>
                            </td>
                            <td>
                                <input type="time" name="gangguan_waktu_keperawatan_2" id="gangguan_waktu_keperawatan_2" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="checkbox" name="hipetermi_keperawatan" id="hipetermi_keperawatan" class="custom-checkbox-success">
                                <label for="hipetermi_keperawtan">Hipertermi</label>
                            </td>
                        </tr>


                        <tr align="center">
                            <td>
                                <input type="time" name="gangguan_cemas_waktu_keperawatan_1" id="gangguan_cemas_waktu_keperawatan_1" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="checkbox" name="gangguan_cemas_keperawatan" id="gangguan_cemas_keperawatan" class="custom-checkbox-success">
                                <label for="gangguan_cemas_keperawtan">Gangguan rasa cemas(ansietas)</label>
                            </td>
                            <td>
                                <input type="time" name="gangguan_cemas_waktu_keperawatan_2" id="gangguan_cemas_waktu_keperawatan_2" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="checkbox" name="pendarahan_keperawatan" id="pendarahan_keperawatan" class="custom-checkbox-success">
                                <label for="pendarahan_keperawtan">Pendarahan</label>
                            </td>
                        </tr>


                        <tr align="center">
                            <td>
                                <input type="time" name="gangguan_rsNyaman_waktu_keperawatan_1" id="gangguan_rsNyaman_waktu_keperawatan_1" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="checkbox" name="gangguan_rsNyaman_keperawatan" id="gangguan_rsNyaman_keperawatan" class="custom-checkbox-success">
                                <label for="gangguan_rsNyaman_keperawtan">Gangguan rasa nyaman(nyeri)</label>
                            </td>
                            <td>
                                <input type="time" name="gangguan_rsNyaman_waktu_keperawatan_2" id="gangguan_rsNyaman_waktu_keperawatan_2" class="form-control border-dark">
                            </td>
                            <td>
                                <input type="text" name="lain_keperawatan_input" id="" class="form-control border-dark">
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered border-dark">
                        <tr align="center">
                            <td width="15%">Jam</td>
                            <td width="40%">Program Dokter</td>
                            <td width="45%">Nama Dokter</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="time" name="jam_program_dokter_1" id="" class="form-control border-dark">
                            </td>
                            <td>
                                <textarea name="visit_dokter_1" id="" class="form-control border-dark" rows="4"></textarea>
                            </td>
                            <td>
                                <div class="text-center">
                                    <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dokter_umum" />
                                </div>
                                <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter_umum" style="width: 100%;"></select>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </div>

</div>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

        // Initialize Select2
        $('#diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    console.log("params", params)
                    return {
                        q: params.term, // Search query
                        limit: 100, // Number of items per page
                        offset: (page - 1) * 100, // Calculate offset
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data
                    console.log(items, more)
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

        $('#diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('#diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });



        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id,
                id_original
            } = e.params.data;

            if (id === '') {
                // Kosongkan QR Code jika pilihan "--pilih--"
                $('#qr_dokter_umum').remove();
            } else {
                QRSignatureAPI(id_original, 'qr_dokter_umum');
            }
        });

    });

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
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 1000)
    }


    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        limit: 100,
                        offset: 0, // Optional, jika backend mendukung pagination
                    };
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
                            more: more
                        }
                    };
                },
                cache: true,
            },
            placeholder: '--pilih--',
            allowClear: true, // ⬅️ Ini yang munculkan simbol "×"
        });

        // Reset nilai saat awal load
        $('.dokter_umum').val(null).trigger('change');
    }
</script>