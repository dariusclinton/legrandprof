<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3026d447259f0b4887f80ed7a1c1504af723ce4df8b857e6d798b7566e2fe25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b55b789aabc36d56303a0d31a3126110ca73ca01d6cd68d8712ea24cddd1cbad = $this->env->getExtension("native_profiler");
        $__internal_b55b789aabc36d56303a0d31a3126110ca73ca01d6cd68d8712ea24cddd1cbad->enter($__internal_b55b789aabc36d56303a0d31a3126110ca73ca01d6cd68d8712ea24cddd1cbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b55b789aabc36d56303a0d31a3126110ca73ca01d6cd68d8712ea24cddd1cbad->leave($__internal_b55b789aabc36d56303a0d31a3126110ca73ca01d6cd68d8712ea24cddd1cbad_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f3dcd97a39bcb14e77a6529f6a271183138dd40c53e31cf8bef77737e74a95e8 = $this->env->getExtension("native_profiler");
        $__internal_f3dcd97a39bcb14e77a6529f6a271183138dd40c53e31cf8bef77737e74a95e8->enter($__internal_f3dcd97a39bcb14e77a6529f6a271183138dd40c53e31cf8bef77737e74a95e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f3dcd97a39bcb14e77a6529f6a271183138dd40c53e31cf8bef77737e74a95e8->leave($__internal_f3dcd97a39bcb14e77a6529f6a271183138dd40c53e31cf8bef77737e74a95e8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0b31d5201f84d7e8c9bfc1bc0828a4913edeabde89fe622cd2c0a8feedf73edf = $this->env->getExtension("native_profiler");
        $__internal_0b31d5201f84d7e8c9bfc1bc0828a4913edeabde89fe622cd2c0a8feedf73edf->enter($__internal_0b31d5201f84d7e8c9bfc1bc0828a4913edeabde89fe622cd2c0a8feedf73edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0b31d5201f84d7e8c9bfc1bc0828a4913edeabde89fe622cd2c0a8feedf73edf->leave($__internal_0b31d5201f84d7e8c9bfc1bc0828a4913edeabde89fe622cd2c0a8feedf73edf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d4db7707a35be5db3ee130504d584aa37fde79ce266f5c7d7984be447d96cdd = $this->env->getExtension("native_profiler");
        $__internal_3d4db7707a35be5db3ee130504d584aa37fde79ce266f5c7d7984be447d96cdd->enter($__internal_3d4db7707a35be5db3ee130504d584aa37fde79ce266f5c7d7984be447d96cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3d4db7707a35be5db3ee130504d584aa37fde79ce266f5c7d7984be447d96cdd->leave($__internal_3d4db7707a35be5db3ee130504d584aa37fde79ce266f5c7d7984be447d96cdd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
