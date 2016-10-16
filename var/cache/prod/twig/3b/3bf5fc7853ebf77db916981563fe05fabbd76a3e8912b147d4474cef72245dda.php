<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_85b5720413a7711ed363a5033c0f0a904a2d673f21566ed7721a781c93667abf extends Twig_Template
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
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}
