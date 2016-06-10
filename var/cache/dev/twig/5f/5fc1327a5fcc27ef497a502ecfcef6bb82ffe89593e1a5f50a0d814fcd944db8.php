<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_478bf551ebdc39f90efcbcc30e57b2a70ebf2544f21c21e70e87dffd437e53be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_436c8f39ed60ae2a2308d8c2b6fb1ebada69313eb25331276bc9d53cddb5a85c = $this->env->getExtension("native_profiler");
        $__internal_436c8f39ed60ae2a2308d8c2b6fb1ebada69313eb25331276bc9d53cddb5a85c->enter($__internal_436c8f39ed60ae2a2308d8c2b6fb1ebada69313eb25331276bc9d53cddb5a85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_436c8f39ed60ae2a2308d8c2b6fb1ebada69313eb25331276bc9d53cddb5a85c->leave($__internal_436c8f39ed60ae2a2308d8c2b6fb1ebada69313eb25331276bc9d53cddb5a85c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_025b7315870aeaa8933bc8ff3d3c9664f1b9475d15327a8ef0510250f5a5f0a4 = $this->env->getExtension("native_profiler");
        $__internal_025b7315870aeaa8933bc8ff3d3c9664f1b9475d15327a8ef0510250f5a5f0a4->enter($__internal_025b7315870aeaa8933bc8ff3d3c9664f1b9475d15327a8ef0510250f5a5f0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_025b7315870aeaa8933bc8ff3d3c9664f1b9475d15327a8ef0510250f5a5f0a4->leave($__internal_025b7315870aeaa8933bc8ff3d3c9664f1b9475d15327a8ef0510250f5a5f0a4_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e9257c4694d5b9385e74143c8c358a8b2307ec1d2c0831037f76e7ff57d72182 = $this->env->getExtension("native_profiler");
        $__internal_e9257c4694d5b9385e74143c8c358a8b2307ec1d2c0831037f76e7ff57d72182->enter($__internal_e9257c4694d5b9385e74143c8c358a8b2307ec1d2c0831037f76e7ff57d72182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_e9257c4694d5b9385e74143c8c358a8b2307ec1d2c0831037f76e7ff57d72182->leave($__internal_e9257c4694d5b9385e74143c8c358a8b2307ec1d2c0831037f76e7ff57d72182_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
