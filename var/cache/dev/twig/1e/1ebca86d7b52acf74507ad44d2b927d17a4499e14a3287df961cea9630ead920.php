<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_84f906b26a7811d2050fb284598e96ddb0372e1ebbdbe94962d9a1f06b075fdc extends Twig_Template
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
        $__internal_56981dbcbe1140aae2a349f16603405a6727511dd01e69db6a5f48d3b0c05692 = $this->env->getExtension("native_profiler");
        $__internal_56981dbcbe1140aae2a349f16603405a6727511dd01e69db6a5f48d3b0c05692->enter($__internal_56981dbcbe1140aae2a349f16603405a6727511dd01e69db6a5f48d3b0c05692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_56981dbcbe1140aae2a349f16603405a6727511dd01e69db6a5f48d3b0c05692->leave($__internal_56981dbcbe1140aae2a349f16603405a6727511dd01e69db6a5f48d3b0c05692_prof);

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
