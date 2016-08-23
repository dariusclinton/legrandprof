<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_637e93af9698c3196c1705adf3554e263372da2c5a6a1e56fcf4271355b41417 extends Twig_Template
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
        $__internal_d81e5d4cd23caa64053aeb55a4fd94c011bee837310ecf3fce542486aa1b2a99 = $this->env->getExtension("native_profiler");
        $__internal_d81e5d4cd23caa64053aeb55a4fd94c011bee837310ecf3fce542486aa1b2a99->enter($__internal_d81e5d4cd23caa64053aeb55a4fd94c011bee837310ecf3fce542486aa1b2a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d81e5d4cd23caa64053aeb55a4fd94c011bee837310ecf3fce542486aa1b2a99->leave($__internal_d81e5d4cd23caa64053aeb55a4fd94c011bee837310ecf3fce542486aa1b2a99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
