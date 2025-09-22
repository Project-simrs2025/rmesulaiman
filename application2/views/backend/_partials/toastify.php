          
    <?php if($this->session->flashdata('msg')=='falied-change-image'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Format Harus .jpg , png , .jpeg , .webp",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='empty-image'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Form Gambar masih kosong",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='doublekunjungan'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Berkas RME ini sudah di isi",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='berkastidakada'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Berkas Tidak ditemukan",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Data Berhasil diperbarui",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='berhasil-create'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Data Klaim berhasil disatukan, silahkan lihat dari SIMRS menu Download dan Tombol Download All!",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='berhasil-tambah'):?>
            <script type="text/javascript">
                    Swal.fire(
                        "Berhasi!",
                        "Data berhasil ditambah!",
                        "success"
                    );
            </script>
    <?php elseif($this->session->flashdata('msg')=='berhasil-ubah'):?>
            <script type="text/javascript">
                    Swal.fire(
                        "Berhasi!",
                        "Data berhasil diubah!",
                        "success"
                    );
            </script>       
    <?php elseif($this->session->flashdata('msg')=='failed'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Data Gagal diperbarui",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>   
    <?php elseif($this->session->flashdata('msg')=='empty-form'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Form Masih Kosong",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>   
    <?php elseif($this->session->flashdata('msg')=='info'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Data Berhasil diperbarui",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    }).showToast()
            </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
            <script type="text/javascript">
                    Toastify({
                        text: "Data Berhasil di Hapus",
                        duration: 5000,
                        backgroundColor: "linear-gradient(to right, #ff4343, #ff8a8a)",
                    }).showToast()
            </script>    
    <?php else:?>
    <?php endif;?>