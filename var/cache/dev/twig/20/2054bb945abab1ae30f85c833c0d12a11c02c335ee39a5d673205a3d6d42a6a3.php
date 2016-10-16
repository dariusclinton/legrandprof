<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_2829e87e3c92df3a2ebac54a4e05535f6aaf6afa64f799eeb7c82278961848cd extends Twig_Template
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
        $__internal_1c5e8ed75a0399be3a2762aa63dde406492312f688a6f7f07005a93e162c6db6 = $this->env->getExtension("native_profiler");
        $__internal_1c5e8ed75a0399be3a2762aa63dde406492312f688a6f7f07005a93e162c6db6->enter($__internal_1c5e8ed75a0399be3a2762aa63dde406492312f688a6f7f07005a93e162c6db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5e8ed75a0399be3a2762aa63dde406492312f688a6f7f07005a93e162c6db6->leave($__internal_1c5e8ed75a0399be3a2762aa63dde406492312f688a6f7f07005a93e162c6db6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9672e97337a1ba3235072721ed8509021c5f4c4e4e7d00fff6379f838b284744 = $this->env->getExtension("native_profiler");
        $__internal_9672e97337a1ba3235072721ed8509021c5f4c4e4e7d00fff6379f838b284744->enter($__internal_9672e97337a1ba3235072721ed8509021c5f4c4e4e7d00fff6379f838b284744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_9672e97337a1ba3235072721ed8509021c5f4c4e4e7d00fff6379f838b284744->leave($__internal_9672e97337a1ba3235072721ed8509021c5f4c4e4e7d00fff6379f838b284744_prof);

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
