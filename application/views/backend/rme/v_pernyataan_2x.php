<div class="row">
    <div>Yang Bertanda tangan di bawah ini :</div>
    <div class="d-flex flex-column gap-2 mt-2">
        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Nama</label>
            <input type="text" name="nama_hub_penanggung_pasien" id="" class="form-control border-dark" value="<?= $nama_hub_pasien ?>">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir_penanggung" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Status Dalam Kekeluargaan</label>
            <input type="text" name="status_kekeluargaan" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Alamat</label>
            <input type="text" name="alamat_hub_penanggung_pasien" id="" class="form-control border-dark" value="<?= $alamat_hub_pasien; ?>">
        </div>

        <div class="my-2">Bahwa pasien yang dirawat di Rumah Sakit <?= $site_title ?>, yang bernama :</div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Nama</label>
            <input type="text" name="nama_pasien" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Status Dalam Kekeluargaan</label>
            <input type="text" name="status_pasien" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Nomor RM</label>
            <input type="text" name="no_rm" id="" class="form-control border-dark">
        </div>


        <div class="mt-3 d-flex align-items-center gap-2 flex-wrap">
            <div class="flex-shrink-0">Saya menyadari bahwa batas pengurusan berkas </div> <input type="text" name="keterangan_berkas" id="" class="form-control border-dark w-25">
            <div class="flex-shrink-0">adalah 2x24 jam (hari kerja) terhitung dari hari pertama masuk ke Rumah Sakit,</div>
            <div class="flex-shrink-0"> dan batas akhir penyerahan berkas ke pihak <?= $site_title ?> adalah pada tanggal</div>
            <input type="date" name="tanggal_berkas" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d') ?>">
        </div>


        <div class="mt-1 d-flex align-items-center gap-2 flex-wrap">Dan apabila dalam batas waktu yang sudah ditentukan, Keluarga/Pasien tidak dapat melengkapi kelengkapan berkas tersebut, maka Keluarga/Pasien bersedia membayar biaya perawatan selama di rumah sakit sebagai Pasien UMUM sesuai dengan tarif yang berlaku di <?= $lokasi ?>
        </div>

        <div>
            Demikianlah pernyataan ini kami perbuat dengan penuh rasa tanggung jawab dan tanpa ada unsur paksaan dari pihak manapun.
        </div>

        <div class="d-flex justify-content-end align-items-center gap-2">
            <div><?= $city_sign ?>,</div>
            <input type="date" name="tanggal_dinyatakan" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d') ?>">
        </div>


        <div class="row mt-5">
            <div class="col-md-6">
                <div class="text-center">Yang Menyatakan</div>
                <div class="my-2 text-center">
                    <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                        style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan" />
                    <input type="hidden" id="image_drawer_state_image_persetujuan" name="image_drawer_state_image_persetujuan"
                        value="" />
                </div>
                <input type="text" name="nama_hub_pasien_ttd" class="form-control border-dark" placeholder="nama hubungan pasien" value="<?= $nama_hub_pasien ?>">
            </div>
            <div class="col-md-6">
                <div class="text-center">Perawat</div>
                <div class="text-center my-2">
                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_pengkaji" />
                </div>
                <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat w-100"></select>
            </div>
        </div>
    </div>
</div>


<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        $('#kepala_ruangan').prop('disabled', false)
        $('#kepala_ruangan').select2('open')
        $('#kepala_ruangan').select2('close')
        if (mode === "lihat")
            $('#kepala_ruangan').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#kepala_ruangan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_kepala_ruangan')
                }
            })
        }, 1000)


        $('#perawat_pengkaji').prop('disabled', false)
        $('#perawat_pengkaji').select2('open')
        $('#perawat_pengkaji').select2('close')
        if (mode === "lihat")
            $('#perawat_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
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
                url: '<?= site_url('backend/admission/getKaryawan/6'); ?>'
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


        $('#kepala_ruangan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_kepala_ruangan')
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