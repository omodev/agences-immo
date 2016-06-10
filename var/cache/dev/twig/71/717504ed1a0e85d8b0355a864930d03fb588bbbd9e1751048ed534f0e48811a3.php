<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_19f3f99204cd64a8d70ad0042fba0a7c9dc55d7c8e8cf36e440e9939abce653a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_dfd6041ce66fc7bb7fbc47cdae7826bd3140025309118eb2bd04a42b64cee39a = $this->env->getExtension("native_profiler");
        $__internal_dfd6041ce66fc7bb7fbc47cdae7826bd3140025309118eb2bd04a42b64cee39a->enter($__internal_dfd6041ce66fc7bb7fbc47cdae7826bd3140025309118eb2bd04a42b64cee39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd6041ce66fc7bb7fbc47cdae7826bd3140025309118eb2bd04a42b64cee39a->leave($__internal_dfd6041ce66fc7bb7fbc47cdae7826bd3140025309118eb2bd04a42b64cee39a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_773f114cef90e73b5f9edfdecaae0bf7608dd9c70dc838466a9ab9178332b528 = $this->env->getExtension("native_profiler");
        $__internal_773f114cef90e73b5f9edfdecaae0bf7608dd9c70dc838466a9ab9178332b528->enter($__internal_773f114cef90e73b5f9edfdecaae0bf7608dd9c70dc838466a9ab9178332b528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_773f114cef90e73b5f9edfdecaae0bf7608dd9c70dc838466a9ab9178332b528->leave($__internal_773f114cef90e73b5f9edfdecaae0bf7608dd9c70dc838466a9ab9178332b528_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
