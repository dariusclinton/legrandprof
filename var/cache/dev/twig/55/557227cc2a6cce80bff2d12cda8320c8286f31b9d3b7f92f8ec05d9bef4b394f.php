<?php

/* LGPUserBundle:Reservation:index.html.twig */
class __TwigTemplate_07f4433cb669ef0865c5ed0e8041eb4e44cf23f0818c89ff6d5832541b4caaa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Reservation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b236959c94a0bf7b398e014d4473b0e351341ca56ce1ec247a26bd62957ef2eb = $this->env->getExtension("native_profiler");
        $__internal_b236959c94a0bf7b398e014d4473b0e351341ca56ce1ec247a26bd62957ef2eb->enter($__internal_b236959c94a0bf7b398e014d4473b0e351341ca56ce1ec247a26bd62957ef2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b236959c94a0bf7b398e014d4473b0e351341ca56ce1ec247a26bd62957ef2eb->leave($__internal_b236959c94a0bf7b398e014d4473b0e351341ca56ce1ec247a26bd62957ef2eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_082ac52709392e2941250a18d590d5715eff0fb79a6d5a3224070241b783b3e3 = $this->env->getExtension("native_profiler");
        $__internal_082ac52709392e2941250a18d590d5715eff0fb79a6d5a3224070241b783b3e3->enter($__internal_082ac52709392e2941250a18d590d5715eff0fb79a6d5a3224070241b783b3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes réservations - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_082ac52709392e2941250a18d590d5715eff0fb79a6d5a3224070241b783b3e3->leave($__internal_082ac52709392e2941250a18d590d5715eff0fb79a6d5a3224070241b783b3e3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc45d85a31f1dd30e0295b12096129ddb7724601df608c87f6f96330999d07c1 = $this->env->getExtension("native_profiler");
        $__internal_cc45d85a31f1dd30e0295b12096129ddb7724601df608c87f6f96330999d07c1->enter($__internal_cc45d85a31f1dd30e0295b12096129ddb7724601df608c87f6f96330999d07c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mes réservations</h1>
    
  <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_course_find");
        echo "\" class=\"btn btn-primary\">Rechercher un prof</a>
 
  ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations"))) <= 0)) {
            // line 14
            echo "    
    <h4 class=\"text-muted\">Vous n'avez encore effectué aucune réservation</h4>
  
  ";
        } else {
            // line 18
            echo "  
    <table class=\"table table-bordered table-stripped\">
      <thead>
        <tr>
          <th>Date</th>
          <th>Cours</th>
          <th>Classe</th>
          <th>Nombre d'apprenants</th>
          <th>Prof</th>
          <th>Début</th>
          <th>Lieu de cours</th>
          <th>Ville</th>
          <th>Quartier</th>
          <th>Fréquence de paiement</th>
          <th>Status</th>
        </tr>
      </thead> 
      <tbody>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 37
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reservation"], "reservationEnseignements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["res_ens"]) {
                    // line 38
                    echo "            <tr>
              <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "dateReservation", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
              <td>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "classe", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "nbApprenants", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "prof", array()), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "prof", array()), "prenoms", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 44
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["res_ens"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
              <td>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "lieuDeCours", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "ville", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "quartier", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "frequencePaiement", array()), "html", null, true);
                    echo "</td>
              <td>
                ";
                    // line 50
                    if ($this->getAttribute($context["reservation"], "isValidee", array())) {
                        // line 51
                        echo "                  <span class=\"label label-success\">Validée</span>
                ";
                    } else {
                        // line 53
                        echo "                  <span class=\"label label-danger\">En attente</span>
                ";
                    }
                    // line 55
                    echo "              </td>
  ";
                    // line 57
                    echo "            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res_ens'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "      </tbody>
    </table>
    
  ";
        }
        // line 64
        echo "  
";
        
        $__internal_cc45d85a31f1dd30e0295b12096129ddb7724601df608c87f6f96330999d07c1->leave($__internal_cc45d85a31f1dd30e0295b12096129ddb7724601df608c87f6f96330999d07c1_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  176 => 60,  170 => 59,  163 => 57,  160 => 55,  156 => 53,  152 => 51,  150 => 50,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  129 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  104 => 38,  99 => 37,  95 => 36,  75 => 18,  69 => 14,  67 => 13,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes réservations - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Mes réservations</h1>
    
  <a href=\"{{ path('lgp_course_find') }}\" class=\"btn btn-primary\">Rechercher un prof</a>
 
  {% if reservations|length <= 0 %}
    
    <h4 class=\"text-muted\">Vous n'avez encore effectué aucune réservation</h4>
  
  {% else %}
  
    <table class=\"table table-bordered table-stripped\">
      <thead>
        <tr>
          <th>Date</th>
          <th>Cours</th>
          <th>Classe</th>
          <th>Nombre d'apprenants</th>
          <th>Prof</th>
          <th>Début</th>
          <th>Lieu de cours</th>
          <th>Ville</th>
          <th>Quartier</th>
          <th>Fréquence de paiement</th>
          <th>Status</th>
        </tr>
      </thead> 
      <tbody>
        {% for reservation in reservations %}
          {% for res_ens in reservation.reservationEnseignements %}
            <tr>
              <td>{{ reservation.dateReservation|date('d/m/Y') }}</td>
              <td>{{ res_ens.enseignement.cours.intitule }}</td>
              <td>{{ res_ens.enseignement.classe }}</td>
              <td>{{ res_ens.nbApprenants }}</td>
              <td>{{ res_ens.enseignement.prof.nom }} {{ res_ens.enseignement.prof.prenoms }}</td>
              <td>{{ res_ens.dateDebut|date('d/m/Y') }}</td>
              <td>{{ res_ens.lieuDeCours }}</td>
              <td>{{ res_ens.ville }}</td>
              <td>{{ res_ens.quartier }}</td>
              <td>{{ reservation.frequencePaiement }}</td>
              <td>
                {% if reservation.isValidee %}
                  <span class=\"label label-success\">Validée</span>
                {% else %}
                  <span class=\"label label-danger\">En attente</span>
                {% endif %}
              </td>
  {#            <td></td>#}
            </tr>
          {% endfor %}
        {% endfor %}
      </tbody>
    </table>
    
  {% endif %}
  
{% endblock %}";
    }
}
