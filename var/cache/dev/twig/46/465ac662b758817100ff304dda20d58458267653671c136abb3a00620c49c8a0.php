<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_fb3adf9164617e0164c3ddbbc4ac72c872272cff2703dbb95d411cbaf601b05d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8aeda8ba862d38b01c11670989e04a60608d2910527af56c59ab74c1a45de958 = $this->env->getExtension("native_profiler");
        $__internal_8aeda8ba862d38b01c11670989e04a60608d2910527af56c59ab74c1a45de958->enter($__internal_8aeda8ba862d38b01c11670989e04a60608d2910527af56c59ab74c1a45de958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aeda8ba862d38b01c11670989e04a60608d2910527af56c59ab74c1a45de958->leave($__internal_8aeda8ba862d38b01c11670989e04a60608d2910527af56c59ab74c1a45de958_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4074dc3ebaa8fb8a846ac44a48333946c193cf4b4c71366d0662c629a2a00a0a = $this->env->getExtension("native_profiler");
        $__internal_4074dc3ebaa8fb8a846ac44a48333946c193cf4b4c71366d0662c629a2a00a0a->enter($__internal_4074dc3ebaa8fb8a846ac44a48333946c193cf4b4c71366d0662c629a2a00a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4074dc3ebaa8fb8a846ac44a48333946c193cf4b4c71366d0662c629a2a00a0a->leave($__internal_4074dc3ebaa8fb8a846ac44a48333946c193cf4b4c71366d0662c629a2a00a0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
