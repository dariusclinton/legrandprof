<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_75d83b86124bed283d6d6afd0cec38bf6feea5bc5d40e0ae9daadf081df289ef extends Twig_Template
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
        $__internal_9247561a036562f11a62a09c64f6ba9161c566a2efef546c25e76473772e82a3 = $this->env->getExtension("native_profiler");
        $__internal_9247561a036562f11a62a09c64f6ba9161c566a2efef546c25e76473772e82a3->enter($__internal_9247561a036562f11a62a09c64f6ba9161c566a2efef546c25e76473772e82a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9247561a036562f11a62a09c64f6ba9161c566a2efef546c25e76473772e82a3->leave($__internal_9247561a036562f11a62a09c64f6ba9161c566a2efef546c25e76473772e82a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
