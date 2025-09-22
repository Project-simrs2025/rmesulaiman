
<!-- MODAL -->

<!-- Add Update Modal -->
<div class="modal fade text-left" id="modal_form_dokter" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
                role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        
                        <h3 class="modal-title white" id="myModalLabel120"></h3>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <div class="modal-body form">
                        
                        <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'formdokter');
                            echo form_open($this->uri->uri_string(), $attributes);
                        ?>   
                        <div class="row">
                            <input type="hidden" class="id" name="id"/> 
                            <input type="hidden" class="id_urut_dokter" name="id_urut_dokter"/> 
                                <div class="col-12 col-md-3 text-center">
                                    <div  class="show_img"></div>
                                    <br/>
                                    <div class="form-group">
                                        <label for="formFileSm" class="form-label">Upload Poto Dokter </label>
                                        <b>(*jpg,png,jpeg,webp dan ukuran maks 5mb)</b>
                                        <input type="file" class="form-control form-control-sm" id="user_photo" name="user_photo" accept=".jpg,.jpeg,.png,.webp" />

                                        <span class="help-block text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label> Nama Dokter</label>
                                        <input type="text" name="nama" class="form-control nama" id="nama" placeholder="Nama Dokter" required>
                                        <span class="help-block text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label> Username</label>
                                        <input type="text" name="username" class="form-control username" id="username" placeholder="Username">
                                        <span class="help-block text-danger"></span>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control password" id="password" placeholder="Masukkan Password Baru" required>
                                            <span class="help-block text-danger"></span>
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                     
                                    <div class="form-check form-check-xd d-flex align-items-end">
                                        <input class="form-check-input me-2" type="checkbox" onclick="showPass()" id="flexCheckDefault">
                                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                            Show Password
                                        </label>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" name="conf_pass" class="form-control conf_pass" id="conf_pass" placeholder="Konfirmasi Password Baru" required>
                                            <span class="help-block text-danger"></span>
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-check form-check-xd d-flex align-items-end">
                                        <input class="form-check-input me-2" type="checkbox" onclick="showConfPass()" id="flexCheckDefault">
                                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                            Show Password
                                        </label>
                                    </div>
                                    <script>
                                    function showPass() {
                                        var x = document.getElementById("password");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                    function showConfPass() {
                                        var x = document.getElementById("conf_pass");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    } 
                                    </script>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="valid-state">Tarif</label>
                                        <input type="text" name="tarif" class="form-control tarif" id="tarif" placeholder="Tarif Konsultasi" required>
                                        <span class="help-block text-danger"></span>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="valid-state">Poliklinik</label>
                                        <select class="form-select poli" name="poli" id="poli" style="width:100%" required>
                                            <option value="">[Pilih Poliklinik]</option>
                                            <?php foreach ($poliklinik->result() as $row) : ?>

                                                <option value="<?php echo $row->id_urut_poli;?>"><?php echo $row->nama_poli;?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <span class="help-block text-danger"></span>
                                    </div>
                                </div>
                                </div>
                               
                            
                            
                        
                        <?php
                            echo form_close();
                        ?>
                    </div>
            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-sm-none"></i>Cancel</button>
                        <button type="submit" class="btn btn-success ml-1 btnSave" id="btnSave" onclick="adddokter()">
                            <i class="bx bx-check d-sm-none"></i>Save</button>
                    </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- Add Update Modal -->
<!-- END MODAL -->