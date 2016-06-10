<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_25c7cff93b60f59765c1828b6fc6ba0d731a74a2f1facfe8e10d8825aad66c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'offset' => array($this, 'block_offset'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AGPlatformBundle:Agence:layoutheader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cd90f151d838f9343355ccae73b39dd9741a85e64b16de3fe93a94e43ae26ec = $this->env->getExtension("native_profiler");
        $__internal_2cd90f151d838f9343355ccae73b39dd9741a85e64b16de3fe93a94e43ae26ec->enter($__internal_2cd90f151d838f9343355ccae73b39dd9741a85e64b16de3fe93a94e43ae26ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd90f151d838f9343355ccae73b39dd9741a85e64b16de3fe93a94e43ae26ec->leave($__internal_2cd90f151d838f9343355ccae73b39dd9741a85e64b16de3fe93a94e43ae26ec_prof);

    }

    // line 2
    public function block_offset($context, array $blocks = array())
    {
        $__internal_3a32abb42c9866ae75af44a45913281b037954a482167190b0195eb302fe8742 = $this->env->getExtension("native_profiler");
        $__internal_3a32abb42c9866ae75af44a45913281b037954a482167190b0195eb302fe8742->enter($__internal_3a32abb42c9866ae75af44a45913281b037954a482167190b0195eb302fe8742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 3
        echo "<div class=\"container\">


          ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "haspreviousSession", array())) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 8
                echo "<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
    <ul>
            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 11
                    echo "              <li>
                    ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                    echo "
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "          </ul>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "       ";
        }
        // line 19
        echo "        <div>
            ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "        </div>
        </div>
        ";
        
        $__internal_3a32abb42c9866ae75af44a45913281b037954a482167190b0195eb302fe8742->leave($__internal_3a32abb42c9866ae75af44a45913281b037954a482167190b0195eb302fe8742_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ac210f95d5a00bf7bb780b48d825e8472d834036f6952390a984cb9399f846c = $this->env->getExtension("native_profiler");
        $__internal_0ac210f95d5a00bf7bb780b48d825e8472d834036f6952390a984cb9399f846c->enter($__internal_0ac210f95d5a00bf7bb780b48d825e8472d834036f6952390a984cb9399f846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        echo "            ";
        
        $__internal_0ac210f95d5a00bf7bb780b48d825e8472d834036f6952390a984cb9399f846c->leave($__internal_0ac210f95d5a00bf7bb780b48d825e8472d834036f6952390a984cb9399f846c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  100 => 20,  91 => 22,  89 => 20,  86 => 19,  83 => 18,  75 => 15,  66 => 12,  63 => 11,  59 => 10,  53 => 8,  48 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* {% block offset %}*/
/* <div class="container">*/
/* */
/* */
/*           {% if app.request.haspreviousSession %}*/
/*         {% for type, messages in app.session.flashBag.all() %}*/
/* <div class="alert alert-{{ type }}">*/
/*     <ul>*/
/*             {% for message in messages %}*/
/*               <li>*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*             </div>*/
/*         {% endfor %}*/
/*        {% endif %}*/
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
