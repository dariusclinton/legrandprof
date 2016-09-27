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
        $__internal_c2752efb21e5b21ee2accaa621cbc691a784910311e17632755f4dc4f5783053 = $this->env->getExtension("native_profiler");
        $__internal_c2752efb21e5b21ee2accaa621cbc691a784910311e17632755f4dc4f5783053->enter($__internal_c2752efb21e5b21ee2accaa621cbc691a784910311e17632755f4dc4f5783053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2752efb21e5b21ee2accaa621cbc691a784910311e17632755f4dc4f5783053->leave($__internal_c2752efb21e5b21ee2accaa621cbc691a784910311e17632755f4dc4f5783053_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1db714d309af055cb4475a4602983771664923abb774a5028a1bc1678da9334 = $this->env->getExtension("native_profiler");
        $__internal_e1db714d309af055cb4475a4602983771664923abb774a5028a1bc1678da9334->enter($__internal_e1db714d309af055cb4475a4602983771664923abb774a5028a1bc1678da9334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e1db714d309af055cb4475a4602983771664923abb774a5028a1bc1678da9334->leave($__internal_e1db714d309af055cb4475a4602983771664923abb774a5028a1bc1678da9334_prof);

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
