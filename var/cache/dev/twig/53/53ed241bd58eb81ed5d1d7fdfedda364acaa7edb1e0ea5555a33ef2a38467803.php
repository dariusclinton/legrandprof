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
        $__internal_c4159f25dfe3866498616f2f7dec7a99c7db0f2ab55b0dc83c6e0ad2ab0b9401 = $this->env->getExtension("native_profiler");
        $__internal_c4159f25dfe3866498616f2f7dec7a99c7db0f2ab55b0dc83c6e0ad2ab0b9401->enter($__internal_c4159f25dfe3866498616f2f7dec7a99c7db0f2ab55b0dc83c6e0ad2ab0b9401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_c4159f25dfe3866498616f2f7dec7a99c7db0f2ab55b0dc83c6e0ad2ab0b9401->leave($__internal_c4159f25dfe3866498616f2f7dec7a99c7db0f2ab55b0dc83c6e0ad2ab0b9401_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0821ada431ae267b3e8a609beaa10122211df03444f34cb6eb4f6f4f2402ca1d = $this->env->getExtension("native_profiler");
        $__internal_0821ada431ae267b3e8a609beaa10122211df03444f34cb6eb4f6f4f2402ca1d->enter($__internal_0821ada431ae267b3e8a609beaa10122211df03444f34cb6eb4f6f4f2402ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0821ada431ae267b3e8a609beaa10122211df03444f34cb6eb4f6f4f2402ca1d->leave($__internal_0821ada431ae267b3e8a609beaa10122211df03444f34cb6eb4f6f4f2402ca1d_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d2328f0de1e7e23c507294fd2e14f440d6300725f7294a93f3eef3c390b1ccdc = $this->env->getExtension("native_profiler");
        $__internal_d2328f0de1e7e23c507294fd2e14f440d6300725f7294a93f3eef3c390b1ccdc->enter($__internal_d2328f0de1e7e23c507294fd2e14f440d6300725f7294a93f3eef3c390b1ccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_d2328f0de1e7e23c507294fd2e14f440d6300725f7294a93f3eef3c390b1ccdc->leave($__internal_d2328f0de1e7e23c507294fd2e14f440d6300725f7294a93f3eef3c390b1ccdc_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_07eea75cc75c8702ff88cc257094896ff06cf1e74d46f51967e8e53245ae6fa9 = $this->env->getExtension("native_profiler");
        $__internal_07eea75cc75c8702ff88cc257094896ff06cf1e74d46f51967e8e53245ae6fa9->enter($__internal_07eea75cc75c8702ff88cc257094896ff06cf1e74d46f51967e8e53245ae6fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_07eea75cc75c8702ff88cc257094896ff06cf1e74d46f51967e8e53245ae6fa9->leave($__internal_07eea75cc75c8702ff88cc257094896ff06cf1e74d46f51967e8e53245ae6fa9_prof);

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
