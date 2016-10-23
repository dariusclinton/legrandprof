<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_935bb69d4c3920eca93e1967010f81cea7f6ca902e035245c3dc26eb7978ca3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_537dba11c745980fc881ae6b633fdcabff1ed87b8980d11b14a9382eebbdf4ca = $this->env->getExtension("native_profiler");
        $__internal_537dba11c745980fc881ae6b633fdcabff1ed87b8980d11b14a9382eebbdf4ca->enter($__internal_537dba11c745980fc881ae6b633fdcabff1ed87b8980d11b14a9382eebbdf4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537dba11c745980fc881ae6b633fdcabff1ed87b8980d11b14a9382eebbdf4ca->leave($__internal_537dba11c745980fc881ae6b633fdcabff1ed87b8980d11b14a9382eebbdf4ca_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b8c13cebaa70923e34d23c405c0ed916cfad80011f97c6b43ec924c2a151ade3 = $this->env->getExtension("native_profiler");
        $__internal_b8c13cebaa70923e34d23c405c0ed916cfad80011f97c6b43ec924c2a151ade3->enter($__internal_b8c13cebaa70923e34d23c405c0ed916cfad80011f97c6b43ec924c2a151ade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_b8c13cebaa70923e34d23c405c0ed916cfad80011f97c6b43ec924c2a151ade3->leave($__internal_b8c13cebaa70923e34d23c405c0ed916cfad80011f97c6b43ec924c2a151ade3_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
";
    }
}
