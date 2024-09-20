import "./hapus-pesanan.js"
import hitung from "./hitung.js"

const hitungE = document.getElementById("hitung")
if (hitungE) {
    hitungE.addEventListener("click", hitung)
}
