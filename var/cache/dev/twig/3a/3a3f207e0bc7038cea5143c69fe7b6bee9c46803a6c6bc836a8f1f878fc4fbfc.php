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
        $__internal_99488e07c6a9c30b881e9322e490620d02c88fda02783da6afc42679386dcf9d = $this->env->getExtension("native_profiler");
        $__internal_99488e07c6a9c30b881e9322e490620d02c88fda02783da6afc42679386dcf9d->enter($__internal_99488e07c6a9c30b881e9322e490620d02c88fda02783da6afc42679386dcf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_99488e07c6a9c30b881e9322e490620d02c88fda02783da6afc42679386dcf9d->leave($__internal_99488e07c6a9c30b881e9322e490620d02c88fda02783da6afc42679386dcf9d_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_431c23fbda29db7d113c4b3c1b3a286cabc4ace224ec26e2f9161137e39cce99 = $this->env->getExtension("native_profiler");
        $__internal_431c23fbda29db7d113c4b3c1b3a286cabc4ace224ec26e2f9161137e39cce99->enter($__internal_431c23fbda29db7d113c4b3c1b3a286cabc4ace224ec26e2f9161137e39cce99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_431c23fbda29db7d113c4b3c1b3a286cabc4ace224ec26e2f9161137e39cce99->leave($__internal_431c23fbda29db7d113c4b3c1b3a286cabc4ace224ec26e2f9161137e39cce99_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8e1ffde9064e334a6eb507187d2f50d56f9b912a1d2f4b5daaefb0701aa0af08 = $this->env->getExtension("native_profiler");
        $__internal_8e1ffde9064e334a6eb507187d2f50d56f9b912a1d2f4b5daaefb0701aa0af08->enter($__internal_8e1ffde9064e334a6eb507187d2f50d56f9b912a1d2f4b5daaefb0701aa0af08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_8e1ffde9064e334a6eb507187d2f50d56f9b912a1d2f4b5daaefb0701aa0af08->leave($__internal_8e1ffde9064e334a6eb507187d2f50d56f9b912a1d2f4b5daaefb0701aa0af08_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b684d8e18a5e5c2c3ec4b61abdeb542a575a2dfc767b99a8006fa7f2fc193695 = $this->env->getExtension("native_profiler");
        $__internal_b684d8e18a5e5c2c3ec4b61abdeb542a575a2dfc767b99a8006fa7f2fc193695->enter($__internal_b684d8e18a5e5c2c3ec4b61abdeb542a575a2dfc767b99a8006fa7f2fc193695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b684d8e18a5e5c2c3ec4b61abdeb542a575a2dfc767b99a8006fa7f2fc193695->leave($__internal_b684d8e18a5e5c2c3ec4b61abdeb542a575a2dfc767b99a8006fa7f2fc193695_prof);

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
