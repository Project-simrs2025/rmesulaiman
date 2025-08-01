<div class="row">
  <div class="col-12">
    <table class="table table-bordered border-dark" style="box-sizing: border-box;">
      <tr>
        <td colspan="3">
          <p>
            <strong>PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN GERIATRI</strong>
          </p>
        </td>
        <td colspan="6">
          <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien" disabled /></p>
          <p>Jenis kelamin : <input type="text" class="form-control border-dark" name="jenkel" disabled /></p>
          <p>Tanggal lahir : <input type="text" class="form-control border-dark" name="tanggal_lahir" disabled /></p>
          <p>NI K : <input type="text" class="form-control border-dark" name="nik" disabled /></p>
        </td>
        <td colspan="8">
          <p>No. RM : <input type="text" class="form-control border-dark" name="no_rm" /></p>
          <p>Ruang : <input type="text" class="form-control border-dark" name="ruang" /></p>
          <p>Kelas : <input type="text" class="form-control border-dark" name="kelas" /></p>
        </td>
      </tr>
    </table>

    <input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
    <table class="table table-bordered table-pengkajian border-dark" id="table-pengkajian">
      <tr>
        <td colspan="17">
          <p>
            Pengkajian resiko jatuh dilakukan saat pasien masuk, ketika terjadi
            perubahan kondisi, ketika pindah kebangsal lain atau setelah kejadian
            jatuh
          </p>
        </td>
      </tr>
      <tr>
        <td rowspan="2">
          <p>Parameter</p>
        </td>
        <td colspan="2" rowspan="2" style="width: 100px;">
          <p>Skrining</p>
        </td>
        <td rowspan="2">
          <p>Nilai Skor</p>
        </td>
        <td colspan="2">
          <p>Tgl/Jam</p>
        </td>
        <td colspan="2">
          <p>Tgl/Jam</p>
        </td>
        <td colspan="3">
          <p>Tgl/Jam</p>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="datetime-local" class="form-control border-dark" name="tgl_jam1[]" /></td>
        <td colspan="2"><input type="datetime-local" class="form-control border-dark" name="tgl_jam2[]" /></td>
        <td colspan="3"><input type="datetime-local" class="form-control border-dark" name="tgl_jam3[]" /></td>
      </tr>
      <tr>
        <td rowspan="2">
          <p>Riwayat jatuh</p>
        </td>
        <td colspan="2">
          <p>Apakah pasien dating kerumah sakit karena jatuh?</p>
        </td>
        <td rowspan="2">
          <p>Ya=6</p>
        </td>
        <td colspan="2" rowspan="2">
          <input type="text" class="form-control border-dark" name="riwayat_jatuh[]" />
        </td>
        <td colspan="2" rowspan="2">
          <input type="text" class="form-control border-dark" name="riwayat_jatuh[]" />
        </td>
        <td colspan="3" rowspan="2">
          <input type="text" class="form-control border-dark" name="riwayat_jatuh[]" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>
            Jika tidak, apakah pasien mengalami jatuh dalam 2 bulan terakhir ini?
          </p>
        </td>
      </tr>
      <tr>
        <td rowspan="3">
          <p>Status mental</p>
        </td>
        <td colspan="2">
          <p>
            Apakah pasien delirium? (tidak dapat membuat keputusan, pola piker tidak
            terorganisir, gangguan daya ingat)
          </p>
        </td>
        <td rowspan="3">
          <p>Ya=14</p>
        </td>
        <td colspan="2" rowspan="3">
          <input type="text" class="form-control border-dark" name="status_mental[]" />
        </td>
        <td colspan="2" rowspan="3">
          <input type="text" class="form-control border-dark" name="status_mental[]" />
        </td>
        <td colspan="3" rowspan="3">
          <input type="text" class="form-control border-dark" name="status_mental[]" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>
            Apakah pasien disorientasi? (salah menyebutkan waktu, tempat, atau
            orang)
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Apakah pasien mengalami agitasi? (ketakutan, gelisah, dancemas)</p>
        </td>
      </tr>
      <tr>
        <td rowspan="3">
          <p>Penglihatan</p>
        </td>
        <td colspan="2">
          <p>Apakah pasien memakai kacamata?</p>
        </td>
        <td rowspan="3">
          <p>Ya=1</p>
        </td>
        <td colspan="2" rowspan="3">
          <input type="text" class="form-control border-dark" name="penglihatan[]" />
        </td>
        <td colspan="2" rowspan="3">
          <input type="text" class="form-control border-dark" name="penglihatan[]" />
        </td>
        <td colspan="3" rowspan="3">
          <input type="text" class="form-control border-dark" name="penglihatan[]" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Apakah pasien mengeluh adanya penglihatan buram?</p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Apakah pasien mempunyai glaukoma, katarak, atau degenerasi makula?</p>
        </td>
      </tr>
      <tr>
        <td>
          <p>Kebiasaan berkemih</p>
        </td>
        <td colspan="2">
          <p>
            Apakah terdapat perubahan perilaku berkemih? (frekuensi, urgensi,
            inkontinensia, nokturia) (skor 0)
          </p>
        </td>
        <td>
          <p>Ya=2<br />Tidak=0</p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="kebiasaan_berkemih[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="kebiasaan_berkemih[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="kebiasaan_berkemih[]" /></td>
      </tr>
      <tr>
        <td rowspan="4">
          <p>Transfer (dari tempat tidur kekursi dan kembali ketempat tidur)</p>
        </td>
        <td colspan="2">
          <p>mandiri (boleh menggunakan alat bantu jalan) (skor1)</p>
        </td>
        <td rowspan="8">
          <p>Skor transfer + mobilitas<br />0-3 = skor 0<br />4-6 = skor 7</p>
        </td>
        <td colspan="2" rowspan="4"><input type="text" class="form-control border-dark" name="transfer[]" /></td>
        <td colspan="2" rowspan="4"><input type="text" class="form-control border-dark" name="transfer[]" /></td>
        <td colspan="3" rowspan="4"><input type="text" class="form-control border-dark" name="transfer[]" /></td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Memerlukan sedikit bantuan (1 orang) / dalam pengawasan (skor2)</p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Memerlukan bantuan yang nyata (2 orang) (skor3)</p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Tidak dapat duduk dengan seimbang, perlu bantuan total (3)</p>
        </td>
      </tr>
      <tr>
        <td rowspan="4">
          <p>Mobilitas</p>
        </td>
        <td colspan="2">
          <p>mandiri (boleh menggunakan alat bantu jalan) (skor0)</p>
        </td>
        <td colspan="2" rowspan="4"><input type="text" class="form-control border-dark" name="mobilitas[]" /></td>
        <td colspan="2" rowspan="4"><input type="text" class="form-control border-dark" name="mobilitas[]" /></td>
        <td colspan="3" rowspan="4"><input type="text" class="form-control border-dark" name="mobilitas[]" /></td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Berjalan dengan bantuan 1 orang (verbal /fisik) (skor1)</p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Menggunakan kursi roda (skor2)</p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Imobilisasi (skor3)</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Total skor</p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="total_skor[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="total_skor[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="total_skor[]" /></td>
      </tr>
    </table>

    <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-pengkajian')">Add</button>
    <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-pengkajian')">Delete</button>

    <input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
    <table class="table table-bordered border-dark" id="table-resiko">
      <tr>
        <td colspan="4">
          <p>
            Resiko rendah (0-5), resiko sedang (6-16), resiko tinggi (17-30)
            (Lingkari)
          </p>
        </td>
        <td colspan="2">RR/RS/RT</td>
        <td colspan="2">RR/RS/RT</td>
        <td colspan="3">RR/RS/RT</td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Nama dan Paraf yang melakukan pengkajian</p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="pengkaji[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="pengkaji[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="pengkaji[]" /></td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Intervensi pencegahan resiko jatuh (beri tanda ƴ)</p>
        </td>
        <td colspan="2">
          <p>Tanggal/Jam</p>
        </td>
        <td colspan="2"><input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam1[]" /></td>
        <td colspan="2"><input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam2[]" /></td>
        <td colspan="3"><input type="datetime-local" class="form-control border-dark" name="intervensi_tgl_jam3[]" /></td>
      </tr>
      <!-- Resiko Rendah (RR) -->
      <tr>
        <td rowspan="5">
          <p>Resiko rendah (RR)</p>
        </td>
        <td colspan="3">
          <ol start="1">
            <li>Orientasi lingkungan</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rr_orientasi_lingkungan[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="2">
            <li>Pastikan bel mudah dijangkau</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_pastikan_bel[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_pastikan_bel[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rr_pastikan_bel[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="3">
            <li>Roda tempat tidur posisi terkunci</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rr_roda_terkunci[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="4">
            <li>Naikkan pagar pengaman tempat tidur</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_naikkan_pagar[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_naikkan_pagar[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rr_naikkan_pagar[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="5">
            <li>Berikan edukasi kepada pasien</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_edukasi[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rr_edukasi[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rr_edukasi[]" /></td>
      </tr>

      <!-- Resiko Sedang (RS) -->
      <tr>
        <td rowspan="3">
          <p>Resiko sedang (RS)</p>
        </td>
        <td colspan="3">
          <ol start="1">
            <li>Lakukan semua pencegahan jatuh resiko rendah</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rs_pencegahan[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rs_pencegahan[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rs_pencegahan[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="2">
            <li>Pasangkan gelang kuning pada tangan yang dominan</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rs_gelang_kuning[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="3">
            <li>Beri tanda stiker segitiga kuning pada bed pasien</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rs_stiker_kuning[]" /></td>
      </tr>

      <!-- Resiko Tinggi (RT) -->
      <tr>
        <td rowspan="5">
          <p>Resiko tinggi (RT)</p>
        </td>
        <td colspan="3">
          <ol start="1">
            <li>Lakukan pencegahan jatuh resiko rendah dan sedang</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_pencegahan[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_pencegahan[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rt_pencegahan[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="2">
            <li>Kunjungi &amp; Monitor pasien setiap1 jam</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_monitor[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_monitor[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rt_monitor[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="3">
            <li>Penggunaan kateter / pispot / toilet duduk</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_kateter[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_kateter[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rt_kateter[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="4">
            <li>Pastikan pasien menggunakan alat bantu jalan</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_alat_bantu[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_alat_bantu[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rt_alat_bantu[]" /></td>
      </tr>
      <tr>
        <td colspan="3">
          <ol start="5">
            <li>Libatkan keluarga untuk mengawasi pasien</li>
          </ol>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_keluarga[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="rt_keluarga[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="rt_keluarga[]" /></td>
      </tr>

      <!-- Nama dan Paraf yang melakukan pengkajian -->
      <tr>
        <td colspan="4">
          <p>Nama dan Paraf yang melakukan pengkajian</p>
        </td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="pengkaji[]" /></td>
        <td colspan="2"><input type="text" class="form-control border-dark" name="pengkaji[]" /></td>
        <td colspan="3"><input type="text" class="form-control border-dark" name="pengkaji[]" /></td>
      </tr>
      <!-- Edukasi -->
      <tr>
        <td colspan="17">
          <p>Isi edukasi:</p>
          <ol>
            <li>
              Memberitahu pasien dan keluarga bahwa pasien beresiko jatuh rendah /
              sedang / tinggi
            </li>
            <li>
              Memberitahu pasien agar mengurangi aktifitas (berjalan), bila ingin
              kekamar mandi keluarga selalu mendampingi / menggunakan pispot
            </li>
            <li>Jika pasien membutuhkan bantuan, segera hubungi petugas</li>
          </ol>
        </td>
      </tr>
    </table>

    <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-resiko')">Add</button>
    <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-resiko')">Delete</button>

  </div>
</div>




<script>
  function cbCommon(data) {

    // on init generate table based on table-{name}-count
    let resikoCountInput = document.getElementById("table-resiko-count");
    if (resikoCountInput) {
      let count = +(resikoCountInput.value ?? "0");
      if (count > 0) {
        for (let i = 1; i < count; i++) {
          let tableId = 'table-resiko';
          let table = document.getElementById(tableId);
          let newTable = table.cloneNode(true);

          newTable.id = tableId + "-copy-" + `${i + 1}`;

          table.parentNode.insertBefore(newTable, table.nextSibling);
        }
      }
    }

    let pengkajianCountInput = document.getElementById("table-pengkajian-count");
    if (pengkajianCountInput) {
      let count = +(pengkajianCountInput.value ?? "0");
      if (count > 0) {
        for (let i = 1; i < count; i++) {

          let tableId = 'table-pengkajian';
          let table = document.getElementById(tableId);
          let newTable = table.cloneNode(true);

          newTable.id = tableId + "-copy-" + `${i + 1}`;

          table.parentNode.insertBefore(newTable, table.nextSibling);
        }
      }
    }


    populateFormFields(data);
    // callMarkerManager();
    // fill image
  }

  // ready
  function copyTable(tableId) {
    let table = document.getElementById(tableId);
    let newTable = table.cloneNode(true);

    let countInput = document.querySelector("input[name='" + tableId + "-count']");
    let count = +(countInput.value ?? "1") + 1;

    countInput.value = count;

    newTable.id = tableId + "-copy-" + count;

    // reset all input in newTable
    let inputs = newTable.querySelectorAll("input");
    inputs.forEach(input => {
      input.value = "";
    })
    table.parentNode.insertBefore(newTable, table.nextSibling);
  }

  function deleteTable(tableId) {
    let countInput = document.getElementById(tableId + "-count");
    if (countInput) {
      let count = +(countInput.value);
      if (count > 0) {
        let lastCopiedTable = document.getElementById(tableId + "-copy-" + count);
        console.log(lastCopiedTable);
        if (lastCopiedTable) {
          lastCopiedTable.remove();
          countInput.value = count - 1;
        }
      }
    }
  }
</script>