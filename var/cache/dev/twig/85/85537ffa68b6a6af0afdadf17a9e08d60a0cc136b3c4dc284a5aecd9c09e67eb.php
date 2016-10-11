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
        $__internal_3bf762617d5c74c2a23dbe352f1251a71db2ae7c869b1ffe0b6a30d03c1412c2 = $this->env->getExtension("native_profiler");
        $__internal_3bf762617d5c74c2a23dbe352f1251a71db2ae7c869b1ffe0b6a30d03c1412c2->enter($__internal_3bf762617d5c74c2a23dbe352f1251a71db2ae7c869b1ffe0b6a30d03c1412c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3bf762617d5c74c2a23dbe352f1251a71db2ae7c869b1ffe0b6a30d03c1412c2->leave($__internal_3bf762617d5c74c2a23dbe352f1251a71db2ae7c869b1ffe0b6a30d03c1412c2_prof);

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
