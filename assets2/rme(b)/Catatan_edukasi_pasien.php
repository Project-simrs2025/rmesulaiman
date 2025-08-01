<!-- rm 19 -->

<?php
include 'layout/head.php';
?>

<div class="row">
    <div class="col-12">
        <h4 class="text-center">Catatan Edukasi Pasien dan kelurga Terintegrasi</h4>
        <div class="text-end" style="font-size: 24px;">Rm.19</div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered mt-3 border border-dark">
            <tbody>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Nama :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir :</label>
                            <input type="date" class="form-control border-dark" onclick="this.showPicker()">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Rm :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="">Ruangan :</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Dokter DPJP :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                        <div class="form-group">
                            <label for="">Suku/Bangsa :</label>
                            <input type="text" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="d-flex gap-4 my-2">
            <span>Agama :</span>
            <div class="form">
                <input type="radio">
                <label for="">Islam</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Kristen</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Budha</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Hindu</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Katolik</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Konghucu</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="text">Lainnya</label>
            </div>
        </div>
        <input type="text" id="text" class="form-control border-dark">
        <!-- end agama -->
        <div class="form my-2">
            <label for="">Nilai yang di anut :</label>
            <input type="text" class="w-100 form-control border-dark my-2">
        </div>
        <!-- end nilai -->
        <div class="d-flex gap-4 my-2">
            <span>Pendidikan :</span>
            <div class="form">
                <input type="radio">
                <label for="">SD</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">SLTP</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">SLTA</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">S1</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="pendidikan">Lainnya</label>
            </div>
        </div>
        <input type="text" id="pendidikan" class="form-control border-dark">
        <!-- end pendidikan -->
        <div class="d-flex gap-3 my-2">
            <span>Hambatan pemberian edukasi pada pasien dan keluarga : </span>
            <input type="radio">
            <label for="">Ya</label>
            <input type="radio">
            <label for="">Tidak</label>
        </div>
        <!-- end hambatan -->
        <div class="d-flex gap-3 my-2">
            <span>kemampuan baca dan bicara : </span>
            <input type="radio">
            <label for="">Baik</label>
            <input type="radio">
            <label for="">Tidak</label>
        </div>
        <!-- end kemampuan -->
        <div class="d-flex gap-4 my-2">
            <span>Kebutuhan penterjemah bahasa :</span>
            <div class="form">
                <input type="radio">
                <label for="">Indonesia</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Inggris</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Daerah</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="bahasa">Lainnya</label>
            </div>
        </div>
        <input type="text" id="bahasa" class="form-control border-dark">
        <!-- end bahasa -->
        <div class="d-flex gap-3 my-2">
            <span>Emotional : </span>
            <input type="radio">
            <label for="">Labil</label>
            <input type="radio">
            <label for="">Stabil</label>
        </div>
        <div class="d-flex gap-3 my-2">
            <span>Motivasi : </span>
            <input type="radio">
            <label for="">Baik</label>
            <input type="radio">
            <label for="">Kurang</label>
        </div>
        <!-- end emot dan motivasi -->
        <div class="d-flex gap-4 my-2">
            <span>Keterbatasan Fisik :</span>
            <div class="form">
                <input type="radio">
                <label for="">Gangguan Bicara</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Pendengaran Kurang</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Penglihatan Terganggu</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="">Fisik Lemah</label>
            </div>
            <div class="form">
                <input type="radio">
                <label for="fisik">Lainnya</label>
            </div>
        </div>
        <input type="text" id="fisik" class="form-control border-dark">
        <!-- end fisik -->
        <div class="d-flex gap-3 my-2">
            <span>Kognitif : </span>
            <input type="radio">
            <label for="">Emosional</label>
            <input type="radio">
            <label for="">Motivasi Kurang</label>
        </div>
        <div class="d-flex gap-3 my-2">
            <span>Kesediaan Pasien / Keluarga menerima edukasi : </span>
            <input type="radio">
            <label for="">Ya</label>
            <input type="radio">
            <label for="">Tidak</label>
        </div>
    </div>
</div>

<!-- table 2 -->
<div class="row"></div>
<div class="col-12">
    <table class="table table-bordered mt-3 border border-dark">
        <thead class="text-center">
            <th>No</th>
            <th>Materi Edukasi</th>
            <th>Tanggal</th>
            <th>Metode/Durasi</th>
            <th>Evaluasi Pasien/Keluarga</th>
            <th>Paraf/ Nama Penerima Edukasi</th>
            <th>Paraf/ Nama Edukator</th>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>



<?php
include 'layout/footer.php';
?>