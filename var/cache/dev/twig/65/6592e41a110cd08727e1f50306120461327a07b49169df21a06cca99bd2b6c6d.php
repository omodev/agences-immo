<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_94f0077fd5aef5b91ddffa2ba013bd6c3b404b958a81b70d132a2203d400bea3 extends Twig_Template
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
        $__internal_e72c68df012f40f792994279d6f9d330759dbbae2842fc048e2e2f6b8304dc56 = $this->env->getExtension("native_profiler");
        $__internal_e72c68df012f40f792994279d6f9d330759dbbae2842fc048e2e2f6b8304dc56->enter($__internal_e72c68df012f40f792994279d6f9d330759dbbae2842fc048e2e2f6b8304dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e72c68df012f40f792994279d6f9d330759dbbae2842fc048e2e2f6b8304dc56->leave($__internal_e72c68df012f40f792994279d6f9d330759dbbae2842fc048e2e2f6b8304dc56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
