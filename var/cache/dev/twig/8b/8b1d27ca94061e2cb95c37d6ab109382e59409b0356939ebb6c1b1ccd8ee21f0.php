<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_93da74039ee210a418bc0bcae83dfe4c9c4610df5bf4ae05967546d2639525ca extends Twig_Template
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
        $__internal_e6e6d4fd3ed2b0b92531f10b7807914d76b66ebd66f962f704d6901b75150f1e = $this->env->getExtension("native_profiler");
        $__internal_e6e6d4fd3ed2b0b92531f10b7807914d76b66ebd66f962f704d6901b75150f1e->enter($__internal_e6e6d4fd3ed2b0b92531f10b7807914d76b66ebd66f962f704d6901b75150f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e6e6d4fd3ed2b0b92531f10b7807914d76b66ebd66f962f704d6901b75150f1e->leave($__internal_e6e6d4fd3ed2b0b92531f10b7807914d76b66ebd66f962f704d6901b75150f1e_prof);

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
