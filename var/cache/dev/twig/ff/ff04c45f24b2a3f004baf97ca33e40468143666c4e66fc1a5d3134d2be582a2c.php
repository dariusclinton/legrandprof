<?php

/* LGPUserBundle:Paiement:add.html.twig */
class __TwigTemplate_94bd12566cebe1e29a77311e1a8b290fa94810dc690ce7d2623a584b44140c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Paiement:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2055ae10a946a2f7f520d7911a685bb807bc7b56ebd20d9f261f13e453dc10b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2055ae10a946a2f7f520d7911a685bb807bc7b56ebd20d9f261f13e453dc10b2->enter($__internal_2055ae10a946a2f7f520d7911a685bb807bc7b56ebd20d9f261f13e453dc10b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2055ae10a946a2f7f520d7911a685bb807bc7b56ebd20d9f261f13e453dc10b2->leave($__internal_2055ae10a946a2f7f520d7911a685bb807bc7b56ebd20d9f261f13e453dc10b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2340d0ceb3f70f9942cdc73c66d2e7aea8b865b0437bb4dd15e30f686c85ea37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2340d0ceb3f70f9942cdc73c66d2e7aea8b865b0437bb4dd15e30f686c85ea37->enter($__internal_2340d0ceb3f70f9942cdc73c66d2e7aea8b865b0437bb4dd15e30f686c85ea37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    paiement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2340d0ceb3f70f9942cdc73c66d2e7aea8b865b0437bb4dd15e30f686c85ea37->leave($__internal_2340d0ceb3f70f9942cdc73c66d2e7aea8b865b0437bb4dd15e30f686c85ea37_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f82699c20656649868040c032ae2616d11782edbdc4ab554bb8461b078e30da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82699c20656649868040c032ae2616d11782edbdc4ab554bb8461b078e30da5->enter($__internal_f82699c20656649868040c032ae2616d11782edbdc4ab554bb8461b078e30da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f82699c20656649868040c032ae2616d11782edbdc4ab554bb8461b078e30da5->leave($__internal_f82699c20656649868040c032ae2616d11782edbdc4ab554bb8461b078e30da5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_20b26dc56ec3f7f72e86ec09746bd718e926a259e60953aa2bae7066de27113e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b26dc56ec3f7f72e86ec09746bd718e926a259e60953aa2bae7066de27113e->enter($__internal_20b26dc56ec3f7f72e86ec09746bd718e926a259e60953aa2bae7066de27113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_20b26dc56ec3f7f72e86ec09746bd718e926a259e60953aa2bae7066de27113e->leave($__internal_20b26dc56ec3f7f72e86ec09746bd718e926a259e60953aa2bae7066de27113e_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Paiement:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    paiement - {{ parent() }}
{% endblock %}

{% block header_submenu %}
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">

                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}";
    }
}
