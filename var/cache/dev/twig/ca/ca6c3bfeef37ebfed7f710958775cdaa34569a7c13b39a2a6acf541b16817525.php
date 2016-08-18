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
        $__internal_0f236f535fd5be13f61f3eaf0ae7c31aeb8d451813efc1bf86a6fe75e4f12266 = $this->env->getExtension("native_profiler");
        $__internal_0f236f535fd5be13f61f3eaf0ae7c31aeb8d451813efc1bf86a6fe75e4f12266->enter($__internal_0f236f535fd5be13f61f3eaf0ae7c31aeb8d451813efc1bf86a6fe75e4f12266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0f236f535fd5be13f61f3eaf0ae7c31aeb8d451813efc1bf86a6fe75e4f12266->leave($__internal_0f236f535fd5be13f61f3eaf0ae7c31aeb8d451813efc1bf86a6fe75e4f12266_prof);

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
