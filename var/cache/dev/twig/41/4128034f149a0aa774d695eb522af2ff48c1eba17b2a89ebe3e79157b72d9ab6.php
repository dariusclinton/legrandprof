<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f147b3f05deb877ea9fd4d4d99554d148dc4d1c34be4b71b13b4d839da4059e8 extends Twig_Template
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
        $__internal_f4808c27cfc40b9b8563cc1aeff8f1cbd3ef49ae0da31051fc750a4d9f9b11ed = $this->env->getExtension("native_profiler");
        $__internal_f4808c27cfc40b9b8563cc1aeff8f1cbd3ef49ae0da31051fc750a4d9f9b11ed->enter($__internal_f4808c27cfc40b9b8563cc1aeff8f1cbd3ef49ae0da31051fc750a4d9f9b11ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f4808c27cfc40b9b8563cc1aeff8f1cbd3ef49ae0da31051fc750a4d9f9b11ed->leave($__internal_f4808c27cfc40b9b8563cc1aeff8f1cbd3ef49ae0da31051fc750a4d9f9b11ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
