<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_da74a4ab54f2a2a3def62634845cae9e3023d0fb015a41fa1ea58ff4987b631c extends Twig_Template
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
        $__internal_21d575491d1dc6e329c6f33c4bbdcd028d30e5a18eeae6faf739ea6f7b33507c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d575491d1dc6e329c6f33c4bbdcd028d30e5a18eeae6faf739ea6f7b33507c->enter($__internal_21d575491d1dc6e329c6f33c4bbdcd028d30e5a18eeae6faf739ea6f7b33507c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d575491d1dc6e329c6f33c4bbdcd028d30e5a18eeae6faf739ea6f7b33507c->leave($__internal_21d575491d1dc6e329c6f33c4bbdcd028d30e5a18eeae6faf739ea6f7b33507c_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_8e61a5588402b6db958c9ea3ced9a052778b93808192f27c4babe2917e818bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e61a5588402b6db958c9ea3ced9a052778b93808192f27c4babe2917e818bef->enter($__internal_8e61a5588402b6db958c9ea3ced9a052778b93808192f27c4babe2917e818bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_8e61a5588402b6db958c9ea3ced9a052778b93808192f27c4babe2917e818bef->leave($__internal_8e61a5588402b6db958c9ea3ced9a052778b93808192f27c4babe2917e818bef_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_d6a243baa41e42173b30be34522c6ebd65c197d5b7394c2a78c571fc7cbb7d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a243baa41e42173b30be34522c6ebd65c197d5b7394c2a78c571fc7cbb7d1d->enter($__internal_d6a243baa41e42173b30be34522c6ebd65c197d5b7394c2a78c571fc7cbb7d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_d6a243baa41e42173b30be34522c6ebd65c197d5b7394c2a78c571fc7cbb7d1d->leave($__internal_d6a243baa41e42173b30be34522c6ebd65c197d5b7394c2a78c571fc7cbb7d1d_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_17097d7ce191dba3a3313fa12be185c52c95f31c917ec524f8b661206124da92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17097d7ce191dba3a3313fa12be185c52c95f31c917ec524f8b661206124da92->enter($__internal_17097d7ce191dba3a3313fa12be185c52c95f31c917ec524f8b661206124da92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_17097d7ce191dba3a3313fa12be185c52c95f31c917ec524f8b661206124da92->leave($__internal_17097d7ce191dba3a3313fa12be185c52c95f31c917ec524f8b661206124da92_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_f4e1dba95b712bbd6e1738190166fdc5fe54c3a92193b3490e9d2cdc2c264303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e1dba95b712bbd6e1738190166fdc5fe54c3a92193b3490e9d2cdc2c264303->enter($__internal_f4e1dba95b712bbd6e1738190166fdc5fe54c3a92193b3490e9d2cdc2c264303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_f4e1dba95b712bbd6e1738190166fdc5fe54c3a92193b3490e9d2cdc2c264303->leave($__internal_f4e1dba95b712bbd6e1738190166fdc5fe54c3a92193b3490e9d2cdc2c264303_prof);

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
