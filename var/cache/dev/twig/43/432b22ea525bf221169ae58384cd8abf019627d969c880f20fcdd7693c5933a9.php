<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_93a701487b2a1bbd0e739219c08b992e54a9f2b2ac43df99c97ef69da38b5f2b extends Twig_Template
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
        $__internal_d98d03031153db0f9930d42a51f61e3e79281d3961bf560257298c469feac6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98d03031153db0f9930d42a51f61e3e79281d3961bf560257298c469feac6f0->enter($__internal_d98d03031153db0f9930d42a51f61e3e79281d3961bf560257298c469feac6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d98d03031153db0f9930d42a51f61e3e79281d3961bf560257298c469feac6f0->leave($__internal_d98d03031153db0f9930d42a51f61e3e79281d3961bf560257298c469feac6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
