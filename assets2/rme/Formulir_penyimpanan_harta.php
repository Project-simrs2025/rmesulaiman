<!-- RM 31 Formulir PENYIMPANAN -->

<?php
include 'layout/head.php'
?>

<div class="col-12 my-3">
    <h2 class="text-end">No.Rm</h2>
    <h3 class="text-center">FORMULIR PENYIMPANAN HARTA BENDA PASIEN</h3>
</div>

<div class="col-6">
    <div class="form-group">
        <label for="">Nama Pasien :</label>
        <input type="text">
    </div>
    <div class="form-group">
        <label for="">No. Rm :</label>
        <input type="text">
    </div>
    <div class="form-group">
        <label for="">Ruangan :</label>
        <input type="text">
    </div>
</div>

<div class="col-12">
    <table class="table table-bordered" style="border: 1px solid black;">
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2" class="text-center">Jenis Harta / Benda</th>
            <th rowspan="2">Jumlah</th>
            <th colspan="4" class="text-center">kondisi barang</th>
        </tr>
        <tr>
            <th colspan="2">
                <div class="text-center">
                    <span>Saat dititipkan</span>
                    <div>
                        <label for="">Tanggal :</label>
                        <input type="date">
                    </div>
                </div>
            </th>
            <th colspan="2">
                <div class="text-center">
                    <span>Saat serahkan</span>
                    <div>
                        <label for="">Tanggal :</label>
                        <input type="date">
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>Baik</th>
            <th>Buruk</th>
            <th>Baik</th>
            <th>Buruk</th>
        </tr>
        </thead>
        <tbody>
            <!-- Contoh baris data -->
            <!-- <tr>
                <td>1</td>
                <td>Contoh Harta</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Contoh Barang</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr> -->
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>

    <div class="row">
        <div class="col-12">
            <span>Dengan ini saya juga menyatakan memberi ijin kepada keluarga saya apabila ingin mengambil barang-barang tersebut, yaitu kepada :</span>
            <div class="col-3">
                <div class="mt-2">
                    <label for="">1</label>
                    <input type="text" class="ms-3">
                </div>
                <div class="mt-2">
                    <label for="">2</label>
                    <input type="text" class="ms-3">
                </div>
                <div class="mt-2">
                    <label for="">3</label>
                    <input type="text" class="ms-3">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-end mb-3">
            <label for="">Seri Rempah, </label>
            <input type="text">
        </div>
    </div>

    <div class="row">
        <div class="col-4 text-center">
            <label for="">Petugas Penerima,<p>Satpam
                </p></label>
            <input type="text" class="form-control" style="border: 1px solid black;">
        </div>
        <div class="col-4 text-center">
            <label for="">Pemohon,<p>Pasien/Keluarga Pasien
                </p></label>
            <input type="text" class="form-control" style="border: 1px solid black;">
        </div>
        <div class="col-4 text-center">
            <label for="">Saksi,<p>Perawat
                </p></label>
            <input type="text" class="form-control" style="border: 1px solid black;">
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12 mt-3 text-center">
        <span>Catatan: Dalam keadaan khusus pasien tidak sadar, saksi dapat 2 orang dari pihak pengantar dan dari RS
        </span>
        <hr>
        <h4 class="fw-bold">Penyerahan Benda Milik Pasien</h4>
    </div>

    <div class="row">
        <div class="col-12 text-end mb-3">
            <label for="">Seri Rempah, </label>
            <input type="text">
        </div>
    </div>

    <div class="row">
        <div class="col-4 text-center">
            <label for="">Petugas Penerima,<p>Satpam
                </p></label>
            <input type="text" class="form-control" style="border: 1px solid black;">
        </div>
        <div class="col-4 text-center">
            <label for="">Pemohon,<p>Pasien/Keluarga Pasien
                </p></label>
            <input type="text" class="form-control" style="border: 1px solid black;">
        </div>
        <div class="col-4 text-center">
            <label for="">Saksi,<p>Perawat
                </p></label>
            <input type="text" class="form-control" style="border: 1px solid black;">
        </div>
    </div>

</div>

<?php
include 'layout/footer.php'
?>