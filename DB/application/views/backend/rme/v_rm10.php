<div class="container mt-5">
	<table class="table border-dark">
		<tr>
			<td class="td-label"><label for="namaPasien">Nama Pasien</label></td>
			<td colspan="3"><input type="text" name="nama_pasien" id="namaPasien" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td class="td-label"><label for="noRm">No. RM</label></td>
			<td colspan="3"><input type="text" name="no_rm" id="noRm" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td class="td-label"><label for="kelasRuang">Kelas / Ruang</label></td>
			<td colspan="3"><input type="text" name="nama_ruangan" id="kelasRuang" class="form-control border-dark"></td>
		</tr>
	</table>

	<table class="table table-striped mt-5 border-dark table-bordered">
		<thead>
			<tr>
				<th>Pemeriksaan Penunjang</th>
				<th>Tanggal Pemeriksaan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody id="examTableBody">
			<tr data-initial="true">
				<td>
					<input type="text" name="pemeriksaanpenunjang[]" class="form-control border-dark" value="Hasil Laboratorium">
				</td>
				<td>
					<div class="vertical-wrapper">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
					</div>
				</td>
				<td></td>
			</tr>
			<tr data-initial="true">
				<td>
					<input type="text" name="pemeriksaanpenunjang[]" class="form-control border-dark" value="Hasil Radiologi">
				</td>
				<td>
					<div class="vertical-wrapper">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
					</div>
				</td>
				<td></td>
			</tr>
			<tr data-initial="true">
				<td>
					<input type="text" name="pemeriksaanpenunjang[]" class="form-control border-dark" value="Hasil USG">
				</td>
				<td>
					<div class="vertical-wrapper">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
					</div>
				</td>
				<td></td>
			</tr>
			<tr data-initial="true">
				<td>
					<input type="text" name="pemeriksaanpenunjang[]" class="form-control border-dark" value="Hasil EKG">
				</td>
				<td>
					<div class="vertical-wrapper">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
						<input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
					</div>
				</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<button type="button" id="addRowBtn" class="btn btn-primary">Tambah Baris</button>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const examTableBody = document.getElementById('examTableBody');
		const addRowBtn = document.getElementById('addRowBtn');
		const initialRowCount = examTableBody.querySelectorAll('tr[data-initial="true"]').length;

		addRowBtn.addEventListener('click', function() {
			const newRow = document.createElement('tr');
			newRow.innerHTML = `
            <td>
                <input type="text" name="pemeriksaanpenunjang[]" class="form-control border-dark">
            </td>
            <td>
                <div class="vertical-wrapper">
                    <input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
                    <input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
                    <input type="date" name="tanggalPemeriksaan[]" class="form-control border-dark">
                </div>
            </td>
            <td>
                <span class="delete-row" onclick="deleteRow(this)">🗑️ Hapus</span>
            </td>
        `;
			examTableBody.appendChild(newRow);
		});

		window.deleteRow = function(el) {
			const row = el.closest('tr');
			const rows = examTableBody.querySelectorAll('tr');

			if (rows.length > initialRowCount) {
				row.remove();
			} else {
				alert('Tidak dapat menghapus baris awal');
			}
		};
	});

	function cbCommon(data) {
		const pemeriksaanPenunjang = data.get('pemeriksaanpenunjang');
		const tanggalPemeriksaan = data.get('tanggalPemeriksaan');

		// Calculate number of rows based on the longer array
		const rowCount = Math.max(pemeriksaanPenunjang.length, tanggalPemeriksaan.length / 3);

		// Clear existing rows
		examTableBody.innerHTML = '';

		// Populate rows
		for (let i = 0; i < rowCount; i++) {
			const newRow = document.createElement('tr');

			// First rows are initial data, additional rows are dynamically added
			if (i < 4) {
				newRow.setAttribute('data-initial', 'true');
			}

			// Pemeriksaan Penunjang column
			const pemeriksaanCell = document.createElement('td');
			const pemeriksaanInput = document.createElement('input');
			pemeriksaanInput.type = 'text';
			pemeriksaanInput.name = 'pemeriksaanpenunjang[]';
			pemeriksaanInput.className = 'form-control border-dark';
			pemeriksaanInput.value = pemeriksaanPenunjang[i] || '';
			pemeriksaanCell.appendChild(pemeriksaanInput);

			// Tanggal Pemeriksaan column
			const tanggalCell = document.createElement('td');
			const verticalWrapper = document.createElement('div');
			verticalWrapper.className = 'vertical-wrapper';

			// Add 3 date inputs for each row
			for (let j = 0; j < 3; j++) {
				const dateInput = document.createElement('input');
				dateInput.type = 'date';
				dateInput.name = 'tanggalPemeriksaan[]';
				dateInput.className = 'form-control border-dark';

				// Assign dates from the array, cycling if needed
				const dateIndex = i * 3 + j;
				dateInput.value = tanggalPemeriksaan[dateIndex] || '';

				verticalWrapper.appendChild(dateInput);
			}
			tanggalCell.appendChild(verticalWrapper);

			// Action column
			const actionCell = document.createElement('td');
			if (i >= 4) {
				const deleteSpan = document.createElement('span');
				deleteSpan.className = 'delete-row';
				deleteSpan.innerHTML = '🗑️ Hapus';
				deleteSpan.onclick = function() {
					deleteRow(deleteSpan);
				};
				actionCell.appendChild(deleteSpan);
			}

			// Append cells to row
			newRow.appendChild(pemeriksaanCell);
			newRow.appendChild(tanggalCell);
			newRow.appendChild(actionCell);

			// Add row to table
			examTableBody.appendChild(newRow);
		}

		// Update initial row count
		initialRowCount = examTableBody.querySelectorAll('tr[data-initial="true"]').length;

	}
</script>