<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fb9308381b17b27d1414194b6d75fc63a71ddaee2d83e8b8838f70b76add53f5 extends Twig_Template
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
        $__internal_a911b65d47f06f01b9927f393ba32baf43f71b481e7527103dc2e86af3bf896c = $this->env->getExtension("native_profiler");
        $__internal_a911b65d47f06f01b9927f393ba32baf43f71b481e7527103dc2e86af3bf896c->enter($__internal_a911b65d47f06f01b9927f393ba32baf43f71b481e7527103dc2e86af3bf896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a911b65d47f06f01b9927f393ba32baf43f71b481e7527103dc2e86af3bf896c->leave($__internal_a911b65d47f06f01b9927f393ba32baf43f71b481e7527103dc2e86af3bf896c_prof);

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
