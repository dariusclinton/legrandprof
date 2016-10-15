<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_f74da5f2d0b4f5a4311efa9810c6f21f8559d63d629bf5e9d3e1176874dba2a2 extends Twig_Template
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
        $__internal_c6007e2bbf3ea327d04ceba0b8341c17a3b95211fa5cd89096b42efcbdc4e5ce = $this->env->getExtension("native_profiler");
        $__internal_c6007e2bbf3ea327d04ceba0b8341c17a3b95211fa5cd89096b42efcbdc4e5ce->enter($__internal_c6007e2bbf3ea327d04ceba0b8341c17a3b95211fa5cd89096b42efcbdc4e5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_c6007e2bbf3ea327d04ceba0b8341c17a3b95211fa5cd89096b42efcbdc4e5ce->leave($__internal_c6007e2bbf3ea327d04ceba0b8341c17a3b95211fa5cd89096b42efcbdc4e5ce_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_26e72b0a6dd06cbd1d4fdb07d3f868a39800c63d217b15f9ddc186d264887c86 = $this->env->getExtension("native_profiler");
        $__internal_26e72b0a6dd06cbd1d4fdb07d3f868a39800c63d217b15f9ddc186d264887c86->enter($__internal_26e72b0a6dd06cbd1d4fdb07d3f868a39800c63d217b15f9ddc186d264887c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_26e72b0a6dd06cbd1d4fdb07d3f868a39800c63d217b15f9ddc186d264887c86->leave($__internal_26e72b0a6dd06cbd1d4fdb07d3f868a39800c63d217b15f9ddc186d264887c86_prof);

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
