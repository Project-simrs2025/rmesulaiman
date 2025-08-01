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
                        <div class="d-flex flex-column gap-1">
                            <div>
                                <div>Tanggal lahir </div>
                                <input type="text" name="tanggal_lahir" class="form-control border-dark">
                            </div>
                            <div>
                                <div>Umur </div>
                                <input type="text" name="umur" class="form-control border-dark">
                            </div>
                            <div>
                                <div>Jenis Kelamin </div>
                                <input type="text" name="jenkel" class="form-control border-dark">
                            </div>
                            <div>
                                <div>Tanggal Masuk</div>
                                <input type="text" name="tgl_admit" class="form-control border-dark">
                            </div>
                            <div>
                                <div>Nama DPJP</div>
                                <select type="select" name="dokter_jaga" id="dokter_jaga" class="form-select dokter" style="width: 100%;"></select>
                            </div>
                            <div>
                                <div>Nama PPJP</div>
                                <select type="select" name="perawat_jaga" id="perawat_jaga" class="form-select perawat" style="width: 100%;"></select>
                            </div>
                            <div>
                                <div>Nilai pribai</div>
                                <input type="text" name="nilai_pribadi" class="form-control border-dark">
                            </div>
                        </div>

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

            <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter" style="width: 30%;"></select>
        </div>
    </div>
</div>
<!-- BATAS GANTI FORM -->


<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

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
        }, 1000)

    }

    $(document).ready(function() {
        let page = 1;


        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;


        const select2Configs = [{
                selector: '.diagnosa',
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>'
            },
            {
                selector: '.poli',
                url: '<?= site_url('backend/admission/getPoli'); ?>'
            },
            {
                selector: '.ruangan',
                url: '<?= site_url('backend/admission/getRuangan'); ?>'
            },
            {
                selector: '.perawat',
                url: '<?= site_url('backend/admission/getKaryawan'); ?>'
            },
            {
                selector: '.dokter',
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>'
            },
        ];

        select2Configs.forEach(({
            selector,
            url
        }) => {
            $(selector).select2({
                ajax: {
                    url: url,
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            limit: 100,
                            offset: (page - 1) * 100,
                        };
                    },
                    processResults: function(data) {
                        const {
                            items,
                            more
                        } = data.data;

                        // Assign ke variabel tertentu jika perlu
                        if (selector === '.perawat') {
                            dataListPerawat = items;
                        } else if (selector === '.dokter') {
                            dataDokter = items;
                        }

                        const defaultOption = [{
                            id: '',
                            text: '--pilih--'
                        }];
                        const combinedItems = defaultOption.concat(items);

                        return {
                            results: combinedItems,
                            pagination: {
                                more: more
                            },
                        };
                    },
                    cache: true,
                },
                placeholder: '--pilih--',
                allowClear: true,
            });

            $(selector).val(null).trigger('change');

            // Infinite scroll handler
            $(selector).on('select2:open', function() {
                $('.select2-results__options').off('scroll').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++;
                        $(selector).select2('data', null); // Optional
                    }
                });
            });
        });


        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });


        //================ new =====================//
    });
</script>