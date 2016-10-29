<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_97af62fdfa5aa8db91e24bfa3f069efe2720b72f9abd22e18e87146958b8d1a1 extends Twig_Template
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
        $__internal_643b6d1dc1887f2d595644a9e44fc0ff2a1cb3403244d5941d0bc1a98b81aecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b6d1dc1887f2d595644a9e44fc0ff2a1cb3403244d5941d0bc1a98b81aecd->enter($__internal_643b6d1dc1887f2d595644a9e44fc0ff2a1cb3403244d5941d0bc1a98b81aecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_643b6d1dc1887f2d595644a9e44fc0ff2a1cb3403244d5941d0bc1a98b81aecd->leave($__internal_643b6d1dc1887f2d595644a9e44fc0ff2a1cb3403244d5941d0bc1a98b81aecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
