<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_44c668deda5c3f141b25db86ab9cdf754d1fc826c86c265a915ccfa155d1772e extends Twig_Template
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
        $__internal_86e0168296da50b11e2eb83231a7e02f1636c20d66246cf107a0cf94353ca6c9 = $this->env->getExtension("native_profiler");
        $__internal_86e0168296da50b11e2eb83231a7e02f1636c20d66246cf107a0cf94353ca6c9->enter($__internal_86e0168296da50b11e2eb83231a7e02f1636c20d66246cf107a0cf94353ca6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_86e0168296da50b11e2eb83231a7e02f1636c20d66246cf107a0cf94353ca6c9->leave($__internal_86e0168296da50b11e2eb83231a7e02f1636c20d66246cf107a0cf94353ca6c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
