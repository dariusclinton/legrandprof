<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b6ec021c830f40d49d878a66c5e929cdd247b41ed72270fb01e87ff3310410e3 extends Twig_Template
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
        $__internal_c8dc4358423f93c8fcaf295b49ab3fe1f3a9516db9a4631a696068f02dc65e99 = $this->env->getExtension("native_profiler");
        $__internal_c8dc4358423f93c8fcaf295b49ab3fe1f3a9516db9a4631a696068f02dc65e99->enter($__internal_c8dc4358423f93c8fcaf295b49ab3fe1f3a9516db9a4631a696068f02dc65e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c8dc4358423f93c8fcaf295b49ab3fe1f3a9516db9a4631a696068f02dc65e99->leave($__internal_c8dc4358423f93c8fcaf295b49ab3fe1f3a9516db9a4631a696068f02dc65e99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
