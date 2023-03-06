<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canicanor Works</title>
    <link rel = "stylesheet" href = "css/persona.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f13e6c5b0d.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class = "custom-header">
        <input type  ="checkbox" id = "check">
        <label for = "check" class = "checkbtn">
              <i class="fas fa-bars"></i>
        </label>
        <label class = "logo"><a href = "home" style = "color: white;">V's</a></label>
        <ul>
            <li><a alt = "home-button" href = "home"> Home </a></li>
            <li><a atl = "about-button" href = "w3schools"> w3schools </a></li>
        </ul>
    </nav>

<!--SECTION 1-->
<div class = "intro-profile-page">
<section class="section1" id="sec1">
    
    <div id = "text">

    </div>
    <script type = "text/javascript">
        var i = 0, text;
        text = "Welcome to profile page"

        function typing() {
            if(i<text.length){
                document.getElementById("text").innerHTML += text.charAt(i);
                i++;
                setTimeout(typing, 120);
            }
        }
        typing();
    </script>
</section>
</div>

<!--Section 2-->
<section id = "sec2">
    <div class = "row">
        <div class = "column left">
    <img src = "images/profilePIC.jpg" class = "avatar">
</div>
<div class = "column right">
    <div class = "profile-intro">

    <h1 style = "font-size: 50px;">About Me</h1>
    <p>
        Hi! My name is Carl Von A. Nicanor 
        you may simply call me Von, I am a student of
        APC, also known as Asia Pacific College, I am currently a sophomore.
    
    </p>
</div>
</div>
</div>
</section>

<!--
<p>
    <img src = "https://scontent.fcrk3-1.fna.fbcdn.net/v/t1.6435-9/68853539_2189609547815924_8807983828145537024_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=174925&_nc_ohc=8nQt7tgB7JUAX9jr9lu&_nc_ht=scontent.fcrk3-1.fna&oh=00_AfALIEei8-6uxfxJ-NJzvCxhnPGXZ_Fi52q6SEfHijsnvQ&oe=63E0B83D" class = "avatar">
Full Name: Nicanor, Carl Von A. <br>

Nickname: Von <br>

Senior High School Graduated From? City the High School is located at<br>

APC itself<br>

Transferee or Second Course?<br>

no<br>

Course: Cyber Security and Forensics<br>

Scholarship? Yes / No If yes, %? Type?<br>

No<br>

Transferee / Second Course?<br>

Continuation of course<br>

Did you choose this course? Yes / No<br>

Yes<br>

Why Yes?<br>

Because I find it fun although it is frustrating it is still fun<br>

If no, what course would you choose?<br>

------<br>

I.T. Experience: Programming / Gaming / Others<br>

Back in SHS bootcamp where we are required to make an app<br>

Last term where we are required to make a website and an algorithm<br>

Hobbies / Interests / libangan:<br>

Playing games and Drawing<br>

Goals in life / pangarap sa buhay:<br>

To become successful in life<br>

What do you expect to learn from this course (Web Programming)?<br>

I expect to learn how to properly do the backend of a website<br>

What do you want to learn to help you in your chosen Major?<br>

Learn other programming languages other than python and java <br>

Any other interesting aspects of your life that you would like to share? <br> 

I enjoy being with my friends and with my special someone because it helps make me feel relaxed and forget all my problems even for just a bit <br> 

Add one or more pictures about yourself and your interests that you would like to share for your introduction.

<div class="tenor-gif-embed" data-postid="20486183" data-share-method="host" data-aspect-ratio="1.78771" data-width="40%"><a href="https://tenor.com/view/gacha-genshin-impact-genshin-gif-20486183">Gacha Genshin Impact GIF</a>from <a href="https://tenor.com/search/gacha-gifs">Gacha GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
<img src = "https://styles.redditmedia.com/t5_12p4l2/styles/communityIcon_v82vpag6lkx91.png"  width = "104" height = "142">
<br> 
I have a gambling addiction when it comes to games like genshin impact, honkai impact and others alike
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
</body>
</html>