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
        $__internal_6f5daf045f4753343d4e44fac860a448b5eaab98181186190471cdd5ced4706a = $this->env->getExtension("native_profiler");
        $__internal_6f5daf045f4753343d4e44fac860a448b5eaab98181186190471cdd5ced4706a->enter($__internal_6f5daf045f4753343d4e44fac860a448b5eaab98181186190471cdd5ced4706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5daf045f4753343d4e44fac860a448b5eaab98181186190471cdd5ced4706a->leave($__internal_6f5daf045f4753343d4e44fac860a448b5eaab98181186190471cdd5ced4706a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b91f38e9e6e5cf6f22db47f289ccaa7483164fa0a3bde3b31ce22ee9be23410 = $this->env->getExtension("native_profiler");
        $__internal_8b91f38e9e6e5cf6f22db47f289ccaa7483164fa0a3bde3b31ce22ee9be23410->enter($__internal_8b91f38e9e6e5cf6f22db47f289ccaa7483164fa0a3bde3b31ce22ee9be23410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_8b91f38e9e6e5cf6f22db47f289ccaa7483164fa0a3bde3b31ce22ee9be23410->leave($__internal_8b91f38e9e6e5cf6f22db47f289ccaa7483164fa0a3bde3b31ce22ee9be23410_prof);

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
