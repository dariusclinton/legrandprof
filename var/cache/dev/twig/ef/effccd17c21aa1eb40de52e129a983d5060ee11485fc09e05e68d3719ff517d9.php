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
        $__internal_73fd338281b972a867fad7c58a1a1b528d64822f479da7485ede15333065a731 = $this->env->getExtension("native_profiler");
        $__internal_73fd338281b972a867fad7c58a1a1b528d64822f479da7485ede15333065a731->enter($__internal_73fd338281b972a867fad7c58a1a1b528d64822f479da7485ede15333065a731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fd338281b972a867fad7c58a1a1b528d64822f479da7485ede15333065a731->leave($__internal_73fd338281b972a867fad7c58a1a1b528d64822f479da7485ede15333065a731_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8af38889b9c4111a88776c680b102a1ce7322e262b12942a4db24c19f5afee69 = $this->env->getExtension("native_profiler");
        $__internal_8af38889b9c4111a88776c680b102a1ce7322e262b12942a4db24c19f5afee69->enter($__internal_8af38889b9c4111a88776c680b102a1ce7322e262b12942a4db24c19f5afee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_8af38889b9c4111a88776c680b102a1ce7322e262b12942a4db24c19f5afee69->leave($__internal_8af38889b9c4111a88776c680b102a1ce7322e262b12942a4db24c19f5afee69_prof);

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
