<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_536496017dbe47173414d65bc534296dbfcecc1f3c5f71bd9c0faf48a841d484 extends Twig_Template
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
        $__internal_e0de3180af262fcae70cb23ffd7b0232afdd505f9febb43d083d23d0890ed92a = $this->env->getExtension("native_profiler");
        $__internal_e0de3180af262fcae70cb23ffd7b0232afdd505f9febb43d083d23d0890ed92a->enter($__internal_e0de3180af262fcae70cb23ffd7b0232afdd505f9febb43d083d23d0890ed92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e0de3180af262fcae70cb23ffd7b0232afdd505f9febb43d083d23d0890ed92a->leave($__internal_e0de3180af262fcae70cb23ffd7b0232afdd505f9febb43d083d23d0890ed92a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
