<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <h6 class="text-center">Formulir Penolakan</h6>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Nomor Rekam Medis </div>
                        <input type="text" name="no_rm" id="" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Nama Pasien</div>
                        <input type="text" name="nama_pasien" id="" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Tgl.lahir / umur</div>
                        <input type="text" name="tgl_lahir/umur" id="" class="form-control border-dark" value="<?= $tgl_lahir . ' / ' . $umur; ?>" disabled>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Jenis Kelamin</div>
                        <input type="text" name="jenkel" id="" class="form-control border-dark">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>Bertanda tangan di bawah ini, saya :</div>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Nama</div>
                            <span>:</span>
                            <input type="text" name="nama_keluarga_hub_pasien" id="" class="form-control border-dark" value="<?=  $nama_hub_pasien; ?>">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Tanggal lahir / umur</div>
                            <span>:</span>
                            <input type="text" name="tgl_umur_keluarg" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">jenis kelamin</div>
                            <span>:</span>
                            <input type="text" name="jenkel_keluarga" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Alamat</div>
                            <span>:</span>
                            <input type="text" name="alamat_hub_pasien" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Hubungan dengan pasien</div>
                            <span>:</span>
                            <input type="text" name="alamat_keluarga" id="" class="form-control border-dark">
                        </div>
                    </div>

                    <div class="mt-3">Dengan ini Menyatakan <span class="fw-bold">PENOLAKAN</span> untuk dilakukan Pengobatan / Tindakan Berupa</div>

                    <div class="mt-3 flex-column">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <div class="d-flex align-items-center gap-2">
                                <input type="text" name="input_penolakan_menyatakan_<?= $i; ?>" class="form-control border-dark">
                            </div>
                        <?php endfor; ?>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div>Pada tanggal</div>
                            <div>
                                <input type="date" name="tgl_operasi_dinyatakan" value="<?= date('Y-m-d'); ?>" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2">Terhadap <input type="text" name="nama_yang_ttd" id="" class="form-control border-dark" placeholder="Saya/Anak/Orang Tua/Istri/Suami"> bernama </div>
                            <div class="col-4"><input type="text" name="nama_pasien_operasi" id="" class="form-control border-dark w-100"></div>
                            <div>Tanggal lahir</div>
                            <div><input type="text" name="tanggal_lahir_operasi" id="" class="form-control border-dark"></div>
                            <div><input type="text" name="jenkel_operasi" class="form-control border-dark" placeholder="jenis-kelamin"></div>
                            <div>alamat</div>
                            <div class="col-5"><input type="text" name="alamat_operasi" class="form-control border-dark"></div>
                            <div>Saya memahami perlunya dan manfaat Tindakan/Pengobatan sebagaimana telah dijelaskan seperti diatas kepada saya, termasuk resiko dan komplikasi lain yang mungkin timbul. Saya juga menyadari bahwa dokter melakukan upaya dan oleh karena ilmu kedokteran bukanlah ilmu pasti, maka keberhasilan tindakan kedokteran bukanlah keniscayaan, melainkan sangat bergantung kepada izin Tuhan Yang Maha Esa.
                            </div>
                        </div>
                    </div>


                    <div class="mt-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0"><?= $city_sign; ?>, </div>
                            <div class="flex-shrink-0">Tanggal / jam</div>
                            <input type="datetime-local" name="tanggal_jam_city" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i'); ?>">
                        </div>

                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="d-flex flex-column gap-2">
                                    <label for="" class="text-center">Pasien / Keluarga pasien:</label>
                                    <div class="text-center">
                                        <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                            style="width: 180px; height:80px" data-input-name="image_drawer_state_image_2" />
                                        <input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
                                            value="" />
                                    </div>
                                    <input type="text" name="nama_ttd_keluarga" id="" class="form-control border-dark" placeholder="masukkan nama Pasien / keluarga" value="<?= $nama_hub_pasien ?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column gap-2">
                                    <label for="" class="text-center">Perawat</label>
                                    <div class="text-center">
                                        <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_perawat" />
                                    </div>
                                    <select type="select" name="perawat" id="perawat" class="form-select perawat" style="width: 100%;"></select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column gap-2">
                                    <label for="" class="text-center">Dokter</label>
                                    <div class="text-center">
                                        <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum" />
                                    </div>
                                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter" style="width: 100%;"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>



<script>
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()
        listPerawatAPI()

        // Initialize Select2
        $('#diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    console.log("params", params)
                    return {
                        q: params.term, // Search query
                        limit: 100, // Number of items per page
                        offset: (page - 1) * 100, // Calculate offset
                    };
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data
                    console.log(items, more)
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

        });

        $('#diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('#diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });



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

        $('#perawat').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat')
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
                url: '<?= site_url('backend/admission/getKaryawan/'); ?>',
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