<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_11534c0f4c9a474060177c0b04f697b3374f7a96fe1253c63fbde9bd5e342980 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd83cd794393c40f0d26e3460b8b3e6ffd87f4760bc8115ab3b49ebef99b795e = $this->env->getExtension("native_profiler");
        $__internal_bd83cd794393c40f0d26e3460b8b3e6ffd87f4760bc8115ab3b49ebef99b795e->enter($__internal_bd83cd794393c40f0d26e3460b8b3e6ffd87f4760bc8115ab3b49ebef99b795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd83cd794393c40f0d26e3460b8b3e6ffd87f4760bc8115ab3b49ebef99b795e->leave($__internal_bd83cd794393c40f0d26e3460b8b3e6ffd87f4760bc8115ab3b49ebef99b795e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ca260f6752f22ef01e1bf1fb4ea5c448f10571f1f9ed488b6885276a208ab2cb = $this->env->getExtension("native_profiler");
        $__internal_ca260f6752f22ef01e1bf1fb4ea5c448f10571f1f9ed488b6885276a208ab2cb->enter($__internal_ca260f6752f22ef01e1bf1fb4ea5c448f10571f1f9ed488b6885276a208ab2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ca260f6752f22ef01e1bf1fb4ea5c448f10571f1f9ed488b6885276a208ab2cb->leave($__internal_ca260f6752f22ef01e1bf1fb4ea5c448f10571f1f9ed488b6885276a208ab2cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
