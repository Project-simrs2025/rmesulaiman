<?php
include 'layout/head.php';
?>

<div class="table-container">
    <table class="table table-bordered" style="border: 1px solid black;">
        <tr>
            <td colspan="3" rowspan="4" class="text-center">Pengkajian Awal Pasien Rawat Jalan</td>
        </tr>
        <tr>
            <td style="font-size:16px">
                <?php
                // Daftar input field
                $fields = [
                    "Nama Pasien",
                    "NIK",
                    "Pendidikan",
                    "Pekerjaan",
                    "No. RM"
                ];

                foreach ($fields as $field) {
                    echo "<div class='form-group w-75' style='margin-bottom:10px'>";
                    echo "<label for='{$field}'>$field :</label>";
                    echo "<input type='text' class='form-control' id='{$field}' style='height:20px; border:1px solid black;'>";
                    echo "</div>";
                }
                ?>
                <div style="background-color: black; color:white; width:80px; height:20px; position:absolute; top: 36%; right:10%">No Rm.1a</div>
            </td>
            <!-- <td rowspan="1" colspan="1">
                        RM.1
                    </td> -->
        </tr>
        <tr>
            <td colspan="1" style="font-size: 16px;">
                <?php
                $fieldsBottom = [
                    "Tanggal Lahir/Umur",
                    "Jenis Kelamin",
                    "Tanggal Masuk",
                    "Nama DPJP",
                    "Nama PPJP",
                    "Nilai Pribadi"
                ];

                foreach ($fieldsBottom as $field) {
                    echo "<div class='form-group w-75'>";
                    echo "<label for=''>$field :</label>";
                    echo "<input type='text' class='form-control' style='height:20px; border:1px solid black;'>";
                    echo "</div>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="1" rowspan="2" class="text-center">(tempelkan stiker identitas jika tersedia)</td>
        </tr>
    </table>

    <table class="table table-bordered" style="border: 1px solid black;">
        <thead>
            <tr>
                <td colspan="6">
                    <span class="float-end">*coret yang tidak perlu</span>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="5" class="vertical-text" style="width: 30px;">Perawat</td>
            </tr>
            <tr>
                <td style="width: 50px;"><span class="fw-bold">Alergi</span></td>
                <td colspan="4" class="text-start">
                    <div class="text-start">
                        <input type="radio" id="tidakAlergi" name="pilihAlergi">
                        <label for="tidakAlergi">Tidak</label>
                        <input type="radio" class="ms-2" id="yaAlergi" name="pilihAlergi">
                        <label for="yaAlergi">Ya, Sebutkan</label>
                        <input type="text" id="yaAlergi" style="width:65%">
                    </div>
                </td>
            </tr>
            <td rowspan="2"><span class="fw-bold">Skrining</span></td>
            <td colspan="4"><span class="fw-bold me-2">Nyeri</span> Skor Nyeri metode VAS / Wong Baker / CPOT* = </td>

            <?php
            // Data untuk checkbox kategori IMT
            $imtCategories = [
                "Underweight (< 18.5)",
                "Normal (18.5 - 24.9)",
                "Overweight (25 - 29.9)",
                "Obese (≥ 30)"
            ];
            // data skrinning
            $skrinning = [
                ["label" => "TB :", "unit" => "cm"],
                ["label" => "BB :", "unit" => "Kg/*"],
                ["label" => "IMT :", "unit" => "kg/m²"]
            ];
            ?>

            <tr>
                <td colspan="2">
                    <!-- Skrining -->
                    <div>
                        <span class="fw-bold me-2" style="width: 150px;">Gizi</span>
                        <?php foreach ($skrinning as $s): ?>
                            <label for=""><?= $s["label"]; ?></label>
                            <input type="text" style="width: 50px;" maxlength="3"> <?= $s["unit"]; ?>

                        <?php endforeach; ?>
                    </div>
                    <!-- Row 2 -->
                    <div class="row d-block mt-2">
                        <span class="ms-5">Indeks Massa Tubuh (IMT):</span>
                        <input type="text" style="width:50px"> kg/m²
                    </div>
                </td>
                <td colspan="2">
                    <?php foreach (array_chunk($imtCategories, 2) as $row): ?>
                        <div>
                            <?php foreach ($row as $category): ?>
                                <input type="checkbox"> <?= $category ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </td>
            </tr>
            <?php
            $tandaVital = [
                ["label" => "TD", "unit" => "mmHg", "type" => "double"],
                ["label" => "Nadi", "unit" => "x/menit"],
                ["label" => "RR", "unit" => "x/menit"],
                ["label" => "Suhu", "unit" => "°C"]
            ];
            ?>

            <tr>
                <td><span class="fw-bold">Tanda Vital</span></td>
                <td colspan="4" class="text-start">
                    <?php foreach ($tandaVital as $item): ?>
                        <span>
                            <?= $item['label'] ?>:
                            <input type="number" style="width: 60px;" oninput="limitInputLength(this)" onkeydown="preventE(event)" placeholder="">
                            <?php if (isset($item['type']) && $item['type'] === "double"): ?>
                                / <input type="number" style="width: 60px;" oninput="limitInputLength(this)" onkeydown="preventE(event)" placeholder="">
                            <?php endif; ?>
                            <?= $item['unit'] ?>
                        </span>
                    <?php endforeach; ?>
                </td>
            </tr>

            <td rowspan="6" class="vertical-text">Skrining</td>
            <td colspan="5">
                <span class="fw-bold">Riwayat Penyakit </span>( diisi oleh dokter)</span>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div style="display: flex; gap: 10px;">
                        <p>Riwayat didapatkan dari</p>
                        <div>
                            <input type="checkbox" id="autoanamnesis">
                            <label for="autoanamnesis">Autoanamnesis</label>
                            <input type="checkbox" id="alloanamnesis">
                            <label for="alloanamnesis">Alloanamnesis</label>
                        </div>
                    </div>
                    <div>
                        <span>Hubungan dengan pasien</span>
                    </div>
                </div>
            </td>
            <tr>
                <td colspan="5"> <span class="fw-bold">Riwayat Imunisasi </span>( diisi hanya pada pasien anak)</span>
                    <div>
                        <input type="checkbox" id="lengkap">
                        <label for="lengkap">Lengkap</label>
                        <input type="checkbox" id="tidak_lengkap">
                        <label for="tidak_lengkap">Tidak Lengkap</label>
                        <input type="checkbox" id="tidak pernah">
                        <label for="tidak pernah">Tidak pernah</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <span class="fw-bold">Riwayat Pekerjaan </span>( apakah berhubungan dengan zat- zat berbahaya )</span>
                    <div>
                        <div>
                            <input type="radio" id="tidakRiwayatPekerjaan" name="pilihRiwayatPekerjaan">
                            <label for="tidakRiwayatPekerjaan"> Tidak</label>
                            <input type="radio" class="ms-2" id="yaRiwayatPekerjaan" name="pilihRiwayatPekerjaan">
                            <label for="yaRiwayatPekerjaan">Ya, Sebutkan</label>
                            <input type="text" id="yaAlergi" style="width: 80%;">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div><span class="fw-bold">Keluhan Utama :</span></div>
                    <div>Riwayat Penyakit
                        <label class="font-italic">
                            (Lokasi,Onset dan Kronologis, Kualitas, Kuantitas, Faktor memperberat, Faktor memperingan, gejala penyerta)
                        </label>
                        <textarea name="" id="" class="w-100" rows="5"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div>
                        <span class="fw-bold">Obat-obatan</span> yang sedang dikonsumsi dan/atau dibawa pasien saat ini :
                        <input type="text" style="width: 40%;">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <span class="fw-bold">Pemeriksaan Penunjang</span> dan hasil yang sudah ada :
                    <input type="text" style="width: 53%;">
                </td>
            </tr>

            <td rowspan="3" class="vertical-text">Pemeriksaan Fisik</td>
            <td colspan="5" style="height: 50px;">
                <div>
                    <span class="fw-bold">Status General</span> ( diisi oleh dokter )
                </div>
                <div class="d-flex">
                    <span class="fw-bold">Kondisi Umum</span>
                    <?php
                    // Daftar kondisi
                    $kondisi = [
                        "baik" => "Baik",
                        "tampak_sesak" => "Tampak Sesak",
                        "sesak" => "Sesak",
                        "pucat" => "Pucat",
                        "lemah" => "Lemah",
                        "kejang" => "Kejang",
                        "lainnya" => "Lainnya"
                    ];
                    ?>

                    <div class="ms-3">
                        <?php foreach ($kondisi as $id => $label): ?>
                            <input type="radio" id="<?= $id ?>" name="pilihKondisi">
                            <label for="<?= $id ?>"><?= $label ?></label>
                        <?php endforeach; ?>
                        <input type="text">
                    </div>
                </div>
            </td>
            <tr>
                <td colspan="3">
                    <div class="row">
                        <!-- Form Group Section -->
                        <span class="fw-bold">Jantung</span>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Inspeksi :</label>
                                <input type="text" class="form-control" placeholder="Masukkan data">
                            </div>
                            <div class="form-group">
                                <label for="">Palpasi :</label>
                                <div>
                                    <input type="checkbox">
                                    <label for="">ictus cordis</label>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Thrill</label>
                                        <input type="checkbox">
                                        <label for="">lain-lain</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Perkusi :</label>
                                <input type="text" class="form-control" placeholder="Masukkan data">
                            </div>
                            <div class="form-group">
                                <label for="">Auskultasi :</label>
                                <div>
                                    <label for="">s1( ), s2( ), / (A2, P2)</label>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">gallop</label>
                                        <input type="checkbox">
                                        <label for="">Bissing</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image Section -->
                        <div class="col-md-4 text-center">
                            <img src="img/test1.png" alt="Heart Diagram" class="img-fluid">
                        </div>
                    </div>


                </td>
                <td colspan="2">
                    <div class="row">
                        <!-- Form Group Section -->
                        <span class="fw-bold">Paru</span>
                        <?php
                        // Data untuk input inspeksi
                        $inputs = ["Inspeksi", "Palpasi", "Perkusi", "Auskultasi"];
                        ?>

                        <div class="col-md-8">
                            <?php foreach ($inputs as $input): ?>
                                <div class="form-group">
                                    <label for=""><?= $input ?> :</label>
                                    <input type="text" class="form-control" placeholder="Masukkan data">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Image Section -->
                        <div class="col-md-4 text-center">
                            <img src="img/test2.png" alt="Heart Diagram" class="img-fluid">
                        </div>
                </td>

            </tr>
            <tr>
                <td colspan="5">
                    <div class="d-flex">
                        <div>
                            <span class="fw-bold">Status Lokalis</span> (di isi oleh dokter)
                            <p>(Pemeriksaan keluhan saat ini)</p>
                        </div>
                        <div class="flex-grow-1">
                            <img src="img/test3.png" alt="Diagram" class="w-75">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <div class="">
                        <span class="fw-bold">Resiko Jatuh/ Cedera Isi formulir Monitoring pencegahan jatuh </span><span>(di isi oleh perawat)</span>
                        <div>
                            <input type="radio">
                            <label for="" class="me-2">Tidak</label>
                            <input type="radio">
                            <label for="">Ya, Jika ya, resiko jatuh warna kuning harus dipasang</label>
                        </div>
                    </div>
                    <div class="">
                        <span class="fw-bold">Status Fungsional</span><span> (di isi oleh perawat)</span>
                        <div>
                            <span class="fw-bold">Aktifitas dan mobilisasi : </span>
                            <input type="radio">
                            <label for="" class="me-2">Mandiri</label>
                            <input type="radio">
                            <label for="">Perlu bantuan, sebutkan :</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="">
                        <label for="">Alat bantu jalan, Sebutkan :</label>
                        <input type="text">
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <span class="fw-bold">Status Psiko-sosial spritual</span>
                    <span>(di isi oleh perawat)</span>
                    <div class="mt-2">
                        <h6 class="fw-bold mx-3">a. Status psikologi</h6>
                    </div>
                    <div class="mx-3">
                        <input type="radio">
                        <label for="" class="me-2">cemas</label>
                        <input type="radio">
                        <label for="" class="me-2">Takut</label>
                        <input type="radio">
                        <label for="" class="me-2">Marah</label>
                        <input type="radio">
                        <label for="" class="me-2">Sedih</label>
                        <input type="radio">
                        <label for="" class="me-2">Kecenderungan Bunuh Diri</label>
                        <input type="radio">
                        <label for="" class="me-2">Lainnya, sebutkan</label>
                        <input type="text">
                    </div>
                    <div class="mt-2">
                        <h6 class="fw-bold mx-3">b. Status Mental</h6>
                    </div>
                    <div>
                        <input type="radio" class="mx-3">
                        <label for="">Sadar dan orientasi baik</label>
                    </div>
                    <div>
                        <input type="radio" class="mx-3">
                        <label for="">Ada Masalah perilaku, sebutkan</label>
                        <input type="text">
                    </div>
                    <div>
                        <input type="radio" class="mx-3">
                        <label for="">Perilaku kekerasan yang dialami pasien sebelumnya</label>
                    </div>

                    <div class="mt-2">
                        <h6 class="mx-3 fw-bold">c. Status Sosial</h6>
                        <div class="mx-3">
                            <span>Hubungan dengan anggota keluarga :</span>
                            <input type="radio" class="me-2">
                            <label for="">baik</label>
                            <input type="radio">
                            <label for="">Tidak baik</label>
                        </div>
                        <div class="mx-3">
                            <span>Tempat Tinggal :</span>
                            <input type="radio">
                            <label for="" class="me-2">rumah</label>
                            <input type="radio">
                            <label for="" class="me-2">Apartemen</label>
                            <input type="radio">
                            <label for="" class="me-2">Panti</label>
                            <input type="radio">
                            <label for="" class="me-2">Lainnya,</label>
                            <input type="text">
                        </div>
                    </div>

                    <div>
                        <span class="mx-3">Kerabat dekat yang bisa dihubungi :</span>
                        <div class="mx-3">
                            <label for="">Nama :</label>
                            <input type="text">
                            <label for="">Hubungan :</label>
                            <input type="text">
                            <label for="">Telepon :</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="mt-2">
                        <h6 class="fw-bold mx-3">d. Status Spritual</h6>
                        <div class="mx-3 mb-2">
                            <label for="">Kegiatan keagamaan yang biasa dilakukan :</label>
                            <input type="text">
                        </div>
                        <div class="mx-3 mb-2">
                            <label for="">kegiatan spritual yang dibutuhkan selama perawatan :</label>
                            <input type="text">
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <span class="fw-bold">Diagnosis kerja / Diagnosis Banding</span><span> (Di isi oleh dokter)</span>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <span class="fw-bold">Intruksi Awal Dokter :</span>
                    <div class="form-group">
                        <textarea name="" id="" rows="7" class="w-100"></textarea>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    <span class="fw-bold">Diagnosa Keperawatan/ Kebidanan</span><span> ( di isi oleh perawat)</span>
                    <?php
                    // Data checkbox yang akan ditampilkan
                    $checkboxes = [
                        ["Gangguan integritas kulit", "Nyeri"],
                        ["Gangguan Pola tidur", "Gangguan Perfusi Jaringan"],
                        ["Gangguan Pola tidur", "Gangguan Perfusi Jaringan"],  // Duplicate, bisa disesuaikan jika perlu
                        ["Penurunan Curah jantung", "Hipetermia"],
                        ["Nutrisi kurang dari kebutuhan tubuh", "Intoleransi aktifitas"],
                        ["Retensi urin", "Konstipasi"],
                        ["Keefektifan kebersihan jalan nafas", "Diare"],
                        ["Keefektifan pertukaran gas", "Resiko cidera"],
                        ["Defisit Perawatan diri"]  // Hanya satu checkbox
                    ];
                    ?>

                    <div>
                        <?php foreach ($checkboxes as $group): ?>
                            <div>
                                <?php foreach ($group as $label): ?>
                                    <input type="checkbox">
                                    <label for="" class="me-4"><?php echo $label; ?></label>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <span class="fw-bold">Edukasi</span>
                    <div>
                        <textarea name="" id="" class="w-100" rows="6"></textarea>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="width: 330px;">
                    <div>
                        <span>Sei Rempah,</span>
                        <label for="">Tgl</label>
                        <input type="date" class="w-25">
                        <label for="">Jam</label>
                        <input type="text" class="w-25">
                    </div>
                    <div class="text-center mb-5">
                        <span>Tanda tangan DPJP</span>
                    </div>
                    <div>
                        <label for="">Nama :</label>
                        <input type="text">
                    </div>
                </td>
                <td colspan="2">
                    <div>
                        <span>Sei Rempah,</span>
                        <label for="">Tgl</label>
                        <input type="date" class="w-25">
                        <label for="">Jam</label>
                        <input type="text" class="w-25">
                    </div>
                    <div class="text-center mb-5">
                        <span>Tanda tangan Dokter Umum (bila ada)</span>
                    </div>
                    <div>
                        <label for="">Nama :</label>
                        <input type="text">
                    </div>
                </td>
                <td colspan="2">
                    <div>
                        <span>Sei Rempah,</span>
                        <label for="">Tgl</label>
                        <input type="date" class="w-25">
                        <label for="">Jam</label>
                        <input type="text" class="w-25">
                    </div>
                    <div class="text-center mb-5">
                        <span>Tanda tangan Perawat</span>
                    </div>
                    <div>
                        <label for="">Nama :</label>
                        <input type="text">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>


    <!-- tambah -->
    <!-- table 3 -->
    <table class="table table-bordered border-dark">
        <tr>
            <td>Tanggal</td>
            <td>Jam</td>
            <td>Catatan Kemajuan, Rencana Tindakan Terapi</td>
            <td>Profesi</td>
            <td>Nama Terang & Tanda tangan</td>
        </tr>
    </table>


</div>
</div>
</body>

</html>

<?php
include 'layout/footer.php';
