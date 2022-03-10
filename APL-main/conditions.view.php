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
    <?php if ($task['completed']) : ?>
      <h2>New Task</h2>
      <ul>
        <li>
          <strong>Task Name: </strong> <?= $new_tasks['title']; ?>
        </li>

        <li>
          <strong>Due Date: </strong> <?= $new_tasks['due']; ?>
        </li>

        <li>
          <strong>Personal Responsible: </strong> <?= $new_tasks['assigned_to']; ?>
        </li>
        <li>
          <?php if ($new_tasks['completed']) : ?>
            <span class="icon">&#9989;</span>
          <?php else : ?>
            <span class="icon">Incomplete</span>
          <?php endif; ?>
        </li>
      </ul>
    <?php endif; ?>

  </body>

</html>
