<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_db14e56c91cba01ca8113b481797ac28913369168c358aeb920a6f3c5c96339e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ce40dda785defceb4da39543a8ab0dde72205ff5163dd83bba49d7043300934d = $this->env->getExtension("native_profiler");
        $__internal_ce40dda785defceb4da39543a8ab0dde72205ff5163dd83bba49d7043300934d->enter($__internal_ce40dda785defceb4da39543a8ab0dde72205ff5163dd83bba49d7043300934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce40dda785defceb4da39543a8ab0dde72205ff5163dd83bba49d7043300934d->leave($__internal_ce40dda785defceb4da39543a8ab0dde72205ff5163dd83bba49d7043300934d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e84ddeb75154b2e01b276f53504182eb9d6a5860e2d952c425c8fe9698dbcc39 = $this->env->getExtension("native_profiler");
        $__internal_e84ddeb75154b2e01b276f53504182eb9d6a5860e2d952c425c8fe9698dbcc39->enter($__internal_e84ddeb75154b2e01b276f53504182eb9d6a5860e2d952c425c8fe9698dbcc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e84ddeb75154b2e01b276f53504182eb9d6a5860e2d952c425c8fe9698dbcc39->leave($__internal_e84ddeb75154b2e01b276f53504182eb9d6a5860e2d952c425c8fe9698dbcc39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
