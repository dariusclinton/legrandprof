<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_53d89815e5cfc334b24c829b0334b76b01f659d378908b09e45ac597e90083ac extends Twig_Template
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
        $__internal_10d1be8ba67ff546f5ee9a1f2890f62dfbd28803eb195b3969a7bcae05123dd9 = $this->env->getExtension("native_profiler");
        $__internal_10d1be8ba67ff546f5ee9a1f2890f62dfbd28803eb195b3969a7bcae05123dd9->enter($__internal_10d1be8ba67ff546f5ee9a1f2890f62dfbd28803eb195b3969a7bcae05123dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_10d1be8ba67ff546f5ee9a1f2890f62dfbd28803eb195b3969a7bcae05123dd9->leave($__internal_10d1be8ba67ff546f5ee9a1f2890f62dfbd28803eb195b3969a7bcae05123dd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
