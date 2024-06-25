const Swal2 = Swal.mixin({
  customClass: {
    input: 'form-control'
  }
})

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})


document.getElementById("question").addEventListener("click", (e) => {
  Swal.fire({
    icon: "warning",
    title: "Yakin ingin menghapusnya?",
    showCancelButton: true,
    denyButtonText: `Batalkan`,
    confirmButtonText: "Hapus",
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire("Data Terhapus", "", "success");
    } else if (result.isDenied) {
      Swal.fire("Hapus Data di Batalkan", "", "error");
    }
  });
})