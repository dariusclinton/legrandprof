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
        $__internal_9661eb562e66b61ad885c15df28e90c6d951ae2a66d2cfab97b0c223d882e42b = $this->env->getExtension("native_profiler");
        $__internal_9661eb562e66b61ad885c15df28e90c6d951ae2a66d2cfab97b0c223d882e42b->enter($__internal_9661eb562e66b61ad885c15df28e90c6d951ae2a66d2cfab97b0c223d882e42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9661eb562e66b61ad885c15df28e90c6d951ae2a66d2cfab97b0c223d882e42b->leave($__internal_9661eb562e66b61ad885c15df28e90c6d951ae2a66d2cfab97b0c223d882e42b_prof);

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
