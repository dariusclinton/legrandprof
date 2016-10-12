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
        $__internal_926dd0f14870a2c5fd88221ac3f2daa04eaf7f287d5f6d8f584028fb0f4a9501 = $this->env->getExtension("native_profiler");
        $__internal_926dd0f14870a2c5fd88221ac3f2daa04eaf7f287d5f6d8f584028fb0f4a9501->enter($__internal_926dd0f14870a2c5fd88221ac3f2daa04eaf7f287d5f6d8f584028fb0f4a9501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_926dd0f14870a2c5fd88221ac3f2daa04eaf7f287d5f6d8f584028fb0f4a9501->leave($__internal_926dd0f14870a2c5fd88221ac3f2daa04eaf7f287d5f6d8f584028fb0f4a9501_prof);

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
