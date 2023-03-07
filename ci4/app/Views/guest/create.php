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
        .g-btn {
    background: #584c4c;
    border: 0;
    outline: none;
    padding: 15px 35px;
    color: #fff;
    position: relative;
    font-weight: 500px;
    letter-spacing: 1px;
    cursor: pointer;
    
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
    </nav>
<br>
<br>
<br>
<br>
<br>
<br>
<h2 style = "text-align: center"><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form style = "text-align: center;" action="<?= base_url() . "/guest/create" ?>" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>
    <br>

    <label for="website">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>
    <br>

    <label for="gender">Gender</label>
    <input type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>
    <br>

    <input class = "g-btn" type="submit" name="submit" value="Create Guest Entry"> 
</form> 
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

