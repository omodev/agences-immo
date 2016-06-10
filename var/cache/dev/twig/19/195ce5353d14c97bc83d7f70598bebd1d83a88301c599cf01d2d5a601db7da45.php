<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_82bb4bb4503caedb8e4d609e19f1b8e82cbfc10c93ad86139c421af29a52db5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a06d1dab91b694bdda77c296a2a507072692467286d76621c843c8d3a06ec94 = $this->env->getExtension("native_profiler");
        $__internal_6a06d1dab91b694bdda77c296a2a507072692467286d76621c843c8d3a06ec94->enter($__internal_6a06d1dab91b694bdda77c296a2a507072692467286d76621c843c8d3a06ec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a06d1dab91b694bdda77c296a2a507072692467286d76621c843c8d3a06ec94->leave($__internal_6a06d1dab91b694bdda77c296a2a507072692467286d76621c843c8d3a06ec94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57784c02af0c1346f0605ffcd29f35eeeebfc2d6699d6d779eb9916f2b12ff7e = $this->env->getExtension("native_profiler");
        $__internal_57784c02af0c1346f0605ffcd29f35eeeebfc2d6699d6d779eb9916f2b12ff7e->enter($__internal_57784c02af0c1346f0605ffcd29f35eeeebfc2d6699d6d779eb9916f2b12ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_57784c02af0c1346f0605ffcd29f35eeeebfc2d6699d6d779eb9916f2b12ff7e->leave($__internal_57784c02af0c1346f0605ffcd29f35eeeebfc2d6699d6d779eb9916f2b12ff7e_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f7ab5277e86e036cf7c0575c6b361b870216aff33fc872801e49cdde233d2710 = $this->env->getExtension("native_profiler");
        $__internal_f7ab5277e86e036cf7c0575c6b361b870216aff33fc872801e49cdde233d2710->enter($__internal_f7ab5277e86e036cf7c0575c6b361b870216aff33fc872801e49cdde233d2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_f7ab5277e86e036cf7c0575c6b361b870216aff33fc872801e49cdde233d2710->leave($__internal_f7ab5277e86e036cf7c0575c6b361b870216aff33fc872801e49cdde233d2710_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
