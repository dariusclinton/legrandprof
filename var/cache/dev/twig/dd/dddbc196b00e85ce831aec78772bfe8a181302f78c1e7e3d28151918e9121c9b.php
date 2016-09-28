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
        $__internal_4ff64c992b153e9f3dafb1372d13973c41e4e0a8d94b42d02140da497c9f7f64 = $this->env->getExtension("native_profiler");
        $__internal_4ff64c992b153e9f3dafb1372d13973c41e4e0a8d94b42d02140da497c9f7f64->enter($__internal_4ff64c992b153e9f3dafb1372d13973c41e4e0a8d94b42d02140da497c9f7f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_4ff64c992b153e9f3dafb1372d13973c41e4e0a8d94b42d02140da497c9f7f64->leave($__internal_4ff64c992b153e9f3dafb1372d13973c41e4e0a8d94b42d02140da497c9f7f64_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d75b4abfb9878fa8afe716366748ecd7c5a73e8037c78e1c9268145d120ea58f = $this->env->getExtension("native_profiler");
        $__internal_d75b4abfb9878fa8afe716366748ecd7c5a73e8037c78e1c9268145d120ea58f->enter($__internal_d75b4abfb9878fa8afe716366748ecd7c5a73e8037c78e1c9268145d120ea58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d75b4abfb9878fa8afe716366748ecd7c5a73e8037c78e1c9268145d120ea58f->leave($__internal_d75b4abfb9878fa8afe716366748ecd7c5a73e8037c78e1c9268145d120ea58f_prof);

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
