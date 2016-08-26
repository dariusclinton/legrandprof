<?php

/* @LGPUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7aae9c1e0e87ac6aae144a0fd6c3497add40fe654b15084734373b8ceeea6021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29e6d3385f7a22ad6d30cb08bc38d98fa83fff7aa14772a965ff502afff3515c = $this->env->getExtension("native_profiler");
        $__internal_29e6d3385f7a22ad6d30cb08bc38d98fa83fff7aa14772a965ff502afff3515c->enter($__internal_29e6d3385f7a22ad6d30cb08bc38d98fa83fff7aa14772a965ff502afff3515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e6d3385f7a22ad6d30cb08bc38d98fa83fff7aa14772a965ff502afff3515c->leave($__internal_29e6d3385f7a22ad6d30cb08bc38d98fa83fff7aa14772a965ff502afff3515c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_397d351e9bc25ce9f6e4d7e60389738a197d999ad333d5bc2436bf3083d841ab = $this->env->getExtension("native_profiler");
        $__internal_397d351e9bc25ce9f6e4d7e60389738a197d999ad333d5bc2436bf3083d841ab->enter($__internal_397d351e9bc25ce9f6e4d7e60389738a197d999ad333d5bc2436bf3083d841ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_397d351e9bc25ce9f6e4d7e60389738a197d999ad333d5bc2436bf3083d841ab->leave($__internal_397d351e9bc25ce9f6e4d7e60389738a197d999ad333d5bc2436bf3083d841ab_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
