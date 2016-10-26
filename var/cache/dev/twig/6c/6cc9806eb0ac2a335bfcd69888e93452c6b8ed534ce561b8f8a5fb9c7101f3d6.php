<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_65dd5db3360a41f1d6fd549d076c8acded19abb719926bea2b0d8a240e3082b8 extends Twig_Template
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
        $__internal_7a578c94d42eff388399676c92efb38b9a720883e27e4a2ec4d2569eedc615b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a578c94d42eff388399676c92efb38b9a720883e27e4a2ec4d2569eedc615b4->enter($__internal_7a578c94d42eff388399676c92efb38b9a720883e27e4a2ec4d2569eedc615b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7a578c94d42eff388399676c92efb38b9a720883e27e4a2ec4d2569eedc615b4->leave($__internal_7a578c94d42eff388399676c92efb38b9a720883e27e4a2ec4d2569eedc615b4_prof);

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
