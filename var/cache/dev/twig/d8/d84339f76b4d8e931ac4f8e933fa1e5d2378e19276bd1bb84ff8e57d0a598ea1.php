<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_387ca02271c4554898fe08bdf8debad34f4a0c96e912de72aebabe3438e694c0 extends Twig_Template
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
        $__internal_b5d8d96c9e1fb772f9421c00a4c21f58df23aad8d8b5159c74fd2d280ae80e9f = $this->env->getExtension("native_profiler");
        $__internal_b5d8d96c9e1fb772f9421c00a4c21f58df23aad8d8b5159c74fd2d280ae80e9f->enter($__internal_b5d8d96c9e1fb772f9421c00a4c21f58df23aad8d8b5159c74fd2d280ae80e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b5d8d96c9e1fb772f9421c00a4c21f58df23aad8d8b5159c74fd2d280ae80e9f->leave($__internal_b5d8d96c9e1fb772f9421c00a4c21f58df23aad8d8b5159c74fd2d280ae80e9f_prof);

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
