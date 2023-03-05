$(function() {
    $('.modalUbahData').on('click', function() {
            const id = $(this).data('id-ubah');
            $.ajax({
                url: 'http://localhost/pelaporan_pengaduan_masyarakat/public/LihatUser/prosesUbahPetugas',
                data: {id : id},
                method: 'post',
                dataType: 'json',
                success: function  (data) {
                    $('#id_ubah').val(data.id_petugas);
                    $('#name_ubah').val(data.nama_petugas);
                    $('#username_ubah').val(data.username_petugas);
                    $('#telp_ubah').val(data.telp);
                    $('#level_ubah').val(data.level);
                }
            });
    }) ;
});

