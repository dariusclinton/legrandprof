<?php

/* LGPCoreBundle::header-submenu.html.twig */
class __TwigTemplate_1704bb2f7b38777c61686cf8244e9eb9dfe2a1c94c74e6f4bc949e408b2aa5ae extends Twig_Template
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
        echo "<div class=\"header-dashboard-submenu hidden-xs\">
  <div class=\"wrapper\">
    <ul class=\"desktop-only\" id=\"dash\">
      ";
        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
            // line 5
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_dashboard");
            echo "\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
        ";
        } else {
            // line 7
            echo "          <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_parent_dashboard");
            echo "\" class=\"dashboard-header-link current\">Tableau de bord</a></li>
      ";
        }
        // line 9
        echo "      
      ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_cours");
            echo "\" class=\"dashboard-header-link \" title=\"Ce que j'enseigne\">Mes cours</a></li>
        <li><a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_demandes_de_cours");
            echo "\" class=\"dashboard-header-link \">Mes demandes de cours</a></li>
      
      
        <li><a href=\"#\" class=\"dashboard-header-link \">Mon compte</a>
            <ul id=\"account\">
                <li><a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_evaluation");
            echo "\">Mes évaluations</a></li>
                <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite");
            echo "\">Mes indisponibilités</a></li>
                <li><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_seance_de_cours");
            echo "\">Mes séances de cours</a></li>
            </ul>
        </li>
        ";
        }
        // line 23
        echo "        <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_mes_reservations");
        echo "\" class=\"dashboard-header-link \">Mes réservations</a></li>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis");
        echo "\" class=\"dashboard-header-link \">Mes avis</a></li>
    </ul>
  </div>
</div>";
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
        return array (  76 => 24,  71 => 23,  64 => 19,  60 => 18,  56 => 17,  48 => 12,  43 => 11,  41 => 10,  38 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
