<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_ecc0b6e384ba263cfe0877ada9ad335fdf41496a4910455734a576a61283a6ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "UserBundle::layout.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_offset($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">


          ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "haspreviousSession", array())) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "all", array(), "method"));
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
    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 21
        echo "            ";
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  88 => 20,  82 => 22,  80 => 20,  77 => 19,  74 => 18,  66 => 15,  57 => 12,  54 => 11,  50 => 10,  44 => 8,  39 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
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
