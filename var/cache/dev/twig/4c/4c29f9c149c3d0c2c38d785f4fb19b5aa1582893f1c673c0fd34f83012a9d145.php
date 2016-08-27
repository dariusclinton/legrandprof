<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aa6f8f9a6da3e4900fdd801ae93a0281a553945be1a19e47ea2ed4d68538690 = $this->env->getExtension("native_profiler");
        $__internal_0aa6f8f9a6da3e4900fdd801ae93a0281a553945be1a19e47ea2ed4d68538690->enter($__internal_0aa6f8f9a6da3e4900fdd801ae93a0281a553945be1a19e47ea2ed4d68538690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aa6f8f9a6da3e4900fdd801ae93a0281a553945be1a19e47ea2ed4d68538690->leave($__internal_0aa6f8f9a6da3e4900fdd801ae93a0281a553945be1a19e47ea2ed4d68538690_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a6e5751a3e4de47695b5c95be9a57eeacde02a035f7a1326354f548f0d20952 = $this->env->getExtension("native_profiler");
        $__internal_6a6e5751a3e4de47695b5c95be9a57eeacde02a035f7a1326354f548f0d20952->enter($__internal_6a6e5751a3e4de47695b5c95be9a57eeacde02a035f7a1326354f548f0d20952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6a6e5751a3e4de47695b5c95be9a57eeacde02a035f7a1326354f548f0d20952->leave($__internal_6a6e5751a3e4de47695b5c95be9a57eeacde02a035f7a1326354f548f0d20952_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
