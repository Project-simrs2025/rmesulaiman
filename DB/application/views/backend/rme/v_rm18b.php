<table class="table table-borderless ">
    <tr>
        <td></td>
        <td>
            <p><strong>No. RM : <input type="text" class="form-control border-dark" name="no-rm" value="RM 18 B" disabled></strong></p>
            <p><strong>Nama : <input type="text" class="form-control border-dark" name="nama_pasien" disabled></strong></p>
            <p><strong>Tgl Lahir : <input type="text" class="form-control border-dark" name="tanggal_lahir" disabled></strong></p>
            <p></p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p><strong>FORMULIR PENANDAAN LOKASI OPERASI (WANITA)</strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <div class="d-flex align-items-center gap-2">

                <label for="" class="flex-shrink-0">Ruangan :</label>
                <input type="text" class="form-control border-dark border-dark" name="nama_ruangan">

                <label for="" class="flex-shrink-0">Tanggal :</label>
                <input type="date" class="form-control border-dark border-dark" name="18c_tanggal" value="<?= date('Y-m-d') ?>">

                <label for="" class="flex-shrink-0">Waktu :</label>
                <input type="time" class="form-control border-dark border-dark" name="18c_waktu">
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>Jenis Operasi : <input type="text" class="form-control border-dark" name="18b_jenis_operasi"></p>
        </td>
    </tr>
    <tr>
        <td rowspan="3">
            <p>
                <img class="marker-image" id="setting_img" src="<?= base_url('assets/images/rme/rm18bc/rm18bc_gambar (7).jpeg') ?>" style="width: 600px;height:430px;" data-input-name="image_drawer_state_image_7" />
                <input type="hidden" id="image_drawer_state_image_7" name="image_drawer_state_image_7" value="" />
            </p>
        </td>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets/images/rme/rm18bc/rm18bc_gambar (1).png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_8" />
                <input type="hidden" id="image_drawer_state_image_8" name="image_drawer_state_image_8" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets/images/rme/rm18bc/rm18bc_gambar (4).png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_9" />
                <input type="hidden" id="image_drawer_state_image_9" name="image_drawer_state_image_9" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets/images/rme/rm18bc/rm18bc_gambar (5).png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_10" />
                <input type="hidden" id="image_drawer_state_image_10" name="image_drawer_state_image_10" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets/images/rme/rm18bc/rm18bc_gambar (6).png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_11" />
                <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11" value="" />
            </p>
        </td>
        <td colspan="2">
            <p>
                <img class="marker-image" id="example-image" src="<?= base_url('assets/images/rme/rm18bc/rm18bc_gambar (2).png') ?>" style="max-width: 600px" data-input-name="image_drawer_state_image_12" />
                <input type="hidden" id="image_drawer_state_image_12" name="image_drawer_state_image_12" value="" />
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>
                Saya menyatakan bahwa lokasi operasi yang telah ditetapkan pada diagram
                adalah benar.
            </p>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column" style="gap: 20px">
                    <p>
                        Nama Pasien/Keluarga
                    </p>
                    <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width: 350px; height:200px;" data-input-name="image_drawer_state_image_2_tdd" />
                    <input type="hidden" id="image_drawer_state_image_2_tdd" name="image_drawer_state_image_2_tdd"
                        value="" />
                    <input type="text" class="form-control border-dark" name="18b_nama_pasien_keluarga">
                </div>
                <div class=" col-4 d-flex flex-column gap-4 align-items-end">
                    <p>dokter Operator</p>
                    <img class="img-responsive center-block mt-2" style="width: 52%;" id="qr_dokter_umum" />
                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
                </div>
            </div>
            <p>Tanda tangan dan nama lengkap Tanda tangan dan nama lengkap</p>
        </td>
    </tr>
</table>

<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

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