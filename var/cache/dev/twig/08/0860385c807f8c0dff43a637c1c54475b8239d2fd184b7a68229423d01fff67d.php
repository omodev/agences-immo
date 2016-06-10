<?php

/* ::layout.html.twig */
class __TwigTemplate_cee9dd0835c1b8feb91f768bfd76b48715f48c6d7e5d966f7812aea7dc1ac7d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7d9a62a2379087a0f0d115b3a047c24707b176cb46ea2b98e7b9b808ddf06b4 = $this->env->getExtension("native_profiler");
        $__internal_e7d9a62a2379087a0f0d115b3a047c24707b176cb46ea2b98e7b9b808ddf06b4->enter($__internal_e7d9a62a2379087a0f0d115b3a047c24707b176cb46ea2b98e7b9b808ddf06b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>";
        
        $__internal_e7d9a62a2379087a0f0d115b3a047c24707b176cb46ea2b98e7b9b808ddf06b4->leave($__internal_e7d9a62a2379087a0f0d115b3a047c24707b176cb46ea2b98e7b9b808ddf06b4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4560fd63a22eedba3c24e327de69d9579df1fc34ad167dcaf476850fd797817b = $this->env->getExtension("native_profiler");
        $__internal_4560fd63a22eedba3c24e327de69d9579df1fc34ad167dcaf476850fd797817b->enter($__internal_4560fd63a22eedba3c24e327de69d9579df1fc34ad167dcaf476850fd797817b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_4560fd63a22eedba3c24e327de69d9579df1fc34ad167dcaf476850fd797817b->leave($__internal_4560fd63a22eedba3c24e327de69d9579df1fc34ad167dcaf476850fd797817b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76604fe2bb88e0ef62adf800c041eee5372cd6d8cccb1f132ba86e489329b8ff = $this->env->getExtension("native_profiler");
        $__internal_76604fe2bb88e0ef62adf800c041eee5372cd6d8cccb1f132ba86e489329b8ff->enter($__internal_76604fe2bb88e0ef62adf800c041eee5372cd6d8cccb1f132ba86e489329b8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_76604fe2bb88e0ef62adf800c041eee5372cd6d8cccb1f132ba86e489329b8ff->leave($__internal_76604fe2bb88e0ef62adf800c041eee5372cd6d8cccb1f132ba86e489329b8ff_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0beb52cb14053ef73edb2249aefdc35a0fb9c79ee21c83faef59703ee058038 = $this->env->getExtension("native_profiler");
        $__internal_b0beb52cb14053ef73edb2249aefdc35a0fb9c79ee21c83faef59703ee058038->enter($__internal_b0beb52cb14053ef73edb2249aefdc35a0fb9c79ee21c83faef59703ee058038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_b0beb52cb14053ef73edb2249aefdc35a0fb9c79ee21c83faef59703ee058038->leave($__internal_b0beb52cb14053ef73edb2249aefdc35a0fb9c79ee21c83faef59703ee058038_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6725f298e394850848d7da588a12c36384e7726c7da73f66f56f36eba3839e6 = $this->env->getExtension("native_profiler");
        $__internal_f6725f298e394850848d7da588a12c36384e7726c7da73f66f56f36eba3839e6->enter($__internal_f6725f298e394850848d7da588a12c36384e7726c7da73f66f56f36eba3839e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_f6725f298e394850848d7da588a12c36384e7726c7da73f66f56f36eba3839e6->leave($__internal_f6725f298e394850848d7da588a12c36384e7726c7da73f66f56f36eba3839e6_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  157 => 57,  151 => 56,  144 => 45,  138 => 44,  130 => 13,  128 => 12,  122 => 11,  110 => 9,  101 => 61,  99 => 56,  92 => 52,  84 => 46,  82 => 44,  76 => 41,  69 => 37,  65 => 36,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony2,*/
/*         et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
