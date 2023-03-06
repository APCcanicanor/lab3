function myFunction() {
    var txt;
   confirm("You pressed the button")
    document.getElementById("demo").innerHTML = txt;
  }

function btn(){
    document.getElementById("rnum").innerHTML = Math.random();
 } 

 function goBack() {
    window.history.back()
  }

function page() {
    document.getElementById("lnk").innerHTML = 
"The full URL of this page is:<br>" + window.location.href;
}