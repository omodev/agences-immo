<?php

/* AGPlatformBundle:Agence:vmodifier.html.twig */
class __TwigTemplate_2e5750836c39868f4091ec6453a8cb4ddadd44a9a8c39b9ce87a167f99756432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:vmodifier.html.twig", 1);
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
        $__internal_9635771383b07e1d5a3f63d72aeee89faca2b92c2d49aa200419ba41ec989065 = $this->env->getExtension("native_profiler");
        $__internal_9635771383b07e1d5a3f63d72aeee89faca2b92c2d49aa200419ba41ec989065->enter($__internal_9635771383b07e1d5a3f63d72aeee89faca2b92c2d49aa200419ba41ec989065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:vmodifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9635771383b07e1d5a3f63d72aeee89faca2b92c2d49aa200419ba41ec989065->leave($__internal_9635771383b07e1d5a3f63d72aeee89faca2b92c2d49aa200419ba41ec989065_prof);

    }

    // line 4
    public function block_offset($context, array $blocks = array())
    {
        $__internal_345cc874f354b817879317c8c8c2748cc6ebf1ce8f0fc0b405ffcb6a731ae8c5 = $this->env->getExtension("native_profiler");
        $__internal_345cc874f354b817879317c8c8c2748cc6ebf1ce8f0fc0b405ffcb6a731ae8c5->enter($__internal_345cc874f354b817879317c8c8c2748cc6ebf1ce8f0fc0b405ffcb6a731ae8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 5
        echo " <h1 class=\"intro\"> Modifier les infos  </h1> <br><br><br>
<div class=\"well\" style=\"width:50%; margin-left:300px;font-family: 'Oswald', sans-serif;
text-shadow: 2px 2px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
\">
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "save")));
        echo "
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_345cc874f354b817879317c8c8c2748cc6ebf1ce8f0fc0b405ffcb6a731ae8c5->leave($__internal_345cc874f354b817879317c8c8c2748cc6ebf1ce8f0fc0b405ffcb6a731ae8c5_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:vmodifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  56 => 13,  52 => 12,  48 => 11,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* */
/* */
/* {% block offset %}*/
/*  <h1 class="intro"> Modifier les infos  </h1> <br><br><br>*/
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
