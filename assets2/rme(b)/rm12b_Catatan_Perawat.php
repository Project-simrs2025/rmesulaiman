<!-- rm 12b -->
<?php
include 'layout/head.php';
?>

<div class="row">
    <div class="col-12">
        <h4 class="text-center">Catatan Perawat</h4>
        <div class="text-end" style="font-size: 24px;">Rm.12 b</div>
    </div>
</div>


<div class="row my-3">
    <div class="col-6">
        <div class="form-group">
            <label for="">No.Rm :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Nama :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Ruang :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Kelas :</label>
            <input type="text" class="form-control border-dark">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">Tanggal Lahir :</label>
            <input type="date" onclick="this.showPicker()" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin :</label>
            <select name="" id="" class="form-control border-dark">
                <option value="">Jenkel</option>
                <option value="">Laki-laki</option>
                <option value="">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Agama :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Suku :</label>
            <input type="text" class="form-control border-dark">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered mt-3 border border-dark">
            <thead class="text-center">
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Catatan Perawat</th>
                <th>Paraf/ Nama Perawat</th>
            </thead>
        </table>
    </div>
</div>
<?php
include 'layout/footer.php';
?>