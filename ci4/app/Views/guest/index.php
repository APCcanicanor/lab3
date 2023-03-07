<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canicanor Works</title>
    <link rel="icon" type="image/x-icon" href="images/fav-icon.png">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/f13e6c5b0d.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #E4DEE4;
        }
    </style>
</head>
<body>
<nav class="custom-header">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="#home" style="color: white;">V's</a></label>
        <ul>
            <li><a href="guest/create">Submit guest logs</a></li>
        </ul>
    </nav>
<br>
<br>
<br>
<br>
<br>
<br>
<div class = "form-section" style = "text-align: center">
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
</div>
<footer style = "position: absolute; bottom: 0;" >
    <div class="footer-content">
        <h3>V's Website</h3>
        <p>Follow us on:</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/carlvon.nicanor/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/caii522"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/carl-von-nicanor-3754b818b/"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
</footer>
</body>
</html>
