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
        $__internal_56630f3d9f1994e974dcaf360ace491b38329afb903bbb7df7f2969055a2f90b = $this->env->getExtension("native_profiler");
        $__internal_56630f3d9f1994e974dcaf360ace491b38329afb903bbb7df7f2969055a2f90b->enter($__internal_56630f3d9f1994e974dcaf360ace491b38329afb903bbb7df7f2969055a2f90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_56630f3d9f1994e974dcaf360ace491b38329afb903bbb7df7f2969055a2f90b->leave($__internal_56630f3d9f1994e974dcaf360ace491b38329afb903bbb7df7f2969055a2f90b_prof);

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
