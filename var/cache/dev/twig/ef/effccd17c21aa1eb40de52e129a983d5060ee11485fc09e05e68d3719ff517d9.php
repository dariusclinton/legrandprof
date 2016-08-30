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
        $__internal_79a7ba454e66b63c36ffdd190271022c9104e347a547c866a1985bf602323a49 = $this->env->getExtension("native_profiler");
        $__internal_79a7ba454e66b63c36ffdd190271022c9104e347a547c866a1985bf602323a49->enter($__internal_79a7ba454e66b63c36ffdd190271022c9104e347a547c866a1985bf602323a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a7ba454e66b63c36ffdd190271022c9104e347a547c866a1985bf602323a49->leave($__internal_79a7ba454e66b63c36ffdd190271022c9104e347a547c866a1985bf602323a49_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b06c49b268c0b47f634964075ce989664ef68e81035f849e6c8648489084db19 = $this->env->getExtension("native_profiler");
        $__internal_b06c49b268c0b47f634964075ce989664ef68e81035f849e6c8648489084db19->enter($__internal_b06c49b268c0b47f634964075ce989664ef68e81035f849e6c8648489084db19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b06c49b268c0b47f634964075ce989664ef68e81035f849e6c8648489084db19->leave($__internal_b06c49b268c0b47f634964075ce989664ef68e81035f849e6c8648489084db19_prof);

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
