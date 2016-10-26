<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1265784a1f7722dabc5f87bac249b5890a8d1430854f3a3e2eeef5510ecde6ee extends Twig_Template
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
        $__internal_7b1f2c55b923329b2f857945ddbe825c396ac133eb874d352554378e5c432b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1f2c55b923329b2f857945ddbe825c396ac133eb874d352554378e5c432b69->enter($__internal_7b1f2c55b923329b2f857945ddbe825c396ac133eb874d352554378e5c432b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7b1f2c55b923329b2f857945ddbe825c396ac133eb874d352554378e5c432b69->leave($__internal_7b1f2c55b923329b2f857945ddbe825c396ac133eb874d352554378e5c432b69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
