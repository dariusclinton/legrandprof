<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1ccf89c9c9c2f0a8f5b83a0ede3ef30d3eaf998a48140f91d564cfd346d9e4a5 extends Twig_Template
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
        $__internal_f2c7ff5d70e9d8d5679dc5bc0485e2be0cb2a5be785dd506ce178b52aa2493a3 = $this->env->getExtension("native_profiler");
        $__internal_f2c7ff5d70e9d8d5679dc5bc0485e2be0cb2a5be785dd506ce178b52aa2493a3->enter($__internal_f2c7ff5d70e9d8d5679dc5bc0485e2be0cb2a5be785dd506ce178b52aa2493a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c7ff5d70e9d8d5679dc5bc0485e2be0cb2a5be785dd506ce178b52aa2493a3->leave($__internal_f2c7ff5d70e9d8d5679dc5bc0485e2be0cb2a5be785dd506ce178b52aa2493a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60f02a1866b78680fb66bf1353d07b3943a95fbf23f8b32689384319b6b42c1f = $this->env->getExtension("native_profiler");
        $__internal_60f02a1866b78680fb66bf1353d07b3943a95fbf23f8b32689384319b6b42c1f->enter($__internal_60f02a1866b78680fb66bf1353d07b3943a95fbf23f8b32689384319b6b42c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_60f02a1866b78680fb66bf1353d07b3943a95fbf23f8b32689384319b6b42c1f->leave($__internal_60f02a1866b78680fb66bf1353d07b3943a95fbf23f8b32689384319b6b42c1f_prof);

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
