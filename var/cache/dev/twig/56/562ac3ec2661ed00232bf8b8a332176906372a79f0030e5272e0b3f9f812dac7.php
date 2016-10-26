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
        $__internal_c5d59b40c2774cc6b1a6632f36a058fab2fdd334f0126c04f83e1aa9fd3fe066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d59b40c2774cc6b1a6632f36a058fab2fdd334f0126c04f83e1aa9fd3fe066->enter($__internal_c5d59b40c2774cc6b1a6632f36a058fab2fdd334f0126c04f83e1aa9fd3fe066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c5d59b40c2774cc6b1a6632f36a058fab2fdd334f0126c04f83e1aa9fd3fe066->leave($__internal_c5d59b40c2774cc6b1a6632f36a058fab2fdd334f0126c04f83e1aa9fd3fe066_prof);

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
