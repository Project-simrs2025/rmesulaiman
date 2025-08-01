<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td>
                <div>Nama</div>
                <?= $nama_pasien; ?>
            </td>
            <td>
                <div>Umur</div>
                <?= $umur; ?>
            </td>
            <td>
                <div><?= $jenkel ?></div>
            </td>
            <td>
                <div style="width: 250px;;">
                    <div>Ruang</div>
                    <select type="select" name="nama_poli_ruangan" class="form-select poli">
                    </select>
                </div>
            </td>
            <td>
                <div>PS.ASA</div>
                <input type="text" name="asa_input" id="" class="form-control border-dark">
            </td>
            <td>
                <div>Tanggal</div>
                <?= $tgl_lahir; ?>
            </td>
            <td>
                <div>Nomor RM</div>
                <?= $no_rm; ?>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Ahli Anestiologi</div>
                        <select type="select" name="ahli_anestiologi" class="form-select newperawat">
                        </select>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Perawat Anestesi</div>
                        <select type="select" name="perawat_anestesi" class="form-select newperawat">
                        </select>
                    </div>
                </div>
            </td>
            <td colspan="3">
                <div>Ahli Bedah</div>
                <select type="select" name="ahli_bedah" class="form-select newperawat">
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div>Diagnosa Pra Bedah</div>
                <select type="select" name="diagnosa_bedah" class="form-select diagnosa" style="width: 450px;">
                </select>
            </td>
            <td colspan="2">
                <div>Jenis Pembedahan</div>
                <textarea name="jns_bedah" id="" rows="1" class="form-control border-dark"></textarea>
            </td>
            <td colspan="2">
                <div>Lama Operasi</div>
                <input type="text" name="lama_operasi" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div>Diagnosa Pasca Bedah</div>
                <select type="select" name="diagnosa_pasca_bedah" class="form-select diagnosa"style="width: 450px;">
                </select>
            </td>
            <td colspan="2">
                <div>Jenis Anestesi</div>
                <textarea name="jns_anestesi" id="" rows="1" class="form-control border-dark"></textarea>
            </td>
            <td colspan="2">
                <div>Lama Anestesi</div>
                <input type="text" name="lama_anestesi" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Keadaan Pra Bedah :</div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <label for="" class="flex-shrink-0">TB :</label>
                            <input type="text" name="tinggi_badan" id="" class="form-control border-dark"> cm
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <label for="" class="flex-shrink-0">BB :</label>
                            <input type="text" name="berat_badan" id="" class="form-control border-dark"> kg
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-4 d-flex align-items-center gap-2">
                            <label class="flex-shrink-0">Gol Darah</label>
                            <input type="text" name="gol_darah" id="" class="form-control border-dark">
                            <div class="col-1"></div>
                        </div>
                        <div class="col-5 d-flex align-items-center gap-2">
                            <label class="flex-shrink-0">Makan Terakhir</label>
                            <input type="text" name="makan_terakhir" id="" class="form-control border-dark">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center gap-2 w-50">
                            <label class="col-2" for="">T</label>
                            <input type="text" name="tinggi" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 w-50">
                            <label class="col-2" for="">N</label>
                            <input type="text" name="nadi" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 w-50">
                            <label class="col-2" for="">suhu</label>
                            <input type="text" name="suhu" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 w-50">
                            <label class="col-2" for="">hb</label>
                            <input type="text" name="hb" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 w-50">
                            <label class="col-2" for="">ht</label>
                            <input type="text" name="ht" id="" class="form-control border-dark">
                        </div>
                    </div>
                </div>
            </td>
            <td colspan="3">
                <div style="height: 300px;">
                    <div class="mb-4">
                        <div>Anestesi Dengan</div>
                       <!--  <select type="select" name="anestesi_dengan" class="form-select newperawat">
                        </select> -->
                        <textarea name="anestesi_dengan" class="form-control border-dark" rows="2"></textarea>
                    </div>

                    <div class="mb-4">
                        <div>Relaksasi dengan</div>
                        <input type="text" name="relaksasi_dengan" id="" class="form-control border-dark">
                    </div>

                    <div class="mb-4">
                        <div>Teknik Anestesi</div>
                        <textarea name="teknik_anestesi" id="" class="form-control border-dark" rows="2"></textarea>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div>Pernapasan Jalan Nafas</div>
                <input type="text" name="perjalanan_nafas" id="" class="form-control border-dark">
            </td>
            <td colspan="3">
                <div>Teknik khusus</div>
                <textarea rows="1" name="teknik_khusus" id="" class="form-control border-dark"></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="4">
                <div>Sirkulasi</div>
                <input type="text" name="sirkulasi" id="" class="form-control border-dark">
            </td>
            <td colspan="3">
                 <div>Pernapasan</div>
                <input type="text" name="pernapasan" id="" class="form-control border-dark">

                <div>Posisi</div>
                <input type="text" name="posisi" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div>Gastro isterinal</div>
                <input type="text" name="gastro" id="" class="form-control border-dark">
            </td>
            <td colspan="3">
                <div>Infus</div>
                <input type="text" name="infus" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div style="height:160px">
                    <div>Ginjal</div>
                    <input type="text" name="Ginjal" id="" class="form-control border-dark">
                </div>
            </td>
            <td colspan="3">
                <div class="mb-3">
                    <div>Penyulit Selama Pemedahan</div>
                    <input type="text" name="penyulit_pembedahan" id="" class="form-control border-dark">
                </div>
                <div class="mb-3">
                    <div>Kadaan akhir Selama Pemedahan</div>
                    <input type="text" name="akhir_pembedahan" id="" class="form-control border-dark">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div>Metabolik</div>
                <input type="text" name="metabolik" id="" class="form-control border-dark">
            </td>
            <td colspan="3">
                <div class="d-flex flex-column">
                    <div>Keadaan Bayi Saat Seksio Caesario</div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-4">As 1 menit</label>
                        <input type="text" name="as_1_menit" id="" class="form-control border-dark">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-4">As 5 menit</label>
                        <input type="text" name="as_5_menit" id="" class="form-control border-dark">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div>Hati</div>
                <input type="text" name="hati" id="" class="form-control border-dark">
            </td>
            <td colspan="3">
                <div>Terapi Khusus Pasca Bedah</div>
                <input type="text" name="terapi_khusus" id="" class="form-control border-dark">

                <div>Penyulitan pasca Bedah</div>
                <input type="text" name="penyulit_bedah" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div>Medikasi pasca bedah</div>
                <textarea name="medikasi" id="" rows="1" class="form-control border-dark"></textarea>
            </td>
            <td colspan="3">
                <div>Hiper sensitivkasi/alergi</div>
                <input type="text" name="sensitivikasi" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>Masalah Anestesi</div>
                <input type="text" name="masalah_anestesi" id="" class="form-control border-dark">
            </td>
            <td colspan="2">
                <div>Masalah bedah</div>
                <input type="text" name="masalah_bedah" id="" class="form-control border-dark">
            </td>
            <td colspan="3">
                <div>kematian</div>
                <input type="text" name="kematian" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="3">
                <div>Sebab Kematian</div>
                <input type="text" name="sebab_kematian" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td>
                <div>Sirkulasi</div>
                <input type="text" name="sirkulasi_sbKematian" id="" class="form-control border-dark">
            </td>
            <td>
                <div>Paru</div>
                <input type="text" name="Paru_sbKematian" id="" class="form-control border-dark">
            </td>
            <td>
                <div>Hati</div>
                <input type="text" name="Hati_sbKematian" id="" class="form-control border-dark">
            </td>
            <td>
                <div>Ginjal</div>
                <input type="text" name="Ginjal_sbKematian" id="" class="form-control border-dark">
            </td>
            <td>
                <div>SSP</div>
                <input type="text" name="SSP_sbKematian" id="" class="form-control border-dark">
            </td>
            <td>
                <div>Darah</div>
                <input type="text" name="Darah_sbKematian" id="" class="form-control border-dark">
            </td>
            <td>
                <div>Nutrisi</div>
                <input type="text" name="Nutrisi_sbKematian" id="" class="form-control border-dark">
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <div>lain lain</div>
                <input type="text" name="lain_sbKematian" id="" class="form-control border-dark">
            </td>
        </tr>
    </table>
</div>

<div class="row">

    <h4 class="text-end">RM 028.b</h4>

    <table class="table table-bordered border-dark">
        <tr class="text-center">
            <td>Premedikasi</td>
            <td>Medikasi</td>
        </tr>
        <tr>
            <td class="col-3">
                <div style="height: 400px;">
                    <textarea name="premedikasi_catatan" id="" class="form-control border-dark" rows="4"></textarea>
                    <div class="col-4">Pemberian</div>
                    <input type="text" class="form-control border-dark" name="pemberian_premedik" placeholder="SK/ IM/ IV/ P.oral">
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Waktu</div>
                        <div class="d-flex gap-2 align-items-center">:Jam <input type="time" name="waktu_pemberian" class="form-control border-dark " value="<?= date('H:i') ?>"></div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label name="flex-shrink-0">Efek / Hasil</label>
                        <input type="text" name="efek_hasil_input" class="form-control border-dark">
                    </div>
                </div>
            </td>
            <td class="col-6">
                <table class="table table-bordered border-dark">
                    <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_1"></td>
                        <td>8</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_8"></td>
                        <td>15</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_15"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_2"></td>
                        <td>9</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_9"></td>
                        <td>16</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_16"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_3"></td>
                        <td>10</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_10"></td>
                        <td>17</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_17"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_4"></td>
                        <td>11</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_11"></td>
                        <td>18</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_18"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_5"></td>
                        <td>12</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_12"></td>
                        <td>19</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_19"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_6"></td>
                        <td>13</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_13"></td>
                        <td>20</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_20"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_7"></td>
                        <td>14</td>
                        <td><input type="text" class="form-control border-dark" name="medikasi_col2_14"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">Premedikasi</td>
        </tr>
        <tr>
            <td colspan="2">
                <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/rm28b_2.png') ?>" style="max-width: 1200px;" data-input-name="image_drawer_state_image_rm028_1" />
                <input type="hidden" id="image_drawer_state_image_rm028_1" name="image_drawer_state_image_rm028_1" value="" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/rm28b_1.png') ?>" style="max-width: 1200px;" data-input-name="image_drawer_state_image_rm028_2" />
                <input type="hidden" id="image_drawer_state_image_rm028_2" name="image_drawer_state_image_rm028_2" value="" />
            </td>
        </tr>
    </table>

    <table class="table table-bordered border-dark">
        <tr>
            <td colspan="5">
                <div class="d-flex align-items-center gap-2">
                    <div class="col-1"> Respirasi</div>
                    <input type="text" name="respirasi_input" id="" class="form-control border-dark">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <div class="d-flex align-items-center gap-2">
                    <div class="col-1"> Stadia Op</div>
                    <input type="text" name="stadia_input" id="" class="form-control border-dark">
                </div>
            </td>
        </tr>
        <tr>
            <td rowspan="3" class="col-2">
                <div>I<textarea name="stadia_i" id="" class="form-control border-dark" placeholder="I"></textarea></div>
                <div>II<textarea name="stadia_ii" id="" class="form-control border-dark" placeholder="II"></textarea></div>
                <div>III<textarea name="stadia_III" id="" class="form-control border-dark" placeholder="III"></textarea></div>
                <div>IV<textarea name="stadia_IV" id="" class="form-control border-dark" placeholder="IV"></textarea></div>
                <div>V<textarea name="stadia_V" id="" class="form-control border-dark" placeholder="V"></textarea></div>
                <div>VI<textarea name="stadia_VI" id="" class="form-control border-dark" placeholder="VI"></textarea></div>
            </td>
            <td class="col-2 text-center">
                <div>Jumlah Medikasi</div>
            </td>
            <td class="col-2 text-center">
                <div>Jumlah Cairan / Transufusi</div>
            </td>
            <td class="col-2 text-center">
                <div>Cairan Keluar</div>
            </td>
            <td class="col-2 text-center">
                <div>Cairan</div>
            </td>
        </tr>
        <tr>
            <td><textarea rows="5" name="jumlah_medikasi_area" id="" class="form-control border-dark"></textarea></td>
            <td><textarea rows="5" name="jumlah_cairan_area" id="" class="form-control border-dark"></textarea></td>
            <td><textarea rows="5" name="cairan_keluar_area" id="" class="form-control border-dark"></textarea></td>
            <td><textarea rows="5" name="catatan_area" id="" class="form-control border-dark"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <div>Pendarahan</div>
                <textarea rows="10" name="pendarahan_area" id="" class="form-control border-dark"></textarea>
            </td>
            <td colspan="2">
                <div class="text-center">Tanda Tangan</div>
                <div class="text-center my-2">
                    <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
                </div>
                <select type="select" name="dokter_umum" id="dokter_umum" class="form-select dokter"
                    style="width: 100%;"></select>
            </td>
        </tr>
    </table>
</div>

<div class="row">
    <h4 class="text-end">RM 028.c</h4>
    <h3 class="text-center ">PASCA BEDAH</h3>

    <table class="table table-bordered border-dark">
        <tr>
            <td>
                <div class="d-flex align-items-center gap-2">
                    <div class="">Nama : <?= $nama_pasien ?></div>
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center gap-2">
                    <div class="col-2">tgl </div><input type="date" name="tgl_pasca_bedah" class="form-control border-dark">
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center gap-2">
                    Umur : <?= $umur; ?>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="d-flex align-items-center gap-2">
                    <div class="col-1">Ket : </div><input type="text" name="ket_pasca_bedah" id="" class="form-control border-dark">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <img class="marker-image" id="setting_img" src="<?= base_url('assets2/rme/img/rm28b_3.png') ?>" style="max-width: 1200px;" data-input-name="image_drawer_state_image_rm028_3" />
                <input type="hidden" id="image_drawer_state_image_rm028_3" name="image_drawer_state_image_rm028_3" value="" />
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <div>Catatan</div>
                <textarea name="catatan_pasca_operasi" id="" class="form-control border-dark" rows="10"></textarea>
            </td>
        </tr>
    </table>
</div>


<div class="row">
    <h4 class="text-end">RM 028.d</h4>
    <h3 class="text-center">INTRUKSI</h3>

    <table class="table table-bordered border-dark">

        <?php
        $instruksiList = [
            'intruksi_kesakitan'   => 'Bila Kesakitan',
            'intruksi_mual'        => 'Bila Mual/Muntah',
            'intruksi_antibiotika' => 'Antibiotika',
            'intruksi_obat_lain'   => 'Obat - obatan lain',
            'intruksi_minum'       => 'Minum',
            'Infus'                => 'Infus',
            'Monitor'              => 'Monitor',
        ];

        foreach ($instruksiList as $name => $label) :
        ?>
            <tr>
                <td>
                    <div><?= $label ?></div>
                    <textarea name="<?= $name ?>" rows="4" class="form-control border-dark"></textarea>
                </td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td>
                <?php
                $inputs = [
                    'tensi_input' => 'Tensi',
                    'nadi_input'  => 'Nadi',
                    'nafas_input' => 'Nafas'
                ];
                ?>

                <div class="d-flex align-items-center gap-2">
                    <?php foreach ($inputs as $name => $label) : ?>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <label><?= $label ?></label>
                            <input type="text" name="<?= $name ?>" class="form-control border-dark">
                        </div>
                    <?php endforeach; ?>
                    <div class="col-1"></div>
                    <div class="col d-flex align-items-center">
                        <div class="">
                            Setiap <input type="text" class="form-control border-dark" name="setiap_selama_jam">
                        </div>
                        <div class="">
                            Selama <input type="text" class="form-control border-dark" name="setiap_jam">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>Lain-lain</div>
                <textarea name="lain-lain_intruksi" class="form-control border-dark" rows="5" id=""></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="text-end">Tanda tangan Ahli Aneseologi</div>
                <div class="text-end my-2">
                    <img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_aneseologi" />
                </div>
                <div class="d-flex justify-content-end">
                    <select type="select" name="aneseologi" id="aneseologi" class="form-select dokter"
                        style="width: 40%;"></select>
                </div>
            </td>
        </tr>
    </table>
</div>



<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawatMenyerahkan = []
    let dataListPerawatMenerima = []
    let dataListPerawatNew = []
    let dataListDokter = []


    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });


    function cbCommon(data) {
        populateFormFields(data);

        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
                }
            })
        }, 1000)

        $('#aneseologi').prop('disabled', false)
        $('#aneseologi').select2('open')
        $('#aneseologi').select2('close')
        if (mode === "lihat")
            $('#aneseologi').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataDokter?.map(v => {
                if (v.text === $('#aneseologi').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_aneseologi')
                }
            })
        }, 1000)


    }

    $(document).ready(function() {
        let page = 1;


        const globalData = <?= $global_data; ?>;
        const {
            id_dokter
        } = globalData;


        const select2Configs = [{
                selector: '.diagnosa',
                url: '<?= site_url('backend/admission/getDiagnosa'); ?>'
            },
            {
                selector: '.poli',
                url: '<?= site_url('backend/admission/getPoli'); ?>'
            },
            {
                selector: '.ruangan',
                url: '<?= site_url('backend/admission/getRuangan'); ?>'
            },
            {
                selector: '.newperawat',
                url: '<?= site_url('backend/admission/getKaryawan'); ?>'
            },
            {
                selector: '.dokter',
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>'
            }
        ];

        select2Configs.forEach(({
            selector,
            url
        }) => {
            $(selector).select2({
                ajax: {
                    url: url,
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            limit: 100,
                            offset: (page - 1) * 100,
                        };
                    },
                    processResults: function(data) {
                        const {
                            items,
                            more
                        } = data.data;

                        // Tambahkan opsi default "--pilih--"
                        const defaultOption = [{
                            id: '',
                            text: '--pilih--'
                        }];
                        const combinedItems = defaultOption.concat(items);

                        return {
                            results: combinedItems,
                            pagination: {
                                more: more
                            },
                        };
                    },
                    cache: true,
                },
                placeholder: '--pilih--',
                allowClear: true,
            });

            // Reset nilai saat awal load
            $(selector).val(null).trigger('change');

            // Infinite scroll handler
            $(selector).on('select2:open', function() {
                $('.select2-results__options').off('scroll').on('scroll', function() {
                    const $this = $(this);
                    if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
                        page++;
                        $(selector).select2('data', null); // Optional
                    }
                });
            });
        });

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });
        $('#aneseologi').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_aneseologi')
        });
    });
</script>