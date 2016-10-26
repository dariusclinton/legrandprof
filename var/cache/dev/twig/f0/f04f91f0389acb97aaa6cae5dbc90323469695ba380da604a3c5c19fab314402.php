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
        $__internal_1dade69e979ab6d2722bae24be011839ddd32a8b901ee5e54fb936285636444e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dade69e979ab6d2722bae24be011839ddd32a8b901ee5e54fb936285636444e->enter($__internal_1dade69e979ab6d2722bae24be011839ddd32a8b901ee5e54fb936285636444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1dade69e979ab6d2722bae24be011839ddd32a8b901ee5e54fb936285636444e->leave($__internal_1dade69e979ab6d2722bae24be011839ddd32a8b901ee5e54fb936285636444e_prof);

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
