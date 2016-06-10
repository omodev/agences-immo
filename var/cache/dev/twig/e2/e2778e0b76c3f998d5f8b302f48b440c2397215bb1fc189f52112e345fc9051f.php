<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_adc2688ebcffa545794f161a3f4d191a966515d54e973a5a2751228cd42c36ac extends Twig_Template
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
        $__internal_31edea30440edb90149075b1de5c194c1bfe87c36a63ca1cb2eb824b052c2798 = $this->env->getExtension("native_profiler");
        $__internal_31edea30440edb90149075b1de5c194c1bfe87c36a63ca1cb2eb824b052c2798->enter($__internal_31edea30440edb90149075b1de5c194c1bfe87c36a63ca1cb2eb824b052c2798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_31edea30440edb90149075b1de5c194c1bfe87c36a63ca1cb2eb824b052c2798->leave($__internal_31edea30440edb90149075b1de5c194c1bfe87c36a63ca1cb2eb824b052c2798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
