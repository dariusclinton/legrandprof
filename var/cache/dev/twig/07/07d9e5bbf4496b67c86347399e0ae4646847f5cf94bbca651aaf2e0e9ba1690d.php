<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f2a5de01ba010fcd15bc6462fc40360a950993ec82b749ee7b4235f1a273d293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_ea3d91db1a81fb66b80f04933d4457e41600f060bbc82557554b7cf4c66e724d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3d91db1a81fb66b80f04933d4457e41600f060bbc82557554b7cf4c66e724d->enter($__internal_ea3d91db1a81fb66b80f04933d4457e41600f060bbc82557554b7cf4c66e724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3d91db1a81fb66b80f04933d4457e41600f060bbc82557554b7cf4c66e724d->leave($__internal_ea3d91db1a81fb66b80f04933d4457e41600f060bbc82557554b7cf4c66e724d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca866526fec781e964cc5223ecb4d845ef0728667d8effa14d202394267e3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca866526fec781e964cc5223ecb4d845ef0728667d8effa14d202394267e3e6->enter($__internal_0ca866526fec781e964cc5223ecb4d845ef0728667d8effa14d202394267e3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0ca866526fec781e964cc5223ecb4d845ef0728667d8effa14d202394267e3e6->leave($__internal_0ca866526fec781e964cc5223ecb4d845ef0728667d8effa14d202394267e3e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
