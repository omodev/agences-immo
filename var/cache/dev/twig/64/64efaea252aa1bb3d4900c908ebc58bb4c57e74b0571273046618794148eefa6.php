<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2a1b5b12d4b965ea8a83b357edac5186d73ee313383ff6652c944592fd096fac extends Twig_Template
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
        $__internal_19bbdd7eb20c1fed79b76c37063301ff925f6361c2485f99de1fda9ed8f49341 = $this->env->getExtension("native_profiler");
        $__internal_19bbdd7eb20c1fed79b76c37063301ff925f6361c2485f99de1fda9ed8f49341->enter($__internal_19bbdd7eb20c1fed79b76c37063301ff925f6361c2485f99de1fda9ed8f49341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_19bbdd7eb20c1fed79b76c37063301ff925f6361c2485f99de1fda9ed8f49341->leave($__internal_19bbdd7eb20c1fed79b76c37063301ff925f6361c2485f99de1fda9ed8f49341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
