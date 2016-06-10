<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_27b76f4410f37abbe0d5f1defad5a0cce077cb6b0e868832c2ee66cfe857ddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b58e8d577dc0d96e35d2faddad6aff246bf9d76264bedc6e40bb9e08c44cd78 = $this->env->getExtension("native_profiler");
        $__internal_2b58e8d577dc0d96e35d2faddad6aff246bf9d76264bedc6e40bb9e08c44cd78->enter($__internal_2b58e8d577dc0d96e35d2faddad6aff246bf9d76264bedc6e40bb9e08c44cd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b58e8d577dc0d96e35d2faddad6aff246bf9d76264bedc6e40bb9e08c44cd78->leave($__internal_2b58e8d577dc0d96e35d2faddad6aff246bf9d76264bedc6e40bb9e08c44cd78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15d1a2a582e5cbf8b071215e7beb2bc9b9bdfa2bb8d08b9433fdc79419dadd77 = $this->env->getExtension("native_profiler");
        $__internal_15d1a2a582e5cbf8b071215e7beb2bc9b9bdfa2bb8d08b9433fdc79419dadd77->enter($__internal_15d1a2a582e5cbf8b071215e7beb2bc9b9bdfa2bb8d08b9433fdc79419dadd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_15d1a2a582e5cbf8b071215e7beb2bc9b9bdfa2bb8d08b9433fdc79419dadd77->leave($__internal_15d1a2a582e5cbf8b071215e7beb2bc9b9bdfa2bb8d08b9433fdc79419dadd77_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_12eaf33de08272e6f6ba848b6f59b474737e0966b8016d6c38f91b95aab15a20 = $this->env->getExtension("native_profiler");
        $__internal_12eaf33de08272e6f6ba848b6f59b474737e0966b8016d6c38f91b95aab15a20->enter($__internal_12eaf33de08272e6f6ba848b6f59b474737e0966b8016d6c38f91b95aab15a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_12eaf33de08272e6f6ba848b6f59b474737e0966b8016d6c38f91b95aab15a20->leave($__internal_12eaf33de08272e6f6ba848b6f59b474737e0966b8016d6c38f91b95aab15a20_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a2d362fd5aee4883a2d5b6a7e09389207b1d4d41fcee995e250ac6063b7a78f = $this->env->getExtension("native_profiler");
        $__internal_0a2d362fd5aee4883a2d5b6a7e09389207b1d4d41fcee995e250ac6063b7a78f->enter($__internal_0a2d362fd5aee4883a2d5b6a7e09389207b1d4d41fcee995e250ac6063b7a78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0a2d362fd5aee4883a2d5b6a7e09389207b1d4d41fcee995e250ac6063b7a78f->leave($__internal_0a2d362fd5aee4883a2d5b6a7e09389207b1d4d41fcee995e250ac6063b7a78f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
