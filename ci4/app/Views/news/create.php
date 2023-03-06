<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/forms.css">


  <title>Document</title>
  <style>
   body{ 
    background-color: #E4DEE4;
   }
   form {
    text-align: center;
    font-size: 30px;
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
      <ul>
        <li><a href="home">Home</a></li>
        <li><a href="w3schools">w3schools</a></li>
        <li><a alt = "home-button" href = "personal profile"> Personal Page </a></li>
      </ul>
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

<form action="/~canicanor/lab3/ci4/public/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title: </label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text: </label>
    <textarea name="body" cols="55" rows="7"><?= set_value('body') ?></textarea>
    <br>

    <input class = "g-btn" type="submit" name="submit" value="Create news item"> 
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