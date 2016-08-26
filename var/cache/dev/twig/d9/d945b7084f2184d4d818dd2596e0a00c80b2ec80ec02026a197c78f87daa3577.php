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
        $__internal_ba39d89d8e271b1d3f073d604bcbb3a23b1837f1a9c36d3d337fad2d3cde05d6 = $this->env->getExtension("native_profiler");
        $__internal_ba39d89d8e271b1d3f073d604bcbb3a23b1837f1a9c36d3d337fad2d3cde05d6->enter($__internal_ba39d89d8e271b1d3f073d604bcbb3a23b1837f1a9c36d3d337fad2d3cde05d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ba39d89d8e271b1d3f073d604bcbb3a23b1837f1a9c36d3d337fad2d3cde05d6->leave($__internal_ba39d89d8e271b1d3f073d604bcbb3a23b1837f1a9c36d3d337fad2d3cde05d6_prof);

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
