<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Practitioner</title>
  <style>
    body {
      background: #E3E3E3;
      padding 2em;
      font-family: 'consolas', 'Courier', 'Arial';
    }
    section {
      display: block;
      margin: auto;
    }
    h1 {
      font-family: 'consolas', 'Courier', 'Arial';
      text-align: center;
    }
    ul {
      list-style-type: none;
    }
    li {
      text-align: left;
      text-decoration: none;
      font-family: 'consolas', 'Courier', 'Arial';
    }
  </style>
</head>
<body>
  
  <section>
  
    <h1>Task For The Day</h1>

    <ul>
      
      <?php foreach($tasks as $task) : ?>
        <li>
          <?php if($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
          <?php else : ?>
            <?= $task->description; ?>
          <?php endif ?>

        </li>
      <?php endforeach ?>

    </ul>

  </section>

</body>
</html>