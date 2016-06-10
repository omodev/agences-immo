<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e7da6e3999741cea06bfb1a33301eab039d0a39e0d15e5df0d2b4b868c4d5374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e53aacd89c67d44a529894e7cf6847bbc95b46224e269195714f030e34d00a14 = $this->env->getExtension("native_profiler");
        $__internal_e53aacd89c67d44a529894e7cf6847bbc95b46224e269195714f030e34d00a14->enter($__internal_e53aacd89c67d44a529894e7cf6847bbc95b46224e269195714f030e34d00a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e53aacd89c67d44a529894e7cf6847bbc95b46224e269195714f030e34d00a14->leave($__internal_e53aacd89c67d44a529894e7cf6847bbc95b46224e269195714f030e34d00a14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11908e9238da57c8d160d99c4dbd8f19158a1c0ec09fc896eefdecf7de54691c = $this->env->getExtension("native_profiler");
        $__internal_11908e9238da57c8d160d99c4dbd8f19158a1c0ec09fc896eefdecf7de54691c->enter($__internal_11908e9238da57c8d160d99c4dbd8f19158a1c0ec09fc896eefdecf7de54691c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_11908e9238da57c8d160d99c4dbd8f19158a1c0ec09fc896eefdecf7de54691c->leave($__internal_11908e9238da57c8d160d99c4dbd8f19158a1c0ec09fc896eefdecf7de54691c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
