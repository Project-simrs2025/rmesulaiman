<!-- rm 23 -->
<div class="row">
    <div class="col-12">

        <p>Yang bertanda tangan di bawah ini saya,</p>
        <table class="table table-bordered border-dark">
            <tr>
                <td>Nama :</td>
                <td colspan="2"><input type="text" name="nama_pasien" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>Tgl lahir :</td>
                <td colspan="2"><input type="date" name="tanggal_lahir" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td colspan="2"><input type="text" name="alamat" class="form-control border-dark"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>
                        dengan ini menyatakan permintaan untuk mendapat <em>second opinion </em>atas:
                        <textarea type="text" name="second_opinion" class="form-control border-dark"></textarea>
                    </p>
                    <ul>
                        <li>
                            Saya memahami perlunya dan manfaat <em>second opinion </em>tersebut
                            sebagaimana telah dijelaskan kepada saya
                        </li>
                        <li>
                            Saya telah mendapat kesempatan untuk bertanya dan telah mendapat jawaban
                            yang memuaskan
                        </li>
                        <li>
                            Saya juga menyadari bahwa oleh karena ilmu kedokteran bukanlah ilmu pasti
                            dan selalu berkembang, maka perbedaan pendapat ahli adalah biasa terjadi
                            dalam dunia kedokteran
                        </li>
                        <li>
                            Saya menyadari beban biaya <em>second opinion</em> menjadi tanggung jawab
                            saya
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex gap-2 align-items-center justify-content-end"><label for="" class="flex-shrink-0"><?= $city_sign ?></label>, <input type="date" class="form-control border-dark w-25" value="<?= date('Y-m-d') ?>"></div>
                </td>
            </tr>
            <tr>
                <td>Petugas</td>
                <td></td>
                <td align="right">(Pasien/Wali*)</td>
            </tr>
            <tr>
                <td class="col-md-6">
                    <div class="d-flex flex-column align-items-center gap-2">
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat" />
                        </div>
                        <select type="select" name="list_perawat" id="list_perawat" class="form-select perawat" style="width: 100%;"></select>
                    </div>
                </td>
                <td></td>
                <td align="right">
                    <div class=" my-2">
                        <img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                            style="width: 150px; height:100px" data-input-name="image_drawer_state_image_1" />
                        <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                            value="" />
                    </div>
                    <input type="text" name="pemohon" class="form-control border-dark w-100">
                </td>
            </tr>
        </table>
        <p>
            * Bila pasien tidak kompeten atau tidak mau menerima informasi, maka wali
            atau seseorang yang diberi hak untuk menyetujui.
        </p>
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