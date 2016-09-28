<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fd4abe4e58b39b59a1c53c0d1d9dc0ec81ab125cd4b88e060c60dfbf71072d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99252161493a27c9ced8f4bc1814eb1c35876358585900daeaa62c6dad411cb1 = $this->env->getExtension("native_profiler");
        $__internal_99252161493a27c9ced8f4bc1814eb1c35876358585900daeaa62c6dad411cb1->enter($__internal_99252161493a27c9ced8f4bc1814eb1c35876358585900daeaa62c6dad411cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99252161493a27c9ced8f4bc1814eb1c35876358585900daeaa62c6dad411cb1->leave($__internal_99252161493a27c9ced8f4bc1814eb1c35876358585900daeaa62c6dad411cb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5218e36343d4b826262ced5edebb76757527508bdadf3a240c41d77a86500037 = $this->env->getExtension("native_profiler");
        $__internal_5218e36343d4b826262ced5edebb76757527508bdadf3a240c41d77a86500037->enter($__internal_5218e36343d4b826262ced5edebb76757527508bdadf3a240c41d77a86500037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_5218e36343d4b826262ced5edebb76757527508bdadf3a240c41d77a86500037->leave($__internal_5218e36343d4b826262ced5edebb76757527508bdadf3a240c41d77a86500037_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
