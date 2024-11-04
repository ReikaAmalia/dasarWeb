function cekInput() {
    const angka = document.getElementById('angka').value;
    const error = document.getElementById('error');
    
    // Bersihkan pesan error
    error.textContent = '';

    // Cek apakah angka negatif
    if (angka < 0) {
        error.textContent = 'Angka tidak boleh negatif!';
        return false;
    }

    if (angka > 100) {
        error.textContent =  'angka tidak boleh kebih dari 100!';
        return false; 
    }

    // Cek apakah bilangan kuadrat
    const akar = Math.sqrt(angka);
    const isKuadrat = Number.isInteger(akar);

    if (!isKuadrat) {
        error.textContent = 'Angka bukan bilangan kuadrat sempurna!';
        return false;
    }

    // Jika semua validasi lolos
    return true;
}
