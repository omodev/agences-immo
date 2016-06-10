<?php

/* AGPlatformBundle:Agence:lloue.html.twig */
class __TwigTemplate_03f214f367645c3c849a31dae377ee328ab06b2204165f88bd365ddaf9041c30 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_offset($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listannonceloues"]) ? $context["listannonceloues"] : null));
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
        return array (  100 => 40,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  62 => 26,  57 => 25,  53 => 24,  31 => 4,  28 => 3,  11 => 1,);
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
