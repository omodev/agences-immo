<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_28f680b18b3a6ac2bd0af9a78389835e967c2e5e303ae34c0e4c2e205895fec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_695ab0c5f53efe2c5e794ffdc69a18e074361ef95aa053b1d009956981f6483f = $this->env->getExtension("native_profiler");
        $__internal_695ab0c5f53efe2c5e794ffdc69a18e074361ef95aa053b1d009956981f6483f->enter($__internal_695ab0c5f53efe2c5e794ffdc69a18e074361ef95aa053b1d009956981f6483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_695ab0c5f53efe2c5e794ffdc69a18e074361ef95aa053b1d009956981f6483f->leave($__internal_695ab0c5f53efe2c5e794ffdc69a18e074361ef95aa053b1d009956981f6483f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2967cb1543a5e7faa4b0e66d5a2850233df09ec02373f312f298e3f89eadeff7 = $this->env->getExtension("native_profiler");
        $__internal_2967cb1543a5e7faa4b0e66d5a2850233df09ec02373f312f298e3f89eadeff7->enter($__internal_2967cb1543a5e7faa4b0e66d5a2850233df09ec02373f312f298e3f89eadeff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2967cb1543a5e7faa4b0e66d5a2850233df09ec02373f312f298e3f89eadeff7->leave($__internal_2967cb1543a5e7faa4b0e66d5a2850233df09ec02373f312f298e3f89eadeff7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
