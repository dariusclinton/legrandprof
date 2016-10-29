<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig */
class __TwigTemplate_aa77e6acba55f4c6493ede72e2c0ea401f6e4124d5e9a1be59016d815ab43f92 extends Twig_Template
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
        $__internal_7850366718b25915f6133f5d330f0be71a8f5e8493de6ab6a3b884ca7c1db923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7850366718b25915f6133f5d330f0be71a8f5e8493de6ab6a3b884ca7c1db923->enter($__internal_7850366718b25915f6133f5d330f0be71a8f5e8493de6ab6a3b884ca7c1db923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_7850366718b25915f6133f5d330f0be71a8f5e8493de6ab6a3b884ca7c1db923->leave($__internal_7850366718b25915f6133f5d330f0be71a8f5e8493de6ab6a3b884ca7c1db923_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig";
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

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
    }
}
