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
        $__internal_bd3d1bad1255bd7ad1aedeec5aaf515359137cdca4224e9a9a1963714ca898dd = $this->env->getExtension("native_profiler");
        $__internal_bd3d1bad1255bd7ad1aedeec5aaf515359137cdca4224e9a9a1963714ca898dd->enter($__internal_bd3d1bad1255bd7ad1aedeec5aaf515359137cdca4224e9a9a1963714ca898dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd3d1bad1255bd7ad1aedeec5aaf515359137cdca4224e9a9a1963714ca898dd->leave($__internal_bd3d1bad1255bd7ad1aedeec5aaf515359137cdca4224e9a9a1963714ca898dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_541a07884d1a2af29f79439a9d8816889f28f2ae16a89631ac07eaad224fd510 = $this->env->getExtension("native_profiler");
        $__internal_541a07884d1a2af29f79439a9d8816889f28f2ae16a89631ac07eaad224fd510->enter($__internal_541a07884d1a2af29f79439a9d8816889f28f2ae16a89631ac07eaad224fd510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_541a07884d1a2af29f79439a9d8816889f28f2ae16a89631ac07eaad224fd510->leave($__internal_541a07884d1a2af29f79439a9d8816889f28f2ae16a89631ac07eaad224fd510_prof);

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
