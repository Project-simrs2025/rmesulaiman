<!-- RM 18a persiapan operasi -->
<?php
include 'layout/head.php'
?>

<div class="row">
    <div class="col-12">
        <h4 class="fw-bold text-center text-decoration-underline">Persiapan Operasi</h4>
        <p class="text-end">No.Rm. 18a</p>
    </div>
</div>


<div class="row">
    <div class="col-7">
        <div class="form-group">
            <label for="" class="custom-label">No. Rekam Medis :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Nama Pasien :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Tgl Lahir</label>
            <input type="date">
        </div>
        <div class="form-group">
            <label for="">Kelas / Ruangan :</label>
            <input type="text" class="me-2"> / <input type="text" class="ms-2">
        </div>
        <div class="form-group">
            <label for="">Dokter yang merawat :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Ahli Anesthesi :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Tanggal / Jam Operasi :</label>
            <input type="date" class="me-2"> / <input type="time" class="mx-2"> WIB
        </div>
        <div class="form-group">
            <label for="">Diagnosa Pra Operasi :</label>
            <input type="text">
        </div>

    </div>

    <table class="table table-bordered mt-2" style="border:1px solid black">
        <thead class="text-center">
            <th>No</th>
            <th>TINDAKAN YANG HARUS DILAKUKAN</th>
            <th>SUDAH</th>
            <th>TIDAK</th>
            <th>KETERANGAN</th>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">I</td>
                <td>Melapor ke :</td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="text" class="w-100"></td>
            </tr>
            <tr class="text-center">
                <td></td>
                <td>- Dokter Bedah</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
                <td><input type="text" class="w-100"></td>
            </tr>
            <tr class="text-center">
                <td></td>
                <td>- Dokter Aneshtesi</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
                <td><input type="text" class="w-100"></td>
            </tr>
            <tr class="text-center">
                <td></td>
                <td>- Instalasi Bedah Sentral</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
                <td><input type="text" class="w-100"></td>
            </tr>
            <tr>
                <td class="text-center">II</td>
                <td>Persiapan :</td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="text" class="w-100"></td>
            </tr>
            <tr>
                <td></td>
                <td>1. Mengisi lembar informed concent</td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="text" class="w-100"></td>
            </tr>
            <tr>
                <td></td>
                <td>2. Mengingatkan, Menuntun Doa sebelum operasi</td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="text" class="w-100"></td>
            </tr>
            <tr>
                <td></td>
                <td>3. Jasmani</td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="text" class="w-100"></td>
            </tr>

            <?php
            $items = [
                ['3.1', 'Mencukur rambut daerah yang akan dioperasi'],
                ['3.2', 'Puasa'],
                ['3.3', 'Melakukan klisma'],
                ['3.4', 'Memeriksa gigi palsu yg bisa lepas'],
                ['3.6', 'Melepas perhiasan'],
                ['3.7', 'Menghapus lipstik'],
                ['3.8', 'Memakai baju operasi dengan rapi'],
                ['3.9', 'Memberikan premedikasi'],
                ['3.10', 'T.N.P dan Suhu'],
                ['3.11', 'Pemasangan Katheter'],
                ['3.12', 'Pemeriksaan Laboratorium'],
                ['3.13', 'Thorax, EKG'],
                ['lain-lain', '']
            ];

            foreach ($items as $item) {
                $label = $item[0] . ' ' . $item[1];
                echo '<tr>
                    <td></td>
                    <td style="padding-left:24px">' . $label . '</td>
                    <td class="text-center"><input type="radio"></td>
                    <td class="text-center"><input type="radio"></td>
                    <td class="text-center"><input type="text" class="w-100"></td>
                </tr>';
            }
            ?>
            <tr>
                <td></td>
                <td style="padding-left: 12px;">
                    <label for="">lain-lain,</label>
                    <input type="text" class="w-75">
                </td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="radio"></td>
                <td class="text-center"><input type="text" class="w-100"></td>
            </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-6 text-center">
            <label for="">Yang, Menyerahkan
                <p>Perawat Ruangan</p>
            </label>
            <div class="my-5">
                <input type="text">
            </div>
        </div>
        <div class="col-6 text-center">
            <label for="">Yang, Menerima
                <p>Perawat Kamar Bedah</p>
            </label>
            <div class="my-5">
                <input type="text">
            </div>
        </div>
    </div>



    <?php
    include 'layout/footer.php'
    ?>