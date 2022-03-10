<?php
foreach ($names as $name) {
  echo "<li>$name</li>";
}
 ?>

 <?php foreach ($animals as $animal) : ?>
   <li><?= $animal; ?></li>
 <?php endforeach; ?>
