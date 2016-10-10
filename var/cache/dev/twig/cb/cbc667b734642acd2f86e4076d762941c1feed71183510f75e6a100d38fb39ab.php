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
        $__internal_1b710ea6981ec3341863d7fd7141c0b49ba19e4204c6d63b515896356025d6ba = $this->env->getExtension("native_profiler");
        $__internal_1b710ea6981ec3341863d7fd7141c0b49ba19e4204c6d63b515896356025d6ba->enter($__internal_1b710ea6981ec3341863d7fd7141c0b49ba19e4204c6d63b515896356025d6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1b710ea6981ec3341863d7fd7141c0b49ba19e4204c6d63b515896356025d6ba->leave($__internal_1b710ea6981ec3341863d7fd7141c0b49ba19e4204c6d63b515896356025d6ba_prof);

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
