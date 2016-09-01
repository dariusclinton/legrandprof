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
        $__internal_5ee1b1274b7b5496ca7f124ce9cd993f25d774c8fd37739c2813c140def7c90f = $this->env->getExtension("native_profiler");
        $__internal_5ee1b1274b7b5496ca7f124ce9cd993f25d774c8fd37739c2813c140def7c90f->enter($__internal_5ee1b1274b7b5496ca7f124ce9cd993f25d774c8fd37739c2813c140def7c90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ee1b1274b7b5496ca7f124ce9cd993f25d774c8fd37739c2813c140def7c90f->leave($__internal_5ee1b1274b7b5496ca7f124ce9cd993f25d774c8fd37739c2813c140def7c90f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e0dad006f1b36d8451f570f3828a4d4446d3b73a4f55f36709cc490bb26678 = $this->env->getExtension("native_profiler");
        $__internal_55e0dad006f1b36d8451f570f3828a4d4446d3b73a4f55f36709cc490bb26678->enter($__internal_55e0dad006f1b36d8451f570f3828a4d4446d3b73a4f55f36709cc490bb26678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_55e0dad006f1b36d8451f570f3828a4d4446d3b73a4f55f36709cc490bb26678->leave($__internal_55e0dad006f1b36d8451f570f3828a4d4446d3b73a4f55f36709cc490bb26678_prof);

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
