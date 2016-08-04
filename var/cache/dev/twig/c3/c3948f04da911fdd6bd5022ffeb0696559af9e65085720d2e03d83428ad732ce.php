<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_05a6ece8aa6d07c6187ba806e730b7925c373ff156eac0eface079f68d106a51 extends Twig_Template
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
        $__internal_7f6eead930c2a1a73db5223956b19ed7b206f6194504bdb3b86b1b014d29ff94 = $this->env->getExtension("native_profiler");
        $__internal_7f6eead930c2a1a73db5223956b19ed7b206f6194504bdb3b86b1b014d29ff94->enter($__internal_7f6eead930c2a1a73db5223956b19ed7b206f6194504bdb3b86b1b014d29ff94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7f6eead930c2a1a73db5223956b19ed7b206f6194504bdb3b86b1b014d29ff94->leave($__internal_7f6eead930c2a1a73db5223956b19ed7b206f6194504bdb3b86b1b014d29ff94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
