<?php

/* AGPlatformBundle:Agence:vvendre.html.twig */
class __TwigTemplate_d8e10c35c43cb1883263d618642e984a3b1392a3a5102c0bacf38a77d5e09d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:vvendre.html.twig", 1);
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
        $__internal_06affed3ed55e04d4968ac934be1e2a9e79a6e79b0a6da6d3e48a11ae35c2d49 = $this->env->getExtension("native_profiler");
        $__internal_06affed3ed55e04d4968ac934be1e2a9e79a6e79b0a6da6d3e48a11ae35c2d49->enter($__internal_06affed3ed55e04d4968ac934be1e2a9e79a6e79b0a6da6d3e48a11ae35c2d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:vvendre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06affed3ed55e04d4968ac934be1e2a9e79a6e79b0a6da6d3e48a11ae35c2d49->leave($__internal_06affed3ed55e04d4968ac934be1e2a9e79a6e79b0a6da6d3e48a11ae35c2d49_prof);

    }

    // line 4
    public function block_offset($context, array $blocks = array())
    {
        $__internal_8510ade622801d42e264c11109b9e179b445c69ce8e79027656bc9f6fc3aa411 = $this->env->getExtension("native_profiler");
        $__internal_8510ade622801d42e264c11109b9e179b445c69ce8e79027656bc9f6fc3aa411->enter($__internal_8510ade622801d42e264c11109b9e179b445c69ce8e79027656bc9f6fc3aa411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 5
        echo " <h1 class=\"intro\"> Vous voulez vendre ou louer votre maison ?  </h1><br><br><br><br> <hr class=\"intro-divider\" ><br><br><br><br><br><br><br><h1 class=\"intro\"><i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i> </h1> 
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
        
        $__internal_8510ade622801d42e264c11109b9e179b445c69ce8e79027656bc9f6fc3aa411->leave($__internal_8510ade622801d42e264c11109b9e179b445c69ce8e79027656bc9f6fc3aa411_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:vvendre.html.twig";
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
/*  <h1 class="intro"> Vous voulez vendre ou louer votre maison ?  </h1><br><br><br><br> <hr class="intro-divider" ><br><br><br><br><br><br><br><h1 class="intro"><i class="fa fa-hand-o-down" aria-hidden="true"></i> </h1> */
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
