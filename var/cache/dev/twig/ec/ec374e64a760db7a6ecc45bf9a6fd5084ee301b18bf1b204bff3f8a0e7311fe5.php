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
        $__internal_65897a5eb7187f6ab317916e837dc05cbace3fc4949a558e66a3918f7b3357a7 = $this->env->getExtension("native_profiler");
        $__internal_65897a5eb7187f6ab317916e837dc05cbace3fc4949a558e66a3918f7b3357a7->enter($__internal_65897a5eb7187f6ab317916e837dc05cbace3fc4949a558e66a3918f7b3357a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_65897a5eb7187f6ab317916e837dc05cbace3fc4949a558e66a3918f7b3357a7->leave($__internal_65897a5eb7187f6ab317916e837dc05cbace3fc4949a558e66a3918f7b3357a7_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c0476b903e649ba9ec42ca223243f9cc01d8628288999fca6bfd2707c43dff20 = $this->env->getExtension("native_profiler");
        $__internal_c0476b903e649ba9ec42ca223243f9cc01d8628288999fca6bfd2707c43dff20->enter($__internal_c0476b903e649ba9ec42ca223243f9cc01d8628288999fca6bfd2707c43dff20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_c0476b903e649ba9ec42ca223243f9cc01d8628288999fca6bfd2707c43dff20->leave($__internal_c0476b903e649ba9ec42ca223243f9cc01d8628288999fca6bfd2707c43dff20_prof);

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
