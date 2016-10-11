<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_82ffeaaaadcd8d85715b4368d414ad663b93cc8f0750b45310f7f22db7c174a2 extends Twig_Template
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
        $__internal_aabfad6bc0f97841f2be3933bfaed680e378275f33776d730423b623de512d66 = $this->env->getExtension("native_profiler");
        $__internal_aabfad6bc0f97841f2be3933bfaed680e378275f33776d730423b623de512d66->enter($__internal_aabfad6bc0f97841f2be3933bfaed680e378275f33776d730423b623de512d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aabfad6bc0f97841f2be3933bfaed680e378275f33776d730423b623de512d66->leave($__internal_aabfad6bc0f97841f2be3933bfaed680e378275f33776d730423b623de512d66_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f09eab4d02c418c7f3e7521334fbd6ffe0785443905684c07c5b21700a382170 = $this->env->getExtension("native_profiler");
        $__internal_f09eab4d02c418c7f3e7521334fbd6ffe0785443905684c07c5b21700a382170->enter($__internal_f09eab4d02c418c7f3e7521334fbd6ffe0785443905684c07c5b21700a382170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_f09eab4d02c418c7f3e7521334fbd6ffe0785443905684c07c5b21700a382170->leave($__internal_f09eab4d02c418c7f3e7521334fbd6ffe0785443905684c07c5b21700a382170_prof);

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
