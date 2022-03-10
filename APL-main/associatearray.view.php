<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Task For The Day</h1>
    <ul>
  <?php foreach ($task as $key => $feature) : ?>
    <li>
      <strong><?= ucwords($key); ?>: </strong> <?= $feature; ?>
    </li>
  <?php endforeach; ?>
</ul>

  </body>
</html>
