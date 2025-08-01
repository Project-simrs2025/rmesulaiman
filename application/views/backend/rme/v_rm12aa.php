<!DOCTYPE html>
<html lang="id">
<head>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="p-4">

<div id="container-bundlehari"></div>

<div class="my-3">
  <button type="button" class="btn btn-success" onclick="addBundleHari()">Tambah Baris</button>
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
    const tekstur = bundleData?.bab?.tekstur || '';
    const warna = bundleData?.bab?.warna || '';
    const frekuensi = bundleData?.bab?.frekuensi || '';
    const shift = bundleData?.shift || [];

    const html = `
      <div class="card mb-4 bundleHarian border border-dark p-3">
        <h5>Kurva Hari ${bundleCount}</h5>
        <div class="mb-2">
          <label>Tanggal</label>
          <input type="date" name="tanggal[]" class="form-control border-dark" value="${tanggal}">
        </div>

        <div class="table-responsive mb-3">
          <table class="table table-bordered border-dark text-center">
            <tbody>
              <tr class="inputDerajat">
                <td colspan="2" rowspan="3">
                  <div class="fw-bold mt-5">BAB</div>
                </td>
                <td colspan="2">Tekstur</td>
                ${[0, 1, 2, 3, 4].map(i => `
                  <td><input type="text" class="form-control border-dark" name="tekstur[]" value="${bundleData?.bab?.tekstur?.[i] || ''}"></td>
                `).join('')}
              </tr>
              <tr class="inputDerajat">
                <td colspan="2">Frekuensi</td>
                ${[0, 1, 2, 3, 4].map(i => `
                  <td><input type="text" class="form-control border-dark" name="frekuensi[]" value="${bundleData?.bab?.frekuensi?.[i] || ''}"></td>
                `).join('')}
              </tr>
              <tr class="inputDerajat">
                <td colspan="2">Warna</td>
                ${[0, 1, 2, 3, 4].map(i => `
                  <td><input type="text" class="form-control border-dark" name="warna[]" value="${bundleData?.bab?.warna?.[i] || ''}"></td>
                `).join('')}
              </tr>
            </tbody>
          </table>
        </div>



        <div class="mb-3">
          <div id="${idChart}" style="height: 250px;"></div>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered text-center">
            <thead class="table-secondary">
              <tr>
                <th>Shift</th>
                <th>TD</th>
                <th>P</th>
                <th>N</th>
                <th>T</th>
              </tr>
            </thead>
            <tbody>
              ${["Pagi", "Sore", "Malam"].map((label, i) => `
                <tr>
                  <td>Shift ${label}</td>
                  <td><input type="text" class="form-control form-control-sm border-dark" name="td_${bundleCount}[]" value="${shift[i]?.TD || ''}"></td>
                  <td><input type="text" class="form-control form-control-sm border-dark" name="p_${bundleCount}[]" value="${shift[i]?.P || ''}"></td>
                  <td><input type="text" class="form-control form-control-sm border-dark" name="n_${bundleCount}[]" value="${shift[i]?.N || ''}"></td>
                  <td><input type="text" class="form-control form-control-sm border-dark" name="t_${bundleCount}[]" value="${shift[i]?.T || ''}"></td>
                </tr>
              `).join('')}
            </tbody>

          </table>
        </div>
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
        categories: ['Shift Pagi', 'Shift Sore', 'Shift Malam']
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
    inputSelectors.forEach(name => {
      document.querySelectorAll(`[name="${name}[]"]`).forEach(input => {
        input.addEventListener("input", () => updateChartData(bundleCount - 1));
      });
    });

    chartInstances.push(chart);
  }

  // Fungsi callback saat menerima JSON dari backend
  function cbCommon(dataCommon) {
    console.log("cbCommon()", dataCommon);

    const tanggalArr = dataCommon.get("tanggal") || [];

    document.getElementById("container-bundlehari").innerHTML = "";
    chartInstances.length = 0;

    for (let i = 0; i < tanggalArr.length; i++) {
      const hariData = {
        tanggal: tanggalArr[i],
        bab: {
          tekstur: (dataCommon.get("tekstur") || []).slice(i * 5, i * 5 + 5),
          warna: (dataCommon.get("warna") || []).slice(i * 5, i * 5 + 5),
          frekuensi: (dataCommon.get("frekuensi") || []).slice(i * 5, i * 5 + 5)
        },

        shift: [1, 2, 3].map(j => ({
          TD: (dataCommon.get(`td_${i + 1}`) || [])[j - 1] || "",
          P:  (dataCommon.get(`p_${i + 1}`) || [])[j - 1] || "",
          N:  (dataCommon.get(`n_${i + 1}`) || [])[j - 1] || "",
          T:  (dataCommon.get(`t_${i + 1}`) || [])[j - 1] || ""
        }))
      };

      addBundleHari(hariData);
    }
  }
</script>
</body>
</html>
