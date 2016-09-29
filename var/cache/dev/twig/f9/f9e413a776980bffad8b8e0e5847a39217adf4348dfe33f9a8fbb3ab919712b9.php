<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_74c7be5d57db606590f4cd98a29732ed9a362f9fd685cd18d898ca2ad852985c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_93f8b11aec08046b98a4111c65fe37c42a5e338ddfdabb9423fe027d7f838421 = $this->env->getExtension("native_profiler");
        $__internal_93f8b11aec08046b98a4111c65fe37c42a5e338ddfdabb9423fe027d7f838421->enter($__internal_93f8b11aec08046b98a4111c65fe37c42a5e338ddfdabb9423fe027d7f838421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f8b11aec08046b98a4111c65fe37c42a5e338ddfdabb9423fe027d7f838421->leave($__internal_93f8b11aec08046b98a4111c65fe37c42a5e338ddfdabb9423fe027d7f838421_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0584bc7a6acf1c5eebf71eead2b17418979f838a3e2ff83ecc47dd4e405edf61 = $this->env->getExtension("native_profiler");
        $__internal_0584bc7a6acf1c5eebf71eead2b17418979f838a3e2ff83ecc47dd4e405edf61->enter($__internal_0584bc7a6acf1c5eebf71eead2b17418979f838a3e2ff83ecc47dd4e405edf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_0584bc7a6acf1c5eebf71eead2b17418979f838a3e2ff83ecc47dd4e405edf61->leave($__internal_0584bc7a6acf1c5eebf71eead2b17418979f838a3e2ff83ecc47dd4e405edf61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
