


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sty.css">
</head>
<body>

<a name="home"></a>
<div class="mmtopnav">
  <button class="mmopenbtn" onclick="mymmFunction()">☰</button>
  
 <div class="mmart" style="font-family: 'Kumar One Outline',red serifs;text-decoration-line:underline;">ART GALLERY</div>

  
    <form action="action_page.php">
      <input type="mmtext" placeholder="Search.." name="search">
      <button class="mmbutton" type="submit"><i class="fa fa-search"></i></button>
    </form>
  
  
  <a href="register.php" onclick="document.getElementById('id01sign').style.display='block'">sign-up</a>
  <a href="login.php" onclick="document.getElementById('login1').style.display='block'">login</a>
</div>



<div id="mymmSidepanel" class="mmsidepanel">
  
  
  <a  href="#home"><i class="fa fa-home"> <div class="mmic" style="position:absolute;top:20px;left:100px; font-size:2vw;"> Home </div></i></a> 
  
  <a href="#contact"><i class="fa fa-envelope"><div class="mmic" style="position:absolute;top:100px;left:100px; font-size:2vw;">   Contact</div></i></a> 
  <a href="#location"><i class="fa fa-globe"><div class="mmic" style="position:absolute;top:180px;left:100px; font-size:2vw;">  Location</div></i></a>
  <a href="#trash"><i class="fa fa-trash"><div class="mmic" style="position:absolute;top:260px;left:100px; font-size:2vw;">  Trash</div></i></a> 
</div>











<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="homepage.php" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  
 <div class="dropdown">
    <button class="dropbtn" style="z-index:2;display:block;padding:18px;color:#999;">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" style="z-index:1;">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
</div>
    
</div>
<div class="topnav" id="myTopnav">
  
  <a href="#" class="home" ><img id="myImg" src="images\i2.png" alt="Northern Lights, Norway" width="100" height="35"></a>
   <div class="search-container">
    <form action="/action_page.php">
      <input type="textsearch"  name="search">
    </form>
  </div>
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  
  <div class="dropdown">
    <button class="dropbtn" >Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" >
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  
 <img src="images\1110024.png" alt="Avatar" class="avatarr"  onclick="lopenNav()" style="position:absolute;top:8px;right:5px;">
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="openNav()">&#9776;</a>
 
</div>


<div id="lmyNav" class="loverlay">
  <a href="javascript:void(0)" class="lclosebtn" onclick="lcloseNav()">&times;</a>
  <div class="loverlay-content">
  
    <br><br><br><br><br><br><br><br>
    <div class="l">
    <a href="login.php" style="font-size:30px;cursor:pointer"  >login</a>
    <div class="limgcontainer">
      
       <img  id="l1"  class="lavtars" src="images\l.png">
    </div>
    
    </div>
   <div class="s">
    
    <a href="register.php" style="font-size:30px;cursor:pointer"  >sign-up</a>
    <div class="limgcontainer">
      
       <img id="s1" class="lavtars" src="images\s1.jpg">
    </div>
    
    </div>
    <div class="a">
     <a href="#">about us</a>
     <div class="limgcontainer">
      
       <img id="a1" class="lavtars" src="images\a.png">
    </div>
     </div>
     <div class="h">
    <a href="#">help</a>
    <div class="limgcontainer">
      
       
      <img id="h1" class="lavtars" src="images\h.png">
      
    </div>
    </div>
    <div class="g">
    <a href="#">General settings</a>
    <div class="limgcontainer">
      
       
      <img id="g1" class="lavtars" src="images\g1.png">
       
    </div>
    </div>
    <div class="w">
    <a href="#">wish list</a>
    <div class="limgcontainer">
      
      <img id="w1" class="lavtars" src="images\w.png">
    
    </div>
    </div>
  </div>
</div>





  
<div id="myModall" class="modall">
  <span class="close">&times;</span>
  

  <img class="modall-content" id="img01">
  <div id="caption"></div>
</div>



<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlidess">
      <div class="numbertext">1 / 3</div>
      <img src="images\i2.png" style="width:100%">
    </div>

    <div class="mySlidess">
      <div class="numbertext">2 / 3</div>
      <img src="images\i3.png" style="width:100%">
    </div>

    <div class="mySlidess">
      <div class="numbertext">3 / 3</div>
      <img src="images\i6.png" style="width:100%">
    </div>
    
    
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>



    <div class="column">
      <img class="demo cursor" src="images\i2.png" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\i3.png" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\i6.png" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    
  </div>
</div>










<div class="content" id="main">


<div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images\i2.png" style="width:100%" onclick="openModal();currentSlide(1)">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images\i3.png" style="width:100%" onclick="openModal();currentSlide(2)">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images\i6.png" style="width:100%" onclick="openModal();currentSlide(3)">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div id="d">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>








  






<div class="row">
  <div class="column">
    <div class="card">
      <img src="images\1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i1')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i1" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images\2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i2')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i2" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images\3.jpg" alt="John" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i3')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">John Doe</h2>
        <div  id="i3" class="com">
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
   <div class="column">
    <div class="card">
      <img src="images\4.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i4')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i4" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <img src="images\5.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i5')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i5" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
      <img src="images\6.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i6')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i6" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="contentt">
  <img src="images\a1.jpg" alt="Bear" style="width:100%">
  </div>




<div class="row">
 <div class="columnb">
  <div class="cardb">
  <img src="images\a2.jpg" alt="Bear" style="width:100%">
 </div></div>




<div class="columnb">
<div class="cardb">
<video autoplay muted loop id="myVideo1" class="myvideo" style="width:100%;">
  <source src="images\v1.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>



<div class="co">
 <button id="myBtnb1" class="myBtnb" onclick="myFunctio(1)">Pause</button>
</div>
</div>
</div>



<div class="column">
    <div class="card">
      <img src="images\7.png" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i7')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i7" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images\8.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i8')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i8" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images\9.jpg" alt="John" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i9')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">John Doe</h2>
        <div  id="i9" class="com">
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
   <div class="column">
    <div class="card">
      <img src="images\10.png" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i10')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i10" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <img src="images\11.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i11')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i11" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images\12.png" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i12')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i12" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>

  
 

<div class="columnb">
<div class="cardb">
<video autoplay muted loop id="myVideo2" class="myvideo" style="width:100%;">
  <source src="images\v2.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="co">
  <button id="myBtnb2" class="myBtnb" onclick="myFunctio(2)">Pause</button>
</div>
</div>
</div>



<div class="column">
    <div class="card">
      <img src="images\13.png" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i13')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i13" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images\14.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i14')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i14" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images\15.png" alt="John" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i15')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">John Doe</h2>
        <div  id="i15" class="com">
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
   <div class="column">
    <div class="card">
      <img src="images\16.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i16')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i16" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <img src="images\17.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i17')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i17" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
      <img src="images\18.png" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i18')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i18" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>


<div class="columnb">
<div class="cardb">
  <img src="images\a3.jpg" alt="Notebook" class="myi" style="width:100%;">
  <div class="co" >
   </div>
</div>
</div>

<div class="columnb">
<div class="cardb">
<video autoplay muted loop id="myVideo3" class="myvideo" style="width:100%;">
  <source src="images\v3.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="co">
  <button id="myBtnb3" class="myBtnb" onclick="myFunctio(3)">Pause</button>
</div>
</div>
</div>


<div class="column">
    <div class="card">
      <img src="images\19.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i19')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i19" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images\20.png" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i20')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i20" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images\21.png" alt="John" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i21')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">John Doe</h2>
        <div  id="i21" class="com">
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
   <div class="column">
    <div class="card">
      <img src="images\22.png" alt="Mike" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i22')"><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
        <h2 style="font-size:3vw;">Mike Ross</h2>
        <div  id="i22" class="com">
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <img src="images\23.png" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i23')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i23" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
      <img src="images\24.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <p><button class="buttton" onclick="myFunction('i24')" ><div class="cont" onclick="myFunctionn(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button></p>
       
       <h2 style="font-size:3vw;">Jane Doe</h2>
       <div  id="i24" class="com">
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        </div>
      </div>
    </div>
  </div>


<div class="columnb">
<div class="cardb">
<div class="imagebgcontainer">
  <div class="textoni">NATURE</div>
</div>
</div>
</div>

<div class="columnb">
<div class="cardb">
<video autoplay muted loop id="myVideo4" class="myvideo" style="width:100%;">
  <source src="images\v4.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="co">
  <button id="myBtnb4" class="myBtnb" onclick="myFunctio(4)">Pause</button>
</div>
</div>
</div>





<div class="columnb">
<div class="cardb">
<video autoplay muted loop id="myVideo5" class="myvideo" style="width:100%;">
  <source src="images\v5.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="co">
  <button id="myBtnb5" class="myBtnb" onclick="myFunctio(5)">Pause</button>
</div>
</div>
</div>

<div class="columnb">
<div class="cardb">
<div class="imagebgcontainer">
  <div class="textoni" style="font-size:5vw;">LOGIN FOR MORE</div>
</div>
</div>
</div>
</div>
</div>



<footer class=" foot">
  <a href="#"><i class="fa fa-facebook-official" style="color:white"></i></a>
  <a href="#"><i class="fa fa-pinterest-p" style="color:white"></i></a>
  <a href="#"><i class="fa fa-twitter" style="color:white"></i></a>
  <a href="#"><i class="fa fa-flickr" style="color:white"></i></a>
  <a href="#"><i class="fa fa-linkedin" style="color:white"></i></a>
  <p class="mdium">
  Powered by <a href="#" style="color:white" target="_blank">art gallery</a>
  </p>
</footer>
<script src="indexj.js"></script>
</body>
</html>
