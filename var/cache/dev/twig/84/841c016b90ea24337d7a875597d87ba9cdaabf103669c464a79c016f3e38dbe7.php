<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_95c73d93826dbcf012119026c9c257129ef408414317e0e5d565c265b3b3befc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a8361e72557f89a6bae305c5e077be75d8edfecb1bce5dfd423aa56ce916c73 = $this->env->getExtension("native_profiler");
        $__internal_5a8361e72557f89a6bae305c5e077be75d8edfecb1bce5dfd423aa56ce916c73->enter($__internal_5a8361e72557f89a6bae305c5e077be75d8edfecb1bce5dfd423aa56ce916c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5a8361e72557f89a6bae305c5e077be75d8edfecb1bce5dfd423aa56ce916c73->leave($__internal_5a8361e72557f89a6bae305c5e077be75d8edfecb1bce5dfd423aa56ce916c73_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b95a41bfe1a4240b4498bb846ff27ca078340739cd8d7b624ccef5863ab2f7e = $this->env->getExtension("native_profiler");
        $__internal_3b95a41bfe1a4240b4498bb846ff27ca078340739cd8d7b624ccef5863ab2f7e->enter($__internal_3b95a41bfe1a4240b4498bb846ff27ca078340739cd8d7b624ccef5863ab2f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3b95a41bfe1a4240b4498bb846ff27ca078340739cd8d7b624ccef5863ab2f7e->leave($__internal_3b95a41bfe1a4240b4498bb846ff27ca078340739cd8d7b624ccef5863ab2f7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
