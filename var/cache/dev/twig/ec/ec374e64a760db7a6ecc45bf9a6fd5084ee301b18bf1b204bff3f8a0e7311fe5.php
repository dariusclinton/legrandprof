<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_4317058054554dc25637b3a61123efdc0181248e61b833c017b7480298c2652c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d28520d601a71def18aa9b0ea33adc1183b53bf2b41413085db5a2fb4d89851 = $this->env->getExtension("native_profiler");
        $__internal_5d28520d601a71def18aa9b0ea33adc1183b53bf2b41413085db5a2fb4d89851->enter($__internal_5d28520d601a71def18aa9b0ea33adc1183b53bf2b41413085db5a2fb4d89851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_5d28520d601a71def18aa9b0ea33adc1183b53bf2b41413085db5a2fb4d89851->leave($__internal_5d28520d601a71def18aa9b0ea33adc1183b53bf2b41413085db5a2fb4d89851_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_9509a0479822018e419d4953e5a2280530c3d15b4ff0fd02d860695901bba916 = $this->env->getExtension("native_profiler");
        $__internal_9509a0479822018e419d4953e5a2280530c3d15b4ff0fd02d860695901bba916->enter($__internal_9509a0479822018e419d4953e5a2280530c3d15b4ff0fd02d860695901bba916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_9509a0479822018e419d4953e5a2280530c3d15b4ff0fd02d860695901bba916->leave($__internal_9509a0479822018e419d4953e5a2280530c3d15b4ff0fd02d860695901bba916_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}
