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
        $__internal_277df890cbdfabaaf947629c1ea3deb77d3589757669bc5d29c460a242aa0c69 = $this->env->getExtension("native_profiler");
        $__internal_277df890cbdfabaaf947629c1ea3deb77d3589757669bc5d29c460a242aa0c69->enter($__internal_277df890cbdfabaaf947629c1ea3deb77d3589757669bc5d29c460a242aa0c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_277df890cbdfabaaf947629c1ea3deb77d3589757669bc5d29c460a242aa0c69->leave($__internal_277df890cbdfabaaf947629c1ea3deb77d3589757669bc5d29c460a242aa0c69_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_12a7f8636808824fbf9e052ab66208d65005dd4e2e5ec57f75074f74353bedc3 = $this->env->getExtension("native_profiler");
        $__internal_12a7f8636808824fbf9e052ab66208d65005dd4e2e5ec57f75074f74353bedc3->enter($__internal_12a7f8636808824fbf9e052ab66208d65005dd4e2e5ec57f75074f74353bedc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_12a7f8636808824fbf9e052ab66208d65005dd4e2e5ec57f75074f74353bedc3->leave($__internal_12a7f8636808824fbf9e052ab66208d65005dd4e2e5ec57f75074f74353bedc3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_82e81f112d231e2f14e68106ff87cf8df0b9714513a6262a372e6c132195107c = $this->env->getExtension("native_profiler");
        $__internal_82e81f112d231e2f14e68106ff87cf8df0b9714513a6262a372e6c132195107c->enter($__internal_82e81f112d231e2f14e68106ff87cf8df0b9714513a6262a372e6c132195107c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_82e81f112d231e2f14e68106ff87cf8df0b9714513a6262a372e6c132195107c->leave($__internal_82e81f112d231e2f14e68106ff87cf8df0b9714513a6262a372e6c132195107c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_88d6fef441d91cb5271ab85963ae0c5ffb408d9a3c5e34082c3ae47ae887913f = $this->env->getExtension("native_profiler");
        $__internal_88d6fef441d91cb5271ab85963ae0c5ffb408d9a3c5e34082c3ae47ae887913f->enter($__internal_88d6fef441d91cb5271ab85963ae0c5ffb408d9a3c5e34082c3ae47ae887913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_88d6fef441d91cb5271ab85963ae0c5ffb408d9a3c5e34082c3ae47ae887913f->leave($__internal_88d6fef441d91cb5271ab85963ae0c5ffb408d9a3c5e34082c3ae47ae887913f_prof);

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
