<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b5b4e8bd537a54ad228d8c63900c847d986649e028f7ce712034dbf7f37b2c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_ff3e7c8cd209526c8664c22146165c94a8a08623520a47bf0d30af446df066a1 = $this->env->getExtension("native_profiler");
        $__internal_ff3e7c8cd209526c8664c22146165c94a8a08623520a47bf0d30af446df066a1->enter($__internal_ff3e7c8cd209526c8664c22146165c94a8a08623520a47bf0d30af446df066a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3e7c8cd209526c8664c22146165c94a8a08623520a47bf0d30af446df066a1->leave($__internal_ff3e7c8cd209526c8664c22146165c94a8a08623520a47bf0d30af446df066a1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ef304a83bccb7d68b0afbc97451266110ed35478699072436476a54fa9b687a = $this->env->getExtension("native_profiler");
        $__internal_7ef304a83bccb7d68b0afbc97451266110ed35478699072436476a54fa9b687a->enter($__internal_7ef304a83bccb7d68b0afbc97451266110ed35478699072436476a54fa9b687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\"><span class=\"lgg\" >USERNAME</span> <i class=\"fa fa-user\" aria-hidden=\"true\"></i></label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\"><span class=\"lgg\" >PASSWORD</span> <i class=\"fa fa-lock\" aria-hidden=\"true\"></i></label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />


    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"LOGIN\" class=\"ofbutton ofbutton-blue\"  />
</form>
";
        
        $__internal_7ef304a83bccb7d68b0afbc97451266110ed35478699072436476a54fa9b687a->leave($__internal_7ef304a83bccb7d68b0afbc97451266110ed35478699072436476a54fa9b687a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username"><span class="lgg" >USERNAME</span> <i class="fa fa-user" aria-hidden="true"></i></label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password"><span class="lgg" >PASSWORD</span> <i class="fa fa-lock" aria-hidden="true"></i></label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/* */
/*     <input type="submit" id="_submit" name="_submit" value="LOGIN" class="ofbutton ofbutton-blue"  />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
