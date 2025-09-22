<!DOCTYPE html>
<html lang="id">
<head>
  <script language="JavaScript" type="application/javascript" src="<?php echo base_url('assets2/extensions/apexcarts.js')?>"></script>
  <style>
  /* Pastikan semua input dalam tabel tidak terlalu kecil */
  .table input.form-control {
    min-width: 60px;
    padding: 4px;
    font-size: 12px;
  }

  /* Untuk tabel EKG dan ventilator, buat scroll horizontal di layar kecil */
  @media (max-width: 768px) {
    .table-responsive table {
      font-size: 11px;
    }

    .inputDerajat td {
      padding: 2px;
    }

    .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .table.table-bordered input.form-control {
      min-width: 80px;
    }
  }

  /* Gaya tambahan agar input lebih terlihat dan dapat diklik dengan nyaman */
  .table input.form-control.border-dark {
    height: 32px;
  }

  /* Lebih ramah layar kecil */
  @media (max-width: 576px) {
    .table input.form-control {
      min-width: 70px;
      font-size: 11px;
    }
  }
</style>

</head>

<body class="p-4">

<div id="container-bundlehari"></div>

<div class="my-3">
  <button type="button" class="btn btn-success" onclick="addBundleHari()">Buka Lembar Baru ICU</button>
</div>
<script>
function sanitizeInput(text) {
  if (typeof text !== "string") return text;
  return text
    .replace(/\\n/g, '\n')           // \n menjadi newline asli
    .replace(/\\t/g, '\t')           // \t menjadi tab
    .replace(/\\r/g, '\r')           // \r menjadi carriage return
    .replace(/\\u2013/g, '–')        // en-dash
    .replace(/\\u2014/g, '—')        // em-dash
    .replace(/\\u2022/g, '•')        // bullet
    .replace(/\\u00a0/g, ' ')        // non-breaking space
    .replace(/\\u000d/g, '')         // carriage return (control)
    .replace(/\\"/g, '"')            // escaped double-quote
    .replace(/\\\\/g, '\\');         // escaped backslash
}
function escapeHtml(text) {
  return text
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#039;");
}


</script>
<script>
  let bundleCount = 0;
  const chartInstances = [];
  function updateChartData(index) {
    const chart = chartInstances[index];
    if (!chart) return;

    const container = document.querySelectorAll(".bundleHarian")[index];
    const inputs = {
      TD: Array.from(container.querySelectorAll(`[name="td_${index + 1}[]"]`)).map(input => parseInt(input.value) || 0),
      P:  Array.from(container.querySelectorAll(`[name="p_${index + 1}[]"]`)).map(input => parseInt(input.value) || 0),
      N:  Array.from(container.querySelectorAll(`[name="n_${index + 1}[]"]`)).map(input => parseInt(input.value) || 0),
      T:  Array.from(container.querySelectorAll(`[name="t_${index + 1}[]"]`)).map(input => parseInt(input.value) || 0),
    };

    chart.updateSeries([
      { name: 'TD', data: inputs.TD },
      { name: 'P', data: inputs.P },
      { name: 'N', data: inputs.N },
      { name: 'T', data: inputs.T },
    ]);

  }

  function addBundleHari(bundleData = null) {
    bundleCount++;
    const idChart = `chart-${bundleCount}`;
    const tanggal = bundleData?.tanggal || '';
    const bb = bundleData?.bb || '';
    const status = bundleData?.status || '';
    let statusOptions = ["Belum Kawin", "Kawin", "Cerai Hidup", "Cerai Mati"];
    const diagnosa = bundleData?.diagnosa || '';
    let dokter = bundleData?.dokter || '';


    const therapy_observasi = bundleData?.bab?.therapy_observasi || '';
    const therapy_pagi = bundleData?.bab?.therapy_pagi || '';
    const therapy_sore = bundleData?.bab?.therapy_sore || '';
    const therapy_malam = bundleData?.bab?.therapy_malam || '';
    const oral_observasi = bundleData?.bab?.oral_observasi || '';
    const oral_pagi = bundleData?.bab?.oral_pagi || '';
    const oral_sore = bundleData?.bab?.oral_sore || '';
    const oral_malam = bundleData?.bab?.oral_malam || '';


    const ekg = bundleData?.bab?.ekg || '';
    const saturasi = bundleData?.bab?.saturasi || '';
    const gcs = bundleData?.bab?.gcs || '';
    const pupil = bundleData?.bab?.pupil || '';

    const mode = bundleData?.bab?.mode || '';
    const pcps = bundleData?.bab?.pcps || '';
    const tv = bundleData?.bab?.tv || '';
    const rr = bundleData?.bab?.rr || '';
    const peep = bundleData?.bab?.peep || '';

    const intake1 = bundleData?.bab?.intake1 || '';
    const intake2 = bundleData?.bab?.intake2 || '';
    const intake3 = bundleData?.bab?.intake3 || '';
    const intake4 = bundleData?.bab?.intake4 || '';
    const intake5 = bundleData?.bab?.intake5 || '';
    const urine = bundleData?.bab?.urine || '';
    const lainlain = bundleData?.bab?.lainlain || '';
    const kumulatif = bundleData?.bab?.kumulatif || '';


    const shift = bundleData?.shift || [];

    const html = `
      <div class="card mb-4 bundleHarian border border-dark p-3">
        <h5>Lembaran Observasi ICU ${bundleCount}</h5>
        <div class="row">
          <div class="col-4 col-md-4">
            <label>Tanggal / Hari Perawatan :</label>
          </div>
          <div class="col-4 col-md-4">
            <input type="date" name="tanggal[]" class="form-control border-dark" value="${tanggal}">
          </div>
          <div class="col-4 col-md-4">
            <input type="text" class="form-control border-dark" value="<?php echo $lama; ?>" disabled>
          </div>

          <!-- batas -->

          <div class="col-4 col-md-4">
            <label>Nama Pasien :</label>
          </div>
          <div class="col-8 col-md-8">
            <input type="text" class="form-control border-dark" value="<?php echo $nama_pasien; ?>" disabled>
          </div>

          <!-- batas -->

          <div class="col-4 col-md-4">
            <label>Umur/ BB :</label>
          </div>
          <div class="col-4 col-md-4">
            <input type="text" class="form-control border-dark" value="<?php echo $umur; ?>" disabled>
          </div>
          <div class="col-4 col-md-4">
            <input type="name" name="bb[]" class="form-control border-dark" value="${bb}" placeholder="Kg">
          </div>

          <!-- batas -->

          <div class="col-4 col-md-4">
            <label>No RM :</label>
          </div>
          <div class="col-8 col-md-8">
            <input type="text" class="form-control border-dark" value="<?php echo $no_rm; ?>" disabled>
          </div>

          <!-- batas -->

          <div class="col-4 col-md-4">
            <label>Status :</label>
          </div>
          <div class="col-8 col-md-8">
            <div class="form-group">
              <select class="form-control border-dark" name="status[]">
                <option value="">-- Pilih Status --</option>
                ${statusOptions.map(opt => `
                  <option value="${opt}" ${status === opt ? 'selected' : ''}>${opt}</option>
                `).join('')}
              </select>
            </div>
          </div>

          <!-- batas -->

          <div class="col-4 col-md-4">
            <label>Diagnosa :</label>
          </div>
          <div class="col-8 col-md-8">
            <div class="form-group">
              <select type="select" name="diagnosaa[]" class="form-select diagnosa">
                ${diagnosa ? `<option value="${diagnosa}" selected>${diagnosa}</option>` : ''}
              </select>

            </div>
          </div>

          <!-- batas -->

          <div class="col-4 col-md-4">
            <label>Dokter :</label>
          </div>
          <div class="col-8 col-md-8">
            <div class="form-group">
              <select name="dokter[]" class="form-control dokter" style="width:100%">
                ${dokter ? `<option value="${escapeHtml(dokter)}" selected>${escapeHtml(dokter)}</option>` : ''}
              </select>
            </div>
          </div>

          <!-- batas -->
        </div>

        <div class="mb-3">
          <div id="${idChart}" style="height: 250px;"></div>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered text-center">
            <thead class="table-secondary">
              <tr>
                <th>Jam</th>
                <th>TD</th>
                <th>P</th>
                <th>N</th>
                <th>T</th>
              </tr>
            </thead>
            <tbody>
              ${[...Array(24)].map((_, i) => {
                const hourLabel = `${i.toString().padStart(2, '0')}:00`;
                return `
                  <tr>
                    <td>Jam ${hourLabel}</td>
                    <td><input type="text" class="form-control form-control-sm border-dark" name="td_${bundleCount}[]" value="${shift[i]?.TD || ''}"></td>
                    <td><input type="text" class="form-control form-control-sm border-dark" name="p_${bundleCount}[]" value="${shift[i]?.P || ''}"></td>
                    <td><input type="text" class="form-control form-control-sm border-dark" name="n_${bundleCount}[]" value="${shift[i]?.N || ''}"></td>
                    <td><input type="text" class="form-control form-control-sm border-dark" name="t_${bundleCount}[]" value="${shift[i]?.T || ''}"></td>
                  </tr>
                `;
              }).join('')}
            </tbody>

          </table>
        </div>


        <!-- TABEL BARU -->

        <table class="table table-bordered border-dark">
            <tr class="text-center">
                <td class="col"></td>
                <td class="col-3"><b>DINAS PAGI</b></td>
                <td class="col-3"><b>DINAS SORE</b></td>
                <td class="col-3"><b>DINAS MALAM</b></td>
            </tr>

            <tr>
                <td><b>THERAPY</b></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td><b>INJKTIE</b></td>
                <td colspan="3"></td>
            </tr>

            ${[...Array(8)].map((_, i) => `
              <tr>
                <td><input type="text" class="form-control border-dark" name="therapy_observasi[]" value="${bundleData?.bab?.therapy_observasi?.[i] || ''}"></td>
                <td><input type="text" class="form-control border-dark" name="therapy_pagi[]" value="${bundleData?.bab?.therapy_pagi?.[i] || ''}"></td>
                <td><input type="text" class="form-control border-dark" name="therapy_sore[]" value="${bundleData?.bab?.therapy_sore?.[i] || ''}"></td>
                <td><input type="text" class="form-control border-dark" name="therapy_malam[]" value="${bundleData?.bab?.therapy_malam?.[i] || ''}"></td>
              </tr>
            `).join('')}

            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td><b>Oral</b></td>
                <td colspan="3"></td>
            </tr>

            ${[...Array(8)].map((_, i) => `
              <tr>
                <td><input type="text" class="form-control border-dark" name="oral_observasi[]" value="${bundleData?.bab?.oral_observasi?.[i] || ''}"></td>
                <td><input type="text" class="form-control border-dark" name="oral_pagi[]" value="${bundleData?.bab?.oral_pagi?.[i] || ''}"></td>
                <td><input type="text" class="form-control border-dark" name="oral_sore[]" value="${bundleData?.bab?.oral_sore?.[i] || ''}"></td>
                <td><input type="text" class="form-control border-dark" name="oral_malam[]" value="${bundleData?.bab?.oral_malam?.[i] || ''}"></td>
              </tr>
            `).join('')}
          </table>



        <!-- TABEL BARU -->

        <div class="table-responsive mb-3">
          <table class="table table-bordered border-dark text-center">
            <tbody>
              <tr class="inputDerajat">
                <td colspan="2">Gambaran EKG</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="ekg[]" value="${bundleData?.bab?.ekg?.[j] || ''}"></td>
                `).join('')}

              </tr>
              <tr class="inputDerajat">
                <td colspan="2">Saturasi O₂</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="saturasi[]" value="${bundleData?.bab?.saturasi?.[j] || ''}"></td>
                `).join('')}

              </tr>
              <tr class="inputDerajat">
                <td colspan="2">GCS</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="gcs[]" value="${bundleData?.bab?.gcs?.[j] || ''}"></td>
                `).join('')}
              </tr>
              <tr class="inputDerajat">
                <td colspan="2">Pupil</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="pupil[]" value="${bundleData?.bab?.pupil?.[j] || ''}"></td>
                `).join('')}
              </tr>
            </tbody>
          </table>
        </div>




        <!-- TABEL BARU -->

        <div class="table-responsive mb-3">
          <table class="table table-bordered border-dark text-center">
            <tbody>
              <tr class="inputDerajat">
                <td colspan="2" rowspan="5">
                  <div class="fw-bold mt-5" style="font-weight: bold; font-size: 24px; writing-mode: vertical-lr; text-align: center;">Ventilator</div>
                </td>
                <td colspan="2">Mode</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="mode[]" value="${bundleData?.bab?.mode?.[j] || ''}"></td>
                `).join('')}
              </tr>
              <tr class="inputDerajat">
                <td colspan="2">PC/PS</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="pcps[]" value="${bundleData?.bab?.pcps?.[j] || ''}"></td>
                `).join('')}
              </tr>
              <tr class="inputDerajat">
                <td colspan="2">TV</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="tv[]" value="${bundleData?.bab?.tv?.[j] || ''}"></td>
                `).join('')}
              </tr>
              <tr class="inputDerajat">
                <td colspan="2">RR</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="rr[]" value="${bundleData?.bab?.rr?.[j] || ''}"></td>
                `).join('')}
              </tr>
              <tr class="inputDerajat">
                <td colspan="2">PEEP</td>
                ${[...Array(24)].map((_, j) => `
                  <td><input type="text" class="form-control border-dark" name="peep[]" value="${bundleData?.bab?.peep?.[j] || ''}"></td>
                `).join('')}
              </tr>
            </tbody>
          </table>
        </div>


        <table class="table table-bordered border-dark text-center" style="width: 100%; table-layout: fixed;">
            <tr>
                <td rowspan="9" style="font-weight: bold; font-size: 15px; transform: rotate(-90deg); white-space: nowrap;">
                  BALANCE CAIRAN
                </td>

                <td rowspan="6" style="font-weight: bold; font-size: 15px; transform: rotate(-90deg); white-space: nowrap;">
                    INTAKE
                </td>
            </tr>

            <!-- INTAKE 5 Baris -->
            <tr style="height: 50px;">
                ${[0, 1, 2, 3, 4, 5].map(i => `
                  <td><input type="text" class="form-control border-dark" name="intake1[]" value="${bundleData?.bab?.intake1?.[i] || ''}"></td>
                `).join('')}
            </tr>
            <tr style="height: 50px;">
                ${[0, 1, 2, 3, 4, 5].map(i => `
                  <td><input type="text" class="form-control border-dark" name="intake2[]" value="${bundleData?.bab?.intake2?.[i] || ''}"></td>
                `).join('')}
            </tr>
            <tr style="height: 50px;">
                ${[0, 1, 2, 3, 4, 5].map(i => `
                  <td><input type="text" class="form-control border-dark" name="intake3[]" value="${bundleData?.bab?.intake3?.[i] || ''}"></td>
                `).join('')}
            </tr>
            <tr style="height: 50px;">
                ${[0, 1, 2, 3, 4, 5].map(i => `
                  <td><input type="text" class="form-control border-dark" name="intake4[]" value="${bundleData?.bab?.intake4?.[i] || ''}"></td>
                `).join('')}
            </tr>
            <tr style="height: 50px;">
                ${[0, 1, 2, 3, 4, 5].map(i => `
                  <td><input type="text" class="form-control border-dark" name="intake5[]" value="${bundleData?.bab?.intake5?.[i] || ''}"></td>
                `).join('')}
            </tr>

            <!-- OUTPUT -->
            <tr style="height: 50px;">
                <td rowspan="3" style="font-weight: bold; font-size: 15px; transform: rotate(-90deg); white-space: nowrap;">
                    OUTPUT
                </td>
                <td>Urine</td>
                ${[0, 1, 2, 3, 4].map(i => `
                  <td><input type="text" class="form-control border-dark" name="urine[]" value="${bundleData?.bab?.urine?.[i] || ''}"></td>
                `).join('')}
            </tr>
            <tr style="height: 50px;">
                <td>Lain-lain</td>
                ${[0, 1, 2, 3, 4].map(i => `
                  <td><input type="text" class="form-control border-dark" name="lainlain[]" value="${bundleData?.bab?.lainlain?.[i] || ''}"></td>
                `).join('')}
            </tr>
            <tr style="height: 50px;">
                <td>Kumulatif</td>
                ${[0, 1, 2, 3, 4].map(i => `
                  <td><input type="text" class="form-control border-dark" name="kumulatif[]" value="${bundleData?.bab?.kumulatif?.[i] || ''}"></td>
                `).join('')}
            </tr>
        </table>








      </div>
    `;

    const container = document.getElementById('container-bundlehari');
    container.insertAdjacentHTML('beforeend', html);

    // Chart Data
    const chartData = {
      series: [
        {
          name: 'TD',
          data: shift.map(s => parseInt(s.TD) || 0)
        },
        {
          name: 'P',
          data: shift.map(s => parseInt(s.P) || 0)
        },
        {
          name: 'N',
          data: shift.map(s => parseInt(s.N) || 0)
        },
        {
          name: 'T',
          data: shift.map(s => parseInt(s.T) || 0)
        }
      ],
      chart: {
        type: 'line',
        height: 250
      },
      colors: ['#0d0d0d', '#163bc7', '#ff0b0b', '#28B463'],
      xaxis: {
        categories: [...Array(24)].map((_, i) => `${i.toString().padStart(2, '0')}:00`)
      },
      stroke: {
        width: 2
      },
      markers: {
        size: 4
      },
      legend: {
        position: 'top'
      }
    };


    const chart = new ApexCharts(document.querySelector(`#${idChart}`), chartData);
    chart.render();
    // Event listener input chart
    const inputSelectors = [`td_${bundleCount}`, `p_${bundleCount}`, `n_${bundleCount}`, `t_${bundleCount}`];
    const chartIndex = chartInstances.length; // index chart ke berapa
    inputSelectors.forEach(name => {
      document.querySelectorAll(`[name="${name}[]"]`).forEach(input => {
        input.addEventListener("input", () => updateChartData(chartIndex));
      });
    });


    chartInstances.push(chart);

    // Inisialisasi select2 untuk dropdown diagnosa yang baru ditambahkan
    $(`.diagnosa`).last().select2({
      ajax: {
        url: '<?= site_url('backend/admission/getDiagnosa'); ?>',
        dataType: 'json',
        delay: 250,
        data: function(params) {
          return {
            q: params.term,
            limit: 100,
            offset: 0,
          };
        },
        processResults: function(data) {
          const { items, more } = data.data || { items: [], more: false };
          const defaultOption = [{ id: '', text: '--pilih--' }];
          return {
            results: defaultOption.concat(items),
            pagination: { more: more }
          };
        },
        cache: true
      },
      placeholder: '--pilih--',
      allowClear: true
    });
    const $newDokterSelect = $('.dokter').not('.select2-hidden-accessible').last();

    $newDokterSelect.select2({
      placeholder: '-- Pilih Dokter --',
      allowClear: true,
      ajax: {
        url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
        dataType: 'json',
        delay: 250,
        data: params => ({ q: params.term }),
        processResults: data => ({
          results: data.data.items,
          pagination: { more: data.data.more }
        }),
        cache: true
      }
    });




  }

  // Fungsi callback saat menerima JSON dari backend
  function cbCommon(dataCommon) {
    console.log("cbCommon()", dataCommon);

    const tanggalArr = dataCommon.get("tanggal") || [];
    const bbArr = dataCommon.get("bb") || [];
    const statusArr = dataCommon.get("status") || [];
    const diagnosaArr = dataCommon.get("diagnosaa") || [];
    const dokterArr = dataCommon.get("dokter") || [];

    document.getElementById("container-bundlehari").innerHTML = "";
    chartInstances.length = 0;

    for (let i = 0; i < tanggalArr.length; i++) {
      const hariData = {
        tanggal: tanggalArr[i],
        bb: bbArr[i],
        status: statusArr[i],
        diagnosa: diagnosaArr[i], 
        dokter: dokterArr[i], 

  
        bab: {
          therapy_observasi: (dataCommon.get("therapy_observasi") || []).slice(i * 8, i * 8 + 8),
          therapy_pagi: (dataCommon.get("therapy_pagi") || []).slice(i * 8, i * 8 + 8),
          therapy_sore: (dataCommon.get("therapy_sore") || []).slice(i * 8, i * 8 + 8),
          therapy_malam: (dataCommon.get("therapy_malam") || []).slice(i * 8, i * 8 + 8),
          oral_observasi: (dataCommon.get("oral_observasi") || []).slice(i * 8, i * 8 + 8),
          oral_pagi: (dataCommon.get("oral_pagi") || []).slice(i * 8, i * 8 + 8),
          oral_sore: (dataCommon.get("oral_sore") || []).slice(i * 8, i * 8 + 8),
          oral_malam: (dataCommon.get("oral_malam") || []).slice(i * 8, i * 8 + 8),
          ekg: (dataCommon.get("ekg") || []).slice(i * 24, i * 24 + 24),

          saturasi: (dataCommon.get("saturasi") || []).slice(i * 24, i * 24 + 24),
          gcs: (dataCommon.get("gcs") || []).slice(i * 24, i * 24 + 24),
          pupil: (dataCommon.get("pupil") || []).slice(i * 24, i * 24 + 24),
          mode: (dataCommon.get("mode") || []).slice(i * 24, i * 24 + 24),
          pcps: (dataCommon.get("pcps") || []).slice(i * 24, i * 24 + 24),
          tv: (dataCommon.get("tv") || []).slice(i * 24, i * 24 + 24),
          rr: (dataCommon.get("rr") || []).slice(i * 24, i * 24 + 24),
          peep: (dataCommon.get("peep") || []).slice(i * 24, i * 24 + 24),

          intake1: (dataCommon.get("intake1") || []).slice(i * 6, i * 6 + 6),
          intake2: (dataCommon.get("intake2") || []).slice(i * 6, i * 6 + 6),
          intake3: (dataCommon.get("intake3") || []).slice(i * 6, i * 6 + 6),
          intake4: (dataCommon.get("intake4") || []).slice(i * 6, i * 6 + 6),
          intake5: (dataCommon.get("intake5") || []).slice(i * 6, i * 6 + 6),

          urine: (dataCommon.get("urine") || []).slice(i * 5, i * 5 + 5),
          lainlain: (dataCommon.get("lainlain") || []).slice(i * 5, i * 5 + 5),
          kumulatif: (dataCommon.get("kumulatif") || []).slice(i * 5, i * 5 + 5)
        },

        shift: [...Array(24)].map((_, j) => ({
          TD: (dataCommon.get(`td_${i + 1}`) || [])[j] || "",
          P:  (dataCommon.get(`p_${i + 1}`) || [])[j] || "",
          N:  (dataCommon.get(`n_${i + 1}`) || [])[j] || "",
          T:  (dataCommon.get(`t_${i + 1}`) || [])[j] || ""
        }))

      };

      addBundleHari(hariData);
    }
  }
</script>
</body>
</html>
