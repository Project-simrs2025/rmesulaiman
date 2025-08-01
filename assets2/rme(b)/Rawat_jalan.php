<!-- info RM 1 A rawat jalan -->

<?php
include 'layout/head.php';
?>


<div class="row">
    <div class="col-12">
        <h2 class="text-center">Resume Rawat Jalan</h2>
        <div class="text-end" style="font-size: 24px;">Rm.1a</div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">Nama pasien :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">No.Rm :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">NIK :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin :</label>
            <select name="" id="" class="form-control border border-dark">
                <option value="">Jenis Kelamin</option>
                <option value="">Laki-laki</option>
                <option value="">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">Agama :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Pekerjaan :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Suku Bangsa :</label>
            <input type="text">
        </div>
        <div class="form-group">
            <label for="">Alamat :</label>
            <input type="text">
        </div>
    </div>

    <!-- table -->
    <table class="table table-bordered" style="border: 1px solid black;">
        <thead>
            <tr>
                <th rowspan="2">Tanggal</th>
                <th rowspan="2">Poliklinik Yang Dituju</th>
                <th colspan="3" class="text-center">Diisi Oleh Dokter</th>
                <th rowspan="2">Nama & TT Dokter</th>
                <th rowspan="2">Kode Diagnosa</th>
            </tr>
            <tr>
                <th>Anamnese / Pemeriksaan</th>
                <th>Diagnosa</th>
                <th>Rencana Pelayanan & Therapi</th>
            </tr>
        </thead>
    </table>
    <h6 class="text-end">Tanda tangan Pasien/ Keluarga Pasien</h6>
</div>
</div>