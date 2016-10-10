<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_aafef0b68f6f6e4fa5752c43768233781f60f8b4e8948f2993619b892c962eb1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed630654d8ed0a91835b88b3baf6608961944148ddbfbe565523a7efbbc7b29 = $this->env->getExtension("native_profiler");
        $__internal_bed630654d8ed0a91835b88b3baf6608961944148ddbfbe565523a7efbbc7b29->enter($__internal_bed630654d8ed0a91835b88b3baf6608961944148ddbfbe565523a7efbbc7b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bed630654d8ed0a91835b88b3baf6608961944148ddbfbe565523a7efbbc7b29->leave($__internal_bed630654d8ed0a91835b88b3baf6608961944148ddbfbe565523a7efbbc7b29_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_118f901c77b80c08ea8956bf80392e2515ef69143be7387f865e270b15934062 = $this->env->getExtension("native_profiler");
        $__internal_118f901c77b80c08ea8956bf80392e2515ef69143be7387f865e270b15934062->enter($__internal_118f901c77b80c08ea8956bf80392e2515ef69143be7387f865e270b15934062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_118f901c77b80c08ea8956bf80392e2515ef69143be7387f865e270b15934062->leave($__internal_118f901c77b80c08ea8956bf80392e2515ef69143be7387f865e270b15934062_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
