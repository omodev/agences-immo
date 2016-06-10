<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8a0f20d1500a121b50924eaf831b42c194e1c3deca35db1b2af15a9d8756523c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e854c164689b832a33498d108205430152cfdd531a55acacd263247b3ac75a4c = $this->env->getExtension("native_profiler");
        $__internal_e854c164689b832a33498d108205430152cfdd531a55acacd263247b3ac75a4c->enter($__internal_e854c164689b832a33498d108205430152cfdd531a55acacd263247b3ac75a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e854c164689b832a33498d108205430152cfdd531a55acacd263247b3ac75a4c->leave($__internal_e854c164689b832a33498d108205430152cfdd531a55acacd263247b3ac75a4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
