<!-- MODAL -->
        <!-- Add Records Modal -->
        <div class="modal fade text-left" id="modal_form_penduduk" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title white" id="myModalLabel120">Tambah User
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body form">
                    
                        <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'formpenduduk');
                            echo form_open($this->uri->uri_string(), $attributes);
                        ?>      
                        <div class="form-body">
                        <div class="row">
                            <div class="col-12 col-md-3 text-center">
                                <div  class="show_img"></div>
                                <br/>
                                <div class="form-group">
                                    <input type="hidden"  name="id" class="id"/> 

                                    <label for="formFileSm" class="form-label ketpoto"></label>
                                    <b class="text-sm-10">(*jpg,png,jpeg,webp dan maks 5mb)</b>
                                    <input type="file" class="form-control form-control-sm" id="user_photo" name="user_photo" accept=".jpg,.jpeg,.png,.webp" />

                                    <span class="help-block text-danger"></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    
                                    <?php echo $form_nama; ?>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="form-group">
                                    
                                    <?php echo $form_nik; ?>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label for="valid-state">Tgl Lahir</label>
                                    <div class="form-group">
                                        <input type="date" name="tgl_lahir" class="form-control mb-3 tgl_lahir" id="tgl_lahir" placeholder="Pilih Tanggal"/>
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                   
                                    <?php echo $form_nohp; ?>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="form-floating">
                                    <?php echo $form_alamat; ?>
                                    <label for="floatingTextarea">Alamat</label>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <br/>
                                
                                <div class="form-group">
                                   
                                    <?php echo $form_tempat_lahir; ?>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="valid-state">Cabang</label>
                                    <select class="form-select cabang" name="cabang" id="cabang" style="width:100%" disabled>
                                        <option value="" >[Pilih Cabang]</option>
                                        <?php foreach ($cabang->result() as $row) : ?>
                                            <option value="<?php echo $row->id_cabang;?>"><?php echo $row->nama_cabang;?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <span class="help-block text-danger"></span>
                                </div>
                                

                                
                                
                
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    
                                    <select class="form-select kategori" name="kategori" id="kategori" style="width:100%" required>
                                            <option value="">[Pilih Kategori]</option>
                                            <option value="MERAH" >MERAH</option>
                                            <option value="KUNING">KUNING</option>
                                            <option value="HIJAU">HIJAU</option>
                                    </select>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="form-group">
                                    
                                    <select class="form-select jaminan" name="jaminan" id="jaminan" style="width:100%" required>
                                            <option value="">[Pilih Barang Jaminan]</option>
                                            <option value="Cincin">Cincin</option>
                                            <option value="Gelang">Gelang</option>
                                            <option value="Kalung">Kalung</option>
                                            <option value="Anting">Anting</option>
                                            <option value="Giwang">Giwang</option>
                                            <option value="Liontin">Liontin</option>
                                    </select>
                                    <span class="help-block text-danger"></span>
                                </div>
                                
                                <div class="form-group">
                                    
                                    <select class="form-select agama" name="agama" id="agama" style="width:100%" required>
                                            <option value="">[Pilih Agama]</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Khonghucu">Khonghucu</option>
                                            <option value=" - ">Memilih tidak menjawab</option>
                                    </select>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="form-group">
                                    
                                    <select class="form-select jk" name="jk" id="jk" style="width:100%" required>
                                            <option value="">[Pilih Jenis Kelamin]</option>
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <span class="help-block text-danger"></span>
                                </div>
                                <br/>

                                <div class="form-group">
                                    

                                    <label for="formFileSm" class="form-label ketktp"></label>
                                    <b class="text-sm-10">(*jpg,png,jpeg,webp dan maks 5mb)</b>
                                    <input type="file" class="form-control form-control-sm" id="ktp" name="ktp" accept=".jpg,.jpeg,.png,.webp" />

                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="form-group">
                                    

                                    <label for="formFileSm" class="form-label ketbarangjaminan"></label>
                                    <b class="text-sm-10">(*jpg,png,jpeg,webp dan maks 5mb)</b>
                                    <input type="file" class="form-control form-control-sm" id="barangjaminan" name="barangjaminan" accept=".jpg,.jpeg,.png,.webp" />

                                    <span class="help-block text-danger"></span>
                                </div>
                                <div class="form-group">
                                    

                                    <label for="formFileSm" class="form-label ketlainnya"></label>
                                    <b class="text-sm-10">(*jpg,png,jpeg,webp dan maks 5mb)</b>
                                    <input type="file" class="form-control form-control-sm" id="lainnya" name="lainnya" accept=".jpg,.jpeg,.png,.webp" />

                                    <span class="help-block text-danger"></span>
                                </div>
                                
                                                     
                                   
                            </div>
                        </div>
                        </div>
                        <?php
                            echo form_close();
                        ?>
                    </div>
                    <div class="modal-footer">
                        <div class="show_edit"></div>
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-sm-none"></i>Cancel</button>
                        <button type="submit" class="btn btn-success ml-1 btnSave" id="btnSave" onclick="proc()">
                            <i class="bx bx-check d-sm-none"></i>Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Records Modal -->


<!-- END MODAL -->  