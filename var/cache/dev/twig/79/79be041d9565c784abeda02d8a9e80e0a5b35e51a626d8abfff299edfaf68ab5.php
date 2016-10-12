<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_3d92b93ef1c00e201d420683756e9d1c723f6eef0ac72b74057a090fe2eaa010 extends Twig_Template
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
        $__internal_aca316a4fb2fc853a8124e53b80a51d2c2b01566ebf0247f02d0d273067e5f0a = $this->env->getExtension("native_profiler");
        $__internal_aca316a4fb2fc853a8124e53b80a51d2c2b01566ebf0247f02d0d273067e5f0a->enter($__internal_aca316a4fb2fc853a8124e53b80a51d2c2b01566ebf0247f02d0d273067e5f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_aca316a4fb2fc853a8124e53b80a51d2c2b01566ebf0247f02d0d273067e5f0a->leave($__internal_aca316a4fb2fc853a8124e53b80a51d2c2b01566ebf0247f02d0d273067e5f0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
