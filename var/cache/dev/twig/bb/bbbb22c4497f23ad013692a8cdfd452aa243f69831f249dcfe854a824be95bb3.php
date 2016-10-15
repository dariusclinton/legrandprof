<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_dde133c16800bd09b33276c5477b6563110c6ea136292ee3342b07c5b3622c08 extends Twig_Template
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
        $__internal_c3e59480b3e72c89a0a7330b5c6147f1d07ea21ca0388fa022f84672c63c756a = $this->env->getExtension("native_profiler");
        $__internal_c3e59480b3e72c89a0a7330b5c6147f1d07ea21ca0388fa022f84672c63c756a->enter($__internal_c3e59480b3e72c89a0a7330b5c6147f1d07ea21ca0388fa022f84672c63c756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c3e59480b3e72c89a0a7330b5c6147f1d07ea21ca0388fa022f84672c63c756a->leave($__internal_c3e59480b3e72c89a0a7330b5c6147f1d07ea21ca0388fa022f84672c63c756a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
