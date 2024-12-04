  <!DOCTYPE html>
  <!-- Coding By CodingNepal - www.codingnepalweb.com -->
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ONE SANTA RITA </title>
      <link rel="stylesheet" href="style.css">
      <!-- Fontawesome Link for Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    </head>
    <style>
      .animated-title {
    font-size: 3rem;
    color: yellow;
    text-transform: uppercase;
    letter-spacing: 5px;
    animation: fadeInSlide 2s ease-out, glow 5s infinite alternate;
  }

  /* Keyframe for fade-in and slide effect */
  @keyframes fadeInSlide {
    0% {
        opacity: 0;
        transform: translateY(50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-text {
    animation: fadeIn 2s ease-out;
  }
  /* Apply background image to body */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: url('santarita.jpg') no-repeat center center fixed;
  background-size: cover;
  color: white; /* Set default text color to white for better contrast */
}

/* Add a dark overlay on the background to ensure text is readable */
body::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
  z-index: -1; /* Place overlay behind the content */
}

/* Navbar text color */
.navbar {
  color: white;
}

/* Make sure text inside the content is readable */
h1, h2, h3, p {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Add text shadow for better readability */
}

/* Navbar links and hover effect */
.all-links a {
  color: white; /* Set navbar links color to white */
  text-decoration: none;
}

.all-links a:hover {
  color: yellow; /* Change color on hover for better interaction */
}
/* Ensure the container takes up enough space */
.homepage {
  position: relative;
}

.animated-title {
  font-size: 60px; /* Adjust font size as needed */
  position: relative;
  font-weight: bold;
}

/* Style for the letter "O" */
.letter-o {
  position: relative;
  display: inline-block;
  width: 90px; /* Adjust to match the font size */
  height: 90px; /* Adjust to match the font size */
  background-image: url('santaritalogo-removebg-preview (1).png');
  background-size: cover;
  background-position: center;
  text-align: center;
  line-height: 70px; /* Center the text vertically */
  color: transparent; /* Hide the letter "O" text */
  top: 10px;
}

/* Style for the rest of the text */
.animated-title span {
  color: inherit; /* Set color for the rest of the text */
  
}







  </style> 
    <body>
  <header>
    <nav class="navbar">
      <h2 class="logo"><a href="#">ONE SANTA RITA</a></h2>
      <input type="checkbox" id="menu-toggler">
      <label for="menu-toggler" id="hamburger-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
        </svg>
      </label>
      <ul class="all-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Categories</a></li>
        <li><a href="#portfolio">Cultural Attraction</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- Content Goes Here -->
</body>


<section class="homepage" id="home">
  <div class="content">
    <div class="text">
      <h1 class="animated-title">
        <span class="letter-o"></span>NE SANTA RITA
      </h1>
      <p class="animate-text">EVERYTHING you need in one SITE</p>
    </div>
    <a href="#services">Discover more</a>
  </div>
</section>


      <section class="services" id="services">
        <h2>WANT TO EXPLORE?</h2>
        <p>Scroll through different categories</p>
        <ul class="cards">
          <li class="card">
          <a href="education.php">
    <img src="school_49dp_C_FILL0_wght400_GRAD0_opsz48.png" alt="img">
</a>

            <h3>EDUCATION & TRAINING</h3>
            <p>Empower your journey with our EDUCATION & TRAINING programs—designed to enhance your skills and open doors to new opportunities, setting you up for success.</p>
          </li>
          <li class="card">
          <a href="fashion.php">
    <img src="apparel_49dp_C_FILL0_wght400_GRAD0_opsz48.png" alt="img">
</a>

            <h3>FASHION & SHOPPING</h3>
            <p>Discover the latest trends and elevate your style with our exclusive collection at FASHION & SHOPPING, where quality meets affordability—shop now and redefine your wardrobe!</p>
          </li>
          <li class="card">
          <a href="food.php">
    <img src="food_bank_49dp_C_FILL0_wght400_GRAD0_opsz48.png" alt="img">
</a>

            <h3>FOOD & DINING</h3>
            <p>Discover the ultimate FOOD & DINING experience—explore our wide selection of delicious meals and premium ingredients, crafted to satisfy your cravings and elevate every dining moment!</p>
          </li>

          <li class="card">
          <a href="motor.php">
    <img src="garage_49dp_C_FILL0_wght400_GRAD0_opsz48.png" alt="img">
</a>

            <h3>AUTOMOTIVE</h3>
            <p>Carry your essentials comfortably with our durable and functional camping backpacks.</p>
          </li>
          
          <li class="card">

            <img src="chapel.png" alt="img">


            <h3> Religious Places</h3>
            <p>Relax and unwind in style with our comfortable and portable camping chairs.</p>
          </li>
          <li class="card">
            <img src="local_gas_station_49dp_C_FILL0_wght400_GRAD0_opsz48.png" alt="img">
            <h3>OIL & GAS</h3>
            <p>Illuminate your campsite with our reliable and energy-efficient camping lights.</p>
          </li>
        </ul>
      </section>

      <section class="portfolio" id="portfolio">
        <h2> Tourist & Culture</h2>
        <p>Experience the beauty of our heritage—where vibrant culture meets unforgettable adventures.</p>
        <ul class="cards">
          <li class="card">
            <img src="ecopark.jpg" alt="img">
            <h3> Eco Park</h3>
            <p>The Santa Rita Eco Park, an almost two-kilometer eco-tourism destination, has set up makeshift Stations of the Cross, to cater to pilgrims and health buffs.</p>
            <i class="fas fa-map-marker-alt"></i>
        <a href="https://maps.app.goo.gl/f3LunW4KjEFHG39F6" target="_blank">View on Google Maps</a>
    </p>


          <li class="card">
            <img src="church.jpg" alt="img">
            <h3>Sta. Rita de Cascia Parish Church</h3>
            <p> The sta rita de casia church was completed in 1835. the church was restored after being buried in lahar due to the pinatubo eruption of 1991.</p>
            <i class="fas fa-map-marker-alt"></i>
        <a href="https://maps.app.goo.gl/wyujs8R8NXMDdRHW6" target="_blank">View on Google Maps</a>
    </p>
</li>


          <li class="card">
    <img src="duman.jpg" alt="img">
    <h3>The Duman Festival</h3>
    <p>Duman Festival, which started in 2002, originated from the tradition of pounding and winnowing unripe glutinous rice (lacatan), and turning it into a light pale gold or green delicacy called duman. The event has attracted local and international tourists. Visitors are urged to wear barrio outfits during the event.</p>
    <p class="location">
        <i class="fas fa-map-marker-alt"></i>
        <a href="https://maps.app.goo.gl/f3LunW4KjEFHG39F6" target="_blank">View on Google Maps</a>
    </p>
</li>

          <li class="card">
            <img src="images/camping-4.jpg" alt="img">
            <h3>Forest Exploration</h3>
            <p>Discover the wonders of lush forests and immerse yourself in nature's beauty.</p>
          </li>
          <li class="card">
            <img src="images/camping-5.jpg" alt="img">
            <h3>RV Camping</h3>
            <p>Experience the freedom of road trips and camping adventures with our RV rentals.</p>
          </li>
          <li class="card">
            <img src="images/camping-6.jpg" alt="img">
            <h3>Desert Camping</h3>
            <p>Embark on a unique desert camping experience and witness stunning landscapes.</p>
          </li>
        </ul>
      </section>

      <section class="about" id="about">
        <h2>About Us</h2>
        <p>Discover our story in providing camping services.</p>
        <div class="row company-info">
          <h3>What is One SantaRita</h3>
          <p>One SantaRita is a comprehensive directory listing specifically designed to serve as a beacon for businesses of all sizes, especially MSMEs, looking to establish a robust online presence. Imagine a Yellow Pages tailored to the unique needs of the Filipino market, where businesses can not only be discovered but also engage with their local community and a broader audience.</p>
        </div>
        <div class="row mission-vision">
          <h3>Introducing One Pampanga: Empowering MSMEs through Online Visibility</h3>
          <p>In a world dominated by digital landscapes, empowering Micro, Small, and Medium Enterprises (MSMEs) with online visibility is more crucial than ever. Enter Project One Philippines, a groundbreaking directory listing that goes beyond the traditional Yellow Pages, offering a localized platform with added features to elevate the online presence of businesses across the archipelago.</p>
          <h3>Our Vision</h3>
          <p>"We envision a Philippines where every business, regardless of size or location, has the opportunity to thrive in the digital age. Project One aspires to be the cornerstone of a vibrant online community, connecting consumers with local businesses and creating a more inclusive and prosperous economy. Our vision is to become the go-to platform that not only revolutionizes online visibility for MSMEs but also fosters a sense of community engagement and support throughout the archipelago."</p>
        </div>
        <div class="row team">
          <h3>Our Team</h3>
          <ul>
            <li>Guen Carlo Gomez - Founder and CEO</li>
            <li>Christine Anne Florendo - Gear Specialist</li>
            <li>Jonnarie Roll - Customer Representative</li>
            
          </ul>
        </div>
      </section>

      <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <p>Reach out to us for any inquiries or feedback.</p>
        <div class="row">
          <div class="col information">
            <div class="contact-details">
              <p><i class="fas fa-map-marker-alt"></i> 293, Zone #2 San Jose, Santa Rita, Pampanga</p>
              <p><i class="fas fa-envelope"></i> info@gguencarlogomez@gmail.com</p>
              <p><i class="fas fa-phone"></i> 0921-795-3236</p>
              <p><i class="fas fa-clock"></i> Monday - Friday: 9:00 AM - 5:00 PM</p>
              <p><i class="fas fa-clock"></i> Saturday: 10:00 AM - 3:00 PM</p>
              <p><i class="fas fa-clock"></i> Sunday: Closed</p>
              <p><i class="fas fa-globe"></i> www.onesantarita.com</p>
            </div>          
          </div>
          <div class="col form">
            <form>
              <input type="text" placeholder="Name*" required>
              <input type="email" placeholder="Email*" required>
              <textarea placeholder="Message*" required></textarea>
              <button id="submit" type="submit">Send Message</button>
            </form>
          </div>
        </div>
      </section>

      <footer>
        <div>
          <span>Copyright © 2024 All Rights Reserved</span>
          <span class="link">
          </span>
        </div>
      </footer>

    </body>
  </html>