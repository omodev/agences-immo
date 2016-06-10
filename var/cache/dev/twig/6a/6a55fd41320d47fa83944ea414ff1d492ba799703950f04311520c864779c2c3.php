<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d32472489330c7f9e08ff0a8cf2ce97f53afa1bf50aec3cca28bbf6e46439311 extends Twig_Template
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
        $__internal_5da97729a97ac05a19a953bbd9fbdc0e24403cdf44ed6fbf2b2d548601c67e0d = $this->env->getExtension("native_profiler");
        $__internal_5da97729a97ac05a19a953bbd9fbdc0e24403cdf44ed6fbf2b2d548601c67e0d->enter($__internal_5da97729a97ac05a19a953bbd9fbdc0e24403cdf44ed6fbf2b2d548601c67e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5da97729a97ac05a19a953bbd9fbdc0e24403cdf44ed6fbf2b2d548601c67e0d->leave($__internal_5da97729a97ac05a19a953bbd9fbdc0e24403cdf44ed6fbf2b2d548601c67e0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
