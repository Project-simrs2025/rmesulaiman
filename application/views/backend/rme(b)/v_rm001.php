<div class="row">
    <div class="d-flex align-items-end justify-content-end">
        <div class="d-flex align-items-center gap-2">
            <label for="" class="flex-shrink-0">No Rm</label>
            <input type="text" name="no_rm" id="" class="form-control border-dark">
        </div>
    </div>

    <div class="mt-3">
        <div class="d-flex flex-column gap-2">
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Nama Pasien</label>
                <span>:</span>
                <input type="text" name="nama_pasien" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Tanggal Lahir</label>
                <span>:</span>
                <input type="text" name="tanggal_lahir" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Umur</label>
                <span>:</span>
                <input type="text" name="umur" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Jenis Kelamin</label>
                <span>:</span>
                <input type="text" name="jenkel" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Pekerjaan</label>
                <span>:</span>
                <input type="text" name="nama_pekerjaan" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Pendidikan</label>
                <span>:</span>
                <input type="text" name="pendidikan_terakhir" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="col-3">
                    <label for="">Status Perkawinan</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span>:</span>
                    <input type="checkbox" name="tdk_kawin" id="tdk_kawin" class="custom-checkbox-success">
                    <label for="tdk_kawin">tidak kawin</label>
                </div>
                <div class="d-flex align-items-center gap-2 col-1">
                    <input type="checkbox" name="kawin" id="kawin" class="custom-checkbox-success">
                    <label for="kawin">kawin</label>
                </div>
                <div class="d-flex align-items-center gap-2 col-1">
                    <input type="checkbox" name="Duda" id="Duda" class="custom-checkbox-success">
                    <label for="Duda">Duda</label>
                </div>
                <div class="d-flex align-items-center gap-2 col-1">
                    <input type="checkbox" name="Janda" id="Janda" class="custom-checkbox-success">
                    <label for="Janda">Janda</label>
                </div>
            </div>


            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Alamat</label>
                <span>:</span>
                <input type="text" name="alamat" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Telp./ HP</label>
                <span>:</span>
                <input type="text" name="telp_hub_pasien" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Nama keluarga Pasien</label>
                <span>:</span>
                <input type="text" name="nama_hub_pasien" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Hubungan dengan Pasien</label>
                <span>:</span>
                <input type="text" name="hub_keluarga_pasien" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Alamat</label>
                <span>:</span>
                <input type="text" name="alamat_hub_pasien" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Telp/Hp</label>
                <span>:</span>
                <input type="text" name="telp_hub_pasien" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Tanggal masuk / Jam Tiba Rs</label>
                <span>:</span>
                <input type="text" name="tgl_admit" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Suku / agama</label>
                <span>:</span>
                <input type="text" name="spesifik_rohani" class="form-control border-dark" value="<?= $nama_suku . ' / ' . $nama_agama ?>" disabled>
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Bangsa</label>
                <span>:</span>
                <input type="text" name="nama_bangsa" class="form-control border-dark">
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Nama Dokter IGD</label>
                <span>:</span>
                <input type="text" name="nama_dokter" id="dokter_igd" class="form-control border-dark" style="width: 100%;"></select>
            </div>
            <div class="d-flex align-items-center gap-2">
                <label for="" class="col-3">Nama Dokter Merawat</label>
                <span>:</span>
                <select type="select" name="dokter_yg_merawat" id="dokter_yg_merawat" class="form-select dokter" style="width: 100%;"></select>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between mt-5">
    <div class="d-flex flex-column col-6">
        <div class="text-center">Pasien / keluarga pasien</div>
        <div class="text-center my-2">
            <img class="marker-image border border-dark" id="example-image"
                src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                style="width:150px; height:100px;"
                data-input-name="image_drawer_state_image_11" />
        </div>
        <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
            value="" />
        <div><input type="text" name="nama_hub_pasien" class="form-control border-dark" placeholder="Tanda Tangan dan Nama"></div>
    </div>
    <div class="d-flex flex-column col-6">
        <div class="text-center">Petugas</div>
        <div class="text-center my-2">
            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat" />
        </div>
        <select type="select" name="petugas_perawat" id="perawat" class="form-select perawat"></select>
    </div>
</div>



<script>
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()
        listPerawatAPI()

        $('#dokter_igd').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_igd')
        });
        $('#perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat')
        });
    });

    function cbCommon(data) {
        populateFormFields(data);

        $('#dokter_igd').prop('disabled', false)
        $('#dokter_igd').select2('open')
        $('#dokter_igd').select2('close')
        if (mode === "lihat")
            $('#dokter_igd').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_igd').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_igd')
                }
            })
        }, 1000)

        $('#perawat').prop('disabled', false)
        $('#perawat').select2('open')
        $('#perawat').select2('close')
        if (mode === "lihat")
            $('#perawat').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat')
                }
            })
        }, 1000)
    }

    function listDokterUmumAPI() {
        $('.dokter').select2({
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

    function listPerawatAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/6'); ?>',
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
                    dataPerawat = items
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