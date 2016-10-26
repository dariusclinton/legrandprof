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
        $__internal_543a453a14b7e8d587a5d6a58d5707cadfbe64bac5665f8d72f8ca52a884f02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543a453a14b7e8d587a5d6a58d5707cadfbe64bac5665f8d72f8ca52a884f02c->enter($__internal_543a453a14b7e8d587a5d6a58d5707cadfbe64bac5665f8d72f8ca52a884f02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_543a453a14b7e8d587a5d6a58d5707cadfbe64bac5665f8d72f8ca52a884f02c->leave($__internal_543a453a14b7e8d587a5d6a58d5707cadfbe64bac5665f8d72f8ca52a884f02c_prof);

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
