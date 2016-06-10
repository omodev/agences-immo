<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0cddfb921a9b0404e187f14cd9c580bbc49a9cb1ec36dad336ecbfad1d13cf04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cd73b46735ed0cfa81762c4f7597a40219c2677c72267c386d9c96144eada7f = $this->env->getExtension("native_profiler");
        $__internal_1cd73b46735ed0cfa81762c4f7597a40219c2677c72267c386d9c96144eada7f->enter($__internal_1cd73b46735ed0cfa81762c4f7597a40219c2677c72267c386d9c96144eada7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1cd73b46735ed0cfa81762c4f7597a40219c2677c72267c386d9c96144eada7f->leave($__internal_1cd73b46735ed0cfa81762c4f7597a40219c2677c72267c386d9c96144eada7f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f1de22d4327b5855b9dc2e5c9cfda84c8592349ed6124f270422b64e3b7d53e9 = $this->env->getExtension("native_profiler");
        $__internal_f1de22d4327b5855b9dc2e5c9cfda84c8592349ed6124f270422b64e3b7d53e9->enter($__internal_f1de22d4327b5855b9dc2e5c9cfda84c8592349ed6124f270422b64e3b7d53e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f1de22d4327b5855b9dc2e5c9cfda84c8592349ed6124f270422b64e3b7d53e9->leave($__internal_f1de22d4327b5855b9dc2e5c9cfda84c8592349ed6124f270422b64e3b7d53e9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c49e922d9ab682b117f43703b4d24660af119c3a3a2670d0216e02a933fd4586 = $this->env->getExtension("native_profiler");
        $__internal_c49e922d9ab682b117f43703b4d24660af119c3a3a2670d0216e02a933fd4586->enter($__internal_c49e922d9ab682b117f43703b4d24660af119c3a3a2670d0216e02a933fd4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c49e922d9ab682b117f43703b4d24660af119c3a3a2670d0216e02a933fd4586->leave($__internal_c49e922d9ab682b117f43703b4d24660af119c3a3a2670d0216e02a933fd4586_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c45e4d96c3c90419470792e9804033be566cdca4e5a91851ce9286df1289863a = $this->env->getExtension("native_profiler");
        $__internal_c45e4d96c3c90419470792e9804033be566cdca4e5a91851ce9286df1289863a->enter($__internal_c45e4d96c3c90419470792e9804033be566cdca4e5a91851ce9286df1289863a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c45e4d96c3c90419470792e9804033be566cdca4e5a91851ce9286df1289863a->leave($__internal_c45e4d96c3c90419470792e9804033be566cdca4e5a91851ce9286df1289863a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
