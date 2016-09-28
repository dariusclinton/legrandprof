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
        $__internal_6d87c77aa969cbe701c7df24ced71257a4b4850ecab4a0bc6007bc3dfc3313a4 = $this->env->getExtension("native_profiler");
        $__internal_6d87c77aa969cbe701c7df24ced71257a4b4850ecab4a0bc6007bc3dfc3313a4->enter($__internal_6d87c77aa969cbe701c7df24ced71257a4b4850ecab4a0bc6007bc3dfc3313a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6d87c77aa969cbe701c7df24ced71257a4b4850ecab4a0bc6007bc3dfc3313a4->leave($__internal_6d87c77aa969cbe701c7df24ced71257a4b4850ecab4a0bc6007bc3dfc3313a4_prof);

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
