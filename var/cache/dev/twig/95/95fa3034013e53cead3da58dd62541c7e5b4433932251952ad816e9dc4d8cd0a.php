<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cb9d501e66609c5cd7679ca083273e0089cc27fa6e38a6ba1b567b531ce72eda extends Twig_Template
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
        $__internal_97331e4433445d473fcfea2a15a4feecff62eeb1361153a68d0fe248e8923520 = $this->env->getExtension("native_profiler");
        $__internal_97331e4433445d473fcfea2a15a4feecff62eeb1361153a68d0fe248e8923520->enter($__internal_97331e4433445d473fcfea2a15a4feecff62eeb1361153a68d0fe248e8923520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_97331e4433445d473fcfea2a15a4feecff62eeb1361153a68d0fe248e8923520->leave($__internal_97331e4433445d473fcfea2a15a4feecff62eeb1361153a68d0fe248e8923520_prof);

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
