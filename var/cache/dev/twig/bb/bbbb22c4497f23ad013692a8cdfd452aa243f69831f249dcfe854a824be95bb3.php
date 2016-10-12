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
        $__internal_15f2ef8aec788643a6ba839e73e4fdea725aca536d679648deb31577d8d21601 = $this->env->getExtension("native_profiler");
        $__internal_15f2ef8aec788643a6ba839e73e4fdea725aca536d679648deb31577d8d21601->enter($__internal_15f2ef8aec788643a6ba839e73e4fdea725aca536d679648deb31577d8d21601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_15f2ef8aec788643a6ba839e73e4fdea725aca536d679648deb31577d8d21601->leave($__internal_15f2ef8aec788643a6ba839e73e4fdea725aca536d679648deb31577d8d21601_prof);

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
