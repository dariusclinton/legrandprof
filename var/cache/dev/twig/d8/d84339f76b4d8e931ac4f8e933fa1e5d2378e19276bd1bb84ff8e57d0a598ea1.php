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
        $__internal_e3d076020bb9c4fbc130d9c8a4cb9a1c85a3d6803c8f5bd02a07825e99d23f1b = $this->env->getExtension("native_profiler");
        $__internal_e3d076020bb9c4fbc130d9c8a4cb9a1c85a3d6803c8f5bd02a07825e99d23f1b->enter($__internal_e3d076020bb9c4fbc130d9c8a4cb9a1c85a3d6803c8f5bd02a07825e99d23f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e3d076020bb9c4fbc130d9c8a4cb9a1c85a3d6803c8f5bd02a07825e99d23f1b->leave($__internal_e3d076020bb9c4fbc130d9c8a4cb9a1c85a3d6803c8f5bd02a07825e99d23f1b_prof);

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
