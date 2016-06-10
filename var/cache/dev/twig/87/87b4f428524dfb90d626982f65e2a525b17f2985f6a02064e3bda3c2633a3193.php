<?php

/* AGPlatformBundle:Agence:louer.html.twig */
class __TwigTemplate_8e4f3699703b4111aff91f4692e36c2fc99e778bd79d8ed03fa50b5e28738bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:louer.html.twig", 3);
        $this->blocks = array(
            'offset' => array($this, 'block_offset'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AGPlatformBundle:Agence:layoutheader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_531611bfda8937ac4d0818a14cb7b6ed415df4643495cf6f99664c066f872708 = $this->env->getExtension("native_profiler");
        $__internal_531611bfda8937ac4d0818a14cb7b6ed415df4643495cf6f99664c066f872708->enter($__internal_531611bfda8937ac4d0818a14cb7b6ed415df4643495cf6f99664c066f872708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:louer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_531611bfda8937ac4d0818a14cb7b6ed415df4643495cf6f99664c066f872708->leave($__internal_531611bfda8937ac4d0818a14cb7b6ed415df4643495cf6f99664c066f872708_prof);

    }

    // line 7
    public function block_offset($context, array $blocks = array())
    {
        $__internal_b55d2654fd36809b2be282c9ac3c4b175a0ad8c174550ced784d1fc0a5e8dfa8 = $this->env->getExtension("native_profiler");
        $__internal_b55d2654fd36809b2be282c9ac3c4b175a0ad8c174550ced784d1fc0a5e8dfa8->enter($__internal_b55d2654fd36809b2be282c9ac3c4b175a0ad8c174550ced784d1fc0a5e8dfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 8
        echo "<h1 class=\"intro\"> Louer c'est en simple clique  <i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i><br><br><br>
 </h1>
  <hr class=\"intro-divider\" >
  <ul class=\"nav nav-pills nav-stacked\">
           <li><h1 class=\"page-header ver2\">Ajouter une maison pour qu'elle soit disponible à louer: <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ag_platform_ajouterl");
        echo "\" class=\"ofbutton ofbutton-blue\" ><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i> AJOUTER</a></li>
\t\t   <li><h1 class=\"page-header ver2\">Gérer les maisons disponibles à louer : <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ag_platform_lconsulter");
        echo "\" class=\"ofbutton ofbutton-blue\" ><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> Gérer</a></li>

          <li><h1 class=\"page-header ver2\">chercher par ville <i class=\"fa fa-search\" aria-hidden=\"true\"></i></h1>

              <form method=\"post\" action=\"AgenceController.php\" >
             <input type=\"text\" style=\"width:50%; margin-left:300px;\">
            </form>
\t\t  </li>
    </ul>

";
        
        $__internal_b55d2654fd36809b2be282c9ac3c4b175a0ad8c174550ced784d1fc0a5e8dfa8->leave($__internal_b55d2654fd36809b2be282c9ac3c4b175a0ad8c174550ced784d1fc0a5e8dfa8_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:louer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 12,  40 => 8,  34 => 7,  11 => 3,);
    }
}
/* {# src/AGPlatformBundle/Resources/views/Agence/vendre.html.twig #}*/
/* */
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* */
/* */
/* */
/* {% block offset %}*/
/* <h1 class="intro"> Louer c'est en simple clique  <i class="fa fa-hand-o-down" aria-hidden="true"></i><br><br><br>*/
/*  </h1>*/
/*   <hr class="intro-divider" >*/
/*   <ul class="nav nav-pills nav-stacked">*/
/*            <li><h1 class="page-header ver2">Ajouter une maison pour qu'elle soit disponible à louer: <a href="{{ path('ag_platform_ajouterl') }}" class="ofbutton ofbutton-blue" ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> AJOUTER</a></li>*/
/* 		   <li><h1 class="page-header ver2">Gérer les maisons disponibles à louer : <a href="{{ path('ag_platform_lconsulter') }}" class="ofbutton ofbutton-blue" ><i class="fa fa-bar-chart" aria-hidden="true"></i> Gérer</a></li>*/
/* */
/*           <li><h1 class="page-header ver2">chercher par ville <i class="fa fa-search" aria-hidden="true"></i></h1>*/
/* */
/*               <form method="post" action="AgenceController.php" >*/
/*              <input type="text" style="width:50%; margin-left:300px;">*/
/*             </form>*/
/* 		  </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
