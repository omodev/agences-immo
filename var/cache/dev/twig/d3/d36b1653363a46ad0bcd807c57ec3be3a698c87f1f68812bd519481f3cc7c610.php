<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e7dfe028461c8be72e4aff521ed08e3c31ab4346a209059a0bd8ec9d7e3b59a4 extends Twig_Template
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
        $__internal_a93fcaad3547337ac1092ecc2a5eb05c7ef950cd5f43a0c4f4a827d4c919e413 = $this->env->getExtension("native_profiler");
        $__internal_a93fcaad3547337ac1092ecc2a5eb05c7ef950cd5f43a0c4f4a827d4c919e413->enter($__internal_a93fcaad3547337ac1092ecc2a5eb05c7ef950cd5f43a0c4f4a827d4c919e413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a93fcaad3547337ac1092ecc2a5eb05c7ef950cd5f43a0c4f4a827d4c919e413->leave($__internal_a93fcaad3547337ac1092ecc2a5eb05c7ef950cd5f43a0c4f4a827d4c919e413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
