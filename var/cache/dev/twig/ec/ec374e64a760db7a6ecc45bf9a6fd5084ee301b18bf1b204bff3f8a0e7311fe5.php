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
        $__internal_7d5ffa4456873d346e71ee9bee452af35e49de42e34dd63817c3773f17e93f13 = $this->env->getExtension("native_profiler");
        $__internal_7d5ffa4456873d346e71ee9bee452af35e49de42e34dd63817c3773f17e93f13->enter($__internal_7d5ffa4456873d346e71ee9bee452af35e49de42e34dd63817c3773f17e93f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7d5ffa4456873d346e71ee9bee452af35e49de42e34dd63817c3773f17e93f13->leave($__internal_7d5ffa4456873d346e71ee9bee452af35e49de42e34dd63817c3773f17e93f13_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c19e3d4127922861e65d5743562097e8a87b366e805337975c54e1670cdfdaea = $this->env->getExtension("native_profiler");
        $__internal_c19e3d4127922861e65d5743562097e8a87b366e805337975c54e1670cdfdaea->enter($__internal_c19e3d4127922861e65d5743562097e8a87b366e805337975c54e1670cdfdaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_c19e3d4127922861e65d5743562097e8a87b366e805337975c54e1670cdfdaea->leave($__internal_c19e3d4127922861e65d5743562097e8a87b366e805337975c54e1670cdfdaea_prof);

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
