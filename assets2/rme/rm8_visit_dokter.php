<?php
include 'layout/head.php';
?>


<div class="row">
    <div class="col-12">
        <h4 class="text-center text-uppercase">Data Visit Dokter</h4>
        <div class="text-end" style="font-size: 24px;">Rm.8</div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">NO. RM :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Nama Pasien :</label>
            <input type="text" class="form-control border-dark">
        </div>

        <div class="form-group">
            <label for="">Dirawat Di :</label>
            <input type="text" class="form-control border-dark mx-2">
            <label for="" style="flex:0 0 50px;">Kelas</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Masuk Tanggal :</label>
            <input type="date" class="form-control border-dark mx-2" onclick="this.showPicker()">
            <label for="" style="flex:0 0 50px;">Pukul</label>
            <input type="time" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Pulang Tanggal :</label>
            <input type="date" class="form-control border-dark mx-2" onclick="this.showPicker()">
            <label for="" style="flex:0 0 50px;">Pukul</label>
            <input type="time" class="form-control border-dark">
        </div>
    </div>

    <!-- side -->
    <div class="col-6">
        <span>Status Keperawatan :</span>
        <div class="form-group">
            <input type="radio">
            <label for="">Umum</label>
            <input type="radio">
            <label for="">BPJS Ketenagakerjaan</label>
        </div>
        <div class="form-group">
            <input type="radio">
            <label for="">BPJS</label>
            <input type="radio">
            <label for="">Jasaraharja</label>
        </div>
        <div class="form-group">
            <input type="radio">
            <label for="">Jampersal</label>
            <input type="radio">
            <label for="">Jamkesda</label>
        </div>
    </div>
</div>

<table class="table table-bordered border-dark mt-3 text-center">
    <thead>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Dokter</th>
        <th>Waktu Visite ( Waktu )</th>
        <th>Tanda Tangan</th>
    </thead>
</table>


<?php
include 'layout/footer.php';
