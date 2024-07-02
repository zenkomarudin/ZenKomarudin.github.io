function startCountdown() {
    const hoursInput = document.getElementById('hours');
    const minutesInput = document.getElementById('minutes');
    const secondsInput = document.getElementById('seconds');
    const countdownDisplay = document.getElementById('countdown');

    let hours = parseInt(hoursInput.value) || 0;
    let minutes = parseInt(minutesInput.value) || 0;
    let seconds = parseInt(secondsInput.value) || 0;

    if (hours === 0 && minutes === 0 && seconds === 0) {
        alert('Masukkan durasi countdown yang valid.');
        return;
    }

    let totalSeconds = hours * 3600 + minutes * 60 + seconds;
    let countdown = setInterval(() => {
        if (totalSeconds <= 0) {
            clearInterval(countdown);
            countdownDisplay.textContent = 'Waktu Habis!';
        } else {
            let hoursLeft = Math.floor(totalSeconds / 3600);
            let minutesLeft = Math.floor((totalSeconds % 3600) / 60);
            let secondsLeft = totalSeconds % 60;

            countdownDisplay.textContent = `Countdown: ${hoursLeft} jam ${minutesLeft} menit ${secondsLeft} detik`;

            totalSeconds--;
        }
    }, 1000);
}

function outputText() {
    const inputText = document.getElementById('inputText').value;
    const outputText = document.getElementById('outputText');

    outputText.textContent = `Teks yang dimasukkan: ${inputText}`;
}
