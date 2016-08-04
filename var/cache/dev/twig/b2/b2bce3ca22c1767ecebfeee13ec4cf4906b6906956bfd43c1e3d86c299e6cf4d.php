<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_47a409e9c9cd64a9391425cd7c0a3207dc6cb7cc5d98367fde2a056f56a63f98 extends Twig_Template
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
        $__internal_526fbada4f554d71717008f2f9f6326dd80c3b1c82457a051d9138c137776846 = $this->env->getExtension("native_profiler");
        $__internal_526fbada4f554d71717008f2f9f6326dd80c3b1c82457a051d9138c137776846->enter($__internal_526fbada4f554d71717008f2f9f6326dd80c3b1c82457a051d9138c137776846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_526fbada4f554d71717008f2f9f6326dd80c3b1c82457a051d9138c137776846->leave($__internal_526fbada4f554d71717008f2f9f6326dd80c3b1c82457a051d9138c137776846_prof);

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
