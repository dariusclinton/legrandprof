<?php

/* LGPUserBundle:User:index.html.twig */
class __TwigTemplate_6d55f95c1444114e9a40402f5e28e9e7220eb0250c5723c868672d79f83123c8 extends Twig_Template
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
        // line 1
        echo "<ul class=\"nav nav-pills\">
  <li><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lgp_user_prof_list");
        echo "\"><span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["profs"]) ? $context["profs"] : null)), "html", null, true);
        echo "</span>Profs</a> </li>
  <li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lgp_user_parents_list");
        echo "\"><span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["parents"]) ? $context["parents"] : null)), "html", null, true);
        echo "</span>Parents</a> </li>
  <li><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lgp_course_cours_list");
        echo "\"><span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cours"]) ? $context["cours"] : null)), "html", null, true);
        echo "</span>Cours</a> </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
