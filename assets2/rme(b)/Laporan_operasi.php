<!-- rm 18 e Laporan Operasi-->
<?php
include 'layout/head.php';
?>

<div class="row">
    <div class="col-12">
        <h4 class="fw-bold text-center text-decoration-underline">Laporan Operasi</h4>
        <p class="text-end">No.Rm</p>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">Nama Pasien :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Ruangan :</label>
            <input type="text">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">No Rekam Medis:</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir :</label>
            <input type="date">
        </div>
    </div>

    <table class="table table-bordered mt-2" style="border:1px solid black">
        <tbody>
            <tr>
                <td>
                    <label for="">Nama Ahli Bedah :</label>
                    <input type="text" class="w-100">
                </td>
                <td colspan="2">
                    <label for="">Nama Asistant :</label>
                    <input type="text" class="w-100">
                </td>
                <td>
                    <label for="">Nama Perawat :</label>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Nama Ahli Anasthesi :</label>
                    <input type="text" class="w-50">
                </td>
                <td colspan="2">
                    <label for="">Jenis Anasthesi</label>
                    <input type="text" class="w-75">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Diagnosis pre- Operatif :</label>
                    <div>
                        <input type="text" class="w-100">
                    </div>
                </td>
                <td colspan="2">
                    <label for="">Macam Pembedahan</label>
                    <div class="form-group">
                        <input type="radio"> <label for="">Besar</label>
                        <input type="radio"> <label for="">Elective</label>
                    </div>
                    <div class="form-group">
                        <input type="radio"> <label for="">Sedang</label>
                        <input type="radio"> <label for="">Emergency</label>
                    </div>
                    <div class="form-group">
                        <input type="radio"> <label for="">Kecil</label>
                        <!-- hidden -->
                        <input type="radio" style="visibility: hidden;"> <label for="" style="visibility: hidden;">Kecil</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="">Diagnosis post operatif :</label>
                    <input type="text" class="w-50">
                </td>
                <td colspan="2">
                    <div class="form-group">
                        <input type="radio"> <label for="">Ya</label>
                        <input type="radio"> <label for="">Tidak</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="">Jaringan yang di – Eksisi / Insisi :</label>
                    <textarea name="" id="" rows="4" class="w-100"></textarea>
                    <label for="">Nama / Macam Operasi</label>
                    <textarea name="" id="" rows="4" class="w-100"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tanggal Operasi</label>
                    <input type="date" class="w-100">
                </td>
                <td>
                    <label for="">Jam Operasi Dimulai :</label>
                    <input type="time" class="w-100">
                </td>
                <td>
                    <label for="">Jam Operasi Selesai</label>
                    <input type="time" class="w-100">
                </td>
                <td>
                    <label for="">Lama Operasi Berlangsung</label>
                    <input type="time" class="w-100">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="">Laporan</label>
                    <textarea name="" id="" rows="6" class="w-100"></textarea>
            </tr>
            <tr>
                <td colspan="4" class="text-end">
                    <label for="" class="text-center mb-4">Nama & Tanda Tangan <p>Dokter Spesialis Ahli Bedah</p></label>
                    <div>
                        <input type="text">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <?php
    include 'layout/footer.php';
    ?>