<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_9e7ca3807a687f1a957fe54edb754d77f874866c05b65d869f2e9f026f30c90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_380bc2042efce5a3e4be212b19dbb943ebff795cb06175f1d61308365f32fc1d = $this->env->getExtension("native_profiler");
        $__internal_380bc2042efce5a3e4be212b19dbb943ebff795cb06175f1d61308365f32fc1d->enter($__internal_380bc2042efce5a3e4be212b19dbb943ebff795cb06175f1d61308365f32fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_380bc2042efce5a3e4be212b19dbb943ebff795cb06175f1d61308365f32fc1d->leave($__internal_380bc2042efce5a3e4be212b19dbb943ebff795cb06175f1d61308365f32fc1d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ec1107c039e5b5e64cbf60f3ce45b6b6e74ede9cf10917e758beb56eb6ac62e = $this->env->getExtension("native_profiler");
        $__internal_9ec1107c039e5b5e64cbf60f3ce45b6b6e74ede9cf10917e758beb56eb6ac62e->enter($__internal_9ec1107c039e5b5e64cbf60f3ce45b6b6e74ede9cf10917e758beb56eb6ac62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9ec1107c039e5b5e64cbf60f3ce45b6b6e74ede9cf10917e758beb56eb6ac62e->leave($__internal_9ec1107c039e5b5e64cbf60f3ce45b6b6e74ede9cf10917e758beb56eb6ac62e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
