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
        $__internal_81da35227558ecfb3d3ecdc46694cd2708a0357cd3ab10c9e6e89e2a84b35b9c = $this->env->getExtension("native_profiler");
        $__internal_81da35227558ecfb3d3ecdc46694cd2708a0357cd3ab10c9e6e89e2a84b35b9c->enter($__internal_81da35227558ecfb3d3ecdc46694cd2708a0357cd3ab10c9e6e89e2a84b35b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_81da35227558ecfb3d3ecdc46694cd2708a0357cd3ab10c9e6e89e2a84b35b9c->leave($__internal_81da35227558ecfb3d3ecdc46694cd2708a0357cd3ab10c9e6e89e2a84b35b9c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_86547bb7e3547923ff4d6c4deade1d6701771de10b2527280919659d8a1bc3ae = $this->env->getExtension("native_profiler");
        $__internal_86547bb7e3547923ff4d6c4deade1d6701771de10b2527280919659d8a1bc3ae->enter($__internal_86547bb7e3547923ff4d6c4deade1d6701771de10b2527280919659d8a1bc3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_86547bb7e3547923ff4d6c4deade1d6701771de10b2527280919659d8a1bc3ae->leave($__internal_86547bb7e3547923ff4d6c4deade1d6701771de10b2527280919659d8a1bc3ae_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7cdf8bf5ca4042fb29e33990c57e3697e86f8edba8dbf402fb7a1c7a03498275 = $this->env->getExtension("native_profiler");
        $__internal_7cdf8bf5ca4042fb29e33990c57e3697e86f8edba8dbf402fb7a1c7a03498275->enter($__internal_7cdf8bf5ca4042fb29e33990c57e3697e86f8edba8dbf402fb7a1c7a03498275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7cdf8bf5ca4042fb29e33990c57e3697e86f8edba8dbf402fb7a1c7a03498275->leave($__internal_7cdf8bf5ca4042fb29e33990c57e3697e86f8edba8dbf402fb7a1c7a03498275_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1c04e20ea52374165772afa449d6de528a2557c5a152cef2908ce070f641c419 = $this->env->getExtension("native_profiler");
        $__internal_1c04e20ea52374165772afa449d6de528a2557c5a152cef2908ce070f641c419->enter($__internal_1c04e20ea52374165772afa449d6de528a2557c5a152cef2908ce070f641c419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1c04e20ea52374165772afa449d6de528a2557c5a152cef2908ce070f641c419->leave($__internal_1c04e20ea52374165772afa449d6de528a2557c5a152cef2908ce070f641c419_prof);

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
