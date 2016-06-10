<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f8df5f87be210cc51b05beeb2bf9a9cbb185a97b04b7fe4263e28423ac29d6dd extends Twig_Template
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
        $__internal_020f692c176684769db712ca4efcd8fe32d66b95e335597da4e6f7bfb65afa16 = $this->env->getExtension("native_profiler");
        $__internal_020f692c176684769db712ca4efcd8fe32d66b95e335597da4e6f7bfb65afa16->enter($__internal_020f692c176684769db712ca4efcd8fe32d66b95e335597da4e6f7bfb65afa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_020f692c176684769db712ca4efcd8fe32d66b95e335597da4e6f7bfb65afa16->leave($__internal_020f692c176684769db712ca4efcd8fe32d66b95e335597da4e6f7bfb65afa16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
