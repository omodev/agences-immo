<?php

/* AGPlatformBundle:Agence:layoutheader.html.twig */
class __TwigTemplate_2b3fe4c3f88f05db0ebabb038c03ba2fd479d7ba5674d35c4b542b2f85b75af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'offset' => array($this, 'block_offset'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57fa0c13113fa0dca2631d63aa2a1ae0f8a7fc3aed34935692925dd33158dcd5 = $this->env->getExtension("native_profiler");
        $__internal_57fa0c13113fa0dca2631d63aa2a1ae0f8a7fc3aed34935692925dd33158dcd5->enter($__internal_57fa0c13113fa0dca2631d63aa2a1ae0f8a7fc3aed34935692925dd33158dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:layoutheader.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 529
        echo "
  ";
        // line 530
        $this->displayBlock('javascripts', $context, $blocks);
        // line 556
        echo "</head>

<body>

  <div class=\"header navbar-fixed-top\">
<h1 class=\"header_logo\"><a href=\"";
        // line 561
        echo $this->env->getExtension('routing')->getPath("ag_platform_home");
        echo "\">IMMOBILIA <i class=\"fa fa-home\" aria-hidden=\"true\"></i></a></h1>
";
        // line 562
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 563
            echo "
                <a href=\"";
            // line 564
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"  class=\"ofbutton ofbutton-blue lg\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                  <span class=\"logout\">  Logout </span>

                </a>
                ";
        }
        // line 570
        echo "</div>
</div>

<div class=\"offset\">
";
        // line 574
        $this->displayBlock('offset', $context, $blocks);
        // line 578
        echo "
</div>


</html>
";
        
        $__internal_57fa0c13113fa0dca2631d63aa2a1ae0f8a7fc3aed34935692925dd33158dcd5->leave($__internal_57fa0c13113fa0dca2631d63aa2a1ae0f8a7fc3aed34935692925dd33158dcd5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d71eea576a8c7787ba8233cc9ef49dfeb9bb6805ab6e03d3b27b92a748d781ce = $this->env->getExtension("native_profiler");
        $__internal_d71eea576a8c7787ba8233cc9ef49dfeb9bb6805ab6e03d3b27b92a748d781ce->enter($__internal_d71eea576a8c7787ba8233cc9ef49dfeb9bb6805ab6e03d3b27b92a748d781ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IMMOBILIA|";
        
        $__internal_d71eea576a8c7787ba8233cc9ef49dfeb9bb6805ab6e03d3b27b92a748d781ce->leave($__internal_d71eea576a8c7787ba8233cc9ef49dfeb9bb6805ab6e03d3b27b92a748d781ce_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ec954208f35d5c6a88cf61708f1daf90dca22bb6f934279ea30a1bf652b43a7 = $this->env->getExtension("native_profiler");
        $__internal_4ec954208f35d5c6a88cf61708f1daf90dca22bb6f934279ea30a1bf652b43a7->enter($__internal_4ec954208f35d5c6a88cf61708f1daf90dca22bb6f934279ea30a1bf652b43a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css\">
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Dancing+Script\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.css\">


    <style>
    @import url(//fonts.googleapis.com/css?family=Nova+Flat);
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);
    @import url(https://fonts.googleapis.com/css?family=Righteous);
    @import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300);
@import url(http://weloveiconfonts.com/api/?family=entypo);
@import url(https://fonts.googleapis.com/css?family=Courgette|Oswald);
a[class*=\"entypo-\"]:before {
 font-family: 'entypo', sans-serif;
}

body {

 background-color:#22313F ;
}

.offset {
 margin-top: 0;
 padding-top: 270px;
 text-align: center;
 -webkit-transition: .3s;
 transition: .3s;
 opacity:0.3 ;
}

.header {
 position: fixed;
 width: 100%;
 height: 120px;
 font-weight: bold;
 text-align: center;
 background: #6C7A89;
 -webkit-transition: .3s;
 transition: .3s;

}

.header.small {
 height: 50px;
 box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
 opacity:0.8 ;
}

.header.small ~ .offset {
 padding-top: 140px;
 opacity:0.9 ;

}

.header.small .header_logo {
 font-size: 30px;
 text-shadow: 3px 4px rgba(10, 10, 10, 0.4);
 margin-left: -1200px;
 margin-top: 11px;
 opacity:0.8 ;
}

.header_logo {
 font-family: 'Oswald', sans-serif;
 font-size: 70px;
 text-shadow: 3px 4px rgba(10, 10, 10, 0.4);
 -webkit-transition: .3s;
 transition: .3s;
 color: #fff;
 margin-left: -1010px;

    }
 .no-js #loader {
  display: none;
}

.js #loader {
  display: block;
  position: absolute;
  left: 100px;
  top: 0;
}

h2 {
  font-family: 'Oswald', sans-serif;
  font-size: 50px;
  text-shadow: 3px 4px rgba(10, 10, 10, 0.4);
  -webkit-transition: .3s;
  transition: .3s;
}
a:link {
  text-decoration: none;
  color: #fff;
}

a:visited {
  text-decoration: none;
  color: #fff;
}

a:hover {
  text-decoration: none;
  color: #fff;
}

a:active {
  text-decoration: none;
  color: #fff;
}
a {
  text-decoration: none;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.containerr {
  height: 3em;
  left: 50%;
  top: 50%;
  width: 12em;
  margin-top: 1500px;
  margin-left: 1100px;
}

h3 {
  color: black;
  font-size: 17px;
  font-family: Dancing script;
  margin-left: 150px;
}
.intro-divider{


    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);

}
.fa {
 color:black ;
}
.fa-times{
color:#d35400 ;
font-size:40px ;
}
.fa-pencil-square-o{
 color:#27ae60 ;
 font-size:40px ;
}
.fa-cart-plus{
color: #2980b9;
font-size:40px ;
}
.fa-home {
  color: #fff ;
   font-size:100px ;

}
.fa-tree {
  color: #fff ;
   font-size:300px ;

}
.fa-thumbs-o-up{
  color: #fff ;
   font-size:300px ;

}
.fa-cube {
  color: #fff ;
   font-size:300px ;

}
header.carousel {
    height: 85%;
}

header.carousel .item,
header.carousel .item.active,
header.carousel .carousel-inner {
    height: 100%;
}

header.carousel .fill {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    opacity: 1;
}

/* 404 Page Styles */

.error-404 {
    font-size: 100px;
}

/* Pricing Page Styles */

.price {
    display: block;
    font-size: 50px;
    line-height: 50px;
}

.price sup {
    top: -20px;
    left: 2px;
    font-size: 20px;
}

.period {
    display: block;
    font-style: italic;
}

/* Footer Styles */

footer {
    margin: 50px 0;
}

/* Responsive Styles */

@media(max-width:991px) {
    .customer-img,
    .img-related {
        margin-bottom: 30px;
    }
}

@media(max-width:767px) {
    .img-portfolio {
        margin-bottom: 15px;
    }

    header.carousel .carousel {
        height: 50%;
    }
}


.sectiona {
  background-color: #6C7A89 ;
  width: 100%;
  background-attachment: fixed;
}


.sectionb { background: #22313F;  width: 100%;}


.facontainer {
  width: auto;
  text-align: center;
  padding: 20px;
  position: relative;
}



 .facontainer a {color: #000;
  -webkit-transition: all 0.2s ease; /* Safari compatibility */
\ttransition: all 0.2s ease; /* not recognised in IE9 and below */}
.facontainer a:hover {color: #87d0b0;
  \t-webkit-transition: all 0.2s ease; /* Safari compatibility */
\ttransition: all 0.2s ease; /* not recognised in IE9 and below */}

.facontainer h2 {
    color: #FFF;
    text-align: center;
    margin-bottom: 26px;
    line-height: 60px;
    font-size: 56px;
    margin-bottom: 20px;
    letter-spacing: -2px;
    color: #000;
   font-family: \"Roboto\",sans-serif;
}

.facontainer p {
    color: #000;
    text-align: center;
    font-size: 18px;
    width: 80%;
    margin: 20px auto;
    line-height: 24px;
   font: 14px/24px \"Roboto\",sans-serif;
}

.facontainer i {
    background: #45906F;
    border-radius: 50%;
    margin-bottom: 10px;
    width: 90px;
    height: 90px;
    padding: 15px;
}

.facontainer li {
  color: #000;
  display: inline-block;
  font-size: 60px;
}

.facontainer li:hover {
  color: #006237;
}


#owl-demo {background:#F1A9A0;}

    #owl-demo .item{
    display: block;
    padding: 54px 0px;
    margin: 5px;
    color: #000;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
    }
    #owl-demo .left{
    text-align: left;
    margin-bottom: 10px;
    }
    #owl-demo .left .btn {
    display: block;
    }
#owl-demo h2 {
font: 600 24px/28px \"Open Sans\",sans-serif;
color: #99BF38;
}

#owl-demo p {
  font: italic 300 24px/28px \"Open Sans\",sans-serif;
  color: #2B3A42;
}
.page-header {
font-family: 'Nova Flat';
font-size: 50px;
transition: .3s;
color: #fff;
}
.ville {
font-family: 'Nova Flat';
font-size: 50px;
transition: .3s;
color: #fff;
}
.ofbutton {
  margin-top: 10px;
  margin-right: 10px;
  padding: 14px 26px;
  font-size: 30px;
  line-height: 100%;
  text-shadow: 0 1px rgba(0, 0, 0, 0.4);
  color: #fff;
  display:inline-block;
  vertical-align: middle;
  text-align: center;
  cursor: pointer;
  font-weight: bold;
  transition: background 0.1s ease-in-out;
  -webkit-transition: background 0.1s ease-in-out;
  -moz-transition: background 0.1s ease-in-out;
  -ms-transition: background 0.1s ease-in-out;
  -o-transition: background 0.1s ease-in-out;
  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
  color: #fff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.ofbutton:active {
  padding-top: 15px;
  margin-bottom: -1px;
}
.ofbutton, .ofbutton:hover, .ofbutton:active {
  outline: 0 none;
  text-decoration: none;
  color: #fff;
}


.ofbutton-blue {
  background-color: #81CFE0;
  box-shadow: 0px 7px 0px 0px #3293ba;
}
.ofbutton-blue:hover {
  background-color: #59ABE3;
}
.ofbutton-blue:active {
  box-shadow: 0px 1px 0px 0px #3293ba;
}
div.stage {
  width: 400px;
  margin-left: auto;
  margin-right: auto;
}

div.stage svg {
  visibility: hidden;
}

svg:not(:root) { overflow: hidden; }


.intro {
font-family: 'Nova Flat';
font-size: 50px;
transition: .3s;
color: #fff;

}
.fa-hand-o-down{
color:#C1C1C1 ;
}
.ver2{
font-size: 30px;
color: #fff;
 text-shadow: 3px 2px rgba(10, 10, 10, 0.4);
 padding-top: 40px ;
}
.fa-search{
color:#fff ;
}
.fa-cart-arrow-down{
color:#fff ;
}
.fa-bar-chart{
color:#fff ;
}
th{
font-family: IMPACT, sans-serif;
text-shadow: 2px 1px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
color: #C1C1C1;
}
td{
font-family:'Oswald', sans-serif;
text-shadow: 2px 1px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
color: #fff;
}
.login-label {

text-align:center;

font:20px \"Nova Flat\" ;
color: #fff;


}

.login-header{

font-family: 'Nova Flat';
font-size: 50px;
transition: .3s;
color: #fff;

}
.copyr{

font-family: 'Nova Flat';
font-size: 20px;
color: #fff;

}
.bd-ra {
color: #fff;
}
.l{
font-size:30px ;
}
.fa-angle-left{
color:#ea6153 ;
font-size:40px ;
}
.logout {
color:#ea6153 ;

}
.lg{
     margin-top:-70px ;
     margin-left:1000px ;
}
.lgg{
font-family: 'Nova Flat';
font-size: 30px;
transition: .3s;
color: #fff;
}
.fa-lock{
font-size: 30px;
transition: .3s;
color: #fff;
}
.fa-user{
font-size: 30px;
transition: .3s;
color: #fff;

}
</style>
  ";
        
        $__internal_4ec954208f35d5c6a88cf61708f1daf90dca22bb6f934279ea30a1bf652b43a7->leave($__internal_4ec954208f35d5c6a88cf61708f1daf90dca22bb6f934279ea30a1bf652b43a7_prof);

    }

    // line 530
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c3e2071e0cb920e5978cc35f8a8671e716befe8f066ddd3fb5d0b77b8262d2f = $this->env->getExtension("native_profiler");
        $__internal_2c3e2071e0cb920e5978cc35f8a8671e716befe8f066ddd3fb5d0b77b8262d2f->enter($__internal_2c3e2071e0cb920e5978cc35f8a8671e716befe8f066ddd3fb5d0b77b8262d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 531
        echo "    ";
        // line 532
        echo "    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.0/wow.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js\"></script>


    <script>
    \$(document).scroll(function() {
navbarScroll();
});

function navbarScroll() {
var y = window.scrollY;
if (y > 10) {
 \$('.header').addClass('small');
} else if (y < 10) {
 \$('.header').removeClass('small');
}
}
     </script>
  ";
        
        $__internal_2c3e2071e0cb920e5978cc35f8a8671e716befe8f066ddd3fb5d0b77b8262d2f->leave($__internal_2c3e2071e0cb920e5978cc35f8a8671e716befe8f066ddd3fb5d0b77b8262d2f_prof);

    }

    // line 574
    public function block_offset($context, array $blocks = array())
    {
        $__internal_51981d7d62de33a14efd8afcaf643d91ecc2204b75c155b0f5eddff8b3ef292d = $this->env->getExtension("native_profiler");
        $__internal_51981d7d62de33a14efd8afcaf643d91ecc2204b75c155b0f5eddff8b3ef292d->enter($__internal_51981d7d62de33a14efd8afcaf643d91ecc2204b75c155b0f5eddff8b3ef292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 575
        echo "

";
        
        $__internal_51981d7d62de33a14efd8afcaf643d91ecc2204b75c155b0f5eddff8b3ef292d->leave($__internal_51981d7d62de33a14efd8afcaf643d91ecc2204b75c155b0f5eddff8b3ef292d_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:layoutheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 575,  671 => 574,  641 => 532,  639 => 531,  633 => 530,  110 => 12,  104 => 11,  92 => 9,  80 => 578,  78 => 574,  72 => 570,  63 => 564,  60 => 563,  58 => 562,  54 => 561,  47 => 556,  45 => 530,  42 => 529,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout1.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}IMMOBILIA|{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/* */
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*       <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css">*/
/*     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">*/
/*     <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Dancing+Script">*/
/*       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css">*/
/*       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.css">*/
/* */
/* */
/*     <style>*/
/*     @import url(//fonts.googleapis.com/css?family=Nova+Flat);*/
/*     @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);*/
/*     @import url(https://fonts.googleapis.com/css?family=Righteous);*/
/*     @import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300);*/
/* @import url(http://weloveiconfonts.com/api/?family=entypo);*/
/* @import url(https://fonts.googleapis.com/css?family=Courgette|Oswald);*/
/* a[class*="entypo-"]:before {*/
/*  font-family: 'entypo', sans-serif;*/
/* }*/
/* */
/* body {*/
/* */
/*  background-color:#22313F ;*/
/* }*/
/* */
/* .offset {*/
/*  margin-top: 0;*/
/*  padding-top: 270px;*/
/*  text-align: center;*/
/*  -webkit-transition: .3s;*/
/*  transition: .3s;*/
/*  opacity:0.3 ;*/
/* }*/
/* */
/* .header {*/
/*  position: fixed;*/
/*  width: 100%;*/
/*  height: 120px;*/
/*  font-weight: bold;*/
/*  text-align: center;*/
/*  background: #6C7A89;*/
/*  -webkit-transition: .3s;*/
/*  transition: .3s;*/
/* */
/* }*/
/* */
/* .header.small {*/
/*  height: 50px;*/
/*  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);*/
/*  opacity:0.8 ;*/
/* }*/
/* */
/* .header.small ~ .offset {*/
/*  padding-top: 140px;*/
/*  opacity:0.9 ;*/
/* */
/* }*/
/* */
/* .header.small .header_logo {*/
/*  font-size: 30px;*/
/*  text-shadow: 3px 4px rgba(10, 10, 10, 0.4);*/
/*  margin-left: -1200px;*/
/*  margin-top: 11px;*/
/*  opacity:0.8 ;*/
/* }*/
/* */
/* .header_logo {*/
/*  font-family: 'Oswald', sans-serif;*/
/*  font-size: 70px;*/
/*  text-shadow: 3px 4px rgba(10, 10, 10, 0.4);*/
/*  -webkit-transition: .3s;*/
/*  transition: .3s;*/
/*  color: #fff;*/
/*  margin-left: -1010px;*/
/* */
/*     }*/
/*  .no-js #loader {*/
/*   display: none;*/
/* }*/
/* */
/* .js #loader {*/
/*   display: block;*/
/*   position: absolute;*/
/*   left: 100px;*/
/*   top: 0;*/
/* }*/
/* */
/* h2 {*/
/*   font-family: 'Oswald', sans-serif;*/
/*   font-size: 50px;*/
/*   text-shadow: 3px 4px rgba(10, 10, 10, 0.4);*/
/*   -webkit-transition: .3s;*/
/*   transition: .3s;*/
/* }*/
/* a:link {*/
/*   text-decoration: none;*/
/*   color: #fff;*/
/* }*/
/* */
/* a:visited {*/
/*   text-decoration: none;*/
/*   color: #fff;*/
/* }*/
/* */
/* a:hover {*/
/*   text-decoration: none;*/
/*   color: #fff;*/
/* }*/
/* */
/* a:active {*/
/*   text-decoration: none;*/
/*   color: #fff;*/
/* }*/
/* a {*/
/*   text-decoration: none;*/
/* }*/
/* */
/* ul {*/
/*   list-style: none;*/
/*   margin: 0;*/
/*   padding: 0;*/
/* }*/
/* */
/* .containerr {*/
/*   height: 3em;*/
/*   left: 50%;*/
/*   top: 50%;*/
/*   width: 12em;*/
/*   margin-top: 1500px;*/
/*   margin-left: 1100px;*/
/* }*/
/* */
/* h3 {*/
/*   color: black;*/
/*   font-size: 17px;*/
/*   font-family: Dancing script;*/
/*   margin-left: 150px;*/
/* }*/
/* .intro-divider{*/
/* */
/* */
/*     border-top: 1px solid #f8f8f8;*/
/*     border-bottom: 1px solid rgba(0,0,0,0.2);*/
/* */
/* }*/
/* .fa {*/
/*  color:black ;*/
/* }*/
/* .fa-times{*/
/* color:#d35400 ;*/
/* font-size:40px ;*/
/* }*/
/* .fa-pencil-square-o{*/
/*  color:#27ae60 ;*/
/*  font-size:40px ;*/
/* }*/
/* .fa-cart-plus{*/
/* color: #2980b9;*/
/* font-size:40px ;*/
/* }*/
/* .fa-home {*/
/*   color: #fff ;*/
/*    font-size:100px ;*/
/* */
/* }*/
/* .fa-tree {*/
/*   color: #fff ;*/
/*    font-size:300px ;*/
/* */
/* }*/
/* .fa-thumbs-o-up{*/
/*   color: #fff ;*/
/*    font-size:300px ;*/
/* */
/* }*/
/* .fa-cube {*/
/*   color: #fff ;*/
/*    font-size:300px ;*/
/* */
/* }*/
/* header.carousel {*/
/*     height: 85%;*/
/* }*/
/* */
/* header.carousel .item,*/
/* header.carousel .item.active,*/
/* header.carousel .carousel-inner {*/
/*     height: 100%;*/
/* }*/
/* */
/* header.carousel .fill {*/
/*     width: 100%;*/
/*     height: 100%;*/
/*     background-position: center;*/
/*     background-size: cover;*/
/*     opacity: 1;*/
/* }*/
/* */
/* /* 404 Page Styles *//* */
/* */
/* .error-404 {*/
/*     font-size: 100px;*/
/* }*/
/* */
/* /* Pricing Page Styles *//* */
/* */
/* .price {*/
/*     display: block;*/
/*     font-size: 50px;*/
/*     line-height: 50px;*/
/* }*/
/* */
/* .price sup {*/
/*     top: -20px;*/
/*     left: 2px;*/
/*     font-size: 20px;*/
/* }*/
/* */
/* .period {*/
/*     display: block;*/
/*     font-style: italic;*/
/* }*/
/* */
/* /* Footer Styles *//* */
/* */
/* footer {*/
/*     margin: 50px 0;*/
/* }*/
/* */
/* /* Responsive Styles *//* */
/* */
/* @media(max-width:991px) {*/
/*     .customer-img,*/
/*     .img-related {*/
/*         margin-bottom: 30px;*/
/*     }*/
/* }*/
/* */
/* @media(max-width:767px) {*/
/*     .img-portfolio {*/
/*         margin-bottom: 15px;*/
/*     }*/
/* */
/*     header.carousel .carousel {*/
/*         height: 50%;*/
/*     }*/
/* }*/
/* */
/* */
/* .sectiona {*/
/*   background-color: #6C7A89 ;*/
/*   width: 100%;*/
/*   background-attachment: fixed;*/
/* }*/
/* */
/* */
/* .sectionb { background: #22313F;  width: 100%;}*/
/* */
/* */
/* .facontainer {*/
/*   width: auto;*/
/*   text-align: center;*/
/*   padding: 20px;*/
/*   position: relative;*/
/* }*/
/* */
/* */
/* */
/*  .facontainer a {color: #000;*/
/*   -webkit-transition: all 0.2s ease; /* Safari compatibility *//* */
/* 	transition: all 0.2s ease; /* not recognised in IE9 and below *//* }*/
/* .facontainer a:hover {color: #87d0b0;*/
/*   	-webkit-transition: all 0.2s ease; /* Safari compatibility *//* */
/* 	transition: all 0.2s ease; /* not recognised in IE9 and below *//* }*/
/* */
/* .facontainer h2 {*/
/*     color: #FFF;*/
/*     text-align: center;*/
/*     margin-bottom: 26px;*/
/*     line-height: 60px;*/
/*     font-size: 56px;*/
/*     margin-bottom: 20px;*/
/*     letter-spacing: -2px;*/
/*     color: #000;*/
/*    font-family: "Roboto",sans-serif;*/
/* }*/
/* */
/* .facontainer p {*/
/*     color: #000;*/
/*     text-align: center;*/
/*     font-size: 18px;*/
/*     width: 80%;*/
/*     margin: 20px auto;*/
/*     line-height: 24px;*/
/*    font: 14px/24px "Roboto",sans-serif;*/
/* }*/
/* */
/* .facontainer i {*/
/*     background: #45906F;*/
/*     border-radius: 50%;*/
/*     margin-bottom: 10px;*/
/*     width: 90px;*/
/*     height: 90px;*/
/*     padding: 15px;*/
/* }*/
/* */
/* .facontainer li {*/
/*   color: #000;*/
/*   display: inline-block;*/
/*   font-size: 60px;*/
/* }*/
/* */
/* .facontainer li:hover {*/
/*   color: #006237;*/
/* }*/
/* */
/* */
/* #owl-demo {background:#F1A9A0;}*/
/* */
/*     #owl-demo .item{*/
/*     display: block;*/
/*     padding: 54px 0px;*/
/*     margin: 5px;*/
/*     color: #000;*/
/*     -webkit-border-radius: 3px;*/
/*     -moz-border-radius: 3px;*/
/*     border-radius: 3px;*/
/*     text-align: center;*/
/*     }*/
/*     #owl-demo .left{*/
/*     text-align: left;*/
/*     margin-bottom: 10px;*/
/*     }*/
/*     #owl-demo .left .btn {*/
/*     display: block;*/
/*     }*/
/* #owl-demo h2 {*/
/* font: 600 24px/28px "Open Sans",sans-serif;*/
/* color: #99BF38;*/
/* }*/
/* */
/* #owl-demo p {*/
/*   font: italic 300 24px/28px "Open Sans",sans-serif;*/
/*   color: #2B3A42;*/
/* }*/
/* .page-header {*/
/* font-family: 'Nova Flat';*/
/* font-size: 50px;*/
/* transition: .3s;*/
/* color: #fff;*/
/* }*/
/* .ville {*/
/* font-family: 'Nova Flat';*/
/* font-size: 50px;*/
/* transition: .3s;*/
/* color: #fff;*/
/* }*/
/* .ofbutton {*/
/*   margin-top: 10px;*/
/*   margin-right: 10px;*/
/*   padding: 14px 26px;*/
/*   font-size: 30px;*/
/*   line-height: 100%;*/
/*   text-shadow: 0 1px rgba(0, 0, 0, 0.4);*/
/*   color: #fff;*/
/*   display:inline-block;*/
/*   vertical-align: middle;*/
/*   text-align: center;*/
/*   cursor: pointer;*/
/*   font-weight: bold;*/
/*   transition: background 0.1s ease-in-out;*/
/*   -webkit-transition: background 0.1s ease-in-out;*/
/*   -moz-transition: background 0.1s ease-in-out;*/
/*   -ms-transition: background 0.1s ease-in-out;*/
/*   -o-transition: background 0.1s ease-in-out;*/
/*   text-shadow: 0 1px rgba(0, 0, 0, 0.3);*/
/*   color: #fff;*/
/*   -webkit-border-radius: 3px;*/
/*   -moz-border-radius: 3px;*/
/*   border-radius: 3px;*/
/* }*/
/* .ofbutton:active {*/
/*   padding-top: 15px;*/
/*   margin-bottom: -1px;*/
/* }*/
/* .ofbutton, .ofbutton:hover, .ofbutton:active {*/
/*   outline: 0 none;*/
/*   text-decoration: none;*/
/*   color: #fff;*/
/* }*/
/* */
/* */
/* .ofbutton-blue {*/
/*   background-color: #81CFE0;*/
/*   box-shadow: 0px 7px 0px 0px #3293ba;*/
/* }*/
/* .ofbutton-blue:hover {*/
/*   background-color: #59ABE3;*/
/* }*/
/* .ofbutton-blue:active {*/
/*   box-shadow: 0px 1px 0px 0px #3293ba;*/
/* }*/
/* div.stage {*/
/*   width: 400px;*/
/*   margin-left: auto;*/
/*   margin-right: auto;*/
/* }*/
/* */
/* div.stage svg {*/
/*   visibility: hidden;*/
/* }*/
/* */
/* svg:not(:root) { overflow: hidden; }*/
/* */
/* */
/* .intro {*/
/* font-family: 'Nova Flat';*/
/* font-size: 50px;*/
/* transition: .3s;*/
/* color: #fff;*/
/* */
/* }*/
/* .fa-hand-o-down{*/
/* color:#C1C1C1 ;*/
/* }*/
/* .ver2{*/
/* font-size: 30px;*/
/* color: #fff;*/
/*  text-shadow: 3px 2px rgba(10, 10, 10, 0.4);*/
/*  padding-top: 40px ;*/
/* }*/
/* .fa-search{*/
/* color:#fff ;*/
/* }*/
/* .fa-cart-arrow-down{*/
/* color:#fff ;*/
/* }*/
/* .fa-bar-chart{*/
/* color:#fff ;*/
/* }*/
/* th{*/
/* font-family: IMPACT, sans-serif;*/
/* text-shadow: 2px 1px rgba(10, 10, 10, 0.4);*/
/* -webkit-transition: .3s;*/
/* transition: .3s;*/
/* color: #C1C1C1;*/
/* }*/
/* td{*/
/* font-family:'Oswald', sans-serif;*/
/* text-shadow: 2px 1px rgba(10, 10, 10, 0.4);*/
/* -webkit-transition: .3s;*/
/* transition: .3s;*/
/* color: #fff;*/
/* }*/
/* .login-label {*/
/* */
/* text-align:center;*/
/* */
/* font:20px "Nova Flat" ;*/
/* color: #fff;*/
/* */
/* */
/* }*/
/* */
/* .login-header{*/
/* */
/* font-family: 'Nova Flat';*/
/* font-size: 50px;*/
/* transition: .3s;*/
/* color: #fff;*/
/* */
/* }*/
/* .copyr{*/
/* */
/* font-family: 'Nova Flat';*/
/* font-size: 20px;*/
/* color: #fff;*/
/* */
/* }*/
/* .bd-ra {*/
/* color: #fff;*/
/* }*/
/* .l{*/
/* font-size:30px ;*/
/* }*/
/* .fa-angle-left{*/
/* color:#ea6153 ;*/
/* font-size:40px ;*/
/* }*/
/* .logout {*/
/* color:#ea6153 ;*/
/* */
/* }*/
/* .lg{*/
/*      margin-top:-70px ;*/
/*      margin-left:1000px ;*/
/* }*/
/* .lgg{*/
/* font-family: 'Nova Flat';*/
/* font-size: 30px;*/
/* transition: .3s;*/
/* color: #fff;*/
/* }*/
/* .fa-lock{*/
/* font-size: 30px;*/
/* transition: .3s;*/
/* color: #fff;*/
/* }*/
/* .fa-user{*/
/* font-size: 30px;*/
/* transition: .3s;*/
/* color: #fff;*/
/* */
/* }*/
/* </style>*/
/*   {% endblock %}*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.0/wow.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js"></script>*/
/* */
/* */
/*     <script>*/
/*     $(document).scroll(function() {*/
/* navbarScroll();*/
/* });*/
/* */
/* function navbarScroll() {*/
/* var y = window.scrollY;*/
/* if (y > 10) {*/
/*  $('.header').addClass('small');*/
/* } else if (y < 10) {*/
/*  $('.header').removeClass('small');*/
/* }*/
/* }*/
/*      </script>*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* */
/*   <div class="header navbar-fixed-top">*/
/* <h1 class="header_logo"><a href="{{ path('ag_platform_home') }}">IMMOBILIA <i class="fa fa-home" aria-hidden="true"></i></a></h1>*/
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/*                 <a href="{{ path('fos_user_security_logout') }}"  class="ofbutton ofbutton-blue lg">*/
/*                 <i class="fa fa-angle-left" aria-hidden="true"></i>*/
/*                   <span class="logout">  Logout </span>*/
/* */
/*                 </a>*/
/*                 {% endif %}*/
/* </div>*/
/* </div>*/
/* */
/* <div class="offset">*/
/* {% block offset %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* </div>*/
/* */
/* */
/* </html>*/
/* */
