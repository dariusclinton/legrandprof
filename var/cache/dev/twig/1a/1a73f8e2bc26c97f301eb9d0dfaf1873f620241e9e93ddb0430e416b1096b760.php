<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_bf6c718cdb87ed4ae15aa62552751a3662ae13d6806af3bc42c84168d03b8e6a extends Twig_Template
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
        $__internal_fad1b9ef65fe7eead8f102a97046e77d6b6a0013d430ee4595693fe004c0dc84 = $this->env->getExtension("native_profiler");
        $__internal_fad1b9ef65fe7eead8f102a97046e77d6b6a0013d430ee4595693fe004c0dc84->enter($__internal_fad1b9ef65fe7eead8f102a97046e77d6b6a0013d430ee4595693fe004c0dc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_fad1b9ef65fe7eead8f102a97046e77d6b6a0013d430ee4595693fe004c0dc84->leave($__internal_fad1b9ef65fe7eead8f102a97046e77d6b6a0013d430ee4595693fe004c0dc84_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasroute('list') and admin.isGranted('LIST')%}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-list\"></i>
        {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
";
    }
}
