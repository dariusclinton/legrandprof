<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3ebfd5edb9461ea8c04182f95399b74e76c171955784928a3f7371663b0de80a extends Twig_Template
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
        $__internal_1d91788aed52da96ebaec6911ab67908efc29f2c8ac1e553ccdb5a357c7eec8e = $this->env->getExtension("native_profiler");
        $__internal_1d91788aed52da96ebaec6911ab67908efc29f2c8ac1e553ccdb5a357c7eec8e->enter($__internal_1d91788aed52da96ebaec6911ab67908efc29f2c8ac1e553ccdb5a357c7eec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1d91788aed52da96ebaec6911ab67908efc29f2c8ac1e553ccdb5a357c7eec8e->leave($__internal_1d91788aed52da96ebaec6911ab67908efc29f2c8ac1e553ccdb5a357c7eec8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
