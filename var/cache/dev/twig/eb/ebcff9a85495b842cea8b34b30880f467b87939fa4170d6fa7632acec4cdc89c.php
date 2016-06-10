<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c2bfe83be677784b74207a09dd7fd8e385d4a80c9f8a4e18bc46630301c16aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_074fdc2b894a5e1578beaa69c0a986a7a8c72ae004ef04401f9661e778a533a2 = $this->env->getExtension("native_profiler");
        $__internal_074fdc2b894a5e1578beaa69c0a986a7a8c72ae004ef04401f9661e778a533a2->enter($__internal_074fdc2b894a5e1578beaa69c0a986a7a8c72ae004ef04401f9661e778a533a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074fdc2b894a5e1578beaa69c0a986a7a8c72ae004ef04401f9661e778a533a2->leave($__internal_074fdc2b894a5e1578beaa69c0a986a7a8c72ae004ef04401f9661e778a533a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b74a0b75dc531f0a627a6b9f6ff03b6445e43efa1e27e3bebe0fd82028697c7a = $this->env->getExtension("native_profiler");
        $__internal_b74a0b75dc531f0a627a6b9f6ff03b6445e43efa1e27e3bebe0fd82028697c7a->enter($__internal_b74a0b75dc531f0a627a6b9f6ff03b6445e43efa1e27e3bebe0fd82028697c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b74a0b75dc531f0a627a6b9f6ff03b6445e43efa1e27e3bebe0fd82028697c7a->leave($__internal_b74a0b75dc531f0a627a6b9f6ff03b6445e43efa1e27e3bebe0fd82028697c7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68eccd8c89640dd5b22f43cb3b8dbaf6001b67f43c3544758fb9cc1aae7f2d9f = $this->env->getExtension("native_profiler");
        $__internal_68eccd8c89640dd5b22f43cb3b8dbaf6001b67f43c3544758fb9cc1aae7f2d9f->enter($__internal_68eccd8c89640dd5b22f43cb3b8dbaf6001b67f43c3544758fb9cc1aae7f2d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68eccd8c89640dd5b22f43cb3b8dbaf6001b67f43c3544758fb9cc1aae7f2d9f->leave($__internal_68eccd8c89640dd5b22f43cb3b8dbaf6001b67f43c3544758fb9cc1aae7f2d9f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff3ae0bd6a619b4d4334928619d09d0b785fa10bf162bcb14f6c63da131ff9a4 = $this->env->getExtension("native_profiler");
        $__internal_ff3ae0bd6a619b4d4334928619d09d0b785fa10bf162bcb14f6c63da131ff9a4->enter($__internal_ff3ae0bd6a619b4d4334928619d09d0b785fa10bf162bcb14f6c63da131ff9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff3ae0bd6a619b4d4334928619d09d0b785fa10bf162bcb14f6c63da131ff9a4->leave($__internal_ff3ae0bd6a619b4d4334928619d09d0b785fa10bf162bcb14f6c63da131ff9a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
