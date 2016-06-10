<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_65bdbb3f3874287f658deb63ae4c524cef83a8b0b890e61f77abe7c37bb2f005 extends Twig_Template
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
        $__internal_e97425cc20aece923e2b09fa78c88c758223caee69da997508538dc83c93172d = $this->env->getExtension("native_profiler");
        $__internal_e97425cc20aece923e2b09fa78c88c758223caee69da997508538dc83c93172d->enter($__internal_e97425cc20aece923e2b09fa78c88c758223caee69da997508538dc83c93172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e97425cc20aece923e2b09fa78c88c758223caee69da997508538dc83c93172d->leave($__internal_e97425cc20aece923e2b09fa78c88c758223caee69da997508538dc83c93172d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
