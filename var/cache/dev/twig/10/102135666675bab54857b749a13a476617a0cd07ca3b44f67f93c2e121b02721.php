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
        $__internal_37f344fb658cd2293d3c81cf5ed5d77c383bc885f67bd3bfea43a3c460c31ba5 = $this->env->getExtension("native_profiler");
        $__internal_37f344fb658cd2293d3c81cf5ed5d77c383bc885f67bd3bfea43a3c460c31ba5->enter($__internal_37f344fb658cd2293d3c81cf5ed5d77c383bc885f67bd3bfea43a3c460c31ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header-submenu.html.twig"));

        // line 1
        echo "<div class=\"header-dashboard-submenu hidden-xs\">
  <div class=\"wrapper\">
    <ul class=\"desktop-only\" id=\"dash\">
      <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("lgp_user_dashboard");
        echo "\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
      
      ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 7
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours");
            echo "\" class=\"dashboard-header-link \" title=\"Ce que j'enseigne\">Mes cours</a></li>
        <li><a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_demandes_de_cours");
            echo "\" class=\"dashboard-header-link \">Mes demandes de cours</a></li>
      
      
        <li><a href=\"#\" class=\"dashboard-header-link \">Mon compte</a>
            <ul id=\"account\">
                <li><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("lgp_user_dashboard");
            echo "\">Mon profil</a></li>
                <li><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation");
            echo "\">Mes évaluations</a></li>
                <li><a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
            echo "\">Mes indisponibilités</a></li>
                <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours");
            echo "\">Mes séances de cours</a></li>
            </ul>
        </li>
        ";
        }
        // line 20
        echo "        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("lgp_user_mes_reservations");
        echo "\" class=\"dashboard-header-link \">Mes réservations</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis");
        echo "\" class=\"dashboard-header-link \">Mes avis</a></li>
    </ul>
  </div>
</div>";
        
        $__internal_37f344fb658cd2293d3c81cf5ed5d77c383bc885f67bd3bfea43a3c460c31ba5->leave($__internal_37f344fb658cd2293d3c81cf5ed5d77c383bc885f67bd3bfea43a3c460c31ba5_prof);

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
        return array (  71 => 21,  66 => 20,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  39 => 8,  34 => 7,  32 => 6,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"header-dashboard-submenu hidden-xs\">
  <div class=\"wrapper\">
    <ul class=\"desktop-only\" id=\"dash\">
      <li><a href=\"{{ path('lgp_user_dashboard') }}\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
      
      {% if is_granted('ROLE_PROF') %}
        <li><a href=\"{{ path('lgp_user_prof_cours') }}\" class=\"dashboard-header-link \" title=\"Ce que j'enseigne\">Mes cours</a></li>
        <li><a href=\"{{ path('lgp_user_prof_demandes_de_cours') }}\" class=\"dashboard-header-link \">Mes demandes de cours</a></li>
      
      
        <li><a href=\"#\" class=\"dashboard-header-link \">Mon compte</a>
            <ul id=\"account\">
                <li><a href=\"{{ path('lgp_user_dashboard') }}\">Mon profil</a></li>
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
