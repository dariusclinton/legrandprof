<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_2d5196af80601ab95f5816a6f320f130b1beefb7b0fb017339ef90f0728d38eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e14632540ae5d1bf57458214953eab1146549a7e24fb0d7a3e6997a3cde4036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e14632540ae5d1bf57458214953eab1146549a7e24fb0d7a3e6997a3cde4036->enter($__internal_2e14632540ae5d1bf57458214953eab1146549a7e24fb0d7a3e6997a3cde4036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_2e14632540ae5d1bf57458214953eab1146549a7e24fb0d7a3e6997a3cde4036->leave($__internal_2e14632540ae5d1bf57458214953eab1146549a7e24fb0d7a3e6997a3cde4036_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
";
    }
}
