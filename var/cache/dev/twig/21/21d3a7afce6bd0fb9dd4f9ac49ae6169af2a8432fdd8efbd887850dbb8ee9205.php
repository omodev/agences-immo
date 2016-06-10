<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a06fde647f07e108588c80cb2c660b519d7eb41984e2118b07baa50a43da5b11 extends Twig_Template
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
        $__internal_78047a38e0a2e6be9f18af7181bb16cb33bb66f0bb062de1dd4af59132117e40 = $this->env->getExtension("native_profiler");
        $__internal_78047a38e0a2e6be9f18af7181bb16cb33bb66f0bb062de1dd4af59132117e40->enter($__internal_78047a38e0a2e6be9f18af7181bb16cb33bb66f0bb062de1dd4af59132117e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_78047a38e0a2e6be9f18af7181bb16cb33bb66f0bb062de1dd4af59132117e40->leave($__internal_78047a38e0a2e6be9f18af7181bb16cb33bb66f0bb062de1dd4af59132117e40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
