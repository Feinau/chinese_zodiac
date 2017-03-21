
## Inc footer dynamic content<br>
<?php
echo file('proverbs.txt')[rand(0, count(file('proverbs.txt'))-1)];