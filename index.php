<!DOCTYPE html>
<!-- 
* INFO/CS 1300
* Fall 2016
* Jeremy Fidock
* Final Project
* Milestone 2
 -->

<html>
  <head>
    <meta charset="utf-8">
    <title>Apple Harvest Festival</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="styles/site.css"> -->
    <link rel="stylesheet" type="text/css" href="styles/bannerStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  </head>
  <body>  
  <!-- call php file to read csv and update html with information -->
  <?php include 'scripts/banner_and_nav.php';?>

    <div id="container">
      <div id="about">
        <h1>Apple Harvest History</h1>
        <p>The 2016 Apple Harvest Festival hosts plenty of apples, local produce, fresh baked goods, family entertainment at every turn, games, rides, prizes and live performances on two stages. Apple Harvest Festival is a great introduction to the rich farm and artist community of Ithaca.  First time visitors can witness a variety of wonderful local entertainment while also visiting the historical outdoor pedestrian shopping mall, The Ithaca Commons.  The pedestrian mall is the epicenter of the festival and the gateway to a nostalgic journey to harvest season fun.</p>
        <p>Over 100 vendors will be selling unique apple varieties, hot apple cider donuts, kettle corn, local farm fresh baked goods and a multitude of around the world specialties. Local farmers are on site selling everything from tasty apple beverages to local pumpkins and of course, apples, apples and more apples. Wineries and cideries have regional beverages available for tasting and purchase.  Kids can visit with the goats and learn how fiber is made with Laughing Goat Fiber Farm.  Looking for quality goods, visit 60 different handcrafting artisans along Cayuga Street at the fall craft show which includes jewelry, ceramics, home decor, body care, specialty gifts, unique sculpture, clothing and so much more.</p>
        <!-- Information taken from the 34th Annual Harvest Festival page 
        http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
      </div>

      <div id="vendors">
        <h1>Vendors</h1>
        <p>This will have a table with vendors and where to find them at Apple Fest</p>
      </div>

      <div id="entertainment">
        <h1>Entertainment</h1>
        <p>This will have a table that acts as a schedule. </p>
      </div>

      <div id="contact_us">
        <h1>Contact Us</h1>
        <p>There will be more information here about how to contact us</p>
      </div>

    </div>
    <footer>
    <!-- And that's the sound of sunshine... -->
    </footer>
  </body>
</html>
