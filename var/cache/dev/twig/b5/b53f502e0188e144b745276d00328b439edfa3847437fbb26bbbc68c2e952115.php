<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_befcf085e301c441e9e973e39e8470dac3b00050b902f7cc016f9b17b06cc3e0 extends Twig_Template
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
        $__internal_7a320ff6a938fa2c2606fa8fcbaa43919fa1fcb0cdf443571d31223b4615f8ac = $this->env->getExtension("native_profiler");
        $__internal_7a320ff6a938fa2c2606fa8fcbaa43919fa1fcb0cdf443571d31223b4615f8ac->enter($__internal_7a320ff6a938fa2c2606fa8fcbaa43919fa1fcb0cdf443571d31223b4615f8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7a320ff6a938fa2c2606fa8fcbaa43919fa1fcb0cdf443571d31223b4615f8ac->leave($__internal_7a320ff6a938fa2c2606fa8fcbaa43919fa1fcb0cdf443571d31223b4615f8ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
