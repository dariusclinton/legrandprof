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
        $__internal_81f591f08b76c644ca54044035da1b06e290ece686124d4a2dbb10390296ed5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f591f08b76c644ca54044035da1b06e290ece686124d4a2dbb10390296ed5a->enter($__internal_81f591f08b76c644ca54044035da1b06e290ece686124d4a2dbb10390296ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81f591f08b76c644ca54044035da1b06e290ece686124d4a2dbb10390296ed5a->leave($__internal_81f591f08b76c644ca54044035da1b06e290ece686124d4a2dbb10390296ed5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9e7e6c2fdf601584489332726dada1d6026ce21b2ae07ce43bf45487c5e0a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e7e6c2fdf601584489332726dada1d6026ce21b2ae07ce43bf45487c5e0a1d->enter($__internal_f9e7e6c2fdf601584489332726dada1d6026ce21b2ae07ce43bf45487c5e0a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f9e7e6c2fdf601584489332726dada1d6026ce21b2ae07ce43bf45487c5e0a1d->leave($__internal_f9e7e6c2fdf601584489332726dada1d6026ce21b2ae07ce43bf45487c5e0a1d_prof);

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
