<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_09f632d4aa5ae6bddf11a8997faa42a59820b4c253fa7e6101af29644c85a605 extends Twig_Template
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
        $__internal_c0603e7616cd84ba7e3086fb51937510004882d3b878b3cf64ad2d84d742fca6 = $this->env->getExtension("native_profiler");
        $__internal_c0603e7616cd84ba7e3086fb51937510004882d3b878b3cf64ad2d84d742fca6->enter($__internal_c0603e7616cd84ba7e3086fb51937510004882d3b878b3cf64ad2d84d742fca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c0603e7616cd84ba7e3086fb51937510004882d3b878b3cf64ad2d84d742fca6->leave($__internal_c0603e7616cd84ba7e3086fb51937510004882d3b878b3cf64ad2d84d742fca6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
