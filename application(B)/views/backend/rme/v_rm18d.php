<!-- 18 d -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td>
                        <div class="text-center">
                            <img src="<?= $images; ?>" alt="" style="width: 120px;">
                        </div>
                        <div class="text-center d-flex flex-column mt-5">
                            <h4><?= $site_title; ?></h4>
                            <span><?= wordwrap($lokasi, 70, "<br/>", false); ?>
                                <?php echo $newtext; ?></span>
                        </div>
                    </td>


                    <td class="col-6">
                        <div class="form-group">
                            <label for="">Nama Pasien :</label>
                            <input type="text" class="form-control border-dark" name="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin :</label>
                            <input type="text" class="form-control border-dark" name="jenkel">
                        </div>
                        <div class="form-group">
                            <label for="">Umur :</label>
                            <input type="text" class="form-control border-dark" name="umur">
                        </div>
                        <div class="form-group">
                            <label for="">NO. RM :</label>
                            <input type="text" class="form-control border-dark" name="no_rm">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">

    <table class="table table-bordered border-dark mt-3">
        <tbody>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="">Ruangan :</label>
                        <select type="select" name="pilih_ruangan" id="pilih_ruangan" class="form-select ruangan">
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="">Tanggal :</label>
                        <input type="date" onclick="this.showPicker()" class="form-control border-dark" value="<?= date('Y-m-d'); ?>">
                        <label for="" class="text-center">Jam</label>
                        <input type="time" class="form-control border-dark" value="<?= date('H:i') ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="">Diagnosis Pra Operasi :</label>
                        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa">
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="">Timing Tindakan :</label>
                        <input type="text" class="form-control border-dark" name="timing_tindakan">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label for="">Indikasi Tindakan :</label>
                        <input type="text" class="form-control border-dark" name="indikasi_tindakan">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label for="">Prosedur :</label>
                        <input type="text" class="form-control border-dark" name="prosedur">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label for="">Alternatif Lain :</label>
                        <input type="text" class="form-control border-dark" name="alternatif_lain">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Resiko/komplikasi dan kemungkinan perdarahan intra operasi :</label>
                    <textarea name="resiko_komplikasi" id="" rows="5" class="form-control border-dark"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Pemantauan khusus pasca tindakan :</label>
                    <textarea name="pemantauan_khusus" id="" rows="5" class="form-control border-dark"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="d-flex gap-2 flex-column justify-content-end align-items-end">
                        <label for="">Dokter Penanggung Jawab Pasien,</label>
                        <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25 dokter"></select>
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
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>'
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
    }
</script>