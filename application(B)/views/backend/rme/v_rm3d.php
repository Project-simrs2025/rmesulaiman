<div class="container mt-4 d-flex flex-column gap-5">
    <div class="d-flex flex-column gap-3">
        <h4>IDENTITAS PASIEN</h4>
        <div>
            <label>Nama Pasien</label>
            <input type="text" class="form-control border-dark" name="nama_pasien">
        </div>
        <div>
            <label>Nomor Rekam Medis</label>
            <input type="text" class="form-control border-dark" name="no_rm">
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control border-dark" name="tanggal_lahir">
        </div>
        <div>
            <label>Agama</label>
            <input type="text" class="form-control border-dark" name="nama_agama">
        </div>
        <div>
            <label>Suku / Bangsa</label>
            <input type="text" class="form-control border-dark" name="nama_suku">
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" class="form-control border-dark" name="alamat">
        </div>
        <div>
            <label>No. Telp</label>
            <input type="text" class="form-control border-dark" name="no_handphone">
        </div>
    </div>

    <div class="d-flex flex-column gap-3">
        <h4>PASIEN DAN ATAU WALI HUKUM</h4>
        <div>
            <label>Nama</label>
            <input type="text" class="form-control border-dark" name="nama_wali">
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" class="form-control border-dark" name="alamat_wali">
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control border-dark" name="tanggal_lahir_wali" value="<?= date('Y-m-d'); ?>">
        </div>
        <div>
            <label>No. Telp</label>
            <input type="text" class="form-control border-dark" name="no_telp_wali">
        </div>
    </div>

    <div>
        <h4 class="fw-bold">I. PERSETUJUAN UNTUK PERAWATAN DAN PENGOBATAN </h4>
        <p> <span class="ms-5">Saya</span> meneyetujui untuk melakukan pengobatan dan perawatan di Rumah Sakit Umum Daerah Sultan Sulaiman sebagai pasien rawat inap tergantung pada kebutuhan medis. Pengobatan dapat meliputi pemeriksaan X-Ray/ Radiologi, pemeriksaan darah, perawatan rutin seperti prosedur pemberian cairan infus dan suntikan, evaluasi wawancara dan pemeriksaan fisik.</p>
        <p><span class="ms-5">Persetujuan</span> yang saya berikan tidak termasuk prosedur/ tindakan operasi (contohnya operasi) atau tindakan yang memiliki resiko tinggi.
            Jika saya memutuskan untuk menghentikan perawatan untuk diri saya maka saya memahami bahwa Rumah Sakit Umum Daerah Sultan Sulaiman tidak bertanggung jawab atas hasil yang merugikan saya.
        </p>
    </div>

    <div>
        <h4 class="fw-bold">II. PERSETUJUAN PELEPASAN INFORMASI</h4>
        <p><span class="ms-5">Saya</span> memahami informasi yang ada di dalam diri saya termasuk diagnosis, hasil laboratorium yang digunakan untuk perawatan medis, Rumah Sakit Umum Daerah Sultan Sulaiman akan menjamin kerahasiaannya. Saya memberikan wewenang kepada RS untuk memberikan informasi tentang pengobatan saya, jika diperlukan untuk proses klaim asuransi/ perusahaan dan atau lembaga pemerintah.
            Saya memberikan wewenang kepada RS untuk memberikan informasi tentang pengobatan saya, kepada anggota keluarga saya yakni :
        </p>
        <textarea name="persetujuan_pelepasan" id="persetujuan_pelepasan" rows="4" class="form-control border-dark border-dark"></textarea>
    </div>

    <div>
        <h4 class="fw-bold">III. HAK DAN TANGGUNG JAWAB PASIEN</h4>
        <p><span class="ms-5">Saya</span> memiliki hak untuk mengambil bagian dalam keputusan mengenai penyakit saya dan dalam hal perawatan medis serta rencana pengobatan.</p>
        <p><span class="ms-5">Saya</span> telah mendapatkan informasi hak dan kwajiban pasien dari penjelasan petugas <?= $site_title; ?></p>
        <p><span class="ms-5">Saya</span> menyadari bahwa <?= $site_title; ?> tidak bertanggung jawab atas kehilangan
            barang-barang pribadi dan barang berharga yang dibawa ke <?= $site_title; ?>. </p>
    </div>

    <div>
        <h4 class="fw-bold">IV. INFORMASI RAWAT INAP </h4>
        <div>
            <p><span class="ms-5">Saya</span> tidak diperkenankan membawa barang-barang berharga ke ruang rawat inap. Jika ada anggota kleuarga atau teman harus diminta untuk membawa pulang uang atau perhiasan. Bila tidak ada anggota keluarga, RS memliki tempat penyimpanan barang berharga yang resmi disediakan RS.</p>
            <p><span class="ms-5">Saya</span> telah menerima infromasi tentang peraturan yang berlaku di <?= $site_title; ?>. Saya dan anggota keluarga akan mematuhi peraturan tersebut, termasuk mengenai jam besuk/ jam berkunjung.</p>
            <p><span class="ms-5">Anggota</span> keluarga saya yang menunggu saya dan yang sedang mengunjungi saya, bersedia untuk memakai tanda pengenal yang disiapkan RS demi terciptanya keamanan RS.</p>
        </div>
    </div>

    <div>
        <h4 class="fw-bold">V. PRIVASI</h4>
        <div>
            <span class="ms-5">Saya</span> mengijinkan/ tidak mengijinkan (coret yang tidak perlu) RS memberi akses kepada keluarga dan handai taualan yang akan mengunjungi saya. (sebutkan jika ada nama yang tidak diijinkan berkunjung)
            <input type="text" class="form-control border-dark mt-3" name="privasi">
        </div>
    </div>

    <div>
        <h4 class="fw-bold">VI. INFORMASI BIAYA</h4>
        <div>
            Saya memahami informasi tentang biaya pengobatan dan tindakan yang telah dijelaskan petugas RS.
        </div>
    </div>

    <div>
        <h4>VII. INFORMASI PENGADUAN</h4>
        <div>
            Saya telah menerima informasi tentang mekanisme penyampaian pengaduan di <?= $site_title; ?>
        </div>
        <div class="form-check">1. Pengaduan dapat disampaikan secara langsung kepada petugas/ Tim pengaduan komplain.</div>
        <div class="form-check">
            <div>2. Sarana pengaduan :</div>
            <div class="form-check">
                <div>a. Web RS : http://rsudsultansulaiman.serdangbedagaikab.go.id</div>
                <div>b. Website : lapor.go.id</div>
                <div>c. Whatsap : 081262443228</div>
                <div>d. SMS : 1708 (SP4N Lapor )</div>
                <div>e. Email : rsuss_sergai@yahoo.co.id</div>
                <div>f. Facebook : rsudsultansulaiman</div>
                <div>g. Instagram : rsudsultansulaiman</div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column">
        <h5 class="fw-bold">TANDA TANGAN</h5>
        <div>Dengan tanda tangan saya di bawah ini, bahwa saya telah membaca dan memahami Persetujuan Umum/ General Consent. </div>
    </div>

    <div class="row">
        <div class="d-flex gap-2 justify-content-end align-items-center my-2"><?= $city_sign; ?>,<input type="date" name="tanggal_2" class="form-control border-dark border-dark w-25" value="<?= date('Y-m-d'); ?>"></div>
        <div class="col-6">
            <div class="d-flex align-items-center flex-column gap-2">
                <label>Pasien / Wali</label>

                <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                    style="width: 180px; height:100px" data-input-name="image_drawer_state_image_11" />
                <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                    value="" />
                <input type="text" name="nama_hub_ttd" id="" class="form-control border-dark" value="<?= $nama_hub_pasien; ?>">
                <div class="fw-bold">(Wali jika pasien < 18 Tahun)</div>
                </div>
            </div>

            <div class="col-6">
                <div class="text-center">Petugas</div>
                <div class="d-flex flex-column gap-2 ">
                    <div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_pengkaji" />
                        </div>
                        <select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 100%;"></select>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<script>
    const mode = "<?= $mode; ?>";
    let dataListPerawat = [];
    let dataDokter = [];

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);


        $('#dokter_pengkaji').prop('disabled', false)
        $('#dokter_pengkaji').select2('open')
        $('#dokter_pengkaji').select2('close')
        if (mode === "lihat")
            $('#dokter_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_pengkaji').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_pengkaji')
                }
            })
        }, 1000)

        $('#perawat_pengkaji').prop('disabled', false)
        $('#perawat_pengkaji').select2('open')
        $('#perawat_pengkaji').select2('close')
        if (mode === "lihat")
            $('#perawat_pengkaji').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
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


        $('#dokter_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_pengkaji')
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