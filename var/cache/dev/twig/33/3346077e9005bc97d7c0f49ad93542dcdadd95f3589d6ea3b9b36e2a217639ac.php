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
        $__internal_d9f460137e99826d3e968a254da419df7918f21e29acd0fce019d53d0cc1f2bc = $this->env->getExtension("native_profiler");
        $__internal_d9f460137e99826d3e968a254da419df7918f21e29acd0fce019d53d0cc1f2bc->enter($__internal_d9f460137e99826d3e968a254da419df7918f21e29acd0fce019d53d0cc1f2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f460137e99826d3e968a254da419df7918f21e29acd0fce019d53d0cc1f2bc->leave($__internal_d9f460137e99826d3e968a254da419df7918f21e29acd0fce019d53d0cc1f2bc_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_d93d67c56dde932f7d2f6327ca32d1cd7c31418b814acf29d07e5020bdb53d07 = $this->env->getExtension("native_profiler");
        $__internal_d93d67c56dde932f7d2f6327ca32d1cd7c31418b814acf29d07e5020bdb53d07->enter($__internal_d93d67c56dde932f7d2f6327ca32d1cd7c31418b814acf29d07e5020bdb53d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_d93d67c56dde932f7d2f6327ca32d1cd7c31418b814acf29d07e5020bdb53d07->leave($__internal_d93d67c56dde932f7d2f6327ca32d1cd7c31418b814acf29d07e5020bdb53d07_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_b2026c248299aef116131cc6e79c6c8d7b30a229a057334db0709f6d4e68c3f5 = $this->env->getExtension("native_profiler");
        $__internal_b2026c248299aef116131cc6e79c6c8d7b30a229a057334db0709f6d4e68c3f5->enter($__internal_b2026c248299aef116131cc6e79c6c8d7b30a229a057334db0709f6d4e68c3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_b2026c248299aef116131cc6e79c6c8d7b30a229a057334db0709f6d4e68c3f5->leave($__internal_b2026c248299aef116131cc6e79c6c8d7b30a229a057334db0709f6d4e68c3f5_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_6b7768cb70ca107be0859ad516124836d6634a8f1948439f823df941f67ad7b1 = $this->env->getExtension("native_profiler");
        $__internal_6b7768cb70ca107be0859ad516124836d6634a8f1948439f823df941f67ad7b1->enter($__internal_6b7768cb70ca107be0859ad516124836d6634a8f1948439f823df941f67ad7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_6b7768cb70ca107be0859ad516124836d6634a8f1948439f823df941f67ad7b1->leave($__internal_6b7768cb70ca107be0859ad516124836d6634a8f1948439f823df941f67ad7b1_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_18a4249f8877c1b3cb7b56419558f6d513ebbc3c91f6a3d5893174d4677993ed = $this->env->getExtension("native_profiler");
        $__internal_18a4249f8877c1b3cb7b56419558f6d513ebbc3c91f6a3d5893174d4677993ed->enter($__internal_18a4249f8877c1b3cb7b56419558f6d513ebbc3c91f6a3d5893174d4677993ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_18a4249f8877c1b3cb7b56419558f6d513ebbc3c91f6a3d5893174d4677993ed->leave($__internal_18a4249f8877c1b3cb7b56419558f6d513ebbc3c91f6a3d5893174d4677993ed_prof);

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
