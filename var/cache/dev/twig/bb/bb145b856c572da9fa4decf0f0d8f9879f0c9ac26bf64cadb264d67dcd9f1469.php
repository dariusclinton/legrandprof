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
        $__internal_77589e01e87e6442189ac639a3fa8a31a68f502e1e7981fa61ec539d2782a6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77589e01e87e6442189ac639a3fa8a31a68f502e1e7981fa61ec539d2782a6fd->enter($__internal_77589e01e87e6442189ac639a3fa8a31a68f502e1e7981fa61ec539d2782a6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_77589e01e87e6442189ac639a3fa8a31a68f502e1e7981fa61ec539d2782a6fd->leave($__internal_77589e01e87e6442189ac639a3fa8a31a68f502e1e7981fa61ec539d2782a6fd_prof);

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
