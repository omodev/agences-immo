<?php

/* AGPlatformBundle:Agence:louer.html.twig */
class __TwigTemplate_d8601d17923524fc4b0441338fb8ddb48fd79645eaeccefded56226f8aaac33e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_offset($context, array $blocks = array())
    {
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
        return array (  41 => 13,  37 => 12,  31 => 8,  28 => 7,  11 => 3,);
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
