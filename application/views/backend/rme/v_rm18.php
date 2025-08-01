<!-- Rm 18 -->

<div class="row my-4">
    <div class="col-12">
        <div class="form-group">
            <label for="">NO. REKAM MEDIS :</label>
            <input type="text" class="form-control border-dark" value="<?= $no_rm; ?>" name="no_rm" disabled>
        </div>
        <div class="form-group">
            <label for="">NAMA PASIEN :</label>
            <input type="text" class="form-control border-dark" value="<?= $nama_pasien ?>" name="nama_pasien" disabled>
        </div>
        <div class="form-group">
            <label for="">TGL LAHIR :</label>
            <input type="text" class="form-control border-dark" value="<?= $tgl_lahir; ?>" name="tgl_lahir" disabled>
        </div>
        <div class="form-group">
            <label for="">RUANGAN :</label>
            <select type="select" name="ruangan_operasi" id="ruangan_operasi" class="form-select ruangan"
                style="width: 100%;"></select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="d-block fst-italic">
            <span>Petunjuk Pengisian :</span>
            <span>Diisi oleh perawat ruangan dan perawat IBS</span>
            <span>Isi kolom dengan tulisan yang bisa dibaca dengan jelas</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td class="col-6">
                        <label for="">Diagnosa :</label>
                        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa">
                    </td>
                    <td colspan="2"><label for="">Rencana Operasi :</label>
                        <input type="text" class="form-control border-dark" name="rencana_operasi">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Nama Dokter Bedah :</label>
                        <select type="select" name="dokter_bedah" id="dokter_bedah" class="form-select dokter"
                            style="width: 100%;"></select>
                    </td>
                    <td colspan="2"><label for="">Nama Dokter Anastesi :</label>
                        <select type="select" name="dokter_anestesi" id="dokter_anestesi" class="form-select dokter"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Operasi :</label>
                        <input type="date" class="form-control border-dark" onclick="this.showPicker()" value="<?= date('Y-m-d') ?>" name="tanggal_ope1">
                    </td>
                    <td><label for="">Jam Operasi :</label>
                        <input type="time" class="form-control border-dark" value="<?= date('H:i') ?>" name="jam_ope1">
                    </td>
                    <td>
                        <label for="">Jenis Operasi (Emergency Efektif) :</label>
                        <input type="text" class="form-control border-dark" name="jenis_operasi">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Penjadwalan :</label>
                        <input type="date" class="form-control border-dark" onclick="this.showPicker()" value="<?= date('Y-m-d') ?>" name="tanggal_ope1">
                    </td>
                    <td colspan="2"><label for="">Jam Penjadwalan :</label>
                        <input type="time" class="form-control border-dark" value="<?= date('H:i') ?>" name="jam_ope2">
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><label for="">Nama Dan Tanda Tangan Petugas Penjadwalan :</label>

                        <div class="my-2">
                            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_petugas_penjadwalan" />
                        </div>
                        <select type="select" name="petugas_penjadwalan" id="petugas_penjadwalan" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                    <td colspan="2" class="text-center"><label for="">Nama dan tanda tangan petugas IBS yang menerima penjadwalan :</label>
                        <div class="my-2">
                            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_petugas_ibs" />
                        </div>
                        <select type="select" name="petugas_ibs" id="petugas_ibs" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                </tr>
            </tbody>
        </table>
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


        $('#petugas_ibs').prop('disabled', false)
        $('#petugas_ibs').select2('open')
        $('#petugas_ibs').select2('close')
        if (mode === "lihat")
            $('#petugas_ibs').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#petugas_ibs').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_petugas_ibs')
                }
            })
        }, 1000)

        $('#petugas_penjadwalan').prop('disabled', false)
        $('#petugas_penjadwalan').select2('open')
        $('#petugas_penjadwalan').select2('close')
        if (mode === "lihat")
            $('#petugas_penjadwalan').prop('disabled', true)

        setTimeout(() => {
            dataListPerawat?.map(v => {
                if (v.text === $('#petugas_penjadwalan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_petugas_penjadwalan')
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
                url: '<?= site_url('backend/admission/getKaryawan'); ?>'
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


        $('#petugas_ibs').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_petugas_ibs')
        });

        $('#petugas_penjadwalan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_petugas_penjadwalan')
        });

        //================ new =====================//
    });
</script>