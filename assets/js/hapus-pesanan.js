const table = document.getElementById("table-orders")

if (table) {
    table.addEventListener("click", (e) => {
        const target = e.target
        if (!target.classList.contains("hapus-pesanan")) return

        const id = target.dataset.id

        Swal.fire({
            title: "Anda yakin?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yakin!"
        }).then((result) => {
            if (!result.isConfirmed) return

            location.href = `/app/functions/hapus-pesanan.php?id=${id}`
        })
    })
}
