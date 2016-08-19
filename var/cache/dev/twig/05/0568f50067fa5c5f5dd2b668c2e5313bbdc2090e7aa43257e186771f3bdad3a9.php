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
        $__internal_086108929f32fc162144bc503a4cd61dc0290e829026ff489e0a96b3c826da02 = $this->env->getExtension("native_profiler");
        $__internal_086108929f32fc162144bc503a4cd61dc0290e829026ff489e0a96b3c826da02->enter($__internal_086108929f32fc162144bc503a4cd61dc0290e829026ff489e0a96b3c826da02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_086108929f32fc162144bc503a4cd61dc0290e829026ff489e0a96b3c826da02->leave($__internal_086108929f32fc162144bc503a4cd61dc0290e829026ff489e0a96b3c826da02_prof);

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
