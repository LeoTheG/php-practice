<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <?php require 'main.php'; ?>

</head>
    <body>
        <h1> <?php echo "hello, " . $person['name'] ?>
        <h2> Are you <strong>cool?</strong>: <?php echo $person['cool'] ? 'Yes' : 'No'; ?> </h2>
        <?php if($person['cool']) : ?>
            <h3>Welcome to the cool club</h3>
            <i style="font-size:3em">&#9773</i>
        <?php else : ?>
            <h3>You're not that cool, sorry</h3>
        <?php endif; ?>
    </body>
</html>
