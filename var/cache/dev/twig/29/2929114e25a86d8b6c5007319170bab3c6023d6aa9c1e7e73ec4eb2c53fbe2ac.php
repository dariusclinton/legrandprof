<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fce3c86c2d245d78301115855a15fe52b5f7dc58ed55cbc9ae4efde3ce31fdec extends Twig_Template
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
        $__internal_21df08f7d21ffe79a4e954d6a68f9002b9274ed157913bbd35eb42dd3aaba43e = $this->env->getExtension("native_profiler");
        $__internal_21df08f7d21ffe79a4e954d6a68f9002b9274ed157913bbd35eb42dd3aaba43e->enter($__internal_21df08f7d21ffe79a4e954d6a68f9002b9274ed157913bbd35eb42dd3aaba43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_21df08f7d21ffe79a4e954d6a68f9002b9274ed157913bbd35eb42dd3aaba43e->leave($__internal_21df08f7d21ffe79a4e954d6a68f9002b9274ed157913bbd35eb42dd3aaba43e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
