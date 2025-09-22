<div class="row">
    <div class="col-12">
        <table class="table table-borderless border-dark">

            <tr>
                <td colspan="3">Yang bertanda tangan dibawah ini,</td>
            </tr>
            <tr>
                <td colspan="2">Nama Lengkap: <input type="text" name="nama_pasien_penanggung" class="form-control border-dark" value="<?= $nama_pasien ?>"></td>
            </tr>
            <tr>
                <td colspan="2">Tanggal Lahir: <input type="text" name="tanggal_lahir_penanggung" class="form-control border-dark" value="<?= $tgl_lahir ?>"></td>
            </tr>
            <tr>
                <td colspan="2">Ruangan: <select type="select" name="ruangan_rawat" id="ruangan_rawat" class="form-select ruangan" style="width: 100%;"></select></td>
            </tr>
            <tr>
                <td colspan="3">

                    <div class="form-check">
                        1. Dengan ini menyatakan bahwa saya meminta privasi khusus kepada <?= $site_title; ?> untuk tidak memberi akses bagi pengunjung yang akan menengok /
                        menemui saya ke ruang rawat inap kecuali kerabat saya yang bernama:
                    </div>
                    <div class="ms-4">
                        <ol type="a">
                            <li class="mt-3"><input type="text" name="kerabat_1" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="kerabat_2" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="kerabat_3" class="form-control border-dark"></li>
                            <li class="mt-3">Dll, <input type="text" name="kerabat_lain" class="form-control border-dark"></li>
                        </ol>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="form-check">
                        2. Saya menginginkan / tidak menginginkan privasi khusus saat: *(coret yang
                        tidak perlu):
                    </div>
                    <div class="ms-4">
                        <ol type="a">
                            <li class="mt-3"><input type="text" name="privasi_1" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="privasi_2" class="form-control border-dark"></li>
                            <li class="mt-3"><input type="text" name="privasi_3" class="form-control border-dark"></li>
                            <li class="mt-3">Dll, <input type="text" name="privasi_lain" class="form-control border-dark"></li>
                        </ol>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex align-items-center gap-2 justify-content-end"><?= $city_sign ?>, <input type="date" value="<?= date('Y-m-d') ?>" name="tanggal_akhir" class="form-control border-dark w-25"></div>
                </td>
            </tr>
            <tr>
                <td class="col-4">Pemohon </td>
                <td></td>
                <td align="center" class="col-4">Perawat </td>
            </tr>
            <tr>
                <td>
                    <div class=" my-2">
                        <img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 150px; height:100px" data-input-name="image_drawer_state_image_1" />
                        <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                            value="" />
                    </div>
                    <input type="text" name="pemohon" class="form-control border-dark w-100">
                </td>
                <td></td>
                <td>
                    <div class="d-flex flex-column align-items-center gap-2">
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat" />
                        </div>
                        <select type="select" name="list_perawat" id="list_perawat" class="form-select perawat" style="width: 100%;"></select>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<script>
    let dataDokter = [];
    let dataListPerawat = [];
    let page = 1;
    const mode = "<?= $mode; ?>";

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
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
        ];

        // Inisialisasi select2 umum (selain dokter_umum)
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

                        if (selector === '.perawat') {
                            dataListPerawat = items;
                        }

                        const defaultOption = [{
                            id: '',
                            text: '--pilih--'
                        }];
                        return {
                            results: defaultOption.concat(items),
                            pagination: {
                                more
                            },
                        };
                    },
                    cache: true,
                },
                placeholder: '--pilih--',
                allowClear: true,
            });

            $(selector).val(null).trigger('change');

            $(selector).on('select2:open', function() {
                $('.select2-results__options').off('scroll').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++;
                    }
                });
            });
        });

        // Inisialisasi .dokter dan #dokter_umum
        initSelect2Dokter('.dokter');
        initSelect2Dokter('#dokter_umum', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum');
        });

        $('#list_perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_list_perawat')
        });

        $('#list_perawat_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_list_perawat_pengkaji')
        });
    });

    function initSelect2Dokter(selector, onSelectCallback = null) {
        $(selector).select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
                    dataDokter = items;

                    const results = (selector === '#dokter_umum') ?
                        items : [{
                            id: '',
                            text: '--pilih--'
                        }].concat(items);

                    return {
                        results,
                        pagination: {
                            more
                        },
                    };
                },
                cache: true,
            },
            placeholder: (selector === '#dokter_umum') ? 'Search for items...' : '--pilih--',
            allowClear: true,
        });

        $(selector).val(null).trigger('change');

        $(selector).on('select2:open', function() {
            $('.select2-results__options').off('scroll').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++;
                }
            });
        });

        if (onSelectCallback) {
            $(selector).on('select2:select', onSelectCallback);
        }
    }

    function cbCommon(data) {
        populateFormFields(data);

        $('#dokter_umum').prop('disabled', false).select2('open').select2('close');
        if (mode === "lihat") {
            $('#dokter_umum').prop('disabled', true);
        }
        setTimeout(() => {
            console.log(dataDokter);
            const selectedText = $('#dokter_umum').select2('data')[0]?.text;
            dataDokter?.forEach(v => {
                if (v.text === selectedText) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum');
                }
            });
        }, 1000);


        $('#list_perawat').prop('disabled', false)
        $('#list_perawat').select2('open')
        $('#list_perawat').select2('close')
        if (mode === "lihat")
            $('#list_perawat').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#list_perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_list_perawat')
                }
            })
        }, 1000)

        $('#list_perawat_pengkaji').prop('disabled', false)
        $('#list_perawat_pengkaji').select2('open')
        $('#list_perawat_pengkaji').select2('close')
        if (mode === "lihat")
            $('#list_perawat_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#list_perawat_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_list_perawat_pengkaji')
                }
            })
        }, 1000)

    }
</script>