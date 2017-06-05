<fieldset>
    <legend>Data Fakultas <span id="nama_kampus"></span></legend>
    <table id="tbl_fakultas" style="display: none"></table>

    <div id="add_model" class="modal fade">       
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="frm_fakultas">
                    <div class="modal-body">
                        <input type="hidden" value="" name="action" id="action">
                        <input type="hidden" value="0" name="edit_id" id="edit_id">
                        <div class="form-group">
                            <label for="kode" class="control-label">Kode:</label>
                            <input type="text" class="form-control input-sm" id="kode" name="kode"/>
                        </div>  
                        <div class="form-group">
                            <label for="fakultas" class="control-label">Nama Fakultas:</label>
                            <input type="text" class="form-control input-sm" id="fakultas" name="fakultas"/>
                        </div>                                                
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btn_cancel" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn_add" class="btn btn-sm btn-primary">Save...</button>
                    </div>                
                </form>
            </div>
        </div>        
    </div>
</fieldset>

<script src="application/fakultas/script.js"></script>