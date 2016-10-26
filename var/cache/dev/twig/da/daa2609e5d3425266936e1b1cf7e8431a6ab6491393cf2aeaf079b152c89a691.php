<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_bf6ffda31054347226addfdbd9bdd21d586ed4876e67715c3ec4aa07199dbeb9 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f03278806290b44ef0ca827faa8dd1366d4f537c5dd1d92a67deea3f12dbdc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03278806290b44ef0ca827faa8dd1366d4f537c5dd1d92a67deea3f12dbdc6e->enter($__internal_f03278806290b44ef0ca827faa8dd1366d4f537c5dd1d92a67deea3f12dbdc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03278806290b44ef0ca827faa8dd1366d4f537c5dd1d92a67deea3f12dbdc6e->leave($__internal_f03278806290b44ef0ca827faa8dd1366d4f537c5dd1d92a67deea3f12dbdc6e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}
";
    }
}
