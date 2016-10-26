<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9830908b9faec2c485543a57e193a84dd2779c0fe54af335716433ee06ce916c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_2237b5ebcd4c921b4890eb4bde5aa3d69830282d6f4e83a83a86e0de325f4268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2237b5ebcd4c921b4890eb4bde5aa3d69830282d6f4e83a83a86e0de325f4268->enter($__internal_2237b5ebcd4c921b4890eb4bde5aa3d69830282d6f4e83a83a86e0de325f4268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2237b5ebcd4c921b4890eb4bde5aa3d69830282d6f4e83a83a86e0de325f4268->leave($__internal_2237b5ebcd4c921b4890eb4bde5aa3d69830282d6f4e83a83a86e0de325f4268_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d924d6b6adbe59cc4de3b1b589f63d9303a18bef80f98c8bfc08ceafae9f3d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d924d6b6adbe59cc4de3b1b589f63d9303a18bef80f98c8bfc08ceafae9f3d7f->enter($__internal_d924d6b6adbe59cc4de3b1b589f63d9303a18bef80f98c8bfc08ceafae9f3d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d924d6b6adbe59cc4de3b1b589f63d9303a18bef80f98c8bfc08ceafae9f3d7f->leave($__internal_d924d6b6adbe59cc4de3b1b589f63d9303a18bef80f98c8bfc08ceafae9f3d7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
