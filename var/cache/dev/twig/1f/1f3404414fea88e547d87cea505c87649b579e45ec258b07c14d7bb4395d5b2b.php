<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e444052e1332e6acfb25126880dc4e4e01463884a6045c2efb2a7339ff7d25d2 = $this->env->getExtension("native_profiler");
        $__internal_e444052e1332e6acfb25126880dc4e4e01463884a6045c2efb2a7339ff7d25d2->enter($__internal_e444052e1332e6acfb25126880dc4e4e01463884a6045c2efb2a7339ff7d25d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e444052e1332e6acfb25126880dc4e4e01463884a6045c2efb2a7339ff7d25d2->leave($__internal_e444052e1332e6acfb25126880dc4e4e01463884a6045c2efb2a7339ff7d25d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6bea515e7759e15cee63ca203a788e0ada3998ed418d30fa62a39fa48e4b1de = $this->env->getExtension("native_profiler");
        $__internal_c6bea515e7759e15cee63ca203a788e0ada3998ed418d30fa62a39fa48e4b1de->enter($__internal_c6bea515e7759e15cee63ca203a788e0ada3998ed418d30fa62a39fa48e4b1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c6bea515e7759e15cee63ca203a788e0ada3998ed418d30fa62a39fa48e4b1de->leave($__internal_c6bea515e7759e15cee63ca203a788e0ada3998ed418d30fa62a39fa48e4b1de_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
