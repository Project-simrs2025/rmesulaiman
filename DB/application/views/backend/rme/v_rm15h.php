<!-- rm 15h -->

<div class="row mt-4">
    <?php
    $dataform1 = array(
        array('nama' => "No. Rekam Medis", 'tipe' => "text",  'holder' => "Masukkan No Rekam Medis", 'name' => "no_rm", 'status' => ''),
        array('nama' => "Nama Pasien", 'tipe' => "text", 'holder' => "Masukkan Nama Pasien", 'name' => "nama_pasien", 'status' => ''),
        array('nama' => "Tanggal Lahir", 'tipe' => "text",  'holder' => "Masukkan Nama Dokter", 'name' => "tanggal_lahir", 'status' => ''),
        array('nama' => "Jenis Kelamin", 'tipe' => "text", 'values' => "$jenkel", 'holder' => "Masukkan Jenis Kelamin", 'name' => "jenkel", 'status' => ''),
        array('nama' => "Kelas / Ruang", 'tipe' => "text", 'values' => "$kelas / $nama_ruangan", 'holder' => "Masukkan Nama Kelas / Ruang", 'name' => "kelas", 'status' => ''),
    ); ?>
    <?php
    foreach ($dataform1 as $a) {
        echo "<div class='form-group'>";
        echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
        echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
        echo "<span class='help-block text-danger'></span></div>";
    }
    ?>
</div>

<div class="row mt-2">
    <div class="form-group">
        <label for="">Tanggal Masuk :</label>
        <input type="text" name="tgl_admit" class="form-control border-dark">
    </div>
    <div class="form-group">
        <label for="">Tanggal Keluar :</label>
        <input type="date" name="tanggal_keluar" class="form-control border-dark">
    </div>
</div>


<br>
<!-- table -->
<table class="table-bordered border-dark w-100">
    <tbody>
        <tr>
            <td>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="form-group">
                            <label for="">Diagnosa Masuk</label>
                            <select type="select" name="diagnosa1" class="form-select diagnosa w-75">
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="d-block my-2"> Pemeriksaan Penunjang ( yang mendukung diagnosis pasien ) :</div>

                        <div class="form-group">
                            <label for="" class="ms-3">a. Laboratorium</label>
                            <input type="text" class="form-control border-dark w-100" name="lab">
                        </div>
                        <div class="form-group">
                            <label for="" class="ms-3">b. Radiologi</label>
                            <input type="text" class="form-control border-dark w-100" name="radiologi">
                        </div>
                        <div class="form-group">
                            <label for="" class="ms-3">c. Lain-lain</label>
                            <input type="text" class="form-control border-dark w-100" name="lain-lain">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="">Tindakan / Operasi :</label>
                            <input type="text" class="form-control border-dark w-100" name="tindakan_operasi">
                        </div>
                    </div>

                    <div>
                        <div>Keadaan Pasien Pulang :</div>
                        <div class="row mt-3 ms-5">
                            <div class="col-md-6 d-flex flex-column gap-2">
                                <div>
                                    <input type="radio" class="custom-checkbox-success" value="sembuh" name="keadaan_pasien" id="sembuh">
                                    <label for="sembuh">Sembuh</label>
                                </div>
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="meninggal_kcl" id="meninggal_kcl">
                                    <label for="meninggal_kcl">Meninggal < 48 jam</label>
                                </div>
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="paps" id="paps">
                                    <label for="paps">PAPS</label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex flex-column gap-2 m-auto">
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="membaik" id="membaik">
                                    <label for="membaik">Membaik</label>
                                </div>
                                <div>
                                    <input type="radio" class="custom-checkbox-success" name="keadaan_pasien" value="meninggal_besar" id="meninggal_besar">
                                    <label for="meninggal_besar">Meninggal > 48 jam</label>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <label for="dirujuk" class="col-2">Dirujuk ke</label>
                                    <input type="text" class="form-control border-dark" name="dirujuk" id="dirujuk">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="">Diagnosa Akhir</label>
                            <select type="select" name="diagnosa2" class="form-select diagnosa w-75">
                            </select>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="form-group">
                            <label for="">Kode Diagnosa</label>
                            <input type="text" class="form-control border-dark" name="kode_diagnosa">
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-end d-flex justify-content-end align-items-center">
                            <span class="mx-2"> <?= $city_sign ?>, </span> <input type="date" value="<?= date('Y-m-d'); ?>" name="tgl_city" class="form-control border-dark w-25">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-6 text-center">
                            <div>
                                <label for="">Pasien</label>
                            </div>
                            <img class="marker-image my-2" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                style="max-width: 250px;height:160px;" data-input-name="image_drawer_state_image_rm1" />
                            <input type="hidden" id="image_drawer_state_image_rm1" name="image_drawer_state_image_rm1"
                                value="" />
                            <input type="text" class="form-control w-100 border-dark" name="nama_pasien">
                        </div>
                        <div class="col-6 text-center">
                            <div>
                                <label for="" class="text-center mb-2">Dokter</label>
                            </div>
                            <img class="img-responsive center-block mt-2" style="width: 32%;" id="qr_dokter_umum" />
                            <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"


    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

        // Initialize Select2
        $('.diagnosa').select2({
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

        $('.diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('.diagnosa').select2('data', null); // Trigger new data fetch
                }
            });

            $('#dokter_umum').on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, 'qr_dokter_umum')
            });
        });


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