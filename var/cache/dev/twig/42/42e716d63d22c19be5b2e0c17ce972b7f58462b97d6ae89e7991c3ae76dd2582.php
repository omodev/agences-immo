<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c5d94c0e8c7f45bf4f1a906509d238b7fba574d7fa5d5d72f36ee68abb13d65f extends Twig_Template
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
        $__internal_d750bc37c85eb5a0c8fa8db48399d422694439389e8c203eafd703efa66e813b = $this->env->getExtension("native_profiler");
        $__internal_d750bc37c85eb5a0c8fa8db48399d422694439389e8c203eafd703efa66e813b->enter($__internal_d750bc37c85eb5a0c8fa8db48399d422694439389e8c203eafd703efa66e813b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d750bc37c85eb5a0c8fa8db48399d422694439389e8c203eafd703efa66e813b->leave($__internal_d750bc37c85eb5a0c8fa8db48399d422694439389e8c203eafd703efa66e813b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
