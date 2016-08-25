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
        $__internal_ade62cf6d3810a5095cc35d1c719422b0e96feecfd3e5686d48ccbd2a63482a5 = $this->env->getExtension("native_profiler");
        $__internal_ade62cf6d3810a5095cc35d1c719422b0e96feecfd3e5686d48ccbd2a63482a5->enter($__internal_ade62cf6d3810a5095cc35d1c719422b0e96feecfd3e5686d48ccbd2a63482a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ade62cf6d3810a5095cc35d1c719422b0e96feecfd3e5686d48ccbd2a63482a5->leave($__internal_ade62cf6d3810a5095cc35d1c719422b0e96feecfd3e5686d48ccbd2a63482a5_prof);

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
