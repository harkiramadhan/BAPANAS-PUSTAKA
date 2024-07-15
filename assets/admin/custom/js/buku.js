$('#select-jenis').change(function(){
    var id = $(this).val()
    if(id === '1'){
        $('.file-buku').removeClass('d-none')
        $('.file-buku-preview').attr('required', true)
    }else{
        $('.file-buku').addClass('d-none')
        $('.file-buku-preview').attr('required', false)
    }
})

$(document).ready(function(){
    var idjenis = $('#idjenis').val()
    if(idjenis === '1'){
        $('.file-buku').removeClass('d-none')
        $('.file-buku-preview').attr('required', true)
    }else{
        $('.file-buku').addClass('d-none')
        $('.file-buku-preview').attr('required', false)
    }
})