<?php

/* @LGPUser/Registration/email.txt.twig */
class __TwigTemplate_8242e01ba1c1797f041ea9d9850b29640c1c88d11811d64101634708f1d10f78 extends Twig_Template
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
        $__internal_302220caa3d7dbb39656deec2c9e54ccd2ffccc0460a30e8187264c782c37ae9 = $this->env->getExtension("native_profiler");
        $__internal_302220caa3d7dbb39656deec2c9e54ccd2ffccc0460a30e8187264c782c37ae9->enter($__internal_302220caa3d7dbb39656deec2c9e54ccd2ffccc0460a30e8187264c782c37ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_302220caa3d7dbb39656deec2c9e54ccd2ffccc0460a30e8187264c782c37ae9->leave($__internal_302220caa3d7dbb39656deec2c9e54ccd2ffccc0460a30e8187264c782c37ae9_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a70c00aeaf490c7918ec2530568ab5bca5bb37c109a0ddd24089216f5b156b2b = $this->env->getExtension("native_profiler");
        $__internal_a70c00aeaf490c7918ec2530568ab5bca5bb37c109a0ddd24089216f5b156b2b->enter($__internal_a70c00aeaf490c7918ec2530568ab5bca5bb37c109a0ddd24089216f5b156b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_a70c00aeaf490c7918ec2530568ab5bca5bb37c109a0ddd24089216f5b156b2b->leave($__internal_a70c00aeaf490c7918ec2530568ab5bca5bb37c109a0ddd24089216f5b156b2b_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_92f16f8301735303aa8bc049ae2a2ef5bc1f0e1a875a37c8bd86ba900a1f9500 = $this->env->getExtension("native_profiler");
        $__internal_92f16f8301735303aa8bc049ae2a2ef5bc1f0e1a875a37c8bd86ba900a1f9500->enter($__internal_92f16f8301735303aa8bc049ae2a2ef5bc1f0e1a875a37c8bd86ba900a1f9500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_92f16f8301735303aa8bc049ae2a2ef5bc1f0e1a875a37c8bd86ba900a1f9500->leave($__internal_92f16f8301735303aa8bc049ae2a2ef5bc1f0e1a875a37c8bd86ba900a1f9500_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d625ec3d610ccfd19152c2593b018fb6fb22149e6397c6788d3fd0252b6c377 = $this->env->getExtension("native_profiler");
        $__internal_3d625ec3d610ccfd19152c2593b018fb6fb22149e6397c6788d3fd0252b6c377->enter($__internal_3d625ec3d610ccfd19152c2593b018fb6fb22149e6397c6788d3fd0252b6c377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3d625ec3d610ccfd19152c2593b018fb6fb22149e6397c6788d3fd0252b6c377->leave($__internal_3d625ec3d610ccfd19152c2593b018fb6fb22149e6397c6788d3fd0252b6c377_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/email.txt.twig";
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
