<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_af27e597788577e3fbf5f372510bd03e425d6d297c6d5cd22f086671fe19ea9d extends Twig_Template
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
        $__internal_80942b5537d50d2cd8648eae5c580abb0b4bd77758e2c972893a97457b8c4c39 = $this->env->getExtension("native_profiler");
        $__internal_80942b5537d50d2cd8648eae5c580abb0b4bd77758e2c972893a97457b8c4c39->enter($__internal_80942b5537d50d2cd8648eae5c580abb0b4bd77758e2c972893a97457b8c4c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_80942b5537d50d2cd8648eae5c580abb0b4bd77758e2c972893a97457b8c4c39->leave($__internal_80942b5537d50d2cd8648eae5c580abb0b4bd77758e2c972893a97457b8c4c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
