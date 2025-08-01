<!-- Rm 1d -->
<?php
include 'layout/head.php';
?>


<div class="row">
    <div class="col-12">
        <h4 class="text-center text-uppercase">Lembaran Formulir Rawat Jalan
            <p>Layanan kedokteran fisik dan rehabilitas</p>
        </h4>
        <div class="text-end" style="font-size: 24px;">Rm.1d</div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td>
                        <div class="form-group mt-3">
                            <label for="">Nama Pasien :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                        <div class="form-group">
                            <label for="">NIK :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                        <div class="form-group">
                            <label for="">No. RM :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group mt-3">
                            <label for="">Tanggal lahir/Umur :</label>
                            <input type="date" class="form-control border-dark mx-2" onclick="this.showPicker()"> /
                            <input type="text" class="mx-2">
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
                            <label for="">Tgl Masuk</label>
                            <input type="date" class="form-control border-dark" onclick="this.showPicker()">
                        </div>
                        <div class="form-group">
                            <label for="">Nama DPJP :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                        <div class="form-group">
                            <label for="">Nilai Pribadi:</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span>( Tempelkan stiker identitas pasien jika tersedia )</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p class="ms-4 my-3">I. Di isi oleh Pasien/Peserta</p>
        <table class="table table-bordered border-dark">
            <tr>
                <td><label for="">Nama Pasien :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Tanggal Lahir :</label></td>
                <td><input type="date" class="form-control w-100 border-dark" onclick="this.showPicker()"></td>
            </tr>
            <tr>
                <td><label for="">Alamat :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Telp/Hp :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><span>Hubungan dengan bertanggung :</span></td>
                <td>
                    <div class="d-flex gap-3 align-items-center">
                        <input type="radio">
                        <label for="">Suami/Istri</label>
                        <input type="radio">
                        <label for="">anak</label>
                        <label for="">Lainnya</label>
                        <input type="text" class="border-dark form-control ">
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p class="ms-4 my-3">II. Diisi oleh Dokter Sp.KFR </p>
        <table class="table table-bordered border-dark">

            <tr>
                <td><label for="">Tanggal Pelayanan :</label></td>
                <td><input type="date" class="form-control w-100 border-dark" onclick="this.showPicker()"></td>
            </tr>
            <tr>
                <td><label for="">Anamnesa :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Pemeriksaan Fisik dan Uji fungsi :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Diagnosis Medis (ICD 10) :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Diagnosis Fungsi (ICD 10) :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Pemeriksaan Penunjang :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Tata Laksana KFR (ICD 10) :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Anjuran :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Evaluasi :</label></td>
                <td><input type="text" class="form-control w-100 border-dark"></td>
            </tr>
            <tr>
                <td><label for="">Suspek Penyakit Akibat Kerja :</label></td>
                <td>
                    <div class="d-flex gap-3 align-items-center">
                        <input type="radio">
                        <label for="">Ya</label>
                        <input type="radio">
                        <label for="">Tidak</label>
                        <label for="">Lainnya</label>
                        <input type="text" class="form-control border-dark">
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- table 3 -->
<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <label for="" class="mt-2 mb-5 text-center">Tanda Tangan Pasien</label>
                    <input type="text" class="form-control w-100 border-dark">
                </td>
                <td>
                    <div class="d-flex mb-5">
                        <label for="" class="text-center" style="flex:0 0 180px">Sei Rempah,</label>
                        <input type="date" onclick="this.showPicker()" class="form-control border-dark" style="height:32px">
                    </div>
                    <input type="text" class="form-control w-100 border-dark">
                </td>
            </tr>
        </tbody>
    </table>

</div>


<?php
include 'layout/footer.php';
?>