<!-- BATAS GANTI -->

<div class="row">
    <div class="col-6">
        <?php
        // Daftar input field
        $dataform1 = array(
            array('nama' => "Nama Pasien", 'tipe' => "text", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled", 'name' => "nama_pasien"),
            array('nama' => "NO. RM", 'name' => "no_rm", 'tipe' => "number", 'holder' => "Masukkan Nomor Rm", 'status' => "disabled"),
            array('nama' => "NIK", 'name' => "nik", 'tipe' => "text", 'holder' => "Masukkan NIK", 'status' => "disabled"),
            array('nama' => "Tanggal Lahir", 'name' => "tanggal_lahir", 'tipe' => "text", 'holder' => "Masukkan Pendidikan Terakhir", 'status' => "disabled"),
            array('nama' => "Jenis Kelamin", 'tipe' => "text", 'holder' => "Masukkan Jenis Kelamin", 'status' => "disabled", 'name' => 'jenkel'),
        );
        foreach ($dataform1 as $a) {
            echo "<div class='form-group mt-3'>";
            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
            echo "<span class='help-block text-danger'></span></div>";
        }
        ?>
    </div>
    <div class="col-6">
        <?php
        // Daftar input field
        $dataform2 = array(
            array('nama' => "Agama", 'tipe' => "text", 'holder' => "Masukkan nama Agama", 'status' => "disabled", 'name' => 'nama_agama'),
            array('nama' => "Pekerjaan", 'name' => "pekerjaan", 'tipe' => "text", 'name' => "nama_pekerjaan", 'holder' => "Masukkan Nama Pekerjaan", 'status' => "disabled"),
            array('nama' => "Suku Bangsa", 'tipe' => "text", 'name' => "nama_suku", 'holder' => "Masukkan Nama Suku Bangsa"),
            array('nama' => "Alamat", 'tipe' => "text",  'name' => 'alamat', 'holder' => "Masukkan Alamat", 'status' => "disabled"),
        );
        foreach ($dataform2 as $b) {
            echo "<div class='form-group mt-3'>";
            echo "<label for='{$b['nama']}'>{$b['nama']} :</label>";
            echo "<input type='{$b['tipe']}' class='form-control border-dark {$b['name']}' name='{$b['name']}' id='{$b['name']}' placeholder='{$b['holder']}' {$b['status']}>";
            echo "<span class='help-block text-danger'></span></div>";
        }
        ?>
    </div>

    <!-- tambah data table -->
    <!-- <div class="my-3 d-flex justify-content-end">
        <button type="button" class="btn btn-primary" onclick="addRow()">
            <span class="bi bi-plus"></span>
        </button>
    </div> -->

    <div class="table-responsive">

        <!-- table -->
        <table class="table table-bordered border-dark">
            <tbody class="text-center">
                <tr>
                    <th rowspan="2">Tanggal</th>
                    <th rowspan="2">Poliklinik Yang Dituju</th>
                    <th colspan="3" class="text-center border-bottom-1">Diisi Oleh Dokter</th>
                    <th rowspan="2">Nama & TT Dokter</th>
                    <th rowspan="2">Kode Diagnosa</th>
                </tr>
                <tr>
                    <th>Anamnese / Pemeriksaan</th>
                    <th class="col-3">Diagnosa</th>
                    <th>Rencana Pelayanan & Therapi</th>
                </tr>
            </tbody>
            <tbody id="form-container">
                <div class="mt-4">


                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                    ?>
                        <tr class="text-center">
                            <td><input type='date' name="tanggal_<?= $i; ?>" class='form-control border-dark'></td>
                            <td><textarea name='dpoli_<?= $i; ?>' id='dpoli_<?= $i; ?>' class='form-control border-dark dpoli' rows='3' placeholder='Masukkan Nama Poli' style='width: 200px;'></textarea></td>
                            <td><textarea name='danamnes_<?= $i; ?>' id='danamnes_<?= $i; ?>' class='form-control border-dark danamnese' rows='3' placeholder='Masukkan Nama Pemeriksaan' style='width: 200px;'></textarea></td>
                            <td><select type='select' name='diagnosa_<?= $i; ?>' class='form-select diagnosa' style='width: 400px;'></select></td>
                            <td><textarea name='rencana_<?= $i; ?>' id='rencana_<?= $i; ?>' class='form-control border-dark drencanapelayanan' rows='3' placeholder='Masukkan Nama Pelayanan' style='width: 200px;'></textarea></td>
                            <td>
                                <div style="width: 300px;">
                                    <img class="img-responsive center-block my-2" style="width: 30%;" id="qr_dokter_umum<?php echo $i; ?>" />
                                    <select type="select" name="dokter_umum<?php echo $i; ?>" id="dokter_umum<?php echo $i; ?>" class="form-select dokter_umum mt-3" style="width: 100%;"></select>
                                </div>
                            </td>
                            <td><textarea name='kode_diagnosa_<?= $i; ?>' id='kode_diagnosa_<?= $i; ?>' class='form-control border-dark dkodediagnosa' rows='3' placeholder='Masukkan Nama Kode Diagnosa' style='width: 200px;'></textarea></td>
                        </tr>
                    <?php
                    }
                    ?>
                </div>
            </tbody>
        </table>
        <table class="table table-bordered border-dark" id="TableResumeMedis">

        </table>


        <div class="text-end mb-4">
            <span>Tanda tangan Pasien/ Keluarga Pasien</span>
            <div class="mt-3">
                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                    style="width: 350px;height:180px;" data-input-name="image_drawer_state_image_rm1" />
                <input type="hidden" id="image_drawer_state_image_rm1" name="image_drawer_state_image_rm1"
                    value="" />
            </div>
        </div>
        <div class="d-flex flex-column my-4">
            <div>1. Lembar Asli (Putih), untuk arsip Rekam Medis.</div>
            <div>2. Lembar Kedua (Merah), untuk Pasien.</div>
            <div>3. Lembar Ketiga (Hijau), untuk Penjamin.</div>
        </div>
    </div>
</div>
<!-- BATAS GANTI -->
</div>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;

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
        });



        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        listDokterUmumAPI()


        // mulai aktif jumlah dokter
        const jumlahDokter = 10;

        for (let i = 1; i <= jumlahDokter; i++) {
            $(`#dokter_umum${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_dokter_umum${i}`);
            });
        }
    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });


    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
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


    function cbCommon(data) {
        populateFormFields(data);


        // dokter img
        const jumlahDokter = 10;

        for (let i = 1; i <= jumlahDokter; i++) {
            const dokterSelect = `#dokter_umum${i}`;
            const qrId = `qr_dokter_umum${i}`;

            $(dokterSelect).prop('disabled', false).select2('open').select2('close');

            if (mode === "lihat") {
                $(dokterSelect).prop('disabled', true);
            }

            setTimeout(() => {
                console.log(dataDokter);
                dataDokter?.forEach(v => {
                    if (v.text === $(dokterSelect).select2('data')[0]?.text) {
                        QRSignatureAPI(v.id_original, qrId);
                    }
                });
            }, 500);
        }
    }
</script>