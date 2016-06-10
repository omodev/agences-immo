<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f6f08709551262e8ea79b644c68b3341b0bfe30614de0e0637fe309644da901e extends Twig_Template
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
        $__internal_b25db4bad959156917c10feed198d204528538c663523197ec5a77ffb751cd5f = $this->env->getExtension("native_profiler");
        $__internal_b25db4bad959156917c10feed198d204528538c663523197ec5a77ffb751cd5f->enter($__internal_b25db4bad959156917c10feed198d204528538c663523197ec5a77ffb751cd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b25db4bad959156917c10feed198d204528538c663523197ec5a77ffb751cd5f->leave($__internal_b25db4bad959156917c10feed198d204528538c663523197ec5a77ffb751cd5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
