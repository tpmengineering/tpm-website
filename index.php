<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jam Digital Keren</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: radial-gradient(circle at center, #0f0f0f, #000000);
      font-family: 'Orbitron', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #00ffe7;
    }

    .clock {
      font-size: 5rem;
      letter-spacing: 5px;
      text-shadow: 
        0 0 10px #00ffe7,
        0 0 20px #00ffe7,
        0 0 40px #00ffe7,
        0 0 80px #00ffe7;
      border: 3px solid #00ffe7;
      padding: 20px 40px;
      border-radius: 20px;
      background: rgba(0, 0, 0, 0.3);
      box-shadow: 0 0 30px rgba(0, 255, 231, 0.3);
    }

    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap');
  </style>
</head>
<body>
  <div class="clock" id="clock">00:00:00</div>

  <script>
    function updateClock() {
      const now = new Date();
      const hours = String(now.getHours()).padStart(2, '0');
      const minutes = String(now.getMinutes()).padStart(2, '0');
      const seconds = String(now.getSeconds()).padStart(2, '0');
      document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
    }

    setInterval(updateClock, 1000);
    updateClock(); // Update awal
  </script>
</body>
</html>
