<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a389907720ba59fc2578435a639c514500241276ba7341679e45798e5921a221 extends Twig_Template
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
        $__internal_f254197c6de2bf107b1a0f2f3e220c63e5bd3f85f1be4f8454956e6397a069a2 = $this->env->getExtension("native_profiler");
        $__internal_f254197c6de2bf107b1a0f2f3e220c63e5bd3f85f1be4f8454956e6397a069a2->enter($__internal_f254197c6de2bf107b1a0f2f3e220c63e5bd3f85f1be4f8454956e6397a069a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f254197c6de2bf107b1a0f2f3e220c63e5bd3f85f1be4f8454956e6397a069a2->leave($__internal_f254197c6de2bf107b1a0f2f3e220c63e5bd3f85f1be4f8454956e6397a069a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
