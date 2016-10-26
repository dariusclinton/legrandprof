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
        $__internal_1f5cb79e100e6463e60ff16fa09415b2456b93f06e58e8d414363ce408b2de10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5cb79e100e6463e60ff16fa09415b2456b93f06e58e8d414363ce408b2de10->enter($__internal_1f5cb79e100e6463e60ff16fa09415b2456b93f06e58e8d414363ce408b2de10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1f5cb79e100e6463e60ff16fa09415b2456b93f06e58e8d414363ce408b2de10->leave($__internal_1f5cb79e100e6463e60ff16fa09415b2456b93f06e58e8d414363ce408b2de10_prof);

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
