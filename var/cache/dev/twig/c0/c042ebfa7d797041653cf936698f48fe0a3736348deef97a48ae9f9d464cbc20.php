<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_850a235af03b47a9c084142b82cbf5f0eeedef198f2f7020a177480e1fece718 extends Twig_Template
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
        $__internal_ad836e52fa3528ce3942e4fd061ddfda91cd21450bb25bb69075c72abdd2674f = $this->env->getExtension("native_profiler");
        $__internal_ad836e52fa3528ce3942e4fd061ddfda91cd21450bb25bb69075c72abdd2674f->enter($__internal_ad836e52fa3528ce3942e4fd061ddfda91cd21450bb25bb69075c72abdd2674f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ad836e52fa3528ce3942e4fd061ddfda91cd21450bb25bb69075c72abdd2674f->leave($__internal_ad836e52fa3528ce3942e4fd061ddfda91cd21450bb25bb69075c72abdd2674f_prof);

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
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
