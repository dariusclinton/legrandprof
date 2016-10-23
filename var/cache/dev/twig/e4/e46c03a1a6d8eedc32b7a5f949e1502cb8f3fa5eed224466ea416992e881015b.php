<?php

/* LGPUserBundle:Paiement:add.html.twig */
class __TwigTemplate_9fcc1373a1c9f13d207b87bed30e352ec371eeb449a9d4d97b1fa2aaaa3a5c45 extends Twig_Template
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
        $__internal_e969d97bbfc75e2ee843d753b42bf7bd648a95ffeb7c61fa481bbc47387db3fd = $this->env->getExtension("native_profiler");
        $__internal_e969d97bbfc75e2ee843d753b42bf7bd648a95ffeb7c61fa481bbc47387db3fd->enter($__internal_e969d97bbfc75e2ee843d753b42bf7bd648a95ffeb7c61fa481bbc47387db3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e969d97bbfc75e2ee843d753b42bf7bd648a95ffeb7c61fa481bbc47387db3fd->leave($__internal_e969d97bbfc75e2ee843d753b42bf7bd648a95ffeb7c61fa481bbc47387db3fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30255049fec63adade0dce09f69c8de83bc674ad8fa3233396818118aadbb5e6 = $this->env->getExtension("native_profiler");
        $__internal_30255049fec63adade0dce09f69c8de83bc674ad8fa3233396818118aadbb5e6->enter($__internal_30255049fec63adade0dce09f69c8de83bc674ad8fa3233396818118aadbb5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    paiement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_30255049fec63adade0dce09f69c8de83bc674ad8fa3233396818118aadbb5e6->leave($__internal_30255049fec63adade0dce09f69c8de83bc674ad8fa3233396818118aadbb5e6_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_69b01c3e5701a2e20d2c3318e6d262a1e7c08e98ca2427d0ace879e6b6e8771d = $this->env->getExtension("native_profiler");
        $__internal_69b01c3e5701a2e20d2c3318e6d262a1e7c08e98ca2427d0ace879e6b6e8771d->enter($__internal_69b01c3e5701a2e20d2c3318e6d262a1e7c08e98ca2427d0ace879e6b6e8771d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_69b01c3e5701a2e20d2c3318e6d262a1e7c08e98ca2427d0ace879e6b6e8771d->leave($__internal_69b01c3e5701a2e20d2c3318e6d262a1e7c08e98ca2427d0ace879e6b6e8771d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de04761cf895a85588316a02ec96de5306b4776bf497a497adb38c1508cb133a = $this->env->getExtension("native_profiler");
        $__internal_de04761cf895a85588316a02ec96de5306b4776bf497a497adb38c1508cb133a->enter($__internal_de04761cf895a85588316a02ec96de5306b4776bf497a497adb38c1508cb133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de04761cf895a85588316a02ec96de5306b4776bf497a497adb38c1508cb133a->leave($__internal_de04761cf895a85588316a02ec96de5306b4776bf497a497adb38c1508cb133a_prof);

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
