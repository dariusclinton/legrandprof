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
        $__internal_e8c58d8256d52d42b1774f8760fc81fa4c322edec614d2b4bbf9fa4ac2dd4cfb = $this->env->getExtension("native_profiler");
        $__internal_e8c58d8256d52d42b1774f8760fc81fa4c322edec614d2b4bbf9fa4ac2dd4cfb->enter($__internal_e8c58d8256d52d42b1774f8760fc81fa4c322edec614d2b4bbf9fa4ac2dd4cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c58d8256d52d42b1774f8760fc81fa4c322edec614d2b4bbf9fa4ac2dd4cfb->leave($__internal_e8c58d8256d52d42b1774f8760fc81fa4c322edec614d2b4bbf9fa4ac2dd4cfb_prof);

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
