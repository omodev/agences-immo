<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9b37101c1f72ddc96399ff0faa938b25cd2616c3f940af0a1f48bdf8d4858048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_250fa19e203b38ebd1c7d7896803abaa27f0500aeb6bb5dbe4238996b608b849 = $this->env->getExtension("native_profiler");
        $__internal_250fa19e203b38ebd1c7d7896803abaa27f0500aeb6bb5dbe4238996b608b849->enter($__internal_250fa19e203b38ebd1c7d7896803abaa27f0500aeb6bb5dbe4238996b608b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250fa19e203b38ebd1c7d7896803abaa27f0500aeb6bb5dbe4238996b608b849->leave($__internal_250fa19e203b38ebd1c7d7896803abaa27f0500aeb6bb5dbe4238996b608b849_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22ee30ad8420c872d52a26002da400ab5bcd6c70fd4da730be39383608f86fca = $this->env->getExtension("native_profiler");
        $__internal_22ee30ad8420c872d52a26002da400ab5bcd6c70fd4da730be39383608f86fca->enter($__internal_22ee30ad8420c872d52a26002da400ab5bcd6c70fd4da730be39383608f86fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_22ee30ad8420c872d52a26002da400ab5bcd6c70fd4da730be39383608f86fca->leave($__internal_22ee30ad8420c872d52a26002da400ab5bcd6c70fd4da730be39383608f86fca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
