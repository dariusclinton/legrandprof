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
        $__internal_a7920a147dd89ec10ac34bf413f49b40f78d97c980d1d93fa736b4bd67f5e55b = $this->env->getExtension("native_profiler");
        $__internal_a7920a147dd89ec10ac34bf413f49b40f78d97c980d1d93fa736b4bd67f5e55b->enter($__internal_a7920a147dd89ec10ac34bf413f49b40f78d97c980d1d93fa736b4bd67f5e55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a7920a147dd89ec10ac34bf413f49b40f78d97c980d1d93fa736b4bd67f5e55b->leave($__internal_a7920a147dd89ec10ac34bf413f49b40f78d97c980d1d93fa736b4bd67f5e55b_prof);

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
