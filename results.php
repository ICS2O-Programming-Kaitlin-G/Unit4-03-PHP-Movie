<?php
  $user_age = $_POST["user-age"];
  define("RMOVIE", 18);
  define("PG13MOVIE", 13);
  define("GMOVIE", 10);
?>
<h5>Results:</h5>
<?php
  if ($user_age >= RMOVIE) {
    echo "You can see R rated movies alone.";
  }
  else if ($user_age >= PG13MOVIE) {
    echo "You can see PG-13 rated movies alone.";
  }
  else if ($user_age >= GMOVIE) {
    echo "You can see G rated movies alone.";
  }
  else {
    echo "You cannot see any movies alone.";
  }
?>