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
        $__internal_82eac7778a6ca4890b68e484a5d3b34e7bdb35b54a3f0778cf4de8be629da936 = $this->env->getExtension("native_profiler");
        $__internal_82eac7778a6ca4890b68e484a5d3b34e7bdb35b54a3f0778cf4de8be629da936->enter($__internal_82eac7778a6ca4890b68e484a5d3b34e7bdb35b54a3f0778cf4de8be629da936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_82eac7778a6ca4890b68e484a5d3b34e7bdb35b54a3f0778cf4de8be629da936->leave($__internal_82eac7778a6ca4890b68e484a5d3b34e7bdb35b54a3f0778cf4de8be629da936_prof);

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
