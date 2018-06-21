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
      text-align: center;
    }
  </style>
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
      <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>

  </ul>

</body>
</html>