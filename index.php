<!DOCTYPE html>
<!-- ICS2O-Unit4-03-PHP-Movie -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This program will tell the user if they are old enough to go to a movie alone, and which ones they are eligible to see.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>My bestie had a website about movies and this is kind of similar so we shall name this website in the honour and memory of my bestie. Nothing happened I just like remembering them.</title>
 
    <!-- The favicon on this page is summoned (displayed) with these lines of code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- Header, more specifically the largest header possible, primarily for visual structural aesthetic. -->
  <?php 
    echo "<h1>A website that will judge whether or not you are capable of going to see certain movies based on your age and the age restrictions of the genre.</h1>";
  ?>

  <!-- Description text about the website that will let the user know what is happening on this website, just in case the title did not sufficiently tell them. -->
  <?php
    echo "<p>This website will judge you. Don't enter if you don't want to be judged because I am feeling like judging and I would not want to make you upset.</p>"
  ?>

  <!-- This form collects the user's celsius. -->
  <form action="./results.php" method="post" target="available-movies">
    <label for="user-age">Input your age.</label>
    <input type="number" id="user-age" step="1" min="0" max="122" placeholder="Age" name="user-age">
    <br>
    <br>
    <input type="submit" value="Available Movies:">
    <br>
    <br>
  </form>

  <!-- this section of the code will tell the user what  -->
  <iframe id="available-movies" name="available-movies">
  </iframe>
</body>
</html>