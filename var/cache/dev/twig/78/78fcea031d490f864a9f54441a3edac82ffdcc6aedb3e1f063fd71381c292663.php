<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e0e6d3e0088f16a89f21dfca5ac3dc5884566e56019704143cda7513d0cb0d0c extends Twig_Template
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
        $__internal_8441ce7152207520fbfe5747c39d1c2227e99493fec3bc8df8503e3a578ca620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8441ce7152207520fbfe5747c39d1c2227e99493fec3bc8df8503e3a578ca620->enter($__internal_8441ce7152207520fbfe5747c39d1c2227e99493fec3bc8df8503e3a578ca620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8441ce7152207520fbfe5747c39d1c2227e99493fec3bc8df8503e3a578ca620->leave($__internal_8441ce7152207520fbfe5747c39d1c2227e99493fec3bc8df8503e3a578ca620_prof);

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
