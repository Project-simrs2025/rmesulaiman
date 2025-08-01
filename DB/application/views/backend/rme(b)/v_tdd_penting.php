<!-- tdd penting -->
<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td colspan="2" class="col-2">
                <div class="text-center"><?= $city_sign; ?>,</div>
                <div class="d-flex gap-2 align-items-center justify-content-center">
                    <label for="">Tgl</label>
                    <input type="date" class="w-50 form-control border-dark" value="<?= date('Y-m-d'); ?>"
                        name="tanggal_1_tb3">

                    <label for="">Jam</label>
                    <input type="time" class="w-50 form-control border-dark" value="<?= date('H:i') ?>"
                        name="waktu_1_tb3">
                </div>
                <div class="text-center ">
                    <span>Tanda tangan Dokter DPJP</span>
                </div>
                <div class="text-center">
                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_dpjp" />
                </div>
                <div class="mt-2 d-flex gap-2 align-items-center">
                    <label for="" class="flex-shrink-0">Nama :</label>
                    <input type="text" name="nama_dokter" class="form-control border-dark">
                </div>
            </td>
            <td colspan="2" class="col-2">
                <div class="text-center"><?= $city_sign; ?>,</div>
                <div class="d-flex gap-2 align-items-center justify-content-center">
                    <label for="">Tgl</label>
                    <input type="date" class="w-50 form-control border-dark" value="<?= date('Y-m-d'); ?>"
                        name="tanggal_2_tb3">
                    <label for="">Jam</label>
                    <input type="time" class="w-50 form-control border-dark" value="<?= date('H:i') ?>"
                        name="waktu_2_tb3">
                </div>
                <div class="text-center">
                    <span>Tanda perawat(bila ada)</span>
                </div>
                <div class="d-flex flex-column gap-2 align-items-center">

                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat" />
                    <select type="select" name="list_perawat" id="list_perawat" class="form-select"
                        style="width: 100%;"></select>
                </div>
                <div class="text-center">
                    <span>Tanda tangan Dokter Umum (bila ada)</span>
                </div>
                <div class="d-flex flex-column gap-2 align-items-center">

                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
                        style="width: 100%;"></select>
                </div>
            </td>
            <td colspan="2" class="col-2">
                <div class="text-center"><?= $city_sign; ?>,</div>
                <div class="d-flex gap-2 align-items-center justify-content-center">
                    <label for="">Tgl</label>
                    <input type="date" class="w-50 form-control border-dark" value="<?= date('Y-m-d'); ?>"
                        name="tanggal_3_tb3">
                    <label for="">Jam</label>
                    <input type="time" value="<?= date('H:i'); ?>" class="w-50 form-control border-dark"
                        name="waktu_3_tb3">
                </div>
                <div class="text-center">
                    <span>Tanda tangan Perawat</span>
                </div>
                <div class="d-flex flex-column align-items-center gap-2">
                    <img class="img-responsive center-block " style="width: 20%;" id="qr_perawat" />
                    <input type="text" name="nama_perawat_form" id="nama_perawat_form" class="form-control border-dark">
                    <input type="hidden" name="id_perawat_form" id="id_perawat_form">
                </div>
            </td>
        </tr>
    </table>
    <div class="text-end">
        <label for="">Tanda Tangan Pasien</label>
    </div>
    <div class="d-flex justify-content-end my-3" style="height: 250px;">
        <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
            style="max-width: 300px" data-input-name="image_drawer_state_image_11" />
        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
            value="" />
    </div>

</div>

</div>

<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {

        populateFormFields(data);

        $('#list_perawat').prop('disabled', false)
        $('#list_perawat').select2('open')
        $('#list_perawat').select2('close')
        if (mode === "lihat")
            $('#list_perawat').prop('disabled', true)

        setTimeout(() => {
            console.log(dataListPerawat)
            dataListPerawat?.map(v => {
                if (v.text === $('#list_perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_list_perawat')
                }
            })
        }, 500)
        // batas list_perawat


        // dokter umum
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
        }, 500)
        // batas list dokter umum
    }



    // FUNCTION PERAWAT LIST
    function listPerawatAPI() {
        $('#list_perawat').select2({
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
                    dataListPerawat = items
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
    // BATAS

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
    // batas

    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        $('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat)
        $('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat)
        $('#nama_perawat_form').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat')

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        // dokter list
        listDokterUmumAPI()


        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

        // perawat list
        listPerawatAPI()

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#list_perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_list_perawat')
        });


    })
</script>