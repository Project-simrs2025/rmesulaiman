<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-6">
                    <h4 class="fw-bold my-3 text-center">PERSETUJUAN UMUM / GENERAL CONSENT</h4>

                    <div>IDENTITAS PASIEN</div>
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
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4">Alamat</div>
                        <input type="text" name="alamat" id="" class="form-control border-dark">
                    </div>

                    <div class="mt-3">
                        <h6 class="fw-bold text-center">
                            <div>PASIEN DAN / ATAU KELUARGA / WALI HARUS</div>
                            <div>MEMBACA, MEMAHAMI</div>
                            <div>DAN MENGISI INFORMASI BERIKUT</div>
                        </h6>
                    </div>
                    <div class="my-2">Yang bertanda tangan dibawah ini :</div>
                    <div class="d-flex flex-column gap-1">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4">Nama </div>
                            <input type="text" name="nama_hub_pasien" id="" class="form-control border-dark"  disabled>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4">Alamat </div>
                            <input type="text" name="alamat_hub_pasien" id="" class="form-control border-dark"  disabled>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4">No. Telp. / HP </div>
                            <input type="text" name="telp_hub_pasien" id="" class="form-control border-dark" disabled>
                        </div>
                    </div>

                    <div class="mt-3">Selaku Pasien / Keluarga / Wali dengan ini menyatakan persetujuan : </div>

                    <div class="mt-3 d-flex align-items-center gap-2 flex-wrap">
                        <div class="flex-shrink-0"> Untuk dirawat oleh dokter </div>
                        <div class="col-6"><input type="text" name="nama_dokter" id="dokter_rawat" class="form-control border-dark w-100"></div>
                        <div class="flex-shrink-0">atau dokter jaga Rumah Sakit Umum Wira Husada , dokter</div>
                        <div class="col-7"><select type="select" name="dokter_jaga" id="dokter_jaga" class="form-select dokter_umum w-100"></select></div>
                    </div>

                    <!-- part i -->
                    <h6 class="fw-bold mt-4">I. PERSETUJUAN UNTUK PERAWATAN DAN PENGOBATAN</h6>
                    <p style="text-align: justify;">
                        Saya menyetujui untuk perawatan di Rumah Sakit Umum Wira Husada sebagai pasien rawat jalan atau rawat inap tergantung kepada kebutuhan medis. Pengobatan dapat meliputi pemeriksaan fisik dan wawancara yang dilakukan oleh dokter dan perawat, pemberian asuhan keperawatan, melakukan prosedur diagnostik, pemeriksaan x-ray / radiologi, pengambilan darah atau jaringan untuk pemeriksaan laboratorium dan patologi, perawatan rutin dan prosedur seperti cairan infus atau suntikan. Persetujuan yang saya berikan tidak termasuk persetujuan untuk prosedur / tindakan invasif (misalnya, operasi) atau tindakan yang mempunyai resiko tinggi. Jika saya memutuskan untuk menghentikan perawatan medis untuk diri saya sendiri, saya memahami dan menyadari bahwa Rumah Sakit Umum Wira Husada atau dokter tidak bertanggung jawab atas hasil yang merugikan saya.
                    </p>
                    <!-- divider -->

                    <!-- part ii -->
                    <h6 class="fw-bold mt-4">II. PERSETUJUAN PELEPASAN INFORMASI</h6>
                    <p style="text-align: justify;">
                        Saya memahami informasi yang ada di dalam diri saya, termasuk diagnosis, hasil laboratorium dan hasil tes diagnostik yang akan digunakan untuk perawatan medis, Rumah Sakit Umum Wira Husada akan menjamin kerahasiaannya. Saya memberi wewenang kepada Rumah Sakit untuk memberikan informasi tentang diagnosis, hasil pelayanan dan pengobatan bila diperlukan untuk memproses klaim asuransi / perusahaan dan atau lembaga pemerintah. Saya memberi wewenang kepada Rumah Sakit untuk memberikan informasi tentang diagnosis, hasil pelayanan dan pengobatan saya kepada anggota keluarga saya dan kepada :
                    <div class="d-flex flex-column gap-2">
                        <input type="text" name="info_diagnostik_1" id="" class="form-control border-dark">
                        <input type="text" name="info_diagnostik_2" id="" class="form-control border-dark">
                        <input type="text" name="info_diagnostik_3" id="" class="form-control border-dark">
                    </div>
                    </p>
                    <!-- divider -->

                    <!-- part iii -->
                    <h6 class="fw-bold mt-4">III. HAK DAN KEWAJIBAN PASIEN</h6>
                    <p style="text-align: justify;">
                        Saya memiliki hak untuk mengambil bagian dalam keputusan mengenai penyakit saya dan dalam hal perawatan medis dan rencana pengobatan. Saya telah mendapat informasi tentang “Hak dan Kewajiban Pasien “ di Rumah Sakit Umum Wira Husada melalui leaflet dan banner yang disediakan oleh petugas.
                    </p>
                    <!-- divider -->
                </td>
                <td>
                    <!-- part iv -->
                    <h6 class="fw-bold">IV. INFORMASI RAWAT INAP</h6>
                    <p style="text-align: justify;">
                        Saya tidak diperkenankan untuk membawa barang-barang berharga ke ruang rawat inap. Saya memahami bahwa Rumah Sakit Umum Wira Husada tidak bertanggung jawab atas kehilangan barang-barang pribadi dan barang berharga yang dibawa ke Rumah Sakit. Bila tidak ada anggota keluarga, Rumah Sakit menyediakan tempat penitipan barang milik pasien di tempat resmi yang telah disediakan Rumah Sakit.
                    <div>Saya telah menerima informasi tentang peraturan jam berkunjung pasien sesuai dengan aturan di Rumah Sakit, anggota keluarga saya yang menunggu saya, bersedia untuk selalu memakai tanda pengenal khusus yang diberikan oleh Rumah Sakit, dan demi keamanan seluruh pasien, setiap keluarga dan siapapun yang akan mengunjungi saya diluar jam berkunjung, bersedia untuk diminta / diperiksa identitasnya dan memakai identitas yang diberikan oleh Rumah Sakit.</div>
                    </p>
                    <!-- divider  -->

                    <!-- part v -->
                    <h6 class="fw-bold">V. PRIVASI</h6>
                    <div style="text-align: justify;">
                        Saya mengijinkan/ tidak mengijinkan (coret salah satu) Rumah Sakit memberi akses bagi :
                        Keluarga dan handai taulan serta orang orang yang akan menjenguk saya (sebutkan nama bila ada permintaan khusus yang tidak diijinkan) :
                    </div>
                    <div><textarea name="rs_akses" id="rs_akes" class="form-control border-dark" rows="2"></textarea></div>
                    <!-- divider -->

                    <!-- part vi -->
                    <h6 class="fw-bold mt-4">VI. INFORMASI BIAYA</h6>
                    <p style="text-align: justify;">
                        Saya menyatakan setuju, baik sebagai wali atau sebagai pasien, bahwa sesuai pertimbangan pelayanan yang diberikan kepada pasien, maka saya wajib untuk membayar total biaya pelayanan. Biaya pelayanan berdasarkan acuan biaya dan ketentuan Rumah Sakit Umum Wira Husada. Apabila asuransi kesehatan swasta atau program pemerintah menanggung pembiayaan saya, saya memberi wewenang kepada rumah sakit untuk memberi tagihan dari semua pelayanan dan tindakan medis yang diberikan. Tanggungan Asuransi saya mungkin menyatakan bahwa sebagian pembayaran tetap menjadi tanggung jawab pribadi saya atau tidak ditanggung oleh asuransi, maka rumah sakit berwenang memberi tagihan untuk biaya yang tidak ditanggung oleh asuransi dan saya bertanggung jawab untuk membayarnya.
                    </p>
                    <div>Saya juga menyadari dan memahami bahwa: </div>
                    <div class="form-check" style="text-align: justify;">
                        <ul>
                            <li>Apabila saya tidak memberikan persetujuan, atau di kemudian hari mencabut persetujuan saya untuk melepaskan rahasia kedokteran saya kepada perusahaan asuransi yang saya tentukan, maka saya pribadi bertanggung jawab untuk membayar semua pelayanan dan tindakan medis dari Rumah Sakit Umum Wira Husada.</li>
                            <li> Apabila rumah sakit membutuhkan proses hukum untuk menagih biaya pelayanan rumah sakit dari saya, saya memahami bahwa saya bertanggung jawab untuk membayar semua biaya yang disebabkan dari proses hukum tersebut</li>
                        </ul>
                    </div>
                    <!-- divider -->

                    <!-- tanda tangan -->
                    <h6 class="fw-bold mt-5">TANDA TANGAN</h6>
                    <p>Dengan tandatangan saya di bawah, saya menyatakan bahwa saya telah membaca dan memahami
                        item pada Persetujuan Umum / General Consent.
                    </p>

                    <div class="mt-3">
                        <div>
                            <div class="text-center my-2">
                                <img class="marker-image border border-dark" id="example-image"
                                    src="<?= base_url('assets2/rme/img/testttd.png') ?>"
                                    style="width:150px; height:100px;"
                                    data-input-name="image_drawer_state_image_11" />
                            </div>

                            <input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
                                value="" />
                            <div><input type="text" name="nama_hub_pasien" class="form-control border-dark" placeholder="Tanda Tangan dan Nama"></div>
                            <div class="d-flex align-items-center gap-2">
                                <div>Wali jika pasien < 18 (Hubungan dengan pasien)</div>
                                        <div><input type="date" name="tgl_hub_pasien" value="<?= date('Y-m-d'); ?>" class="form-control border-dark"></div>
                                </div>
                            </div>
                        </div>


                        <!-- dokter tdd -->
                        <div>
                            <div class="text-center my-2">
                                <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat_admission" />
                            </div>
                            <div><select type="select" name="perawat_admission" id="perawat_admission" class="form-select perawat_admission" style="width: 100%;"></select></div>
                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                <div>Saksi Pihak Rumah Sakit </div>
                                <div><input type="date" name="tgl_hub_pasien_rs" value="<?= date('Y-m-d'); ?>" class="form-control border-dark"></div>
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
    let dataPerawatAdmission = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        listDokterUmumAPI()
        listPerawatAdmissionAPI()


        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

    });

    function cbCommon(data) {

        populateFormFields(data);

        $('#perawat_admission').prop('disabled', false)
        $('#perawat_admission').select2('open')
        $('#perawat_admission').select2('close')
        if (mode === "lihat")
            $('#perawat_admission').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataPerawatAdmission?.map(v => {
                if (v.text === $('#perawat_admission').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_admission')
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

    function listPerawatAdmissionAPI() {
        $('.perawat_admission').select2({
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
                    dataPerawatAdmission = items
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