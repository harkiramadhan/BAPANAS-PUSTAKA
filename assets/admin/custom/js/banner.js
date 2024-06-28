$('.btn-edit').click(function(){
    var id = $(this).attr('data-id')
    var judul = $(this).attr('data-judul')
    var subjudul = $(this).attr('data-sub-judul')
    var img = $(this).attr('data-img')
    var status = $(this).attr('data-status')

    $('#banner-id').val(id)
    $('#judul-edit').val(judul)
    $('#sub_judul-edit').val(subjudul)
    $('#status-edit').val(status)

    $('#img-before').attr('src', img)

    $('#edit').modal('show')
})