<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_da0ae14da87b607f9dd0cba908bea3c6137d43de13cdc25b0a81f134e9aba365 extends Twig_Template
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
        $__internal_1b7674196187df690eb395eb268e204b147d0241b6a89598881cdcc605d65b25 = $this->env->getExtension("native_profiler");
        $__internal_1b7674196187df690eb395eb268e204b147d0241b6a89598881cdcc605d65b25->enter($__internal_1b7674196187df690eb395eb268e204b147d0241b6a89598881cdcc605d65b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1b7674196187df690eb395eb268e204b147d0241b6a89598881cdcc605d65b25->leave($__internal_1b7674196187df690eb395eb268e204b147d0241b6a89598881cdcc605d65b25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
