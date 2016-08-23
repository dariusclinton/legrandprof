<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d3fe96fe86fc23adac38bc34ef34192a6bb8867fac22964594916924e2130cdf extends Twig_Template
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
        $__internal_9e75f01a31dc3421dd32b028b6887eba3a44c21581ab2656345a7fe7ed833cb0 = $this->env->getExtension("native_profiler");
        $__internal_9e75f01a31dc3421dd32b028b6887eba3a44c21581ab2656345a7fe7ed833cb0->enter($__internal_9e75f01a31dc3421dd32b028b6887eba3a44c21581ab2656345a7fe7ed833cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9e75f01a31dc3421dd32b028b6887eba3a44c21581ab2656345a7fe7ed833cb0->leave($__internal_9e75f01a31dc3421dd32b028b6887eba3a44c21581ab2656345a7fe7ed833cb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
