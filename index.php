<?php 
include 'code.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./style.css" />
    <title>Domande frequenti - Privacy e termini</title>
  </head>
  <body>
    <div>
      <header class="px-3 bg-white position-fixed w-100">
        <!-- Header -->
        <div class="pt-3 d-flex justify-content-between align-items-center">
          <!-- Left Side -->
          <div>
            <a href="https://policies.google.com/"
              ><img
                src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg"
                alt="logo google"
            /></a>
            <span class="text-secondary fs-5" id="privacy-termini">Privacy e termini</span>
          </div>

          <div>
            <!-- Right Side -->
            <i class="fa-solid fa-grip fs-5 text-secondary me-3"></i>
            <i class="fa-solid fa-user fs-6 rounded-circle profile-img"></i>
          </div>
        </div>

        <nav class="pt-3">
          <!-- Navbar -->
          <ul>
            <li><a href="#">Introduzione</a></li>
            <li><a href="#">Norme sulla privacy</a></li>
            <li><a href="#">Termini di servizio</a></li>
            <li><a href="#">Tecnologie</a></li>
            <li><a href="#" class="active">Domande frequenti</a></li>
          </ul>
        </nav>
      </header>

      <main>
        <!-- Text Section -->
        <div class="col-6 mx-auto">
          <?php foreach ($faqs as $key =>
          $domanda) { echo "
          <h4>" . $domanda["question"] . "</h4>
          " . "
          <p>" . $domanda["answer"] . "</p>
          "; } ?>
        </div>
      </main>
    </div>

    <footer>
      <!-- Footer Section -->
      <div class="col-6 mx-auto">
        <div class="d-flex justify-content-between align-items-center py-2">
          <div>
            <!-- Footer Navbar -->
            <ul class="footer-text">
              <li><a href="#" class="divider">Google</a></li>
              <li><a href="#" class="divider">Tutto su Google</a></li>
              <li><a href="#" class="divider">Privacy</a></li>
              <li><a href="#">Termini</a></li>
            </ul>
          </div>

          <div class="col-4 d-flex justify-content-end align-items-center">
            <!-- Language Selection -->
            <img src="./Immagine 2022-05-06 153159.jpg" alt="" class="language-img me-2" />
            <select name="language">
              <option value="Italiano">Italiano</option>
              <option value="English">English</option>
              <option value="French">French</option>
              <option value="Afrikaans">Afrikaans</option>
              <option value="Espanol">Espanol</option>
              <option value="Deutsch">Deutsch</option>
              <option value="Russian">Russian</option>
            </select>
          </div>
        </div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
