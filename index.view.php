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
  
  <header>

    <ul>
      <?php foreach($person as $key => $val) : ?>
        <li><?= $key ?>:<?= $val ?></li>
      <?php endforeach; ?>
    </ul>

  </header>

</body>
</html>