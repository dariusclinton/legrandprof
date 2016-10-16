<?php

/* LGPCoreBundle::header-submenu.html.twig */
class __TwigTemplate_b5565afaa1f611349c9ded3701f378b9719ac2f327cda3831865fa7024a50c9e extends Twig_Template
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
        $__internal_223b259231c9eb1524e0aeeac8b028b06c9f425d1a13c760a9ea3cf91c75b9b0 = $this->env->getExtension("native_profiler");
        $__internal_223b259231c9eb1524e0aeeac8b028b06c9f425d1a13c760a9ea3cf91c75b9b0->enter($__internal_223b259231c9eb1524e0aeeac8b028b06c9f425d1a13c760a9ea3cf91c75b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header-submenu.html.twig"));

        // line 1
        echo "<div class=\"header-dashboard-submenu hidden-xs\">
  <div class=\"wrapper\">
    <ul class=\"desktop-only\" id=\"dash\">
      ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 5
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_dashboard");
            echo "\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
        ";
        } else {
            // line 7
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lgp_user_parent_dashboard");
            echo "\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
      ";
        }
        // line 9
        echo "      
      ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours");
            echo "\" class=\"dashboard-header-link \" title=\"Ce que j'enseigne\">Mes cours</a></li>
        <li><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_demandes_de_cours");
            echo "\" class=\"dashboard-header-link \">Mes demandes de cours</a></li>
      
      
        <li><a href=\"#\" class=\"dashboard-header-link \">Mon compte</a>
            <ul id=\"account\">
                <li><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation");
            echo "\">Mes évaluations</a></li>
                <li><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
            echo "\">Mes indisponibilités</a></li>
                <li><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours");
            echo "\">Mes séances de cours</a></li>
            </ul>
        </li>
        ";
        }
        // line 23
        echo "        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("lgp_user_mes_reservations");
        echo "\" class=\"dashboard-header-link \">Mes réservations</a></li>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis");
        echo "\" class=\"dashboard-header-link \">Mes avis</a></li>
    </ul>
  </div>
</div>";
        
        $__internal_223b259231c9eb1524e0aeeac8b028b06c9f425d1a13c760a9ea3cf91c75b9b0->leave($__internal_223b259231c9eb1524e0aeeac8b028b06c9f425d1a13c760a9ea3cf91c75b9b0_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::header-submenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  74 => 23,  67 => 19,  63 => 18,  59 => 17,  51 => 12,  46 => 11,  44 => 10,  41 => 9,  35 => 7,  29 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"header-dashboard-submenu hidden-xs\">
  <div class=\"wrapper\">
    <ul class=\"desktop-only\" id=\"dash\">
      {% if is_granted('ROLE_PROF') %}
        <li><a href=\"{{ path('lgp_user_prof_dashboard') }}\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
        {% else %}
          <li><a href=\"{{ path('lgp_user_parent_dashboard') }}\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
      {% endif %}
      
      {% if is_granted('ROLE_PROF') %}
        <li><a href=\"{{ path('lgp_user_prof_cours') }}\" class=\"dashboard-header-link \" title=\"Ce que j'enseigne\">Mes cours</a></li>
        <li><a href=\"{{ path('lgp_user_prof_demandes_de_cours') }}\" class=\"dashboard-header-link \">Mes demandes de cours</a></li>
      
      
        <li><a href=\"#\" class=\"dashboard-header-link \">Mon compte</a>
            <ul id=\"account\">
                <li><a href=\"{{ path('lgp_user_prof_evaluation') }}\">Mes évaluations</a></li>
                <li><a href=\"{{ path('lgp_user_prof_indisponibilite') }}\">Mes indisponibilités</a></li>
                <li><a href=\"{{ path('lgp_user_prof_seance_de_cours') }}\">Mes séances de cours</a></li>
            </ul>
        </li>
        {% endif %}
        <li><a href=\"{{ path('lgp_user_mes_reservations')}}\" class=\"dashboard-header-link \">Mes réservations</a></li>
        <li><a href=\"{{ path('lgp_user_avis')}}\" class=\"dashboard-header-link \">Mes avis</a></li>
    </ul>
  </div>
</div>";
    }
}
