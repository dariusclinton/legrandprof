<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_27113c946261dabf7dd370cb887047e6e637833a29b68974bc5ad99d4fc0a2a0 extends Twig_Template
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
        $__internal_05f37f17a70a1b088db3451b70357af56862a4788228f32c4654ca4fbdc15f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f37f17a70a1b088db3451b70357af56862a4788228f32c4654ca4fbdc15f1d->enter($__internal_05f37f17a70a1b088db3451b70357af56862a4788228f32c4654ca4fbdc15f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_05f37f17a70a1b088db3451b70357af56862a4788228f32c4654ca4fbdc15f1d->leave($__internal_05f37f17a70a1b088db3451b70357af56862a4788228f32c4654ca4fbdc15f1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
