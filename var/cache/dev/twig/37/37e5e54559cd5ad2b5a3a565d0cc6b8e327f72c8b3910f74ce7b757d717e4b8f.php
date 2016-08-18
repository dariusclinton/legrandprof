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
        $__internal_205bd00ee26ef7ef8526e3695c709c1a746fc610a2afb23a5ca253bb853c2304 = $this->env->getExtension("native_profiler");
        $__internal_205bd00ee26ef7ef8526e3695c709c1a746fc610a2afb23a5ca253bb853c2304->enter($__internal_205bd00ee26ef7ef8526e3695c709c1a746fc610a2afb23a5ca253bb853c2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_205bd00ee26ef7ef8526e3695c709c1a746fc610a2afb23a5ca253bb853c2304->leave($__internal_205bd00ee26ef7ef8526e3695c709c1a746fc610a2afb23a5ca253bb853c2304_prof);

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
