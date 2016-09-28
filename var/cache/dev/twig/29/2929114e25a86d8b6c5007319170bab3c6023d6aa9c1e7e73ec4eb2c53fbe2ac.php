<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fce3c86c2d245d78301115855a15fe52b5f7dc58ed55cbc9ae4efde3ce31fdec extends Twig_Template
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
        $__internal_259f41c189b5ec96454142d0265fcb86a11551b5fd6161ccd9dad2eaa0af48f5 = $this->env->getExtension("native_profiler");
        $__internal_259f41c189b5ec96454142d0265fcb86a11551b5fd6161ccd9dad2eaa0af48f5->enter($__internal_259f41c189b5ec96454142d0265fcb86a11551b5fd6161ccd9dad2eaa0af48f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_259f41c189b5ec96454142d0265fcb86a11551b5fd6161ccd9dad2eaa0af48f5->leave($__internal_259f41c189b5ec96454142d0265fcb86a11551b5fd6161ccd9dad2eaa0af48f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
