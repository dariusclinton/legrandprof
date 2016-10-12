<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d7378bbf6b1ae594a260ee0ca57afbaea467696fdaf24151374392056a69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_88ede2db3fe753fdaf65a487138a80620325757fc91e88ff6555cdfb94b4bbb5 = $this->env->getExtension("native_profiler");
        $__internal_88ede2db3fe753fdaf65a487138a80620325757fc91e88ff6555cdfb94b4bbb5->enter($__internal_88ede2db3fe753fdaf65a487138a80620325757fc91e88ff6555cdfb94b4bbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ede2db3fe753fdaf65a487138a80620325757fc91e88ff6555cdfb94b4bbb5->leave($__internal_88ede2db3fe753fdaf65a487138a80620325757fc91e88ff6555cdfb94b4bbb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8a9a008ba4ca9ecbe9554075e536cf5a5e4acb65eb858cfb6bf1036b81cb928 = $this->env->getExtension("native_profiler");
        $__internal_b8a9a008ba4ca9ecbe9554075e536cf5a5e4acb65eb858cfb6bf1036b81cb928->enter($__internal_b8a9a008ba4ca9ecbe9554075e536cf5a5e4acb65eb858cfb6bf1036b81cb928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b8a9a008ba4ca9ecbe9554075e536cf5a5e4acb65eb858cfb6bf1036b81cb928->leave($__internal_b8a9a008ba4ca9ecbe9554075e536cf5a5e4acb65eb858cfb6bf1036b81cb928_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
