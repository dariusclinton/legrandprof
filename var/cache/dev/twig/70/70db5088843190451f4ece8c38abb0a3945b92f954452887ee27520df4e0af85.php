<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4ba8f586b97ed534947d6a21634e816a38413ea781561e2ebc41e2c0f07564b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea7cde2071bbb16fa116782fb50d31d0c6b53ef406e8f9e723f614d3bddbb883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7cde2071bbb16fa116782fb50d31d0c6b53ef406e8f9e723f614d3bddbb883->enter($__internal_ea7cde2071bbb16fa116782fb50d31d0c6b53ef406e8f9e723f614d3bddbb883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_ea7cde2071bbb16fa116782fb50d31d0c6b53ef406e8f9e723f614d3bddbb883->leave($__internal_ea7cde2071bbb16fa116782fb50d31d0c6b53ef406e8f9e723f614d3bddbb883_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_94e525ce034547b4b4d19a3d646f1a0fe38f03c1d085ae4df3ba63cfe6a8dd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e525ce034547b4b4d19a3d646f1a0fe38f03c1d085ae4df3ba63cfe6a8dd69->enter($__internal_94e525ce034547b4b4d19a3d646f1a0fe38f03c1d085ae4df3ba63cfe6a8dd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_94e525ce034547b4b4d19a3d646f1a0fe38f03c1d085ae4df3ba63cfe6a8dd69->leave($__internal_94e525ce034547b4b4d19a3d646f1a0fe38f03c1d085ae4df3ba63cfe6a8dd69_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}
