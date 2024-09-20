const hitung = () => {
    const durasi_input = document.getElementById("durasi_sewa")
    const harga_input = document.getElementById("jenis_properti")

    const durasi = parseInt(durasi_input.value || "1")
    const harga = parseInt(
        harga_input.options[harga_input.selectedIndex].dataset.harga
    )

    let total = durasi * harga
    if (total >= 10000000) {
        const diskon = 5 / 100 // 5%
        const potongan = diskon * total
        total -= potongan
    }

    const totalFormat = new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR"
    }).format(total)
    const totalE = document.getElementById("total")
    totalE.textContent = `${totalFormat}`
}

export default hitung
