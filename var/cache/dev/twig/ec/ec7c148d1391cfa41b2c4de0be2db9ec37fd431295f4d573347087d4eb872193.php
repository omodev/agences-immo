<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_192ca6c7c5ef40ecbe3cffbcaa095236a0f7665dacbb925b86f916fc0406dd18 extends Twig_Template
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
        $__internal_644ce42741e1d4d7eac91faba0e823469d2318829555cc8689aae306f16dd2be = $this->env->getExtension("native_profiler");
        $__internal_644ce42741e1d4d7eac91faba0e823469d2318829555cc8689aae306f16dd2be->enter($__internal_644ce42741e1d4d7eac91faba0e823469d2318829555cc8689aae306f16dd2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_644ce42741e1d4d7eac91faba0e823469d2318829555cc8689aae306f16dd2be->leave($__internal_644ce42741e1d4d7eac91faba0e823469d2318829555cc8689aae306f16dd2be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
