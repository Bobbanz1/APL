<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Task For The Day</h1>
    <ul>
      <li>
        <strong>Name: </strong> <?= $task['title']; ?>
      </li>

      <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
      </li>

      <li>
        <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
      </li>
      <li>
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>
          <span class="icon">&#9989;</span>
        <?php else : ?>
          <span class="icon">Incomplete</span>
        <?php endif; ?>
      </li>
    </ul>
  </body>

</html>
