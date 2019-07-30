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
    $('.auto-hide').delay(3000).fadeOut("slow", function(){ // first animation delayed 10 secs
    });
    $('#code-paket').change(function () {
       var value =$(this).val();
       var local = window.location.origin+'/ci/rpcelluler/';
       var url = local+"detail_paket";

       $.ajax({
            url : url,
            type : 'ajax',
            dataType:'json',
            method : 'POST',
            async:true,
            data : {"paket_id":value},
            success:function (response) {
                var nama,provider,stok;
                if (value == 0){
                    nama = null;
                    provider = null;
                    stok = null;
                }else{
                    nama = response.paket_nama;
                    provider = response.provider_nama;
                    stok = response.paket_stok;
                }
                document.getElementById("nama").value = nama;
                document.getElementById("provider").value = provider;
                document.getElementById("stok").value = stok;
            },
            error:function(data){

            }
       });
    });
    $('#code-paket2').change(function () {

        var value =$(this).val();
        var local = window.location.origin+'/ci/rpcelluler/';
        var url = local+"detail_paket_karyawan";;
        $.ajax({
            url : url,
            type : 'ajax',
            dataType:'json',
            method : 'POST',
            async:true,
            data : {"paket_id":value},
            success:function (response) {
            console.log(url);
                var nama,provider,stok;
                if (value == 0){
                    nama = null;
                    provider = null;
                    stok = null;
                }else{
                    nama = response.paket_nama;
                    provider = response.provider_nama;
                    stok = response.paket_stok;
                }
                document.getElementById("nama2").value = nama;
                document.getElementById("provider2").value = provider;
                document.getElementById("stok2").value = stok;
            },
            error:function(data){

            }
        });
    });
});

