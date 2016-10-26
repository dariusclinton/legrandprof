<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c4f94d31f2e523e47e35d0e1c45888f50f2b7ef8e5ddd575c47d94eb4a311e06 extends Twig_Template
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
        $__internal_97248077fa0da6e959a5403f5004422f2227da00f342e41dcae9f08148e88264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97248077fa0da6e959a5403f5004422f2227da00f342e41dcae9f08148e88264->enter($__internal_97248077fa0da6e959a5403f5004422f2227da00f342e41dcae9f08148e88264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_97248077fa0da6e959a5403f5004422f2227da00f342e41dcae9f08148e88264->leave($__internal_97248077fa0da6e959a5403f5004422f2227da00f342e41dcae9f08148e88264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
