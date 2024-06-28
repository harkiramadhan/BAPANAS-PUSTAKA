$('.btn-edit').click(function(){
    var id = $(this).attr('data-id')
    var kategori = $(this).attr('data-kategori')

    $('#edit-kategori-id').val(id)
    $('#edit-kategori-val').val(kategori)

    $('#edit').modal('show')
})