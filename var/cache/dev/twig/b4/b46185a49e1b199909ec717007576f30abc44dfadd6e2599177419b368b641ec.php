<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3a9c85517c4adca167ac5e38b3d78394cd9e85e31eb9ed117268f08e210565de extends Twig_Template
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
        $__internal_bd0d6119134b1b37cebae1865d509bd850ef11343aa2bcda279fecd6a2fe5037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0d6119134b1b37cebae1865d509bd850ef11343aa2bcda279fecd6a2fe5037->enter($__internal_bd0d6119134b1b37cebae1865d509bd850ef11343aa2bcda279fecd6a2fe5037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0d6119134b1b37cebae1865d509bd850ef11343aa2bcda279fecd6a2fe5037->leave($__internal_bd0d6119134b1b37cebae1865d509bd850ef11343aa2bcda279fecd6a2fe5037_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_520e690872d9a5af4a42bcfa878590d23bd8f214c44a5ef5f29c6af03a3fb805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520e690872d9a5af4a42bcfa878590d23bd8f214c44a5ef5f29c6af03a3fb805->enter($__internal_520e690872d9a5af4a42bcfa878590d23bd8f214c44a5ef5f29c6af03a3fb805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_520e690872d9a5af4a42bcfa878590d23bd8f214c44a5ef5f29c6af03a3fb805->leave($__internal_520e690872d9a5af4a42bcfa878590d23bd8f214c44a5ef5f29c6af03a3fb805_prof);

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
