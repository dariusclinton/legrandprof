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
        $__internal_bb2a527dfb832a117873885700d818759284c99eb6674f9a0b145bb684643f89 = $this->env->getExtension("native_profiler");
        $__internal_bb2a527dfb832a117873885700d818759284c99eb6674f9a0b145bb684643f89->enter($__internal_bb2a527dfb832a117873885700d818759284c99eb6674f9a0b145bb684643f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bb2a527dfb832a117873885700d818759284c99eb6674f9a0b145bb684643f89->leave($__internal_bb2a527dfb832a117873885700d818759284c99eb6674f9a0b145bb684643f89_prof);

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
