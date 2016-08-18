<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_82601220db66b5dd4d11be99ca2774688b4335b54cc9c6de785ee7d452fb755d extends Twig_Template
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
        $__internal_47267697ba34ca52328bc74cb47fea17faab6ac29ad2d9b1d09917c71f1ef907 = $this->env->getExtension("native_profiler");
        $__internal_47267697ba34ca52328bc74cb47fea17faab6ac29ad2d9b1d09917c71f1ef907->enter($__internal_47267697ba34ca52328bc74cb47fea17faab6ac29ad2d9b1d09917c71f1ef907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_47267697ba34ca52328bc74cb47fea17faab6ac29ad2d9b1d09917c71f1ef907->leave($__internal_47267697ba34ca52328bc74cb47fea17faab6ac29ad2d9b1d09917c71f1ef907_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
