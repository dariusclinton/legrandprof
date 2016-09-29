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
        $__internal_69daead2177f24d6f69eda2cb9d7b40112bdad62bb07e82178be98da70d431b6 = $this->env->getExtension("native_profiler");
        $__internal_69daead2177f24d6f69eda2cb9d7b40112bdad62bb07e82178be98da70d431b6->enter($__internal_69daead2177f24d6f69eda2cb9d7b40112bdad62bb07e82178be98da70d431b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_69daead2177f24d6f69eda2cb9d7b40112bdad62bb07e82178be98da70d431b6->leave($__internal_69daead2177f24d6f69eda2cb9d7b40112bdad62bb07e82178be98da70d431b6_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_e739b3e1ba74aba3334a103923a7084524934178154eb865ad6c0fd0747984cf = $this->env->getExtension("native_profiler");
        $__internal_e739b3e1ba74aba3334a103923a7084524934178154eb865ad6c0fd0747984cf->enter($__internal_e739b3e1ba74aba3334a103923a7084524934178154eb865ad6c0fd0747984cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_e739b3e1ba74aba3334a103923a7084524934178154eb865ad6c0fd0747984cf->leave($__internal_e739b3e1ba74aba3334a103923a7084524934178154eb865ad6c0fd0747984cf_prof);

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
