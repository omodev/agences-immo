<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_115707b9a8bf052230dbfd51daec6040cd31eb7ec40f090d0339bd16ba707c7c extends Twig_Template
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
        $__internal_576a9e0fba4ef3939f47115182e86840cd9da293019b3de606e6720a27c1b02f = $this->env->getExtension("native_profiler");
        $__internal_576a9e0fba4ef3939f47115182e86840cd9da293019b3de606e6720a27c1b02f->enter($__internal_576a9e0fba4ef3939f47115182e86840cd9da293019b3de606e6720a27c1b02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_576a9e0fba4ef3939f47115182e86840cd9da293019b3de606e6720a27c1b02f->leave($__internal_576a9e0fba4ef3939f47115182e86840cd9da293019b3de606e6720a27c1b02f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f29c85ed50a1e09df72ec54efcec3057cf49e996cdd724e221fa566513245d8d = $this->env->getExtension("native_profiler");
        $__internal_f29c85ed50a1e09df72ec54efcec3057cf49e996cdd724e221fa566513245d8d->enter($__internal_f29c85ed50a1e09df72ec54efcec3057cf49e996cdd724e221fa566513245d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f29c85ed50a1e09df72ec54efcec3057cf49e996cdd724e221fa566513245d8d->leave($__internal_f29c85ed50a1e09df72ec54efcec3057cf49e996cdd724e221fa566513245d8d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a704dc9f717793346c89094e471bcd15a24ffa6e1e728243b524c0bf4cee112a = $this->env->getExtension("native_profiler");
        $__internal_a704dc9f717793346c89094e471bcd15a24ffa6e1e728243b524c0bf4cee112a->enter($__internal_a704dc9f717793346c89094e471bcd15a24ffa6e1e728243b524c0bf4cee112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a704dc9f717793346c89094e471bcd15a24ffa6e1e728243b524c0bf4cee112a->leave($__internal_a704dc9f717793346c89094e471bcd15a24ffa6e1e728243b524c0bf4cee112a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f15f05a9fa0e2e6af06d51f54ef6a0cacbc79856d207d200b5aef0dfa5bd373c = $this->env->getExtension("native_profiler");
        $__internal_f15f05a9fa0e2e6af06d51f54ef6a0cacbc79856d207d200b5aef0dfa5bd373c->enter($__internal_f15f05a9fa0e2e6af06d51f54ef6a0cacbc79856d207d200b5aef0dfa5bd373c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f15f05a9fa0e2e6af06d51f54ef6a0cacbc79856d207d200b5aef0dfa5bd373c->leave($__internal_f15f05a9fa0e2e6af06d51f54ef6a0cacbc79856d207d200b5aef0dfa5bd373c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
