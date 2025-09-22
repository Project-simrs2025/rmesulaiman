<div class="row">
    <div class="table-responsive">
        <div class="col-12">
            <table class="table table-bordered border-dark">
                <tbody>
                    <tr>
                        <td colspan="10">
                            <div class="text-center">
                                <img src="<?= $images; ?>" alt="logo">
                                <div><?= $site_title; ?></div>
                                <div><?= $lokasi; ?></div>
                            </div>
                        </td>
                        <td rowspan="3" colspan="6">
                            <div>
                                <div class="form-group">
                                    <label for="">Nomor RM :</label>
                                    <input type="text" class="form-control border-dark" name="no_rm">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama :</label>
                                    <input type="text" class="form-control border-dark" name="nama_pasien">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal lahir :</label>
                                    <input type="text" class="form-control border-dark" name="tgl_lahir">
                                </div>
                                <div class="form-group">
                                    <label for="">jenis kelamin :</label>
                                    <input type="text" class="form-control border-dark" name="jenkel">
                                </div>
                                <div class="form-group">
                                    <label for="">alamat :</label>
                                    <input type="text" class="form-control border-dark" name="alamat">
                                </div>
                            </div>
                        </td>
                        <td class="col-3">
                            <div style="width: 500px;">Riwayat Alergi obat</div>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="d-flex gap-2">
                                    <input type="radio" name="rw_alergi" value="ya" class="custom-checkbox-danger" id="ya">
                                    <label for="tidak">Tidak</label>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <div>
                                        <input type="radio" name="rw_alergi" value="ya" class="custom-checkbox-success" id="ya">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="ya" class="flex-shrink-0">Ya, Sebutkan</label>
                                        <input type="text" class="form-control border-dark" name="ya_input">

                                    </div>
                                </div>
                            </div>
                        </td>
                        <td colspan="16">
                            <h1 class="text-center fw-bold">rm 28</h1>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center fw-bold" colspan="10">INSTRUKSI MEDIK FARMAKOLOGI </td>
                        <td colspan="17" class="text-center">Waktu Pemberian Obat</td>
                    </tr>
                    <tr>
                        <td class="text-center fw-bold" colspan="10">DAN PEMANTAUAN PEMBERIAN OBAT PASIEN</td>
                        <td>Tanggal</td>
                        <td colspan="4"><input type="date" name="tgl_1_pemantauan" class="form-control border-dark" style="width: 400px;"></td>
                        <td colspan="4"><input type="date" name="tgl_2_pemantauan" class="form-control border-dark" style="width: 400px;"></td>
                        <td colspan="4"><input type="date" name="tgl_3_pemantauan" class="form-control border-dark" style="width: 400px;"></td>
                        <td colspan="4"><input type="date" name="tgl_4_pemantauan" class="form-control border-dark" style="width: 400px;"></td>
                    </tr>
                    <tr>
                        <td colspan="16">
                            <div class="d-flex gap-2 align-items-center">
                                <label for="" class="fw-bold flex-shrink-0">Ruang Rawat Awal</label>
                                <input type="text" class="form-control border-dark" name="ruang_rawat_awal">
                            </div>
                        </td>
                        <td>Ruang</td>
                        <td colspan="4"><input type="text" class="form-control border-dark" name="ruang_1" style="width:400px"></td>
                        <td colspan="4"><input type="text" class="form-control border-dark" name="ruang_2" style="width:400px"></td>
                        <td colspan="4"><input type="text" class="form-control border-dark" name="ruang_3" style="width:400px"></td>
                        <td colspan="4"><input type="text" class="form-control border-dark" name="ruang_4" style="width:400px"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">No</td>
                        <td colspan="2">Order</td>
                        <td rowspan="2">Nama Obat</td>
                        <td rowspan="2">Dosis</td>
                        <td colspan="5">Frekwensi Pemberian</td>
                        <td rowspan="2">Rute</td>
                        <td rowspan="2">Informasi/Keterangan</td>
                        <td colspan="3">Durasi Terapi</td>
                        <td rowspan="2">Review Farmasi</td>
                        <td>Hari Ke</td>
                        <td colspan="4"><input type="text" class="form-control border-dark" style="width:400px" name="hari_ke_1"></td>
                        <td colspan="4"><input type="text" class="form-control border-dark" style="width:400px" name="hari_ke_2"></td>
                        <td colspan="4"><input type="text" class="form-control border-dark" style="width:400px" name="hari_ke_3"></td>
                        <td colspan="4"><input type="text" class="form-control border-dark" style="width:400px" name="hari_ke_4"></td>
                    </tr>
                    <tr>
                        <td>Tgl</td>
                        <td>Jam</td>
                        <td>Tiap 24jam</td>
                        <td>Tiap 12jam</td>
                        <td>Tiap 8jam</td>
                        <td>Tiap 6jam</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                Tiap <input type="text" class="form-control border-dark" name="tiap_jam" style="width: 100px;" disabled>jam
                            </div>
                        </td>
                        <td>Tanggal Mulai</td>
                        <td>Tanggal stop</td>
                        <td>Tanggal TTd/Nama DPJP</td>
                        <td>Waktu</td>
                        <td class="text-center" style="width:80px;">0-6</td>
                        <td class="text-center" style="width:80px;">4-12</td>
                        <td class="text-center" style="width:80px;">12-18</td>
                        <td class="text-center" style="width:80px;">18-24</td>
                        <td class="text-center" style="width:80px;">0-6</td>
                        <td class="text-center" style="width:80px;">4-12</td>
                        <td class="text-center" style="width:80px;">12-18</td>
                        <td class="text-center" style="width:80px;">18-24</td>
                        <td class="text-center" style="width:80px;">0-6</td>
                        <td class="text-center" style="width:80px;">4-12</td>
                        <td class="text-center" style="width:80px;">12-18</td>
                        <td class="text-center" style="width:80px;">18-24</td>
                        <td class="text-center" style="width:80px;">0-6</td>
                        <td class="text-center" style="width:80px;">4-12</td>
                        <td class="text-center" style="width:80px;">12-18</td>
                        <td class="text-center" style="width:80px;">18-24</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="16">A. OBAT NON PARENTERAL</td>
                        <td colspan="17">A. OBAT NON PARENTERAL</td>
                    </tr>
                    <?php
                    for ($i = 1; $i <= 15; $i++) {
                    ?>
                        <tr class="text-center">
                            <td><?php echo $i; ?></td>
                            <td><input type='date' name='order_tanggaltb1_<?= $i; ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td><input type='time' name='order_jamtb1_<?= $i; ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td><input type='text' name='nama_obattb1_<?= $i; ?>' style='width: 300px;' class='form-control border-dark'></td>
                            <td><input type='text' name='nama_dosistb1_<?= $i; ?>' style='width: 300px;' class='form-control border-dark'></td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb1_<?= $i; ?>' class='custom-checkbox-success' value='24jam'></div>
                            </td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb1_<?= $i; ?>' class='custom-checkbox-success' value='12jam'></div>
                            </td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb1_<?= $i ?>' class='custom-checkbox-success' value='8jam'></div>
                            </td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb1_<?= $i; ?>' class='custom-checkbox-success' value='6jam'></div>
                            </td>
                            <td>
                                <div class='d-flex align-items-center gap-2'>
                                    <input type='radio' name='check_frewkuensi_pemberiantb1_<?= $i; ?>' class='custom-checkbox-success' value='frewkuensi_radiotb1_<?= $i; ?>'>
                                    Tiap <input type='text' class='form-control border-dark' name='tiap_jamtb1_<?= $i; ?>' style='width: 100px;'> jam
                                </div>
                            </td>
                            <td><input type='text' class='form-control border-dark' style='width: 200px;' name='rutetb1_<?= $i; ?>'></td>
                            <td><input type='text' class='form-control border-dark' style='width: 200px;' name='informasi_keterangantb1_<?= $i; ?>'></td>
                            <td><input type='date' name='tanggal_mulaitb1_<?= $i ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td><input type='date' name='tanggal_stoptb1_<?= $i ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td>
                                <div style="width: 300px;">
                                    <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umumtb1<?php echo $i; ?>" />
                                    <select type="select" name="dokter_umumtb1<?php echo $i; ?>" id="dokter_umumtb1<?php echo $i; ?>" class="form-select dokter_umum" style="width: 80%;"></select>
                                </div>
                            </td>
                            <td><input type='text' name='nama_rewview_farmasitb1_<?= $i ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td class="text-start"><?= $i; ?></td>

                            <?php
                            // Perulangan untuk 3 input waktu_jam_parental dan dokter_umum
                            for ($j = 1; $j <= 16; $j++) {
                            ?>
                                <td>
                                    <div class='d-flex flex-column gap-2'>
                                        <div class="d-flex justify-content-center">
                                            <input type='text' name='waktu_jam_parental_<?= $i; ?>_top_<?= $j; ?>' class='form-control border-dark' style='width: 150px;'>
                                        </div>
                                        <div class="mt-4">
                                            <label for="">Nama Perawat/Bidan</label>
                                            <select type="select" name="perawat_penerima_non<?= $i; ?>_top_<?= $j; ?>" id="perawat_penerima_non<?= $i; ?>_top_<?= $j; ?>" class="form-select perawat" style="width: 200px;"></select>
                                        </div>
                                        <div class="mt-4">
                                            <label for="">Nama Perawat pemberi obat</label>
                                            <select type="select" name="perawat_pemberi_non<?= $i; ?>_top_<?= $j; ?>" id="perawat_pemberi_non<?= $i; ?>_top_<?= $j; ?>" class="form-select perawat" style="width: 200px;"></select>
                                        </div>
                                    </div>
                                </td>
                            <?php
                            }
                            ?>

                        </tr>
                    <?php
                    }
                    ?>






                    <tr class="text-center">
                        <td colspan="16">B. OBAT PARENTERAL</td>
                        <td colspan="17">B. OBAT PARENTERAL</td>
                    </tr>
                    <?php
                    for ($i = 1; $i <= 15; $i++) {
                    ?>
                        <tr class="text-center">
                            <td><?php echo $i; ?></td>
                            <td><input type='date' name='order_tanggaltb2_<?= $i; ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td><input type='time' name='order_jamtb2_<?= $i; ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td><input type='text' name='nama_obattb2_<?= $i; ?>' style='width: 300px;' class='form-control border-dark'></td>
                            <td><input type='text' name='nama_dosistb2_<?= $i; ?>' style='width: 300px;' class='form-control border-dark'></td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb2_<?= $i; ?>' class='custom-checkbox-success' value='24jam'></div>
                            </td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb2_<?= $i; ?>' class='custom-checkbox-success' value='12jam'></div>
                            </td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb2_<?= $i ?>' class='custom-checkbox-success' value='8jam'></div>
                            </td>
                            <td>
                                <div style='margin: 0 40px;'><input type='radio' name='check_frewkuensi_pemberiantb2_<?= $i; ?>' class='custom-checkbox-success' value='6jam'></div>
                            </td>
                            <td>
                                <div class='d-flex align-items-center gap-2'>
                                    <input type='radio' name='check_frewkuensi_pemberiantb2_<?= $i; ?>' class='custom-checkbox-success' value='frewkuensi_radiotb2_<?= $i; ?>'>
                                    Tiap <input type='text' class='form-control border-dark' name='tiap_jamtb2_<?= $i; ?>' style='width: 100px;'> jam
                                </div>
                            </td>
                            <td><input type='text' class='form-control border-dark' style='width: 200px;' name='rutetb2_<?= $i; ?>'></td>;
                            <td><input type='text' class='form-control border-dark' style='width: 200px;' name='informasi_keterangantb2_<?= $i; ?>'></td>
                            <td><input type='date' name='tanggal_mulaitb2_<?= $i ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td><input type='date' name='tanggal_stoptb2_<?= $i ?>' style='width: 200px;' class='form-control border-dark'></td>
                            <td>
                                <div style="width: 300px;">
                                    <img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umumtb2<?php echo $i; ?>" />
                                    <select type="select" name="dokter_umumtb2<?php echo $i; ?>" id="dokter_umumtb2<?php echo $i; ?>" class="form-select dokter_umum" style="width: 80%;"></select>
                                </div>
                            </td>
                            <td><input type='text' name='nama_rewview_farmasitb2_<?= $i ?>' style='width: 200px;' class='form-control border-dark'></td>

                            <td class="text-start"><?= $i; ?></td>
                            <?php
                            // Perulangan untuk 3 input waktu_jam_parental dan dokter_umum
                            for ($j = 1; $j <= 16; $j++) {
                            ?>
                                <td>
                                    <div class='d-flex flex-column gap-2'>
                                        <div class="d-flex justify-content-center">
                                            <input type='text' name='waktu_jam_parental_parental<?= $i; ?>_bottom_<?= $j; ?>' class='form-control border-dark' style='width: 150px;'>
                                        </div>
                                        <div class="mt-4">
                                            <label for="">Nama Perawat/Bidan</label>
                                            <select type="select" name="perawat_penerima_parental<?= $i; ?>_top_<?= $j; ?>" id="perawat_penerima_parental<?= $i; ?>_top_<?= $j; ?>" class="form-select perawat" style="width: 200px;"></select>
                                        </div>
                                        <div class="mt-4">
                                            <label for="">Nama Perawat pemberi obat</label>
                                            <select type="select" name="perawat_pemberi_parental<?= $i; ?>_top_<?= $j; ?>" id="perawat_pemberi_parental<?= $i; ?>_top_<?= $j; ?>" class="form-select perawat" style="width: 200px;"></select>
                                        </div>
                                    </div>
                                </td>
                            <?php
                            }
                            ?>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </div>
    </div>
</div>


<script>
    let dataDokter = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"


    function cbCommon(data) {
        populateFormFields(data);

        // dokter img untuk tb1
        const jumlahDoktertb1 = 15;
        for (let i = 1; i <= jumlahDoktertb1; i++) {
            const dokterSelecttb1 = `#dokter_umumtb1${i}`;
            const qrIdtb1 = `qr_dokter_umumtb1${i}`;

            $(dokterSelecttb1).prop('disabled', false).select2('open').select2('close');

            if (mode === "lihat") {
                $(dokterSelecttb1).prop('disabled', true);
            }

            setTimeout(() => {
                console.log(dataDokter);
                dataDokter?.forEach(v => {
                    if (v.text === $(dokterSelecttb1).select2('data')[0]?.text) {
                        QRSignatureAPI(v.id_original, qrIdtb1); // QR code tb1
                    }
                });
            }, 500);
        }



        // dokter img untuk tb1
        const jumlahDoktertb2 = 15;
        for (let a = 1; a <= jumlahDoktertb2; a++) {
            const dokterSelecttb2 = `#dokter_umumtb2${i}`;
            const qrIdtb2 = `qr_dokter_umumtb2${i}`;

            $(dokterSelecttb2).prop('disabled', false).select2('open').select2('close');

            if (mode === "lihat") {
                $(dokterSelecttb2).prop('disabled', true);
            }

            setTimeout(() => {
                console.log(dataDokter);
                dataDokter?.forEach(v => {
                    if (v.text === $(dokterSelecttb2).select2('data')[0]?.text) {
                        QRSignatureAPI(v.id_original, qrIdtb2); // QR code tb1
                    }
                });
            }, 500);
        }


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
                    dataDokter = items;
                    console.log("Dokter data:", dataDokter); // Menambahkan log untuk mengecek data dokter
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

    function listPerawat() {
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
                    dataPerawat = items;
                    console.log("Dokter data:", dataPerawat); // Menambahkan log untuk mengecek data dokter
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


    // mulai
    $(document).ready(function() {
        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        listDokterUmumAPI()
        listPerawat()


        // mulai aktif jumlah dokter
        const jumlahDokter = 15;

        for (let i = 1; i <= jumlahDokter; i++) {
            $(`#dokter_umumtb1${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_dokter_umumtb1${i}`);
            });
        }
        // batas jumlah


        // mulai aktif jumlah dokter
        const jumlahDoktertb2 = 15;

        for (let a = 1; a <= jumlahDoktertb2; a++) {
            $(`#dokter_umumtb2${a}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_dokter_umumtb2${a}`);
            });
        }


        // batas
    })
</script>