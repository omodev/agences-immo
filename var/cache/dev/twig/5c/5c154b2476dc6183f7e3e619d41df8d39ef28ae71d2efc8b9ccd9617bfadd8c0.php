<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_2551b61f469333016136cc41114f63bd56edd4b57acd6c092f92b2fa26e2492b extends Twig_Template
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
        $__internal_5d8437d99585fdd61839f8dda57e3029d81c227794fb9b3bbd967c76d753f31e = $this->env->getExtension("native_profiler");
        $__internal_5d8437d99585fdd61839f8dda57e3029d81c227794fb9b3bbd967c76d753f31e->enter($__internal_5d8437d99585fdd61839f8dda57e3029d81c227794fb9b3bbd967c76d753f31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "    <li>
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
        
        $__internal_5d8437d99585fdd61839f8dda57e3029d81c227794fb9b3bbd967c76d753f31e->leave($__internal_5d8437d99585fdd61839f8dda57e3029d81c227794fb9b3bbd967c76d753f31e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  37 => 7,  33 => 6,  30 => 5,  26 => 4,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
