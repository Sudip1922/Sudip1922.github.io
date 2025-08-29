<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My House</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <header>
    <img src="loogo.jpg" alt="My Logo" title="My Logo" class="logo"width="100"/>
  </header>

  <nav class="horizontal-menu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="study.html">My Study Subject</a></li>
      <li><a href="hobbies.html">My Hobbies</a></li>
      <li><a href="music.html">My Music</a></li>
      <li><a href="house.php">My House</a></li>
    </ul>
  </nav>
  <main class="content">
    <h2>Welcome to My House!</h2>
    <p>Here is a picture of my house. I hope you enjoy viewing it!</p>

    <!-- Single Image Section -->
    <section class="house-image">
      <h3>My Beautiful House</h3>
      <img src="images/my_house.jpg" alt="My House" width="600" />
      <p>This is a picture of my house, where I spend most of my time. It’s cozy and comfortable, and I’m really proud of it!</p>
    </section>
  </main>



  <div class="main-container">


    <main class="content">
      <article>
        <h2>My House</h2>

        <?php
        // Associative array for house information
        $house = array(
          "Street Address" => " 22 great western hwy,paramatta, Sydney NSW",
          "Bedrooms" => 3,
          "Bathrooms" => 2,
          "Type" => "Apartment",
          "Has Garage" => "Yes",
          "Has Garden" => "No"
        );

        // Output the information in a styled table
        echo '<table border="1" cellpadding="10" cellspacing="0">';
        echo '<tr><th>Feature</th><th>Details</th></tr>';
        foreach ($house as $key => $value) {
          echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo '</table>';
        ?>
      </article>
    </main>

  </div>

  <footer>
    <p>Email: sudeepbaneeya@gmail.com | Phone: 0406 358 036</p>
    <p><a href="https://www.facebook.com/sudip.baneeya/about" target="_blank">My Facebook</a> | Created on: April 2025</p>
  </footer>

</body>
<script>
  const footer = document.querySelector('footer');
  let timer = null;

  const showFooter = () => {
    footer.classList.remove('hidden');
    clearTimeout(timer);
    timer = setTimeout(() => {
      footer.classList.add('hidden');
    }, 3000); // Hide after 3 seconds of no activity
  };

  document.addEventListener('mousemove', showFooter);
  document.addEventListener('scroll', showFooter);
  document.addEventListener('touchstart', showFooter);

  // Start with footer hidden
  window.addEventListener('DOMContentLoaded', () => {
    footer.classList.add('hidden');
  });
</script>

</html>
