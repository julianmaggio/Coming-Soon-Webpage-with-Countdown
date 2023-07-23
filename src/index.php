<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coming Soon</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <style>

    body {
      background: url('https://cdn.pixabay.com/photo/2023/06/10/05/11/himalyas-8053173_1280.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .countdown {
      font-size: 2rem;
      font-weight: bold;
      color: #ffffff;
    }

    .countdown-box {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 1.5rem 3rem;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="countdown-box">
          <p class="countdown" id="countdown"></p>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Set the date you want to count down to
    const countDownDate = new Date("2023-12-31T00:00:00").getTime();

    const x = setInterval(function () {
      const now = new Date().getTime();
      const distance = countDownDate - now;

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Website is currently being updated";
      }
    }, 1000);
  </script>
</body>
</html>
