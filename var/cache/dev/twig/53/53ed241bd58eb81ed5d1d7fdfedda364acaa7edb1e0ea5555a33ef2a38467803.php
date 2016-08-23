<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5157624dd1fed23d585bc0aa41f4c2ac82430c0814efc019f571a5c5094b1db1 extends Twig_Template
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
        $__internal_c69293eeda2a40c1ff726734b1d312326f04bce3d24538930a788109e7fe4369 = $this->env->getExtension("native_profiler");
        $__internal_c69293eeda2a40c1ff726734b1d312326f04bce3d24538930a788109e7fe4369->enter($__internal_c69293eeda2a40c1ff726734b1d312326f04bce3d24538930a788109e7fe4369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c69293eeda2a40c1ff726734b1d312326f04bce3d24538930a788109e7fe4369->leave($__internal_c69293eeda2a40c1ff726734b1d312326f04bce3d24538930a788109e7fe4369_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f01aa4dd6bed4f56ee4cfd1e4b56d3be6fcba2670dad1d8ddb818b8241886d8c = $this->env->getExtension("native_profiler");
        $__internal_f01aa4dd6bed4f56ee4cfd1e4b56d3be6fcba2670dad1d8ddb818b8241886d8c->enter($__internal_f01aa4dd6bed4f56ee4cfd1e4b56d3be6fcba2670dad1d8ddb818b8241886d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_f01aa4dd6bed4f56ee4cfd1e4b56d3be6fcba2670dad1d8ddb818b8241886d8c->leave($__internal_f01aa4dd6bed4f56ee4cfd1e4b56d3be6fcba2670dad1d8ddb818b8241886d8c_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dd4bd7d15cfcab97b375e6244896afd975c19a9f0efff731ac2882716565cc18 = $this->env->getExtension("native_profiler");
        $__internal_dd4bd7d15cfcab97b375e6244896afd975c19a9f0efff731ac2882716565cc18->enter($__internal_dd4bd7d15cfcab97b375e6244896afd975c19a9f0efff731ac2882716565cc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_dd4bd7d15cfcab97b375e6244896afd975c19a9f0efff731ac2882716565cc18->leave($__internal_dd4bd7d15cfcab97b375e6244896afd975c19a9f0efff731ac2882716565cc18_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_35ee2630cb674abec5e0e29860615693020d3cdc98e8b69d97522e6b836dea82 = $this->env->getExtension("native_profiler");
        $__internal_35ee2630cb674abec5e0e29860615693020d3cdc98e8b69d97522e6b836dea82->enter($__internal_35ee2630cb674abec5e0e29860615693020d3cdc98e8b69d97522e6b836dea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_35ee2630cb674abec5e0e29860615693020d3cdc98e8b69d97522e6b836dea82->leave($__internal_35ee2630cb674abec5e0e29860615693020d3cdc98e8b69d97522e6b836dea82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block subject %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}{% endblock %}*/
/* */
