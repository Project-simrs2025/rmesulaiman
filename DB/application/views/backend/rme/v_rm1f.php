<!-- BATAS GANTI FORM -->


<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td>
                        <?php
                        // Daftar input field
                        $dataform1 = array(
                            array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "$nama_pasien", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled"),
                            array('nama' => "NIK", 'name' => "nik", 'tipe' => "number", 'values' => "$nik", 'holder' => "Masukkan NIK", 'status' => "disabled"),
                            array('nama' => "Pendidikan", 'name' => "pendidikan", 'tipe' => "text", 'values' => "$pendidikan_terakhir", 'holder' => "Masukkan Pendidikan Terakhir", 'status' => "disabled"),
                            array('nama' => "Pekerjaan", 'name' => "pekerjaan", 'tipe' => "text", 'holder' => "Masukkan Pekerjaan", 'status' => "disabled", 'values' => "$nama_pekerjaan"),
                            array('nama' => "No. RM", 'tipe' => "number", 'values' => "$no_rm", 'holder' => "Masukkan No. RM", 'status' => "disabled"),
                        );
                        foreach ($dataform1 as $a) {
                            echo "<div class='form-group mt-3'>";
                            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
                            echo "<span class='help-block text-danger'></span></div>";
                        }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        // Daftar input field
                        $dataform2 = array(
                            array('nama' => "Tanggal Lahir/Umur", 'name' => "tgl_lahir", 'tipe' => "text", 'values' => "$tgl_lahir / $umur", 'holder' => "Masukkan Tanggal Lahir/Umur", 'status' => "disabled"),
                            array('nama' => "Jenis Kelamin", 'tipe' => "text", 'values' => "$jenkel", 'holder' => "Masukkan Jenis Kelamin", 'status' => "disabled"),
                            array('nama' => "Tanggal Masuk", 'tipe' => "text", 'values' => "$tgl_admit2", 'holder' => "Masukkan Tanggal Masuk", 'status' => "disabled"),
                            array('nama' => "Nama DPJP", 'tipe' => "text", 'values' => "$nama_dokter", 'holder' => "Masukkan DPJP", 'status' => "disabled"),
                            array('nama' => "Nama PPJP", 'name' => "nama_perawat", 'tipe' => "text", 'holder' => "Masukkan PPJP", 'values' => ''),
                            array('nama' => "Nilai Pribadi", 'name' => "np", 'tipe' => "text", 'holder' => "Masukkan Nilai Pribadi", 'values' => ""),
                        );

                        foreach ($dataform2 as $b) {

                            echo "<div class='form-group mt-3'>";
                            echo "<label for=''>{$b['nama']} :</label>";
                            echo "<input type='{$b['tipe']}' class='form-control border-dark {$b['name']}' name='{$b['name']}' id='{$b['name']}' placeholder='{$b['holder']}' value='{$b['values']}' {$b['status']}>";
                            echo "<span class='help-block text-danger'></span></div>";
                        }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td><span>( Tempelkan stiker identitas pasien jika tersedia )</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tr>
                <td colspan="2">
                    <label for="">Lembaran Hasil Tindakan Uji Fungsi / Prosedur KFR :</label>
                    <div class="form-group">
                        <input type="text" name="lembarkfr" id="lembarkfr" placeholder="Masukkan Hasil Tindakan Uji Fungsi / Prosedur KFR" class="form-control border-dark my-2 lembarkfr">
                        <span class='help-block text-danger'></span>
                    </div>
                    <span>(koding)</span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nama :</label>
                </td>
                <td>
                    <input type="text" class="form-control border-dark" value="<?php echo $nama_pasien; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td><label for="">Tanggal Lahir / Usia :</label></td>
                <td>
                    <div class="d-flex align-items-center ">
                        <input type="date" class="form-control border-dark me-2" name="tanggal_lahir"> /
                        <input type="text" class="form-control border-dark ms-2" value="<?php echo $umur; ?>" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tanggal Pemeriksaan :</label>
                </td>
                <td>
                    <input type="date" class="form-control border-dark" value="<?php echo date('Y-m-d'); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Diagnosa Fungsional : </label>
                </td>
                <td>
                    <select type="select" name="diagnosa1" class="form-control border-dark border-dark diagnosa"></select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Diagnosa Medis :</label>
                </td>
                <td>
                    <select type="select" name="diagnosa2" class="form-control border-dark border-dark diagnosa">

                </td>
            </tr>


            <tr>
                <td>
                    <div class="d-flex flex-column gap-4">
                        <label for="">Instrumen Uji Fungsi/ Prosedur KFR :</label>
                        <label for="">Hasil Yang Di Dapat :</label>
                        <label for="">Kesimpulan :</label>
                        <label for="">Rekomendasi : </label>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <div>
                            <input type="text" class="form-control border-dark instrumentkfr" name="instrumentkfr" id="instrumentkfr" placeholder="Masukkan Instrumen Uji Fungsi/ Prosedur KFR"><span class='help-block text-danger'></span>
                        </div>
                        <div>
                            <input type="text" class="form-control border-dark hasilkfr" name="hasilkfr" id="hasilkfr" placeholder="Masukkan Hasil KFR"><span class='help-block text-danger'></span>
                        </div>
                        <div>
                            <input type="text" class="form-control border-dark kesimpulan" name="kesimpulan" id="kesimpulan" placeholder="Masukkan Kesimpulan"><span class='help-block text-danger'></span>
                        </div>
                        <div>
                            <input type="text" class="form-control border-dark rekomendasi" name="rekomendasi" id="rekomendasi" placeholder="Masukkan Rekomendasi"><span class='help-block text-danger'></span>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="text-end">
        <span>Tanda Tangan, </span>
        <div>
            <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />

        </div>
        <div class="mt-3">

            <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 30%;"></select>
        </div>
    </div>
</div>
<!-- BATAS GANTI FORM -->


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

    function cbCommon(data) {


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