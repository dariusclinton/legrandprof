<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_04731b5514fe42e104fa6dc9fcc4042987287706a2a6310bd7224d680c514f72 extends Twig_Template
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
        $__internal_6cb75e55bab8f086565da3d192f243ef5dc64998a4c9549433b1671758792967 = $this->env->getExtension("native_profiler");
        $__internal_6cb75e55bab8f086565da3d192f243ef5dc64998a4c9549433b1671758792967->enter($__internal_6cb75e55bab8f086565da3d192f243ef5dc64998a4c9549433b1671758792967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6cb75e55bab8f086565da3d192f243ef5dc64998a4c9549433b1671758792967->leave($__internal_6cb75e55bab8f086565da3d192f243ef5dc64998a4c9549433b1671758792967_prof);

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
