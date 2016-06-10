<?php

/* ::base.html.twig */
class __TwigTemplate_9c04f3da7955ae223ec45493887e53b6777f4660e058d553fb9e88402dbacf69 extends Twig_Template
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
        $__internal_c21c7e1b4733ef6b82470ec616834d2b059db50785462a8684d50983961c5fa4 = $this->env->getExtension("native_profiler");
        $__internal_c21c7e1b4733ef6b82470ec616834d2b059db50785462a8684d50983961c5fa4->enter($__internal_c21c7e1b4733ef6b82470ec616834d2b059db50785462a8684d50983961c5fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c21c7e1b4733ef6b82470ec616834d2b059db50785462a8684d50983961c5fa4->leave($__internal_c21c7e1b4733ef6b82470ec616834d2b059db50785462a8684d50983961c5fa4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbda43cea5231b7831fcd260c814f796bceedc99537078106dfee8608aabb29d = $this->env->getExtension("native_profiler");
        $__internal_dbda43cea5231b7831fcd260c814f796bceedc99537078106dfee8608aabb29d->enter($__internal_dbda43cea5231b7831fcd260c814f796bceedc99537078106dfee8608aabb29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dbda43cea5231b7831fcd260c814f796bceedc99537078106dfee8608aabb29d->leave($__internal_dbda43cea5231b7831fcd260c814f796bceedc99537078106dfee8608aabb29d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d05cfec8c0c0e4f3a86a3cd900dee5748dd52c4ca3fca952ebaca169032d9c5 = $this->env->getExtension("native_profiler");
        $__internal_6d05cfec8c0c0e4f3a86a3cd900dee5748dd52c4ca3fca952ebaca169032d9c5->enter($__internal_6d05cfec8c0c0e4f3a86a3cd900dee5748dd52c4ca3fca952ebaca169032d9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d05cfec8c0c0e4f3a86a3cd900dee5748dd52c4ca3fca952ebaca169032d9c5->leave($__internal_6d05cfec8c0c0e4f3a86a3cd900dee5748dd52c4ca3fca952ebaca169032d9c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_257e952fa8f2201c4b3692448fbc23515957c867683b147694dec9147c0a91a1 = $this->env->getExtension("native_profiler");
        $__internal_257e952fa8f2201c4b3692448fbc23515957c867683b147694dec9147c0a91a1->enter($__internal_257e952fa8f2201c4b3692448fbc23515957c867683b147694dec9147c0a91a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_257e952fa8f2201c4b3692448fbc23515957c867683b147694dec9147c0a91a1->leave($__internal_257e952fa8f2201c4b3692448fbc23515957c867683b147694dec9147c0a91a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fd78b3f20992bbd6de2c3eb66e8bfec8c50f89111e73e43b18b48f0a11e746e = $this->env->getExtension("native_profiler");
        $__internal_3fd78b3f20992bbd6de2c3eb66e8bfec8c50f89111e73e43b18b48f0a11e746e->enter($__internal_3fd78b3f20992bbd6de2c3eb66e8bfec8c50f89111e73e43b18b48f0a11e746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3fd78b3f20992bbd6de2c3eb66e8bfec8c50f89111e73e43b18b48f0a11e746e->leave($__internal_3fd78b3f20992bbd6de2c3eb66e8bfec8c50f89111e73e43b18b48f0a11e746e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
