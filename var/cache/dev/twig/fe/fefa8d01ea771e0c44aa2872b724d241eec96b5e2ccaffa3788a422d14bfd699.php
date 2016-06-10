<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c0d452b491e1739ccd1b9a615e45f04ebfc8ec382ab8598a170ac3c405b3d019 extends Twig_Template
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
        $__internal_7594d114548ef858cdeb8355a2be7e3c6b0b6f56c5f2a551f8c41192eec753ad = $this->env->getExtension("native_profiler");
        $__internal_7594d114548ef858cdeb8355a2be7e3c6b0b6f56c5f2a551f8c41192eec753ad->enter($__internal_7594d114548ef858cdeb8355a2be7e3c6b0b6f56c5f2a551f8c41192eec753ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7594d114548ef858cdeb8355a2be7e3c6b0b6f56c5f2a551f8c41192eec753ad->leave($__internal_7594d114548ef858cdeb8355a2be7e3c6b0b6f56c5f2a551f8c41192eec753ad_prof);

    }

    // line 2
    public function block_offset($context, array $blocks = array())
    {
        $__internal_38c4ad9b1284c9bbe08b8fc43fff11788ea3ac8cea78fd12097023dd3d33290a = $this->env->getExtension("native_profiler");
        $__internal_38c4ad9b1284c9bbe08b8fc43fff11788ea3ac8cea78fd12097023dd3d33290a->enter($__internal_38c4ad9b1284c9bbe08b8fc43fff11788ea3ac8cea78fd12097023dd3d33290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 3
        echo "

<div class=\"container\">


          ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "haspreviousSession", array())) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
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
        
        $__internal_38c4ad9b1284c9bbe08b8fc43fff11788ea3ac8cea78fd12097023dd3d33290a->leave($__internal_38c4ad9b1284c9bbe08b8fc43fff11788ea3ac8cea78fd12097023dd3d33290a_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d61b56c1beff6de3d6afbce70aa308c4553dd3509124151a61649db7b7c7ce58 = $this->env->getExtension("native_profiler");
        $__internal_d61b56c1beff6de3d6afbce70aa308c4553dd3509124151a61649db7b7c7ce58->enter($__internal_d61b56c1beff6de3d6afbce70aa308c4553dd3509124151a61649db7b7c7ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_d61b56c1beff6de3d6afbce70aa308c4553dd3509124151a61649db7b7c7ce58->leave($__internal_d61b56c1beff6de3d6afbce70aa308c4553dd3509124151a61649db7b7c7ce58_prof);

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
        return array (  108 => 23,  102 => 22,  93 => 24,  91 => 22,  88 => 21,  85 => 20,  77 => 17,  68 => 14,  65 => 13,  61 => 12,  55 => 10,  50 => 9,  48 => 8,  41 => 3,  35 => 2,  11 => 1,);
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
