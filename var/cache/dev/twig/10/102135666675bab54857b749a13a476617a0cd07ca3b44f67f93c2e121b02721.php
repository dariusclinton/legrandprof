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
        $__internal_e86bd7ff1c715cfaf562f7adc8fa7dbddb5e35179a224635210e6a0e7d4ec0b3 = $this->env->getExtension("native_profiler");
        $__internal_e86bd7ff1c715cfaf562f7adc8fa7dbddb5e35179a224635210e6a0e7d4ec0b3->enter($__internal_e86bd7ff1c715cfaf562f7adc8fa7dbddb5e35179a224635210e6a0e7d4ec0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header-submenu.html.twig"));

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
      ";
        }
        // line 10
        echo "      
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
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("lgp_user_mes_reservations");
        echo "\" class=\"dashboard-header-link \">Mes réservations</a></li>
    </ul>
  </div>
</div>";
        
        $__internal_e86bd7ff1c715cfaf562f7adc8fa7dbddb5e35179a224635210e6a0e7d4ec0b3->leave($__internal_e86bd7ff1c715cfaf562f7adc8fa7dbddb5e35179a224635210e6a0e7d4ec0b3_prof);

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
        return array (  67 => 19,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  44 => 10,  39 => 8,  34 => 7,  32 => 6,  27 => 4,  22 => 1,);
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
      {% endif %}
      
        <li><a href=\"#\" class=\"dashboard-header-link \">Mon compte</a>
            <ul id=\"account\">
                <li><a href=\"{{ path('lgp_user_dashboard') }}\">Mon profil</a></li>
                <li><a href=\"{{ path('lgp_user_prof_evaluation') }}\">Mes évaluations</a></li>
                <li><a href=\"{{ path('lgp_user_prof_indisponibilite') }}\">Mes indisponibilités</a></li>
                <li><a href=\"{{ path('lgp_user_prof_seance_de_cours') }}\">Mes séances de cours</a></li>
            </ul>
        </li>
        <li><a href=\"{{ path('lgp_user_mes_reservations')}}\" class=\"dashboard-header-link \">Mes réservations</a></li>
    </ul>
  </div>
</div>";
    }
}
