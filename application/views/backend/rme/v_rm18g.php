<!-- rm 18g -->
<div class="row">
    <div class="col-12">
        <table class="table table-bordered border-dark mt-3">
            <tbody>
                <tr>
                    <td>
                        <div class="text-center d-flex flex-column mt-5">
                            CATATAN KEPERAWATAN
                            PERI OPERATIF
                            (INTRA DAN PASCA OPERATIF)

                        </div>
                    </td>
                    <td class="col-6">
                        <div class="form-group">
                            <label for="">Nama Pasien :</label>
                            <input type="text" class="form-control border-dark border-dark" name="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir :</label>
                            <input type="text" class="form-control border-dark border-dark" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="">NO. RM :</label>
                            <input type="text" class="form-control border-dark border-dark" name="no_rm">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<table class="table  border-collapse border-dark">

    <tr>
        <td colspan="4">
            <p><strong>PETUNJUK PENGISIAN PENGKAJIAN KEPERAWATAN PERIOPERATIF</strong></p>
            <ol>
                <li>Isi label pasien dan label alergi obat sesuai petunjuk</li>
                <li>Dokumentasi harus lengkap dan sebaiknya ditulis dengan tinta warna hitam</li>
                <li>Isi semua daftar isian dengan jelas</li>
                <li>Gunakan singkatan yang telah diakui dan disepakati</li>
                <li>Semua waktu ditulis dalam format yang telah disediakan</li>
                <li>Jangan menghapus bila salah coret bubuhkan paraf dan tanggal</li>
                <li><strong>BERI TANDA GARIS "-" JIKA TIDAK DILAKUKAN</strong></li>
                <li>Beri tanda (ƴ) pada € yang telah disediakan</li>
                <li>Beri tanda tambahan apabila diperlukan</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <p><strong>CATATAN KEPERAWATAN INTRA OPERASI : Diisi lengkap oleh Staf Perawat Kamar Operasi</strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="timeouts">
                <p>
                    Time Out:
                <div class="d-flex justify-content-start align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <input class="custom-checkbox-success" type="radio" name="TimeOut" value="ya1" id="time_ya1" />
                        <div class="d-flex align-items-center gap-2">
                            <label class="col-4" for="time_ya1">Ya, Jam: </label>
                            <input type="time" class="form-control border-dark border-dark me-4" name="TimeOutJam" value="<?= date('H:i') ?>" />
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <input class="custom-checkbox-danger" type="radio" name="TimeOut" value="tidak2" id="time_tidak1" />
                        <label for="time_tidak1">Tidak</label>
                    </div>
                </div>
                </p>
                <p>Cek ketersediaan peralatan dan fungsinya:</p>
                <div class="d-flex justify-content-start align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <input class="custom-checkbox-success" type="radio" name="ketersediaan_peralatan" value="ya2" id="time_ya2" />
                        <div class="d-flex align-items-center gap-2">
                            <label class="col-4" for="time_ya2">Ya, Jam: </label>
                            <input type="time" class="form-control border-dark border-dark me-4" name="peralatan_jam" value="<?= date('H:i') ?>" />
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <input class="custom-checkbox-danger" type="radio" name="ketersediaan_peralatan" value="tidak2" id="time_tidak2" />
                        <label for="time_tidak2">Tidak</label>
                    </div>
                </div>
            </div>

            <div class="my-3">Prothese / Implant:</div>
            <div class="d-flex justify-content-start align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <input class="custom-checkbox-success" type="radio" name="prothese" value="ya" id="time_ya3" />
                    <div class="d-flex align-items-center gap-2">
                        <label class="col-4" for="time_ya3">Ya, Jam: </label>
                        <input type="time" class="form-control border-dark border-dark me-4" name="protheseJam" value="<?= date('H:i') ?>" />
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <input class="custom-checkbox-danger" type="radio" name="prothese" value="tidak" id="time_tidak3" />
                    <label for="time_tidak3">Tidak</label>
                </div>
            </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="operation-details">
                <p><strong>Mulai Jam <input type="time" class="form-control border-dark d-inline w-25 mx-2" name="MulaiJam" value="<?= date('H:i') ?>" />
                        Selesai Jam <input type=" time" class="form-control border-dark d-inline w-25 mx-2" name="SelesaiJam" value="<?= date('H:i') ?>" /></strong></p>

                <p>Dilakukan operasi / Jenis Operasi <input type="text" class="form-control border-dark" name="JenisOperasi" /></p>

                <div class="d-flex align-items-center gap-2 mb-2 ">
                    <label for="elektif" class="col-4">Tipe Operasi:</label>
                    <div class="d-flex gap-2  w-100 ">
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="elektif" name="TipeOperasi" value="elektif" />
                            <label for="elektif">Elektif</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="darurat" name="TipeOperasi" value="darurat" />
                            <label for="darurat">Darurat</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="bedahminor" name="TipeOperasi" value="bedahminor" />
                            <label for="bedahminor">Bedah Minor</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-2 ">
                    <label for="umum" class="col-4">Tipe Pembiusan:</label>
                    <div class="d-flex gap-2  w-100 ">
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="umum" name="TipePembiusan" value="umum" />
                            <label for="umum">Umum</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="lokal" name="TipePembiusan" value="lokal" />
                            <label for="lokal">Lokal</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="regional" name="TipePembiusan" value="regional" />
                            <label for="regional">Regional</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-2 ">
                    <label for="terjaga" class="col-4">Tingkat Kesadaran Waktu Masuk Kamar Operasi:</label>
                    <div class="d-flex gap-2  w-100 ">
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="terjaga" name="TingkatKesadaranMasuk" value="terjaga" />
                            <label for="terjaga">Terjaga</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="mudahdibangunkan" name="TingkatKesadaranMasuk" value="mudahdibangunkan" />
                            <label for="mudahdibangunkan">Mudah dibangunkan</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="lainlain" name="TingkatKesadaranMasuk" value="lainlain" />
                            <label for="lainlain">Lain-lain</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-2 ">
                    <label for="rileks" class="col-4">Status Emosi Waktu Masuk Kamar Operasi:</label>
                    <div class="d-flex gap-2  w-100 ">
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="rileks" name="StatusEmosiMasuk" value="rileks" />
                            <label for="rileks">Rileks</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="gelisah" name="StatusEmosiMasuk" value="gelisah" />
                            <label for="gelisah">Gelisah</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="tidakadarespon" name="StatusEmosiMasuk" value="tidakadarespon" />
                            <label for="tidakadarespon">Tidak ada respon</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-start gap-2 mb-2 ">
                    <label for="tangankanankiri" class="col-4">Posisi Kanula Intra Vena:</label>
                    <div class="d-flex gap-2 align-items-center w-100 flex-wrap">
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="tangankanankiri" name="PosisiKanulaIntraVena" value="tangankanankiri" />
                            <label for="tangankanankiri">Tangan kanan / kiri</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="kakikanankiri" name="PosisiKanulaIntraVena" value="kakikanankiri" />
                            <label for="kakikanankiri">Kaki kanan / kiri</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="arterieline" name="PosisiKanulaIntraVena" value="arterieline" />
                            <label for="arterieline">Arteri line</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="cvp" name="PosisiKanulaIntraVena" value="cvp" />
                            <label for="cvp">CVP</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" class="custom-checkbox-success" id="lainlain2" name="PosisiKanulaIntraVena" value="lainlain2" />
                            <label for="lainlain2">Lain-lain</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
                    <label for="telentang" class="col-4">Posisi Operasi:</label>
                    <div class="d-flex gap-2 flex-wrap w-100 ms-5">
                        <div class="col-2">
                            <input type="radio" class="custom-checkbox-success" id="telentang" name="PosisiOperasi" value="telentang" onclick="clearInput()" />
                            <label for="telentang">Telentang</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" class="custom-checkbox-success" id="lithotomy" name="PosisiOperasi" value="lithotomy" onclick="clearInput()" />
                            <label for="lithotomy">Lithotomy</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" class="custom-checkbox-success" id="tengkurap" name="PosisiOperasi" value="tengkurap" onclick="clearInput()" />
                            <label for="tengkurap">Tengkurap</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" class="custom-checkbox-success" id="lateral kiri" name="PosisiOperasi" value="lateral kiri" onclick="clearInput()" />
                            <label for="lateral kiri">Lateral Kiri</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" class="custom-checkbox-success" id="lateral kanan" name="PosisiOperasi" value="lateral kanan" onclick="clearInput()" />
                            <label for="lateral kanan">Lateral Kanan</label>
                        </div>
                        <div class="d-flex w-100 gap-2">
                            <input type="radio" class="custom-checkbox-success" id="lain-lain" name="PosisiOperasi" value="lain-lain"  />
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="lain-lain" class="col-1">Lain-lain</label>
                                <input type="text" class="form-control border-dark d-inline w-100 mx-2" name="diawasi_oleh" id="diawasi_oleh" placeholder="Diawasi oleh" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
                    <label for="lenganterentangkanankiri" class="col-4">Posisi Lengan:</label>
                    <div class="d-flex gap-2 flex-wrap w-100 ms-5">
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="lenganterentangkanankiri" name="PosisiLengan" value="lenganterentangkanankiri" />
                            <label for="lenganterentangkanankiri">Lengan Terentang Ka/Ki</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="lenganterlipatkanankiri" name="PosisiLengan" value="lenganterlipatkanankiri" />
                            <label for="lenganterlipatkanankiri">Lengan Terlipat Ka/Ki</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="lainlain3" name="PosisiLengan" value="lainlain3" />
                            <label for="lainlain3">Lain-lain</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
                    <label for="papanlenganpenyanggah" class="col-4">Posisi Alat Bantu Yang Digunakan:</label>
                    <div class="d-flex gap-2 flex-wrap w-100 ms-5">
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="papanlenganpenyanggah" name="PosisiAlatBantuDigunakan" value="papanlenganpenyanggah" />
                            <label for="papanlenganpenyanggah">Papan Lengan Penyanggah</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="lainlain4" name="PosisiAlatBantuDigunakan" value="lainlain4" />
                            <label for="lainlain4">Lain-lain</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
                    <label for="tidak" class="col-4">Memakai Kateter Urine:</label>
                    <div class="d-flex gap-2 flex-wrap w-100 ms-5">
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-danger" id="tidak" name="MemakaiKateterUrine" value="tidak" />
                            <label for="tidak">Tidak</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" class="custom-checkbox-success" id="kamar_operasi" name="kamar_operasi" />
                            <label for="kamar_operasi">Di dalam kamar operasi</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="di_ruangan" name="MemakaiKateterUrine" value="di_ruangan" />
                            <label for="di_ruangan">Di ruangan</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <div class="col-2">Persiapan Kulit </div> :
                    <input type="checkbox" name="chlorhexidine" id="chlorhexidine" class="custom-checkbox-success">chlorhexidine 70 %
                    <input type="checkbox" name="povidone" id="povidone" class="custom-checkbox-success">Povicone-lodine
                    <input type="checkbox" name="hibiscrub" id="hibiscrub" class="custom-checkbox-success">Hibiscrub
                    <div class="d-flex align-items-center gap-2">
                        <input type="checkbox" name="hibiscrub_lain" id="hibiscrub_lain" class="custom-checkbox-success">
                        <div class="flex-shrink-0">lain-lain</div>
                        <input type="text" name="hibis_lain" id="" class="form-control border-dark">
                    </div>
                </div>

            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="diathermy-section">
                <!-- Pemakaian Diathermy -->
                <div class="d-flex align-items-center gap-2 mb-2">
                    <label for="PemakaianDiathermy" class="col-4">Pemakaian Diathermy:</label>
                    <div class="d-flex gap-2 w-100 ">
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-danger" id="tidak" name="PemakaianDiathermy" value="tidak" />
                            <label for="tidak">Tidak</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="monopolar" name="PemakaianDiathermy" value="monopolar" />
                            <label for="monopolar">Monopolar</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="bipolar" name="PemakaianDiathermy" value="bipolar" />
                            <label for="bipolar">Bipolar</label>
                        </div>
                    </div>
                </div>

                <!-- Lokasi dari Dipersive Elektrode -->
                <div class="d-flex gap-2 mb-2 flex-column">
                    <div>
                        <label for="LokasiDipersiveElektrode">Lokasi dari Dipersive Elektrode:</label>
                    </div>
                    <div class="d-flex gap-2 w-100 flex-wrap ms-5">
                        <div class="col-4">
                            <input type="radio" name="elektrode" value="elktrode_bokong" class="custom-checkbox-success" id="bokong_elektrode1" onclick="clearElektrodeInput()" />
                            <label for="bokong_elektrode1">Bokong Ka/Ki</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="elektrode" value="elktrode_paha" class="custom-checkbox-success" id="paha_elektrode1" onclick="clearElektrodeInput()" />
                            <label for="paha_elektrode1">Paha Ka/Ki</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" class="custom-checkbox-success" id="elektrode_lain" name="elektrode" value="elektrodelain" onclick="toggleElektrodeInput()" />
                            <label for="elektrode_lain">Lain-lain</label>
                        </div>
                        <div class="col-4 w-75">
                            <input type="text" class="form-control border-dark w-100" name="LokasiDipersiveElektrode" id="elektrodeInput1" placeholder="Lokasi lain-lain" readonly />
                        </div>
                    </div>

                </div>

                <!-- Pemeriksaan Kondisi Kulit Sebelum Operasi -->
                <div class="d-flex align-items-start gap-2 mb-2 flex-column">
                    <div>
                        <label for="KondisiKulitSebelumOperasi">Pemeriksaan Kondisi Kulit Sebelum Operasi:</label>
                    </div>
                    <div class="d-flex gap-2 ms-5 w-100 flex-wrap">
                        <div class="col-4">
                            <input type="radio" name="kondisi_kulit" value="kondisi_utuh" id="kondisi_utuh" class="custom-checkbox-success" onclick="clearKulitInput()" />
                            <label for="kondisi_utuh">Utuh</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="kondisi_kulit" value="kondisi_menggelembung" id="kondisi_menggelembung" class="custom-checkbox-success" onclick="clearKulitInput()" />
                            <label for="kondisi_menggelembung">Menggelembung</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="kondisi_kulit_lain" name="kondisi_kulit" value="kondisi_kulitlain" onclick="toggleKulitInput()" />
                            <label for="kondisi_kulit_lain">Lain-lain</label>
                        </div>
                        <div class="col-4 w-75">
                            <input type="text" class="form-control border-dark d-inline mx-2" name="KondisiKulitSebelumOperasi" id="kulitSebelumInput" placeholder="Kondisi Kulit Lain-lain" readonly />
                        </div>
                    </div>

                </div>

                <!-- Pemeriksaan Kondisi Kulit Sesudah Operasi -->
                <div class="d-flex align-items-start gap-2 mb-2 flex-column my-3">
                    <div>
                        <label for="KondisiKulitSesudahOperasi">Pemeriksaan Kondisi Kulit Sesudah Operasi:</label>
                    </div>
                    <div class="d-flex gap-2 ms-5 flex-wrap w-100">
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="utuh_sesudah" name="KondisiKulitSesudahOperasi" value="utuhSesudah" onclick="clearSesudahInput()" />
                            <label for="utuh_sesudah">Utuh</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="menggelembung_sesudah" name="KondisiKulitSesudahOperasi" value="menggelembungSesudah" onclick="clearSesudahInput()" />
                            <label for="menggelembung_sesudah">Menggelembung</label>
                        </div>
                        <div class="col-4">
                            <input type="radio" class="custom-checkbox-success" id="lainlain_sesudah" name="KondisiKulitSesudahOperasi" value="lainlainSesudah" onclick="toggleSesudahInput()" />
                            <label for="lainlain_sesudah">Lain-lain</label>
                        </div>
                        <div class="col-4 w-75">
                            <input type="text" class="form-control border-dark d-inline mx-2" name="KondisiKulitSesudahOperasilainlain" id="input_lainlain" placeholder="Kondisi Kulit Lain-lain" readonly />
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3">
                <label for="">Kode Unit Elektrosurgical</label> <input type="text" class="form-control border-dark" name="KodeUnitElektrosurgical" />
            </div>

            <div class="temperature-control">
                <div class="my-3 d-flex gap-2">
                    <label for="" class="col-4">Unit Pemanas / Pendingin Operasi:</label>
                    <input type="radio" class="custom-checkbox-success" class="" name="UnitPemanasPendinginOperasi" value="ya_pemanas" id="ya_pemanas" />
                    <label for="ya_pemanas">Ya</label>
                    <input type="radio" class="custom-checkbox-danger" class="" name="UnitPemanasPendinginOperasi" value="tidak_pemanas" id="tidak_pemanas" />
                    <label for="tidak_pemanas">Tidak</label>
                </div>
                <p>Pengaturan Temperatur: <input type="text" class="form-control border-dark d-inline w-25 mx-2" name="PengaturanTemperatur" /> <sup>0</sup>C</p>
                <p>Jam Mulai: <input type="time" class="form-control border-dark d-inline w-25 mx-2" name="JamMulai" value="<?= date('H:i'); ?>" /></p>
                <p>Kode Unit: <input type="text" class="form-control border-dark d-inline w-25 mx-2" name="KodeUnit" /></p>
                <p>Jam Selesai: <input type="time" class="form-control border-dark d-inline w-25 mx-2" name="JamSelesai" value="<?= date('H:i'); ?>" /></p>
            </div>

            <div class="tourniquet-section">
                <p>Pemakaian Torniquet (Diawasi Oleh <input type="text" class="form-control border-dark d-inline w-25 mx-2" name="DiawasiOlehTorniquet" />)</p>
                <table class="tourniquet-table">
                    <tr>
                        <th>Lokasi</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Tekanan</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="custom-checkbox-success" name="LokasiTorniquet" value="lengankanan" id="lengan_kanan_lok" />
                            <label for="lengan_kanan_lok">Lengan kanan</label>
                        </td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuMulaiLenganKanan" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuSelesaiLenganKanan" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="text" class="form-control border-dark" name="TekananLenganKanan" /></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="custom-checkbox-success" name="LokasiTorniquet" value="kakikanan" id="kaki_kanan_lok" /> <label for="kaki_kanan_lok">Kaki kanan</label></td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuMulaiKakiKanan" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuSelesaiKakiKanan" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="text" class="form-control border-dark" name="TekananKakiKanan" /></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="custom-checkbox-success" name="LokasiTorniquet" value="lengankiri" id="lengan_kiri" /> <label for="lengan_kiri">Lengan kiri</label></td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuMulaiLenganKiri" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuSelesaiLenganKiri" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="text" class="form-control border-dark" name="TekananLenganKiri" /></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="custom-checkbox-success" name="LokasiTorniquet" value="kakikiri" id="kaki_kiri" /> <label for="kaki_kiri">Kaki Kiri</label></td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuMulaiKakiKiri" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="datetime-local" class="form-control border-dark" name="WaktuSelesaiKakiKiri" value="<?= date('Y-m-d H:i'); ?>" /></td>
                        <td><input type="text" class="form-control border-dark" name="TekananKakiKiri" /></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="laser-implant-section">
                <p>Pemakaian Laser <input type="text" class="form-control border-dark" name="PemakaianLaser" />
                    Kode Model: <input type="text" class="form-control border-dark" name="PemakaianLaserKodeModel" /></p>

                <p>Pemakaian Implant:
                    <input type="radio" class="custom-checkbox-success" name="PemakaianImplant" value="ya" /> Ya
                    <input type="radio" class="custom-checkbox-danger" name="PemakaianImplant" value="tidak" /> Tidak
                    Kadaluarsa <input type="text" class="form-control border-dark" name="PemakaianImplantKadaluarsa" />
                </p>

                <p>Bedah: <input type="text" class="form-control border-dark" name="PemakaianImplantBedah" /></p>
                <p>Pabrik: <input type="text" class="form-control border-dark" name="PabrikImplant" /></p>
                <p>Size: <input type="text" class="form-control border-dark" name="SizeImplant" /></p>
                <p>Type: <input type="text" class="form-control border-dark" name="TypeImplant" /></p>
                <p>No. Seri: <input type="text" class="form-control border-dark" name="NoSeriImplant" /></p>
            </div>

            <div class="counting-section">
                <p><strong>Hitung Instrumen/ Kassa/ Jarum</strong></p>
                <table class="table border-collapse counting-table">
                    <tr>
                        <th>Hitung</th>
                        <th>Kassa</th>
                        <th>Jarum</th>
                        <th>Instrumen</th>
                    </tr>
                    <tr>
                        <td>Hitung 1</td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahKassaHitung1" /></td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahJarumHitung1" /></td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahInstrumenHitung1" /></td>
                    </tr>
                    <tr>
                        <td>Hitung 2</td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahKassaHitung2" /></td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahJarumHitung2" /></td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahInstrumenHitung2" /></td>
                    </tr>
                    <tr>
                        <td>Hitung 3</td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahKassaHitung3" /></td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahJarumHitung3" /></td>
                        <td>Jumlah: <input type="text" class="form-control border-dark" name="JumlahInstrumenHitung3" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" class="custom-checkbox-success" name="KassaHitungJelas" id="tidak_jelas_1" /> <label for="tidak_jelas_1">Tidak Jelas</label></td>
                        <td><input type="checkbox" class="custom-checkbox-success" name="JarumHitungJelas" id="tidak_jelas_2" /> <label for="tidak_jelas_2">Tidak Jelas</label></td>
                        <td><input type="checkbox" class="custom-checkbox-success" name="InstrumenHitungJelas" id="tidak_jelas_3" /> <label for="tidak_jelas_3">Tidak Jelas</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" class="custom-checkbox-success" name="KassaHitungperlu" id="tidak_perlu_1" /> <label for="tidak_perlu_1">Tidak perlu</label></td>
                        <td><input type="checkbox" class="custom-checkbox-success" name="JarumHitungperlu" id="tidak_perlu_2" /> <label for="tidak_perlu_2">Tidak perlu</label></td>
                        <td><input type="checkbox" class="custom-checkbox-success" name="InstrumenHitungperlu" id="tidak_perlu_3" /> <label for="tidak_perlu_3">Tidak perlu</label></td>
                    </tr>
                </table>

                <div class="signature-section">
                    <div class="d-flex flex-column" style="gap: 20px; max-width: 400px;">
                        <p>Hitungan ACC oleh Dokter Bedah,</p>
                        <p>Tanda tangan dan nama jelas:</p>
                        <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_dokter_umum" />
                        <select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
                            style="width: 100%;"></select>
                    </div>
                    <p class="mt-3">Catatan:</p>
                    <textarea name="CatatanHitunganACC" class="form-control border-dark"></textarea>

                    <div class="my-2 d-flex gap-2 align-items-center">
                        <div>Jika dihitung tidak jelas X-Ray:</div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" class="custom-checkbox-success" name="XrayJikaDihitungTidakJelas" value="ya_x_ray" /> Ya
                            <input type="radio" name="XrayJikaDihitungTidakJelas" class="custom-checkbox-danger" value="tidak_x_ray" /> Tidak
                        </div>
                    </div>
                </div>
            </div>

            <h5>18. Pemakaian Drain</h5>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>TIPE DRAIN</th>
                        <th>JENIS DRAIN</th>
                        <th>UKURAN</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control border-dark" name="tipe_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="jenis_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="ukuran_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="keterangan_drain[]"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control border-dark" name="tipe_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="jenis_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="ukuran_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="keterangan_drain[]"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control border-dark" name="tipe_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="jenis_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="ukuran_drain[]"></td>
                        <td><input type="text" class="form-control border-dark" name="keterangan_drain[]"></td>
                    </tr>
                </tbody>
            </table>

            <h5>19. Irigasi Luka</h5>
            <div class="mb-3">
                <div class="form-check">
                    <input class="custom-checkbox-success" type="checkbox" name="sodium_chloride_0_9%" value="sodium_chloride_0_9%">
                    <label class="form-check-label">Sodium Chloride 0.9%</label>
                </div>
                <div class="form-check">
                    <input class="custom-checkbox-success" type="checkbox" name="antibiotik_spray" value="antibiotik_spray">
                    <label class="form-check-label">Antibiotik Spray</label>
                </div>
                <div class="form-check">
                    <input class="custom-checkbox-success" type="checkbox" name="antibiotik" value="antibiotik">
                    <label class="form-check-label">Antibiotik</label>
                </div>
                <div class="form-check">
                    <input class="custom-checkbox-success" type="checkbox" name="h2o2" value="h2o2">
                    <label class="form-check-label">H2O2</label>
                </div>
                <div class="form-check">
                    <input class="custom-checkbox-success" type="checkbox" name="lain_lain" value="lain_lain">
                    <label class="form-check-label">Lain-lain</label>
                </div>
            </div>


            <h5>20. Pemakaian Cairan</h5>
            <div class="mb-3">
                <label class="form-label">Glysin:</label>
                <input type="text" class="form-control border-dark" name="glysin_liter" placeholder="Liter">
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="checkbox" name="bss_solution" value="BSS Solution">
                <label class="form-check-label">BSS Solution</label>
            </div>
            <div class="mb-3">
                <label class="form-label">Air untuk irigasi:</label>
                <input type="text" class="form-control border-dark" name="air_irigasi_liter" placeholder="Liter">
            </div>
            <div class="mb-3">
                <label class="form-label">Sodium Chloride 0.9%:</label>
                <input type="text" class="form-control border-dark" name="sodium_chloride_liter" placeholder="Liter">
            </div>
            <div class="form-check">
                <input class="custom-checkbox-success" type="checkbox" name="pemakaian_cairan_lain" value="Lain-lain">
                <label class="form-check-label">Lain-lain</label>
            </div>

            <h5>21. Balutan</h5>
            <div class="form-check">
                <input class="custom-checkbox-success" type="radio" name="balutan" value="Tidak Ada">
                <label class="form-check-label">Tidak Ada</label>
            </div>
            <div class="mb-3">
                <input class="custom-checkbox-success" type="radio" name="balutan" value="Pressure">
                <label class="form-check-label">Pressure</label>
                <input type="text" class="form-control border-dark d-inline w-25" name="pressure_jenis" placeholder="Jenis">
            </div>

            <h5>22. Spesimen</h5>
            <div class="mb-3">
                <input class="custom-checkbox-success" type="checkbox" name="histologi" value="Histologi">
                <label class="form-check-label">Histologi</label>
                <input type="text" class="form-control border-dark d-inline w-25" name="histologi_jenis" placeholder="Jenis">
            </div>
            <div class="mb-3">
                <input class="custom-checkbox-success" type="checkbox" name="sitologi" value="Sitologi">
                <label class="form-check-label">Sitologi</label>
                <input type="text" class="form-control border-dark d-inline w-25" name="sitologi_jenis" placeholder="Jenis">
            </div>
            <div class="mb-3">
                <input class="custom-checkbox-success" type="checkbox" name="kultur" value="Kultur">
                <label class="form-check-label">Kultur</label>
                <input type="text" class="form-control border-dark d-inline w-25" name="kultur_jenis" placeholder="Jenis">
            </div>
            <div class="mb-3">
                <input class="custom-checkbox-success" type="checkbox" name="frozen" value="Frozen">
                <label class="form-check-label">Frozen</label>
            </div>
            <div class="mb-3">
                <input class="custom-checkbox-success" type="checkbox" name="lain_lain" value="Lain-lain">
                <label class="form-check-label">Lain-lain</label>
                <input type="text" class="form-control border-dark d-inline w-25" name="lain_lain_jenis" placeholder="Jenis">
            </div>


            <div class="form-check mt-3">
                <div class="d-flex gap-2 align-items-center mt-3">
                    <label for="" class="fw-bold flex-shrink-0">Jumlah Total Jaringan</label>/ <span class="flex-shrink-0 col-2">cairan pemeriksaan</span>
                    <input type="text" name="jumlah_total_jaringan_cairan" class="form-control border-dark">
                </div>
                <div class="d-flex gap-2 align-items-center mt-3">
                    <label for="" class="fw-bold flex-shrink-0">Spesimen untuk jaringan</label> <span class="flex-shrink-0 col-2"> jenis dari jaringan</span>
                    <input type="text" name="spesimen_untuk_jaringan_" class="form-control border-dark">
                </div>
                <div class="d-flex gap-2 align-items-center mt-3">
                    <label for="" class="flex-shrink-0 col-4">Jumlah Dari jaringan</label>
                    <input type="text" name="jumlah_jaringan_" class="form-control border-dark">
                </div>
                <div class="d-flex gap-2 align-items-center mt-3">
                    <label for="" class="fw-bold flex-shrink-0 col-4">Keterangan</label>
                    <input type="text" name="ket_jaringan_" class="form-control border-dark">
                </div>

            </div>


            <div class="closing-section w-100 mt-5">
                <div class="d-flex flex-row justify-content-between" style="gap: 1rem">
                    <div class="signature-block" style="max-width: 300px;">
                        <div class="d-flex flex-column align-items-center gap-2">
                            <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_menyerahkan" />
                            <select type="select" name="perawat_menyerahkan" id="perawat_menyerahkan" class="form-select"
                                style="width: 100%;"></select>
                        </div>
                        <p class="mt-3">Tanda Tangan dan Nama Jelas</p>
                        <p><strong>Perawat Instrument</strong></p>
                    </div>
                    <div class="signature-block" style="max-width: 300px;">
                        <div class="d-flex flex-column align-items-center gap-2">
                            <img class="img-responsive center-block mt-2" style="width: 35%;" id="qr_perawat_menerima" />
                            <select type="select" name="perawat_menerima" id="perawat_menerima" class="form-select"
                                style="width: 100%;"></select>
                        </div>
                        <p class="mt-3">Tanda Tangan dan Nama Jelas</p>
                        <p><strong>Perawat Sirkulasi</strong></p>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">

                    <div class="d-flex align-items-center gap-2">
                        <label for="">Tanggal</label> <input class="form-control border-dark  d-inline-block" type='datetime-local' name="Tanggal_jam" value="<?= date('Y-m-d H:i') ?>" />
                    </div>
                </div>

                <p><strong>*Coret seperlunya</strong></p>
            </div>
        </td>
    </tr>
</table>

<script>
    let dataListPerawatMenyerahkan = []
    let dataListPerawatMenerima = []
    let dataDokter = []
    const mode = "<?= $mode; ?>"

    $(document).ready(function() {
        let page = 1;

        listPerawatAPI()


        $('#perawat_menyerahkan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_menyerahkan')
        });
        $('#perawat_menerima').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_menerima')
        });


        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;


        $('#id_perawat_form_1').val($('#id_perawat_form_1').val() || id_perawat)
        $('#nama_perawat_form_1').val($('#nama_perawat_form_1').val() || nama_perawat)
        $('#nama_perawat_form_1').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form_1').val(), 'qr_perawat_1')

        $('#id_perawat_form_2').val($('#id_perawat_form_2').val() || id_perawat)
        $('#nama_perawat_form_2').val($('#nama_perawat_form_2').val() || nama_perawat)
        $('#nama_perawat_form_2').attr('disabled', true)

        QRSignatureAPI($('#id_perawat_form_2').val(), 'qr_perawat_2')

        QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

        $('#dokter_umum').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_dokter_umum')
        });

    })


    function listDokterUmumAPI(callback = null) {
        $('#dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
                    dataDokter = items
                    if (callback) callback(items);
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

    listDokterUmumAPI()

    function cbCommon(data) {
        populateFormFields(data);

        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        $('#perawat_menyerahkan').prop('disabled', false)
        $('#perawat_menyerahkan').select2('open')
        $('#perawat_menyerahkan').select2('close')
        $('#perawat_menerima').prop('disabled', false)
        $('#perawat_menerima').select2('open')
        $('#perawat_menerima').select2('close')
        if (mode === "lihat") {
            $('#perawat_menyerahkan').prop('disabled', true)
            $('#perawat_menerima').prop('disabled', true)

        }

        setTimeout(() => {
            dataListPerawatMenyerahkan?.map(v => {
                if (v.text === $('#perawat_menyerahkan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_menyerahkan')
                }
            })
            dataListPerawatMenerima?.map(v => {
                if (v.text === $('#perawat_menerima').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_menerima')
                }
            })
        }, 1000)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0]?.text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum');
                }
            });
        }, 1500);

    }

    // Fungsi untuk mengatur fokus input berdasarkan pilihan radio
    function toggleInputFocus() {
        var inputText = document.getElementById('diawasiOlehInput');
        // Jika radio "Lain-lain" dipilih, fokuskan input
        if (document.getElementById('lain-lain').checked) {
            inputText.focus();
        }
    }

    // Fungsi untuk mengosongkan input ketika radio lain dipilih
    function clearInput() {
        var inputText = document.getElementById('diawasiOlehInput');
        // Kosongkan input jika radio selain "Lain-lain" dipilih
        inputText.value = '';
    }


    // Mendapatkan elemen radio button dan input teks
    const radioLainlain = document.getElementById('lainlain_sesudah');
    const inputLainlain = document.getElementById('input_lainlain');

    // Menambahkan event listener pada perubahan radio button
    radioLainlain.addEventListener('change', function() {
        if (radioLainlain.checked) {
            // Fokuskan input jika radio button 'Lain-lain' dipilih
            inputLainlain.focus();
        }
    });

    // Menambahkan event listener untuk memastikan input kosong saat radio button lain dipilih
    const radios = document.querySelectorAll('input[name="KondisiKulitSesudahOperasi"]');
    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (radio.value !== 'lainlain') {
                // Kosongkan input jika radio button selain 'Lain-lain' dipilih
                inputLainlain.value = '';
            }
        });
    });

    // Mendapatkan elemen radio button dan input teks
    const radioLainlainElektrode = document.getElementById('elektrode_lain');
    const inputElektrode = document.getElementById('elektrodeInput1');

    // Menambahkan event listener untuk memastikan input fokus jika radio "Lain-lain" dipilih
    radioLainlainElektrode.addEventListener('change', function() {
        if (radioLainlainElektrode.checked) {
            // Fokuskan input jika radio button 'Lain-lain' dipilih
            inputElektrode.focus();
        }
    });

    // Menambahkan event listener untuk memastikan input kosong saat radio button lain dipilih
    const radiosElektrode = document.querySelectorAll('input[name="elektrode"]');
    radiosElektrode.forEach(radio => {
        radio.addEventListener('change', function() {
            if (radio.value !== 'elektrodelain') {
                // Kosongkan input jika radio button selain 'Lain-lain' dipilih
                inputElektrode.value = '';
            }
        });
    });


    // Mendapatkan elemen radio button dan input teks
    const radioLainlainKulit = document.getElementById('kondisi_kulit_lain');
    const inputKulitSebelum = document.getElementById('kulitSebelumInput');

    // Menambahkan event listener untuk memastikan input fokus jika radio "Lain-lain" dipilih
    radioLainlainKulit.addEventListener('change', function() {
        if (radioLainlainKulit.checked) {
            // Fokuskan input jika radio button 'Lain-lain' dipilih
            inputKulitSebelum.focus();
        }
    });

    // Menambahkan event listener untuk memastikan input kosong saat radio button lain dipilih
    const radiosKulit = document.querySelectorAll('input[name="kondisi_kulit"]');
    radiosKulit.forEach(radio => {
        radio.addEventListener('change', function() {
            if (radio.value !== 'kondisi_kulitlain') {
                // Kosongkan input jika radio button selain 'Lain-lain' dipilih
                inputKulitSebelum.value = '';
            }
        });
    });


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

        $('#perawat_menerima').select2({
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
    }


    // Function to clear the input field when any radio button other than "lain-lain" is selected
    function clearInput() {
        const diawasiOlehInput = document.getElementById('diawasiOlehInput');
        diawasiOlehInput.readOnly = true; // Make the input readonly
        diawasiOlehInput.value = ''; // Clear the input field
    }

    // Function to enable the input field when "lain-lain" is selected and focus it
    function toggleInputFocus() {
        const diawasiOlehInput = document.getElementById('diawasiOlehInput');
        diawasiOlehInput.readOnly = false; // Enable the input field
        diawasiOlehInput.focus(); // Focus the input field
    }

    // Function to clear the input field when any radio button other than "Lain-lain" is selected
    function clearElektrodeInput() {
        const elektrodeInput = document.getElementById('elektrodeInput1');
        elektrodeInput.readOnly = true; // Make the input readonly
        elektrodeInput.value = ''; // Clear the input field
    }

    // Function to enable the input field when "Lain-lain" is selected and focus it
    function toggleElektrodeInput() {
        const elektrodeInput = document.getElementById('elektrodeInput1');
        elektrodeInput.readOnly = false; // Enable the input field
        elektrodeInput.focus(); // Focus the input field
    }


    // Function to clear the input field when any radio button other than "Lain-lain" is selected
    function clearKulitInput() {
        const kulitInput = document.getElementById('kulitSebelumInput');
        kulitInput.readOnly = true; // Make the input readonly
        kulitInput.value = ''; // Clear the input field
    }

    // Function to enable the input field when "Lain-lain" is selected and focus it
    function toggleKulitInput() {
        const kulitInput = document.getElementById('kulitSebelumInput');
        kulitInput.readOnly = false; // Enable the input field
        kulitInput.focus(); // Focus the input field
    }


    // Function to clear the input field when any radio button other than "Lain-lain" is selected
    function clearSesudahInput() {
        const inputLainlain = document.getElementById('input_lainlain');
        inputLainlain.readOnly = true; // Make the input readonly
        inputLainlain.value = ''; // Clear the input field
    }

    // Function to enable the input field when "Lain-lain" is selected and focus it
    function toggleSesudahInput() {
        const inputLainlain = document.getElementById('input_lainlain');
        inputLainlain.readOnly = false; // Enable the input field
        inputLainlain.focus(); // Focus the input field
    }
</script>