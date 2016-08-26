<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_0ba214d2ac539f56fadc7606f1bd24f0c052a5d8c71dca9ed1fcf1a456695552 extends Twig_Template
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
        $__internal_bdfd421b500c2ba97486cdd6e144d7727f901c2b0bce3005332bbe8bba07f1d3 = $this->env->getExtension("native_profiler");
        $__internal_bdfd421b500c2ba97486cdd6e144d7727f901c2b0bce3005332bbe8bba07f1d3->enter($__internal_bdfd421b500c2ba97486cdd6e144d7727f901c2b0bce3005332bbe8bba07f1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_bdfd421b500c2ba97486cdd6e144d7727f901c2b0bce3005332bbe8bba07f1d3->leave($__internal_bdfd421b500c2ba97486cdd6e144d7727f901c2b0bce3005332bbe8bba07f1d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
