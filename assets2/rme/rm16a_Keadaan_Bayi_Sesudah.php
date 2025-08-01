<!-- RM.16 A -->
<?php
include 'layout/head.php';
?>

<div class="row">
    <div class="col-12">
        <h3 class="text-center">KEADAAN BAYI SEGERA SESUDAH LAHIR</h3>
        <div class="text-end" style="font-size: 24px;">Rm.16A</div>
    </div>
</div>

<div class="row mt-4">
    <span class="fw-bold">Keadaan Bayi</span>

    <div class="col-12 my-3">
        <div class="d-flex align-items-center gap-2">
            <input type="radio">
            <label for="">Kembar : </label>
            <input type="text" class="form-control border-dark w-50">
        </div>
        <div class="d-flex align-items-center gap-2 my-3">
            <input type="radio">
            <label for="">Tunggal : </label>
            <input type="text" class="form-control border-dark w-50">

        </div>
        <div class="d-flex gap-2 align-items-center">
            <label for="">Lahir di :</label>
            <input type="text" class="ms-4 w-50 form-control border-dark">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <span>Kondisi Saat Ini :</span>
            <input type="radio">
            <label for="">Hidup</label>
            <input type="radio">
            <label for="">Mati</label>
        </div>
    </div>
    <div class="col-12">
        <label for="" class="mb-2">Sebab Kematian :</label>
        <textarea name="" id="" rows="6" class="w-100 form-control border-dark"></textarea>
    </div>
</div>

<div class="row">
    <div class="col-12 my-4">
        <span class="fw-bold text-decoration-underline">NILAI APGAR</span>
        <table class="table table-bordered border-dark mt-3">
            <thead class="text-center">
                <th>Tanda-Tanda</th>
                <th>0</th>
                <th>1</th>
                <th>2</th>
                <th colspan="3">NILAI ANGKA PADA</th>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>DDJ</td>
                    <td>Neg</td>
                    <td>100</td>
                    <td>00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="text-center">
                    <td>Pernapasan</td>
                    <td>Neg</td>
                    <td>Tidak Teratur</td>
                    <td>Segera Menangis</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="text-center">
                    <td>Tonun otot</td>
                    <td>Lemah</td>
                    <td>floksi</td>
                    <td>Aktif</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="text-center">
                    <td>Refleks</td>
                    <td>Neg</td>
                    <td>Merengkek/Merintih</td>
                    <td>Menangis kuat</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="text-center">
                    <td>Warna</td>
                    <td>Biru Seluruhnya</td>
                    <td>Anggota Gerak Biru</td>
                    <td>Merah Seluruhnya</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" class="text-end">Jumlah Angka :</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <label for="" class="fw-bold text-decoration-underline mb-2 ">KISAH RESUSITASI</label>
        <textarea name="" id="" rows="7" class="w-100 form-control border-dark"></textarea>
    </div>
</div>

<?php
include 'layout/footer.php';
?>