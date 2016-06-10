<?php

/* AGPlatformBundle:Agence:ajouterl.html.twig */
class __TwigTemplate_933737f5f8f22f7527cf602d5dd6b3b29a93989e78160b265e3c1e39c83c8003 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_offset($context, array $blocks = array())
    {
        // line 8
        echo "<h1 class=\"intro\"> Louer c'est en simple clique  <i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i><br><br><br>
<div class=\"well\" style=\"width:50%; margin-left:300px;font-family: 'Oswald', sans-serif;
text-shadow: 2px 2px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
\">
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "save")));
        echo "
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>
";
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
        return array (  51 => 17,  47 => 16,  43 => 15,  39 => 14,  31 => 8,  28 => 7,  11 => 2,);
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
