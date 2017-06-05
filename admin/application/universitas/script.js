$(document).ready(function () {
    $('#frm_universitas input, textarea').prop('disabled', true);
    $('#action').on('click', function () {
        $('.btn-hidden').show();
        $('#action').hide();
        $('#frm_universitas :input').prop('disabled', false);
    });
    
    $('#btn_cancel').on('click', function(){
        location.reload();
    });
});

$(function(){
   $('#frm_universitas').validate({
       rules:{
           kode:{
               required: true
           },
           nama:{
               required: true
           },
           alamat:{
               required: true
           },
           email:{
               required: true
           },
           kota:{
               required: true
           }
       },
       messages:{
           kode:{
               required: "field can't empty"
           },
           nama:{
               required: "field can't empty"
           },
           alamat:{
               required: "field can't empty"
           },
           email:{
               required: "field can't empty"
           },
           kota:{
               required: "field can't empty"
           }
       },
       submitHandler: function(){
           
       }
   });
});

function ajaxAction(action) {
    
}