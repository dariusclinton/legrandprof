<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4bc7c4e24912918d40efeca876f306d01556bccfb820aa71e038c761b5a9da4e extends Twig_Template
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
        $__internal_cf4a965464e39ad23c07293263486fad4d78a655f171edda260fd099d52b530d = $this->env->getExtension("native_profiler");
        $__internal_cf4a965464e39ad23c07293263486fad4d78a655f171edda260fd099d52b530d->enter($__internal_cf4a965464e39ad23c07293263486fad4d78a655f171edda260fd099d52b530d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_cf4a965464e39ad23c07293263486fad4d78a655f171edda260fd099d52b530d->leave($__internal_cf4a965464e39ad23c07293263486fad4d78a655f171edda260fd099d52b530d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
