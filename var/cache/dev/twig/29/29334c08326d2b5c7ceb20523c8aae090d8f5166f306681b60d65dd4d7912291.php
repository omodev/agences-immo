<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6bf32008f51e5214c2a8000deddcb032620f3b18f9238e50c5e44ef71885cf59 extends Twig_Template
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
        $__internal_8803fddd0db5edb678f2b0e716983d95d21bb4e0eea64be00d3373e8a557b8b9 = $this->env->getExtension("native_profiler");
        $__internal_8803fddd0db5edb678f2b0e716983d95d21bb4e0eea64be00d3373e8a557b8b9->enter($__internal_8803fddd0db5edb678f2b0e716983d95d21bb4e0eea64be00d3373e8a557b8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8803fddd0db5edb678f2b0e716983d95d21bb4e0eea64be00d3373e8a557b8b9->leave($__internal_8803fddd0db5edb678f2b0e716983d95d21bb4e0eea64be00d3373e8a557b8b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
