<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7734868fdb80783d4f841364ef2a4692dabaeddf669d432fabe5063c43fd0a51 extends Twig_Template
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
        $__internal_63ff05819252af0ce89c0458d912680e16036ca7a5f14e6ef755e4c63f7cac05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ff05819252af0ce89c0458d912680e16036ca7a5f14e6ef755e4c63f7cac05->enter($__internal_63ff05819252af0ce89c0458d912680e16036ca7a5f14e6ef755e4c63f7cac05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_63ff05819252af0ce89c0458d912680e16036ca7a5f14e6ef755e4c63f7cac05->leave($__internal_63ff05819252af0ce89c0458d912680e16036ca7a5f14e6ef755e4c63f7cac05_prof);

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
