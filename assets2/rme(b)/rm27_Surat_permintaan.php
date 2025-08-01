<!-- rm 27 -->
<?php
include 'layout/head.php';
?>

<div class="row">
    <div class="col-12">
        <h4 class="text-center">SURAT PERNYATAAN PASIEN PULANG ATAS PERMINTAAN SENDIRI (PAPS)</h4>
        <div class="text-end" style="font-size: 24px;">Rm.27</div>
    </div>
</div>

<div class="row">
    <div class="col-12 my-3">
        <span>Yang Bertanda Tangan Di bawah ini :</span>
        <div class="form-group mt-2">
            <label for="">Nama :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Umur :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin :</label>
            <select name="" id="" class="form-control border-dark">
                <option value="">Jenkel >></option>
                <option value="">Laki-laki</option>
                <option value="">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Hubungan dengan pasien :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Alamat :</label>
            <input type="text" class="form-control border-dark">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <span>Menyatakan bahwa, Kami pihak keluarga pasien Menginginkan <span class="fw-bold">Pulang Atas Permintaan Sendiri (PAPS)</span> atas nama pasien :</span>
        <div class="form-group mt-2">
            <label for="">Nama :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">No.Rm :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Tanggal Lahir :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Ruangan/Kelas :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Dokter yang merawat :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Lama Dirawat :</label>
            <input type="text" class="form-control border-dark">
        </div>
        <div class="form-group">
            <label for="">Alasan minta pulang </label>
            <input type="text" class="form-control border-dark">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-2">
        <p>Saya mengakui telah menerima informasi dan penjelasan secara lengkap akan bahaya, risiko, dan kemungkinan lain yang bias timbul pada pasien. Kami akan menanggung segala risiko yang mungkin bisa timbul, dan tidak akan mempermasalahkan atau menuntut pihak Rumah Sakit Umum Daerah Sultan Sulaiman Serdang Bedagai maupun dokter yang merawatnya.</p>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <p>Yang Membuat Pernyataan</p>
    </div>
    <div class="col-6 text-end">
        <div>
            <label for="">Sei Rempah,</label>
            <input type="date" onclick="this.showPicker()">
        </div>
        <div>
            <span>Saksi</span>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-4">
        <input type="text" class="form-control w-100 border-dark">
    </div>
    <div class="col-4">
        <input type="text" class="form-control w-100 border-dark">
    </div>
    <div class="col-4">
        <input type="text" class="form-control w-100 border-dark">
    </div>
</div>
<?php
include 'layout/footer.php';
?>