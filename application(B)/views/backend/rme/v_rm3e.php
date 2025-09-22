<div class="row">
    <div class="col-12 my-3">
        <?php

        $dataform1 = array(
            array('nama' => "Nama Pasien", 'tipe' => "text", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled", 'name' => 'nama_pasien'),
            array('nama' => "Tanggal Lahir", 'name' => "tgl_lahir", 'tipe' => "text", 'values' => "$tgl_lahir", 'holder' => "Tanggal Lahir", 'status' => "disabled"),
            array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'holder' => "Masukkan Jenis Kelamin", 'status' => "disabled"),
            array('nama' => "Agama", 'name' => "nama_agama", 'tipe' => "text", 'holder' => "Masukkan Nama Agama", 'status' => "disabled"),
            array('nama' => "Suku Bangsa", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Suku", 'status' => "", 'name' => 'nama_suku'),
            array('nama' => "No.Rm", 'tipe' => "text", 'values' => "$no_rm", 'holder' => "Masukkan Nama Suku", 'status' => "disabled", 'name' => 'no_rm'),
        );
        foreach ($dataform1 as $a) {
            echo "<div class='form-group mt-3'>";
            echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
            echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>";
        }
        ?>

    </div>

    <div class="row my-4">
        <table class="table-bordered border-dark">
            <thead>
                <th>
                    <h3 class="text-uppercase text-white bg-secondary text-center">penolakan pengobatan</h3>
                </th>
            </thead>
            <tbody>
                <td class="p-3">
                    <div class="main-persetujuan d-flex align-items-center flex-wrap  gap-2">

                        <label for="">Yang bertanda tangan di bawah ini, saya, nama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien" disabled>
                        <label for="">umur </label>
                        <input type="text" class="form-control border-dark w-25 my-1" name="umur" disabled>
                        <label for=""><input type="text" class="form-control border-dark" name="jenkel" disabled></label>
                        <label for="" class="">alamat </label>
                        <input type="text" class="form-control border-dark w-25 my-1" name="alamat" disabled> <label for="" class="mx-1">dengan ini menyatakan PENOLAKAN PENGOBATAN </label><input type="text" class="form-control border-dark w-50 my-1" name="penolakan_pengobatan"> <label for="" class="mx-1">terhadap saya / </label>
                        <label for="" class="mx-1">saya* bernama </label><input type="text" class="form-control border-dark w-25 my-1" name="nama_pasien_yang_menemani">, umur <input type="text" class="form-control border-dark w-25 my-1" name="umur_yang_menemani"> <input type="text" class="form-control border-dark w-25" name="jenkel_yang_menemani">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control border-dark w-25 my-1" name="alamat_yang_menemani" value="<?= $alamat_hub_pasien ?>">
                    </div>

                    <div class="mt-3">
                        <span>Saya memahami perlunya dan manfaat pengobatan tersebut sebagaimana telah dijelaskan seperti di atas kepada saya, termasuk risiko dan komplikasi yang mungkin timbul.
                            Saya bertanggungjawab secara penuh atas segala akibat yang mungkin timbul sebagai akibat tidak dilakukannya pengobatan tersebut.
                        </span>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-2 align-items-center">
                        <label for=""><?= $city_sign ?>,</label> <input type="date" name="tanggal_2" class="form-control border-dark w-25" value="<?= date('Y-m-d'); ?>">
                    </div>


                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="" class="text-center">Disetujui Oleh Pasien :</label>
                                <div class="text-center">
                                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                        style="width: 180px; height:100px" data-input-name="image_drawer_state_image_2" />
                                    <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                                        value="" />
                                </div>
                                <input type="text" class="form-control border-dark mt-2" name="nama_tdd_pasien" placeholder="nama dan tanda tangan pasien" value="<?= $nama_pasien; ?>">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="" class="text-center">Saksi Wali/Keluarga:</label>
                                <div class="text-center">
                                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                        style="width: 180px; height:100px" data-input-name="image_drawer_state_image_3" />
                                    <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
                                        value="" />
                                </div>
                                <input type="text" class="form-control border-dark mt-2" name="nama_tdd_pasien" placeholder="nama dan tanda tangan" value="<?= $nama_hub_pasien; ?>">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-2">
                                <label for="" class="text-center">Saksi Rumah Sakit:</label>
                                <div class="my-2 text-center">
                                    <img class="img-responsive center-block" style="width: 30%;" id="qr_perawat_pengkaji" />
                                </div>
                                <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 100%;"></select>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </td>
            </tbody>
        </table>
    </div>
</div>
<!-- BATAS GANTI -->


<script>
    const mode = "<?= $mode; ?>";
    let dataListPerawat = [];
    let dataDokter = [];

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);


        $('#dokter_pengkaji').prop('disabled', false)
        $('#dokter_pengkaji').select2('open')
        $('#dokter_pengkaji').select2('close')
        if (mode === "lihat")
            $('#dokter_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_pengkaji')
                }
            })
        }, 1000)

        $('#perawat_pengkaji').prop('disabled', false)
        $('#perawat_pengkaji').select2('open')
        $('#perawat_pengkaji').select2('close')
        if (mode === "lihat")
            $('#perawat_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#perawat_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji')
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


        $('#dokter_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_pengkaji')
        });

        $('#perawat_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji')
        });

        //================ new =====================//
    });
</script>