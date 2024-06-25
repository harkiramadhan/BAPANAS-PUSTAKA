// let jquery_datatable = $("#daftarPeminjaman").DataTable({
//     responsive: true
// })
let daftarpeminjaman_datatable = $("#daftarPeminjaman").DataTable({
    responsive: true,
    order: true,
    
    dom:
		"<'row'<'col-3'l><'col-9'f>>" +
		"<'row dt-row'<'col-sm-12'tr>>" +
		"<'row'<'col-4'i><'col-8'p>>",
    "language": {
        "info": "Halaman ke _PAGE_ dari _PAGES_",
        "lengthMenu": "_MENU_ ",
        "search": "",
        "searchPlaceholder": "Cari Peminjaman ..."
    }
})

let daftarbuku_datatable = $("#daftarBuku").DataTable({
    responsive: true,
    order: true,
    
    dom:
		"<'row'<'col-3'l><'col-9'f>>" +
		"<'row dt-row'<'col-sm-12'tr>>" +
		"<'row'<'col-4'i><'col-8'p>>",
    "language": {
        "info": "Halaman ke _PAGE_ dari _PAGES_",
        "lengthMenu": "_MENU_ ",
        "search": "",
        "searchPlaceholder": "Cari Buku ..."
    }
})

let daftarkategori_datatable = $("#daftarKategori").DataTable({
    responsive: true,
    order: true,
    
    dom:
		"<'row'<'col-3'l><'col-9'f>>" +
		"<'row dt-row'<'col-sm-12'tr>>" +
		"<'row'<'col-4'i><'col-8'p>>",
    "language": {
        "info": "Halaman ke _PAGE_ dari _PAGES_",
        "lengthMenu": "_MENU_ ",
        "search": "",
        "searchPlaceholder": "Cari Kategori ...",
        "paginate": {
            "previous": "Sebelumnya",
            "next": "Selanjutnya"
        }
    },
})

const setTableColor = () => {
    document.querySelectorAll('.dataTables_paginate .pagination').forEach(dt => {
        dt.classList.add('pagination-primary')
    })
}
setTableColor()
jquery_datatable.on('draw', setTableColor)