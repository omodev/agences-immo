<?php

/* AGPlatformBundle:Agence:lloue.html.twig */
class __TwigTemplate_dfcd7b28f82b65a089569ef3b54284ce9adcd8832a42452d5a6d7d6b65525c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:lloue.html.twig", 1);
        $this->blocks = array(
            'offset' => array($this, 'block_offset'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AGPlatformBundle:Agence:layoutheader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12e8b5d103b9aaf1fc7c00bc7deffbedc3331aa5e228772594472f805bcd5030 = $this->env->getExtension("native_profiler");
        $__internal_12e8b5d103b9aaf1fc7c00bc7deffbedc3331aa5e228772594472f805bcd5030->enter($__internal_12e8b5d103b9aaf1fc7c00bc7deffbedc3331aa5e228772594472f805bcd5030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AGPlatformBundle:Agence:lloue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e8b5d103b9aaf1fc7c00bc7deffbedc3331aa5e228772594472f805bcd5030->leave($__internal_12e8b5d103b9aaf1fc7c00bc7deffbedc3331aa5e228772594472f805bcd5030_prof);

    }

    // line 3
    public function block_offset($context, array $blocks = array())
    {
        $__internal_161624bf656d0bcbc9ed14c73510582d1ea02e7aee3cf7481e70886aa33075a6 = $this->env->getExtension("native_profiler");
        $__internal_161624bf656d0bcbc9ed14c73510582d1ea02e7aee3cf7481e70886aa33075a6->enter($__internal_161624bf656d0bcbc9ed14c73510582d1ea02e7aee3cf7481e70886aa33075a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offset"));

        // line 4
        echo "<h1 class=\"intro\"> Les maisons louées <i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i>
<div class=\"container\">
<table class=\"table\">
<tr>
  <th>owner</th>
  <th>prixI</th>
  <th>dateI</th>
  <th>surface</th>
  <th>ville</th>
  <th>rue</th>
<th>prixF </th>
<th>dateF </th>




 </tr>


<tr>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listannonceloues"]) ? $context["listannonceloues"] : $this->getContext($context, "listannonceloues")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 25
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "owner", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "datei", array()), "d/M/Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "surface", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "rue", array()), "html", null, true);
            echo "</td>
  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prixf", array()), "html", null, true);
            echo "</td>
  <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "datef", array()), "d/M/Y"), "html", null, true);
            echo "</td>



</tr>


  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
</div>
";
        
        $__internal_161624bf656d0bcbc9ed14c73510582d1ea02e7aee3cf7481e70886aa33075a6->leave($__internal_161624bf656d0bcbc9ed14c73510582d1ea02e7aee3cf7481e70886aa33075a6_prof);

    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:lloue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* */
/* {% block offset %}*/
/* <h1 class="intro"> Les maisons louées <i class="fa fa-hand-o-down" aria-hidden="true"></i>*/
/* <div class="container">*/
/* <table class="table">*/
/* <tr>*/
/*   <th>owner</th>*/
/*   <th>prixI</th>*/
/*   <th>dateI</th>*/
/*   <th>surface</th>*/
/*   <th>ville</th>*/
/*   <th>rue</th>*/
/* <th>prixF </th>*/
/* <th>dateF </th>*/
/* */
/* */
/* */
/* */
/*  </tr>*/
/* */
/* */
/* <tr>*/
/*   {% for annonce in listannonceloues %}*/
/*     <td>{{ annonce.owner }}</td>*/
/*     <td>{{ annonce.prix }}</td>*/
/* 	<td>{{ annonce.datei|date("d/M/Y") }}</td>*/
/* 	<td>{{ annonce.surface }}</td>*/
/* 	<td>{{ annonce.ville }}</td>*/
/* 	<td>{{ annonce.rue }}</td>*/
/*   <td>{{ annonce.prixf }}</td>*/
/*   <td>{{ annonce.datef|date("d/M/Y") }}</td>*/
/* */
/* */
/* */
/* </tr>*/
/* */
/* */
/*   {% endfor %}*/
/* </table>*/
/* </div>*/
/* {% endblock %}*/
/* */
