<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_00686c2de49a691cfcf21865ba4872361836174753d2fae7f8820511eb2f26a2 extends Twig_Template
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
        $__internal_78149dbe2695a8ddc753c87cec8b3cb174f151c94b17c0049657d2545878ab58 = $this->env->getExtension("native_profiler");
        $__internal_78149dbe2695a8ddc753c87cec8b3cb174f151c94b17c0049657d2545878ab58->enter($__internal_78149dbe2695a8ddc753c87cec8b3cb174f151c94b17c0049657d2545878ab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_78149dbe2695a8ddc753c87cec8b3cb174f151c94b17c0049657d2545878ab58->leave($__internal_78149dbe2695a8ddc753c87cec8b3cb174f151c94b17c0049657d2545878ab58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
