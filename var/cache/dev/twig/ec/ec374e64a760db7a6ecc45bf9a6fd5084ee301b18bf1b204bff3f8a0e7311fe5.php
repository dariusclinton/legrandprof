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
        $__internal_cd3aa38e1dbfb79e0bc74bde5a0e970dd9dfc3d9b5e629319dcbf37a1c0f8bed = $this->env->getExtension("native_profiler");
        $__internal_cd3aa38e1dbfb79e0bc74bde5a0e970dd9dfc3d9b5e629319dcbf37a1c0f8bed->enter($__internal_cd3aa38e1dbfb79e0bc74bde5a0e970dd9dfc3d9b5e629319dcbf37a1c0f8bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_cd3aa38e1dbfb79e0bc74bde5a0e970dd9dfc3d9b5e629319dcbf37a1c0f8bed->leave($__internal_cd3aa38e1dbfb79e0bc74bde5a0e970dd9dfc3d9b5e629319dcbf37a1c0f8bed_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_9909a35c4604fc675590f99ee05d5ab349f4d18e6b8a70d35657aa21bf59eaa1 = $this->env->getExtension("native_profiler");
        $__internal_9909a35c4604fc675590f99ee05d5ab349f4d18e6b8a70d35657aa21bf59eaa1->enter($__internal_9909a35c4604fc675590f99ee05d5ab349f4d18e6b8a70d35657aa21bf59eaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_9909a35c4604fc675590f99ee05d5ab349f4d18e6b8a70d35657aa21bf59eaa1->leave($__internal_9909a35c4604fc675590f99ee05d5ab349f4d18e6b8a70d35657aa21bf59eaa1_prof);

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
