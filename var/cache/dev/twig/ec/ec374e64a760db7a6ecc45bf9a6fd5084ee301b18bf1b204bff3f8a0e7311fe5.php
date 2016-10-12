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
        $__internal_9992abd95e22e962398ad938cfb8620ced2cf0b9631869c39635504d119d0079 = $this->env->getExtension("native_profiler");
        $__internal_9992abd95e22e962398ad938cfb8620ced2cf0b9631869c39635504d119d0079->enter($__internal_9992abd95e22e962398ad938cfb8620ced2cf0b9631869c39635504d119d0079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_9992abd95e22e962398ad938cfb8620ced2cf0b9631869c39635504d119d0079->leave($__internal_9992abd95e22e962398ad938cfb8620ced2cf0b9631869c39635504d119d0079_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_d0a3b0e535ae1648ca1eef85eec6bf19f32c75d104adcc4a854cbec9a68b1764 = $this->env->getExtension("native_profiler");
        $__internal_d0a3b0e535ae1648ca1eef85eec6bf19f32c75d104adcc4a854cbec9a68b1764->enter($__internal_d0a3b0e535ae1648ca1eef85eec6bf19f32c75d104adcc4a854cbec9a68b1764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_d0a3b0e535ae1648ca1eef85eec6bf19f32c75d104adcc4a854cbec9a68b1764->leave($__internal_d0a3b0e535ae1648ca1eef85eec6bf19f32c75d104adcc4a854cbec9a68b1764_prof);

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
