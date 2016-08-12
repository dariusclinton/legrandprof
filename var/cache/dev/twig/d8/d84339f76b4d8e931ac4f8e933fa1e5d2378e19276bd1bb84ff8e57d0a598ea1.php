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
        $__internal_ddc05499a4ca23b3bbf2c1d76de2a6fabc0a37405825a2472067f3c14a9056ae = $this->env->getExtension("native_profiler");
        $__internal_ddc05499a4ca23b3bbf2c1d76de2a6fabc0a37405825a2472067f3c14a9056ae->enter($__internal_ddc05499a4ca23b3bbf2c1d76de2a6fabc0a37405825a2472067f3c14a9056ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ddc05499a4ca23b3bbf2c1d76de2a6fabc0a37405825a2472067f3c14a9056ae->leave($__internal_ddc05499a4ca23b3bbf2c1d76de2a6fabc0a37405825a2472067f3c14a9056ae_prof);

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
