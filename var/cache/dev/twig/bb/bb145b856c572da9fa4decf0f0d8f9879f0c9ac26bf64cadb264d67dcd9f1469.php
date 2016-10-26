<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1265784a1f7722dabc5f87bac249b5890a8d1430854f3a3e2eeef5510ecde6ee extends Twig_Template
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
        $__internal_9d3a0aef44e7706c2023f8251455c1fe3d76b0f4e5a026e488834f66896e6cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3a0aef44e7706c2023f8251455c1fe3d76b0f4e5a026e488834f66896e6cf8->enter($__internal_9d3a0aef44e7706c2023f8251455c1fe3d76b0f4e5a026e488834f66896e6cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9d3a0aef44e7706c2023f8251455c1fe3d76b0f4e5a026e488834f66896e6cf8->leave($__internal_9d3a0aef44e7706c2023f8251455c1fe3d76b0f4e5a026e488834f66896e6cf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
