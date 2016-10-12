<?php

/* LGPAdminBundle:ProfAdmin:list_image.html.twig */
class __TwigTemplate_f5e9b8ba91d9550c49923c0c2cbfa482b8673b0e4e17eb5c373da52c5354623e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "LGPAdminBundle:ProfAdmin:list_image.html.twig", 1);
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
        $__internal_085c6ee4a180785d8f218453f1128c7f591117e00ba6e2976632ad230dcd5b27 = $this->env->getExtension("native_profiler");
        $__internal_085c6ee4a180785d8f218453f1128c7f591117e00ba6e2976632ad230dcd5b27->enter($__internal_085c6ee4a180785d8f218453f1128c7f591117e00ba6e2976632ad230dcd5b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085c6ee4a180785d8f218453f1128c7f591117e00ba6e2976632ad230dcd5b27->leave($__internal_085c6ee4a180785d8f218453f1128c7f591117e00ba6e2976632ad230dcd5b27_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_16c49fd96c9bfdfd1c9eb391043a01c899bd414e7f77511616e49f68c85ee1b5 = $this->env->getExtension("native_profiler");
        $__internal_16c49fd96c9bfdfd1c9eb391043a01c899bd414e7f77511616e49f68c85ee1b5->enter($__internal_16c49fd96c9bfdfd1c9eb391043a01c899bd414e7f77511616e49f68c85ee1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()))) {
            // line 5
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()), "imageName", array()), "html", null, true);
            echo "\"
             class=\"img-circle img-responsive\">
    ";
        }
        
        $__internal_16c49fd96c9bfdfd1c9eb391043a01c899bd414e7f77511616e49f68c85ee1b5->leave($__internal_16c49fd96c9bfdfd1c9eb391043a01c899bd414e7f77511616e49f68c85ee1b5_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle:ProfAdmin:list_image.html.twig";
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
    {% if object.image is not null %}
        <img src=\"{{ asset(object.image.webPath) }}\" alt=\"{{ object.image.imageName }}\"
             class=\"img-circle img-responsive\">
    {% endif %}
{% endblock %}
";
    }
}
