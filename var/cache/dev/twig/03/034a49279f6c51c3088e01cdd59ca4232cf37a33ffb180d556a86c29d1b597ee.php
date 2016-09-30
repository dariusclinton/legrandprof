<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_2938e6a4dd9e00790f232e650dd2840a3364a183cab24b6705414c90f51cf552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df5689e3a6863711f23dd01ef8dfd76a1be66f8fc4b3ebf381813d271f19ff8 = $this->env->getExtension("native_profiler");
        $__internal_8df5689e3a6863711f23dd01ef8dfd76a1be66f8fc4b3ebf381813d271f19ff8->enter($__internal_8df5689e3a6863711f23dd01ef8dfd76a1be66f8fc4b3ebf381813d271f19ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_8df5689e3a6863711f23dd01ef8dfd76a1be66f8fc4b3ebf381813d271f19ff8->leave($__internal_8df5689e3a6863711f23dd01ef8dfd76a1be66f8fc4b3ebf381813d271f19ff8_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_37c88c6d215c6d6c59fa2eb67b319421871c283e3a24613b9f6e2dfc1bfe5515 = $this->env->getExtension("native_profiler");
        $__internal_37c88c6d215c6d6c59fa2eb67b319421871c283e3a24613b9f6e2dfc1bfe5515->enter($__internal_37c88c6d215c6d6c59fa2eb67b319421871c283e3a24613b9f6e2dfc1bfe5515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_37c88c6d215c6d6c59fa2eb67b319421871c283e3a24613b9f6e2dfc1bfe5515->leave($__internal_37c88c6d215c6d6c59fa2eb67b319421871c283e3a24613b9f6e2dfc1bfe5515_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_ee689da7d6d84680b85197f8aea4da049c5049098a262b2b0d2870e20e41dd57 = $this->env->getExtension("native_profiler");
        $__internal_ee689da7d6d84680b85197f8aea4da049c5049098a262b2b0d2870e20e41dd57->enter($__internal_ee689da7d6d84680b85197f8aea4da049c5049098a262b2b0d2870e20e41dd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_ee689da7d6d84680b85197f8aea4da049c5049098a262b2b0d2870e20e41dd57->leave($__internal_ee689da7d6d84680b85197f8aea4da049c5049098a262b2b0d2870e20e41dd57_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_699bddb7f4c37c4d66b5d25cdb94834886ca09c986c6c96f9f7090e927ab2b16 = $this->env->getExtension("native_profiler");
        $__internal_699bddb7f4c37c4d66b5d25cdb94834886ca09c986c6c96f9f7090e927ab2b16->enter($__internal_699bddb7f4c37c4d66b5d25cdb94834886ca09c986c6c96f9f7090e927ab2b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_699bddb7f4c37c4d66b5d25cdb94834886ca09c986c6c96f9f7090e927ab2b16->leave($__internal_699bddb7f4c37c4d66b5d25cdb94834886ca09c986c6c96f9f7090e927ab2b16_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  81 => 22,  73 => 19,  70 => 18,  64 => 17,  51 => 13,  45 => 12,  38 => 22,  35 => 21,  33 => 17,  30 => 16,  28 => 12,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{ per_page }}
            </option>
        {% endfor %}
    </select>
{% endblock %}
";
    }
}
