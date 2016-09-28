<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4805806bc3aedfaa4951a70da5a5aab4acf26ae627bbb2479a4ebef59d8757d5 extends Twig_Template
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
        $__internal_4524bba4801c14099244527289fb4b850d6d34f5ab3234bd6a72782e0b173173 = $this->env->getExtension("native_profiler");
        $__internal_4524bba4801c14099244527289fb4b850d6d34f5ab3234bd6a72782e0b173173->enter($__internal_4524bba4801c14099244527289fb4b850d6d34f5ab3234bd6a72782e0b173173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4524bba4801c14099244527289fb4b850d6d34f5ab3234bd6a72782e0b173173->leave($__internal_4524bba4801c14099244527289fb4b850d6d34f5ab3234bd6a72782e0b173173_prof);

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
