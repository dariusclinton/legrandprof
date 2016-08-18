<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_81d89fb48bc6949a33958e0b357619f0eeb179b5e2d8799cf2448d36884247e2 extends Twig_Template
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
        $__internal_aaf85ce7c229f3155edaebc8ebc989a2f3c364eb855eed695f6be0fea1e7f118 = $this->env->getExtension("native_profiler");
        $__internal_aaf85ce7c229f3155edaebc8ebc989a2f3c364eb855eed695f6be0fea1e7f118->enter($__internal_aaf85ce7c229f3155edaebc8ebc989a2f3c364eb855eed695f6be0fea1e7f118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aaf85ce7c229f3155edaebc8ebc989a2f3c364eb855eed695f6be0fea1e7f118->leave($__internal_aaf85ce7c229f3155edaebc8ebc989a2f3c364eb855eed695f6be0fea1e7f118_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
