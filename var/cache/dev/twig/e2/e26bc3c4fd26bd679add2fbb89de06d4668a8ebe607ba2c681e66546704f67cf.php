<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e3b95f27a4f2345689944bcd40cb5f7bad6dd72b74a0579c4e500b6d0ef84170 extends Twig_Template
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
        $__internal_9df19cf76e72ed8be89a6438090d0ba7d362c9e05092d93de40df6d206a2c573 = $this->env->getExtension("native_profiler");
        $__internal_9df19cf76e72ed8be89a6438090d0ba7d362c9e05092d93de40df6d206a2c573->enter($__internal_9df19cf76e72ed8be89a6438090d0ba7d362c9e05092d93de40df6d206a2c573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9df19cf76e72ed8be89a6438090d0ba7d362c9e05092d93de40df6d206a2c573->leave($__internal_9df19cf76e72ed8be89a6438090d0ba7d362c9e05092d93de40df6d206a2c573_prof);

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
