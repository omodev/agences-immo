<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71b53204324f654154276ca867ac01813c472d668a088a2896e7baccb1304313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efe1207b91378aa2e75fae6c43b428b716d62e9cb44a5d3fac8fa3206b727658 = $this->env->getExtension("native_profiler");
        $__internal_efe1207b91378aa2e75fae6c43b428b716d62e9cb44a5d3fac8fa3206b727658->enter($__internal_efe1207b91378aa2e75fae6c43b428b716d62e9cb44a5d3fac8fa3206b727658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_efe1207b91378aa2e75fae6c43b428b716d62e9cb44a5d3fac8fa3206b727658->leave($__internal_efe1207b91378aa2e75fae6c43b428b716d62e9cb44a5d3fac8fa3206b727658_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
