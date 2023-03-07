<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canicanor Works</title>
    <link rel="icon" type="image/x-icon" href="images/fav-icon.png">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/f13e6c5b0d.js" crossorigin="anonymous"></script>
</head>
<body>
<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h2><?= esc($guest_item['name']) ?></h2>

    <p><?= esc($guest_item['comment']) ?></p>

    <?= anchor("guest/" . esc($guest_item['id'], 'url'), "View guest details") ?>
    <?php endforeach ?>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>
<br>
<br>
<p>You can register here! <?= anchor("guest/create", "Register here!") ?></p>
</body>
</html>
