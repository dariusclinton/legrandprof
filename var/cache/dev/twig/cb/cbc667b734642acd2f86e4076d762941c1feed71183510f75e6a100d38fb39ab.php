<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3eeec6a427599ccade6690d9eb3e14dc9752b99c16147e491ef83e2daa1478fc extends Twig_Template
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
        $__internal_54cc7b2f709cf71c9708279e5127848f72b4d54d2cd67622a15629ec6810e4a9 = $this->env->getExtension("native_profiler");
        $__internal_54cc7b2f709cf71c9708279e5127848f72b4d54d2cd67622a15629ec6810e4a9->enter($__internal_54cc7b2f709cf71c9708279e5127848f72b4d54d2cd67622a15629ec6810e4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_54cc7b2f709cf71c9708279e5127848f72b4d54d2cd67622a15629ec6810e4a9->leave($__internal_54cc7b2f709cf71c9708279e5127848f72b4d54d2cd67622a15629ec6810e4a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
