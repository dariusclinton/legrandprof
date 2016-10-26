<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5935209cf6a8796e67df6c1fb925901cc2e329a2fda543e642c9a19342e09901 extends Twig_Template
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
        $__internal_eaaaa427d66927a2574098f60ffe475948db6686ea601c83132cafa641d1de98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaaa427d66927a2574098f60ffe475948db6686ea601c83132cafa641d1de98->enter($__internal_eaaaa427d66927a2574098f60ffe475948db6686ea601c83132cafa641d1de98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eaaaa427d66927a2574098f60ffe475948db6686ea601c83132cafa641d1de98->leave($__internal_eaaaa427d66927a2574098f60ffe475948db6686ea601c83132cafa641d1de98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
