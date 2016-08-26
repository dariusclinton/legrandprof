<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b37896230c290d66babb08fc5fb81b9f62670b05702b52040752c36994e55f44 = $this->env->getExtension("native_profiler");
        $__internal_b37896230c290d66babb08fc5fb81b9f62670b05702b52040752c36994e55f44->enter($__internal_b37896230c290d66babb08fc5fb81b9f62670b05702b52040752c36994e55f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37896230c290d66babb08fc5fb81b9f62670b05702b52040752c36994e55f44->leave($__internal_b37896230c290d66babb08fc5fb81b9f62670b05702b52040752c36994e55f44_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_33f384fa50181871bc4bd1cf642a9459c9441dc136f32906e635fc42fb4289db = $this->env->getExtension("native_profiler");
        $__internal_33f384fa50181871bc4bd1cf642a9459c9441dc136f32906e635fc42fb4289db->enter($__internal_33f384fa50181871bc4bd1cf642a9459c9441dc136f32906e635fc42fb4289db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_33f384fa50181871bc4bd1cf642a9459c9441dc136f32906e635fc42fb4289db->leave($__internal_33f384fa50181871bc4bd1cf642a9459c9441dc136f32906e635fc42fb4289db_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
