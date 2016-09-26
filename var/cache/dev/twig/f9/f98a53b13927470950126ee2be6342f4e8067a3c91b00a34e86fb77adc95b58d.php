<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7ddf562c5ac4894d6dbcbd260b0f86fb0c436bc0ac2aabce65dd3809160f38ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_4f6de58423065acea6876b84dc9705443c67941080d140be8e7a8d8150e70425 = $this->env->getExtension("native_profiler");
        $__internal_4f6de58423065acea6876b84dc9705443c67941080d140be8e7a8d8150e70425->enter($__internal_4f6de58423065acea6876b84dc9705443c67941080d140be8e7a8d8150e70425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6de58423065acea6876b84dc9705443c67941080d140be8e7a8d8150e70425->leave($__internal_4f6de58423065acea6876b84dc9705443c67941080d140be8e7a8d8150e70425_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e2b34abc8d23302f25528390572bda331f60f771657b80de89d50abc0d431e3 = $this->env->getExtension("native_profiler");
        $__internal_1e2b34abc8d23302f25528390572bda331f60f771657b80de89d50abc0d431e3->enter($__internal_1e2b34abc8d23302f25528390572bda331f60f771657b80de89d50abc0d431e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1e2b34abc8d23302f25528390572bda331f60f771657b80de89d50abc0d431e3->leave($__internal_1e2b34abc8d23302f25528390572bda331f60f771657b80de89d50abc0d431e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
