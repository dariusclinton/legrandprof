<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_27a09d736fac03f0d4c39cae07b895e26a09caedb8ed943a9e6b28bf4fd87ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_30e172b8d71233a3d905417ec7936bb0a17cab43e4cc5680b8f8fb7a0c801d13 = $this->env->getExtension("native_profiler");
        $__internal_30e172b8d71233a3d905417ec7936bb0a17cab43e4cc5680b8f8fb7a0c801d13->enter($__internal_30e172b8d71233a3d905417ec7936bb0a17cab43e4cc5680b8f8fb7a0c801d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e172b8d71233a3d905417ec7936bb0a17cab43e4cc5680b8f8fb7a0c801d13->leave($__internal_30e172b8d71233a3d905417ec7936bb0a17cab43e4cc5680b8f8fb7a0c801d13_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01643ba1c5b6d91d1c16a557fa8b23dd179220c653e62b1376d3059c487b9ef8 = $this->env->getExtension("native_profiler");
        $__internal_01643ba1c5b6d91d1c16a557fa8b23dd179220c653e62b1376d3059c487b9ef8->enter($__internal_01643ba1c5b6d91d1c16a557fa8b23dd179220c653e62b1376d3059c487b9ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_01643ba1c5b6d91d1c16a557fa8b23dd179220c653e62b1376d3059c487b9ef8->leave($__internal_01643ba1c5b6d91d1c16a557fa8b23dd179220c653e62b1376d3059c487b9ef8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
