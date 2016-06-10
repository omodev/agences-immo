<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_699bf5e96e45afe5f23e1b806d63897d28298308ce0fd469c802a6376ec5b68e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4dbf741efbbbfe55cda40bd9d667c05746cc42df599b846f19c4962354ccdf54 = $this->env->getExtension("native_profiler");
        $__internal_4dbf741efbbbfe55cda40bd9d667c05746cc42df599b846f19c4962354ccdf54->enter($__internal_4dbf741efbbbfe55cda40bd9d667c05746cc42df599b846f19c4962354ccdf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbf741efbbbfe55cda40bd9d667c05746cc42df599b846f19c4962354ccdf54->leave($__internal_4dbf741efbbbfe55cda40bd9d667c05746cc42df599b846f19c4962354ccdf54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd6e8ea2ecb22a40e004507ff69204d4a4c2ec9dc0b43c94b3294ca41e8bd775 = $this->env->getExtension("native_profiler");
        $__internal_dd6e8ea2ecb22a40e004507ff69204d4a4c2ec9dc0b43c94b3294ca41e8bd775->enter($__internal_dd6e8ea2ecb22a40e004507ff69204d4a4c2ec9dc0b43c94b3294ca41e8bd775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_dd6e8ea2ecb22a40e004507ff69204d4a4c2ec9dc0b43c94b3294ca41e8bd775->leave($__internal_dd6e8ea2ecb22a40e004507ff69204d4a4c2ec9dc0b43c94b3294ca41e8bd775_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
