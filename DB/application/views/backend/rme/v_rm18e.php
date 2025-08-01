<!-- rm 18 e Laporan Operasi-->
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="" class="mb-2">Nama Pasien :</label>
            <input type="text" class="form-control border-dark" name="nama_pasien">
        </div>
        <div class="form-group">
            <label for="" class="mb-2">Ruangan :</label>
            <input type="text" class="form-control border-dark" name="nama_ruangan">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="" class="mb-2">No Rekam Medis :</label>
            <input type="text" class="form-control border-dark" name="no_rm">
        </div>
        <div class="form-group">
            <label for="" class="mb-2">Tanggal Lahir :</label>
            <input type="date" class="form-control border-dark" name="tanggal_lahir">
        </div>
    </div>

    <table class="table table-bordered mt-2" style="border:1px solid black">
        <tbody>
            <tr>
                <td>
                    <label for="">Nama Ahli Bedah :</label>
                    <select type="select" name="dokter_umum1" class="form-select dokter_umum"
                        style="width: 100%;"></select>
                </td>
                <td colspan="2">
                    <label for="">Nama Asistant :</label>
					<select type="select" name="nama_asistant" class="form-select perawat"
                        style="width: 100%;"></select>
                </td>
                <td>
                    <label for="">Nama Perawat :</label>
					<select type="select" name="nama_perawat" class="form-select perawat"
                        style="width: 100%;"></select>
                   
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Nama Ahli Anasthesi :</label>
                    <select type="select" name="dokter_umum2" class="form-select dokter_umum"
                        style="width: 100%;"></select>
                </td>
                <td colspan="2">
                    <label for="">Jenis Anasthesi</label>
                    <input type="text" class="form-control border-dark" name="jenis_anesthesi">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Diagnosis pre- Operatif :</label>
                    <div>
                        <select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa" style="width: 100%;">
                        </select>
                    </div>
                </td>
                <td colspan="2">
                    <label for="">Macam Pembedahan</label>
                    <div class="form-group">
                        <input type="checkbox" name="bedah_besar" id="bedah_besar" class="custom-checkbox-success"> <label for="bedah_besar" class="col-2">Besar</label>
                        <input type="checkbox" name="bedah_elective" id="bedah_elective" class="custom-checkbox-success"> <label for="bedah_elective">Elective</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="bedah_sedang" id="bedah_sedang" class="custom-checkbox-success"> <label for="bedah_sedang" class="col-2">Sedang</label>
                        <input type="checkbox"  name="bedah_emergency" id="bedah_emergency" class="custom-checkbox-success"> <label for="bedah_emergency">Emergency</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="bedah_kecil" id="bedah_kecil" class="custom-checkbox-success"> <label for="bedah_kecil">Kecil</label>
                        <!-- hidden -->
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="d-flex gap-2 align-items-center">
                        <label for="" class="flex-shrink-0">Diagnosis post operatif :</label>
                        <!--				<input type="hidden" id="initialData" disabled>-->
                        <select type="select" name="diagnosa2" id="diagnosa2" class="form-select diagnosa" style="width: 100%;">
                            <!--					<option value="">-- PILIH DIAGNOSA --</option>-->
                        </select>
                    </div>
                </td>
                <td colspan="2">
                    <div class="d-flex gap-2">
                        <input type="checkbox" class="custom-checkbox-success"  name="ya_post" id="ya_post"> <label for="ya_post" class="col-2">Ya</label>
                        <input type="checkbox" class="custom-checkbox-danger" name="tidak_post" id="tidak_post"> <label for="tidak_post">Tidak</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="">Jaringan yang di – Eksisi / Insisi :</label>
                    <textarea name="jaringan_eksisis" id="" rows="4" class="w-100 form-control border-dark"></textarea>
                    <label for="">Nama / Macam Operasi</label>
                    <textarea name="macam_operasi_eksisi" id="" rows="4" class="w-100 form-control border-dark"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tanggal Operasi</label>
                    <input type="date" class="w-100 form-control border-dark" name="tanggal_operasi" value="<?= date('Y-m-d') ?>">
                </td>
                <td>
                    <label for="">Jam Operasi Dimulai :</label>
                    <input type="time" class="w-100 form-control border-dark" value="<?= date('H:i') ?>">
                </td>
                <td>
                    <label for="">Jam Operasi Selesai</label>
                    <input type="time" class="w-100 form-control border-dark" name="jam_operasi_selesai">
                </td>
                <td>
                    <label for="">Lama Operasi Berlangsung</label>
                    <input type="text" class="w-100 form-control border-dark" name="lama_operasi_berlangusung">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="">Laporan</label>
                    <textarea name="laporan" id="" rows="4" class="w-100 form-control border-dark"></textarea>
            </tr>
            <tr>
                <td colspan="4" class="text-center">
                    <div class="d-flex gap-2 flex-column justify-content-end align-items-end">
                        <label for="">Dokter Penanggung Jawab Pasien,</label>
                        <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25 dokter_umum"></select>
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
        let page = 1; // Track the current page
        listDokterUmumAPI()
		listPerawatAPI()

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        // Function to initialize Select2 with infinite scroll and AJAX
        function initializeSelect2(selector) {
            $(selector).select2({
                ajax: {
                    url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                    dataType: 'json',
                    delay: 250, // Delay in ms while typing
                    data: function(params) {
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
                        } = data.data;
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

            $(selector).on('select2:open', function() {
                $('.select2-results__options').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++; // Increment page
                        $(selector).select2('data', null); // Trigger new data fetch
                    }
                });
            });
        }

        // Initialize Select2 for both #diagnosa and #diagnosa2
        initializeSelect2('#diagnosa');
        initializeSelect2('#diagnosa2');

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
        $('.dokter_umum').select2({
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
    // batas
	
	function listPerawatAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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
    // batas
</script>