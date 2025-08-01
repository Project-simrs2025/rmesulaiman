
<!-- MODAL -->

<!-- Add Update Modal -->
<div class="modal fade text-left" id="modal_form_entry_siswa" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        
                        <h3 class="modal-title white" id="myModalLabel120"></h3>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
            <div class="modal-body form">
                       
                        <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'formdatasiswa');
                            echo form_open($this->uri->uri_string(), $attributes);
                        ?>  
                        <div class="row">
                           
                            
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Siswa</label>
                                    <select class="form-select nama_siswa" name="nama_siswa" id="nama_siswa" style="width:100%" required>
                                            <option value="">[Pilih Siswa]</option>
                                            <?php foreach ($siswa->result() as $row) : ?>
                                                <option value="<?php echo $row->user_id;?>"><?php echo $row->user_name;?></option>
                                            <?php endforeach;?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="nama_siswa2"/>
                                    <span class="help-block text-danger"></span>
                                    <hr>
                                </div>

                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select class="form-select kelas" name="kelas" id="kelas" style="width:100%" required>
                                            <option value="">[Pilih Kelas]</option>
                                            <?php foreach ($kelas->result() as $row) : ?>
                                                <option value="<?php echo $row->id_kelas;?>"><?php echo $row->nama_kelas;?> (<?php echo $row->tingkatan;?>)</option>
                                            <?php endforeach;?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="kelas2"/>
                                    <span class="help-block text-danger"></span>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Semester</label>
                                    <select class="form-select semester" name="semester" id="semester" style="width:100%" required>
                                            <option value="">[Pilih Semester]</option>
                                            <?php foreach ($semester->result() as $row) : ?>
                                                <option value="<?php echo $row->id_semester;?>"><?php echo $row->nama_semester;?> <?php echo $row->bilangan;?></option>
                                            <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="semester2"/>
                                    <span class="help-block text-danger"></span>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-select jk" name="jk" id="jk" style="width:100%" required>
                                            <option value="">[Pilih Jenis Kelamin]</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="jk2"/>
                                    <span class="help-block text-danger"></span>
                                    <hr>
                                </div>
                            </div>
                            <input type="hidden"  name="id_siswa" class="id_siswa"/> 
                        </div>
                        <?php
                            echo form_close();
                        ?>
                    </div>
            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-sm-none"></i>Cancel</button>
                        <button type="submit" class="btn btn-success ml-1 btnSave" id="btnSave" onclick="addsiswa()">
                            <i class="bx bx-check d-sm-none"></i>Simpan</button>
                    </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- Add Update Modal -->
<!-- END MODAL -->