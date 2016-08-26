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
        $__internal_1990184cfe7055223d5fb5017f0b42bcb321ae2353b6ef6b69773aa070bf6504 = $this->env->getExtension("native_profiler");
        $__internal_1990184cfe7055223d5fb5017f0b42bcb321ae2353b6ef6b69773aa070bf6504->enter($__internal_1990184cfe7055223d5fb5017f0b42bcb321ae2353b6ef6b69773aa070bf6504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1990184cfe7055223d5fb5017f0b42bcb321ae2353b6ef6b69773aa070bf6504->leave($__internal_1990184cfe7055223d5fb5017f0b42bcb321ae2353b6ef6b69773aa070bf6504_prof);

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
