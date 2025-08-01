<!-- rm 25 -->
<table class="table table-bordered border-dark">
  <tr>
    <td colspan=""><strong>Nama Pasien:</strong></td>
    <td colspan="6"><input type="text" name="nama_pasien" class="form-control border-dark" /></td>
  </tr>
  <tr>
    <td colspan=""><strong>Jenis Kelamin:</strong></td>
    <td colspan="6"><input type="text" name="jenkel" class="form-control border-dark" /></td>
  </tr>
  <tr>
    <td colspan=""><strong>Umur:</strong></td>
    <td colspan="6"><input type="text" name="umur" class="form-control border-dark" /></td>
  </tr>
  <tr>
    <td colspan=""><strong>No. RM:</strong></td>
    <td colspan="6"><input type="text" name="no_rm" class="form-control border-dark" /></td>
  </tr>
  <tr>
    <td colspan="4">
      <ul>
        <li>Beri tanda centang / check list pada kotak kecil</li>
        <li>T.A.K : Tidak Ada Kelainan</li>
      </ul>
    </td>
  </tr>

  <tr>
    <td colspan=""><strong>Asesmen Tanggal:</strong></td>
    <td colspan="4"><input type="datetime-local" name="tanggal_hari" class="form-control border-dark" value="<?= date('Y-m-d H:i') ?>" /></td>

  </tr>

  <tr>
    <td><input type="checkbox" id="Dyspnoe" class="custom-checkbox-success" name="Dyspnoe" value="" /> <label for="Dyspnoe">Dyspnoe</label></td>
    <td><input type="checkbox" id="NafasCepatDangkal" class="custom-checkbox-success" name="NafasCepatDangkal" value="" /> <label for="NafasCepatDangkal">Nafas cepat dan dangkal</label></td>
    <td><input type="checkbox" id="NafasLambat" class="custom-checkbox-success" name="NafasLambat" value="" /> <label for="NafasLambat">Nafas lambat</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="NafasTakTeratur" class="custom-checkbox-success" name="NafasTakTeratur" value="" /> <label for="NafasTakTeratur">Nafas Tak teratur</label></td>
    <td><input type="checkbox" id="NafasMelaluiMulut" class="custom-checkbox-success" name="NafasMelaluiMulut" value="" /> <label for="NafasMelaluiMulut">Nafas melalui mulut</label></td>
    <td><input type="checkbox" id="MukosaOralKering" class="custom-checkbox-success" name="MukosaOralKering" value="" /> <label for="MukosaOralKering">Mukosa oral kering</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="AdaSekret" class="custom-checkbox-success" name="AdaSekret" value="" /> <label for="AdaSekret">Ada sekret</label></td>
    <td><input type="checkbox" id="SpO2KurangNormal" class="custom-checkbox-success" name="SpO2KurangNormal" value="" /> <label for="SpO2KurangNormal">SpO<sub>2</sub> &lt; normal</label></td>
    <td><input type="checkbox" id="tak_1" class="custom-checkbox-success" name="tak_1" value="" /> <label for="tak_1">T.A.K</label></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Kehilangan Tonus otot:</strong></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="Mual" class="custom-checkbox-success" name="Mual" value="" /> <label for="Mual">Mual</label></td>
    <td><input type="checkbox" id="PenurunanPergerakanTubuh" class="custom-checkbox-success" name="PenurunanPergerakanTubuh" value="" /> <label for="PenurunanPergerakanTubuh">Penurunan Pergerakan tubuh</label></td>
    <td><input type="checkbox" id="SulitBerbicara" class="custom-checkbox-success" name="SulitBerbicara" value="" /> <label for="SulitBerbicara">Sulit Berbicara</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="SulitMenelan" class="custom-checkbox-success" name="SulitMenelan" value="" /> <label for="SulitMenelan">Sulit menelan</label></td>
    <td><input type="checkbox" id="DistensiAbdomen" class="custom-checkbox-success" name="DistensiAbdomen" value="" /> <label for="DistensiAbdomen">Distensi Abdomen</label></td>
    <td><input type="checkbox" id="InkontinensiaUrine" class="custom-checkbox-success" name="InkontinensiaUrine" value="" /> <label for="InkontinensiaUrine">Inkontinensia Urine</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="InkontinensiaAlvi" class="custom-checkbox-success" name="InkontinensiaAlvi" value="" /> <label for="InkontinensiaAlvi">Inkontinensia alvi</label></td>
    <td colspan="2"><input type="checkbox" id="inkontinesnisa_alvi" class="custom-checkbox-success" name="inkontinesnisa_alvi" value="" /> <label for="inkontinesnisa_alvi">T.A.K</label></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Nyeri:</strong></td>
  </tr>
  <tr>
    <td><input type="radio" id="nyeri_tidak" class="custom-checkbox-danger" name="nyeri" value="tidak" /> <label for="nyeri_tidak">Tidak</label></td>
    <td><input type="radio" id="nyeri_ya" class="custom-checkbox-success" name="nyeri" value="ya" /> <label for="nyeri_ya">Ya</label></td>
    <td colspan="2"><input type="text" id="nyeri_keterangan" name="nyeri_keterangan" class="form-control border-dark" /></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Perlambatan Sirkulasi:</strong></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="BercakSianosisEkstremitas" class="custom-checkbox-success" name="BercakSianosisEkstremitas" value="" /> <label for="BercakSianosisEkstremitas">Bercak dan sianosis pada ekstremitas</label></td>
    <td colspan="2"><input type="checkbox" id="KulitDinginBerkeringat" class="custom-checkbox-success" name="KulitDinginBerkeringat" value="" /> <label for="KulitDinginBerkeringat">Kulit dingin dan berkeringat</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="Gelisah" class="custom-checkbox-success" name="Gelisah" value="" /> <label for="Gelisah">Gelisah</label></td>
    <td colspan="2"><input type="checkbox" id="TekananDarahMenurun" class="custom-checkbox-success" name="TekananDarahMenurun" value="" /> <label for="TekananDarahMenurun">Tekanan Darah menurun</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="LemasNadiLambatLemah" class="custom-checkbox-success" name="LemasNadiLambatLemah" value="" /> <label for="LemasNadiLambatLemah">Lemas Nadi lambat dan lemah</label></td>
    <td colspan="2"><input type="checkbox" id="lemas_nadi" class="custom-checkbox-success" name="lemas_nadi" value="" /> <label for="lemas_nadi">T. A. K</label></td>
  </tr>
  <tr>
    <td colspan="4"><strong>2. Faktor-faktor yang meningkatkan dan membangkitkan gejala fisik:</strong></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="AktivitasFisik" class="custom-checkbox-success" name="AktivitasFisik" value="" /> <label for="AktivitasFisik">Melakukan aktivitas fisik</label></td>
    <td><input type="checkbox" id="PindahPosisi" class="custom-checkbox-success" name="PindahPosisi" value="" /> <label for="PindahPosisi">Pindah posisi</label></td>
    <td colspan="2"><input type="text" id="faktor_yang_meningkatkan_gejala" name="faktor_yang_meningkatkan_gejala" class="form-control border-dark" /></td>
  </tr>
  <tr>
    <td colspan="4"><strong>3. Manajemen gejala saat ini dan respon pasien:</strong></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Masalah keperawatan *</strong></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="Mual" class="custom-checkbox-success" name="Mual" value="" /> <label for="Mual">Mual</label></td>
    <td><input type="checkbox" id="PolaNafasTidakEfektif" class="custom-checkbox-success" name="PolaNafasTidakEfektif" value="" /> <label for="PolaNafasTidakEfektif">Pola Nafas tidak efektif</label></td>
    <td><input type="checkbox" id="NyeriKronis" class="custom-checkbox-success" name="NyeriKronis" value="" /> <label for="NyeriKronis">Nyeri Kronis</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="PerubahanPersepsiSensori" class="custom-checkbox-success" name="PerubahanPersepsiSensori" value="" /> <label for="PerubahanPersepsiSensori">Perubahan persepsi sensori</label></td>
    <td><input type="checkbox" id="Konstipasi" class="custom-checkbox-success" name="Konstipasi" value="" /> <label for="Konstipasi">Konstipasi</label></td>
    <td><input type="checkbox" id="DefisitPerawatanDiri" class="custom-checkbox-success" name="DefisitPerawatanDiri" value="" /> <label for="DefisitPerawatanDiri">Defisit perawatan diri</label></td>
  </tr>
  <tr>
    <td><input type="checkbox" id="NyeriAkut" class="custom-checkbox-success" name="NyeriAkut" value="" /> <label for="NyeriAkut">Nyeri akut</label></td>
    <td colspan="2"><input type="checkbox" id="BersihanJalanNafasTidakEfektif" class="custom-checkbox-success" name="BersihanJalanNafasTidakEfektif" value="" /> <label for="BersihanJalanNafasTidakEfektif">Bersihan jalan nafas tidak efektif</label></td>
  </tr>
  <tr>
    <td colspan="4"><strong>4. Orientasi spiritual pasien dan keluarga:</strong></td>
  </tr>
  <tr>
    <td colspan="4">
      <p> Apakah perlu pelayanan spiritual ?
      </p>
      <div>
        <input type="radio" id="TidakPelayananSpiritual" class="custom-checkbox-danger" name="PelayananSpiritual" value="TidakPelayananSpiritua" /> <label for="TidakPelayananSpiritual">Tidak</label>
        <input type="radio" id="YaPelayananSpiritual" class="custom-checkbox-success" name="PelayananSpiritual" value="YaPelayananSpiritual" /> <label for="YaPelayananSpiritual">Ya, oleh:</label>
        <input type="text" id="pelayanan_spiritual" name="pelayanan_spiritual" class="form-control border-dark" />
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4"><strong>5. Kebutuhan spiritual pasien dan keluarga seperti putus asa, penderitaan, rasa bersalah atau pengampunan:</strong></td>
  </tr>
  <tr>
    <td colspan="4">
      Perlu didoakan :
      <input type="radio" id="TidakPerluDidoakan" class="custom-checkbox-danger" name="PerluDidoakan" value="TidakPerluDidoakan" /> <label for="TidakPerluDidoakan">Tidak</label>
      <input type="radio" id="YaPerluDidoakan" class="custom-checkbox-success" name="PerluDidoakan" value="YaPerluDidoakan" /> <label for="YaPerluDidoakan">Ya</label>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      Perlu bimbingan rohani :
      <input type="radio" id="TidakPerluBimbinganRohani" class="custom-checkbox-danger" name="PerluBimbinganRohani" value="TidakPerluBimbinganRohani" /> <label for="TidakPerluBimbinganRohani">Tidak</label>
      <input type="radio" id="YaPerluBimbinganRohani" class="custom-checkbox-success" name="PerluBimbinganRohani" value=" YaPerluBimbinganRohani" /> <label for="YaPerluBimbinganRohani">Ya</label>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      Perlu pendampingan rohani :
      <input type="radio" id="TidakPerluPendampinganRohani" class="custom-checkbox-danger" name="PerluPendampinganRohani" value="TidakPerluPendampinganRohani" /> <label for="TidakPerluPendampinganRohani">Tidak</label>
      <input type="radio" id="YaPerluPendampinganRohani" class="custom-checkbox-success" name="PerluPendampinganRohani" value="PerluPendampinganRohani" /> <label for="YaPerluPendampinganRohani">Ya</label>
    </td>
  </tr>
  <tr>
    <td colspan="4"><strong>6. Status psikososial dan keluarga:</strong></td>
  </tr>
  <tr>
    <td colspan="4">
      <p class="font-bold custom-ol">6.1 Apakah ada orang yang ingin dihubungi saat ini?</p>
      <div class="custom-tr">
        <input type="radio" id="TidakAdaYangDihubungi" class="custom-checkbox-danger" name="AdaYangDihubungi" value="TidakAdaYangDihubungi" /> <label for="TidakAdaYangDihubungi">Tidak</label>
        <input type="radio" id="AdaYangDihubungi" class="custom-checkbox-success" name="AdaYangDihubungi" value="yaAdaYangDihubungi" /> <label for="AdaYangDihubungi">Ya, siapa</label>
        <input type="text" id="siapaYangDihubungi" name="siapaYangDihubungi" class="form-control border-dark" />
      </div>
    </td>
  </tr>
  <tr class="custom-tr">
    <td colspan="4">
      <div class="custom-tr">
        Hubungan dengan pasien sebagai :
        <input type="text" id="hubunganDenganPasien" name="hubunganDenganPasien" class="form-control border-dark" />
      </div>
    </td>
  </tr>
  <tr class="custom-tr">
    <td colspan="4">
      <div class="custom-tr">
        Dimana : <input type="text" id="dimanaYangDihubungi" name="dimanaYangDihubungi" class="form-control border-dark" />
      </div>
    </td>
  </tr>
  <tr class="custom-tr">
    <td colspan="4">
      <div class="custom-tr">
        No. Telpon/HP : <input type="text" id="noTelponHPYangDihubungi" name="noTelponHPYangDihubungi" class="form-control border-dark" />
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <p class="custom-ol"> <strong>6.2. Bagaimana rencana perawatan selanjutnya?</strong></p>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div class="custom-tr">
        <input type="radio" id="TetapDirawatDiRS" class="custom-checkbox-success" name="DirawatDiRS" value="TetapDirawatDiRS" /> <label for="TetapDirawatDiRS">Tetap dirawat di RS</label>
        <input type="radio" id="DirawatDiRumah" class="custom-checkbox-success" name="DirawatDiRS" value="DirawatDiRumah" /> <label for="DirawatDiRumah">Dirawat di rumah</label>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div class="custom-tr">
        Apakah lingkungan rumah sudah disiapkan ?
        <input type="radio" id="YaLingkunganRumahDisiapkan" class="custom-checkbox-success" name="LingkunganRumahDisiapkan" value="YaLingkunganRumahDisiapkan" /> <label for="YaLingkunganRumahDisiapkan" class="me-2">Ya</label>
        <input type="radio" id="TidakLingkunganRumahDisiapkan" class="custom-checkbox-danger" name="LingkunganRumahDisiapkan" value="TidakLingkunganRumahDisiapkan" /> <label for="TidakLingkunganRumahDisiapkan">Tidak</label>
      </div>
    </td>
  </tr>


  <tr>
    <td colspan=" 4">
      <div class="custom-tr">
        Jika Ya, apakah ada yang mampu merawat pasien di rumah ?
        <input type="radio" class="custom-checkbox-success" name="MampuMerawat" value="YaMampuMerawat" id="YaMampuMerawat" />
        <label for="YaMampuMerawat" class="me-2">Ya, oleh :</label>
        <input type="radio" class="custom-checkbox-danger" name="MampuMerawat" value="TidakMampuMerawat" id="TidakMampuMerawat" />
        <label for="TidakMampuMerawat">Tidak</label>
        <input type="text" name="caregiver_name" class="form-control border-dark w-75" />

      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div class="custom-tr">
        Jika tidak, apakah perlu difasilitasi RS (Home Care)?
        <input type="radio" class="custom-checkbox-success" name="PerluHomeCare" value="YaPerluHomeCare" id="YaPerluHomeCare" /> <label for="YaPerluHomeCare">Ya</label>
        <input type="radio" class="custom-checkbox-danger" name="PerluHomeCare" value="TidakPerluHomeCare" id="TidakPerluHomeCare" /> <label for="TidakPerluHomeCare">Tidak</label>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <p class="custom-ol"> <strong>6.3. Reaksi pasien atas penyakitnya</strong></p>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div class="custom-tr">
        <strong>Asesmen informasi</strong>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div class="d-flex flex-wrap custom-tr" style="gap: 15px;">
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" class="custom-checkbox-success" name="Menyangkal" value="" /> <label class="form-check-label" for="Menyangkal">Menyangkal</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" class="custom-checkbox-success" name="SedihMenangis" value="" /> <label class="form-check-label" for="SedihMenangis">Sedih / menangis</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" class="custom-checkbox-success" name="Marah" value="" /> <label class="form-check-label" for="Marah">Marah</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" class="custom-checkbox-success" name="RasaBersalah" value="" /> <label class="form-check-label" for="RasaBersalah">Rasa bersalah</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" class="custom-checkbox-success" name="Takut" value="" /> <label class="form-check-label" for="Takut">Takut</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" class="custom-checkbox-success" name="KetidakBerdayaan" value="" /> <label class="form-check-label" for="KetidakBerdayaan">Ketidak berdayaan</label></div>

      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div class="custom-tr">
        <strong>Masalah Keperawatan</strong>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <div class="d-flex gap-2 form-check align-items-center">
        <div class="col-1"></div>
        <div class="col-2"><input type="checkbox" class="custom-checkbox-success" name="Anxietas" value="" /> <label class="form-check-label" for="Anxietas">Anxietas</label></div>
        <div><input type="checkbox" class="custom-checkbox-success" name="DistressSpiritual" value="" /> <label class="form-check-label" for="DistressSpiritual">Distress Spiritual</label></div>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <p class="custom-ol"><strong>6.4. Reaksi keluarga atas penyakit pasien:</strong></p>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <p class="custom-tr"><strong>Asesmen informasi</strong></p>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div class="d-flex flex-wrap custom-tr" style="gap: 15px;">
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_marah" class="custom-checkbox-success" id="informasi_marah"><label class="form-check-label" for="informasi_marah">Marah</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_lelah" class="custom-checkbox-success" id="informasi_lelah"><label class="form-check-label" for="informasi_lelah">Letih/lelah</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_gangguan_tidur" class="custom-checkbox-success" id="informasi_gangguan_tidur"><label class="form-check-label" for="informasi_gangguan_tidur">Gangguan tidur</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_rasa_bersalah" class="custom-checkbox-success" id="informasi_rasa_bersalah"><label class="form-check-label" for="informasi_rasa_bersalah">Rasa bersalah</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_penurunan_konsentrasi" class="custom-checkbox-success" id="informasi_penurunan_konsentrasi"><label class="form-check-label" for="informasi_penurunan_konsentrasi">Penurunan Konsentrasi</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_perubahan_kebiasaan" class="custom-checkbox-success" id="informasi_perubahan_kebiasaan"><label class="form-check-label" for="informasi_perubahan_kebiasaan">Perubahan kebiasaan pola komunikasi</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_ketidakmampuan" class="custom-checkbox-success" id="informasi_ketidakmampuan"><label class="form-check-label" for="informasi_ketidakmampuan">Ketidakmampuan memenuhi peran yang diharapkan</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_keluarga_kurang_berpartisipasi" class="custom-checkbox-success" id="informasi_keluarga_kurang_berpartisipasi"><label class="form-check-label" for="informasi_keluarga_kurang_berpartisipasi">Keluarga kurang berpartisipasi dalam perawatan</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="informasi_keluarga_kurang_berkomunikasi" class="custom-checkbox-success" id="informasi_keluarga_kurang_berkomunikasi"><label class="form-check-label" for="informasi_keluarga_kurang_berkomunikasi">Keluarga kurang berkomunikasi dengan pasien</label></div>
      </div>
      <div class="d-flex mt-4 form-check gap-3"><strong>Masalah keperawatan * </strong>

        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="masalah_keperawatan_koping_individu_tidak_efektif" class="custom-checkbox-success" id="masalah_keperawatan_koping_individu_tidak_efektif"><label class="form-check-label" for="masalah_keperawatan_koping_individu_tidak_efektif">Koping individu tidak efektif</label></div>
        <div class="d-flex" style="gap: 15px;"><input type="checkbox" name="masalah_keperawatan_distress_spiritual" class="custom-checkbox-success" id="masalah_keperawatan_distress_spiritual"><label class="form-check-label" for="masalah_keperawatan_distress_spiritual">Distress Spiritual</label></div>
      </div>
      </div>
      <ol start="7" class="mt-4">
        <li>
          <strong>Kebutuhan dukungan atau kelonggaran pelayanan bagi pasien, keluarga dan
            pemberi pelayanan lain :
          </strong>
        </li>
      </ol>
      <p><input type="checkbox" name="pasien_didampingi_keluarga" class="custom-checkbox-success" id="pasien_didampingi_keluarga"><label class="form-check-label" for="pasien_didampingi_keluarga">Pasien perlu didampingin keluarga</label></p>
      <p><input type="checkbox" name="keluarga_bisa_berkunjung_di_luar_waktu_berkunjung" class="custom-checkbox-success" id="keluarga_bisa_berkunjung_di_luar_waktu_berkunjung"><label class="form-check-label" for="keluarga_bisa_berkunjung_di_luar_waktu_berkunjung">Keluarga dapat mengunjungi pasien di luar waktu berkunjung</label></p>
      <p><input type="checkbox" name="sahabat_bisa_berkunjung_di_luar_waktu_berkunjung" class="custom-checkbox-success" id="sahabat_bisa_berkunjung_di_luar_waktu_berkunjung"><label class="form-check-label" for="sahabat_bisa_berkunjung_di_luar_waktu_berkunjung">Sahabat dapat mengunjungi pasien di luar waktu berkunjung</label></p>
      <p>
        <input type="text" name="alternatif_tingkat_pelayanan_lain" class="form-control border-dark" id="alternatif_tingkat_pelayanan_lain" placeholder="..................................................................................................">
      </p>
      <ol start="8">
        <li>
          <strong>Apakah ada kebutuhan akan alternatif atau timgkat pelayanan lain :
          </strong>
        </li>
      </ol>
      <p><input type="radio" name="tingkat_pelayanan_lain" class="custom-checkbox-danger" id="tingkat_pelayanan_lain"><label class="form-check-label" for="tidak_butuh_tingkat_pelayanan_lain">Tidak</label></p>
      <p><input type="radio" name="tingkat_pelayanan_lain" class="custom-checkbox-success" id="tingkat_pelayanan_lain"><label class="form-check-label" for="autopsi">Autopsi</label></p>
      <p>
        Donasi Organ :
        <input type="text" name="donasi_organ" class="form-control border-dark" id="donasi_organ" placeholder="">
      </p>
      <ol start="9">
        <li><strong>Faktor resiko bagi keluarga yang ditinggalkan : </strong></li>
      </ol>
      <p><strong>Asesmen informasi </strong></p>
      <div class="d-flex flex-wrap" style="gap: 15px;">
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="marah" class="custom-checkbox-success" id="marah"><label class="form-check-label" for="marah">Marah</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="lelah" class="custom-checkbox-success" id="lelah"><label class="form-check-label" for="lelah">Letih/lelah</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="depresi" class="custom-checkbox-success" id="depresi"><label class="form-check-label" for="depresi">Depresi</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="gangguan_tidur" class="custom-checkbox-success" id="gangguan_tidur"><label class="form-check-label" for="gangguan_tidur">Gangguan tidur</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="rasa_bersalah" class="custom-checkbox-success" id="rasa_bersalah"><label class="form-check-label" for="rasa_bersalah">Rasa bersalah</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="sedih_menangis" class="custom-checkbox-success" id="sedih_menangis"><label class="form-check-label" for="sedih_menangis">Sedih/menangis</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="perubahan_kebiasaan_pola_komunikasi" class="custom-checkbox-success" id="perubahan_kebiasaan_pola_komunikasi"><label class="form-check-label" for="perubahan_kebiasaan_pola_komunikasi">Perubahan kebiasaan pola komunikasi</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="penurunan_konsentrasi" class="custom-checkbox-success" id="penurunan_konsentrasi"><label class="form-check-label" for="penurunan_konsentrasi">Penurunan konsentrasi</label></div>
        <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="ketidakmampuan_memenuhi_peran_yang_diharapkan" class="custom-checkbox-success" id="ketidakmampuan_memenuhi_peran_yang_diharapkan"><label class="form-check-label" for="ketidakmampuan_memenuhi_peran_yang_diharapkan">Ketidakmampuan memenuhi peran yang diharapkan</label></div>
      </div>

      <div class="mt-3">
        <p><strong>Masalah keperawatan * </strong></p>
        <div class="d-flex" style="gap: 15px;">
          <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="masalah_keperawatan_koping_individu_tidak_efektif_2" class="custom-checkbox-success" id="masalah_keperawatan_koping_individu_tidak_efektif_2"><label class="form-check-label" for="masalah_keperawatan_koping_individu_tidak_efektif_2">Koping individu tidak efektif</label></div>
          <div class="d-flex" style="gap: 10px;"><input type="checkbox" name="masalah_keperawatan_distress_spiritual_2" class="custom-checkbox-success" id="masalah_keperawatan_distress_spiritual_2"><label class="form-check-label" for="masalah_keperawatan_distress_spiritual_2">Distress Spiritual</label></div>
        </div>
      </div>

      <div class="d-flex justify-content-end gap-2 align-items-center">
        <label class="flex-shrink-0"><?= $city_sign; ?>, </label>
        <input type="date" name="tanggal" class="form-control border-dark  d-inline-block w-25" id="tanggal" value="<?= date('Y-m-d') ?>" />
      </div>
      <p></p>


      <div class="text-end">
        <label>Perawat yang mengkaji</label>
      </div>
      <div class="d-flex flex-column align-items-end gap-2">
        <div class="my-2 text-end">
          <img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_list_perawat" />
        </div>
        <select type="select" name="list_perawat" id="list_perawat" class="form-select perawat" style="width: 50%;"></select>
      </div>
    </td>
  </tr>
</table>



<script>
  let dataDokter = [];
  let dataListPerawat = [];
  let page = 1;
  const mode = "<?= $mode; ?>";

  $(document).delay(1000).queue(function() {
    callMarkerManager();
  });

  $(document).ready(function() {
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
    ];

    // Inisialisasi select2 umum (selain dokter_umum)
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

            if (selector === '.perawat') {
              dataListPerawat = items;
            }

            const defaultOption = [{
              id: '',
              text: '--pilih--'
            }];
            return {
              results: defaultOption.concat(items),
              pagination: {
                more
              },
            };
          },
          cache: true,
        },
        placeholder: '--pilih--',
        allowClear: true,
      });

      $(selector).val(null).trigger('change');

      $(selector).on('select2:open', function() {
        $('.select2-results__options').off('scroll').on('scroll', function() {
          const $this = $(this);
          if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
            page++;
          }
        });
      });

      const style = document.createElement("style");
      style.innerHTML = `
  .custom-ol {
    margin-left: 20px;
  }
  .custom-tr {
    padding-left: 50px;
  }
`;
    });

    // Inisialisasi .dokter dan #dokter_umum
    initSelect2Dokter('.dokter');
    initSelect2Dokter('#dokter_umum', function(e) {
      const {
        id_original
      } = e.params.data;
      QRSignatureAPI(id_original, 'qr_dokter_umum');
    });

    $('#list_perawat').on('select2:select', function(e) {
      const {
        id_original
      } = e.params.data;
      QRSignatureAPI(id_original, 'qr_list_perawat')
    });

    $('#list_perawat_pengkaji').on('select2:select', function(e) {
      const {
        id_original
      } = e.params.data;
      QRSignatureAPI(id_original, 'qr_list_perawat_pengkaji')
    });
  });

  function initSelect2Dokter(selector, onSelectCallback = null) {
    $(selector).select2({
      ajax: {
        url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
          dataDokter = items;

          const results = (selector === '#dokter_umum') ?
            items : [{
              id: '',
              text: '--pilih--'
            }].concat(items);

          return {
            results,
            pagination: {
              more
            },
          };
        },
        cache: true,
      },
      placeholder: (selector === '#dokter_umum') ? 'Search for items...' : '--pilih--',
      allowClear: true,
    });

    $(selector).val(null).trigger('change');

    $(selector).on('select2:open', function() {
      $('.select2-results__options').off('scroll').on('scroll', function() {
        const $this = $(this);
        if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
          page++;
        }
      });
    });

    if (onSelectCallback) {
      $(selector).on('select2:select', onSelectCallback);
    }
  }

  function cbCommon(data) {
    populateFormFields(data);

    $('#dokter_umum').prop('disabled', false).select2('open').select2('close');
    if (mode === "lihat") {
      $('#dokter_umum').prop('disabled', true);
    }
    setTimeout(() => {
      console.log(dataDokter);
      const selectedText = $('#dokter_umum').select2('data')[0]?.text;
      dataDokter?.forEach(v => {
        if (v.text === selectedText) {
          QRSignatureAPI(v.id_original, 'qr_dokter_umum');
        }
      });
    }, 1000);


    $('#list_perawat').prop('disabled', false)
    $('#list_perawat').select2('open')
    $('#list_perawat').select2('close')
    if (mode === "lihat")
      $('#list_perawat').prop('disabled', true)

    setTimeout(() => {
      dataListPerawat?.map(v => {
        if (v.text === $('#list_perawat').select2('data')[0].text) {
          QRSignatureAPI(v.id_original, 'qr_list_perawat')
        }
      })
    }, 1000)

    $('#list_perawat_pengkaji').prop('disabled', false)
    $('#list_perawat_pengkaji').select2('open')
    $('#list_perawat_pengkaji').select2('close')
    if (mode === "lihat")
      $('#list_perawat_pengkaji').prop('disabled', true)

    setTimeout(() => {
      dataListPerawat?.map(v => {
        if (v.text === $('#list_perawat_pengkaji').select2('data')[0].text) {
          QRSignatureAPI(v.id_original, 'qr_list_perawat_pengkaji')
        }
      })
    }, 1000)

  }
</script>