<!-- rm 17e -->
<div class="row overflow-auto">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Nama :</label>
                <input type="text" class="form-control border-dark" name="nama_pasien">
            </div>
            <div class="my-2">
                <label for="">Tanggal Lahir :</label>
                <div class="d-flex gap-2 align-items-center">
                    <div class="col-6">
                        <input type="date" class="form-control border-dark" name="tanggal_lahir">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control border-dark" name="jenkel">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control border-dark" name="alamat">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="">No RM :</label>
                <input type="text" class="form-control border-dark" name="no_rm">
            </div>
            <div class="form-group">
                <label for="">Agama :</label>
                <input type="text" class="form-control border-dark" name="nama_agama">
            </div>
            <div class="form-group">
                <label for="">Suku / Bangsa :</label>
                <input type="text" class="form-control border-dark" name="nama_suku">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <table class="table table-bordered border-dark">
                <tr>
                    <td colspan="3">
                        <label>Ruangan :</label>
                        <input type="text" class="form-control border-dark" name="nama_ruangan">
                    </td>
                    <td colspan="3">
                        <label>Tgl : </label>
                        <input type="datetime-local" class="form-control border-dark" name="tgl" value="<?= date('Y-m-d H:i') ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <label>Diagnosis : </label>
                        <!--				<input type="hidden" id="initialData" disabled>-->
                        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa" style="width: 100%;">
                            <!--					<option value="">-- PILIH DIAGNOSA --</option>-->
                        </select>
                    </td>
                    <td colspan="3">
                        <label>Prosedur Operasi : </label>
                        <input type="text" class="form-control border-dark" name="prosedur_operasi">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p>Teknik Anesthesia : <input type="text" class="form-control border-dark" name="teknik_anesthesia"></p>
                    </td>
                    <td colspan="3">
                        <p>Tanggal Tindakan : <input type="date" class="form-control border-dark" name="tgl_tindakan" value="<?= date('Y-m-d'); ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p>Diagnosis Pra Bedah : <input type="text" class="form-control border-dark" name="diagnosis_pra_bedah"></p>
                    </td>
                    <td colspan="3">
                        <p>Diagnosis pasca bedah : <input type="text" class="form-control border-dark" name="diagnosis_pasca_bedah"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Keadaan Pra Bedah :</p>
                    </td>
                    <td>
                        <p>BB : <input type="text" class="form-control border-dark" name="bb"></p>
                        <p>TD : <input type="text" class="form-control border-dark" name="td"></p>
                    </td>
                    <td>
                        <p>TB : <input type="text" class="form-control border-dark" name="tb"></p>
                        <p>Nadi : <input type="text" class="form-control border-dark" name="nadi"></p>
                    </td>
                    <td>
                        <p>Gol Darah : <input type="text" class="form-control border-dark" name="gol_darah"></p>
                        <p>Suhu : <input type="text" class="form-control border-dark" name="suhu"></p>
                    </td>
                    <td>
                        <p>Rh : <input type="text" class="form-control border-dark" name="rh"></p>
                        <p>Hb : <input type="text" class="form-control border-dark" name="hb"></p>
                    </td>
                    <td class="col-1">
                        <div class="d-flex flex-column gap-2 ">
                            <label>Alergi : </label>
                            <div>
                                <input class="custom-checkbox-success" type="radio" name="alergi" value="alergi_ya" id="alergi_ya">
                                <label for="alergi_ya"><strong>Ya</strong></label>
                            </div>
                            <div>
                                <input class="custom-checkbox-danger" type="radio" name="alergi" value="alergi_tidak" id="alergi_tidak">
                                <label for="alergi_tidak"><strong>Tidak</strong></label>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

        </div>
    </div>


    <div class="fw-bold">Pemeriksaan Fisik</div>
    <p>Jalan nafas</p>

    <div class="row">
        <div class="col-6">
            <label for="">Normal</label>
            <textarea type="text" name="jalan_nafas_normal" class="form-control border-dark"></textarea>
        </div>
        <div class="col-6">
            <label for="">Normal Abnormal</label>
            <textarea type="text" name="jalan_nafas_abnormal" class="form-control border-dark"></textarea>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-6">
            <label for=""> Obat local anastesi yang digunakan :</label>
            <input type="text" class="form-control border-dark" name="obat_anestesi">
        </div>
        <div class="col-6">
            <div class="d-flex gap-2 align-items-center mt-4">
                <label for="">diencerkan :</label>
                <div class="d-flex aling-items-center gap-2">
                    <input class="custom-checkbox-success" type="radio" name="diencerkan" value="ya_diencerkan" id="ya_diencerkan">
                    <label for="ya_diencerkan"><strong>Ya</strong></label>
                </div>
                <div class="d-flex aling-items-center gap-2">
                    <input class="custom-checkbox-danger" type="radio" name="diencerkan" value="tidak_diencerkan" id="tidak_diencerkan">
                    <label for="tidak_diencerkan"><strong>Tidak</strong></label>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <label for="">jenis pengenceran : </label>
            <input type="text" class="form-control border-dark" name="jenis_pengenceran">
        </div>
        <div class="col-12 mt-4">
            <label for="">Dosis / jumlah obat yang digunakan :</label>
            <input type="text" class="form-control border-dark" name="dosis_obat">
        </div>
        <div class="col-12 mt-4">
            <label for=""> Lokasi pemberian : </label>
            <input type="text" class="form-control border-dark" name="lokasi_pemberian">
        </div>
        <div class="col-12 mt-4">
            <label for=""> Jam pemberian :</label>
            <input type="time" class="form-control border-dark" name="jam_pemberian" value="<?= date('H:i') ?>">
        </div>


        <div class="col-6 my-3">
            <div class="d-flex gap-2 align-items-center mt-3">
                <label for="">Menggunakan adrenalin :</label>
                <div class="d-flex align-items-center gap-2">
                    <input class="custom-checkbox-success" type="radio" name="adrenalin" value="ya_adrenalin" id="ya_adrenalin">
                    <label for="ya_adrenalin"><strong>Ya</strong></label>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <input class="custom-checkbox-danger" type="radio" name="adrenalin" value="tidak_adrenalin" id="tidak_adrenalin">
                    <label for="tidak_adrenalin"><strong>Tidak</strong></label>
                </div>
            </div>
        </div>
        <div class="col-6 my-3 d-flex align-items-center mt-3">
            <label for="" class="col-2"> Dosis : </label>
            <input type="text" class="form-control border-dark" name="dosis_adrenalin">
        </div>
    </div>


    <div class="row">
        <div class="col-12">

            <table class="table table-bordered border-dark">
                <tr>
                    <td rowspan="2">
                        <p>Hemodinamik</p>
                    </td>
                    <td colspan="13">
                        <p>Waktu setelah pemberian lokal anestesi</p>
                    </td>
                </tr>
                <tr>
                    <?php
                    // Start the table row
                    for ($i = 15; $i <= 195; $i += 15) {
                        echo '<td><p>' . $i . '</p></td>';
                    }
                    ?>
                </tr>

                <tr>
                    <td>
                        <p>Tekanan Darah (mmhg)</p>
                    </td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                    <td><input type="text" class="form-control border-dark" name="tekanan_darah[]"></td>
                </tr>
                <tr>
                    <td>
                        <p>Nadi (x/mnt)</p>
                    </td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                    <td><input type="text" class="form-control border-dark" name="nadi_x[]"></td>
                </tr>
                <tr>
                    <td>
                        <p>Suhu (C®)</p>
                    </td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                    <td><input type="text" class="form-control border-dark" name="suhu_in_celcius[]"></td>
                </tr>
                <tr>
                    <td>
                        <p>SpO2 (%)</p>
                    </td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                    <td><input type="text" class="form-control border-dark" name="spo2[]"></td>
                </tr>
                <tr>
                    <td>
                        <p>EKG (gambaran)</p>
                    </td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                    <td><input type="text" class="form-control border-dark" name="ekg[]"></td>
                </tr>
            </table>

        </div>
    </div>


    <p>
        Kejadian penting selama operasi :
        <textarea class="form-control border-dark" name="kejadian_penting" rows="3"></textarea>
    </p>
    <p>
        Penanganan :
        <textarea class="form-control border-dark" name="penanganan" rows="3"></textarea>
    <div class="d-flex gap-2 justify-content-end">
        <div class="d-flex gap-2 align-items-center">
            <label for="" class="flex-shrink-0">Jam : </label><input type="time" class="form-control border-dark" name="jam_penanganan" value="<?= date('H:i') ?>">
        </div>
        <div class="d-flex gap-2 align-items-center">
            <label for="" class="flex-shrink-0">Tanggal : </label><input type="date" class="form-control border-dark" name="tgl_penanganan" value="<?= date('Y-m-d') ?>">
        </div>
    </div>
    </p>
    <div class="d-flex justify-content-end flex-column align-items-end">
        <div>Nama dan T.Tangan Dokter</div>
        <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 35%;"></select>

    </div>
</div>
</div>

<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    document.addEventListener("DOMContentLoaded", () => {
        // new MarkerManager(".marker-image");
    });

    function cbCommon(data) {
        populateFormFields(data);

        // fill image
    }


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
            // minimumInputLength: 0,
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
            id_dokter,
        } = globalData;


        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

    });

    function cbCommon(data) {

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
</script>