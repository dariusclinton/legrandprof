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
        $__internal_baf44c91061c51a6359bd17caea15429c863caca5d1064ea1544eade09cd4722 = $this->env->getExtension("native_profiler");
        $__internal_baf44c91061c51a6359bd17caea15429c863caca5d1064ea1544eade09cd4722->enter($__internal_baf44c91061c51a6359bd17caea15429c863caca5d1064ea1544eade09cd4722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_baf44c91061c51a6359bd17caea15429c863caca5d1064ea1544eade09cd4722->leave($__internal_baf44c91061c51a6359bd17caea15429c863caca5d1064ea1544eade09cd4722_prof);

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
