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
        $__internal_8d35a98d5f762575765db1846f25b510cb091c13fc690b8dc61ecb1223f43d4a = $this->env->getExtension("native_profiler");
        $__internal_8d35a98d5f762575765db1846f25b510cb091c13fc690b8dc61ecb1223f43d4a->enter($__internal_8d35a98d5f762575765db1846f25b510cb091c13fc690b8dc61ecb1223f43d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8d35a98d5f762575765db1846f25b510cb091c13fc690b8dc61ecb1223f43d4a->leave($__internal_8d35a98d5f762575765db1846f25b510cb091c13fc690b8dc61ecb1223f43d4a_prof);

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
