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
                        <input type="text" class="form-control border-dark" name="nama_ruangan">
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
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25"></select>
                    </div>
                </td>


            </tr>
        </tbody>
    </table>
</div>

</div>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

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
            // minimumInputLength: 0,
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

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
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