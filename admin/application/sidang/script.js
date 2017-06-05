$(document).ready(function () {
    $('#tbl_sidang').flexigrid({
        url: 'application/sidang/data_sidang.php',
        dataType: 'json',
        method: 'post',
        colModel: [
            {
                display: 'NIM',
                name: 'nim',
                width: 150
            }, {
                display: 'Nama Mahasiswa',
                name: 'nama_lengkap',
                width: 200
            }, {
                display: 'Angkatan',
                name: 'angkatan',
                width: 100
            }
        ],
        buttons: [
            {
                name: 'Edit',
                bclass: 'edit',
                onpress: gridAction
            }
        ],
        
        sortname: 'nim',
        sortorder: 'asc',
        userpager: true,
        userRp: true,
        rp: 10,
        title: 'Data Sidang Mahasiswa',
        singleSelect: true,
        striped: true,
        width: 'auto',
        height: 'auto'
    });
});

function gridAction(com, grid) {
    if ($('.trSelected', grid).length > 0) {

    } else {
        swal("Warning", "No row selected! First select row, then click edit button", "warning");
        return;
    }
}

function ajaxAction(action) {
    
}
