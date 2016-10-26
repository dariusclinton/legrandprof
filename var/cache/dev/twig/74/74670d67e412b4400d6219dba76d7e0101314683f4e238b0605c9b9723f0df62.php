<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dad2cae64d39fce7d188db1e06f2133d500c896dad7c542fea87f74449bf5185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1371af29257b430721f85b9b86fc7b7e85345a522d59dcdfbacbb53cca136194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1371af29257b430721f85b9b86fc7b7e85345a522d59dcdfbacbb53cca136194->enter($__internal_1371af29257b430721f85b9b86fc7b7e85345a522d59dcdfbacbb53cca136194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1371af29257b430721f85b9b86fc7b7e85345a522d59dcdfbacbb53cca136194->leave($__internal_1371af29257b430721f85b9b86fc7b7e85345a522d59dcdfbacbb53cca136194_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5695c3c844e55ec4c893e2179c789c2d7fca82022db8257af3e5b0cc19d44bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5695c3c844e55ec4c893e2179c789c2d7fca82022db8257af3e5b0cc19d44bc1->enter($__internal_5695c3c844e55ec4c893e2179c789c2d7fca82022db8257af3e5b0cc19d44bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5695c3c844e55ec4c893e2179c789c2d7fca82022db8257af3e5b0cc19d44bc1->leave($__internal_5695c3c844e55ec4c893e2179c789c2d7fca82022db8257af3e5b0cc19d44bc1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
