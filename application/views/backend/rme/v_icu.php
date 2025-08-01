<div class="row">
    <table class="table table-borderless">
        <tr>
            <td>
                <div class="d-flex">
                    <div class="col-md-3">Tanggal / Hari Perawatan</div> : <?= $tgl_admit ?>
                </div>
                <div class="d-flex">
                    <div class="col-md-3">Nama Pasien</div> : <?= $nama_pasien; ?>
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-md-3">Umur / BB</div> :
                    <div class="mx-1"><?= $umur; ?></div>
                    <div><input type="text" name="bb_badan" class="form-control border-dark w-75" placeholder="berat badan" style="height: 24px;"></div>
                </div>
                <div class="d-flex">
                    <div class="col-md-3">No Rm</div> : <?= $no_rm; ?>
                </div>
                <div class="d-flex">
                    <div class="col-md-3">Status</div> :
                    <div class="mx-1"><input type="text" name="status" class="form-control border-dark" placeholder="status" style="height: 24px;"></div>
                </div>
                <div class="d-flex">
                    <div class="col-md-3">Diagnosa</div> :
                    <div class="mx-1 w-50"><select type="select" name="diagnosa1" class="form-select diagnosa">
                        </select></div>
                </div>
                <div class="d-flex">
                    <div class="col-md-3">Dokter</div> :
                    <div class="mx-1 w-50"><?= $nama_dokter ?></div>
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="row">
    <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/icu.png') ?>"
        style="width:98%; height:500px;" data-input-name="image_drawer_state_image_icu" />
    <input type="hidden" id="image_drawer_state_image_icu" name="image_drawer_state_image_icu"
        value="" />


    <!-- GAMBAR SELANJUTNYA -->

    <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/gambar_ekg.png') ?>"
        style="width:100%; height:250px;" data-input-name="image_drawer_state_image_icu_Ekg" />
    <input type="hidden" id="image_drawer_state_image_icu_Ekg" name="image_drawer_state_image_icu_Ekg"
        value="" />

    <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/gambar_ventilator.png') ?>"
        style="width:100%; height:250px;" data-input-name="image_drawer_state_image_icu_ventilator" />
    <input type="hidden" id="image_drawer_state_image_icu_ventilator" name="image_drawer_state_image_icu_ventilator"
        value="" />

    <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/gambar_balance_cairan.png') ?>"
        style="width:100%; height:250px;" data-input-name="image_drawer_state_image_icu_balance_cairan" />
    <input type="hidden" id="image_drawer_state_image_icu_balance_cairan" name="image_drawer_state_image_icu_balance_cairan"
        value="" />

    <!-- GAMBAR SELANJUTNYA -->

    <div class="text-center"><b>LEMBAR OBSERVASI ICU</b></div>
    <table class="table table-bordered border-dark">
        <tr class="text-center">
            <td class="col"><input type="text" name="lembar_observasi_1" id="" class="w-100"></td>
            <td class="col-3">DINAS PAGI</td>
            <td class="col-3">DINAS SORE</td>
            <td class="col-3">DINAS MALAM</td>
        </tr>
        <tr>
            <td><input type="text" name="lembar_observasi_2" id="" class="w-100"></td>
            <td rowspan="28"><textarea name="textarea_lembar_obserasi_pagi" id="" rows="55" class="w-100"></textarea></td>
            <td rowspan="28"><textarea name="textarea_lembar_obserasi_sore" id="" rows="55" class="w-100"></textarea></td>
            <td rowspan="28"><textarea name="textarea_lembar_obserasi_malam" id="" rows="55" class="w-100"></textarea></td>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <tr>
                <td><input type="text" name="lembar_observasi_<?= $i; ?>" id="" class="w-100"></td>
            </tr>
        <?php endfor; ?>
        <tr>
            <td><b>THERAPY</b></td>
        </tr>
        <tr>
            <td>INJKTIE</td>
        </tr>
        <?php for ($j = 1; $j <= 15; $j++) : ?>
            <tr>
                <td><input type="text" name="lembar_observasi_<?= $j; ?>" id="" class="w-100"></td>
            </tr>
        <?php endfor; ?>
    </table>
</div>

<div class="row">
    Catatan
    <textarea name="catatan_penting" id="" class="form-control border-dark" rows="5"></textarea>
</div>



<script>
    const mode = " <?= $mode; ?>"
    // let dataListPerawatMenyerahkan=[]
    // let dataListPerawatMenerima=[]
    // let dataListPerawatNew=[]
    // let dataListDokter=[]
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });


    function cbCommon(data) {
        populateFormFields(data);
    }

    $(document).ready(function() {
        let page = 1;

        listPerawatNew()

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

                        // Tambahkan opsi default "--pilih--"
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

            // Reset nilai saat awal load
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

    });


    function listPerawatNew() {
        $('.newperawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
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

                    // Sisipkan pilihan "--pilih--" di awal
                    const defaultOption = [{
                        id: '',
                        text: '--pilih--'
                    }];
                    const combinedItems = defaultOption.concat(items);

                    dataDokter = items;

                    return {
                        results: combinedItems,
                        pagination: {
                            more: more,
                        },
                    };
                },
                cache: true,
            }
        });

        // Set nilai default (optional)
        $('.newperawat').val('').trigger('change');
    }
</script>