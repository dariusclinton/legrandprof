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
        $__internal_1148a6acc743974823b80ad28107edbd11eddffc3f0f15d8db4e436775bba1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1148a6acc743974823b80ad28107edbd11eddffc3f0f15d8db4e436775bba1a8->enter($__internal_1148a6acc743974823b80ad28107edbd11eddffc3f0f15d8db4e436775bba1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1148a6acc743974823b80ad28107edbd11eddffc3f0f15d8db4e436775bba1a8->leave($__internal_1148a6acc743974823b80ad28107edbd11eddffc3f0f15d8db4e436775bba1a8_prof);

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
