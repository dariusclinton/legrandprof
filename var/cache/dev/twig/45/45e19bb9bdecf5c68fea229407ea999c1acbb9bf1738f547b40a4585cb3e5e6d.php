<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2c5f92dff74191c08487f536c915c860b0d802cec6b06649d0697f230bfb9383 extends Twig_Template
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
        $__internal_5da3059fd74a86677b6c23ea3ea44a2841f4f3352f2d73f2a07786673bd0d6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da3059fd74a86677b6c23ea3ea44a2841f4f3352f2d73f2a07786673bd0d6e4->enter($__internal_5da3059fd74a86677b6c23ea3ea44a2841f4f3352f2d73f2a07786673bd0d6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5da3059fd74a86677b6c23ea3ea44a2841f4f3352f2d73f2a07786673bd0d6e4->leave($__internal_5da3059fd74a86677b6c23ea3ea44a2841f4f3352f2d73f2a07786673bd0d6e4_prof);

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
