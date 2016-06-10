<?php

/* AGPlatformBundle:Agence:llouer.html.twig */
class __TwigTemplate_8cd27eadc1e8f3bd7bef4fd06f603abf2f2de31f6f653caae88b8a8151dd14f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:llouer.html.twig", 1);
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
        $__internal_b5f17bcbb3f79f70f334a56832ed164b50b2a3df74fe59f2996e806c6a065744 = $this->env->getExtension("native_profiler");
        $__internal_b5f17bcbb3f79f70f334a56832ed164b50b2a3df74fe59f2996e806c6a065744->enter($__internal_b5f17bcbb3f79f70f334a56832ed164b50b2a3df74fe59f2996e806c6a065744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:llouer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f17bcbb3f79f70f334a56832ed164b50b2a3df74fe59f2996e806c6a065744->leave($__internal_b5f17bcbb3f79f70f334a56832ed164b50b2a3df74fe59f2996e806c6a065744_prof);

    }

    // line 4
    public function block_offset($context, array $blocks = array())
    {
        $__internal_26274bd947caf2604dec8ecf4ee24c0fef3a5f845e364db178b15117c9724a91 = $this->env->getExtension("native_profiler");
        $__internal_26274bd947caf2604dec8ecf4ee24c0fef3a5f845e364db178b15117c9724a91->enter($__internal_26274bd947caf2604dec8ecf4ee24c0fef3a5f845e364db178b15117c9724a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 5
        echo "<div class=\"well\" style=\"width:50%; margin-left:300px;font-family: 'Oswald', sans-serif;
text-shadow: 2px 2px rgba(10, 10, 10, 0.4);
-webkit-transition: .3s;
transition: .3s;
\">
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "save")));
        echo "
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_26274bd947caf2604dec8ecf4ee24c0fef3a5f845e364db178b15117c9724a91->leave($__internal_26274bd947caf2604dec8ecf4ee24c0fef3a5f845e364db178b15117c9724a91_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:llouer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 12,  51 => 11,  47 => 10,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* */
/* */
/* {% block offset %}*/
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
