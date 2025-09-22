<div class="row">
    <div>Saya yang bertanda tangan dibawah ini :</div>
    <div class="d-flex flex-column gap-2 mt-2">
        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Nama</label>
            <input type="text" name="nama_hub_penanggung_pasien" id="" class="form-control border-dark" value="<?= $nama_hub_pasien ?>">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Umur</label>
            <input type="text" name="umur_penanggung_pasien" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="jenkel_penanggung_pasien" class="col-md-2">Jenis Kelamin</label>
            <select name="jenkel_penanggung_pasien" id="jenkel_penanggung_pasien" class="form-control border-dark">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Alamat</label>
            <input type="text" name="alamat_hub_penanggung_pasien" id="" class="form-control border-dark" value="<?= $alamat_hub_pasien; ?>">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Bukti diri/ KTP</label>
            <input type="text" name="bukti_diri_penanggung_pasien" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2 flex-wrap">
            <div class="flex-shrink-0">Mengajukan permohonan untuk naik kelas perawatan dari ruang perawatan </div>
            <input type="text" name="kelas" id="" class="form-control border-dark" style="width: 110px;">
            <div class="flex-shrink-0">ke ruang perawatan kelas</div>
            <input type="text" name="ruang_rawat_kelas" id="" class="form-control border-dark" style="width: 110px;"> Terhadap <select name="yang_dirawat" id="yang_dirawat" class="form-control border-dark" style="width: 170px;">
                <option value="">-- Pilih --</option>
                <option value="dirawat_saya">Diri saya sendiri</option>
                <option value="dirawat_istri">Istri</option>
                <option value="dirawat_suami">Suami</option>
                <option value="dirawat_anak">Anak</option>
                <option value="dirawat_ibu">Ibu</option>
                <option value="dirawat_bapak">Bapak</option>
            </select> saya dengan
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Nama</label>
            <input type="text" name="nama_pasien" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Umur</label>
            <input type="text" name="umur" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Kelamin</label>
            <input type="text" name="jenkel" id="" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Nomor RM</label>
            <input type="text" name="no_rm" id="" class="form-control border-dark">
        </div>


        <div>
            Demikian surat permohonan ini saya sampaikan kepada Bapak/ Ibu, atas perhatiannya saya sampaikan terima kasih
        </div>

        <div class="d-flex justify-content-end align-items-center gap-2">
            <div><?= $city_sign ?>,</div>
            <input type="date" name="tanggal_dinyatakan" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d') ?>">
        </div>


        <div class="d-flex justify-content-end align-items-end flex-column gap-2">
            <div class="text-end">Yang Membuat permohonan</div>
            <div class="my-2 text-end">
                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                    style="width: 150px; height:100px" data-input-name="image_drawer_state_image_persetujuan" />
                <input type="hidden" id="image_drawer_state_image_persetujuan" name="image_drawer_state_image_persetujuan"
                    value="" />
            </div>
            <input type="text" name="nama_hub_pasien_ttd" class="form-control border-dark w-25" placeholder="nama hubungan pasien" value="<?= $nama_hub_pasien ?>">
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