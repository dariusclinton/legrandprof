<?php

/* LGPUserBundle:User:index.html.twig */
class __TwigTemplate_39277d522211addaddca7769614272b941ba1bdc05890380a1b599f9a6283793 extends Twig_Template
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
        $__internal_ba2a0c09ad2ba9b15a12754e4e720272e41df4811563d7f6e619352a1b34b041 = $this->env->getExtension("native_profiler");
        $__internal_ba2a0c09ad2ba9b15a12754e4e720272e41df4811563d7f6e619352a1b34b041->enter($__internal_ba2a0c09ad2ba9b15a12754e4e720272e41df4811563d7f6e619352a1b34b041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:User:index.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills\">
  <li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("admin_lgp_user_prof_list");
        echo "\"><span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["profs"]) ? $context["profs"] : $this->getContext($context, "profs"))), "html", null, true);
        echo "</span>Profs</a> </li>
  <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("admin_lgp_user_parents_list");
        echo "\"><span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["parents"]) ? $context["parents"] : $this->getContext($context, "parents"))), "html", null, true);
        echo "</span>Parents</a> </li>
  <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("admin_lgp_course_cours_list");
        echo "\"><span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours"))), "html", null, true);
        echo "</span>Cours</a> </li>
</ul>";
        
        $__internal_ba2a0c09ad2ba9b15a12754e4e720272e41df4811563d7f6e619352a1b34b041->leave($__internal_ba2a0c09ad2ba9b15a12754e4e720272e41df4811563d7f6e619352a1b34b041_prof);

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
        return array (  37 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<ul class=\"nav nav-pills\">
  <li><a href=\"{{ path('admin_lgp_user_prof_list') }}\"><span class=\"badge\">{{ profs|length }}</span>Profs</a> </li>
  <li><a href=\"{{ path('admin_lgp_user_parents_list') }}\"><span class=\"badge\">{{ parents|length }}</span>Parents</a> </li>
  <li><a href=\"{{ path('admin_lgp_course_cours_list') }}\"><span class=\"badge\">{{ cours|length }}</span>Cours</a> </li>
</ul>";
    }
}
