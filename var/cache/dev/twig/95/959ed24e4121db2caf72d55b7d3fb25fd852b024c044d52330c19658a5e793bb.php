<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_216280e3a52a5b17229ac5be21c00603365b41b7f4d8c681da4e51518659cdb5 = $this->env->getExtension("native_profiler");
        $__internal_216280e3a52a5b17229ac5be21c00603365b41b7f4d8c681da4e51518659cdb5->enter($__internal_216280e3a52a5b17229ac5be21c00603365b41b7f4d8c681da4e51518659cdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_216280e3a52a5b17229ac5be21c00603365b41b7f4d8c681da4e51518659cdb5->leave($__internal_216280e3a52a5b17229ac5be21c00603365b41b7f4d8c681da4e51518659cdb5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_15447282376314d449f32b8bd28d68864c44ff3a0e6c17973adbebdb7da0511c = $this->env->getExtension("native_profiler");
        $__internal_15447282376314d449f32b8bd28d68864c44ff3a0e6c17973adbebdb7da0511c->enter($__internal_15447282376314d449f32b8bd28d68864c44ff3a0e6c17973adbebdb7da0511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_15447282376314d449f32b8bd28d68864c44ff3a0e6c17973adbebdb7da0511c->leave($__internal_15447282376314d449f32b8bd28d68864c44ff3a0e6c17973adbebdb7da0511c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_72bd095eff101f4ebde8bf196656b25ddda4090568ca30ea327812c9f7ed1288 = $this->env->getExtension("native_profiler");
        $__internal_72bd095eff101f4ebde8bf196656b25ddda4090568ca30ea327812c9f7ed1288->enter($__internal_72bd095eff101f4ebde8bf196656b25ddda4090568ca30ea327812c9f7ed1288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_72bd095eff101f4ebde8bf196656b25ddda4090568ca30ea327812c9f7ed1288->leave($__internal_72bd095eff101f4ebde8bf196656b25ddda4090568ca30ea327812c9f7ed1288_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3557ae2d6c5cd718dbded4d452cabb37a10e0a29e826e4800f118a656b211a99 = $this->env->getExtension("native_profiler");
        $__internal_3557ae2d6c5cd718dbded4d452cabb37a10e0a29e826e4800f118a656b211a99->enter($__internal_3557ae2d6c5cd718dbded4d452cabb37a10e0a29e826e4800f118a656b211a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3557ae2d6c5cd718dbded4d452cabb37a10e0a29e826e4800f118a656b211a99->leave($__internal_3557ae2d6c5cd718dbded4d452cabb37a10e0a29e826e4800f118a656b211a99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
