<div class="row overflow-auto">
  <div class="col-12">
    <input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
    <table class="table table-bordered table-pengkajian border-dark" id="table-pengkajian">
      <tr>
        <td colspan="5">
          <p class="text-center">
            <strong>PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN ANAK</strong>
          </p>
        </td>
        <td colspan="3">
          <p>Nama : <input type="text" class="form-control border-dark" name="nama_pasien"></p>
          <p>Jenis kelamin : <input type="text" class="form-control border-dark" name="jenkel"></p>
          <p>Tanggal lahir : <input type="text" class="form-control border-dark" name="tanggal_lahir"></p>
          <p>N I K : <input type="text" class="form-control border-dark" name="nik"></p>
        </td>
        <td colspan="6">
          <p>Ruang : <input type="text" class="form-control border-dark" name="nama_ruangan"></p>
          <p>Kelas : <input type="text" class="form-control border-dark" name="kelas"></p>
        </td>
      </tr>

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
	  <tr>
				<td colspan="10" class="text-center">
                    <h5 class="text-center my-2">✓</h5>
                </td>
	  </tr>
      <tr>
        <td colspan="6">
          <p>Resiko rendah (7-11) dan resiko tinggi (≥12) (Lingkari)</p>
        </td>
        <td>
          <input type="text" name="ket_rr_1[]" id="" class="form-control border-dark" placeholder="RR/RS/RT">
        </td>
        <td>
          <input type="text" name="ket_rr_2[]" id="" class="form-control border-dark" placeholder="RR/RS/RT">
        </td>
        <td colspan="2">
          <input type="text" name="ket_rr_3[]" id="" class="form-control border-dark" placeholder="RR/RS/RT">
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

    <button type="button" class="btn btn-primary mb-5" onclick="copyTable('table-pengkajian')">Add</button>
    <button type="button" class="btn btn-danger mb-5" onclick="deleteTable('table-pengkajian')">Delete</button>


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

  function copyTable(tableId) {
    let table = document.getElementById(tableId);
    let newTable = table.cloneNode(true);

    let countInput = document.querySelector("input[name='" + tableId + "-count']");
    let count = +(countInput.value ?? "1") + 1;
    countInput.value = count;

    newTable.id = tableId + "-copy-" + count;

    // Clear values in the new table row
    let newInputs = newTable.querySelectorAll("input");
    newInputs.forEach(input => {
      input.value = ''; // Reset input values for the new row
    });

    // Add the new table after the last table in the container
    let parentContainer = table.parentNode;
    parentContainer.appendChild(newTable); // Append directly to the parent container
  }




  function deleteTable(tableId) {
    let countInput = document.getElementById(tableId + "-count");
    if (countInput) {
      let count = +(countInput.value);
      if (count > 1) {
        // Decrement count
        count--;
        countInput.value = count;

        // Find the last cloned table and remove it
        let lastTable = document.getElementById(tableId + "-copy-" + count);
        if (lastTable) {
          lastTable.remove();
        }
      }
    }
  }
</script>