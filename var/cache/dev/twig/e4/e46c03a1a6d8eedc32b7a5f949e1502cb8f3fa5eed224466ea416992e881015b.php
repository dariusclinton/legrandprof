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
        $__internal_a2b5654ae24d8fe48cf25b0bd9998d35ac5636e8a5f3468031b643c14cfc7622 = $this->env->getExtension("native_profiler");
        $__internal_a2b5654ae24d8fe48cf25b0bd9998d35ac5636e8a5f3468031b643c14cfc7622->enter($__internal_a2b5654ae24d8fe48cf25b0bd9998d35ac5636e8a5f3468031b643c14cfc7622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b5654ae24d8fe48cf25b0bd9998d35ac5636e8a5f3468031b643c14cfc7622->leave($__internal_a2b5654ae24d8fe48cf25b0bd9998d35ac5636e8a5f3468031b643c14cfc7622_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4f0eacfd4a325ed1134c2bcdd623aab710df3e6011b58d2a60daaccde4dbb5d = $this->env->getExtension("native_profiler");
        $__internal_f4f0eacfd4a325ed1134c2bcdd623aab710df3e6011b58d2a60daaccde4dbb5d->enter($__internal_f4f0eacfd4a325ed1134c2bcdd623aab710df3e6011b58d2a60daaccde4dbb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    paiement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4f0eacfd4a325ed1134c2bcdd623aab710df3e6011b58d2a60daaccde4dbb5d->leave($__internal_f4f0eacfd4a325ed1134c2bcdd623aab710df3e6011b58d2a60daaccde4dbb5d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_7bfdb91b50bd4fa07c68f60b732404e4299eb3b2bfac2b9ad2b1b9972017930f = $this->env->getExtension("native_profiler");
        $__internal_7bfdb91b50bd4fa07c68f60b732404e4299eb3b2bfac2b9ad2b1b9972017930f->enter($__internal_7bfdb91b50bd4fa07c68f60b732404e4299eb3b2bfac2b9ad2b1b9972017930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_7bfdb91b50bd4fa07c68f60b732404e4299eb3b2bfac2b9ad2b1b9972017930f->leave($__internal_7bfdb91b50bd4fa07c68f60b732404e4299eb3b2bfac2b9ad2b1b9972017930f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a046a5c707ea6d33990a06f7499da33020e53560e16fdc773c971abfc011f73 = $this->env->getExtension("native_profiler");
        $__internal_0a046a5c707ea6d33990a06f7499da33020e53560e16fdc773c971abfc011f73->enter($__internal_0a046a5c707ea6d33990a06f7499da33020e53560e16fdc773c971abfc011f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a046a5c707ea6d33990a06f7499da33020e53560e16fdc773c971abfc011f73->leave($__internal_0a046a5c707ea6d33990a06f7499da33020e53560e16fdc773c971abfc011f73_prof);

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
