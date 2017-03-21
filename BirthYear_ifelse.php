<?php
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

if(isset($_POST['show_sign']) && isset($_POST['year_of_birth'])){
  
  $start_year = 1912;
  $zodiac_year = ($_POST['year_of_birth'] - 1912) % 12;
       
  if($zodiac_year == 0) {
    echo "You were bron under the sign of the Rat";
    echo "<img src='img/zodiac/rat.jpg'>";
  }elseif ($zodiac_year == 1){
    echo "You were bron under the sign of the ox";
    echo "<img src='img/zodiac/ox.jpg'>";
  }elseif ($zodiac_year == 2){
    echo "You were bron under the sign of the tiger";
    echo "<img src='img/zodiac/tiger.jpg'>";
  }elseif ($zodiac_year == 3){
    echo "You were bron under the sign of the rabbit";
    echo "<img src='img/zodiac/rabbit.jpg'>";
  }elseif ($zodiac_year == 4){
    echo "You were bron under the sign of the dragon";
    echo "<img src='img/zodiac/dragon.jpg'>";
  }elseif ($zodiac_year == 5){
    echo "You were bron under the sign of the snake";
    echo "<img src='img/zodiac/snake.jpg'>";
  }elseif ($zodiac_year == 6){
    echo "You were bron under the sign of the horse";
    echo "<img src='img/zodiac/horse.jpg'>";
  }elseif ($zodiac_year == 7){
    echo "You were bron under the sign of the goat";
    echo "<img src='img/zodiac/goat.jpg'>";
  }elseif ($zodiac_year == 8){
    echo "You were bron under the sign of the monkey";
    echo "<img src='img/zodiac/monkey.jpg'>";
  }elseif ($zodiac_year == 9){
    echo "You were bron under the sign of the rooster";
    echo "<img src='img/zodiac/rooster.jpg'>";
  }elseif ($zodiac_year == 10){
    echo "You were bron under the sign of the dog";
    echo "<img src='img/zodiac/dog.jpg'>";
  }elseif ($zodiac_year == 11){
    echo "You were bron under the sign of the pig";
    echo "<img src='img/zodiac/pig.jpg'>";
  }
  $file = fopen("statistics/".$_POST['year_of_birth'].".txt","w");
  fwrite($file,"You are visitor $count to enter ".$_POST['year_of_birth']);
  fclose($file);
  echo "<a href='BirthYear_ifelse.php'>Back</a>";
  
  
}else{
?>
<h1>The Chinese Zodiac</h1>
<h3>Using IF ELSE</h3>
<form action="BirthYear_ifelse.php" method="post">
 <fieldset>
  <legend>Birth Information:</legend>
  Year of birth: <input type="text" name="year_of_birth" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
 </fieldset>
 <fieldset>
  <legend>Reset and Submit Information</legend>
  <button type="submit" value="clear" name="clear">Clear Form</button>
  <button type="submit" balue="show" name="show_sign">Show Me My Sign</button>
  <input type="hidden" name="count" value="<?php echo $count ?>">
 </fieldset>
</form>
  
<?php  
}
?>



