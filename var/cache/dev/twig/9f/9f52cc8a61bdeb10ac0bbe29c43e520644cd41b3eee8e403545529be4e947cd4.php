<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_dcb85c84a88bcd6d9963c2e68f19624ffb81319d793f561522339b4b0d964190 = $this->env->getExtension("native_profiler");
        $__internal_dcb85c84a88bcd6d9963c2e68f19624ffb81319d793f561522339b4b0d964190->enter($__internal_dcb85c84a88bcd6d9963c2e68f19624ffb81319d793f561522339b4b0d964190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb85c84a88bcd6d9963c2e68f19624ffb81319d793f561522339b4b0d964190->leave($__internal_dcb85c84a88bcd6d9963c2e68f19624ffb81319d793f561522339b4b0d964190_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca770039c41b71565dadcaa631b4efebfd59f946499bdf8a9c1ab538664b93f6 = $this->env->getExtension("native_profiler");
        $__internal_ca770039c41b71565dadcaa631b4efebfd59f946499bdf8a9c1ab538664b93f6->enter($__internal_ca770039c41b71565dadcaa631b4efebfd59f946499bdf8a9c1ab538664b93f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_ca770039c41b71565dadcaa631b4efebfd59f946499bdf8a9c1ab538664b93f6->leave($__internal_ca770039c41b71565dadcaa631b4efebfd59f946499bdf8a9c1ab538664b93f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
