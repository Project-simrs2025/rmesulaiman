<!-- Rm 18 -->
<?php
include 'layout/head.php';
?>


<div class="row">
    <div class="col-12">
        <h4 class="text-center text-uppercase">Formulir Penjadwalan Operasi</h4>
        <div class="text-end" style="font-size: 24px;">Rm.18</div>
    </div>
</div>


<div class="row my-4">
    <div class="col-12">
        <div class="form-group">
            <label for="">NO. REKAM MEDIS :</label>
            <input type="text" class="form-control w-100 border-dark">
        </div>
        <div class="form-group">
            <label for="">NAMA PASIEN :</label>
            <input type="text" class="form-control w-100 border-dark">
        </div>
        <div class="form-group">
            <label for="">TGL LAHIR :</label>
            <input type="date" class="form-control w-100 border-dark" oncanplay="this.shoPicker()">
        </div>
        <div class="form-group">
            <label for="">RUANGAN :</label>
            <input type="text" class="form-control w-100 border-dark">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="d-block fst-italic">
            <span>Petunjuk Pengisian :</span>
            <span>Diisi oleh perawat ruangan dan perawat IBS</span>
            <span>Isi kolom dengan tulisan yang bisa dibaca dengan jelas</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td><label for="">Diagnosa :</label>
                        <input type="text" class="form-control border-dark">
                    </td>
                    <td colspan="2"><label for="">Rencana Operasi :</label>
                        <input type="text" class="form-control border-dark">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Nama Dokter Bedah :</label>
                        <input type="text" class="form-control border-dark">
                    </td>
                    <td colspan="2"><label for="">Nama Dokter Anastesi :</label>
                        <input type="text" class="form-control border-dark">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Operasi :</label>
                        <input type="date" class="form-control border-dark" onclick="this.showPicker()">
                    </td>
                    <td><label for="">Jam Operasi :</label>
                        <input type="time" class="form-control border-dark">
                    </td>
                    <td>
                        <label for="">Jenis Operasi (Emergency Efektif) :</label>
                        <input type="text" class="form-control border-dark">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Penjadwalan :</label>
                        <input type="date" class="form-control border-dark" onclick="this.showPicker()">
                    </td>
                    <td colspan="2"><label for="">Jam Penjadwalan :</label>
                        <input type="time" class="form-control border-dark">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Nama Dan Tanda Tangan Petugas Penjadwalan :</label>
                        <input type="text" class="form-control border-dark">
                    </td>
                    <td colspan="2"><label for="">Nama dan tanda tangan petugas IBS yang menerima penjadwalan :</label>
                        <input type="text" class="form-control border-dark">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
include 'layout/footer.php';
?>