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
        $__internal_293b45119a953411b4e909c4bc373457015977af22c3b6c82f37521c3685d1e1 = $this->env->getExtension("native_profiler");
        $__internal_293b45119a953411b4e909c4bc373457015977af22c3b6c82f37521c3685d1e1->enter($__internal_293b45119a953411b4e909c4bc373457015977af22c3b6c82f37521c3685d1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_293b45119a953411b4e909c4bc373457015977af22c3b6c82f37521c3685d1e1->leave($__internal_293b45119a953411b4e909c4bc373457015977af22c3b6c82f37521c3685d1e1_prof);

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
