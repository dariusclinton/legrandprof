<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_bcecab3829fd36fcaf24e6bad88c8970e7035aac9bda34dcbad6c10e02bfb094 extends Twig_Template
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
        $__internal_9a6eb944ef3f154e86a9832ad23004a4e43b1431772b82fd860518b652efba07 = $this->env->getExtension("native_profiler");
        $__internal_9a6eb944ef3f154e86a9832ad23004a4e43b1431772b82fd860518b652efba07->enter($__internal_9a6eb944ef3f154e86a9832ad23004a4e43b1431772b82fd860518b652efba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9a6eb944ef3f154e86a9832ad23004a4e43b1431772b82fd860518b652efba07->leave($__internal_9a6eb944ef3f154e86a9832ad23004a4e43b1431772b82fd860518b652efba07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
