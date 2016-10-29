<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_4dcff55aa00d11b672c3c78f0a2a0a98efcea7363a5c87e423ab41294440e163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9ea0b2c5247984e9f930b20af3690c355712af5db1bf2a9ea70b1241e443fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ea0b2c5247984e9f930b20af3690c355712af5db1bf2a9ea70b1241e443fcd->enter($__internal_a9ea0b2c5247984e9f930b20af3690c355712af5db1bf2a9ea70b1241e443fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ea0b2c5247984e9f930b20af3690c355712af5db1bf2a9ea70b1241e443fcd->leave($__internal_a9ea0b2c5247984e9f930b20af3690c355712af5db1bf2a9ea70b1241e443fcd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7623946626f8d32e1a01264399126f606e2132afb9a9ef5ec8f9c61c7f181b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7623946626f8d32e1a01264399126f606e2132afb9a9ef5ec8f9c61c7f181b98->enter($__internal_7623946626f8d32e1a01264399126f606e2132afb9a9ef5ec8f9c61c7f181b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_7623946626f8d32e1a01264399126f606e2132afb9a9ef5ec8f9c61c7f181b98->leave($__internal_7623946626f8d32e1a01264399126f606e2132afb9a9ef5ec8f9c61c7f181b98_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 13,  54 => 12,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
";
    }
}
