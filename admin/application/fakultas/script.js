$(document).ready(function () {
    $('#btn_cancel').click(function () {
        $('#frm_fakultas').trigger('reset');
    });
    
    $('#tbl_fakultas').flexigrid({
        url: 'application/fakultas/data_fakultas.php',
        dataType: 'json',
        method: 'post',
        colModel: [
            {
                display: 'ID',
                name: 'id',
                width: 40
            }, {
                display: 'Kode',
                name: 'kode_fakultas',
                width: 70

            }, {
                display: 'Fakultas',
                name: 'nama_fakultas',
                width: 200
            }
        ],
        buttons: [
            {
                name: 'Add',
                bclass: 'add',
                onpress: gridAction
            }, {
                name: 'Edit',
                bclass: 'edit',
                onpress: gridAction
            }
        ],
        sortname: 'id',
        sortorder: 'asc',
        usepager: true,
        useRp: true,
        rp: 10,
        title: 'Data Fakultas',
        singleSelect: true,
        striped: true,
        width: 500,
        height: 'auto'
    });
});

$(function(){
    $('#frm_fakultas').validate({
        rules: {
            kode: {
                required: true
            },
            fakultas: {
                required: true
            }            
        },
        messages: {
            kode: {
                required: 'field cannot empty'
            },
            fakultas: {
                required: 'field cannot empty'
            }
        },
        submitHandler: function(form){
            var com_action =$('#action').val();
            if(com_action == 'add'){
                ajaxAction('add');
            }else if(com_action == 'edit'){
                ajaxAction('edit');
            }
            
            $('#frm_fakultas').trigger('reset');
        }
    });    
});

function gridAction(com, grid){
    if(com == 'Add'){
        $('#add_model').modal('show');        
        $('.modal-title').html('Add Fakultas');
        $('#action').val('add');
    }else if(com == 'Edit'){
        if($('.trSelected', grid).length > 0){
            $('#add_model').modal('show');
            $('#action').val('edit');
            $('.modal-title').html('Edit Fakultas');
            $.each($('.trSelected', grid), function(key, value){
               $('#edit_id').val(value.children[0].innerText);
               $('#kode').val(value.children[1].innerText);
               $('#fakultas').val(value.children[2].innerText);
            });
        } else {
            alert("No row selected First select row, then click edit button");
            return;
        }        
    }
}

function ajaxAction(action) {
    data = $('#frm_fakultas').serializeArray();
    
    $.ajax({
       url: 'application/fakultas/data_fakultas.php',
       dataType: 'json',
       type: 'post',
       data: data,
       success: function(response){
           $('#add_model').modal('hide');
           $('#tbl_fakultas').flexReload();
       }
    });
}