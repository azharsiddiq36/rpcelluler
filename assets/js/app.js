$(document).ready(function () {
    $('.btn-detail').click(function(event){
                var local = window.location.origin+'/ci/rpcelluler/';
        var url = local+"detail_pengguna";
        var data = $(this).data('id');

        $.ajax({
            url : url,
            type : 'ajax',
            dataType:'json',
            method : 'POST',
            async:true,
            data : {"pengguna_id":data},
            success:function (response) {

                $('#nomor').html(response.pengguna_nomor);
                $('#foto').html(response.pengguna_foto);
                $('#nama').html(response.pengguna_nama);
                $('#email').html(response.pengguna_email);
                $('#hak_akses').html(response.pengguna_hak_akses);
                $('#jk').html(response.pengguna_jk);
                $('#alamat').html(response.pengguna_alamat);
                $('#status').html(response.pengguna_status);
            },
            error:function(data){

            }
        });
    });
});
// $(document).ready(function () {
//     $('#modal_pengguna').on('show.bs.modal', function(event){
//         var local = window.location.origin+'/ci/rpcelluler/';
//         var url = local+"detail_pengguna";
//         console.log("bangsut");
//         var data = $(event.relatedTarget).data('id');
//         $.ajax({
//             url : url,
//             type : 'ajax',
//             dataType:'json',
//             method : 'POST',
//             async:true,
//             data : {"pengguna_id":data},
//             success:function (response) {
//                 var data = "ayam";
//                 console.log(data);
//             },
//             error:function(data){
//
//             }
//         });
//
//     });
// });