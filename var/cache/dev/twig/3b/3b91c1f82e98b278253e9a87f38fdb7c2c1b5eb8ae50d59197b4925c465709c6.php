<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_950d1c4983f3e5aa5907393769aa72767a89b00c2e4d9fda11e491ab405f6d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6e0f7b479316a782a4dd068f034b6741404a9b0b62a8ab0e47fba03ab302fda1 = $this->env->getExtension("native_profiler");
        $__internal_6e0f7b479316a782a4dd068f034b6741404a9b0b62a8ab0e47fba03ab302fda1->enter($__internal_6e0f7b479316a782a4dd068f034b6741404a9b0b62a8ab0e47fba03ab302fda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0f7b479316a782a4dd068f034b6741404a9b0b62a8ab0e47fba03ab302fda1->leave($__internal_6e0f7b479316a782a4dd068f034b6741404a9b0b62a8ab0e47fba03ab302fda1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_796f33015a757c6bb4cd9f1209a9b75758185c06c6492e591816eee824ffffe2 = $this->env->getExtension("native_profiler");
        $__internal_796f33015a757c6bb4cd9f1209a9b75758185c06c6492e591816eee824ffffe2->enter($__internal_796f33015a757c6bb4cd9f1209a9b75758185c06c6492e591816eee824ffffe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_796f33015a757c6bb4cd9f1209a9b75758185c06c6492e591816eee824ffffe2->leave($__internal_796f33015a757c6bb4cd9f1209a9b75758185c06c6492e591816eee824ffffe2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccf072496798338815e51d464e911a56bd7030d35fe2f76c3a36a4387060a513 = $this->env->getExtension("native_profiler");
        $__internal_ccf072496798338815e51d464e911a56bd7030d35fe2f76c3a36a4387060a513->enter($__internal_ccf072496798338815e51d464e911a56bd7030d35fe2f76c3a36a4387060a513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ccf072496798338815e51d464e911a56bd7030d35fe2f76c3a36a4387060a513->leave($__internal_ccf072496798338815e51d464e911a56bd7030d35fe2f76c3a36a4387060a513_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_726b0267820197b8acb05ac5e1e795917a67a03d61be9e1c4625f62d6cc51896 = $this->env->getExtension("native_profiler");
        $__internal_726b0267820197b8acb05ac5e1e795917a67a03d61be9e1c4625f62d6cc51896->enter($__internal_726b0267820197b8acb05ac5e1e795917a67a03d61be9e1c4625f62d6cc51896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_726b0267820197b8acb05ac5e1e795917a67a03d61be9e1c4625f62d6cc51896->leave($__internal_726b0267820197b8acb05ac5e1e795917a67a03d61be9e1c4625f62d6cc51896_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
