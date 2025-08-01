
<!-- MODAL -->

<!-- Add Update Modal -->
<div class="modal fade text-left" id="modal_form_menu" tabindex="-1" role="dialog"
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
                            $attributes = array('class' => 'form-horizontal', 'id' => 'formmenu');
                            echo form_open($this->uri->uri_string(), $attributes);
                        ?>   
                        <div class="row">
                            <input type="hidden" class="id_menu" name="id_menu"/> 
                                <div class="col-12 col-md-12">
                                    
                                    <div class="form-group">
                                        
                                        <input type="text" name="norm" class="form-control norm" id="norm" placeholder="No Berkas RME" required>
                                        <span class="help-block text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="text" name="nama" class="form-control nama" id="nama" placeholder="Nama Berkas RME" required>
                                        <span class="help-block text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="text" name="link" class="form-control nama" id="link" placeholder="Kode Berkas RME" required>
                                        <span class="help-block text-danger"></span>
                                    </div>
                                    <?php
                                        $tipe =  array(
                                            array('id' => "1", 'nama_tipe' => "Rawat Inap"),
                                            array('id' => "2", 'nama_tipe' => "Rawat Jalan"),
                                        );
                                    ?>
                                    <div  style="overflow-y:scroll;height:80px;margin-bottom:10px;">
                                        <li class="d-inline-block me-2 mb-1" >
                                        <label for="valid-state">Tipe Berkas</label>
                                            <div class='form-check'>
                                            <?php foreach ($tipe as $row2) : ?>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="tipe[]" value="<?php echo $row2['id'];?>" class="form-check-input form-check-success form-check-glow">
                                                <label class="form-check-label" for="customColorCheck1"><?php echo $row2['nama_tipe'];?></label></br>
                                            </div>
                                            <?php endforeach;?>

                                            
                                            </div>
                                        </li>
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
                            <i class="bx bx-x d-sm-none"></i>Batal</button>
                        <button type="submit" class="btn btn-success ml-1 btnSave" id="btnSave" onclick="addmenu()">
                            <i class="bx bx-check d-sm-none"></i>Simpan</button>
                    </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- Add Update Modal -->
<!-- END MODAL -->