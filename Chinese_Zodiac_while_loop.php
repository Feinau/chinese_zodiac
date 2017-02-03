<?php
$zodiac_images = array(
    'rat'     => 'img/zodiac/rat.jpg',
    'ox'      => 'img/zodiac/ox.jpg',
    'tiger'   => 'img/zodiac/tiger.jpg',
    'rabbit'  => 'img/zodiac/rabbit.jpg',
    'dragon'  => 'img/zodiac/dragon.jpg',
    'snake'   => 'img/zodiac/snake.jpg',
    'horse'   => 'img/zodiac/horse.jpg',
    'goat'    => 'img/zodiac/goat.jpg',
    'monkey'  => 'img/zodiac/monkey.jpg',
    'rooster' => 'img/zodiac/rooster.jpg',
    'dog'     => 'img/zodiac/dog.jpg',
    'pig'     => 'img/zodiac/pig.jpg',
);
?>
<table class="table">
  <thead>
    <tr>
      <td><img src="<?php echo $zodiac_images['rat'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['ox'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['tiger'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['rabbit'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['dragon'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['snake'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['horse'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['goat'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['monkey'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['rooster'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['dog'] ?>" /></td>
      <td><img src="<?php echo $zodiac_images['pig'] ?>" /></td>
    </tr>
    <tr>
      <td>Rat</td>
      <td>OX</td>
      <td>Tiger</td>
      <td>Rabbit</td>
      <td>Dragon</td>
      <td>Snake</td>
      <td>Horse</td>
      <td>Goat</td>
      <td>Monkey</td>
      <td>Rooster</td>
      <td>Dog</td>
      <td>Pig</td>
    </tr>
  </thead>
  <tbody>
    <?php
    $start_year = 1912;
    while($start_year < 2017):
    ?>
    <tr>
      <?php 
      for($i = 0; $i < 12; $i++):
        $current_year = $start_year + $i;
        echo "<td>".$current_year."</td>";
        if($current_year == 2017){
          break;
        }
      endfor;
      $start_year += 12;
      ?>
    </tr>
    <?php 
    endwhile;
    ?>
  </tbody>
</table>