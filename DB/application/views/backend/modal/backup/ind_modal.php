
<!-- MODAL -->

<!-- Add Update Modal -->
<div class="modal fade text-left" id="modal_form_entry_indikator" tabindex="-1" role="dialog"
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
                            $attributes = array('class' => 'form-horizontal', 'id' => 'formdataindikator');
                            echo form_open($this->uri->uri_string(), $attributes);
                        ?>  
                        <div class="row">
                           
                            
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Nama Indikator</label>
                                    <?php echo $form_nama_indikator; ?>
                                    <span class="help-block text-danger"></span>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Tingkat Penilaian</label>
                                    <?php echo $form_tingkat_indikator; ?>
                                    <span class="help-block text-danger"></span>
                                </div>
                            </div>
                            
                            <input type="hidden"  name="id_indikator" class="id_indikator"/> 
                        </div>
                        <?php
                            echo form_close();
                        ?>
                    </div>
            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-sm-none"></i>Cancel</button>
                        <button type="submit" class="btn btn-success ml-1 btnSave" id="btnSave" onclick="addindikator()">
                            <i class="bx bx-check d-sm-none"></i>Simpan</button>
                    </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- Add Update Modal -->
<!-- END MODAL -->