<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ef6c3f567e5fc289f7826f4f4c5dd982f793f6721b250082afb51ccf5df0aa40 extends Twig_Template
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
        $__internal_8e02f06fdf22ff16cc97673f405abeb442de50072396523e61667733c2976b7c = $this->env->getExtension("native_profiler");
        $__internal_8e02f06fdf22ff16cc97673f405abeb442de50072396523e61667733c2976b7c->enter($__internal_8e02f06fdf22ff16cc97673f405abeb442de50072396523e61667733c2976b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8e02f06fdf22ff16cc97673f405abeb442de50072396523e61667733c2976b7c->leave($__internal_8e02f06fdf22ff16cc97673f405abeb442de50072396523e61667733c2976b7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
