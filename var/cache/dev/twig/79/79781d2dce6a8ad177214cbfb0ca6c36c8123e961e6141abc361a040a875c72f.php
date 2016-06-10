<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_a8f7788e9aac955ff7cf572d5545644b4f5d1a354baba68f02c2dd24e2eccaed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d87fa93d8d31db15bdf7b592af540c80e72faa521b39474507a609eb095ae39 = $this->env->getExtension("native_profiler");
        $__internal_9d87fa93d8d31db15bdf7b592af540c80e72faa521b39474507a609eb095ae39->enter($__internal_9d87fa93d8d31db15bdf7b592af540c80e72faa521b39474507a609eb095ae39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d87fa93d8d31db15bdf7b592af540c80e72faa521b39474507a609eb095ae39->leave($__internal_9d87fa93d8d31db15bdf7b592af540c80e72faa521b39474507a609eb095ae39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ac534b0146a7863cac6deeabbedc873958253088aa597264b3942a631693ea3 = $this->env->getExtension("native_profiler");
        $__internal_3ac534b0146a7863cac6deeabbedc873958253088aa597264b3942a631693ea3->enter($__internal_3ac534b0146a7863cac6deeabbedc873958253088aa597264b3942a631693ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3ac534b0146a7863cac6deeabbedc873958253088aa597264b3942a631693ea3->leave($__internal_3ac534b0146a7863cac6deeabbedc873958253088aa597264b3942a631693ea3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_497b0a1f28836086707bf86ab3b9f05e5938c331a60e50cf8ade83237a1ff652 = $this->env->getExtension("native_profiler");
        $__internal_497b0a1f28836086707bf86ab3b9f05e5938c331a60e50cf8ade83237a1ff652->enter($__internal_497b0a1f28836086707bf86ab3b9f05e5938c331a60e50cf8ade83237a1ff652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_497b0a1f28836086707bf86ab3b9f05e5938c331a60e50cf8ade83237a1ff652->leave($__internal_497b0a1f28836086707bf86ab3b9f05e5938c331a60e50cf8ade83237a1ff652_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c8935c0f932d63ccf7f211c4869ea1eddd09504ef60812e8a4f4d04a116f4d9b = $this->env->getExtension("native_profiler");
        $__internal_c8935c0f932d63ccf7f211c4869ea1eddd09504ef60812e8a4f4d04a116f4d9b->enter($__internal_c8935c0f932d63ccf7f211c4869ea1eddd09504ef60812e8a4f4d04a116f4d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_c8935c0f932d63ccf7f211c4869ea1eddd09504ef60812e8a4f4d04a116f4d9b->leave($__internal_c8935c0f932d63ccf7f211c4869ea1eddd09504ef60812e8a4f4d04a116f4d9b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
