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
        $__internal_d86fcfbad3554f9ada96800e2821e3fdbccaf5d24ae7befc5c4445a652b69b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86fcfbad3554f9ada96800e2821e3fdbccaf5d24ae7befc5c4445a652b69b18->enter($__internal_d86fcfbad3554f9ada96800e2821e3fdbccaf5d24ae7befc5c4445a652b69b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d86fcfbad3554f9ada96800e2821e3fdbccaf5d24ae7befc5c4445a652b69b18->leave($__internal_d86fcfbad3554f9ada96800e2821e3fdbccaf5d24ae7befc5c4445a652b69b18_prof);

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
