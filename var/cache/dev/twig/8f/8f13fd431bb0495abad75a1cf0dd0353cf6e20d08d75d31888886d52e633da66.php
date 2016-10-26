<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_62ec2fddbc2f15a4ee161245ff83ed2a65e065c1efff68ad8bf9f050830fa561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2e9cfaecb67990e4f80e8117d1525e03409c45be247e0009b1db32c0e08a5ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9cfaecb67990e4f80e8117d1525e03409c45be247e0009b1db32c0e08a5ccc->enter($__internal_2e9cfaecb67990e4f80e8117d1525e03409c45be247e0009b1db32c0e08a5ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9cfaecb67990e4f80e8117d1525e03409c45be247e0009b1db32c0e08a5ccc->leave($__internal_2e9cfaecb67990e4f80e8117d1525e03409c45be247e0009b1db32c0e08a5ccc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23fa783374ca68c061b0649b149838e3f1ad3fd00e74aa9ae21fa69b2d375995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fa783374ca68c061b0649b149838e3f1ad3fd00e74aa9ae21fa69b2d375995->enter($__internal_23fa783374ca68c061b0649b149838e3f1ad3fd00e74aa9ae21fa69b2d375995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_23fa783374ca68c061b0649b149838e3f1ad3fd00e74aa9ae21fa69b2d375995->leave($__internal_23fa783374ca68c061b0649b149838e3f1ad3fd00e74aa9ae21fa69b2d375995_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
