<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1b7b0526efe6ba5e427de76229404fb3afc6d5c866b923ec62e10dc1c283836f extends Twig_Template
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
        $__internal_3f013181b0c0c70bf1c366cb2dfdef51139c63b215ef3bf22f59c1a652196045 = $this->env->getExtension("native_profiler");
        $__internal_3f013181b0c0c70bf1c366cb2dfdef51139c63b215ef3bf22f59c1a652196045->enter($__internal_3f013181b0c0c70bf1c366cb2dfdef51139c63b215ef3bf22f59c1a652196045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3f013181b0c0c70bf1c366cb2dfdef51139c63b215ef3bf22f59c1a652196045->leave($__internal_3f013181b0c0c70bf1c366cb2dfdef51139c63b215ef3bf22f59c1a652196045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
