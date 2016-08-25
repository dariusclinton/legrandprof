<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d95970cb97bba19496fb7bec9e2eb31af5064a907cda1038f6565b5060a8578a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2156cfd3763443d88aa9b63f30c7d820a714e574a1ded0a68475c91bd489e95 = $this->env->getExtension("native_profiler");
        $__internal_b2156cfd3763443d88aa9b63f30c7d820a714e574a1ded0a68475c91bd489e95->enter($__internal_b2156cfd3763443d88aa9b63f30c7d820a714e574a1ded0a68475c91bd489e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b2156cfd3763443d88aa9b63f30c7d820a714e574a1ded0a68475c91bd489e95->leave($__internal_b2156cfd3763443d88aa9b63f30c7d820a714e574a1ded0a68475c91bd489e95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
