<?php

/* AGPlatformBundle:Agence:vendre.html.twig */
class __TwigTemplate_58fbd01c7712237cf23d10caf1b89d00330db64914759682f5776fe52dc4b21b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:vendre.html.twig", 3);
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
        $__internal_0045eb3043b13c7340149738b1e66db37334e4c062e4d358b6c9eb20eb7090cd = $this->env->getExtension("native_profiler");
        $__internal_0045eb3043b13c7340149738b1e66db37334e4c062e4d358b6c9eb20eb7090cd->enter($__internal_0045eb3043b13c7340149738b1e66db37334e4c062e4d358b6c9eb20eb7090cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:vendre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0045eb3043b13c7340149738b1e66db37334e4c062e4d358b6c9eb20eb7090cd->leave($__internal_0045eb3043b13c7340149738b1e66db37334e4c062e4d358b6c9eb20eb7090cd_prof);

    }

    // line 7
    public function block_offset($context, array $blocks = array())
    {
        $__internal_ca456afddac2daee39d283508062381903a9abf6c5a22c7329e91fc7379180ab = $this->env->getExtension("native_profiler");
        $__internal_ca456afddac2daee39d283508062381903a9abf6c5a22c7329e91fc7379180ab->enter($__internal_ca456afddac2daee39d283508062381903a9abf6c5a22c7329e91fc7379180ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 8
        echo "<h1 class=\"intro\"> La gestion de vente est devenue un jeu d'enfant avec IMMOBILIA   <i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i>
 </h1>
  <hr class=\"intro-divider\" >
  <ul class=\"nav nav-pills nav-stacked\">
           <li><h1 class=\"page-header ver2\">Ajouter une maison pour qu'elle soit disponible à la vente: <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ag_platform_ajouter");
        echo "\" class=\"ofbutton ofbutton-blue\" ><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i> AJOUTER</a></li>
\t\t   <li><h1 class=\"page-header ver2\">Gérer les maisons disponibles à la vente : <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ag_platform_vconsulter");
        echo "\" class=\"ofbutton ofbutton-blue\" ><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> Gérer</a></li>

          <li><h1 class=\"page-header ver2\">chercher par ville <i class=\"fa fa-search\" aria-hidden=\"true\"></i></h1>

              <form method=\"post\" action=\"AgenceController.php\" >
             <input type=\"text\" style=\"width:50%; margin-left:300px;\">
            </form>
\t\t  </li>
    </ul>

";
        
        $__internal_ca456afddac2daee39d283508062381903a9abf6c5a22c7329e91fc7379180ab->leave($__internal_ca456afddac2daee39d283508062381903a9abf6c5a22c7329e91fc7379180ab_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:vendre.html.twig";
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
/* <h1 class="intro"> La gestion de vente est devenue un jeu d'enfant avec IMMOBILIA   <i class="fa fa-hand-o-down" aria-hidden="true"></i>*/
/*  </h1>*/
/*   <hr class="intro-divider" >*/
/*   <ul class="nav nav-pills nav-stacked">*/
/*            <li><h1 class="page-header ver2">Ajouter une maison pour qu'elle soit disponible à la vente: <a href="{{ path('ag_platform_ajouter') }}" class="ofbutton ofbutton-blue" ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> AJOUTER</a></li>*/
/* 		   <li><h1 class="page-header ver2">Gérer les maisons disponibles à la vente : <a href="{{ path('ag_platform_vconsulter') }}" class="ofbutton ofbutton-blue" ><i class="fa fa-bar-chart" aria-hidden="true"></i> Gérer</a></li>*/
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
