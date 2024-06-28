$('.btn-edit').click(function(){
    var id = $(this).attr('data-id')
    var kategori = $(this).attr('data-kategori')
    var img = $(this).attr('data-img')

    $('#edit-kategori-id').val(id)
    $('#edit-kategori-val').val(kategori)
    $('#img-before').attr('src', img)

    $('#edit').modal('show')
})