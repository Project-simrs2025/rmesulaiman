<?php
include 'layout/head.php';
?>

<div class="row">
    <div class="col-12">
        <h2 class="text-center">Resume Rawat Jalan</h2>
        <div class="text-end" style="font-size: 24px;">Rm.16F</div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered mt-3 border border-dark">
            <tbody>
                <?php
                $fields = [
                    ['label' => 'Nama Pasien', 'id' => 'name', 'name' => 'name'],
                    ['label' => 'No Rekam Medis', 'id' => 'no_rm', 'name' => 'no_rm']
                ];
                ?>
                <tr>
                    <?php foreach ($fields as $field): ?>
                        <td>
                        <label for="<?= $field['id'] ?>"><?= $field['label'] ?> :</label>
                            <input type="text" class="w-50" id="<?= $field['id'] ?>" name="<?= $field['name'] ?>" 
                            value="<?php 
                         if ($field['id'] == 'name') {
                            echo $nama_pasien; 
                         } elseif ($field['id'] == 'no_rm') {
                        echo $no_rm; 
                    }
                ?>">
                        </td>
                    <?php endforeach; ?>
                    <td class="text-center">
                        <span class="fw-bold">Rahasia</span>
                    </td>
                </tr>

                <tr>
                    <td rowspan="2">
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" id="alamat" name="alamat" class="form-control border border-dark">
                        </div>
                    </td>
                    <td>
                        <label for="no_kartu">No. Kartu :</label>
                        <input type="text" id="no_kartu" name="no_kartu" class="form-control border border-dark">
                    </td>
                    <td>
                        <label for="jenkel">Jenis Kelamin</label>
                        <select name="jenkel" id="jenkel" class="form-control border border-dark">
                            <option value="">Jenis Kelamin >></option>
                            <option value="">Laki-laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </td>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir :</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control w-50 border border-dark" onclick="this.showPicker()">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="kelas_rwt">Kelas Rawatan :</label>
                            <input type="text" id="kls_rwt" name="kls_rwt" class="form-control w-50 border border-dark">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Tgl Masuk :</label>
                            <input type="date" class="form-control w-50 border border-dark" onclick="this.showPicker()">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="">Umur :</label>
                            <input type="text" class="w-25 form-control border border-dark">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="">Ruang Rawatan :</label>
                            <input type="text" class="form-control w-75 border border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Penanggung kepesertaan :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="">Tanggal Keluar/ Meninggal/ Rujuk :</label>
                            <input type="date" class="form-control border border-dark" onclick="this.showPicker()">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Jenis Kepesertaan :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="">Dirujuk Ke :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="form-group d-block">
                            <label for="">Diagnosa/ Masalah Waktu Masuk :</label>
                            <textarea name="" id="" class="w-100 form-control border border-dark" rows="5"></textarea>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- table 2 -->
        <div class="row">
            <div class="col-12">
            </div>
            <table class="table table-bordered mt-3 border border-dark mt-4">
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Diagnosa Anamnesa :</label>
                            <textarea name="" id="" rows="5" class="w-100 border border-dark form-control"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Pemeriksaan fisik :</label>
                            <textarea name="" id="" rows="5" class="w-100 border border-dark form-control"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Pemeriksaan Penunjang :</label>
                            <textarea name="" id="" rows="5" class="w-100 form-control border border-dark"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <label for="">Terapi :</label>
                            <textarea name="" id="" rows="5" class="w-100 form-control border border-dark"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Diagnosa Utama :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    <td>
                        <div class="form-group">
                            <label for="">Kode ICD 10 :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Diagnosa Sekunder :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    <td>
                        <div class="form-group">
                            <label for="">Kode ICD 10 :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="">Diagnosa Tindakan :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    <td>
                        <div class="form-group">
                            <label for="">Kode ICD 10 :</label>
                            <input type="text" class="form-control border border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <span>Keadaan waktu keluar</span>
                            <div class="my-2 mx-3">
                                <input type="radio">
                                <label for="" class="mx-3">Sembuh</label>
                                <input type="radio">
                                <label for="" class="mx-3">Rujuk</label>
                                <input type="radio">
                                <label for="" class="mx-3">PAPS</label>
                                <input type="radio">
                                <label for="" class="mx-3">Meninggal dunia</label>
                            </div>
                            <div class="col-11 mx-3">
                                <input type="radio">
                                <label for="">Lain-lain :</label>
                                <input type="text" class="w-100 border border-dark">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-block">
                            <span>Pengobatan di lanjutkan di :</span>
                            <div class="col-11 mx-3">
                                <input type="radio">
                                <label for="" class="mx-3">Pulang berobat jalan</label>
                                <input type="radio">
                                <label for="" class="mx-3">Rujuk Balik Puskesmas/klinik</label>
                                <input type="radio">
                                <label for="" class="mx-3">RS LAIN</label>
                            </div>
                            <div class="col-11 my-2 mx-3">
                                <input type="radio">
                                <label for="">Lain-lain :</label>
                                <input type="text" class="w-100 border border-dark">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            <span>Dengan ini saya menyetujui penggunaan informasi tentang pelayanan kesehatan yang saya terima dari RSUD. Sultan Sulaiman untuk kepentingann administrasi pembayaran pelayanan kesehatan oleh BPJS Kesehatan.</span>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6 text-center">
            <label for="" class="mb-4 ">Nama & Tanda Tangan Dokter Yang Merawat</label>
            <div class="form-group">
                <input type="text" class="form-control mt-3 border-dark">
            </div>
        </div>
        <div class="col-6 text-center">
            <label for="" class="mb-4">Tanda Tangan Pasien / Keluarga Pasien</label>
            <div class="form-group">
                <input type="text" class="form-control mt-3 border-dark">
            </div>
        </div>
    </div>

</div>