<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cb5d8fca84d41cbc05aadc12b2562fc8d146c51d1fb2daf437ae5ebd4edae4d6 extends Twig_Template
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
        $__internal_2e74417a7c6f712500f6bb34eb64248d539f2ddf8eb0c244ca9f083c5dd6d5bc = $this->env->getExtension("native_profiler");
        $__internal_2e74417a7c6f712500f6bb34eb64248d539f2ddf8eb0c244ca9f083c5dd6d5bc->enter($__internal_2e74417a7c6f712500f6bb34eb64248d539f2ddf8eb0c244ca9f083c5dd6d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2e74417a7c6f712500f6bb34eb64248d539f2ddf8eb0c244ca9f083c5dd6d5bc->leave($__internal_2e74417a7c6f712500f6bb34eb64248d539f2ddf8eb0c244ca9f083c5dd6d5bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
