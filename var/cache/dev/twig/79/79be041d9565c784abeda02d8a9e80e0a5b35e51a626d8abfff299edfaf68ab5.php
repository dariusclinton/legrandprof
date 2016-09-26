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
        $__internal_c6add27e8ed0721cd08835b6f459fc1d5eb1bf33de41da82d215cef5a1474b8a = $this->env->getExtension("native_profiler");
        $__internal_c6add27e8ed0721cd08835b6f459fc1d5eb1bf33de41da82d215cef5a1474b8a->enter($__internal_c6add27e8ed0721cd08835b6f459fc1d5eb1bf33de41da82d215cef5a1474b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_c6add27e8ed0721cd08835b6f459fc1d5eb1bf33de41da82d215cef5a1474b8a->leave($__internal_c6add27e8ed0721cd08835b6f459fc1d5eb1bf33de41da82d215cef5a1474b8a_prof);

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
