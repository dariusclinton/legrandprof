<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_022a2585b966eaef75c6f421188b20a6197344c42123ebe1dda66b35553bf395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d8cbd607ad4b72122a78c303f62161a947a1d86bab8e7ffa06e54a748d1b994 = $this->env->getExtension("native_profiler");
        $__internal_0d8cbd607ad4b72122a78c303f62161a947a1d86bab8e7ffa06e54a748d1b994->enter($__internal_0d8cbd607ad4b72122a78c303f62161a947a1d86bab8e7ffa06e54a748d1b994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d8cbd607ad4b72122a78c303f62161a947a1d86bab8e7ffa06e54a748d1b994->leave($__internal_0d8cbd607ad4b72122a78c303f62161a947a1d86bab8e7ffa06e54a748d1b994_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_36ac35d781046bb522667cec2a909d10d719af29331b7d4d450752770fc9bb30 = $this->env->getExtension("native_profiler");
        $__internal_36ac35d781046bb522667cec2a909d10d719af29331b7d4d450752770fc9bb30->enter($__internal_36ac35d781046bb522667cec2a909d10d719af29331b7d4d450752770fc9bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_36ac35d781046bb522667cec2a909d10d719af29331b7d4d450752770fc9bb30->leave($__internal_36ac35d781046bb522667cec2a909d10d719af29331b7d4d450752770fc9bb30_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_60348fb954b7e311a1283efd7745fdf53bfdcf1665ceecec01f6f59ee9db2159 = $this->env->getExtension("native_profiler");
        $__internal_60348fb954b7e311a1283efd7745fdf53bfdcf1665ceecec01f6f59ee9db2159->enter($__internal_60348fb954b7e311a1283efd7745fdf53bfdcf1665ceecec01f6f59ee9db2159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_60348fb954b7e311a1283efd7745fdf53bfdcf1665ceecec01f6f59ee9db2159->leave($__internal_60348fb954b7e311a1283efd7745fdf53bfdcf1665ceecec01f6f59ee9db2159_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_577b8162a97043aa36d652a2e3abbd2b94ca0ecc9352ad424ca304ff689272fc = $this->env->getExtension("native_profiler");
        $__internal_577b8162a97043aa36d652a2e3abbd2b94ca0ecc9352ad424ca304ff689272fc->enter($__internal_577b8162a97043aa36d652a2e3abbd2b94ca0ecc9352ad424ca304ff689272fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_577b8162a97043aa36d652a2e3abbd2b94ca0ecc9352ad424ca304ff689272fc->leave($__internal_577b8162a97043aa36d652a2e3abbd2b94ca0ecc9352ad424ca304ff689272fc_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_1bed38f24f686a4a711390434b056a1ba4d61604c971e407b30a528be9255505 = $this->env->getExtension("native_profiler");
        $__internal_1bed38f24f686a4a711390434b056a1ba4d61604c971e407b30a528be9255505->enter($__internal_1bed38f24f686a4a711390434b056a1ba4d61604c971e407b30a528be9255505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_1bed38f24f686a4a711390434b056a1ba4d61604c971e407b30a528be9255505->leave($__internal_1bed38f24f686a4a711390434b056a1ba4d61604c971e407b30a528be9255505_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
";
    }
}
