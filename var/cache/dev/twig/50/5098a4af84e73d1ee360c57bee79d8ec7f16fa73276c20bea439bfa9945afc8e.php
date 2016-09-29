<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0133035ea8d9f9b67028ba067e7f8a40e9edc74daa8c3518504592cd9abb7ad8 extends Twig_Template
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
        $__internal_421fccd5afaf314e9097e73aa75a48a5bfa8c3da818bdbed99964ed6e58a85bb = $this->env->getExtension("native_profiler");
        $__internal_421fccd5afaf314e9097e73aa75a48a5bfa8c3da818bdbed99964ed6e58a85bb->enter($__internal_421fccd5afaf314e9097e73aa75a48a5bfa8c3da818bdbed99964ed6e58a85bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_421fccd5afaf314e9097e73aa75a48a5bfa8c3da818bdbed99964ed6e58a85bb->leave($__internal_421fccd5afaf314e9097e73aa75a48a5bfa8c3da818bdbed99964ed6e58a85bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
