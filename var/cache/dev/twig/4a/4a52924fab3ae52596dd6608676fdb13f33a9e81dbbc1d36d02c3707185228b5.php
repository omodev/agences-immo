<?php

/* UserBundle::layoutheader.html.twig */
class __TwigTemplate_86f1a62aeb491399508bf35b5a63dbf72f50cb87a63b768b6a7cce5eb0e86a2e extends Twig_Template
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
        $__internal_863ffa056feb1e21b4c6ff7ebd606bff8ecb5606ee701ba0a99fabfe7ccf6e9c = $this->env->getExtension("native_profiler");
        $__internal_863ffa056feb1e21b4c6ff7ebd606bff8ecb5606ee701ba0a99fabfe7ccf6e9c->enter($__internal_863ffa056feb1e21b4c6ff7ebd606bff8ecb5606ee701ba0a99fabfe7ccf6e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layoutheader.html.twig"));

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
        // line 464
        echo "
  ";
        // line 465
        $this->displayBlock('javascripts', $context, $blocks);
        // line 491
        echo "</head>

<body>

  <div class=\"header navbar-fixed-top\">
<h1 class=\"header_logo\"><a href=\"";
        // line 496
        echo $this->env->getExtension('routing')->getPath("ag_platform_home");
        echo "\">IMMOBILIA <i class=\"fa fa-home\" aria-hidden=\"true\"></i></a></h1>

</div>
</div>

<div class=\"offset\">
";
        // line 502
        $this->displayBlock('offset', $context, $blocks);
        // line 506
        echo "
</div>


</html>
";
        
        $__internal_863ffa056feb1e21b4c6ff7ebd606bff8ecb5606ee701ba0a99fabfe7ccf6e9c->leave($__internal_863ffa056feb1e21b4c6ff7ebd606bff8ecb5606ee701ba0a99fabfe7ccf6e9c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1103134dcbaa9945e8e2de74e313de1bb6d53367b57cdbf0ba042aa44f6493b1 = $this->env->getExtension("native_profiler");
        $__internal_1103134dcbaa9945e8e2de74e313de1bb6d53367b57cdbf0ba042aa44f6493b1->enter($__internal_1103134dcbaa9945e8e2de74e313de1bb6d53367b57cdbf0ba042aa44f6493b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IMMOBILIA|";
        
        $__internal_1103134dcbaa9945e8e2de74e313de1bb6d53367b57cdbf0ba042aa44f6493b1->leave($__internal_1103134dcbaa9945e8e2de74e313de1bb6d53367b57cdbf0ba042aa44f6493b1_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4db3c04417095c356c9334cc04f307b4d7053291b1a638f7707d9771bdb0f5a7 = $this->env->getExtension("native_profiler");
        $__internal_4db3c04417095c356c9334cc04f307b4d7053291b1a638f7707d9771bdb0f5a7->enter($__internal_4db3c04417095c356c9334cc04f307b4d7053291b1a638f7707d9771bdb0f5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    @import url(https://fonts.googleapis.com/css?family=Righteous);
    @import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300);
@import url(http://weloveiconfonts.com/api/?family=entypo);
@import url(https://fonts.googleapis.com/css?family=Courgette|Oswald);
a[class*=\"entypo-\"]:before {
 font-family: 'entypo', sans-serif;
}

body {

 background: url(https://www.brainpickings.org/wp-content/themes/brainpickings/images/bckgd_body.png);
}

.offset {
 margin-top: 0;
 padding-top: 270px;
 text-align: center;
 -webkit-transition: .3s;
 transition: .3s;
}

.header {
 position: fixed;
 width: 100%;
 height: 120px;
 font-weight: bold;
 text-align: center;
 background: #1C1C1C;
 -webkit-transition: .3s;
 transition: .3s;
}

.header.small {
 height: 50px;
 box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.header.small ~ .offset {
 padding-top: 140px;
}

.header.small .header_logo {
 font-size: 30px;
 text-shadow: 3px 4px rgba(10, 10, 10, 0.4);
 margin-left: -1200px;
 margin-top: 11px;
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
  font-size: 70px;
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
  background: url(http://coolblackppt.com/wp-content/uploads/2013/08/Abstract-dark-textures-floral-floral-texture-fresh-new-hd-wallpaper.jpg);
  width: 100%;
  background-attachment: fixed;
}


.sectionb { background: #d0d0d0;    width: 100%;}


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


#owl-demo {background:#fff;}

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
font-family: 'Oswald', sans-serif;
font-size: 30px;
text-shadow: 3px 4px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
color: #fff;
}
.ville {
font-family: 'Oswald', sans-serif;
font-size: 30px;
text-shadow: 3px 2px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
color: #1C1C1C;
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
  font-family: IMPACT, Helvetica, sans-serif;
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
  background-color: #3fb8e8;
  box-shadow: 0px 3px 0px 0px #3293ba;
}
.ofbutton-blue:hover {
  background-color: #1baae3;
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
font-family: IMPACT, sans-serif;
font-size: 70px;
text-shadow: 3px 3px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
color: #1C1C1C;
}
.fa-hand-o-down{
color:#C1C1C1 ;
}
.ver2{
 color:#1C1C1C ;
 text-shadow: 3px 2px rgba(10, 10, 10, 0.4);
}
.fa-search{
color:#1C1C1C ;
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
</style>
  ";
        
        $__internal_4db3c04417095c356c9334cc04f307b4d7053291b1a638f7707d9771bdb0f5a7->leave($__internal_4db3c04417095c356c9334cc04f307b4d7053291b1a638f7707d9771bdb0f5a7_prof);

    }

    // line 465
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d08b36a8a37c222c8cac31ae10028c268d51a2bcf09e5e790e27e739ed517eae = $this->env->getExtension("native_profiler");
        $__internal_d08b36a8a37c222c8cac31ae10028c268d51a2bcf09e5e790e27e739ed517eae->enter($__internal_d08b36a8a37c222c8cac31ae10028c268d51a2bcf09e5e790e27e739ed517eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 466
        echo "    ";
        // line 467
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
        
        $__internal_d08b36a8a37c222c8cac31ae10028c268d51a2bcf09e5e790e27e739ed517eae->leave($__internal_d08b36a8a37c222c8cac31ae10028c268d51a2bcf09e5e790e27e739ed517eae_prof);

    }

    // line 502
    public function block_offset($context, array $blocks = array())
    {
        $__internal_7a5a1678cac3729b0b98de97c6bbabd68bd59d80fe4bfd7e5e7c4c6003b58213 = $this->env->getExtension("native_profiler");
        $__internal_7a5a1678cac3729b0b98de97c6bbabd68bd59d80fe4bfd7e5e7c4c6003b58213->enter($__internal_7a5a1678cac3729b0b98de97c6bbabd68bd59d80fe4bfd7e5e7c4c6003b58213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 503
        echo "

";
        
        $__internal_7a5a1678cac3729b0b98de97c6bbabd68bd59d80fe4bfd7e5e7c4c6003b58213->leave($__internal_7a5a1678cac3729b0b98de97c6bbabd68bd59d80fe4bfd7e5e7c4c6003b58213_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layoutheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 503,  591 => 502,  561 => 467,  559 => 466,  553 => 465,  95 => 12,  89 => 11,  77 => 9,  65 => 506,  63 => 502,  54 => 496,  47 => 491,  45 => 465,  42 => 464,  40 => 11,  35 => 9,  26 => 2,);
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
/*  background: url(https://www.brainpickings.org/wp-content/themes/brainpickings/images/bckgd_body.png);*/
/* }*/
/* */
/* .offset {*/
/*  margin-top: 0;*/
/*  padding-top: 270px;*/
/*  text-align: center;*/
/*  -webkit-transition: .3s;*/
/*  transition: .3s;*/
/* }*/
/* */
/* .header {*/
/*  position: fixed;*/
/*  width: 100%;*/
/*  height: 120px;*/
/*  font-weight: bold;*/
/*  text-align: center;*/
/*  background: #1C1C1C;*/
/*  -webkit-transition: .3s;*/
/*  transition: .3s;*/
/* }*/
/* */
/* .header.small {*/
/*  height: 50px;*/
/*  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);*/
/* }*/
/* */
/* .header.small ~ .offset {*/
/*  padding-top: 140px;*/
/* }*/
/* */
/* .header.small .header_logo {*/
/*  font-size: 30px;*/
/*  text-shadow: 3px 4px rgba(10, 10, 10, 0.4);*/
/*  margin-left: -1200px;*/
/*  margin-top: 11px;*/
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
/*   font-size: 70px;*/
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
/*   background: url(http://coolblackppt.com/wp-content/uploads/2013/08/Abstract-dark-textures-floral-floral-texture-fresh-new-hd-wallpaper.jpg);*/
/*   width: 100%;*/
/*   background-attachment: fixed;*/
/* }*/
/* */
/* */
/* .sectionb { background: #d0d0d0;    width: 100%;}*/
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
/* #owl-demo {background:#fff;}*/
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
/* font-family: 'Oswald', sans-serif;*/
/* font-size: 30px;*/
/* text-shadow: 3px 4px rgba(10, 10, 10, 0.4);*/
/* -webkit-transition: .3s;*/
/* transition: .3s;*/
/* color: #fff;*/
/* }*/
/* .ville {*/
/* font-family: 'Oswald', sans-serif;*/
/* font-size: 30px;*/
/* text-shadow: 3px 2px rgba(10, 10, 10, 0.4);*/
/* -webkit-transition: .3s;*/
/* transition: .3s;*/
/* color: #1C1C1C;*/
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
/*   font-family: IMPACT, Helvetica, sans-serif;*/
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
/*   background-color: #3fb8e8;*/
/*   box-shadow: 0px 3px 0px 0px #3293ba;*/
/* }*/
/* .ofbutton-blue:hover {*/
/*   background-color: #1baae3;*/
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
/* font-family: IMPACT, sans-serif;*/
/* font-size: 70px;*/
/* text-shadow: 3px 3px rgba(10, 10, 10, 0.4);*/
/* -webkit-transition: .3s;*/
/* transition: .3s;*/
/* color: #1C1C1C;*/
/* }*/
/* .fa-hand-o-down{*/
/* color:#C1C1C1 ;*/
/* }*/
/* .ver2{*/
/*  color:#1C1C1C ;*/
/*  text-shadow: 3px 2px rgba(10, 10, 10, 0.4);*/
/* }*/
/* .fa-search{*/
/* color:#1C1C1C ;*/
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
/* */
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
