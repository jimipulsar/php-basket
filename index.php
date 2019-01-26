<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP BASKET</title>
  </head>
  <body>
    <?php include 'data.php'; ?>
    <?php foreach ($players as $k => $player) { ?>
      <div>
        <h2>Codice giocatore: <?php echo $player['codiceGiocatore'] ?> </h2>
      <ul>
        <li><p>Rimbalzi: <?php echo $player['rimbalzi'] ?></p></li>
        <li><p>Falli: <?php echo $player['falli'] ?></p></li>
        <li><p>Tiri da 2: <?php echo $player['tiriDa2'] ?></p></li>
        <li><p>Tiri da 3: <?php echo $player['tiriDa3'] ?></p></li>
      </ul>
      </div>
    <?php }; ?>
  </body>
</html>
