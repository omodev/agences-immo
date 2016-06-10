<?php

/* AGPlatformBundle:Agence:vu.html.twig */
class __TwigTemplate_9be7dae1f7f04bda515ba3079fcbb21feee1ce687015b6c38b36c3d503da0912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AGPlatformBundle:Agence:layoutheader.html.twig", "AGPlatformBundle:Agence:vu.html.twig", 1);
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

    // line 2
    public function block_offset($context, array $blocks = array())
    {
        // line 3
        echo "<h1 class=\"page-header\"> Gérer vos maisons dispo à la vente aisement<i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i> </h1>
<div class=\"container\">
<table class=\"table\">
<tr>
  <th>owner</th>
  <th>prix</th>
  <th>date</th>
  <th>surface</th>
  <th>ville</th>
  <th>rue</th>
  <th>supprimer</th>
  <th>modifier</th>
  <th>vendre</th>
 </tr>


<tr>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listannonce"]) ? $context["listannonce"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 21
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "owner", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "datei", array()), "d/M/Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "surface", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "rue", array()), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ag_platform_vsupprimer", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a></td>
\t<td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ag_platform_vmodifier", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
  <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ag_platform_vvendre", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i></a></td>

</tr>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "    <h2>Pas d'utilisateur trouvé.</h2>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "AGPlatformBundle:Agence:vu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  98 => 34,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  55 => 21,  50 => 20,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "AGPlatformBundle:Agence:layoutheader.html.twig" %}*/
/* {% block offset %}*/
/* <h1 class="page-header"> Gérer vos maisons dispo à la vente aisement<i class="fa fa-hand-o-down" aria-hidden="true"></i> </h1>*/
/* <div class="container">*/
/* <table class="table">*/
/* <tr>*/
/*   <th>owner</th>*/
/*   <th>prix</th>*/
/*   <th>date</th>*/
/*   <th>surface</th>*/
/*   <th>ville</th>*/
/*   <th>rue</th>*/
/*   <th>supprimer</th>*/
/*   <th>modifier</th>*/
/*   <th>vendre</th>*/
/*  </tr>*/
/* */
/* */
/* <tr>*/
/*   {% for annonce in listannonce %}*/
/*     <td>{{ annonce.owner }}</td>*/
/*     <td>{{ annonce.prix }}</td>*/
/* 	<td>{{ annonce.datei|date("d/M/Y") }}</td>*/
/* 	<td>{{ annonce.surface }}</td>*/
/* 	<td>{{ annonce.ville }}</td>*/
/* 	<td>{{ annonce.rue }}</td>*/
/* 	<td><a href="{{ path('ag_platform_vsupprimer', {'id':annonce.id}) }}"><i class="fa fa-times" aria-hidden="true"></i></a></td>*/
/* 	<td><a href="{{ path('ag_platform_vmodifier', {'id':annonce.id}) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>*/
/*   <td><a href="{{ path('ag_platform_vvendre', {'id':annonce.id}) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></td>*/
/* */
/* </tr>*/
/* */
/*   {% else %}*/
/*     <h2>Pas d'utilisateur trouvé.</h2>*/
/*   {% endfor %}*/
/* </table>*/
/* </div>*/
/* {% endblock %}*/
/* */
