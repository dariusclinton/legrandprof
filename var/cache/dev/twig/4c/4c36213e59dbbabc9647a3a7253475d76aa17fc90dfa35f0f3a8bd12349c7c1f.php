<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_525ad3508dffedce1bce12c903dadeacce4d16c41e290b6ac437d6b9b2efc144 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ed7ef6b0d1349be7f921186b4b269108600f941279e58ccfef7836813c23c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed7ef6b0d1349be7f921186b4b269108600f941279e58ccfef7836813c23c34->enter($__internal_2ed7ef6b0d1349be7f921186b4b269108600f941279e58ccfef7836813c23c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed7ef6b0d1349be7f921186b4b269108600f941279e58ccfef7836813c23c34->leave($__internal_2ed7ef6b0d1349be7f921186b4b269108600f941279e58ccfef7836813c23c34_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d5543e8ae8fc051ff3590c126dec461f81a5430d175eefb49a5089fc4805ecbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5543e8ae8fc051ff3590c126dec461f81a5430d175eefb49a5089fc4805ecbb->enter($__internal_d5543e8ae8fc051ff3590c126dec461f81a5430d175eefb49a5089fc4805ecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_d5543e8ae8fc051ff3590c126dec461f81a5430d175eefb49a5089fc4805ecbb->leave($__internal_d5543e8ae8fc051ff3590c126dec461f81a5430d175eefb49a5089fc4805ecbb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-default\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
        <i class=\"fa fa-arrow-right\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
";
    }
}
