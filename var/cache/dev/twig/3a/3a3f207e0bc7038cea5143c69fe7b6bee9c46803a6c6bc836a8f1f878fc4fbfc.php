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
        $__internal_71f937441a04ed8864a65cc28f9992e30151351cb0630d5362d9bd7f3d8af134 = $this->env->getExtension("native_profiler");
        $__internal_71f937441a04ed8864a65cc28f9992e30151351cb0630d5362d9bd7f3d8af134->enter($__internal_71f937441a04ed8864a65cc28f9992e30151351cb0630d5362d9bd7f3d8af134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_71f937441a04ed8864a65cc28f9992e30151351cb0630d5362d9bd7f3d8af134->leave($__internal_71f937441a04ed8864a65cc28f9992e30151351cb0630d5362d9bd7f3d8af134_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9d4c5c9b7b7e62c473bd2427d468d3125333b10ad56e2af383e3ec7ed82968fd = $this->env->getExtension("native_profiler");
        $__internal_9d4c5c9b7b7e62c473bd2427d468d3125333b10ad56e2af383e3ec7ed82968fd->enter($__internal_9d4c5c9b7b7e62c473bd2427d468d3125333b10ad56e2af383e3ec7ed82968fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_9d4c5c9b7b7e62c473bd2427d468d3125333b10ad56e2af383e3ec7ed82968fd->leave($__internal_9d4c5c9b7b7e62c473bd2427d468d3125333b10ad56e2af383e3ec7ed82968fd_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9dc8ea03a0bcf09110bba4035e4e4c5050869e00e654ecb19394571e598ea61e = $this->env->getExtension("native_profiler");
        $__internal_9dc8ea03a0bcf09110bba4035e4e4c5050869e00e654ecb19394571e598ea61e->enter($__internal_9dc8ea03a0bcf09110bba4035e4e4c5050869e00e654ecb19394571e598ea61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_9dc8ea03a0bcf09110bba4035e4e4c5050869e00e654ecb19394571e598ea61e->leave($__internal_9dc8ea03a0bcf09110bba4035e4e4c5050869e00e654ecb19394571e598ea61e_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_74217d0fd5105186950d3bb98293ec5e0ba8f0d9601b6f61b3f65d71dc8df814 = $this->env->getExtension("native_profiler");
        $__internal_74217d0fd5105186950d3bb98293ec5e0ba8f0d9601b6f61b3f65d71dc8df814->enter($__internal_74217d0fd5105186950d3bb98293ec5e0ba8f0d9601b6f61b3f65d71dc8df814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_74217d0fd5105186950d3bb98293ec5e0ba8f0d9601b6f61b3f65d71dc8df814->leave($__internal_74217d0fd5105186950d3bb98293ec5e0ba8f0d9601b6f61b3f65d71dc8df814_prof);

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
