
    var modallogin = document.getElementById('login1');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modallogin) {
            modallogin.style.display = "none";
        }
    }
    
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    var slideIndexx = 1;
    showSlidess(slideIndexx);
    
    function plusSlides(n) {
      showSlidess(slideIndexx += n);
    }
    
    function currentSlide(n) {
      showSlidess(slideIndexx = n);
    }
    var modal = document.getElementById('myModal');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    function showSlidess(n) {
      var j;
      var slidess = document.getElementsByClassName("mySlidess");
      var dotss = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slidess.length) {slideIndexx = 1}
      if (n < 1) {slideIndexx = slidess.length}
      for (j = 0; j < slidess.length; j++) {
          slidess[j].style.display = "none";
      }
      for (j = 0; j < dotss.length; j++) {
          dotss[j].className = dotss[j].className.replace(" activee", "");
      }
      slidess[slideIndexx-1].style.display = "block";
      dotss[slideIndexx-1].className += " activee";
      captionText.innerHTML = dotss[slideIndexx-1].alt;
    }
    
    
    
    
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    
    
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("mySidenav").style.zIndex = "2";
    
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
     
      document.body.style.backgroundColor = "white";
    }
    
    
    var header = document.getElementById("myTopnav");
    var sticky = header.offsetTop;
    var prevScrollpos = window.pageYOffset;
    document.getElementById("myTopnav").style.zIndex = "1";
    
    
    window.onscroll = function() {
    
    var currentScrollPos = window.pageYOffset;
     if (currentScrollPos !=sticky){
      if (prevScrollpos > currentScrollPos) 
      {
      
        document.getElementById("myTopnav").style.top = "0";
       
      if (window.matchMedia("(max-width: 500px)").matches) {
       document.getElementById("main").style.paddingTop = "66px";
        
    } else {if (window.matchMedia("(max-width: 800px)").matches) {
       document.getElementById("main").style.paddingTop = "116px";
        
    }
      else{document.getElementById("main").style.paddingTop = "0px";
        
      }
    }
      
    
    }   
      
      else {
        document.getElementById("myTopnav").style.top = "-66px";
        
        
        
        
        if (window.matchMedia("(max-width: 500px)").matches) {
       document.getElementById("main").style.paddingTop = "0px";
        
    } else {if (window.matchMedia("(max-width: 800px)").matches) {
       document.getElementById("main").style.paddingTop = "52px";
        
    }
    else{document.getElementById("main").style.paddingTop = "0px";
        }
      
    }
        
        
      }
      prevScrollpos = currentScrollPos;
    }
    
    }
    
    
    var modall = document.getElementById('myModall');
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("captionn");
    img.onclick = function(){
      modall.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modall.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modall) {
        modall.style.display = "none";
      }
    }
    
    
    
    
    function myFunctio(m) {
    var video = document.getElementById("myVideo"+m);
    var btn = document.getElementById("myBtnb"+m);
    
    
      if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
      } else {
        video.pause();
        btn.innerHTML = "Play";
      }
    }
    
    function myFunctionn(y) {
      y.classList.toggle("change");
    }
    
    function myFunction(n) {
      var x = document.getElementById(n);
      
     
     if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
    function lopenNav() {
  document.getElementById("lmyNav").style.height = "100%";
}

function lcloseNav() {
  document.getElementById("lmyNav").style.height = "0%";
}
function mymmFunction() {
  var xm = document.getElementById("mymmSidepanel");
  if (xm.style.width == "250px") {
    xm.style.width = "100px";
    xm.style.height = "auto";
    
  } else {
    xm.style.width = "250px";
    xm.style.height = "100%";
  }
}
    