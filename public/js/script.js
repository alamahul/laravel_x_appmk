
$(function() {
    const hrefHapusLama = $('#id_hapus').prop('href');
    $('.tombolHapus').on('click', function() {
        const id = $(this).data('id-ubah');
            const hrefHapusBaru = $('#id_hapus').prop('href') + '/' + id;
            $('#id_hapus').attr('href', hrefHapusBaru);
            // console.log(hrefHapusBaru);
            // console.log(id); 
    }) ;
    $('#HapusPengaduanModal').on('hidden.bs.modal', function () {
        $('#id_hapus').attr('href', hrefHapusLama);    
    })
});

$(function() {
    const hrefVerifikasiLama = $('#id_verifikasi').prop('href');
    
    $('.tombolVerifikasi').on('click', function() {
        const id = $(this).data('id-verifikasi');
           const hrefVerifikasiBaru = $('#id_verifikasi').prop('href') + '/' +id;
            $('#id_verifikasi').attr('href', hrefVerifikasiBaru);
            // console.log(hrefVerifikasiBaru);
            // console.log(id); 
    }) ;
    $('#VerifikasiPengaduanModal').on('hidden.bs.modal', function () {
        $('#id_verifikasi').attr('href', hrefVerifikasiLama);    
    })
});

$(function() {
    const hrefTolakLama = $('#id_tolak').prop('href');
    
    $('.tombolTolak').on('click', function() {
        const id = $(this).data('id-tolak');
           const hrefTolakBaru = $('#id_tolak').prop('href') + '/' +id;
            $('#id_tolak').attr('href', hrefTolakBaru);
            // console.log(hrefTolakBaru);
            // console.log(id); 
    }) ;
    $('#TolakPengaduanModal').on('hidden.bs.modal', function () {
        $('#id_tolak').attr('href', hrefTolakLama);    
    })
});

$(function () {
    const hrefHapusLama = $('#id_hapus_tanggapan').prop('href');

    $('.tombol_hapus_tanggapan').on('click', function () {
        const id = $(this).data('id-hapus-tanggapan');
        const hrefHapusBaru = hrefHapusLama + '/' + id;
        $('#id_hapus_tanggapan').attr('href', hrefHapusBaru);
        // console.log(hrefHapusLama);
        // console.log(hrefHapusBaru);
        // console.log(id);
    });
    $('#HapusTanggapanModal').on('hidden.bs.modal', function () {
        $('#id_hapus_tanggapan').attr('href', hrefHapusLama);    
    })

})  
$(function () {
    const hrefHapusLama = $('#id_hapus_masyarakat').prop('href');

    $('.tombol_hapus_masyarakat').on('click', function () {
        const id = $(this).data('id-hapus-masyarakat');
        const hrefHapusBaru = hrefHapusLama + '/' + id;
        $('#id_hapus_masyarakat').attr('href', hrefHapusBaru);
        // console.log(hrefHapusLama);
        // console.log(hrefHapusBaru);
        // console.log(id);
    });
    $('#HapusMasyarakatModal').on('hidden.bs.modal', function () {
        $('#id_hapus_masyarakat').attr('href', hrefHapusLama);    
    })

})  