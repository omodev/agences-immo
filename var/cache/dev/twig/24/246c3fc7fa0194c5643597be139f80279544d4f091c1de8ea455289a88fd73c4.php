<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_935d9f2fcb07284b7d8bfc416bdea20bf2f58db816826f8e70427235d2b8c0be extends Twig_Template
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
        $__internal_208be97ca56bc6bbb12a5a6b732f77a8f77d283deee27e155eab868d8c817875 = $this->env->getExtension("native_profiler");
        $__internal_208be97ca56bc6bbb12a5a6b732f77a8f77d283deee27e155eab868d8c817875->enter($__internal_208be97ca56bc6bbb12a5a6b732f77a8f77d283deee27e155eab868d8c817875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_208be97ca56bc6bbb12a5a6b732f77a8f77d283deee27e155eab868d8c817875->leave($__internal_208be97ca56bc6bbb12a5a6b732f77a8f77d283deee27e155eab868d8c817875_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
