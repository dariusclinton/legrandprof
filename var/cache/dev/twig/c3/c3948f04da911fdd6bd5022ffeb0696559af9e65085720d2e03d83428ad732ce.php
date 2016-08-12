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
        $__internal_12447f1b49f9401868e07a86a73b44a1cc9b81a56af1241c3307b4c05d3237b5 = $this->env->getExtension("native_profiler");
        $__internal_12447f1b49f9401868e07a86a73b44a1cc9b81a56af1241c3307b4c05d3237b5->enter($__internal_12447f1b49f9401868e07a86a73b44a1cc9b81a56af1241c3307b4c05d3237b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12447f1b49f9401868e07a86a73b44a1cc9b81a56af1241c3307b4c05d3237b5->leave($__internal_12447f1b49f9401868e07a86a73b44a1cc9b81a56af1241c3307b4c05d3237b5_prof);

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
