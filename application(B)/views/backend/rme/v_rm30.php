<!-- rm 30 -->
<div class="row">
    <div class="table-responsive">

        <div class="col-12">
            <table class="table table-bordered border-dark" border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <td style="width: 200px;"><strong>Nama :</strong></td>
                    <td colspan="3"><input type="text" name="nama_pasien" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td><strong>Tanggal Lahir :</strong></td>
                    <td colspan="3"><input type="text" name="tanggal_lahir" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td><strong>No. RM :</strong></td>
                    <td colspan="3"><input type="text" name="no_rm" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td><strong>Ruangan :</strong></td>
                    <td colspan="3"><input type="text" name="nama_ruangan" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td><strong>Tanggal :</strong></td>
                    <td colspan="3"><input type="date" name="tanggal_ruangan_1" class="form-control border-dark"></td>
                </tr>


                <tr>
                    <td rowspan="2"><strong>Asuhan Keperawatan</strong></td>
                    <td colspan="3"><strong>Timbang Terima</strong></td>
                </tr>
                <tr>
                    <td><strong>Shift Pagi</strong></td>
                    <td><strong>Shift Sore</strong></td>
                    <td><strong>Shift Malam</strong></td>
                </tr>
                <tr>
                    <td><strong>Diagnosa Medis</strong></td>
                    <td>
                        <select type="select" name="diagnosa1pagi" id="diagnosa1pagi" class="form-select diagnosa w-100"></select>
                    </td>
                    <td>
                        <select type="select" name="diagnosa1sore" id="diagnosa1sore" class="form-select diagnosa w-100"></select>
                    </td>
                    <td>
                        <select type="select" name="diagnosa1malam" id="diagnosa1malam" class="form-select diagnosa w-100"></select>
                    </td>
                </tr>
                <tr>
                    <td><strong>Masalah keperawatan</strong></td>
                    <td><textarea rows="4" name="masalah_keperawatan_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" type="text" name="masalah_keperawatan_1[]" class="form-control border-dark"></textarea></textarea></td>
                    <td><textarea rows="4" name="masalah_keperawatan_1[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi keperawatan yang telah dilaksanakan</strong></td>
                    <td><textarea rows="4" name="intervensi_dilaksanakan_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_dilaksanakan_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea name="intervensi_dilaksanakan_1[]" class="form-control border-dark" rows="4"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi keperawatan yang belum dilaksanakan</strong></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_1[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi kolaborasi (Obat, Konsultasi, Tindakan Medis)</strong></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_1[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Pesan Khusus (Rencana umum, pemeriksaan penunjang, atau prosedur lainnya)</strong></td>
                    <td><textarea rows="4" name="pesan_khusus_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="pesan_khusus_1[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="pesan_khusus_1[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Nama dan Tanda tangan</strong></td>
                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Pagi :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_pj_pagi_tb1_c1" />
                            </div>
                            <select type="select" name="perawat_pj_pagi_tb1_c1" id="perawat_pj_pagi_tb1_c1" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Sore :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_pj_sore_tb1_c2" />
                            </div>
                            <select type="select" name="perawat_pj_sore_tb1_c2" id="perawat_pj_sore_tb1_c2" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_13" />
                            <input type="hidden" id="image_drawer_state_image_13" name="image_drawer_state_image_13" value="" />
                            <input type="text" name="karu_1" class="form-control border-dark">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Sore :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_pj_sore_tb2_c1" />
                            </div>
                            <select type="select" name="perawat_pj_sore_tb2_c1" id="perawat_pj_sore_tb2_c1" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Malam:</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_pj_malam_tb2_c2" />
                            </div>
                            <select type="select" name="perawat_pj_malam_tb2_c2" id="perawat_pj_malam_tb2_c2" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_16" />
                            <input type="hidden" id="image_drawer_state_image_16" name="image_drawer_state_image_16" value="" />
                            <input type="text" name="karu_2" class="form-control border-dark">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Malam:</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_pj_malam_tb3_c1" />
                            </div>
                            <select type="select" name="perawat_pj_malam_tb3_c1" id="perawat_pj_malam_tb3_c1" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Pagi :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_pj_pagi_tb3_c2" />
                            </div>
                            <select type="select" name="perawat_pj_pagi_tb3_c2" id="perawat_pj_pagi_tb3_c2" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_19" />
                            <input type="hidden" id="image_drawer_state_image_19" name="image_drawer_state_image_19" value="" />
                            <input type="text" name="karu_3" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td><strong>Tanggal :</strong></td>
                    <td colspan="3"><input type="date" name="tanggal_ruangan_2" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td rowspan="2"><strong>Asuhan Keperawatan</strong></td>
                    <td colspan="3"><strong>Timbang Terima</strong></td>
                </tr>
                <tr>
                    <td><strong>Shift Pagi</strong></td>
                    <td><strong>Shift Sore</strong></td>
                    <td><strong>Shift Malam</strong></td>
                </tr>
                <tr>
                    <td><strong>Diagnosa Medis</strong></td>
                    <td>
                        <select type="select" name="diagnosa2pagi" id="diagnosa2pagi" class="form-select diagnosa w-100"></select>
                    </td>
                    <td>
                        <select type="select" name="diagnosa2sore" id="diagnosa2sore" class="form-select diagnosa w-100"></select>
                    </td>
                    <td>
                        <select type="select" name="diagnosa2malam" id="diagnosa2malam" class="form-select diagnosa w-100"></select>
                    </td>
                </tr>
                <tr>
                    <td><strong>Masalah keperawatan</strong></td>
                    <td><textarea rows="4" name="masalah_keperawatan_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="masalah_keperawatan_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="masalah_keperawatan_2[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi keperawatan yang telah dilaksanakan</strong></td>
                    <td><textarea rows="4" name="intervensi_dilaksanakan_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_dilaksanakan_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea name="intervensi_dilaksanakan_2[]" rows="4" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi keperawatan yang belum dilaksanakan</strong></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_2[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi kolaborasi (Obat, Konsultasi, Tindakan Medis)</strong></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_2[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Pesan Khusus (Rencana umum, pemeriksaan penunjang, atau prosedur lainnya)</strong></td>
                    <td><textarea rows="4" name="pesan_khusus_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="pesan_khusus_2[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="pesan_khusus_2[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Nama dan Tanda tangan</strong></td>
                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Pagi :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawattr2_pj_pagi_tb1_c1" />
                            </div>
                            <select type="select" name="perawattr2_pj_pagi_tb1_c1" id="perawattr2_pj_pagi_tb1_c1" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Sore :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawattr2_pj_sore_tb1_c2" />
                            </div>
                            <select type="select" name="perawattr2_pj_sore_tb1_c2" id="perawattr2_pj_sore_tb1_c2" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_3" />
                            <input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3" value="" />
                            <input type="text" name="karu_4" class="form-control border-dark">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Sore :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawattr2_pj_sore_tb2_c1" />
                            </div>
                            <select type="select" name="perawattr2_pj_sore_tb2_c1" id="perawattr2_pj_sore_tb2_c1" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Malam:</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawattr2_pj_malam_tb2_c2" />
                            </div>
                            <select type="select" name="perawattr2_pj_malam_tb2_c2" id="perawattr2_pj_malam_tb2_c2" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_6" />
                            <input type="hidden" id="image_drawer_state_image_6" name="image_drawer_state_image_6" value="" />
                            <input type="text" name="karu_5" class="form-control border-dark">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Malam:</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawattr2_pj_malam_tb3_c1" />
                            </div>
                            <select type="select" name="perawattr2_pj_malam_tb3_c1" id="perawattr2_pj_malam_tb3_c1" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Pagi :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawattr2_pj_pagi_tb3_c2" />
                            </div>
                            <select type="select" name="perawattr2_pj_pagi_tb3_c2" id="perawattr2_pj_pagi_tb3_c2" class="form-select perawat"
                                style="width: 100%;"></select>
                        </div>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_9" />
                            <input type="hidden" id="image_drawer_state_image_9" name="image_drawer_state_image_9" value="" />
                            <input type="text" name="karu_6" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>



<?php for ($i = 1; $i <= 7; $i++) : ?>
    <div class="row">
        <table class="table table-bordered border-dark">
            <tbody>
                <tr>
                    <td><strong>Tanggal :</strong></td>
                    <td colspan="3"><input type="date" name="tanggal_ruangan_tb3_<?= $i; ?>" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td rowspan="2"><strong>Asuhan Keperawatan</strong></td>
                    <td colspan="3"><strong>Timbang Terima</strong></td>
                </tr>
                <tr>
                    <td><strong>Shift Pagi</strong></td>
                    <td><strong>Shift Sore</strong></td>
                    <td><strong>Shift Malam</strong></td>
                </tr>
                <tr>
                    <td><strong>Diagnosa Medis</strong></td>
                    <td>
                        <select type="select" name="diagnosa_medis_<?= $i; ?>_pagi" id="diagnosa_medis_<?= $i; ?>_pagi" class="form-select diagnosa w-100"></select>
                    </td>
                    <td>
                        <select type="select" name="diagnosa_medis_<?= $i; ?>_sore" id="diagnosa_medis_<?= $i; ?>_sore" class="form-select diagnosa w-100"></select>
                    </td>
                    <td>
                        <select type="select" name="diagnosa_medis_<?= $i; ?>_malam" id="diagnosa_medis_<?= $i; ?>_malam" class="form-select diagnosa w-100"></select>
                    </td>
                </tr>
                <tr>
                    <td><strong>Masalah keperawatan</strong></td>
                    <td><textarea rows="4" name="masalah_keperawatan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="masalah_keperawatan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="masalah_keperawatan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi keperawatan yang telah dilaksanakan</strong></td>
                    <td><textarea rows="4" name="intervensi_dilaksanakan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_dilaksanakan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_dilaksanakan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi keperawatan yang belum dilaksanakan</strong></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_belum_dilaksanakan_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Intervensi kolaborasi (Obat, Konsultasi, Tindakan Medis)</strong></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="intervensi_kolaborasi_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Pesan Khusus (Rencana umum, pemeriksaan penunjang, atau prosedur lainnya)</strong></td>
                    <td><textarea rows="4" name="pesan_khusus_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="pesan_khusus_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                    <td><textarea rows="4" name="pesan_khusus_tb<?= $i; ?>[]" class="form-control border-dark"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Nama dan Tanda tangan</strong></td>
                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Pagi :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_siftpagi_rows1_tb<?= $i ?>" />
                            </div>
                            <select type="select" name="perawat_siftpagi_rows1_tb<?= $i ?>" id="perawat_siftpagi_rows1_tb<?= $i ?>" class="form-select perawat" style="width: 100%;"></select>
                        </div>

                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Sore :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_siftsore_rows1_tb<?= $i ?>" />
                            </div>
                            <select type="select" name="perawat_siftsore_rows1_tb<?= $i ?>" id="perawat_siftsore_rows1_tb<?= $i ?>" class="form-select perawat" style="width: 100%;"></select>
                        </div>

                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <div class="text-center">
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_rows1_tb<?= $i; ?>" />
                            </div>
                            <input type="hidden" id="image_drawer_state_image_rows1_tb<?= $i; ?>" name="image_drawer_state_image_rows1_tb<?= $i; ?>" value="" />
                            <input type="text" name="karu_rows1_tb3<?= $i; ?>" class="form-control border-dark">
                        </div>
                    </td>

                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Sore :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_siftpagi_rows2_tb<?= $i ?>" />
                            </div>
                            <select type="select" name="perawat_siftpagi_rows2_tb<?= $i ?>" id="perawat_siftpagi_rows2_tb<?= $i ?>" class="form-select perawat" style="width: 100%;"></select>
                        </div>

                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Malam :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_siftsore_rows2_tb<?= $i ?>" />
                            </div>
                            <select type="select" name="perawat_siftsore_rows2_tb<?= $i ?>" id="perawat_siftsore_rows2_tb<?= $i ?>" class="form-select perawat" style="width: 100%;"></select>
                        </div>

                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <div class="text-center">
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_rows2_tb<?= $i; ?>" />
                            </div>
                            <input type="hidden" id="image_drawer_state_image_rows2_tb<?= $i; ?>" name="image_drawer_state_image_rows2_tb<?= $i; ?>" value="" />
                            <input type="text" name="karu_rows2_tb3<?= $i; ?>" class="form-control border-dark">
                        </div>
                    </td>

                    <td>
                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Malam :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_siftpagi_rows3_tb<?= $i ?>" />
                            </div>
                            <select type="select" name="perawat_siftpagi_rows3_tb<?= $i ?>" id="perawat_siftpagi_rows3_tb<?= $i ?>" class="form-select perawat" style="width: 100%;"></select>
                        </div>

                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>PJ Shift Pagi :</strong>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_siftsore_rows3_tb<?= $i ?>" />
                            </div>
                            <select type="select" name="perawat_siftsore_rows3_tb<?= $i ?>" id="perawat_siftsore_rows3_tb<?= $i ?>" class="form-select perawat" style="width: 100%;"></select>
                        </div>

                        <div class="d-flex flex-column" style="gap: 20px;">
                            <strong>Karu : </strong>
                            <div class="text-center">
                                <img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 280px;height:180px;" data-input-name="image_drawer_state_image_rows3_tb<?= $i; ?>" />
                            </div>
                            <input type="hidden" id="image_drawer_state_image_rows3_tb<?= $i; ?>" name="image_drawer_state_image_rows3_tb<?= $i; ?>" value="" />
                            <input type="text" name="karu_rows3_tb3<?= $i; ?>" class="form-control border-dark">
                        </div>
                    </td>


                </tr>
            </tbody>
        </table>
    </div>
<?php endfor; ?>



<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawatMenyerahkan = []
    let dataListPerawatMenerima = []


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
                selector: '.perawat',
                url: '<?= site_url('backend/admission/getKaryawan'); ?>'
            },
            {
                selector: '.dokter',
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>'
            },
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

                        // Assign ke variabel tertentu jika perlu
                        if (selector === '.perawat') {
                            dataListPerawat = items;
                        } else if (selector === '.dokter') {
                            dataDokter = items;
                        }

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
    });

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        function updateSelect2Element(id, disable = false) {
            $(id).prop('disabled', disable); // Set disabled status
            $(id).select2('open'); // Buka select2
            $(id).select2('close'); // Tutup select2
        }

        const elements = [
            '#perawat_pj_pagi_tb1_c1',
            '#perawat_pj_sore_tb1_c2',
            '#perawat_pj_sore_tb2_c1',
            '#perawat_pj_malam_tb2_c2',
            '#perawat_pj_malam_tb3_c1',
            '#perawat_pj_pagi_tb3_c2',
            '#perawattr2_pj_pagi_tb1_c1',
            '#perawattr2_pj_sore_tb1_c2',
            '#perawattr2_pj_sore_tb2_c1',
            '#perawattr2_pj_malam_tb2_c2',
            '#perawattr2_pj_malam_tb3_c1',
            '#perawattr2_pj_pagi_tb3_c2',
        ];

        const rows = ['rows1', 'rows2', 'rows3'];
        const shifts = ['pagi', 'sore'];

        for (let i = 1; i <= 7; i++) {
            rows.forEach(row => {
                shifts.forEach(shift => {
                    elements.push(`#perawat_sift${shift}_${row}_tb${i}`);
                });
            });
        }



        // Update semua elemen dengan disabled = false
        elements.forEach(element => updateSelect2Element(element, false));

        // Jika mode "lihat", disable semua elemen
        if (mode === "lihat") {
            elements.forEach(element => updateSelect2Element(element, true));
        }



        if (mode === "lihat") {
            // table 1 col 1
            $('#perawat_pj_pagi_tb1_c1').prop('disabled', true)
            $('#perawat_pj_sore_tb1_c2').prop('disabled', true)
            // table 1 col 2
            $('#perawat_pj_sore_tb2_c1').prop('disabled', true)
            $('#perawat_pj_malam_tb2_c2').prop('disabled', true)
            // table 1 col 3
            $('#perawat_pj_malam_tb3_c1').prop('disabled', true)
            $('#perawat_pj_pagi_tb3_c2').prop('disabled', true)
            // table 2 rows 1
            $('#perawattr2_pj_pagi_tb1_c1').prop('disabled', true)
            $('#perawattr2_pj_sore_tb1_c2').prop('disabled', true)
            // table 2 rows 2
            $('#perawattr2_pj_sore_tb2_c1').prop('disabled', true)
            $('#perawattr2_pj_malam_tb2_c2').prop('disabled', true)
            // table 2 rows 3
            $('#perawattr2_pj_malam_tb3_c1').prop('disabled', true)
            $('#perawattr2_pj_pagi_tb3_c2').prop('disabled', true)


            const rows = ['rows1', 'rows2', 'rows3'];
            const shifts = ['pagi', 'sore'];

            for (let i = 1; i <= 7; i++) {
                rows.forEach(row => {
                    shifts.forEach(shift => {
                        $(`#perawat_sift${shift}_${row}_tb${i}`).prop('disabled', true);
                    });
                });
            }


        }

        setTimeout(() => {
            // Daftar elemen ID yang akan diproses
            const perawatElements = [{
                    selectId: '#perawat_pj_pagi_tb1_c1',
                    qrId: 'qr_perawat_pj_pagi_tb1_c1'
                },
                {
                    selectId: '#perawat_pj_sore_tb1_c2',
                    qrId: 'qr_perawat_pj_sore_tb1_c2'
                },
                {
                    selectId: '#perawat_pj_sore_tb2_c1',
                    qrId: 'qr_perawat_pj_sore_tb2_c1'
                },
                {
                    selectId: '#perawat_pj_malam_tb2_c2',
                    qrId: 'qr_perawat_pj_malam_tb2_c2'
                },
                {
                    selectId: '#perawat_pj_malam_tb3_c1',
                    qrId: 'qr_perawat_pj_malam_tb3_c1'
                },
                {
                    selectId: '#perawat_pj_pagi_tb3_c2',
                    qrId: 'qr_perawat_pj_pagi_tb3_c2'
                },
                // table rows 2
                {
                    selectId: '#perawattr2_pj_pagi_tb1_c1',
                    qrId: 'qr_perawattr2_pj_pagi_tb1_c1'
                },
                {
                    selectId: '#perawattr2_pj_sore_tb1_c2',
                    qrId: 'qr_perawattr2_pj_sore_tb1_c2'
                },
                {
                    selectId: '#perawattr2_pj_sore_tb2_c1',
                    qrId: 'qr_perawattr2_pj_sore_tb2_c1'
                },
                {
                    selectId: '#perawattr2_pj_malam_tb2_c2',
                    qrId: 'qr_perawattr2_pj_malam_tb2_c2'
                },
                {
                    selectId: '#perawattr2_pj_malam_tb3_c1',
                    qrId: 'qr_perawattr2_pj_malam_tb3_c1'
                },
                {
                    selectId: '#perawattr2_pj_pagi_tb3_c2',
                    qrId: 'qr_perawattr2_pj_pagi_tb3_c2'
                },
                {
                    selectId: '#perawat_siftpagi_rows1_tb1',
                    qrId: 'qr_perawat_siftpagi_rows1_tb1'
                },
                {
                    selectId: '#perawat_siftsore_rows1_tb1',
                    qrId: 'qr_perawat_siftsore_rows1_tb1'
                },
                {
                    selectId: '#perawat_siftsore_rows1_tb2',
                    qrId: 'qr_perawat_siftsore_rows1_tb2'
                },
            ];


            const rows = ['rows1', 'rows2', 'rows3'];
            const shifts = ['pagi', 'sore'];

            for (let i = 1; i <= 7; i++) {
                rows.forEach(row => {
                    shifts.forEach(shift => {
                        perawatElements.push({
                            selectId: `#perawat_sift${shift}_${row}_tb${i}`,
                            qrId: `qr_perawat_sift${shift}_${row}_tb${i}`
                        });
                    });
                });
            }


            // Iterasi dan proses setiap elemen
            perawatElements.forEach(element => {
                const selectedData = $(element.selectId).select2('data')[0];
                if (selectedData) {
                    dataListPerawatMenerima?.forEach(v => {
                        if (v.text === selectedData.text) {
                            QRSignatureAPI(v.id_original, element.qrId);
                        }
                    });
                }
            });

        }, 1000)
        // fill image
    }


    function listPerawatAPI() {
        $('#perawat_menyerahkan').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                    }
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    dataListPerawatMenyerahkan = items
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,

            },
            placeholder: 'Search for items...',
        })
    }

    // Daftar elemen ID yang akan diproses
    const perawatElements = [{
            selectId: '#perawat_pj_pagi_tb1_c1',
            qrId: 'qr_perawat_pj_pagi_tb1_c1'
        },
        {
            selectId: '#perawat_pj_sore_tb1_c2',
            qrId: 'qr_perawat_pj_sore_tb1_c2'
        },
        {
            selectId: '#perawat_pj_sore_tb2_c1',
            qrId: 'qr_perawat_pj_sore_tb2_c1'
        },
        {
            selectId: '#perawat_pj_malam_tb2_c2',
            qrId: 'qr_perawat_pj_malam_tb2_c2'
        },
        {
            selectId: '#perawat_pj_malam_tb3_c1',
            qrId: 'qr_perawat_pj_malam_tb3_c1'
        },
        {
            selectId: '#perawat_pj_pagi_tb3_c2',
            qrId: 'qr_perawat_pj_pagi_tb3_c2'
        },
        // table rows 2
        {
            selectId: '#perawattr2_pj_pagi_tb1_c1',
            qrId: 'qr_perawattr2_pj_pagi_tb1_c1'
        },
        {
            selectId: '#perawattr2_pj_sore_tb1_c2',
            qrId: 'qr_perawattr2_pj_sore_tb1_c2'
        },
        {
            selectId: '#perawattr2_pj_sore_tb2_c1',
            qrId: 'qr_perawattr2_pj_sore_tb2_c1'
        },
        {
            selectId: '#perawattr2_pj_malam_tb2_c2',
            qrId: 'qr_perawattr2_pj_malam_tb2_c2'
        },
        {
            selectId: '#perawattr2_pj_malam_tb3_c1',
            qrId: 'qr_perawattr2_pj_malam_tb3_c1'
        },
        {
            selectId: '#perawattr2_pj_pagi_tb3_c2',
            qrId: 'qr_perawattr2_pj_pagi_tb3_c2'
        },
    ];

    const rows = ['rows1', 'rows2', 'rows3'];
    const shifts = ['pagi', 'sore'];

    for (let i = 1; i <= 7; i++) {
        rows.forEach(row => {
            shifts.forEach(shift => {
                perawatElements.push({
                    selectId: `#perawat_sift${shift}_${row}_tb${i}`,
                    qrId: `qr_perawat_sift${shift}_${row}_tb${i}`
                });
            });
        });
    }


    // Iterasi dan proses setiap elemen untuk menetapkan event handler
    perawatElements.forEach(element => {
        $(element.selectId).on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, element.qrId);
        });
    });




    $('.perawat').select2({
        ajax: {
            url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term,
                }
            },
            processResults: function(data) {
                const {
                    items,
                    more
                } = data.data;
                dataListPerawatMenerima = items
                return {
                    results: items, // Data from PHP
                    pagination: {
                        more: more, // Check if more data is available
                    },
                };
            },
            cache: true,

        },
        placeholder: 'Search for items...',
    })
</script>