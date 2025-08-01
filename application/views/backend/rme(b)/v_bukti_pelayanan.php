<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td>
                <div class="kop-keterangan mb-3">
                    <div>(Mohon di isi dengan lengkap digunakan sebagai lampiran tagihan RS)</div>
                    <div>Telah dilakukan Pemerikasaan / perawatan terhadap pasien :</div>
                </div>

                <div class="isi">
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">Nama </label>
                            <span class="mx-2">:</span><input type="text" name="nama_pasien" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">Umur </label>
                            <span class="mx-2">:</span><input type="text" name="umur" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">No Kartu Peserta </label>
                            <span class="mx-2">:</span><input type="text" name="no_bpjs" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 ">
                            <label for="" class="col-3">Jenis Pelayanan </label>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <span class="ms-2 me-3">:</span>
                                <input type="checkbox" name="rw_jalan" id="rw_jalan" class="custom-checkbox-success">
                                <label for="rw_jalan">Rawat Jalan</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="rw_Inap" id="rw_Inap" class="custom-checkbox-success">
                                <label for="rw_Inap">Rawat Inap</label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">Tanggal Pemeriksaan Perawatan </label>
                            <span class="mx-2">:</span><input type="text" name="tgl_admit" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">Poli / Ruang </label>
                            <span class="mx-2">:</span><input type="text" name="nama_poli" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">Dokter Yang Merawat </label>
                            <span class="mx-2">:</span>
                            <input type="text" name="nama_dokter" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">Diagnosa (tulisan dokter yang merawat) </label>
                            <span class="mx-2">:</span><input type="text" name="yg_merawat" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-3">Kontrol Kembali Ke RS Tanggal </label>
                            <span class="mx-2">:</span><input type="date" name="kontrol_kembali" id="" class="form-control border-dark">
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-6 text-center">
                            <div>Dokter Yang Merawat</div>
                            <div class="my-2">
                                <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_dokter_dpjp" />
                            </div>
                            <input type="text" name="nama_dokter" id="" class="form-control border-dark" style="width: 100%;">
                        </div>

                        <div class="col-6 text-center">
                            <div>Pasien / Keluarga</div>
                            <div class="">
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width: 300px; height:200px;" data-input-name="image_drawer_state_image_11" />
                                <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                                    value="" />
                                     <input type="text" name="nama_hub_pasien" class="form-control border-dark">
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>


<script>
    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI();

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
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