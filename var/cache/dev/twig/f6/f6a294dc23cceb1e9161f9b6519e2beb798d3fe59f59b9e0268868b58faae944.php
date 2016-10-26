<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2b0958c74374dba0e80a3fe9eb4ea14f9716afe122d45839d17a804cae06653b extends Twig_Template
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
        $__internal_006d409dfbbe9f47d17c117d5b852a7e89154470242d36544e7b9ac1c6da93f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006d409dfbbe9f47d17c117d5b852a7e89154470242d36544e7b9ac1c6da93f9->enter($__internal_006d409dfbbe9f47d17c117d5b852a7e89154470242d36544e7b9ac1c6da93f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_006d409dfbbe9f47d17c117d5b852a7e89154470242d36544e7b9ac1c6da93f9->leave($__internal_006d409dfbbe9f47d17c117d5b852a7e89154470242d36544e7b9ac1c6da93f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
