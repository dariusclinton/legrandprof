<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_de3278c1ba8c670316a26780f821b869042c2900e991be1e382425377765b050 extends Twig_Template
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
        $__internal_1518c45abad988860d16b35521c279fcc22a4c08893d5d424fb6461148e69956 = $this->env->getExtension("native_profiler");
        $__internal_1518c45abad988860d16b35521c279fcc22a4c08893d5d424fb6461148e69956->enter($__internal_1518c45abad988860d16b35521c279fcc22a4c08893d5d424fb6461148e69956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1518c45abad988860d16b35521c279fcc22a4c08893d5d424fb6461148e69956->leave($__internal_1518c45abad988860d16b35521c279fcc22a4c08893d5d424fb6461148e69956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
