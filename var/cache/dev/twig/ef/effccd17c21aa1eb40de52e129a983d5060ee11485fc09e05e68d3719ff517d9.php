<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5441e90512f532f86db5e8fc8060cbd425c25947b6fc5a1599933c1217c75af = $this->env->getExtension("native_profiler");
        $__internal_c5441e90512f532f86db5e8fc8060cbd425c25947b6fc5a1599933c1217c75af->enter($__internal_c5441e90512f532f86db5e8fc8060cbd425c25947b6fc5a1599933c1217c75af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5441e90512f532f86db5e8fc8060cbd425c25947b6fc5a1599933c1217c75af->leave($__internal_c5441e90512f532f86db5e8fc8060cbd425c25947b6fc5a1599933c1217c75af_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_37bb2c081bcc88cbea28b0d4cc997f631f88fd60f1deadc2e05990d080f7d636 = $this->env->getExtension("native_profiler");
        $__internal_37bb2c081bcc88cbea28b0d4cc997f631f88fd60f1deadc2e05990d080f7d636->enter($__internal_37bb2c081bcc88cbea28b0d4cc997f631f88fd60f1deadc2e05990d080f7d636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_37bb2c081bcc88cbea28b0d4cc997f631f88fd60f1deadc2e05990d080f7d636->leave($__internal_37bb2c081bcc88cbea28b0d4cc997f631f88fd60f1deadc2e05990d080f7d636_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
