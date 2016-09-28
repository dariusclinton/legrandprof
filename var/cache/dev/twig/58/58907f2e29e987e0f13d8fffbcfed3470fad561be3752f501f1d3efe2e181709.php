<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_96c58e350ea033969fc1d9f3810226b54d99d18cd9df1a4a70c4cba895a9ae62 extends Twig_Template
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
        $__internal_c62b6afc37c21271830832e6338027447cc2e6885d83e8219584594e0b707aec = $this->env->getExtension("native_profiler");
        $__internal_c62b6afc37c21271830832e6338027447cc2e6885d83e8219584594e0b707aec->enter($__internal_c62b6afc37c21271830832e6338027447cc2e6885d83e8219584594e0b707aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c62b6afc37c21271830832e6338027447cc2e6885d83e8219584594e0b707aec->leave($__internal_c62b6afc37c21271830832e6338027447cc2e6885d83e8219584594e0b707aec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
