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
        $__internal_9ec04d6b6aba5c1428295629d52bafc4a2e960f8a828cace8363d0bf3ad27fc4 = $this->env->getExtension("native_profiler");
        $__internal_9ec04d6b6aba5c1428295629d52bafc4a2e960f8a828cace8363d0bf3ad27fc4->enter($__internal_9ec04d6b6aba5c1428295629d52bafc4a2e960f8a828cace8363d0bf3ad27fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9ec04d6b6aba5c1428295629d52bafc4a2e960f8a828cace8363d0bf3ad27fc4->leave($__internal_9ec04d6b6aba5c1428295629d52bafc4a2e960f8a828cace8363d0bf3ad27fc4_prof);

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
