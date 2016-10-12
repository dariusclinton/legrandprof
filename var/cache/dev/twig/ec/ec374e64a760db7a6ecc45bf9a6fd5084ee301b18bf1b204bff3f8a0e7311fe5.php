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
        $__internal_0f711cdc3bef42d8130c57d6406d93f3c0704a0362e67af3316093acee58fd33 = $this->env->getExtension("native_profiler");
        $__internal_0f711cdc3bef42d8130c57d6406d93f3c0704a0362e67af3316093acee58fd33->enter($__internal_0f711cdc3bef42d8130c57d6406d93f3c0704a0362e67af3316093acee58fd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_0f711cdc3bef42d8130c57d6406d93f3c0704a0362e67af3316093acee58fd33->leave($__internal_0f711cdc3bef42d8130c57d6406d93f3c0704a0362e67af3316093acee58fd33_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_4a4f3d5d10bb4ea82d47133c768c9ee6b08df462e02cd2ed4c472fc6dd3b3c1f = $this->env->getExtension("native_profiler");
        $__internal_4a4f3d5d10bb4ea82d47133c768c9ee6b08df462e02cd2ed4c472fc6dd3b3c1f->enter($__internal_4a4f3d5d10bb4ea82d47133c768c9ee6b08df462e02cd2ed4c472fc6dd3b3c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_4a4f3d5d10bb4ea82d47133c768c9ee6b08df462e02cd2ed4c472fc6dd3b3c1f->leave($__internal_4a4f3d5d10bb4ea82d47133c768c9ee6b08df462e02cd2ed4c472fc6dd3b3c1f_prof);

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
