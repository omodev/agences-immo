<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_daff443fadcb171dfb5277c6883d438055da45e4ae951d176df440d405cfa5aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5af531865dc78923555baf3ab919920de7f3c7ca207913355dc6c482d582b520 = $this->env->getExtension("native_profiler");
        $__internal_5af531865dc78923555baf3ab919920de7f3c7ca207913355dc6c482d582b520->enter($__internal_5af531865dc78923555baf3ab919920de7f3c7ca207913355dc6c482d582b520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af531865dc78923555baf3ab919920de7f3c7ca207913355dc6c482d582b520->leave($__internal_5af531865dc78923555baf3ab919920de7f3c7ca207913355dc6c482d582b520_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44835a044163a8da72649a8432ee1e5d9d7cc0d101bc4f4d18e6d0c9cd0abdee = $this->env->getExtension("native_profiler");
        $__internal_44835a044163a8da72649a8432ee1e5d9d7cc0d101bc4f4d18e6d0c9cd0abdee->enter($__internal_44835a044163a8da72649a8432ee1e5d9d7cc0d101bc4f4d18e6d0c9cd0abdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_44835a044163a8da72649a8432ee1e5d9d7cc0d101bc4f4d18e6d0c9cd0abdee->leave($__internal_44835a044163a8da72649a8432ee1e5d9d7cc0d101bc4f4d18e6d0c9cd0abdee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5338acea5727cb2892e10d3b1ee430594b99c78bee47a0e26dd9c3aa6f58c0f = $this->env->getExtension("native_profiler");
        $__internal_b5338acea5727cb2892e10d3b1ee430594b99c78bee47a0e26dd9c3aa6f58c0f->enter($__internal_b5338acea5727cb2892e10d3b1ee430594b99c78bee47a0e26dd9c3aa6f58c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b5338acea5727cb2892e10d3b1ee430594b99c78bee47a0e26dd9c3aa6f58c0f->leave($__internal_b5338acea5727cb2892e10d3b1ee430594b99c78bee47a0e26dd9c3aa6f58c0f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
