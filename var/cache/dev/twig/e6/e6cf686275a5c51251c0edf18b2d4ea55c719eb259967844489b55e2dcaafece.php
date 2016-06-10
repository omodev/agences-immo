<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_096da44aac85f5775120474454211dd13bfdd7cfd81919beefa13b43acc6d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6ea0a095eb17ae4d14d8e04a67f8dc1c559a3f9d0dd1fd03e85d2073ec02fb68 = $this->env->getExtension("native_profiler");
        $__internal_6ea0a095eb17ae4d14d8e04a67f8dc1c559a3f9d0dd1fd03e85d2073ec02fb68->enter($__internal_6ea0a095eb17ae4d14d8e04a67f8dc1c559a3f9d0dd1fd03e85d2073ec02fb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea0a095eb17ae4d14d8e04a67f8dc1c559a3f9d0dd1fd03e85d2073ec02fb68->leave($__internal_6ea0a095eb17ae4d14d8e04a67f8dc1c559a3f9d0dd1fd03e85d2073ec02fb68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66fa079de1c936eefaf626dc384e2f3b5e31f13c0ed6f602f36645d60d34f9af = $this->env->getExtension("native_profiler");
        $__internal_66fa079de1c936eefaf626dc384e2f3b5e31f13c0ed6f602f36645d60d34f9af->enter($__internal_66fa079de1c936eefaf626dc384e2f3b5e31f13c0ed6f602f36645d60d34f9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_66fa079de1c936eefaf626dc384e2f3b5e31f13c0ed6f602f36645d60d34f9af->leave($__internal_66fa079de1c936eefaf626dc384e2f3b5e31f13c0ed6f602f36645d60d34f9af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
