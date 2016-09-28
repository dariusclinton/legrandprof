<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_eb946d005ddc098faefdc66768f4908f1f8cc02d55e99862a368e3d76290289c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a962f8f2d19b4abbdd4dc33edad0b870c3c43a9f2c0c2fbd120690d13dd26a7e = $this->env->getExtension("native_profiler");
        $__internal_a962f8f2d19b4abbdd4dc33edad0b870c3c43a9f2c0c2fbd120690d13dd26a7e->enter($__internal_a962f8f2d19b4abbdd4dc33edad0b870c3c43a9f2c0c2fbd120690d13dd26a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a962f8f2d19b4abbdd4dc33edad0b870c3c43a9f2c0c2fbd120690d13dd26a7e->leave($__internal_a962f8f2d19b4abbdd4dc33edad0b870c3c43a9f2c0c2fbd120690d13dd26a7e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}
";
    }
}
