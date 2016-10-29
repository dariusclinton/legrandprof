<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_492747752092f5e23df5adbad6a7f59a7ed1984b1460831556990193ce9ebcd3 extends Twig_Template
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
        $__internal_747fff58c0d4de76ee9caa9cdde5924eb1b4c2b5d5d25de1bd846e52b3f1acbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747fff58c0d4de76ee9caa9cdde5924eb1b4c2b5d5d25de1bd846e52b3f1acbc->enter($__internal_747fff58c0d4de76ee9caa9cdde5924eb1b4c2b5d5d25de1bd846e52b3f1acbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_747fff58c0d4de76ee9caa9cdde5924eb1b4c2b5d5d25de1bd846e52b3f1acbc->leave($__internal_747fff58c0d4de76ee9caa9cdde5924eb1b4c2b5d5d25de1bd846e52b3f1acbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
