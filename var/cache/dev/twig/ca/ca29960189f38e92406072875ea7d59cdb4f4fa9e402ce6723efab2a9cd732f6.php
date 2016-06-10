<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_348265126c1ca1141e21e0842dbdc545c17f9dda09bf571ebe5ff90df1b0d80a extends Twig_Template
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
        $__internal_ae3999e90dda3d0273062d7eac0a1f2e22960fb488c9813b2ed62dc2a11f9f80 = $this->env->getExtension("native_profiler");
        $__internal_ae3999e90dda3d0273062d7eac0a1f2e22960fb488c9813b2ed62dc2a11f9f80->enter($__internal_ae3999e90dda3d0273062d7eac0a1f2e22960fb488c9813b2ed62dc2a11f9f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ae3999e90dda3d0273062d7eac0a1f2e22960fb488c9813b2ed62dc2a11f9f80->leave($__internal_ae3999e90dda3d0273062d7eac0a1f2e22960fb488c9813b2ed62dc2a11f9f80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
