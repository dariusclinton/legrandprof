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
        $__internal_1b7d09724046a517dabd527c667869e8aac345e68cdaaadd4aa2bdaecf5c8f74 = $this->env->getExtension("native_profiler");
        $__internal_1b7d09724046a517dabd527c667869e8aac345e68cdaaadd4aa2bdaecf5c8f74->enter($__internal_1b7d09724046a517dabd527c667869e8aac345e68cdaaadd4aa2bdaecf5c8f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1b7d09724046a517dabd527c667869e8aac345e68cdaaadd4aa2bdaecf5c8f74->leave($__internal_1b7d09724046a517dabd527c667869e8aac345e68cdaaadd4aa2bdaecf5c8f74_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_44bbfce18bd5638d4613849c1f774971d1332872acea5c5d78ce6510b3592d32 = $this->env->getExtension("native_profiler");
        $__internal_44bbfce18bd5638d4613849c1f774971d1332872acea5c5d78ce6510b3592d32->enter($__internal_44bbfce18bd5638d4613849c1f774971d1332872acea5c5d78ce6510b3592d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_44bbfce18bd5638d4613849c1f774971d1332872acea5c5d78ce6510b3592d32->leave($__internal_44bbfce18bd5638d4613849c1f774971d1332872acea5c5d78ce6510b3592d32_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6c597790458e70e1961eddbdb5ca5ec08d2ba766a241b85a62c5df597f8962a8 = $this->env->getExtension("native_profiler");
        $__internal_6c597790458e70e1961eddbdb5ca5ec08d2ba766a241b85a62c5df597f8962a8->enter($__internal_6c597790458e70e1961eddbdb5ca5ec08d2ba766a241b85a62c5df597f8962a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6c597790458e70e1961eddbdb5ca5ec08d2ba766a241b85a62c5df597f8962a8->leave($__internal_6c597790458e70e1961eddbdb5ca5ec08d2ba766a241b85a62c5df597f8962a8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_748c1193d1388b742d7b38cf44dc8b63432e818601ecb26b7691326a17cb1b33 = $this->env->getExtension("native_profiler");
        $__internal_748c1193d1388b742d7b38cf44dc8b63432e818601ecb26b7691326a17cb1b33->enter($__internal_748c1193d1388b742d7b38cf44dc8b63432e818601ecb26b7691326a17cb1b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_748c1193d1388b742d7b38cf44dc8b63432e818601ecb26b7691326a17cb1b33->leave($__internal_748c1193d1388b742d7b38cf44dc8b63432e818601ecb26b7691326a17cb1b33_prof);

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
