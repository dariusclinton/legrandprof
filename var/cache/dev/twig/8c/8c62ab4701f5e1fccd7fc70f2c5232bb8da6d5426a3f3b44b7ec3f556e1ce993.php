<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0ebc701f80c40d29b9116c68bbce9872e27cc783915525f29929a0acad9c7e15 extends Twig_Template
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
        $__internal_9c32ab88d07903b79f7c388d52a7c9e512663c16640fe144f945c2d16b823cf2 = $this->env->getExtension("native_profiler");
        $__internal_9c32ab88d07903b79f7c388d52a7c9e512663c16640fe144f945c2d16b823cf2->enter($__internal_9c32ab88d07903b79f7c388d52a7c9e512663c16640fe144f945c2d16b823cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9c32ab88d07903b79f7c388d52a7c9e512663c16640fe144f945c2d16b823cf2->leave($__internal_9c32ab88d07903b79f7c388d52a7c9e512663c16640fe144f945c2d16b823cf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
