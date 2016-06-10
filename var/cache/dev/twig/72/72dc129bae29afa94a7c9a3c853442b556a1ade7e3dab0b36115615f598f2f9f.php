<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_da19d90971522aac8883cc948bdc2eae4b428276d8ae2ad1b7f549a812d92ad7 extends Twig_Template
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
        $__internal_9e8d613addb4120241a51658b2489284a78bbbb8b1d907e45e02d8498b5684a1 = $this->env->getExtension("native_profiler");
        $__internal_9e8d613addb4120241a51658b2489284a78bbbb8b1d907e45e02d8498b5684a1->enter($__internal_9e8d613addb4120241a51658b2489284a78bbbb8b1d907e45e02d8498b5684a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9e8d613addb4120241a51658b2489284a78bbbb8b1d907e45e02d8498b5684a1->leave($__internal_9e8d613addb4120241a51658b2489284a78bbbb8b1d907e45e02d8498b5684a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
