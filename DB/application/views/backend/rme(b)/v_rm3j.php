<!-- BATAS GANTI -->
<div class="row mt-4">
    <div class="col-6">
        <div class="form-group">
            <label for="nama_pasien">Nama Pasien :</label>
            <input type="text" class="form-control border-dark nama_pasien" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Pasien" disabled>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir :</label>
            <input type="date" class="form-control border-dark tanggal_lahir" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" disabled>
        </div>

        <div class="form-group">
            <label for="no_rm">No RM :</label>
            <input type="text" class="form-control border-dark no_rm" name="no_rm" id="no_rm" placeholder="Masukkan Nomor RM" disabled>
        </div>

        <div class="form-group">
            <label for="dokter_jaga">Dokter Jaga :</label>
            <select type="select" name="dokter_umum" class="form-select dokter_umum"
                style="width: 100%;"></select>
        </div>

        <div class="form-group">
            <label for="nama_dokter">DPJP :</label>
            <input type="text" class="form-control border-dark nama_dokter" name="nama_dokter" id="nama_dokter" placeholder="Masukkan Nama DPJP" disabled>
        </div>

        <div class="form-group">
            <label for="">Diagnosa :</label>
            <select type="select" name="diagnosa" class="form-select diagnosa">
            </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">Tangal Masuk :</label>
            <input type="text" class="form-control border-dark" name="tgl_admit" disabled>
        </div>
        <div class="form-group">
            <label for="">Ruangan :</label>
            <input type="text" class="form-control border-dark" name="nama_ruangan" disabled>
        </div>
        <div class="form-group">
            <label for="" class="">Tgl/ Jam Pindah :</label>
            <div class="d-flex align-items-center gap-2">
                <input type="date" class="form-control border-dark" name="tgl_pindah" value="<?= date('Y-m-d'); ?>"> / <input type="time" class="form-control border-dark" name="jam_pindah" value="<?= date('H:i'); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="">Pindah Keruangan :</label>
            <input type="text" class="form-control border-dark" name="pindah_ruangan">
        </div>
        <div class="form-group">
            <label for="">Diagnosa Sekarang :</label>
            <select type="select" name="diagnosa2" class="form-select diagnosa">
            </select>
        </div>
    </div>

    <div class="row">
        <h6 class="my-2 fw-bold">I. PENGKAJIAN</h6>
        <div class="ms-3">
            <label for="" class="fw-bold">A. Keluhan Utama :</label>
            <input type="text" class="form-control border-dark w-100 my-2" name="keluhan_utama">
        </div>
        <div class="ms-3">
            <label for="" class="fw-bold">B. Riwayat Penyakit :</label>
            <input type="text" class="form-control border-dark w-100 my-2" name="riwayat_penyakit">
        </div>
    </div>

    <div class="row">
        <h6 class="my-2 fw-bold">II. PEMERIKSAAN FISIK</h6>
        <div class="ms-3">
            <label for="" class="fw-bold">A. Keadilan Umum :</label>
            <input type="text" class="form-control border-dark w-100 my-2" name="keadilan_umum">
        </div>
        <!-- 4 colum -->
        <div class="ms-3">
            <strong>B. Tanda-tanda vital :</strong>
            <div class="row mt-3">
                <div class="col-md-4 mb-2 d-flex align-items-center">
                    <label for="" class="me-2" style="flex: 0 0 90px;">TD =</label>
                    <input type="text" class="form-control border-dark w-50 me-2" name="td">
                    <span>mmHg</span>
                </div>
                <div class="col-md-4 mb-2 d-flex align-items-center">
                    <label for="" class="me-2">Nadi =</label>
                    <input type="text" class="form-control border-dark w-50 me-2" name="nadi">
                    <span>x/i</span>
                </div>
                <div class="col-md-4 mb-2 d-flex align-items-center">
                    <label for="" class="me-2">Skala Nyeri =</label>
                    <input type="text" class="form-control border-dark w-50" name="skala_nyeri">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-2 d-flex align-items-center">
                    <label for="" class="me-2">Pernafasan =</label>
                    <input type="text" class="form-control border-dark w-50 me-2" name="pernafasan">
                    <span>x/i</span>
                </div>
                <div class="col-md-4 mb-2 d-flex align-items-center">
                    <label for="" class="me-2">Suhu =</label>
                    <input type="text" class="form-control border-dark w-50 me-2" name="suhu">
                    <span>°C</span>
                </div>
            </div>
        </div>
    </div>

    <div class="ms-3">
        <label for="" class="fw-bold">C. Pemeriksaan Fisik :</label>
        <input type="text" class="form-control border-dark w-100 my-2" name="pemeriksaan_fisik">
    </div>
    <div class="ms-3">
        <label for="" class="fw-bold">D. Riwayat Alergi :</label>
        <input type="text" class="form-control border-dark w-100 my-2" name="riwayat_alergi">
    </div>
    <div class="ms-3">
        <label for="" class="fw-bold">E. Alasan Pindah Ruangan :</label>
        <input type="text" class="form-control border-dark w-100 my-2" name="alasan_pindah">
    </div>

    <div class="row">
        <h6 class="my-2 fw-bold">III. PEMERIKSAAN PENUNJANG / DIAGNOTIK</h6>
        <div class="ms-3 d-flex gap-3 align-items-center">
            <input type="radio" class="custom-checkbox-success" id="lab" name="pemeriksaan_penunjang" value="lab">
            <label for="lab">Laboratorium</label>

            <input type="radio" class="custom-checkbox-success" name="pemeriksaan_penunjang" id="ekg" value="ekg">
            <label for="ekg">EKG</label>

            <input type="radio" class="custom-checkbox-success" name="pemeriksaan_penunjang" id="radiologi" value="radiologi">
            <label for="radiologi">Radiologi</label>

            <input type="radio" class="custom-checkbox-success" name="pemeriksaan_penunjang" id="periksa_lain">
            <label for="periksa_lain">lain-lain</label>

            <input type="text" class="form-control border-dark w-50" name="input_periksa" id="input_periksa" tabindex="0"> <!-- Menambahkan tabindex -->

        </div>
    </div>

    <div class="row">
        <label for="" class="my-2 fw-bold">IV. PEMERIKSAAN FISIK</label>
        <div class="ms-3">
            <input type="text" class="form-control border-dark w-100 my-2" name="pemeriksaan_fisik2">
        </div>
    </div>

    <div class="row">
        <label for="" class="my-2 fw-bold">V. TINDAKAN MEDIS YANG TELAH DILAKUKAN</label>
        <div class="ms-3">
            <input type="text" class="form-control border-dark w-100 my-2" name="tindakan_medis">
        </div>
    </div>

    <div class="row">
        <label for="" class="my-2 fw-bold">VI. DIET</label>
        <div class="ms-3">
            <input type="text" class="form-control border-dark w-100 my-2" name="diet">
        </div>
    </div>

    <div class="row">
        <h6 class="my-2 fw-bold">VII. INDIKASI PASIEN AHLI RAWAT</h6>
        <div class="ms-3 d-flex gap-3 align-items-center">
            <input type="radio" class="custom-checkbox-success" name="indikasi_pasien" id="preventif" value="preventif">
            <label for="preventif">Preventif</label>
            <input type="radio" class="custom-checkbox-success" name="indikasi_pasien" id="kuratif" value="kuratif">
            <label for="kuratif">Kuratif</label>
            <input type="radio" class="custom-checkbox-success" name="indikasi_pasien" id="paliatif" value="paliatf">
            <label for="paliatif">Paliatif</label>
            <input type="radio" class="custom-checkbox-success" name="indikasi_pasien" id="rehab" value="rehab">
            <label for="rehab">Rehabilitatif</label>
        </div>
    </div>

    <div class="row">
        <label for="" class="my-2 fw-bold">VIII. KONDISI PASIEN SAAT TRANSFER</label>
        <div class="ms-3">
            <input type="text" class="form-control border-dark w-100 my-2" name="kondisi_pasien">
        </div>
    </div>

    <div class="row mt-3">

        <div class="col-6 text-center">
            <label for="">DPJP Yang Menerima,</label>
            <img class="img-responsive center-block mt-2 d-flex m-auto mb-2" style="width: 80px" id="qr_dokter_dpjp" />
            <input type="text" name="nama_dokter" id="nama_dokter" placeholder="Masukkan poli yang dituju" class="form-control border-dark nama_dokter m-auto w-75">
        </div>
        <div class="col-6 text-center d-flex flex-column">
            <label for="">DPJP Yang Menyerahkan,</label>
            <img class="img-responsive center-block mt-2 d-flex my-2 m-auto" style="width: 15%;" id="qr_dokter_umum" />
            <select type="select" name="dokter_umum" class="form-select dokter_umum"
                style="width: 100%;"></select>
        </div>
    </div>

</div>




<script>
    // ambil tdd dokter
    let dataDokter = []
    const mode = "<?= $mode; ?>"


    function cbCommon(data) {

        $('.dokter_umum').prop('disabled', false)
        $('.dokter_umum').select2('open')
        $('.dokter_umum').select2('close')
        if (mode === "lihat")
            $('.dokter_umum').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('.dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 500)
        // callMarkerManager();
        // fill image
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

    $(document).ready(function() {
        // ambil diagnosa
        let page = 1; // Track the current page
        // let searchQuery = ''; // Track the search query

        // Initialize Select2
        $('.diagnosa').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
                dataType: 'json',
                delay: 250, // Delay in ms while typing
                data: function(params) {
                    console.log(" params", params)
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

        $('.diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('.diagnosa').select2('data', null); // Trigger new data fetch
                }
            });
        });
        // batas diagnosa

        //global ambil tdd
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        $('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat)
        $('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat)
        $('#nama_perawat_form').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat')

        listDokterUmumAPI()

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('.dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
        // batas tdd

    })

    // Mengambil elemen-elemen yang diperlukan
    const periksaLainRadio = document.getElementById('periksa_lain');
    const inputPeriksa = document.getElementById('input_periksa');

    // Menambahkan event listener untuk radio button 'lain-lain'
    periksaLainRadio.addEventListener('click', function() {
        setTimeout(() => {
            inputPeriksa.focus(); // Fokuskan input setelah sedikit delay
        }, 100); // Delay 100ms untuk memberi waktu fokus teralihkan
    });

    // Menambahkan event listener untuk radio button lainnya
    document.querySelectorAll('input[name="pemeriksaan_penunjang"]').forEach(function(radio) {
        radio.addEventListener('click', function() {
            // Jika radio yang dipilih bukan 'lain-lain', kosongkan input
            if (this.id !== 'periksa_lain') {
                inputPeriksa.value = ''; // Mengosongkan input
            }
        });
    });
</script>