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
        $__internal_488c077c8897fe8aaa96cc0f06efaf89454af69a3149044639e000508d2d1852 = $this->env->getExtension("native_profiler");
        $__internal_488c077c8897fe8aaa96cc0f06efaf89454af69a3149044639e000508d2d1852->enter($__internal_488c077c8897fe8aaa96cc0f06efaf89454af69a3149044639e000508d2d1852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_488c077c8897fe8aaa96cc0f06efaf89454af69a3149044639e000508d2d1852->leave($__internal_488c077c8897fe8aaa96cc0f06efaf89454af69a3149044639e000508d2d1852_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdddf780499b70ff6b651f3eb685577bd23c6f323f137855598ac5cbd2b81e66 = $this->env->getExtension("native_profiler");
        $__internal_bdddf780499b70ff6b651f3eb685577bd23c6f323f137855598ac5cbd2b81e66->enter($__internal_bdddf780499b70ff6b651f3eb685577bd23c6f323f137855598ac5cbd2b81e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bdddf780499b70ff6b651f3eb685577bd23c6f323f137855598ac5cbd2b81e66->leave($__internal_bdddf780499b70ff6b651f3eb685577bd23c6f323f137855598ac5cbd2b81e66_prof);

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
