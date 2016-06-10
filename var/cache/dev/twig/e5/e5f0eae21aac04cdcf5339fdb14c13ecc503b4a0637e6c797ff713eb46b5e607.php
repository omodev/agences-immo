<?php

/* AGPlatformBundle:Agence:ajouter.html.twig */
class __TwigTemplate_20e86d3355445e884f1f53f742c733d281e0aca855daf230a983529486aead5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:ajouter.html.twig", 2);
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
        $__internal_b4040279c1a884d34c4e69d0931609c597d3ca3c3f9f1b41d12b9bec96b00ad5 = $this->env->getExtension("native_profiler");
        $__internal_b4040279c1a884d34c4e69d0931609c597d3ca3c3f9f1b41d12b9bec96b00ad5->enter($__internal_b4040279c1a884d34c4e69d0931609c597d3ca3c3f9f1b41d12b9bec96b00ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4040279c1a884d34c4e69d0931609c597d3ca3c3f9f1b41d12b9bec96b00ad5->leave($__internal_b4040279c1a884d34c4e69d0931609c597d3ca3c3f9f1b41d12b9bec96b00ad5_prof);

    }

    // line 5
    public function block_offset($context, array $blocks = array())
    {
        $__internal_ee23d5c161ad093b5bb2a0af445ff666131dca99ee0c6329c7821c257ca5a164 = $this->env->getExtension("native_profiler");
        $__internal_ee23d5c161ad093b5bb2a0af445ff666131dca99ee0c6329c7821c257ca5a164->enter($__internal_ee23d5c161ad093b5bb2a0af445ff666131dca99ee0c6329c7821c257ca5a164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 6
        echo " <h1 class=\"intro\"> Ajouter une maison tout simplement  </h1> <br><br><br>
<div class=\"well\" style=\"width:50%; margin-left:300px;font-family: 'Oswald', sans-serif;
text-shadow: 2px 2px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
\">
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "save")));
        echo "
";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_ee23d5c161ad093b5bb2a0af445ff666131dca99ee0c6329c7821c257ca5a164->leave($__internal_ee23d5c161ad093b5bb2a0af445ff666131dca99ee0c6329c7821c257ca5a164_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  56 => 14,  52 => 13,  48 => 12,  40 => 6,  34 => 5,  11 => 2,);
    }
}
/* {# src/AGPlatformBundle/Resources/views/Agence/add.html.twig #}*/
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* */
/* */
/* {% block offset %}*/
/*  <h1 class="intro"> Ajouter une maison tout simplement  </h1> <br><br><br>*/
/* <div class="well" style="width:50%; margin-left:300px;font-family: 'Oswald', sans-serif;*/
/* text-shadow: 2px 2px rgba(10, 10, 10, 0.4);*/
/* -webkit-transition: .3s;*/
/* transition: .3s;*/
/* ">*/
/* {{ form_start(form) }}*/
/*   {{ form_widget(form) }}*/
/*   {{ form_widget(form.save, {'attr': {'class': 'save'}}) }}*/
/* {{ form_end(form) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
