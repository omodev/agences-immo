<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4baf54c0ad4f20c31135997ac19f8873564019e2c4d00fcb6608e20b5d024792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_15dd79494a5e60c2e7cdf3756581ada3beb338daa558f621866fb55f011c0a12 = $this->env->getExtension("native_profiler");
        $__internal_15dd79494a5e60c2e7cdf3756581ada3beb338daa558f621866fb55f011c0a12->enter($__internal_15dd79494a5e60c2e7cdf3756581ada3beb338daa558f621866fb55f011c0a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dd79494a5e60c2e7cdf3756581ada3beb338daa558f621866fb55f011c0a12->leave($__internal_15dd79494a5e60c2e7cdf3756581ada3beb338daa558f621866fb55f011c0a12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_887e5020b2f781ebdf044af06eb22a75993d72081541c967d533336b9a09d1ff = $this->env->getExtension("native_profiler");
        $__internal_887e5020b2f781ebdf044af06eb22a75993d72081541c967d533336b9a09d1ff->enter($__internal_887e5020b2f781ebdf044af06eb22a75993d72081541c967d533336b9a09d1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_887e5020b2f781ebdf044af06eb22a75993d72081541c967d533336b9a09d1ff->leave($__internal_887e5020b2f781ebdf044af06eb22a75993d72081541c967d533336b9a09d1ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
