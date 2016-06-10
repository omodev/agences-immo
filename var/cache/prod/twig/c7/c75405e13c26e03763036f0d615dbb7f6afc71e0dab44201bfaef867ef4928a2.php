<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_9c9b474019b0e2cdd3018e23ad6bc988754f87d20a40db65402f44dd1cd1c23e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "@FOSUser/layout.html.twig", 1);
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
        echo "

<div class=\"container\">


          ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "haspreviousSession", array())) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 10
                echo "<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
    <ul>
            ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 13
                    echo "              <li>
                    ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                    echo "
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "          </ul>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "       ";
        }
        // line 21
        echo "        <div>
            ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        </div>
        </div>
        ";
    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 23
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  90 => 22,  84 => 24,  82 => 22,  79 => 21,  76 => 20,  68 => 17,  59 => 14,  56 => 13,  52 => 12,  46 => 10,  41 => 9,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* {% block offset %}*/
/* */
/* */
/* <div class="container">*/
/* */
/* */
/*           {% if app.request.haspreviousSession %}*/
/*         {% for type, messages in app.session.flashBag.all %}*/
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
