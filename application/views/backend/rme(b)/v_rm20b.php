<div class="row overflow-auto">
  <div class="col-12">
    <table class="table table-bordered table-responsive border-dark">
      <tr>
        <td colspan="4">
          <p>
            <strong>PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN ANAK</strong>
          </p>
          <p><strong>(HUMPTY DUMPTY)</strong></p>
        </td>
        <td colspan="5">
          <p>Nama : <input class="form-control border-dark" type="text" name="nama_pasien" placeholder="Nama" disabled></p>
          <p>Jenis kelamin : <input class="form-control border-dark" type="text" name="jenkel" placeholder="Jenis Kelamin" disabled></p>
          <p>Tanggal lahir : <input class="form-control border-dark" type="date" name="tanggal_lahir" disabled></p>
          <p>N I K : <input class="form-control border-dark" type="text" name="nik" placeholder="NIK"></p>
        </td>
        <td colspan="4">
          <p>No. RM : <input class="form-control border-dark" type="text" name="no_rm" placeholder="No. RM"></p>
          <p>Ruang : <input class="form-control border-dark" type="text" name="no_bad" placeholder="no_bad"></p>
          <p>Kelas : <input class="form-control border-dark" type="text" name="kelas" placeholder="Kelas"></p>
        </td>
      </tr>
    </table>

    <input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
    <table class="table table-bordered table-pengkajian border-dark" id="table-pengkajian">
      <tr>
        <td colspan="13">
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
        <td colspan="4" rowspan="2">
          <p>Kriteria</p>
        </td>
        <td rowspan="2">
          <p>NilaiSkor</p>
        </td>
        <td>
          <p>Tgl/Jam</p>
        </td>
        <td>
          <p>Tgl/Jam</p>
        </td>
        <td colspan="2">
          <p>Tgl/Jam</p>
        </td>
      </tr>
      <tr>
        <td><input class="form-control border-dark" type="datetime-local" name="tgl_jam[]"></td>
        <td><input class="form-control border-dark" type="datetime-local" name="tgl_jam[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="datetime-local" name="tgl_jam[]"></td>
      </tr>
      <tr>
        <td rowspan="4">
          <p>Umur</p>
        </td>
        <td colspan="4">
          <p>&lt; 3 tahun</p>
        </td>
        <td>
          <p>4</p>
        </td>
        <td rowspan="4"><input class="form-control border-dark" type="text" name="umur[]"></td>
        <td rowspan="4"><input class="form-control border-dark" type="text" name="umur[]"></td>
        <td colspan="2" rowspan="4"><input class="form-control border-dark" type="text" name="umur[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <p>3-7 tahun</p>
        </td>
        <td>
          <p>3</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>7-13 tahun</p>
        </td>
        <td>
          <p>2</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>≥ 13 tahun</p>
        </td>
        <td>
          <p>1</p>
        </td>
      </tr>
      <tr>
        <td rowspan="2">
          <p>Jenis kelamin</p>
        </td>
        <td colspan="4">
          <p>Laki-laki</p>
        </td>
        <td>
          <p>2</p>
        </td>
        <td rowspan="2"><input class="form-control border-dark" type="text" name="parameter_jenis_kelamin[]"></td>
        <td rowspan="2"><input class="form-control border-dark" type="text" name="parameter_jenis_kelamin[]"></td>
        <td colspan="2" rowspan="2"><input class="form-control border-dark" type="text" name="parameter_jenis_kelamin[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Perempuan</p>
        </td>
        <td>
          <p>1</p>
        </td>
      </tr>
      <tr>
        <td rowspan="4">
          <p>Diagnosis</p>
        </td>
        <td colspan="4">
          <p>Kelainan neurologi</p>
        </td>
        <td>
          <p>4</p>
        </td>
        <td rowspan="4"><input class="form-control border-dark" type="text" name="diagnosis[]"></td>
        <td rowspan="4"><input class="form-control border-dark" type="text" name="diagnosis[]"></td>
        <td colspan="2" rowspan="4"><input class="form-control border-dark" type="text" name="diagnosis[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <p>
            Perubahan dalam oksigenasi (masalah saluran nafas, dehidrasi , anemia,
            anoreksia, sinkop/sakit kepala, dll)
          </p>
        </td>
        <td>
          <p>3</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Kelainan psikis /perilaku</p>
        </td>
        <td>
          <p>2</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Diagnosis lainnya</p>
        </td>
        <td>
          <p>1</p>
        </td>
      </tr>
      <tr>
        <td rowspan="3">
          <p>Gangguan kognitif</p>
        </td>
        <td colspan="4">
          <p>Tidak sadar terhadap keterbatasan</p>
        </td>
        <td>
          <p>3</p>
        </td>
        <td rowspan="3"><input class="form-control border-dark" type="text" name="kognitif[]"></td>
        <td rowspan="3"><input class="form-control border-dark" type="text" name="kognitif[]"></td>
        <td colspan="2" rowspan="3"><input class="form-control border-dark" type="text" name="kognitif[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Lupa keterbatasan</p>
        </td>
        <td>
          <p>2</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Mengetahui kemampuan diri</p>
        </td>
        <td>
          <p>1</p>
        </td>
      </tr>
      <tr>
        <td rowspan="4">
          <p>Faktor lingkungan</p>
        </td>
        <td colspan="4">
          <p>Riwayat jatuh dari tempat tidur saat bayi-anak</p>
        </td>
        <td>
          <p>4</p>
        </td>
        <td rowspan="4"><input class="form-control border-dark" type="text" name="lingkungan[]"></td>
        <td rowspan="4"><input class="form-control border-dark" type="text" name="lingkungan[]"></td>
        <td colspan="2" rowspan="4"><input class="form-control border-dark" type="text" name="lingkungan[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Pasien menggunakan alat bantu atau box atau mebel</p>
        </td>
        <td>
          <p>3</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Pasien berada di tempat tidur</p>
        </td>
        <td>
          <p>2</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Di luar ruang rawat</p>
        </td>
        <td>
          <p>1</p>
        </td>
      </tr>
      <tr>
        <td rowspan="3">
          <p>Respon terhadap operasi / obat penenang / efekanestesi</p>
        </td>
        <td colspan="4">
          <p>Dalam 24 jam</p>
        </td>
        <td>
          <p>3</p>
        </td>
        <td rowspan="3"><input class="form-control border-dark" type="text" name="respon_obat[]"></td>
        <td rowspan="3"><input class="form-control border-dark" type="text" name="respon_obat[]"></td>
        <td colspan="2" rowspan="3"><input class="form-control border-dark" type="text" name="respon_obat[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Dalam 48 jam</p>
        </td>
        <td>
          <p>2</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>&gt;48 jam atau tidak menjalani pembedahan /sedasi.anestesi</p>
        </td>
        <td>
          <p>1</p>
        </td>
      </tr>
      <tr>
        <td rowspan="3">
          <p>Penggunaan obat</p>
        </td>
        <td colspan="4">
          <p>
            Bermacam-macam obat yang digunakan: obat sedative (kecuali pasien ICU
            yang menggunakan sedasi dan paralisi), hipnotik, barbiturate,
            fenotiazin, anti depresan, laksansia / diuretika, narkotik
          </p>
        </td>
        <td>
          <p>3</p>
        </td>
        <td rowspan="3"><input class="form-control border-dark" type="text" name="penggunaan_obat[]"></td>
        <td rowspan="3"><input class="form-control border-dark" type="text" name="penggunaan_obat[]"></td>
        <td colspan="2" rowspan="3"><input class="form-control border-dark" type="text" name="penggunaan_obat[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Penggunaan salah satu obat di atas</p>
        </td>
        <td>
          <p>2</p>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <p>Pengobatan lain</p>
        </td>
        <td>
          <p>1</p>
        </td>
      </tr>
      <tr>
        <td colspan="6">
          <p>Total skor</p>
        </td>
        <td><input class="form-control border-dark" type="text" name="total_skor[]"></td>
        <td><input class="form-control border-dark" type="text" name="total_skor[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="total_skor[]"></td>
      </tr>
    </table>

    <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-pengkajian')">Add</button>
    <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-pengkajian')">Delete</button>

    <input type="hidden" name="table-resiko-count" id="table-resiko-count" value="1">
    <table class="table table-bordered border-dark" id="table-resiko">
      <tr>
        <td colspan="6">
          <p>Resiko rendah (7-11) dan resiko tinggi (≥12) (Lingkari)</p>
        </td>
        <td>
          <p>RR/RS/RT</p>
        </td>
        <td>
          <p>RR/RS/RT</p>
        </td>
        <td colspan="2">
          <p>RR/RS/RT</p>
        </td>
      </tr>
      <tr>
        <td colspan="6">
          <p>Nama dan Paraf yang melakukan pengkajian</p>
        </td>
        <td><input class="form-control border-dark" type="text" name="nama_paraf[]"></td>
        <td><input class="form-control border-dark" type="text" name="nama_paraf[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="nama_paraf[]"></td>

      </tr>
      <tr>
        <td colspan="3">
          <p>Intervensi pencegahan resiko jatuh (beri tanda ƴ)</p>
        </td>
        <td colspan="3">
          <p>Tanggal/jam</p>
        </td>
        <td><input class="form-control border-dark" type="datetime-local" name="intervensi_tgl_jam[]"></td>
        <td><input class="form-control border-dark" type="datetime-local" name="intervensi_tgl_jam[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="datetime-local" name="intervensi_tgl_jam[]"></td>
      </tr>
      <tr>
        <td colspan="2" rowspan="4">
          <p>Resiko Rendah (RR)</p>
        </td>
        <td colspan="4">
          <ol start="1">
            <li>Pengecekan bel mudah dijangkau</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rr_bel[]"></td>
        <td><input class="form-control border-dark" type="text" name="rr_bel[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rr_bel[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="2">
            <li>Roda tempat tidur pada posisi terkunci</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rr_roda[]"></td>
        <td><input class="form-control border-dark" type="text" name="rr_roda[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rr_roda[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="3">
            <li>Naikkan pagar pengaman tempat tidur</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rr_pagar[]"></td>
        <td><input class="form-control border-dark" type="text" name="rr_pagar[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rr_pagar[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="4">
            <li>Berikan edukasi pasien</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rr_edukasi[]"></td>
        <td><input class="form-control border-dark" type="text" name="rr_edukasi[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rr_edukasi[]"></td>
      </tr>
      <tr>
        <td colspan="2" rowspan="6">
          <p>Resiko Tinggi (RT)</p>
        </td>
        <td colspan="4">
          <ol>
            <li>
              Pasangkan stiker segitiga kuning pada tempat tidur pasien dan
              pasangkan gelang kuning pada tangan yang dominan
            </li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rt_stiker_gelang[]"></td>
        <td><input class="form-control border-dark" type="text" name="rt_stiker_gelang[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rt_stiker_gelang[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="2">
            <li>Lakukan semua intervensi jatuh rendah</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rt_intervensi_rendah[]"></td>
        <td><input class="form-control border-dark" type="text" name="rt_intervensi_rendah[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rt_intervensi_rendah[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="3">
            <li>Berikan edukasi pasien</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rt_edukasi[]"></td>
        <td><input class="form-control border-dark" type="text" name="rt_edukasi[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rt_edukasi[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="4">
            <li>Bantu jalan untuk mobilisasi</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rt_bantu_jalan[]"></td>
        <td><input class="form-control border-dark" type="text" name="rt_bantu_jalan[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rt_bantu_jalan[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="5">
            <li>Handrail mudah dijangkau pasien dan kokoh</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rt_handrail[]"></td>
        <td><input class="form-control border-dark" type="text" name="rt_handrail[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rt_handrail[]"></td>
      </tr>
      <tr>
        <td colspan="4">
          <ol start="6">
            <li>Libatkan keluarga pasien untuk selalu menunggu pasien</li>
          </ol>
        </td>
        <td><input class="form-control border-dark" type="text" name="rt_libatkan_keluarga[]"></td>
        <td><input class="form-control border-dark" type="text" name="rt_libatkan_keluarga[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="rt_libatkan_keluarga[]"></td>
      </tr>
      <tr>
        <td colspan="6">
          <p>Nama dan Paraf yang melakukan intervensi</p>
        </td>
        <td><input class="form-control border-dark" type="text" name="nama_paraf_intervensi[]"></td>
        <td><input class="form-control border-dark" type="text" name="nama_paraf_intervensi[]"></td>
        <td colspan="2"><input class="form-control border-dark" type="text" name="nama_paraf_intervensi[]"></td>
      </tr>
      <tr>
        <td colspan="13">
          <p>Isi Edukasi</p>
          <ol>
            <li>Memberitahu pasien dan keluarga bahwa pasien beresiko jatuh rendah / sedang / tinggi</li>
            <li>Memberitahu pasien agar mengurangi aktifitas (berjalan), bila ingin ke kamar mandi keluarga selalu mendampingi / menggunakan pispot</li>
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