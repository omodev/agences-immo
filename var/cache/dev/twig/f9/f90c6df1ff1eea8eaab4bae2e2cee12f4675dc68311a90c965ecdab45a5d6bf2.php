<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_99f96e2645e071a002c1d86bc7b7e08a735118c7dddb7c378ea24d938a9ce154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8695dc0e34ffc6f72905cf9cc6d6c771d79da71c0ae8fbb4dc2a510c25d2895b = $this->env->getExtension("native_profiler");
        $__internal_8695dc0e34ffc6f72905cf9cc6d6c771d79da71c0ae8fbb4dc2a510c25d2895b->enter($__internal_8695dc0e34ffc6f72905cf9cc6d6c771d79da71c0ae8fbb4dc2a510c25d2895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8695dc0e34ffc6f72905cf9cc6d6c771d79da71c0ae8fbb4dc2a510c25d2895b->leave($__internal_8695dc0e34ffc6f72905cf9cc6d6c771d79da71c0ae8fbb4dc2a510c25d2895b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5eb46aa99041db64da9f422872df33b678a371b73b91686abe2b58a2e817a82 = $this->env->getExtension("native_profiler");
        $__internal_d5eb46aa99041db64da9f422872df33b678a371b73b91686abe2b58a2e817a82->enter($__internal_d5eb46aa99041db64da9f422872df33b678a371b73b91686abe2b58a2e817a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d5eb46aa99041db64da9f422872df33b678a371b73b91686abe2b58a2e817a82->leave($__internal_d5eb46aa99041db64da9f422872df33b678a371b73b91686abe2b58a2e817a82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
