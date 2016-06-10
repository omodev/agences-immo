<?php

/* AGPlatformBundle:Agence:vmodifier.html.twig */
class __TwigTemplate_bc5f6db7ed7d069b9234508484261f5e3ef6f382a5b5997bfc00fab287b33573 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_offset($context, array $blocks = array())
    {
        // line 5
        echo " <h1 class=\"intro\"> Modifier les infos  </h1> <br><br><br>
<div class=\"well\" style=\"width:50%; margin-left:300px;font-family: 'Oswald', sans-serif;
text-shadow: 2px 2px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
\">
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "save")));
        echo "
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>
";
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
        return array (  51 => 14,  47 => 13,  43 => 12,  39 => 11,  31 => 5,  28 => 4,  11 => 1,);
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
