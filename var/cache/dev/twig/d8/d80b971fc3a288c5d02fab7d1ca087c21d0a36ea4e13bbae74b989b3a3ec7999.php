<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_09afb0255ac985190f42195329fde09c5ff7fa363fc80267411ec40dfe60823d extends Twig_Template
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
        $__internal_36fa6570d73e4beee4ca1c156bf6117ffd75c919d063a458419dc4f56c5c8d38 = $this->env->getExtension("native_profiler");
        $__internal_36fa6570d73e4beee4ca1c156bf6117ffd75c919d063a458419dc4f56c5c8d38->enter($__internal_36fa6570d73e4beee4ca1c156bf6117ffd75c919d063a458419dc4f56c5c8d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_36fa6570d73e4beee4ca1c156bf6117ffd75c919d063a458419dc4f56c5c8d38->leave($__internal_36fa6570d73e4beee4ca1c156bf6117ffd75c919d063a458419dc4f56c5c8d38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
