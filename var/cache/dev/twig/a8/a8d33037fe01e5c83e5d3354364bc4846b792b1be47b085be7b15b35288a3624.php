<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_3d99b59420ce8de42077b7658d6268bf1225e159036c610a104c2da06027eb26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d327b570976494c6fe15f958389893e02c1bcd7af49138d23d156afe599906b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d327b570976494c6fe15f958389893e02c1bcd7af49138d23d156afe599906b->enter($__internal_4d327b570976494c6fe15f958389893e02c1bcd7af49138d23d156afe599906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d327b570976494c6fe15f958389893e02c1bcd7af49138d23d156afe599906b->leave($__internal_4d327b570976494c6fe15f958389893e02c1bcd7af49138d23d156afe599906b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_047664d849abfd49108c7b970b25a41c93b8ff54826ba3a52deccbb43acd7b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047664d849abfd49108c7b970b25a41c93b8ff54826ba3a52deccbb43acd7b37->enter($__internal_047664d849abfd49108c7b970b25a41c93b8ff54826ba3a52deccbb43acd7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_047664d849abfd49108c7b970b25a41c93b8ff54826ba3a52deccbb43acd7b37->leave($__internal_047664d849abfd49108c7b970b25a41c93b8ff54826ba3a52deccbb43acd7b37_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% for key, val in value %}
        [{{ key }} => {{ val }}]
    {% endfor %}
{% endblock %}
";
    }
}
