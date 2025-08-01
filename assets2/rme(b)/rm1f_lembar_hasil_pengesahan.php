<!-- Rm 1f -->
<?php
include 'layout/head.php';
?>


<div class="row">
    <div class="col-12">
        <h4 class="text-center text-uppercase">Lembaran Hasil tindakan
            <p>uji fungsi / Prosedur KFR</p>
        </h4>
        <div class="text-end" style="font-size: 24px;">Rm.1 f</div>
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
        <table class="table table-bordered border-dark mt-3">
            <tr>
                <td colspan="2">
                    <label for="">Lembaran Hasil Tindakan Uji Fungsi / Prosedur KFR :</label>
                    <input type="text" class="form-control border-dark my-2">
                    <span>(koding)</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex flex-column gap-4">
                        <label for="">Nama :</label>
                        <label for="">Tanggal Lahir / Usia :</label>
                        <label for="">Tanggal Pemeriksaan :</label>
                        <label for="">Diagnosa Fungsional : </label>
                        <label for="">Diagnosa Medis :</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <input type="text" class="form-control border-dark">
                        <div class="d-flex">
                            <input type="date" class="form-control border-dark me-2" onclick="this.shoPicker()"> /
                            <input type="text" class="form-control border-dark ms-2">
                        </div>
                        <input type="date" class="form-control border-dark" onclick="this.showPicker()">
                        <input type="text" class="form-control border-dark">
                        <input type="text" class="form-control border-dark">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex flex-column gap-4">
                        <label for="">Instrumen Uji Fungsi/ Prosedur KFR :</label>
                        <label for="">Hasil Yang Di Dapat :</label>
                        <label for="">Kesimpulan :</label>
                        <label for="">Rekomendasi : </label>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2">
                        <input type="text" class="form-control border-dark">
                        <input type="text" class="form-control border-dark">
                        <input type="text" class="form-control border-dark">
                        <input type="text" class="form-control border-dark">
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="text-end">
        <span>Tanda Tangan, </span>
        <div class="mt-5">
            <label for="">Dr. </label>
            <input type="text" class="form-control border-dark w-25 ms-4 float-end">
        </div>
    </div>
</div>


<?php
include 'layout/footer.php';
