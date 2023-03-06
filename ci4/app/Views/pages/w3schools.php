<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canicanor works</title>
    <link rel = "stylesheet" href = "css/w3schools.css">
    <script src="https://kit.fontawesome.com/f13e6c5b0d.js" crossorigin="anonymous"></script>
    <script src = "js/time.js"></script>
    <script src = "js/BUTTON.js"></script>
</head>
<body onload = "realtimeClock()">
<!-- Legit applying everything from w3schools-->
<!-- PART 1 -->
<nav class = "custom-header">
    <input type  ="checkbox" id = "check">
    <label for = "check" class = "checkbtn">
          <i class="fas fa-bars"></i>
    </label>
    <label class = "logo"><a href = #home style = "color: white;">V's</a></label>
    <ul>
        <li><a alt = "home-button" href = "home"> Home </a></li>
        <li><a alt = "home-button" href = "personal profile"> Personal Page </a></li>
    </ul>
</nav>

 

<div class = "container">
    <section class="home-area" id="home">
        <div id="text-part" style = "margin-top: 15%; text-align: center">
            <h1>Progress in W3SCHOOLS page</h1>
            <p style = "font-size: 30px;">as of: </p>
            <div id = "clock"></div>
        </div>
    </section>
    <button onclick = "myFunction()"class = "h-btn">Alert Button</button>
    <p id = "alrt"></p>
    <button onclick = "btn()"class = "h-btn" style = "margin-top: 10px;">Random Number generator</button>
    <p id = "rnum" style = "font-size: 30px;"></p>

    <input type="button" value="Back" onclick="goBack()">

    <button onclick = "page()" style = "margin-top: 10px;">Generate website link</button>
    <p id = "lnk"></p>

    <h1>Click the hyperlink below </h1>

    <a href = "guests">See guests</a> <br>

    <a href = "news/create"> Create smthn</a> <br>

    <a href = "news"> Check out a bunch of news </a> <br>
        </section>
    </div>
<!--
    <h1> This is heading no.1 </h1>
    <h2> This is heading no.2 </h2>
    <h3> This is heading no.3 </h3>
    <p> Is a paragraph</p>
    <p> Is a paragraph</p>
    <p><a href = "https://youtu.be/8fTeNRkZi0A"> Click me </a></p>
    <img src = "https://wallpaperaccess.com/full/5342161.jpg" alt = "eva" width = "104" height = "142"> 

 PART 2 

    <h1> This is a heading (part 2)</h1>

    <p> Is a paragraph 
    <p> This is a <br> paragraph <br> featuring line breaks :D </p>
    <a href = "https://youtu.be/mtoeTzYKyaQ?list=RDAeZxDcjXbzE"> Keshi Supremacy dude </a>
    <img src = "https://www.dictionary.com/e/wp-content/uploads/2018/12/it-is-what-it-is-6.jpg" alt = "meme" width = "500" height = "600">
    
    <p style = "color: red;">This is a red paragraph</p>

    <h1 style = "font-size: 60px;">HEADING 1</h1>
    <h2> BANGER </h2>

 WEEK 3 PART 2 


<h1 style = "font-size: 100px"> WEEK 3 PART 2 </h1>


<h2>This is heading 2</h2>
<p>This is some other text.</p>
<hr>

<p>This is<br>a paragraph<br>with line breaks.</p>

<pre>
    My Bonnie lies over the ocean.
  
    My Bonnie lies over the sea.
  
    My Bonnie lies over the ocean.
  
    Oh, bring back my Bonnie to me.
  </pre>

<p style = "background-color: powderblue"> This is a paragraph </p>
<h1 style="font-family:verdana;">This is a heading</h1>
<p style="font-family:courier;">This is a paragraph.</p>



<b>This text is bold</b>
<strong>This text is important!</strong>
<i>This text is italic</i>
<em>This text is emphasized</em>
<small>This is some smaller text.</small>
<p>Do not forget to buy <mark>milk</mark> today.</p>


<p>Here is a quote from WWF's website:</p>
<blockquote cite="http://www.worldwildlife.org/who/index.html">
For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservation organization, WWF works in nearly 100 countries. At every level, we collaborate with people around the world to develop and deliver innovative solutions that protect communities, wildlife, and the places in which they live.
</blockquote>

<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>




<p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>
<bdo dir="rtl">This text will be written from right to left</bdo>

<h1>HTML Special Character Example</h1>

<h2>An a with a grave accent: a&#768;</h2>
<h1>HTML Special Character Example</h1>
<h2>An o with a circumflex accent: o&#770;</h2>

<p class="center large">This paragraph refers to two classes.</p>
<h1 style="background-color:DodgerBlue;">Hello World</h1>
<p style="background-color:#ffb58a;">Lorem ipsum...</p>
<h1 style="border:2px solid rgba(255, 99, 163, 0.5);">Hello World</h1>

<p alt = "p1">Test out</p>

<section class = "bg">
    <p>THIS IS A PARAGRAPH</p>
</section>

<div class = "pad">
    <p>This is a padding</p>
</div>
-->
 <!--Footer-->
 <footer>
    <div class="footer-content">
        <h3>V's Website</h3>
        <p>Follow us on: </p>
        <ul class="socials">
            <li><a href="#"><a href = "https://www.facebook.com/carlvon.nicanor/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><a href = "https://twitter.com/caii522"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><a href = "https://www.linkedin.com/in/carl-von-nicanor-3754b818b/"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
</footer>
</div>


  
</body>
</html>