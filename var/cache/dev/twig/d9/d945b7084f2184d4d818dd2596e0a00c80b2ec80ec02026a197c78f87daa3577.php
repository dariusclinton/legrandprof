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
        $__internal_fc5140fd9d087fb9a2ed28220d9376f4ce3f1c5ba53007f9664d842578dd1f28 = $this->env->getExtension("native_profiler");
        $__internal_fc5140fd9d087fb9a2ed28220d9376f4ce3f1c5ba53007f9664d842578dd1f28->enter($__internal_fc5140fd9d087fb9a2ed28220d9376f4ce3f1c5ba53007f9664d842578dd1f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fc5140fd9d087fb9a2ed28220d9376f4ce3f1c5ba53007f9664d842578dd1f28->leave($__internal_fc5140fd9d087fb9a2ed28220d9376f4ce3f1c5ba53007f9664d842578dd1f28_prof);

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
