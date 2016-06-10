<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cb19546a0e72ca6047da0bc35c0380501bc97fbe2af15604e3e191ee9e224cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_3731a92302003db0a3131ef1f811acd79994e3fb8204fbd843ba31a743a6da74 = $this->env->getExtension("native_profiler");
        $__internal_3731a92302003db0a3131ef1f811acd79994e3fb8204fbd843ba31a743a6da74->enter($__internal_3731a92302003db0a3131ef1f811acd79994e3fb8204fbd843ba31a743a6da74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3731a92302003db0a3131ef1f811acd79994e3fb8204fbd843ba31a743a6da74->leave($__internal_3731a92302003db0a3131ef1f811acd79994e3fb8204fbd843ba31a743a6da74_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9c78af0fcbd5adf82707a6d434d8874eecc659ce52cd7f96cde3f55a70d58c5 = $this->env->getExtension("native_profiler");
        $__internal_d9c78af0fcbd5adf82707a6d434d8874eecc659ce52cd7f96cde3f55a70d58c5->enter($__internal_d9c78af0fcbd5adf82707a6d434d8874eecc659ce52cd7f96cde3f55a70d58c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<h1 class=\"login-header\" > LOGIN </h1>
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
<div class=\"form-group\" >
    <label for=\"username\" class=\"form-label login-label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-label\" />
</div>
<div class=\"form-group\" >
    <label for=\"password\" class=\"form-label login-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-label\"/>
    </div>
<div class=\"form-group\" >
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\" class=\"login-label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
</div>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"  class=\"btn btn-success\"/>
</form>
";
        
        $__internal_d9c78af0fcbd5adf82707a6d434d8874eecc659ce52cd7f96cde3f55a70d58c5->leave($__internal_d9c78af0fcbd5adf82707a6d434d8874eecc659ce52cd7f96cde3f55a70d58c5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  81 => 23,  73 => 18,  67 => 15,  63 => 14,  58 => 12,  54 => 11,  51 => 10,  45 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <h1 class="login-header" > LOGIN </h1>*/
/* {% if error %}*/
/*     <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* <div class="form-group" >*/
/*     <label for="username" class="form-label login-label">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-label" />*/
/* </div>*/
/* <div class="form-group" >*/
/*     <label for="password" class="form-label login-label">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required"  class="form-label"/>*/
/*     </div>*/
/* <div class="form-group" >*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me" class="login-label">{{ 'security.login.remember_me'|trans }}</label>*/
/* </div>*/
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}"  class="btn btn-success"/>*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
