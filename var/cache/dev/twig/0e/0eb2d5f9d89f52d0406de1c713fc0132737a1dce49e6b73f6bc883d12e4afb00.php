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
        $__internal_0e796857fea8351ef647f8c89eb4db6baff15090c2a5c4b1e91bef22a6fa933e = $this->env->getExtension("native_profiler");
        $__internal_0e796857fea8351ef647f8c89eb4db6baff15090c2a5c4b1e91bef22a6fa933e->enter($__internal_0e796857fea8351ef647f8c89eb4db6baff15090c2a5c4b1e91bef22a6fa933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0e796857fea8351ef647f8c89eb4db6baff15090c2a5c4b1e91bef22a6fa933e->leave($__internal_0e796857fea8351ef647f8c89eb4db6baff15090c2a5c4b1e91bef22a6fa933e_prof);

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
