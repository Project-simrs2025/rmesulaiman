<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td>
                <h6 class="text-center">LAPORAN TINDAKAN </h6>
            </td>
            <td>
                <div class="form-group">
                    <label for="">NO. REKAM MEDIS :</label>
                    <input type="text" class="form-control border-dark" value="<?= $no_rm; ?>" name="no_rm" disabled>
                </div>
                <div class="form-group">
                    <label for="">NAMA PASIEN :</label>
                    <input type="text" class="form-control border-dark" value="<?= $nama_pasien ?>" name="nama_pasien" disabled>
                </div>
                <div class="form-group">
                    <label for="">Alamat :</label>
                    <input type="text" class="form-control border-dark" name="alamat">
                </div>
                 <div class="form-group">
                    <label for="">Tanggal Lahir :</label>
                    <input type="text" class="form-control border-dark" value="<?= $tanggal_lahir; ?>" name="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label for="">UMUR :</label>
                    <input type="text" class="form-control border-dark" value="" name="umur">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>Diagnosa</div>
                <textarea name="diagnosa" id="" rows="2" class="form-control border-dark"></textarea>
                <div>Tindakan</div>
                <textarea name="tindakan" id="" rows="5" class="form-control border-dark"></textarea>
            </td>
        </tr>
    </table>
</div>

<div class="text-end">
    <div>Dokter Penanggung Jawab Pelayanan</div>
    <div class="my-2">
        <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
    </div>
    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 25%;"></select>
</div>


<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;
        listDokterUmumAPI()

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

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id,
                id_original
            } = e.params.data;

            if (id === '') {
                // Kosongkan QR Code jika pilihan "--pilih--"
                $('#qr_dokter_umum').remove();
            } else {
                QRSignatureAPI(id_original, 'qr_dokter_umum');
            }
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
        $('#dokter_umum').val('').trigger('change');
    }
</script>