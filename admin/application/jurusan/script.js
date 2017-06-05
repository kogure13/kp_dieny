$(document).ready(function () {
    $('#btn_cancel').click(function () {
        $('#frm_jurusan').trigger('reset');
    });
    
    $('#tbl_jurusan').flexigrid({
        url: 'application/jurusan/data_jurusan.php',
        dataType: 'json',
        method: 'post',
        colModel: [
            {
                display: 'ID',
                name: 'id',
                width: 40
            }, {
                display: 'Fakultas',
                name: 'nama_fakultas',
                width: 200

            }, {
                display: 'Kode Jurusan',
                name: 'kode_jurusan',
                width: 100
            }, {
                display: 'Nama Jurusan',
                name: 'nama_jurusan',
                width: 180
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
        title: 'Data Jurusan',
        singleSelect: true,
        striped: true,
        width: 500,
        height: 'auto'
    });
    
    var items = '';
    $.ajax({
        url: 'application/jurusan/option_jurusan.php',
        dataType: 'JSON',
        success: function (data) {
            $.each(data, function (key, value) {
                items += "<option value='" + value.id + "'>" + value.nama_fakultas + "</option>";
            });
            $('#fakultas').append(items);
        }
    });
});

$(function(){
    $('#frm_jurusan').validate({
        rules: {
            kode: {
                required: true
            },
            fakultas: {
                required: true
            },
            jurusan: {
                required: true
            }
        },
        messages: {
            kode: {
                required: 'field cannot empty'
            },
            fakultas: {
                required: 'select one'
            },
            jurusan: {
                required: 'field cannot empty '
            }
        },
        submitHandler: function(form){
            var com_action =$('#action').val();
            if(com_action == 'add'){
                ajaxAction('add');
            }else if(com_action == 'edit'){
                ajaxAction('edit');
            }
            
            $('#frm_jurusan').trigger('reset');
        }
    });    
});

function gridAction(com, grid){
    if(com == 'Add'){
        $('#add_model').modal('show');        
        $('.modal-title').html('Add Jurusan');
        $('#action').val('add');
    }else if(com == 'Edit'){
        if($('.trSelected', grid).length > 0){
            var id = 0;
            $('#add_model').modal('show');
            $('#action').val('edit');
            $('.modal-title').html('Edit Jurusan');
            $.each($('.trSelected', grid), function(key, value){
               $('#edit_id').val(value.children[0].innerText);
               id = $('#edit_id').val();
               $.ajax({
                   tyoe: 'POST',
                   dataType: 'JSON',
                   url: 'application/jurusan/edit_jurusan.php?id='+id,
                   success: function(data) {
                       $('#kode').val(data.kode_jurusan);
                       $('#fakultas').val(data.id_fakultas);
                       $('#jurusan').val(data.nama_jurusan);
                   }
               });
            });
        } else {
            alert("No row selected First select row, then click edit button");
            return;
        }        
    }
}

function ajaxAction(action) {
    data = $('#frm_jurusan').serializeArray();
    
    $.ajax({
       url: 'application/jurusan/data_jurusan.php',
       dataType: 'json',
       type: 'post',
       data: data,
       success: function(response){
           $('#add_model').modal('hide');
           $('#tbl_jurusan').flexReload();
       }
    });
}