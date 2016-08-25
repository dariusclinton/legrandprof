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
        $__internal_af0d9817dd24e492e8551012be80f242d0c80e487f75f6bd788f8894086adc16 = $this->env->getExtension("native_profiler");
        $__internal_af0d9817dd24e492e8551012be80f242d0c80e487f75f6bd788f8894086adc16->enter($__internal_af0d9817dd24e492e8551012be80f242d0c80e487f75f6bd788f8894086adc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_af0d9817dd24e492e8551012be80f242d0c80e487f75f6bd788f8894086adc16->leave($__internal_af0d9817dd24e492e8551012be80f242d0c80e487f75f6bd788f8894086adc16_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_18eae558d7443d62896b6e39a198efd1a3e318976fc56fc2d3d7fa1b09ddaf80 = $this->env->getExtension("native_profiler");
        $__internal_18eae558d7443d62896b6e39a198efd1a3e318976fc56fc2d3d7fa1b09ddaf80->enter($__internal_18eae558d7443d62896b6e39a198efd1a3e318976fc56fc2d3d7fa1b09ddaf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_18eae558d7443d62896b6e39a198efd1a3e318976fc56fc2d3d7fa1b09ddaf80->leave($__internal_18eae558d7443d62896b6e39a198efd1a3e318976fc56fc2d3d7fa1b09ddaf80_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_abd0a47ab628dd7b96d1fb475c907e483e1378be3f0e3b27be83ffcad138659a = $this->env->getExtension("native_profiler");
        $__internal_abd0a47ab628dd7b96d1fb475c907e483e1378be3f0e3b27be83ffcad138659a->enter($__internal_abd0a47ab628dd7b96d1fb475c907e483e1378be3f0e3b27be83ffcad138659a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abd0a47ab628dd7b96d1fb475c907e483e1378be3f0e3b27be83ffcad138659a->leave($__internal_abd0a47ab628dd7b96d1fb475c907e483e1378be3f0e3b27be83ffcad138659a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eabfe0d2efb589051a995ced1bd2256d74ea8d547ae20a0e171b88fa951ae643 = $this->env->getExtension("native_profiler");
        $__internal_eabfe0d2efb589051a995ced1bd2256d74ea8d547ae20a0e171b88fa951ae643->enter($__internal_eabfe0d2efb589051a995ced1bd2256d74ea8d547ae20a0e171b88fa951ae643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eabfe0d2efb589051a995ced1bd2256d74ea8d547ae20a0e171b88fa951ae643->leave($__internal_eabfe0d2efb589051a995ced1bd2256d74ea8d547ae20a0e171b88fa951ae643_prof);

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
