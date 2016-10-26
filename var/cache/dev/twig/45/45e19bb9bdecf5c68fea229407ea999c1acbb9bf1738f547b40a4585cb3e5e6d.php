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
        $__internal_c99bf24c1f51e4ce23db53985911530ef5a2be8e7d62ff3da4331f7ba78a1049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99bf24c1f51e4ce23db53985911530ef5a2be8e7d62ff3da4331f7ba78a1049->enter($__internal_c99bf24c1f51e4ce23db53985911530ef5a2be8e7d62ff3da4331f7ba78a1049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c99bf24c1f51e4ce23db53985911530ef5a2be8e7d62ff3da4331f7ba78a1049->leave($__internal_c99bf24c1f51e4ce23db53985911530ef5a2be8e7d62ff3da4331f7ba78a1049_prof);

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
