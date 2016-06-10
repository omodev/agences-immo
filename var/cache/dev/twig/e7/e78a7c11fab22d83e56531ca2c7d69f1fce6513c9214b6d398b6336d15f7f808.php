<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a7bf8a48e33eaa96864e81a67eee434321c04f2d9f48999ff5a279631bd7dddf extends Twig_Template
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
        $__internal_cdcebdaa88dc53f1e7c7e7a275c00e63d69477013059867b672b8799a8ae5ed9 = $this->env->getExtension("native_profiler");
        $__internal_cdcebdaa88dc53f1e7c7e7a275c00e63d69477013059867b672b8799a8ae5ed9->enter($__internal_cdcebdaa88dc53f1e7c7e7a275c00e63d69477013059867b672b8799a8ae5ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cdcebdaa88dc53f1e7c7e7a275c00e63d69477013059867b672b8799a8ae5ed9->leave($__internal_cdcebdaa88dc53f1e7c7e7a275c00e63d69477013059867b672b8799a8ae5ed9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
