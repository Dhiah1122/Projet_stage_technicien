<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>One Page CSS Navigation</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  transition: all 500ms ease-out;
  -webkit-transition: all 500ms ease-out;
}

html, body, section, .page {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  transition: all 1s cubic-bezier(.5, -0.005, 0.2, 1) !important;
  -webkit-transition: all 1s cubic-bezier(.5, -0.005, 0.2, 1) !important;
  color: #fff;
  background: #374046;
  overflow: hidden;
}

section {
  width:400%;  
}

.page {
  position: absolute;
}

#p1 {
  left: 0;
}

#p2 {
  left: 100%;
  background: #FF5722;
}

#p3 {
  left: 200%;
  background: #593C1F;
}

#p4 {
  left: 300%;
  background: deeppink;
}

ul {
 position: fixed; 
 z-index: 1;
}
#t1:target .page#p1 {
    transform: translateX(0);
}
#t2:target .page#p2 {
    transform: translateX(-90%);
}
#t3:target .page#p3 {
    transform: translateX(-190%);
}
#t4:target .page#p4 {
    transform: translateX(-290%);
}

#t2:target .page#p1, 
#t3:target .page#p1,
#t4:target .page#p1 {
  background: black;
}

#t2:target .page#p1 .icon, 
#t3:target .page#p1 .icon,
#t4:target .page#p1 .icon {
  -webkit-filter: blur(3px);
  filter: blur(3px);
}

.icon {
  color: #fff;
  font-size: 32px;
  display: block;
}

ul .icon:hover {
  opacity: 0.6;
}

#p1 .icon .title {
  margin-bottom: 20px;
}

#t2:target ul .icon,
#t3:target ul .icon,
#t4:target ul .icon {
  transform: scale(.6); 
  transition-delay: .25s;
}

#t2:target #dos {
  transform: scale(1.2) !important;
}

#t3:target #tres {
  transform: scale(1.2) !important;
}

#t4:target #cuatro {
  transform: scale(1.2) !important;
}

ul {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  /*right: 0;*/
  margin: auto;
  height: 280px;
  width: 10%;
  padding: 0;
  text-align: center;
 }

ul li {
  margin: 30px 0;
}

a {
  text-decoration: none;
  font-family: open sans, sans-serif;
}

.title, .hint {
  font-family: open sans, sans-serif;
  display: block;
}

.title {
  font-size: 38px;
}

.hint {
  font-size: 13px;
}

.hint a {
  color: #EFFF06;
  transition: all 250ms easet-out;
}

.hint a:hover {
  color: #FFF;
}

.page .icon {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 10%;
  left: 0;
  width: 270px;
  height: 170px;
  margin: auto;
  text-align: center;
  font-size: 80px;
  transform: translateX(360%);
  line-height: 1.3;
}

.page#p1 .icon {
  height: 220px;
}

.page#p1 .icon {
  transform: translateX(0) !important;
}

#t2:target .page#p2 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t3:target .page#p3 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

#t4:target .page#p4 .icon {
  transform: translateX(0) !important;
  transition-delay: 1s;
}

.credit{
	position: absolute;
	bottom: 0;
	width: 100%;
	text-align: center;
	font-size: 10px;
}

.credit a {
	color: #fff
}

.box
          {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%,-50%);
              width: 300px;
              height: 400px;
              /*background: #2b313e;*/
              border-radius: 10px;
              box-shadow: 0 5px 15px rgba(0,0,0,.5);
              overflow: hidden;
          }
.box:before
          {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: linear-gradient(0deg,
                  #1e2635 0%,
                  #1e2635 25%,
                  transparent 25%,
                  transparent 50%,
                  #1e2635 50%,
                  #1e2635 75%,
                  transparent 75%,
                  transparent 100%);
              background-size: 200px;
              transition: 0.5s;
               z-index: 2;
              
          }
.box:after
          {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: linear-gradient(0deg,
                  transparent 0%,
                  transparent 25%,
                  #1e2635 25%,
                  #1e2635 50%,
                  transparent 50%,
                  transparent 75%,
                  #1e2635 75%,
                  #1e2635 100%);
              background-size: 200px;
              transition: 0.5s;
               z-index: 2;
          }

.box:hover:before
          {
           left: -100%;
          }
.box:hover:after
          {
           left: 100%;
          }
.box .content
          {
           position: absolute;
              top: 5px;
              left: 5px;
              right: 5px;
              z-index: 1;
              padding: 10px;
              text-align: center;
              border-radius: 6px;
          }
.box .content p
          {
              font-size: 18px;
          }
.box .details
          {
              position: absolute;
              top: 50%; 
              transform: translateY(-50%);
              width: 100%;
              z-index: 3;
              text-align: center;
              transition: 0.5s;
              transition-delay: 0s;
          }

.box .details .image
          {
             width: 150px;
              height: 150px;
              border-radius: 50%;
              overflow: hidden;
              border: 4px solid #fff;
              box-shadow: 0 5px 25px rgba(0,0,0,0.5);
              margin: 0 auto;
          }
.box .details .image img
          {
              width: 100%;
              
          }
.box .details h3
          {
              margin: 20px 0 0;
              padding: 0;
              color: #fff;
              font-size: 24px;
          }
.box .details h3 span
          {
              font-size: 16px;
          }
.box:hover .details
          {
             opacity: 0;
              transition-delay: 0s;
          }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div class="ct" id="t1">
 <div class="ct" id="t2">
   <div class="ct" id="t3">
     <div class="ct" id="t4">
<section>  
 <ul>
   <a href="#t1"><li class="icon fa fa-home" id="uno"></li></a>
   <a href="#t2"><li class="icon fa fa-user-circle" id="dos"></li></a>
   <a href="#t3"><li class="icon fa fa-file-alt" id="tres"></li></a>
   <a href="#t4"><li class="icon fa fa-comment-dots" id="cuatro"></li></a>
 </ul>
  <div class="page" id="p1">
     <span class="hint"><br><br><br>
            <center><h1 style="color: #F7FF83;"> Les Activitées physiques et culturelles </h1>
            </center>
            <h2 style="position: absolute; color: #90FF93; left: 200px;"><b> C'est quoi activité sport </b></h2>
            <br><br><br><br><br>
            <p style="position: absolute; left: 200px;">Le sport est une activité physique qui se réalise de manière organisée avec un cadre, des règles et un système de compétitions.   Exemple : se faire des passes avec un ballon dans le jardin est une activité physique. Respecter un terrain et viser un but correspond davantage à du football (sport). </p>
            <br><br><br><br><br>
            <h2 style="position: absolute; color: crimson; left: 200px;"><b> C'est quoi activité culturelles </b></h2>
            <br><br><br><br>
            <p style="position: absolute;
            left: 200px;">En philosophie, le mot culture désigne ce qui est différent de la nature. La culture a longtemps été considérée comme un trait caractéristique de l'humanité, qui la distinguait des animaux. Néanmoins, des travaux récents en éthologie et en primatologie comparée ont montré l'existence de cultures animales.

En sociologie, la culture est définie de façon plus étroite comme « ce qui est commun à un groupe d'individus » et comme « ce qui le soude », c'est-à-dire ce qui est appris, transmis, produit et créé. Ainsi, pour une institution internationale comme l'UNESCO : « Dans son sens le plus large, la culture peut aujourd’hui être considérée comme l'ensemble des traits distinctifs, spirituels, matériels, intellectuels et affectifs, qui caractérisent une société ou un groupe social. Elle englobe, outre les arts, les lettres et les sciences, les modes de vie, les lois, les systèmes de valeurs, les traditions et les croyances ». Ce « réservoir commun » évolue dans le temps par et dans les formes des échanges. Il se constitue en de multiples manières distinctes d'être, de penser, d'agir et de communiquer en société.
</p></span> 
  </div>
  <div class="page" id="p2">
    <div class="box"><div class="content">
        <p>dhia hhabahceehhfueguiefgeygyihuyg khuyfatc lgle usgylkvhv 
        </p></div>
    <span class="title"></span>
      <div class="details">
          <div class="image">
              <img src="t.jpg"></div>
          <h3>dhia<br><span>hannachi</span></h3>
          </div>
      </div>
    </div>
  <div class="page" id="p3">
    <div style="position: absolute; left: 100px; padding: 30px;"><span class="title" >A Propos</span><br><br><iframe width="853" height="450" src="https://www.youtube.com/embed/k497YP8yiSw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  </div>
  <div class="page" id="p4">
      <a href="mailto:stir@stir.com.tn"><li class="icon fa fa-envelope"><span class="hint">Contacter Nous</span></li></a>
  </div>  
	<p class="credit"> Copyright © 2019 - Tous droits réservés. Développé par<a href="https://www.linkedin.com/in/dhia-hannachi-22116b150/"> Hannachi Dhia</a></p>
</section>
       
     </div>
     </div>
   </div>
  </div>
  
  

</body>

</html>
