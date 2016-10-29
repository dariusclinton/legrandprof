<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_79ea177a4101e9774a6c3251f91353cbdc41aa67861dbaad2dd5c921a1bcba5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_72cc162b3e3e539aa0486e23f2dca1b92b0b377643170dbf9d7f871c7e2338fe = $this->env->getExtension("native_profiler");
        $__internal_72cc162b3e3e539aa0486e23f2dca1b92b0b377643170dbf9d7f871c7e2338fe->enter($__internal_72cc162b3e3e539aa0486e23f2dca1b92b0b377643170dbf9d7f871c7e2338fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72cc162b3e3e539aa0486e23f2dca1b92b0b377643170dbf9d7f871c7e2338fe->leave($__internal_72cc162b3e3e539aa0486e23f2dca1b92b0b377643170dbf9d7f871c7e2338fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e94fd9db539cb8666a83d623af54c48a995a658973ca06cfa6898f74ff8f32e3 = $this->env->getExtension("native_profiler");
        $__internal_e94fd9db539cb8666a83d623af54c48a995a658973ca06cfa6898f74ff8f32e3->enter($__internal_e94fd9db539cb8666a83d623af54c48a995a658973ca06cfa6898f74ff8f32e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e94fd9db539cb8666a83d623af54c48a995a658973ca06cfa6898f74ff8f32e3->leave($__internal_e94fd9db539cb8666a83d623af54c48a995a658973ca06cfa6898f74ff8f32e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
  {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
