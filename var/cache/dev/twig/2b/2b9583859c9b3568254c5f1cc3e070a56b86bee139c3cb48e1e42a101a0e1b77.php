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
        $__internal_1bb3ce0c2a6e08df247baad33ce4c75dcf6cbb823af5ba2822ed2bfa7a2a3ac4 = $this->env->getExtension("native_profiler");
        $__internal_1bb3ce0c2a6e08df247baad33ce4c75dcf6cbb823af5ba2822ed2bfa7a2a3ac4->enter($__internal_1bb3ce0c2a6e08df247baad33ce4c75dcf6cbb823af5ba2822ed2bfa7a2a3ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb3ce0c2a6e08df247baad33ce4c75dcf6cbb823af5ba2822ed2bfa7a2a3ac4->leave($__internal_1bb3ce0c2a6e08df247baad33ce4c75dcf6cbb823af5ba2822ed2bfa7a2a3ac4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9c8da4724b921a995da04a4bab82401371575bc76aae0ef74aa2880befeba10 = $this->env->getExtension("native_profiler");
        $__internal_f9c8da4724b921a995da04a4bab82401371575bc76aae0ef74aa2880befeba10->enter($__internal_f9c8da4724b921a995da04a4bab82401371575bc76aae0ef74aa2880befeba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f9c8da4724b921a995da04a4bab82401371575bc76aae0ef74aa2880befeba10->leave($__internal_f9c8da4724b921a995da04a4bab82401371575bc76aae0ef74aa2880befeba10_prof);

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
