<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8f4bdc9e748d50ca2a39f5f40098c13dc11034e000279c9be92a4c15641510a8 extends Twig_Template
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
        $__internal_b264cc20092da2fa1c0d94b94f6a717eda73c7c779dff9711933a0b6250a856f = $this->env->getExtension("native_profiler");
        $__internal_b264cc20092da2fa1c0d94b94f6a717eda73c7c779dff9711933a0b6250a856f->enter($__internal_b264cc20092da2fa1c0d94b94f6a717eda73c7c779dff9711933a0b6250a856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b264cc20092da2fa1c0d94b94f6a717eda73c7c779dff9711933a0b6250a856f->leave($__internal_b264cc20092da2fa1c0d94b94f6a717eda73c7c779dff9711933a0b6250a856f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
