<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e73485987fc6aed93bd01c05350c1d211292808150bf72b3f4b22fc1576bea36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_2b6e7511837497f35c00427e4eac3ab53a87efaedf10622d9509b74787636719 = $this->env->getExtension("native_profiler");
        $__internal_2b6e7511837497f35c00427e4eac3ab53a87efaedf10622d9509b74787636719->enter($__internal_2b6e7511837497f35c00427e4eac3ab53a87efaedf10622d9509b74787636719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6e7511837497f35c00427e4eac3ab53a87efaedf10622d9509b74787636719->leave($__internal_2b6e7511837497f35c00427e4eac3ab53a87efaedf10622d9509b74787636719_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a1260f5d790fe34d40e3ed7f3ed275abd2d3804af4f94a908d00ec7be52cc27 = $this->env->getExtension("native_profiler");
        $__internal_0a1260f5d790fe34d40e3ed7f3ed275abd2d3804af4f94a908d00ec7be52cc27->enter($__internal_0a1260f5d790fe34d40e3ed7f3ed275abd2d3804af4f94a908d00ec7be52cc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0a1260f5d790fe34d40e3ed7f3ed275abd2d3804af4f94a908d00ec7be52cc27->leave($__internal_0a1260f5d790fe34d40e3ed7f3ed275abd2d3804af4f94a908d00ec7be52cc27_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
