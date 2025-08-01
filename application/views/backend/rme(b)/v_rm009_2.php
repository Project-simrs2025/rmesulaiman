<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <h5 class="text-center">
                        CATATAN MEDIS AWAL RAWAT INAP
                    </h5>
                </td>
                <td>

                    <?php
                    // Gabungkan tanggal lahir dan umur
                    $tgl_lahir = $tgl_lahir;
                    $umur = $umur;
                    $values = "$tgl_lahir / $umur";

                    $dataform1 = array(
                        array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "", 'name' => 'no_rm'),
                        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "", 'name' => "nama_pasien"),
                        array('nama' => "Tanggal Lahir/Umur", 'name' => "tanggall_lahir", 'tipe' => "text", 'values' => $values, 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
                        array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'values' => "", 'holder' => "jenkel", 'status' => ""),
                    );
                    foreach ($dataform1 as $a) {
                        echo "<div class='form-group mt-2'>";
                        echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                        echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>
                    </div>";
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="d-flex align-items-center gap-2">
        <label for="" class="col-2">Keluhan Utama</label>
        <span>:</span><input type="text" name="keluhan_utama" id="keluhan_utama" class="form-control border-dark">
    </div>

    <div class="my-3 d-flex align-items-center gap-2">
        <label for="" class="col-2">Anamnesa</label>
        <span>:</span>
        <textarea name="anamnesa" id="" rows="3" class="form-control border-dark"></textarea>
    </div>

    <div class="my-2 form-group">
        <label for="">Riwayat penyakit dahulu(Termasuk Riwayat Operasi)</label>
        <span>:</span>
        <textarea name="rw_penyakit" id="" rows="3" class="form-control border-dark"></textarea>
    </div>

    <div class="my-2 form-group">
        <label for="">Riwayat Pemakaian Obat</label>
        <span>:</span>
        <textarea name="rw_obat" id="" rows="3" class="form-control border-dark"></textarea>
    </div>

    <div class="my-2 form-group">
        <label for="">Riwayat Penyakit Dalam Keluarga</label>
        <span>:</span>
        <textarea name="rw_keluarga" id="" rows="3" class="form-control border-dark"></textarea>
    </div>

    <div class="my-2 d-flex flex-column gap-2">
        <label for="">Riwayat Pekerjaan</label>
        <div>Apakah Pekerjaan pasien berhubungan dengan zat-zat berbahaya (misalnya: kimia, gas dll).</div>
        <div class="row">
            <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 col-4">
                    <input type="checkbox" name="tidak_gas" id="tidak_gas" class="custom-checkbox-danger">
                    <label for="tidak_gas">Tidak</label>
                </div>
                <div class="d-flex align-items-center gap-2 col-4">
                    <input type="checkbox" name="Ya_gas" id="Ya_gas" class="custom-checkbox-success">
                    <label for="Ya_gas">Ya</label>
                </div>
            </div>
        </div>
    </div>

    <div class="my-2">
        <div class="d-flex flex-column gap-2">
            <div class="d-flex align-items-center gap-2">
                <div>Riwayat Alergi :</div>
                <input type="checkbox" name="rw_alerg" id="rw_alerg" class="custom-checkbox-danger">
                <label for="rw_alerg">Tidak Ada</label>
            </div>

            <div class="d-flex align-items-start gap-2">
                <input type="checkbox" name="ada" id="ada" class="custom-checkbox-success">
                <div class="col-3">Ada,Yaitu :</div>
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex  gap-2 w-100">
                        <input type="checkbox" name="makanan" id="makanan" class="custom-checkbox-success">
                        <label for="makanan" class="col-2">Makanan</label>
                        <input type="text" name="makanan_input" id="makanan_input" class="form-control border-dark" style="width: 400px;">
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="checkbox" name="obat" id="obat" class="custom-checkbox-success">
                        <label for="obat" class="col-2">Obat</label>
                        <input type="text" name="Obat_input" id="Obat_input" class="form-control border-dark" style="width: 400px;">
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="checkbox" name="tidak_tahu" id="tidak_tahu" class="custom-checkbox-success">
                        <label for="tida-tahu" class="col-2">Tidak Tahu</label>
                        <input type="text" name="tidak_tahu_input" id="tidak_tahu_input" class="form-control border-dark" style="width: 400px;">
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="checkbox" name="lain" id="lain" class="custom-checkbox-success">
                        <label for="lain" class="col-2">Lain-lain</label>
                        <input type="text" name="lain_lain_input" id="lain_lain_input" class="form-control border-dark" style="width: 400px;">
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                        <input type="checkbox" name="reaksi" id="makanan" class="custom-checkbox-success">
                        <label for="reaksi" class="">Reaksi berupa</label>
                        <input type="text" name="reaksi_input" id="reaksi_input" class="form-control border-dark" style="width: 400px;">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="my-2">
        <div class="form-check my-3"> Pemeriksaan Umum :</div>
        <div class="row">
            <div class="col-6">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Kesadaran</label>
                        <input type="text" name="kesadaran" id="kesadaran" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Tekanan Darah</label>
                        <input type="text" name="tek_darah" id="tek_darah" class="form-control border-dark"><span class="col-3">mmHg</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Nadi</label>
                        <input type="text" name="Nadi" id="Nadi" class="form-control border-dark"><span class="col-3">x/menit</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Suhu</label>
                        <input type="text" name="suhu" id="suhu" class="form-control border-dark"><span class="col-3">&deg;C</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Pernafasan</label>
                        <input type="text" name="Pernafasan" id="Pernafasan" class="form-control border-dark"><span class="col-3">x/menit</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Skala Nyeri</label>
                        <input type="text" name="skala_nyeri" id="skala_nyeri" class="form-control border-dark">
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Keadaan Umum</label>
                        <input type="text" name="keadaan" id="keadaan" class="form-control border-dark" placeholder="baik/sedang/buruk">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Keadaan Gizi</label>
                        <input type="text" name="keadaan_gizi" id="keadaan_gizi" class="form-control border-dark" placeholder="baik/sedang/buruk">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Oedem</label>
                        <input type="text" name="Oedem" id="Oedem" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Ikterus</label>
                        <input type="text" name="Ikterus" id="Ikterus" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Cyanosis</label>
                        <input type="text" name="Cyanosis" id="Cyanosis" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">BB/TB</label>
                        <input type="text" name="BB_keadaan" id="BB_keadaan" class="form-control border-dark">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row mt-3">
    <table class="table table-bordered border-dark">
        <tr class="text-center">
            <td></td>
            <td>NORMAL</td>
            <td>JIKA TIDAK NORMAL JELASKAN</td>
        </tr>

        <?php
        $bagian_tubuh = ['Kepala', 'Mata', 'THT', 'Mulut', 'Leher', 'Jantung', 'Paru', 'Dada Dan_payudara', 'Perut', 'Urogenital', 'Anggota Gerak', 'Status Neurologis', 'Muskolosketal'];

        foreach ($bagian_tubuh as $bagian) {
            // Ganti spasi dan karakter selain huruf/angka menjadi underscore
            $name = strtolower(preg_replace('/[^a-z0-9]+/', '_', $bagian));
            echo "<tr>
            <td>$bagian</td>
            <td><input type='text' name='{$name}_normal' id='{$name}_normal' class='form-control border-dark'></td>
            <td><input type='text' name='{$name}_t_normal' id='{$name}_t_normal' class='form-control border-dark'></td>
          </tr>";
        }
        ?>

    </table>
</div>

<div class="row">
    <div class="form-group my-2">
        <label for="penunjang">Pemeriksaan Penunjang</label>
        <textarea name="penunjang" id="" rows="3" class="form-control border-dark"></textarea>
    </div>
    <div class="form-group my-2">
        <label for="diagnosa">Diagnosa</label>
        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa">
        </select>
    </div>
    <div class="form-group my-2">
        <label for="Pengobatan">Pengobatan</label>
        <textarea name="Pengobatan" id="" rows="3" class="form-control border-dark"></textarea>
    </div>
    <div class="form-group my-2">
        <label for="Rencana">Rencana</label>
        <textarea name="Rencana" id="" rows="3" class="form-control border-dark"></textarea>
    </div>
</div>

<div class="row mt-4">
    <div class="col-6">
        <div class="text-center">
            <div class="text-center">Nama Dokter :</div>
            <div class="my-2">
                <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dokter_umum" />
            </div>
        </div>
        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
    </div>
    <div class="col-6">
        <div class="d-flex justify-content-center flex-column gap-2">
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-2">Tanggal</label>
                <input type="date" class="form-control border-dark" name="tgl_city">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-2">Jam</label>
                <input type="time" class="form-control border-dark" name="jam_city">
            </div>
        </div>
    </div>
</div>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI();

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

        $('#diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    // Send search term, limit, and offset
                    return {
                        q: params.term, // Search query
                        limit: 100, // Number of items per page
                        offset: (page - 1) * 100, // Calculate offset based on the page
                    };
                },
                processResults: function(data) {
                    console.log(data)
                    const {
                        items,
                        more
                    } = data.data;

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

        // Handle scroll to load more data
        $('#diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    if (page > 0) { // Check if more pages are available
                        page++; // Increment page
                        $('#diagnosa').select2('open'); // Keep dropdown open
                        $('#diagnosa').select2('data', null); // Clear current data
                    }
                }
            });
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