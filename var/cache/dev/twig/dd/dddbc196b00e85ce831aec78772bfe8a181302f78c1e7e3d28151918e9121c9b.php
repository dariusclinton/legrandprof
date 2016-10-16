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
        $__internal_c5baec2c7189a30b824528f841dd2dffea811acd1647eb29f265e2a95a2de9ed = $this->env->getExtension("native_profiler");
        $__internal_c5baec2c7189a30b824528f841dd2dffea811acd1647eb29f265e2a95a2de9ed->enter($__internal_c5baec2c7189a30b824528f841dd2dffea811acd1647eb29f265e2a95a2de9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_c5baec2c7189a30b824528f841dd2dffea811acd1647eb29f265e2a95a2de9ed->leave($__internal_c5baec2c7189a30b824528f841dd2dffea811acd1647eb29f265e2a95a2de9ed_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_352eaa86e8ec316be1c4cc1ca40b13290e78e1d014b5fe93f7982cb05556bbfe = $this->env->getExtension("native_profiler");
        $__internal_352eaa86e8ec316be1c4cc1ca40b13290e78e1d014b5fe93f7982cb05556bbfe->enter($__internal_352eaa86e8ec316be1c4cc1ca40b13290e78e1d014b5fe93f7982cb05556bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_352eaa86e8ec316be1c4cc1ca40b13290e78e1d014b5fe93f7982cb05556bbfe->leave($__internal_352eaa86e8ec316be1c4cc1ca40b13290e78e1d014b5fe93f7982cb05556bbfe_prof);

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
