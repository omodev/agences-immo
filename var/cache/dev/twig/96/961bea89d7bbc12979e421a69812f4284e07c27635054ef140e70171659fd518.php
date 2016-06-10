<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_67e729dabd0d7d93cd5a5a8fce0e33f866bfd3fa57a0bf3d7f3883a047f454b4 extends Twig_Template
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
        $__internal_f302c68cf437086c7d91a35fa179601cea211b63c3954e2f8c33b3f3b5f5a8dd = $this->env->getExtension("native_profiler");
        $__internal_f302c68cf437086c7d91a35fa179601cea211b63c3954e2f8c33b3f3b5f5a8dd->enter($__internal_f302c68cf437086c7d91a35fa179601cea211b63c3954e2f8c33b3f3b5f5a8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f302c68cf437086c7d91a35fa179601cea211b63c3954e2f8c33b3f3b5f5a8dd->leave($__internal_f302c68cf437086c7d91a35fa179601cea211b63c3954e2f8c33b3f3b5f5a8dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
