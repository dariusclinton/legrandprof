<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_073a30eaa9dde11d6ee28d5257b9cfbcc828cd64006033af45b97e070c840905 extends Twig_Template
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
        $__internal_7d33c95a7aad4a3557332035ad15dc3f4649ae3d045d9bd11cefdf0c713c9367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d33c95a7aad4a3557332035ad15dc3f4649ae3d045d9bd11cefdf0c713c9367->enter($__internal_7d33c95a7aad4a3557332035ad15dc3f4649ae3d045d9bd11cefdf0c713c9367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7d33c95a7aad4a3557332035ad15dc3f4649ae3d045d9bd11cefdf0c713c9367->leave($__internal_7d33c95a7aad4a3557332035ad15dc3f4649ae3d045d9bd11cefdf0c713c9367_prof);

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
