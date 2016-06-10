<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_84d31025420bf54422810f2942aa7f43a617e8c61b252f4e21f599fdd1210628 extends Twig_Template
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
        $__internal_e9f2131dcfd725d9af15878cead71908647491cebc84e4e286fc10668562464e = $this->env->getExtension("native_profiler");
        $__internal_e9f2131dcfd725d9af15878cead71908647491cebc84e4e286fc10668562464e->enter($__internal_e9f2131dcfd725d9af15878cead71908647491cebc84e4e286fc10668562464e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e9f2131dcfd725d9af15878cead71908647491cebc84e4e286fc10668562464e->leave($__internal_e9f2131dcfd725d9af15878cead71908647491cebc84e4e286fc10668562464e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
