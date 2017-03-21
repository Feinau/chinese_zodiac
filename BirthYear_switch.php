<?php
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

if(isset($_POST['show_sign']) && isset($_POST['year_of_birth'])){
  
  $start_year = 1912;
  $zodiac_year = ($_POST['year_of_birth'] - 1912) % 12;
       
  switch ($zodiac_year) {
    case 0:
      echo "You were bron under the sign of the Rat";
      echo "<img src='img/zodiac/rat.jpg'>";
      break;
    case 1:
      echo "You were bron under the sign of the ox";
      echo "<img src='img/zodiac/ox.jpg'>";
      break;
    case 2:
      echo "You were bron under the sign of the tiger";
      echo "<img src='img/zodiac/tiger.jpg'>";
      break;
    case 3:
      echo "You were bron under the sign of the rabbit";
      echo "<img src='img/zodiac/rabbit.jpg'>";
      break;
    case 4:
      echo "You were bron under the sign of the dragon";
      echo "<img src='img/zodiac/dragon.jpg'>";
      break;
    case 5:
      echo "You were bron under the sign of the snake";
      echo "<img src='img/zodiac/snake.jpg'>";
      break;
    case 6:
      echo "You were bron under the sign of the horse";
      echo "<img src='img/zodiac/horse.jpg'>";
      break;
    case 7:
      echo "You were bron under the sign of the goat";
      echo "<img src='img/zodiac/goat.jpg'>";
      break;
    case 8:
      echo "You were bron under the sign of the monkey";
      echo "<img src='img/zodiac/monkey.jpg'>";
      break;
    case 9:
      echo "You were bron under the sign of the rooster";
      echo "<img src='img/zodiac/rooster.jpg'>";
      break;
    case 10:
      echo "You were bron under the sign of the dog";
      echo "<img src='img/zodiac/dog.jpg'>";
      break;
    case 11:
      echo "You were bron under the sign of the pig";
      echo "<img src='img/zodiac/pig.jpg'>";
      break;
  }
  $file = fopen("statistics/".$_POST['year_of_birth'].".txt","w");
  fwrite($file,"You are visitor $count to enter ".$_POST['year_of_birth']);
  fclose($file);
  echo "<a href='BirthYear_switch.php'>Back</a>";
  
  
}else{
?>
<h1>The Chinese Zodiac</h1>
<h3>Using SWITCH</h3>
<form action="BirthYear_switch.php" method="post">
 <fieldset>
  <legend>Birth Information:</legend>
  Year of birth: <input type="text" name="year_of_birth" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
 </fieldset>
 <fieldset>
  <legend>Reset and Submit Information</legend>
  <button type="submit" value="clear" name="clear">Clear Form</button>
  <button type="submit" balue="show" name="show_sign">Show Me My Sign</button>
 </fieldset>
</form>
  
<?php  
}
?>



