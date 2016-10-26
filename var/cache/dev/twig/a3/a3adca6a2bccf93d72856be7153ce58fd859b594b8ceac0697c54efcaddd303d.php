<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a6cc91bc72f1e64f4f2765496fd0fe81f35c025bfe1505d929c18ab53afa3244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3f43361da4d015a68246cbbd41bb142639a05139cbfd2d1b7fe82a093f65d666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f43361da4d015a68246cbbd41bb142639a05139cbfd2d1b7fe82a093f65d666->enter($__internal_3f43361da4d015a68246cbbd41bb142639a05139cbfd2d1b7fe82a093f65d666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f43361da4d015a68246cbbd41bb142639a05139cbfd2d1b7fe82a093f65d666->leave($__internal_3f43361da4d015a68246cbbd41bb142639a05139cbfd2d1b7fe82a093f65d666_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c15729d5ae1bb5ed4fe074f5d14842cdb80545cc942782c6bf7253d77423162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c15729d5ae1bb5ed4fe074f5d14842cdb80545cc942782c6bf7253d77423162->enter($__internal_8c15729d5ae1bb5ed4fe074f5d14842cdb80545cc942782c6bf7253d77423162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8c15729d5ae1bb5ed4fe074f5d14842cdb80545cc942782c6bf7253d77423162->leave($__internal_8c15729d5ae1bb5ed4fe074f5d14842cdb80545cc942782c6bf7253d77423162_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
