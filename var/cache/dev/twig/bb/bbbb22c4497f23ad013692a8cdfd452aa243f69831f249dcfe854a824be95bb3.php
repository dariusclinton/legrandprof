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
        $__internal_2faf0ecea4b6c7e88ea072cfe020482067805d6f076b42a0384a83ef5f49ad4c = $this->env->getExtension("native_profiler");
        $__internal_2faf0ecea4b6c7e88ea072cfe020482067805d6f076b42a0384a83ef5f49ad4c->enter($__internal_2faf0ecea4b6c7e88ea072cfe020482067805d6f076b42a0384a83ef5f49ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2faf0ecea4b6c7e88ea072cfe020482067805d6f076b42a0384a83ef5f49ad4c->leave($__internal_2faf0ecea4b6c7e88ea072cfe020482067805d6f076b42a0384a83ef5f49ad4c_prof);

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
