
const baseurl1 = 'http://127.0.0.1:8000';

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
        console.log(id);
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

$(function () {
    const hrefHapusLama = $('#id_hapus_Petugas').prop('href');

    $('.tombol_hapus_Petugas').on('click', function () {
        const id = $(this).data('id-hapus-petugas');
        const hrefHapusBaru = hrefHapusLama + '/' + id;
        $('#id_hapus_Petugas').attr('href', hrefHapusBaru);
        // console.log(hrefHapusLama);
        // console.log(hrefHapusBaru);
        // console.log(id);
    });
    $('#HapusPetugasModal').on('hidden.bs.modal', function () {
        $('#id_hapus_Petugas').attr('href', hrefHapusLama);    
    })
})

$(function() {
    const urlAction = $('#urlUbah').prop('action')
    $('.modalUbahData').on('click', function() {
        $('#urlUbah').attr('action', urlAction + '/ubah');
        $('#modal_title').html('Ubah Petugas');
        $('#tomUbah').html('Ubah');
            const id = $(this).data('id-ubah');
            $.ajax({
                 url: 'http://127.0.0.1:8000/superAdmin/petugas/getData/' + id,
                 method: 'get',
                 dataType: 'json',
                success: function  (data) {
                    //console.log(data);
                     $('#id_petugas_ubah').val(data.id_petugas);
                     $('#name_ubah').val(data.nama_petugas);
                     $('#username_ubah').val(data.username_petugas);
                     $('#username_lama_ubah').val(data.username_petugas);
                     $('#telp_ubah').val(data.telp);
                     $('#level_ubah').val(data.level);
                     
                 }
            });
    }) ;
    $('#urlUbah').attr('action', urlAction);
});
$(function() {
    const urlAction = $('#urlUbah').prop('action')
    $('#modalTambahPetugas').on('click', function() {
                    $('#urlUbah').attr('action', urlAction + '/tambah');
                     $('#tomUbah').html("Tambah");
                     $('#modal_title').html('Tambah Petugas');
                     $('#id_ubah').val('');
                     $('#name_ubah').val('');
                     $('#username_ubah').val('');
                     $('#telp_ubah').val('');
                     $('#level_ubah').val('');
                     

    }) ;
    $('#urlUbah').attr('action', urlAction);

});
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

$(function() {
    const hrefVerifikasiLama = $('#id_verifikasi').prop('href');
    
    $('.tombolVerifikasiPetugas').on('click', function() {
        const id = $(this).data('id-verifikasi');
           const hrefVerifikasiBaru = $('#id_verifikasi').prop('href') + '/' +id;
            $('#id_verifikasi').attr('href', hrefVerifikasiBaru);
            
    }) ;
    $('#VerifikasiPetugasModal').on('hidden.bs.modal', function () {
        $('#id_verifikasi').attr('href', hrefVerifikasiLama);    
    })
});


// $(document).ready(function(){
//     var tanggal = new Date()
//     $('.export').click(function () {
//         const typeData = $(this).data('type');
//         alert(typeData);
//        $('#laporan').tableHTMLExport({
//         type: 'json',
//         filename:'Laporan tanggal'+tanggal.getDate()+'.json',
//        });
//     });
// });



// $(document).ready(function() {
//     $('#laporan').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             {
//                 extend: 'print',
//                 exportOptions: {
//                     stripHtml: false
//                 }               
//             }, 
//             'csv', 'pdf', 'json', 'xlsx'        
//          ]  
//     } );
// // } );
// $(function () {
    
// $(document).ready(function(){
    
//     $('#pengaduan').filterTable();
//     const filter = $('.filter-table input');
//     filter.addClass('form-control');
//     filter.attr('placeholder', 'Cari Data');
//     $('.fill-filter').on('click', function(ev) {
//         ev.preventDefault();
//         $('.filter-table input').val($(this).text()).focus().trigger('click');
//       });   
// });  

// }) ; 

$(function () {
    
})

