<!-- rme elpi -->
<div class="row">
    <div class="table-responsive">
        <table class="table-borderless table border-dark">
            <tbody>
                <tr>
                    <td>
                        <div>12</div>
                        <table class="table-bordered table border-dark" style="width: 450px;">
                            <tbody>
                                <tr>
                                    <td colspan="3" class="fw-bold text-center">ALERGI OBAT</td>
                                </tr>
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    echo "<tr class='text-center'>
                    <td>$i</td>
                    <td><input type='text' class='form-control border-dark' name='input_tb1_{$i}_1'></td>
                    <td><input type='text' class='form-control border-dark' name='input_tb1_{$i}_2'></td>
                </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <div>Keterangan</div>
                        <div>Paraf I = Perawat</div>
                        <div>Paraf II = Farmasi</div>
                    </td>
                    <td>
                        <table class="table table-borderless border-dark">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <img src="<?= $images; ?>" alt="Logo" style="width: 250px;">
                                            <div>
                                                <h4><?= $site_title; ?></h4>
                                                <div><?= $lokasi; ?></div>
                                                <div><?= $telepon; ?></div>
                                                <?= $email; ?>
                                            </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2 my-2">
                                            <label for="" class="flex-shrink-0 col-4">Nama Pasien</label>
                                            <input type="text" name="nama_pasien" id="nama_pasien" class="form-control border-dark" style="width: 250px;">
                                        </div>
                                        <div class="d-flex align-items-center gap-2 my-2">
                                            <label for="" class="flex-shrink-0 col-4">Tgl/Lahir</label>
                                            <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control border-dark" style="width: 250px;">
                                        </div>
                                        <div class="d-flex align-items-center gap-2 my-2">
                                            <label for="" class="flex-shrink-0 col-4">NIK</label>
                                            <input type="text" name="nik" id="nik" class="form-control border-dark" style="width: 250px;">
                                        </div>
                                        <div class="d-flex align-items-center gap-2 my-2">
                                            <label for="" class="flex-shrink-0 col-4">Jenis Kelamin</label>
                                            <input type="text" name="jenkel" id="jenkel" class="form-control border-dark" style="width: 250px;">
                                        </div>
                                        <div class="d-flex align-items-center gap-2 my-2">
                                            <label for="" class="flex-shrink-0 col-4">TB</label>
                                            <input type="text" name="tb" id="tb" class="form-control border-dark" style="width: 250px;">cm
                                        </div>
                                        <div class="d-flex align-items-center gap-2 my-2">
                                            <label for="" class="flex-shrink-0 col-4">BB</label>
                                            <input type="text" name="bb" id="bb" class="form-control border-dark" style="width: 250px;">kg
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table class="table table-bordered border-dark ms-5" style="width: 550px;">
                            <tbody>
                                <tr>
                                    <td>Ruang/Kamar</td>
                                    <td><input type="text" class="form-control border-dark" name="no_bad"></td>
                                </tr>
                                <tr>
                                    <td>No.RM</td>
                                    <td><input type="text" class="form-control border-dark" name="no_rm"></td>
                                </tr>
                                <tr>
                                    <td>Dokter Yang Merawat</td>
                                    <td><input type="text" class="form-control border-dark" name="nama_dokter"></td>
                                </tr>
                                <tr>
                                    <td>Diagnosa</td>
                                    <td> <select type="select" name="diagnosa1" class="form-select diagnosa">
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Diet</td>
                                    <td><input type="text" class="form-control border-dark" name="diet"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="row">
            <table class="table-bordered border-dark table">
                <tr>
                    <td colspan="22">
                        <h5 class="fw-bold text-uppercase text-center">TABEL REKAMAN PEMBERIAN OBAT TEPAT WAKTU</h5>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">No</td>
                    <td rowspan="2">Nama Obat</td>
                    <td rowspan="2">Dosis Paraf</td>
                    <td colspan="2">Jumlah</td>
                    <td colspan="2">Tanggal Intruksi</td>
                    <td rowspan="2">Ket</td>
                    <td colspan="3">Tanggal</td>
                    <td colspan="3">Tanggal</td>
                    <td colspan="3">Tanggal</td>
                    <td colspan="3">Tanggal</td>
                </tr>
                <tr>
                    <td>Hari</td>
                    <td>Obat</td>
                    <td>Mulai Jam</td>
                    <td>Stop Jam</td>
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <td colspan="3">
                            <input type="date" name="tanggal_<?= $i ?>" id="tanggal_<?= $i ?>" class="form-control border-dark">
                        </td>
                    <?php endfor; ?>
                </tr>

                <?php
                // Mengulang untuk 3 baris per "No" (1, 2, 3), dan setiap No memiliki rowspan 3
                for ($no = 1; $no <= 10; $no++): // Misalnya untuk No 1, 2, 3
                    for ($row = 1; $row <= 3; $row++):
                        $labels = ['Jam', 'Paraf I', 'Paraf II']; // Label untuk setiap baris
                        $label = $labels[$row - 1];
                ?>
                        <tr>
                            <!-- Menampilkan No (1) untuk 3 baris dengan rowspan -->
                            <?php if ($row == 1): ?>
                                <td rowspan="3"><?= $no ?></td> <!-- Menampilkan No dengan rowspan 3 -->
                            <?php endif; ?>
                            <td><input type="text" name="input_namaobat_<?= $no ?>_<?= $row ?>" class="form-control border-dark" style="width: 250px;"></td>
                            <td><input type="text" name="input_dosisparaf_<?= $no ?>_<?= $row ?>" class="form-control border-dark" style="width: 250px;"></td>
                            <td><input type="text" name="input_jumlahHari_<?= $no ?>_<?= $row ?>" class="form-control border-dark" style="width: 250px;"></td>
                            <td><input type="text" name="input_jumlahObat_<?= $no ?>_<?= $row ?>" class="form-control border-dark" style="width: 250px;"></td>
                            <td><input type="time" name="input_tanggalindruksi_mulai_<?= $no ?>_<?= $row ?>" class="form-control border-dark" style="width: 250px;"></td>
                            <td><input type="time" name="input_tanggalindruksi_stop_<?= $no ?>_<?= $row ?>" class="form-control border-dark" style="width: 250px;"></td>
                            <td><input type="text" name="input_ket_<?= $no ?>_<?= $row ?>" class="form-control border-dark" style="width: 250px;" disabled value="<?= $label ?>"></td>

                            <?php for ($i = 1; $i <= 12; $i++): ?>
                                <td><input type="time" name="input_jam_perawat_<?= $no ?>_<?= $row ?>_<?= $i ?>" class="form-control border-dark" style="width: 150px;"></td>
                            <?php endfor; ?>
                        </tr>
                <?php
                    endfor;
                endfor;
                ?>
            </table>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        let page = 1;

        // Initialize Select2
        $('.diagnosa').select2({
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

        $('.diagnosa').on('select2:open', function() {
            $('.select2-results__options').on('scroll', function() {
                const $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                    page++; // Increment page
                    $('.diagnosa').select2('data', null); // Trigger new data fetch
                }
            });


        });
    });
</script>