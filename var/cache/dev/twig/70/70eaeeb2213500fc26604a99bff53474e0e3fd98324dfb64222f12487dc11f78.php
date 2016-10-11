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
        $__internal_3f009acc72d6e988a988c373ec85dffdac8f569659abc30d43293f84e6e7bcbb = $this->env->getExtension("native_profiler");
        $__internal_3f009acc72d6e988a988c373ec85dffdac8f569659abc30d43293f84e6e7bcbb->enter($__internal_3f009acc72d6e988a988c373ec85dffdac8f569659abc30d43293f84e6e7bcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f009acc72d6e988a988c373ec85dffdac8f569659abc30d43293f84e6e7bcbb->leave($__internal_3f009acc72d6e988a988c373ec85dffdac8f569659abc30d43293f84e6e7bcbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85f8c4a66deab1c3c82c1c2ac024e107b40dc5adaf51ae0a4dea1c3c9cdaad34 = $this->env->getExtension("native_profiler");
        $__internal_85f8c4a66deab1c3c82c1c2ac024e107b40dc5adaf51ae0a4dea1c3c9cdaad34->enter($__internal_85f8c4a66deab1c3c82c1c2ac024e107b40dc5adaf51ae0a4dea1c3c9cdaad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_85f8c4a66deab1c3c82c1c2ac024e107b40dc5adaf51ae0a4dea1c3c9cdaad34->leave($__internal_85f8c4a66deab1c3c82c1c2ac024e107b40dc5adaf51ae0a4dea1c3c9cdaad34_prof);

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
