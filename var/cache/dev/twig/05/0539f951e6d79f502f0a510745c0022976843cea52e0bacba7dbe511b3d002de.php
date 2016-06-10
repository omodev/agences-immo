<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_87cf87ac96bda0a1663796a8c1fa75705cda4e40c6ef2b2a3e0e41b399230745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5a045c7e512a3bb76b9025d12126e1c0227dd86ded303b870711f563b92007fc = $this->env->getExtension("native_profiler");
        $__internal_5a045c7e512a3bb76b9025d12126e1c0227dd86ded303b870711f563b92007fc->enter($__internal_5a045c7e512a3bb76b9025d12126e1c0227dd86ded303b870711f563b92007fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a045c7e512a3bb76b9025d12126e1c0227dd86ded303b870711f563b92007fc->leave($__internal_5a045c7e512a3bb76b9025d12126e1c0227dd86ded303b870711f563b92007fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea13bef6df9d882ed86510295ffc97f570219cde9b5def06824deeb23ed60f21 = $this->env->getExtension("native_profiler");
        $__internal_ea13bef6df9d882ed86510295ffc97f570219cde9b5def06824deeb23ed60f21->enter($__internal_ea13bef6df9d882ed86510295ffc97f570219cde9b5def06824deeb23ed60f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ea13bef6df9d882ed86510295ffc97f570219cde9b5def06824deeb23ed60f21->leave($__internal_ea13bef6df9d882ed86510295ffc97f570219cde9b5def06824deeb23ed60f21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
