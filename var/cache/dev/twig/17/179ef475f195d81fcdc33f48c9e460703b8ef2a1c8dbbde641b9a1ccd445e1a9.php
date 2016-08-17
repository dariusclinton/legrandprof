<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_4202084a25ce8abdb16d451e4c034dd432a79713bd1aa3078b7c9d77eed3c117 = $this->env->getExtension("native_profiler");
        $__internal_4202084a25ce8abdb16d451e4c034dd432a79713bd1aa3078b7c9d77eed3c117->enter($__internal_4202084a25ce8abdb16d451e4c034dd432a79713bd1aa3078b7c9d77eed3c117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4202084a25ce8abdb16d451e4c034dd432a79713bd1aa3078b7c9d77eed3c117->leave($__internal_4202084a25ce8abdb16d451e4c034dd432a79713bd1aa3078b7c9d77eed3c117_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_98498988bdfe53660b2569861526a058c5f1de6d79916b64061c22285c3b7e0c = $this->env->getExtension("native_profiler");
        $__internal_98498988bdfe53660b2569861526a058c5f1de6d79916b64061c22285c3b7e0c->enter($__internal_98498988bdfe53660b2569861526a058c5f1de6d79916b64061c22285c3b7e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_98498988bdfe53660b2569861526a058c5f1de6d79916b64061c22285c3b7e0c->leave($__internal_98498988bdfe53660b2569861526a058c5f1de6d79916b64061c22285c3b7e0c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ea4af3c26a50285dd54ab02f361f57b5fdf867d8471f25cfdf5ce87be43e5e89 = $this->env->getExtension("native_profiler");
        $__internal_ea4af3c26a50285dd54ab02f361f57b5fdf867d8471f25cfdf5ce87be43e5e89->enter($__internal_ea4af3c26a50285dd54ab02f361f57b5fdf867d8471f25cfdf5ce87be43e5e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ea4af3c26a50285dd54ab02f361f57b5fdf867d8471f25cfdf5ce87be43e5e89->leave($__internal_ea4af3c26a50285dd54ab02f361f57b5fdf867d8471f25cfdf5ce87be43e5e89_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_30731b20f35593efde264c05dd829439f30f70d07e27b841388cb275d554b3e2 = $this->env->getExtension("native_profiler");
        $__internal_30731b20f35593efde264c05dd829439f30f70d07e27b841388cb275d554b3e2->enter($__internal_30731b20f35593efde264c05dd829439f30f70d07e27b841388cb275d554b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_30731b20f35593efde264c05dd829439f30f70d07e27b841388cb275d554b3e2->leave($__internal_30731b20f35593efde264c05dd829439f30f70d07e27b841388cb275d554b3e2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
