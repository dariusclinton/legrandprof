<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e91c69f439dc3477b0338f2b15f23c518e7e928d92ed23a961258d462011f290 extends Twig_Template
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
        $__internal_f9295a523f2bd7f60ad9290ad7e4bd12ff25600827c80664309f9b23c267750c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9295a523f2bd7f60ad9290ad7e4bd12ff25600827c80664309f9b23c267750c->enter($__internal_f9295a523f2bd7f60ad9290ad7e4bd12ff25600827c80664309f9b23c267750c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f9295a523f2bd7f60ad9290ad7e4bd12ff25600827c80664309f9b23c267750c->leave($__internal_f9295a523f2bd7f60ad9290ad7e4bd12ff25600827c80664309f9b23c267750c_prof);

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
