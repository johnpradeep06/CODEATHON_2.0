<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Eco-Friendly Products</title>
  <style>
    /* General Styling */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background: #ffffff;
      color: #333333;
      scroll-behavior: smooth;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Navigation Bar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 50px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.8);
    }

    .navbar .logo {
      font-size: 1.5em;
      font-weight: bold;
      color: lightgreen;
    }

    /* Hero Section */
    .hero-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 100px 20px;
      background: linear-gradient(135deg, #d0d0f0, #a0a0d0);
      color: #333333;
      height: 550px;
    }

    .hero-text {
      flex: 1;
      padding-right: 20px;
    }

    .hero-text h1 {
      font-size: 3em;
      color: green;
      padding-left: 70px;
    }

    .hero-text p {
      font-size: 1.2em;
      color: #555555;
      margin-top: 10px;
      padding-left: 70px;
    }

    .hero-image {
      flex: 1;
      text-align: center;
    }

    .hero-image img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    /* About Eco Section */
    .about-eco {
      padding: 70px;
      text-align: center;
      background: #f9f9f9;
      color: #333333;
      border-radius: 10px;
      margin: 30px;
      height: 550px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      font-family: 'Georgia', serif;
    }

    .about-eco h2 {
      font-size: 2.5em;
      color: lightgreen;
      margin-top: -50px;
      padding-bottom: 80px;
      transition: color 0.3s;
    }

    .about-eco p {
      font-size: 1.1em;
      margin-top: 10px;
      color: #555555;
      line-height: 1.6;
    }

    .quote {
      display: none;
      font-style: italic;
      color: #66bb6a;
      margin-top: 20px;
      font-size: 1.1em;
    }

    .learn-more {
      margin-top: 20px;
      padding: 10px 30px;
      background: lightgreen;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 1em;
      transition: background 0.3s;
    }

    .learn-more:hover {
      background: #66bb6a;
    }

    /* Blog Section */
    .blog-section {
      text-align: center;
      padding: 50px;
      background: #ffffff;
    }

    .blog-section h2 {
      font-size: 2.5em;
      color: lightgreen;
      text-decoration: none;
      cursor: pointer;
      margin: 10px;
    }

    .blogs {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 30px;
    }

    .blog-post {
      background: #e0f7fa;
      padding: 20px;
      border-radius: 8px;
      width: 280px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
      margin: 10px;
    }

    .blog-post img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }

    .blog-post:hover {
      transform: translateY(-10px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .readMoreBtn {
      margin-top: 15px;
      padding: 8px 20px;
      background: lightgreen;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 0.9em;
      cursor: pointer;
      transition: background 0.3s;
    }

    .readMoreBtn:hover {
      background: #66bb6a;
    }

    /* Expanded Blog Content */
    .expanded-content {
      display: none;
      padding: 20px;
      text-align: left;
      background: #f0f0f0;
      margin: 20px auto;
      width: 80%;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Footer */
    .footer {
      text-align: center;
      padding: 20px;
      background: #102342;
      color: #c0d9e1;
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="logo">EcoWorld</div>
  </nav>

  <!-- Hero Section -->
  <header class="hero-section">
    <div class="hero-text">
      <h1>Make a Difference with <br>Eco-Friendly Products</h1>
      <p>At EcoWorld, we're dedicated to creating a sustainable future. Join us in making conscious choices for a greener planet.</p>
    </div>
    <div class="hero-image">
      <img src="./images/1.jpg" alt="Eco-Friendly Products" style="width: 420px;height : 420px">
    </div>
  </header>

<!-- About Eco-Friendly Products Section -->
<section id="why-eco" class="about-eco" style="display: flex; flex-direction: column; align-items: center;">
  <a href="#why-eco" style="text-decoration: none;">
    <h2 style="text-align: center; margin-bottom: 30px;">Why Choose Eco-Friendly Products?</h2>
  </a>
  <div style="display: flex; align-items: center; width: 100%; max-width: 1000px;">
    <div class="eco-image" style="flex: 1; text-align: center;">
      <img src="/images/eco_image.jpg" alt="Eco-Friendly Image" style="width: 400px;height : 300px; border-radius: 10px;">
    </div>
    <div class="eco-text" style="flex: 2; padding-left: 20px;">
      <p>
        Imagine contributing to a world where natural resources are preserved, pollution is minimized, and ecosystems are thriving.
        By choosing eco-friendly products, you're not just reducing waste—you’re actively supporting a greener and healthier planet.
        Every sustainable choice you make is a step towards a brighter future for the next generations.
        Small changes can make a big impact, so why not start today?
      </p>
      <div style="text-align: center; margin-top: 20px;">
        <button id="learnMoreBtn" class="learn-more">Learn More</button>
      </div>
      <div id="quote" class="quote" style="margin-top: 20px; display: none;">“The Earth is what we all have in common.” – Wendell Berry</div>
    </div>
  </div>
</section>

  <!-- Blog Section -->
  <section id="blogs" class="blog-section">
    <h2 onclick="scrollToBlogs()">Our Blogs</h2>
    <div class="blogs">
      <div class="blog-post">
        <img src="/images/2.jpg" alt="Sustainable Living 101">
        <h3>Sustainable Living 101</h3>
        <p>Learn simple ways to incorporate eco-friendly habits.</p>
        <button class="readMoreBtn" onclick="showContent('sustainableLiving')">Read More</button>
      </div>
      <div class="blog-post">
        <img src="/images/3.png" alt="The Impact of Plastic Waste">
        <h3>The Impact of Plastic Waste</h3>
        <p>Discover how reducing plastic use helps the environment.</p>
        <button class="readMoreBtn" onclick="showContent('plasticWaste')">Read More</button>
      </div>
      <div class="blog-post">
        <img src="/images/4.jpg" alt="Green Energy Solutions">
        <h3>Green Energy Solutions</h3>
        <p>Explore different green energy solutions and how they can.</p>
        <button class="readMoreBtn" onclick="showContent('greenEnergy')">Read More</button>
      </div>
    </div>
  </section>

  <!-- Expanded Blog Content -->
  <!-- Enhanced Expanded Blog Content -->
  <div id="sustainableLiving" class="expanded-content">
    <h3 style="font-size: 1.8em; font-weight: bold; color: #388e3c; text-align: center; padding-bottom: 10px; border-bottom: 2px solid #66bb6a;">Sustainable Living 101</h3>
    <p style="font-size: 1.15em; color: #444444; line-height: 1.8; margin-top: 20px;">
      Sustainable living means making mindful choices to reduce your environmental impact. Start by reducing consumption—only buy what you truly need. Reuse items whenever possible; for example, repurpose glass jars for storage or turn old clothes into reusable bags. Recycle correctly by familiarizing yourself with local guidelines to ensure materials are processed properly.
      Conserve energy by switching to LED bulbs, which use less power and last longer. Unplug devices when not in use to avoid phantom energy drain. Embrace a plant-based diet to reduce your carbon footprint and consider using public transportation or biking to lower emissions. Small, consistent changes can lead to a more sustainable lifestyle, benefiting both you and the planet.
    </p>
  </div>

  <div id="plasticWaste" class="expanded-content">
    <h3 style="font-size: 1.8em; font-weight: bold; color: #388e3c; text-align: center; padding-bottom: 10px; border-bottom: 2px solid #66bb6a;">The Impact of Plastic Waste</h3>
    <p style="font-size: 1.15em; color: #444444; line-height: 1.8; margin-top: 20px;">
      Plastic waste poses a significant threat to our environment, polluting oceans, harming wildlife, and contributing to climate change. Millions of tons of plastic end up in landfills and waterways each year, where they can take hundreds of years to decompose. This pollution disrupts ecosystems, endangers marine life, and ultimately affects human health.
      Reducing plastic use can mitigate these effects. Simple actions, like using reusable bags, bottles, and containers, can significantly decrease plastic consumption. Opt for alternatives such as glass, stainless steel, or bamboo products. Supporting companies that prioritize sustainable packaging also makes a difference. By making conscious choices, we can collectively reduce plastic waste and promote a healthier planet for future generations.
    </p>
  </div>

  <div id="greenEnergy" class="expanded-content">
    <h3 style="font-size: 1.8em; font-weight: bold; color: #388e3c; text-align: center; padding-bottom: 10px; border-bottom: 2px solid #66bb6a;">Green Energy Solutions</h3>
    <p style="font-size: 1.15em; color: #444444; line-height: 1.8; margin-top: 20px;">
      Green energy solutions are vital for reducing our carbon footprint and combating climate change. Solar energy harnesses sunlight through photovoltaic cells, providing a clean and renewable electricity source for homes and businesses. Wind energy utilizes wind turbines to convert wind into electricity, generating power without greenhouse gas emissions. Hydropower captures energy from flowing water, making it a reliable and efficient renewable source. Geothermal energy taps into the Earth's internal heat for heating and electricity, further decreasing reliance on fossil fuels. Additionally, biomass energy converts organic materials into fuel, promoting waste reduction. By adopting these green energy solutions, individuals and communities can significantly lower their carbon emissions, promote sustainability, and contribute to a healthier planet for future generations.
    </p>
  </div>


  <footer class="footer">
    <p>&copy; 2024 EcoWorld | Embrace Sustainable Living</p>
  </footer>

  <script>




    document.querySelector("a[href='#why-eco']").addEventListener("click", function(event) {
      event.preventDefault();
      document.querySelector("#why-eco").scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    });

    document.getElementById("learnMoreBtn").addEventListener("click", function() {
    const quote = document.getElementById("quote");
    quote.style.display = quote.style.display === "none" ? "block" : "none";
  });

    function scrollToBlogs() {
      document.querySelector("#blogs").scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    }

    function showContent(id) {
      document.querySelectorAll(".expanded-content").forEach(function(section) {
        section.style.display = "none";
      });
      document.getElementById(id).style.display = "block";
      document.getElementById(id).scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    }
  </script>
</body>
</html>
