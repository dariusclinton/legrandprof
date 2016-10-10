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
        $__internal_c510a2d6c6efc238dc88eb352ec26a075c204cbb83ab1d4e23f6bc1764b55866 = $this->env->getExtension("native_profiler");
        $__internal_c510a2d6c6efc238dc88eb352ec26a075c204cbb83ab1d4e23f6bc1764b55866->enter($__internal_c510a2d6c6efc238dc88eb352ec26a075c204cbb83ab1d4e23f6bc1764b55866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c510a2d6c6efc238dc88eb352ec26a075c204cbb83ab1d4e23f6bc1764b55866->leave($__internal_c510a2d6c6efc238dc88eb352ec26a075c204cbb83ab1d4e23f6bc1764b55866_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0f09a4bc76a4558a1365baebd9bea4392fb36a4d4f3996c78bf6177b1fa167d = $this->env->getExtension("native_profiler");
        $__internal_e0f09a4bc76a4558a1365baebd9bea4392fb36a4d4f3996c78bf6177b1fa167d->enter($__internal_e0f09a4bc76a4558a1365baebd9bea4392fb36a4d4f3996c78bf6177b1fa167d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e0f09a4bc76a4558a1365baebd9bea4392fb36a4d4f3996c78bf6177b1fa167d->leave($__internal_e0f09a4bc76a4558a1365baebd9bea4392fb36a4d4f3996c78bf6177b1fa167d_prof);

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
