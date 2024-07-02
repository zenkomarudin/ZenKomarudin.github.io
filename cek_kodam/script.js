// script.js
document.getElementById('checkButton').addEventListener('click', function() {
    var name = document.getElementById('nameInput').value;
    var kodams = [
        "Kodam Rajawali Putih",
        "Kodam Macan Putih",
        "Kodam Naga Sakti",
        "Kodam Harimau Jawa",
        "Kodam Lembu Suro",
        "Kodam Garuda Emas",
        "Tromol Becak",
        "Tutup Botol Separo",
        "Orong Orong"
    ];

    if (name.trim() === "") {
        document.getElementById('resultText').textContent = "Masukkan nama Anda terlebih dahulu!";
        return;
    }

    var randomKodam = kodams[Math.floor(Math.random() * kodams.length)];
    document.getElementById('resultText').textContent = "Halo " + name + ", kodam Anda adalah: " + randomKodam;
});
