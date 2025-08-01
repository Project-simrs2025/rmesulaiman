<!-- rm 18bc -->
<table class="table table-borderless border-dark">
    <tr>
        <td>
            <h6 class="fw-bold text-center">FORMULIR PENANDAAN AREA OPERASI (LAKI-LAKI)</h6>
        </td>
        <td>
            <p><strong>No. RM : <input type="text" class="form-control border-dark" name="no_rm" disabled></strong></p>
            <p><strong>Nama : <input type="text" class="form-control border-dark" name="nama_pasien" disabled></strong></p>
            <p><strong>Tgl lahir / Umur : <input type="text" class="form-control border-dark" name="tanggal_lhr" value="<?= $tgl_lahir . ' / ' . $umur ?>" disabled></strong></p>
            <p><strong>Jenkel<input type="text" class="form-control border-dark" name="jenkel" disabled></strong></p>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <div class="d-flex align-items-center gap-2">

                <label for="" class="flex-shrink-0">Tanggal Operasi :</label>
                <input type="date" class="form-control border-dark" name="tgl_operasi" value="<?= date('Y-m-d') ?>">

                <label for="" class="flex-shrink-0">Prosedur Operasi</label>
                <input type="text" class="form-control border-dark" name="prosedur_operasi">

                <label for="" class="flex-shrink-0">Operator :</label>
                <input type="" class="form-control border-dark" name="Operator">
            </div>
        </td>
    </tr>

    <tr>
        <td rowspan="3">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/oplaki.png') ?>" style="width: 600px;height:500px;" data-input-name="image_drawer_state_image_1" />
                <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1" value="" />
            </p>
        </td>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/gambar_head.png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_2" />
                <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/gambar_headBack.png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_3" />
                <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/gambar_BackHand.png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_4" />
                <input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/gambar_Foot.png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_5" />
                <input type="hidden" id="image_drawer_state_image_5" name="image_drawer_state_image_5" value="" />
            </p>
        </td>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/gambar_FrontHand.png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_6" />
                <input type="hidden" id="image_drawer_state_image_6" name="image_drawer_state_image_6" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>
                Saya menyatakan bahwa lokasi operasi yang telah ditetapkan pada diagram
                adalah benar.
            </p>
            <div class="d-flex justify-content-end gap-2 align-items-center gap-2 mb-3">
                <div><?= $city_sign; ?></div>
                <input type="date" name="tgl_city" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d') ?>">
            </div>
            <div class="d-flex justify-content-between mt-4">
                <div class="col-4">
                    <div class="text-center">dokter Operator</div>
                    <div class="my-3 text-center">
                        <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_dokter_umum" />
                    </div>
                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
                </div>
                <div class="col-4">
                    <div class="text-center">
                        Nama Pasien/Keluarga
                    </div>
                    <div class="my-3 text-center">
                        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 180px; height:80px;" data-input-name="image_drawer_state_image_1_tdd" />
                    </div>
                    <input type="hidden" id="image_drawer_state_image_1_tdd" name="image_drawer_state_image_1_tdd"
                        value="" />
                    <input type="text" class="form-control border-dark" name="nama_pasien_keluarga">
                </div>
                <div class="col-4">
                    <div class="text-center">Perawat Penanggung Jawab</div>
                    <div class="my-3 text-center">
                        <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat" />
                    </div>
                    <select type="select" name="perawat" id="perawat" class="form-select" style="width: 100%;"></select>
                </div>

            </div>
        </td>
    </tr>
</table>



<script>
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()
        listPerawatAPI()

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

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
        $('#perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat')
        });
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

        $('#perawat').prop('disabled', false)
        $('#perawat').select2('open')
        $('#perawat').select2('close')
        if (mode === "lihat")
            $('#perawat').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat')
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

    function listPerawatAPI() {
        $('#perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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
                    dataPerawat = items
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