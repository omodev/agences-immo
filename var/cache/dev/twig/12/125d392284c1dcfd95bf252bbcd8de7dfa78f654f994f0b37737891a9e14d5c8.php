<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_10ab14781906c05f32269e92cf442d7e574bb1483f1d694d739d78788315a847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eed7c6502a63254084cec463bac9b2357e051e89b42ab8cb1d40e868a93b454 = $this->env->getExtension("native_profiler");
        $__internal_1eed7c6502a63254084cec463bac9b2357e051e89b42ab8cb1d40e868a93b454->enter($__internal_1eed7c6502a63254084cec463bac9b2357e051e89b42ab8cb1d40e868a93b454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eed7c6502a63254084cec463bac9b2357e051e89b42ab8cb1d40e868a93b454->leave($__internal_1eed7c6502a63254084cec463bac9b2357e051e89b42ab8cb1d40e868a93b454_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bb22730668ef9f167f0ae8eef6d4a1648a4885c6de8256f6762badb28178223 = $this->env->getExtension("native_profiler");
        $__internal_5bb22730668ef9f167f0ae8eef6d4a1648a4885c6de8256f6762badb28178223->enter($__internal_5bb22730668ef9f167f0ae8eef6d4a1648a4885c6de8256f6762badb28178223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5bb22730668ef9f167f0ae8eef6d4a1648a4885c6de8256f6762badb28178223->leave($__internal_5bb22730668ef9f167f0ae8eef6d4a1648a4885c6de8256f6762badb28178223_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
