<?php

/* LGPAdminBundle:ProfAdmin:list_cv.html.twig */
class __TwigTemplate_0a77714f7eda31d0df553c8fb20a11f6d00826fb7d9dfb4b9d60604b3bf99c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "LGPAdminBundle:ProfAdmin:list_cv.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec6792cc4a89bc9e23d7876ccfa31e55b875a0077a0b752ad651402cd3a9dbff = $this->env->getExtension("native_profiler");
        $__internal_ec6792cc4a89bc9e23d7876ccfa31e55b875a0077a0b752ad651402cd3a9dbff->enter($__internal_ec6792cc4a89bc9e23d7876ccfa31e55b875a0077a0b752ad651402cd3a9dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6792cc4a89bc9e23d7876ccfa31e55b875a0077a0b752ad651402cd3a9dbff->leave($__internal_ec6792cc4a89bc9e23d7876ccfa31e55b875a0077a0b752ad651402cd3a9dbff_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_6d5f4b63f0da93866e9592830d1a3b15e35a0685569e123a46216bb08fa05900 = $this->env->getExtension("native_profiler");
        $__internal_6d5f4b63f0da93866e9592830d1a3b15e35a0685569e123a46216bb08fa05900->enter($__internal_6d5f4b63f0da93866e9592830d1a3b15e35a0685569e123a46216bb08fa05900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "CVFile", array()))) {
            // line 5
            echo "        (<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "CVFile", array()), "webPath", array())), "html", null, true);
            echo "\" target=\"blank\">Voir le CV</a>)
    ";
        }
        
        $__internal_6d5f4b63f0da93866e9592830d1a3b15e35a0685569e123a46216bb08fa05900->leave($__internal_6d5f4b63f0da93866e9592830d1a3b15e35a0685569e123a46216bb08fa05900_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle:ProfAdmin:list_cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if object.CVFile is not null %}
        (<a href=\"{{ asset(object.CVFile.webPath) }}\" target=\"blank\">Voir le CV</a>)
    {% endif %}
{% endblock %}
";
    }
}
