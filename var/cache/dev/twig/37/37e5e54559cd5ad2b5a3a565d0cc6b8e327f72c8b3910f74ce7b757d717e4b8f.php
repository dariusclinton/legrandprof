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
        $__internal_05db12f68c5a917e67532aba23ecef84e91629a64b10322d5a824366cf89a5ae = $this->env->getExtension("native_profiler");
        $__internal_05db12f68c5a917e67532aba23ecef84e91629a64b10322d5a824366cf89a5ae->enter($__internal_05db12f68c5a917e67532aba23ecef84e91629a64b10322d5a824366cf89a5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_05db12f68c5a917e67532aba23ecef84e91629a64b10322d5a824366cf89a5ae->leave($__internal_05db12f68c5a917e67532aba23ecef84e91629a64b10322d5a824366cf89a5ae_prof);

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
