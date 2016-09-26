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
        $__internal_0d77dbb08a5f45b57e5a820bde4129eab12d54bdf4981d8ad09f38de964f4f61 = $this->env->getExtension("native_profiler");
        $__internal_0d77dbb08a5f45b57e5a820bde4129eab12d54bdf4981d8ad09f38de964f4f61->enter($__internal_0d77dbb08a5f45b57e5a820bde4129eab12d54bdf4981d8ad09f38de964f4f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0d77dbb08a5f45b57e5a820bde4129eab12d54bdf4981d8ad09f38de964f4f61->leave($__internal_0d77dbb08a5f45b57e5a820bde4129eab12d54bdf4981d8ad09f38de964f4f61_prof);

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
