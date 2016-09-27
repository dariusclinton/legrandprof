<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_7a9d657d0110a38087a9f2c5d03141a69c29fe1a2f76788c986d448531a19f8a extends Twig_Template
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
        $__internal_5c66ed018d55f2cc96c97c68cd526ebcbf3d4a8614c129645edc05280dd245f2 = $this->env->getExtension("native_profiler");
        $__internal_5c66ed018d55f2cc96c97c68cd526ebcbf3d4a8614c129645edc05280dd245f2->enter($__internal_5c66ed018d55f2cc96c97c68cd526ebcbf3d4a8614c129645edc05280dd245f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_5c66ed018d55f2cc96c97c68cd526ebcbf3d4a8614c129645edc05280dd245f2->leave($__internal_5c66ed018d55f2cc96c97c68cd526ebcbf3d4a8614c129645edc05280dd245f2_prof);

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
