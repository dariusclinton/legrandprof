<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_85fa5a3b6bcfbb3f545374caff9b8d46b6356c7170992a1955863a5704824983 extends Twig_Template
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
        $__internal_34ea9de4dfa8ef2b4c839d3e64726ea594def622a0cd9119c3a136fd49fc110c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ea9de4dfa8ef2b4c839d3e64726ea594def622a0cd9119c3a136fd49fc110c->enter($__internal_34ea9de4dfa8ef2b4c839d3e64726ea594def622a0cd9119c3a136fd49fc110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_34ea9de4dfa8ef2b4c839d3e64726ea594def622a0cd9119c3a136fd49fc110c->leave($__internal_34ea9de4dfa8ef2b4c839d3e64726ea594def622a0cd9119c3a136fd49fc110c_prof);

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
