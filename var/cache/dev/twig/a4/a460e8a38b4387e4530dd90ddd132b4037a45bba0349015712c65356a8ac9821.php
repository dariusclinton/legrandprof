<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_65f27ecce06d3ec1a6e0f823c4d758bce8875a4a51a75c5e1e01d6d39114a1a6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcc91eb4bffee4059bef9294daf3d9b58f3c952309cf29ca98795da464b260cf = $this->env->getExtension("native_profiler");
        $__internal_fcc91eb4bffee4059bef9294daf3d9b58f3c952309cf29ca98795da464b260cf->enter($__internal_fcc91eb4bffee4059bef9294daf3d9b58f3c952309cf29ca98795da464b260cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc91eb4bffee4059bef9294daf3d9b58f3c952309cf29ca98795da464b260cf->leave($__internal_fcc91eb4bffee4059bef9294daf3d9b58f3c952309cf29ca98795da464b260cf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5881a8ccecf5b838e66dc7a431fb388571fa1118242a1081c096099fbdaf005b = $this->env->getExtension("native_profiler");
        $__internal_5881a8ccecf5b838e66dc7a431fb388571fa1118242a1081c096099fbdaf005b->enter($__internal_5881a8ccecf5b838e66dc7a431fb388571fa1118242a1081c096099fbdaf005b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_5881a8ccecf5b838e66dc7a431fb388571fa1118242a1081c096099fbdaf005b->leave($__internal_5881a8ccecf5b838e66dc7a431fb388571fa1118242a1081c096099fbdaf005b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
