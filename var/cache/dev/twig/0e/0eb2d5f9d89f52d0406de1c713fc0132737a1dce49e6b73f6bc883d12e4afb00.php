<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f784dd5e79e0bd3c25c684ed4126a05739aa2d3f19ad605b4703d9908244cd1a extends Twig_Template
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
        $__internal_d074e9d9a2196fb69a73c499ca0f1696cd5904f8f1250985181a31b28a6a8559 = $this->env->getExtension("native_profiler");
        $__internal_d074e9d9a2196fb69a73c499ca0f1696cd5904f8f1250985181a31b28a6a8559->enter($__internal_d074e9d9a2196fb69a73c499ca0f1696cd5904f8f1250985181a31b28a6a8559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d074e9d9a2196fb69a73c499ca0f1696cd5904f8f1250985181a31b28a6a8559->leave($__internal_d074e9d9a2196fb69a73c499ca0f1696cd5904f8f1250985181a31b28a6a8559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
