<!-- rm 21 -->
<div class="row">
    <div class="col-12">

        <table class="table table-bordered border-dark">
            <tbody>
                <tr>
                    <td colspan="3">Yang bertanda tangan dibawah ini,</td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="nama_pasien_keluarga" value="<?= $nama_hub_pasien; ?>"></td>
                </tr>
                <tr>
                    <td>Umur :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="umur_keluarga"></td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="alamat_keluarga" value="<?= $alamat_hub_keluarga; ?>"></td>
                </tr>
                <tr>
                    <td>Hubungan dengan pasien :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="hub_dengan_pasien_keluarga" value="<?= $hub_dengan_pasien;  ?>"></td>
                </tr>
                <tr>
                    <td colspan="3">Dengan ini menyatakan permintaan pendampingan pelayanan kerohanian agama/ kepercayaan
                        <input class="form-control border-dark d-inline w-25 mx-2" type="text" name="nama_agama">
                        kepada <?= $site_title; ?> terhadap pasien;
                    </td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="nama_pasien"></td>
                </tr>
                <tr>
                    <td>No. RM :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="no_rm"></td>
                </tr>
                <tr>
                    <td>Tempat/ Tanggal Lahir :</td>
                    <td colspan="2">
                        <div class="d-flex align-items-center gap-2">
                            <input class="form-control border-dark w-50" type="text" name="alamat"> / <input type="text" class="form-control border-dark w-50" name="tanggal_lahir">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Ruangan :</td>
                    <td colspan="2">
                        <select type="select" name="nama_ruangan_rawat" id="nama_ruangan_rawat" class="form-select ruangan" style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Demikian surat permohonan permintaan pelayanan kerohanian ini saya buat, atas perhatiannya saya ucapkan terima kasih.</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="d-flex gap-2 justify-content-end align-items-center"><?= $city_sign ?>, <input type="date" name="tgl1" value="<?= date('Y-m-d') ?>" class="form-control border-dark w-25"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">Pemohon</td>
                    <td></td>
                    <td colspan="1">Perawat</td>
                </tr>
                <tr>
                    <td colspan="1">
                        <div class="text-center my-2">
                            <img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                style="width: 150px; height:100px" data-input-name="image_drawer_state_image_pemohon" />
                            <input type="hidden" id="image_drawer_state_image_pemohon" name="image_drawer_state_image_pemohon"
                                value="" />
                        </div>
                        <input type="text" name="ttd_pemohon" class="form-control border-dark mt-4" id="">
                    </td>
                    <td></td>
                    <td colspan="1">
                        <div class="d-flex flex-column align-items-center gap-2">
                            <div class="my-2 text-center">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat_pengkaji" />
                            </div>
                            <select type="select" name="list_perawat_pengkaji" id="list_perawat_pengkaji" class="form-select perawat" style="width: 100%;"></select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div>
                            <p class="text-center"><strong>BUKTI TELAH MENDAPATKAN PELAYANAN KEROHANIAN</strong></p>
                            <p>Dengan ini menyatakan telah mendapatkan pendampingan pelayanan kerohanian agama/ kepercayaan
                                <input class="form-control border-dark d-inline w-25 mx-2" type="text" name="agama_pelayanan">
                                di <?= $site_title; ?> oleh:
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nama Rohaniawan :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="nama_rohaniawan"></td>
                </tr>
                <tr>
                    <td>Waktu pelayanan :</td>
                    <td colspan="2"><input class="form-control border-dark" type="text" name="waktu_pelayanan"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="d-flex gap-2 justify-content-end align-items-center"><?= $city_sign ?>, <input type="date" name="tgl2" value="<?= date('Y-m-d') ?>" class="form-control border-dark w-25"></div>
                    </td>
                </tr>
                <tr>
                    <td>Pasien / Keluarga</td>
                    <td>Rohaniawan</td>
                    <td>Saksi: Perawat</td>
                </tr>
                <tr>
                    <td>
                        <div class="text-center my-2">
                            <img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                style="width: 150px; height:100px" data-input-name="image_drawer_state_image_pasien" />
                            <input type="hidden" id="image_drawer_state_image_pasien" name="image_drawer_state_image_pasien"
                                value="" />
                        </div>
                        <input type="text" name="ttd_pasien" class="form-control border-dark mt-4" id="">
                    </td>
                    <td>
                        <div class="text-center my-2">
                            <img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                style="width: 150px; height:100px" data-input-name="image_drawer_state_image_1" />
                            <input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
                                value="" />
                        </div>
                        <input type="text" name="ttd_rohaniawan" class="form-control border-dark mt-4" id="">
                    </td>
                    <td class="col-4">
                        <div class="d-flex flex-column align-items-center gap-2">
                            <div class="my-2 text-center">
                                <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat" />
                            </div>
                            <select type="select" name="list_perawat" id="list_perawat" class="form-select perawat" style="width: 100%;"></select>
                        </div>
                    </td>
                </tr>
            </tbody>
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