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
        $__internal_f7a153e9dd6dd64cbb64ce5abc5b9d573d579115d3a619bf0fe1632aff5c084d = $this->env->getExtension("native_profiler");
        $__internal_f7a153e9dd6dd64cbb64ce5abc5b9d573d579115d3a619bf0fe1632aff5c084d->enter($__internal_f7a153e9dd6dd64cbb64ce5abc5b9d573d579115d3a619bf0fe1632aff5c084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f7a153e9dd6dd64cbb64ce5abc5b9d573d579115d3a619bf0fe1632aff5c084d->leave($__internal_f7a153e9dd6dd64cbb64ce5abc5b9d573d579115d3a619bf0fe1632aff5c084d_prof);

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
