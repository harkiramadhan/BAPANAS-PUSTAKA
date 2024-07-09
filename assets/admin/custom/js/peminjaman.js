$('.btn-edit').click(function(){
    var id = $(this).attr('data-id')
    var nama = $(this).attr('data-nama')
    var judul = $(this).attr('data-judul')
    var tanggal = $(this).attr('data-tanggal')
    var pengembalian = $(this).attr('data-pengembalian')
    var status = $(this).attr('data-status')

    $('.edit-id').val(id)
    $('.edit-nama').val(nama)
    $('.edit-judul').val(judul)
    $('.edit-tanggal').val(tanggal)
    $('.edit-pengembalian').val(pengembalian)
    $('.edit-status').val(status)

    $('#editPeminjaman').modal('show')
})