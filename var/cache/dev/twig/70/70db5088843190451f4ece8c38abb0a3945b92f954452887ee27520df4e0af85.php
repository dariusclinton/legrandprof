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
        $__internal_cd9a02e9eb6cc0db1ec2386c67d10e2fcf21b86072a0159d051af7228f63e307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9a02e9eb6cc0db1ec2386c67d10e2fcf21b86072a0159d051af7228f63e307->enter($__internal_cd9a02e9eb6cc0db1ec2386c67d10e2fcf21b86072a0159d051af7228f63e307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_cd9a02e9eb6cc0db1ec2386c67d10e2fcf21b86072a0159d051af7228f63e307->leave($__internal_cd9a02e9eb6cc0db1ec2386c67d10e2fcf21b86072a0159d051af7228f63e307_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_1260f3e6a169f0fccd099098fa93dfc1455f2fd643f5d2677da62a893792cca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1260f3e6a169f0fccd099098fa93dfc1455f2fd643f5d2677da62a893792cca6->enter($__internal_1260f3e6a169f0fccd099098fa93dfc1455f2fd643f5d2677da62a893792cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_1260f3e6a169f0fccd099098fa93dfc1455f2fd643f5d2677da62a893792cca6->leave($__internal_1260f3e6a169f0fccd099098fa93dfc1455f2fd643f5d2677da62a893792cca6_prof);

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
