<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_413cc1f2157f6440b9e11c2af25e35290dbda6bd32b35ec6d13bb9c558b28bdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_169a150ec50499f1df01c77f69d2d5280a14860321d5832073d133b99540c340 = $this->env->getExtension("native_profiler");
        $__internal_169a150ec50499f1df01c77f69d2d5280a14860321d5832073d133b99540c340->enter($__internal_169a150ec50499f1df01c77f69d2d5280a14860321d5832073d133b99540c340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_169a150ec50499f1df01c77f69d2d5280a14860321d5832073d133b99540c340->leave($__internal_169a150ec50499f1df01c77f69d2d5280a14860321d5832073d133b99540c340_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c17aea6bb174e3f1f0a9bbec70c53b73cc1407b5b8d9986132c8e911ebd50807 = $this->env->getExtension("native_profiler");
        $__internal_c17aea6bb174e3f1f0a9bbec70c53b73cc1407b5b8d9986132c8e911ebd50807->enter($__internal_c17aea6bb174e3f1f0a9bbec70c53b73cc1407b5b8d9986132c8e911ebd50807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c17aea6bb174e3f1f0a9bbec70c53b73cc1407b5b8d9986132c8e911ebd50807->leave($__internal_c17aea6bb174e3f1f0a9bbec70c53b73cc1407b5b8d9986132c8e911ebd50807_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */