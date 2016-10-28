<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_61b416060fd9ae6a025a398b6433637e59d3e6fb624952b1d76921660dd638d7 extends Twig_Template
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
        $__internal_b6eb15f6926d0a9206eeaa38e1b5d3802c2ecf9ce949c9cbab1768a898920b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6eb15f6926d0a9206eeaa38e1b5d3802c2ecf9ce949c9cbab1768a898920b73->enter($__internal_b6eb15f6926d0a9206eeaa38e1b5d3802c2ecf9ce949c9cbab1768a898920b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b6eb15f6926d0a9206eeaa38e1b5d3802c2ecf9ce949c9cbab1768a898920b73->leave($__internal_b6eb15f6926d0a9206eeaa38e1b5d3802c2ecf9ce949c9cbab1768a898920b73_prof);

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
