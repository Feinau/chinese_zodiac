<?php
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

if(isset($_POST['proverb_text'])){
  $txt =  $_POST['proverb_text'];
  
  file_put_contents('proverbs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
  //fwrite($file,  $txt.PHP_EOL, FILE_APPEND | LOCK_EX);
  //fclose($file);
}
?>
<h3>UploadProverb</h3>
<form action="UploadProverb.php" method="post">
 <fieldset>
  <legend>Proverb Text:</legend>
  <textarea name="proverb_text" row="3"></textarea>
 </fieldset>
  <fieldset>
  <legend>Reset and Submit Information</legend>
  <button type="submit" balue="show" name="show_sign">Add Chinese Proverb</button>
 </fieldset>
</form>
  



