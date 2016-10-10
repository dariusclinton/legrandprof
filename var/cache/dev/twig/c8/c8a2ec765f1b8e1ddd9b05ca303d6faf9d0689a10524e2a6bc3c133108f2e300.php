<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_79ea177a4101e9774a6c3251f91353cbdc41aa67861dbaad2dd5c921a1bcba5e extends Twig_Template
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
        $__internal_b0374742e25600a9ac3db4b1b37bcbd8184cf4ab403ecfc1c19a3fec5366389e = $this->env->getExtension("native_profiler");
        $__internal_b0374742e25600a9ac3db4b1b37bcbd8184cf4ab403ecfc1c19a3fec5366389e->enter($__internal_b0374742e25600a9ac3db4b1b37bcbd8184cf4ab403ecfc1c19a3fec5366389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0374742e25600a9ac3db4b1b37bcbd8184cf4ab403ecfc1c19a3fec5366389e->leave($__internal_b0374742e25600a9ac3db4b1b37bcbd8184cf4ab403ecfc1c19a3fec5366389e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76c187375fe990a616c7dc60f4a14ea753d15fb868265fc00bca4e872e220968 = $this->env->getExtension("native_profiler");
        $__internal_76c187375fe990a616c7dc60f4a14ea753d15fb868265fc00bca4e872e220968->enter($__internal_76c187375fe990a616c7dc60f4a14ea753d15fb868265fc00bca4e872e220968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_76c187375fe990a616c7dc60f4a14ea753d15fb868265fc00bca4e872e220968->leave($__internal_76c187375fe990a616c7dc60f4a14ea753d15fb868265fc00bca4e872e220968_prof);

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
