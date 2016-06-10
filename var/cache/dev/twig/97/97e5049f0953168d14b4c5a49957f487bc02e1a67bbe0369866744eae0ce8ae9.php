<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3b29af4e5fd9e85495c0b0ededb4277b92ea03917e18c22f7e67b4171539badb extends Twig_Template
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
        $__internal_570c50546c6608c2b90f9b81bce837ae55a2c0269d2da7813ce5b984f56f6213 = $this->env->getExtension("native_profiler");
        $__internal_570c50546c6608c2b90f9b81bce837ae55a2c0269d2da7813ce5b984f56f6213->enter($__internal_570c50546c6608c2b90f9b81bce837ae55a2c0269d2da7813ce5b984f56f6213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_570c50546c6608c2b90f9b81bce837ae55a2c0269d2da7813ce5b984f56f6213->leave($__internal_570c50546c6608c2b90f9b81bce837ae55a2c0269d2da7813ce5b984f56f6213_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
