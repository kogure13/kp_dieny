<fieldset>
    <legend>Profile Data Universitas</legend>    

    <form id="frm_universitas" name="frm_universitas" class="form-horizontal">                
        <div class="form-group">
            <label for="kode" class="control-label col-sm-2">Kode:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control input-sm" id="kode" name="kode"/>
            </div>            
        </div>  
        <div class="form-group">
            <label for="nama" class="control-label col-sm-2">Nama Universitas:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control input-sm" id="nama" name="nama"/>
            </div>            
        </div>                                                        
        <div class="form-group">
            <label for="Alamat" class="control-label col-sm-2">Alamat:</label>
            <div class="col-sm-4">
                <textarea class="form-control input-sm" id="alamat" name="alamat"></textarea>            
            </div>            
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Email:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control input-sm" id="email" name="email"/>
            </div>            
        </div>
        <div class="form-group">
            <label for="kota" class="control-label col-sm-2">Kota:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control input-sm" id="kota" name="kota"/>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-lg-10">
                <button type="button" id="action" name="action" class="btn btn-sm btn-default">Edit</button>
                <button type="button" id="btn_cancel" class="btn btn-sm btn-default btn-hidden">Cancel</button>
                <button type="submit" id="btn_add" class="btn btn-sm btn-primary btn-hidden">Save</button>        
            </div>
        </div>
    </form>   
</fieldset>

<script src="application/universitas/script.js"></script>