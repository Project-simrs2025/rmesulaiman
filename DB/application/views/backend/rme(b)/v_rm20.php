<div class="row overflow-auto">
    <div class="col-12">
        <table class="table table-bordered border-dark">
            <tr>
                <td colspan="6">
                    <p class="text-center">
                        <strong>PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN RAWAT JALAN DAN
                            IGD</strong>
                    </p>
                    <p class="text-center"><strong>(GET UP AND GO TEST)</strong></p>
                </td>
                <td colspan="8">
                    <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien" placeholder="Nama" disabled></p>
                    <p>T. lahir : <input type="date" class="form-control border-dark" name="tanggal_lahir" disabled></p>
                    <p>No. RM : <input type="text" class="form-control border-dark" name="no_rm" placeholder="No. RM" disabled></p>
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="6">
                    <p><strong>Komponen Penilaian</strong></p>
                </td>
                <td colspan="1">
                    <p><strong>Ya</strong></p>
                </td>
                <td colspan="7">
                    <p><strong>Tidak</strong></p>
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="6">
                    <ol>
                        <li>
                            Perhatikan cara berjalan pasien saat akan duduk di kursi. Apakah
                            pasien tampak tidak seimbang (sempoyongan / limbung)
                        </li>
                    </ol>
                </td>
                <td colspan="1"><input type="radio" class="custom-checkbox-success" name="penilaian_sempoyongan" value="Ya"></td>
                <td colspan="7"><input type="radio" class="custom-checkbox-danger" name="penilaian_sempoyongan" value="Tidak"></td>
            </tr>
            <tr class="text-center">
                <td colspan="6">
                    <ol start="2">
                        <li>
                            Apakah pasien memegang pinggiran kursi / meja / benda lain sebagai
                            penopang saat akan duduk
                        </li>
                    </ol>
                </td>
                <td colspan="1"><input type="radio" name="penilaian_pinggiran" value="Ya" class="custom-checkbox-success"></td>
                <td colspan="7"><input type="radio" name="penilaian_pinggiran" value="Tidak" class="custom-checkbox-danger"></td>
            </tr>
            <tr>
                <td colspan="14">
                    <p>Hasil pengkajian resiko jatuh ( beri tanda ƴ )</p>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Tidak beresiko : tidak ditemukan a dan b</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="pengkajian_tidak_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko rendah : ditemukan a atau b</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="pengkajian_rendah_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko tinggi : ditemukan a dan b</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="pengkajian_tinggi_berisiko"></td>
            </tr>
            <tr>
                <td colspan="14">
                    <p>Intervensi pencegahan resiko jatuh ( beri tanda ƴ )</p>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Tidak beresiko : tidak ada tindakan</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="intervensi_tidak_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko rendah : edukasi</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="intervensi_rendah_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>Beresiko tinggi : pasang gelang kuning dan edukasi</p>
                </td>
                <td colspan="8"><input type="text" class="form-control border-dark" name="intervensi_tinggi_berisiko"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <p>
                        Nama dan Paraf yang melakukan pengkajian dan intervensi pencegahan
                        resiko jatuh
                    </p>
                </td>
                <td colspan="8">
                    <div class="text-center">
                        <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
                    </div>
                    <select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
                </td>
            </tr>
            <tr>
                <td colspan="14">
                    <p>Isi edukasi:</p>
                    <ol>
                        <li>
                            Beritahu pasien dan keluarga bahwa pasien beresiko jatuh sedang /
                            tinggi
                        </li>
                        <li>
                            Beritahu pasien agar mengurangi aktfitas ( misalnya : jalan), keluarga
                            selalu mendampingi
                        </li>
                        <li>Jika pasien membutuhkan bantuan, segera hubungi petugas</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <p class="text-center">
                        <strong>PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN DEWASA
                            (MORSE)</strong>
                    </p>
                </td>
                <td colspan="4">
                    <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien" placeholder="Nama"></p>
                    <p>Jeniskelamin : <input type="text" class="form-control border-dark" name="jenkel" placeholder="Jenis Kelamin"></p>
                    <p>Tanggallahir : <input type="date" class="form-control border-dark" name="tanggal_lahir"></p>
                </td>
                <td colspan="4">
                    <p>No. RM : <input type="text" class="form-control border-dark" name="no_rm" placeholder="No. RM"></p>
                    <p>Ruang : <input type="text" class="form-control border-dark" name="no_bad" placeholder="Ruang"></p>
                    <p>Kelas : <input type="text" class="form-control border-dark" name="kelas" placeholder="Kelas"></p>
                </td>
            </tr>

        </table>

        <input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
        <table class="table table-bordered table-pengkajian border-dark" id="table-pengkajian">
            <tr>
                <td colspan="14">
                    <p>
                        Pengkajian resiko jatuh dilakukan saat pasien masuk,
                        ketika terjadi perubahan kondisi, ketika pindah ke bangsal lain
                        atau setelah kejadian jatuh
                    </p>
                </td>
            </tr>
            <tr>
                <td rowspan="13">
                    <p>NilaiResikoJatuh</p>
                </td>
                <td colspan="5" rowspan="2">
                    <p>FaktorResiko</p>
                </td>
                <td rowspan="2">
                    <p>NilaiSkor</p>
                </td>
                <td>
                    <p>Tgl/Jam</p>
                </td>
                <td>
                    <p>Tgl/Jam</p>
                </td>
            </tr>
            <tr>
                <td><input type="datetime-local" class="form-control border-dark" name="tgl_jam[]"></td>
                <td><input type="datetime-local" class="form-control border-dark" name="tgl_jam[]"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>RiwayatJatuh</p>
                </td>
                <td colspan="3">
                    <p>Kurangdari 3 bulan</p>
                </td>
                <td>
                    <p>25</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="riwayat_jatuh[]"></td>
                <td><input type="text" class="form-control border-dark" name="riwayat_jatuh[]"></td>

            </tr>
            <tr>
                <td colspan="2">
                    <p>Kondisi Kesehatan</p>
                </td>
                <td colspan="3">
                    <p>Lebih dari satu diagnosa</p>
                </td>
                <td>
                    <p>15</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="kondisi_kesehatan[]"></td>
                <td><input type="text" class="form-control border-dark" name="kondisi_kesehatan[]"></td>

            </tr>
            <tr>
                <td colspan="2" rowspan="3">
                    <p>Bantuan Ambulansi</p>
                </td>
                <td colspan="3">
                    <p>Di tempat tidur/butuh bantuan perawat/memakai kursi roda</p>
                </td>
                <td>
                    <p>0</p>
                </td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="bantuan_ambulansi[]"></td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="bantuan_ambulansi[]"></td>

            </tr>
            <tr>
                <td colspan="3">
                    <p>Kruk, tongkat, walker</p>
                </td>
                <td>
                    <p>15</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Furniture: dinding, meja, kursi, almari</p>
                </td>
                <td>
                    <p>30</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Terapi IV/Anti Koagulan</p>
                </td>
                <td colspan="3">
                    <p>Terapiintravenaterusmenerus</p>
                </td>
                <td>
                    <p>20</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="terapi_iv[]"></td>
                <td><input type="text" class="form-control border-dark" name="terapi_iv[]"></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="3">
                    <p>Gaya Berjalan/ Berpindah</p>
                </td>
                <td colspan="3">
                    <p>Normal/di tempattidur/ immmobilisasi</p>
                </td>
                <td>
                    <p>0</p>
                </td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="gaya_berjalan[]"></td>
                <td rowspan="3"><input type="text" class="form-control border-dark" name="gaya_berjalan[]"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Lemah</p>
                </td>
                <td>
                    <p>10</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Terganggu</p>
                </td>
                <td>
                    <p>20</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">
                    <p>Status Mental</p>
                </td>
                <td colspan="3">
                    <p>Orientasidengankemampuansendiri</p>
                </td>
                <td>
                    <p>0</p>
                </td>
                <td rowspan="2"><input type="text" class="form-control border-dark" name="status_mental[]"></td>
                <td rowspan="2"><input type="text" class="form-control border-dark" name="status_mental[]"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Lupaketerbatasan</p>
                </td>
                <td>
                    <p>15</p>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <p>Totaskor</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="total_skor[]"></td>
                <td><input type="text" class="form-control border-dark" name="total_skor[]"></td>
            </tr>
        </table>
        <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-pengkajian')">Add</button>
        <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-pengkajian')">Delete</button>


        <input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
        <table class="table table-bordered border-dark" id="table-resiko">
            <tr>
                <td colspan="7">
                    <p>
                        Resiko rendah (0-24), resiko sedang (25-44), resiko tinggi (≥45) (Lingkari)
                    </p>
                </td>
                <td>RR/RS/RT</td>
                <td>RR/RS/RT</td>
            </tr>
            <tr>
                <td colspan="7">
                    <p>Nama dan Paraf yang melakukan pengkajian</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="nama_paraf_pengkajian[]"></td>
                <td><input type="text" class="form-control border-dark" name="nama_paraf_pengkajian[]"></td>
            </tr>
            <tr>
                <td colspan="4">
                    <p>Intervensipencegahanresikojatuh (beritanda ƴ)</p>
                </td>
                <td colspan="3">
                    <p>Tanggal/Jam</p>
                </td>
                <td><input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam[]"></td>
                <td><input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam[]"></td>

            </tr>
            <tr>
                <td colspan="2" rowspan="6">
                    <p>Resiko Rendah (RR)</p>
                </td>
                <td colspan="5">
                    <ol>
                        <li>Orientasi lingkungan</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    <ol start="2">
                        <li>Pastikan bel mudah dijangkau</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_bel_mudah_dijangkau[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_bel_mudah_dijangkau[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    <ol start="3">
                        <li>Roda pada tempat tidur pada posisi terkunci</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    <ol start="4">
                        <li>Naikkan pagar pengaman tempat tidur</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_pagar_pengaman[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_pagar_pengaman[]"></td>
            </tr>
            <tr>
                <td colspan="5">
                    <ol start="5">
                        <li>Pastikan lampu hidup saat malam hari</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_lampu_hidup[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_lampu_hidup[]"></td>

            </tr>
            <tr>
                <td colspan="5">
                    <ol start="6">
                        <li>Berikan edukasi kepada pasien</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rr_edukasi_pasien[]"></td>
                <td><input type="text" class="form-control border-dark" name="rr_edukasi_pasien[]"></td>

            </tr>
            <tr>
                <td colspan="2" rowspan="3">
                    <p>ResikoSedang (RS)</p>
                </td>
                <td colspan="5">
                    <ol>
                        <li>Lakukan semua pedoman pencegahan jatuh resiko rendah</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rs_pencegahan_rr[]"></td>
                <td><input type="text" class="form-control border-dark" name="rs_pencegahan_rr[]"></td>

            </tr>
            <tr>
                <td colspan="5">
                    <ol start="2">
                        <li>Berikan stiker segitiga warna kuning padat empat tidur pasien</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]"></td>
                <td><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]"></td>

            </tr>
            <tr>
                <td colspan="5">
                    <ol start="3">
                        <li>Pasangkan gelang kuning penanda resiko jatuh pada tangan yang dominan</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]"></td>
                <td><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]"></td>

            </tr>
            <tr>
                <td colspan="2" rowspan="5">
                    <p>ResikoTinggi (RT)</p>
                </td>
                <td colspan="5">
                    <ol>
                        <li>Lakukan semua pedoman pencegahan jatuh resiko rendah dan sedang</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_pedoman[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_pedoman[]"></td>

            </tr>
            <tr>
                <td colspan="5">
                    <ol start="2">
                        <li>Kunjungi dan monitor pasien setiap 1 jam</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_monitor[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_monitor[]"></td>

            </tr>
            <tr>
                <td colspan="5">
                    <ol start="3">
                        <li>Penggunaan kateter untuk BAK/pispot</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_kateter[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_kateter[]"></td>

            </tr>
            <tr>
                <td colspan="5">
                    <ol start="4">
                        <li>Pastikan pasien menggunakan alat bantu jalan (bila mobilisasi)</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_alat_bantu[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_alat_bantu[]"></td>

            </tr>
            <tr>
                <td colspan="5">
                    <ol start="5">
                        <li>Libatkan keluarga pasien untuk selalu menunggu pasien</li>
                    </ol>
                </td>
                <td><input type="text" class="form-control border-dark" name="rt_keluarga[]"></td>
                <td><input type="text" class="form-control border-dark" name="rt_keluarga[]"></td>

            </tr>
            <tr>
                <td colspan="7">
                    <p>NamadanParaf yang melakukanintervensipencegahanjatuh</p>
                </td>
                <td><input type="text" class="form-control border-dark" name="nama_paraf_intervensi[]"></td>
                <td><input type="text" class="form-control border-dark" name="nama_paraf_intervensi[]"></td>

            </tr>
            <tr>
                <td colspan="14">
                    <p>
                        Isi edukasi: 1. Memberitahu pasien dan keluarga bahwa pasien beresiko jatuh ringan/sedang/tinggi
                    </p>
                    <p>
                        2. Memberitahu pasien agar mengurangi aktifitas (misalnya: berjalan), bila ingin ke kamar mandi keluarga selalu mendampingi/ menggunakan pispot
                    </p>
                    <p>3. Jika membutuhkan bantuan, segera hubungi petugas</p>
                </td>
            </tr>
        </table>

        <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')">Add</button>
        <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')">Delete</button>
    </div>
</div>




<script>
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    function cbCommon(data) {
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


        // on init generate table based on table-{name}-count
        let resikoCountInput = document.getElementById("table-resiko-count");
        if (resikoCountInput) {
            let count = +(resikoCountInput.value ?? "0");
            if (count > 0) {
                for (let i = 1; i < count; i++) {
                    let tableId = 'table-resiko';
                    let table = document.getElementById(tableId);
                    let newTable = table.cloneNode(true);

                    newTable.id = tableId + "-copy-" + `${i + 1}`;

                    table.parentNode.insertBefore(newTable, table.nextSibling);
                }
            }
        }

        let pengkajianCountInput = document.getElementById("table-pengkajian-count");
        if (pengkajianCountInput) {
            let count = +(pengkajianCountInput.value ?? "0");
            if (count > 0) {
                for (let i = 1; i < count; i++) {

                    let tableId = 'table-pengkajian';
                    let table = document.getElementById(tableId);
                    let newTable = table.cloneNode(true);

                    newTable.id = tableId + "-copy-" + `${i + 1}`;

                    table.parentNode.insertBefore(newTable, table.nextSibling);
                }
            }
        }


        populateFormFields(data);
        // callMarkerManager();
        // fill image
    }

    // ready
    function copyTable(tableId) {
        let table = document.getElementById(tableId);
        let newTable = table.cloneNode(true);

        let countInput = document.querySelector("input[name='" + tableId + "-count']");
        let count = +(countInput.value ?? "1") + 1;

        countInput.value = count;

        newTable.id = tableId + "-copy-" + count;
        // reset all input in newTable
        let inputs = newTable.querySelectorAll("input");
        inputs.forEach(input => {
            input.value = "";
        })
        table.parentNode.insertBefore(newTable, table.nextSibling);
    }

    function deleteTable(tableId) {
        let countInput = document.getElementById(tableId + "-count");
        if (countInput) {
            let count = +(countInput.value);
            if (count > 0) {
                let lastCopiedTable = document.getElementById(tableId + "-copy-" + count);
                if (lastCopiedTable) {
                    lastCopiedTable.remove();
                    countInput.value = count - 1;
                }
            }
        }
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
</script>