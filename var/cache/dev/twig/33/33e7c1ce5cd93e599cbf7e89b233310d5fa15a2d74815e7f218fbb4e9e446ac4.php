<?php

/* AGPlatformBundle:Agence:ajouterl.html.twig */
class __TwigTemplate_1d67fc0a1ed6fec05206cbea775616c8c81c40f577880b3a7f2c32bb474fccb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:ajouterl.html.twig", 2);
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
        $__internal_ae82553fd54c42699ff0f49d4164e0a75ca423592fa039ee0cae0945edbab52d = $this->env->getExtension("native_profiler");
        $__internal_ae82553fd54c42699ff0f49d4164e0a75ca423592fa039ee0cae0945edbab52d->enter($__internal_ae82553fd54c42699ff0f49d4164e0a75ca423592fa039ee0cae0945edbab52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:ajouterl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae82553fd54c42699ff0f49d4164e0a75ca423592fa039ee0cae0945edbab52d->leave($__internal_ae82553fd54c42699ff0f49d4164e0a75ca423592fa039ee0cae0945edbab52d_prof);

    }

    // line 7
    public function block_offset($context, array $blocks = array())
    {
        $__internal_35735fee1bf34377ae4a86f0988a24964c4f17cdc002fa0e405a6a22cd88293b = $this->env->getExtension("native_profiler");
        $__internal_35735fee1bf34377ae4a86f0988a24964c4f17cdc002fa0e405a6a22cd88293b->enter($__internal_35735fee1bf34377ae4a86f0988a24964c4f17cdc002fa0e405a6a22cd88293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 8
        echo "<h1 class=\"intro\"> Louer c'est en simple clique  <i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i><br><br><br>
<div class=\"well\" style=\"width:50%; margin-left:300px;font-family: 'Oswald', sans-serif;
text-shadow: 2px 2px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
\">
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "save")));
        echo "
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_35735fee1bf34377ae4a86f0988a24964c4f17cdc002fa0e405a6a22cd88293b->leave($__internal_35735fee1bf34377ae4a86f0988a24964c4f17cdc002fa0e405a6a22cd88293b_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:ajouterl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  56 => 16,  52 => 15,  48 => 14,  40 => 8,  34 => 7,  11 => 2,);
    }
}
/* {# src/AGPlatformBundle/Resources/views/Agence/add.html.twig #}*/
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* */
/* */
/* */
/* */
/* {% block offset %}*/
/* <h1 class="intro"> Louer c'est en simple clique  <i class="fa fa-hand-o-down" aria-hidden="true"></i><br><br><br>*/
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
