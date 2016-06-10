<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_bcc5f64f4f096a11b4760124b20b4793ab96700ad132f4c8bb13eeb0631c3d6c extends Twig_Template
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
        $__internal_ca81c0fe4b1dca551cab319714798b74c3a67584a46d047a49c907daaee82b73 = $this->env->getExtension("native_profiler");
        $__internal_ca81c0fe4b1dca551cab319714798b74c3a67584a46d047a49c907daaee82b73->enter($__internal_ca81c0fe4b1dca551cab319714798b74c3a67584a46d047a49c907daaee82b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ca81c0fe4b1dca551cab319714798b74c3a67584a46d047a49c907daaee82b73->leave($__internal_ca81c0fe4b1dca551cab319714798b74c3a67584a46d047a49c907daaee82b73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
