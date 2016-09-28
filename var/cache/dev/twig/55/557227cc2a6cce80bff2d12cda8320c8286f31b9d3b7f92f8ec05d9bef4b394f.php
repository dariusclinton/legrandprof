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
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1104773c6d3996666eb50ae300fa3cbf7a5ff2dee8fe8bc698ae5868adfaab23 = $this->env->getExtension("native_profiler");
        $__internal_1104773c6d3996666eb50ae300fa3cbf7a5ff2dee8fe8bc698ae5868adfaab23->enter($__internal_1104773c6d3996666eb50ae300fa3cbf7a5ff2dee8fe8bc698ae5868adfaab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1104773c6d3996666eb50ae300fa3cbf7a5ff2dee8fe8bc698ae5868adfaab23->leave($__internal_1104773c6d3996666eb50ae300fa3cbf7a5ff2dee8fe8bc698ae5868adfaab23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af81c05555379e5c4430278bafc68f5b3d43be94280e46e6e5d99ca753cfea57 = $this->env->getExtension("native_profiler");
        $__internal_af81c05555379e5c4430278bafc68f5b3d43be94280e46e6e5d99ca753cfea57->enter($__internal_af81c05555379e5c4430278bafc68f5b3d43be94280e46e6e5d99ca753cfea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes réservations - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_af81c05555379e5c4430278bafc68f5b3d43be94280e46e6e5d99ca753cfea57->leave($__internal_af81c05555379e5c4430278bafc68f5b3d43be94280e46e6e5d99ca753cfea57_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_3c6cc8b877069acffbbe0b5ca2a726c7c62560acf04371672498c4e32f55ed4f = $this->env->getExtension("native_profiler");
        $__internal_3c6cc8b877069acffbbe0b5ca2a726c7c62560acf04371672498c4e32f55ed4f->enter($__internal_3c6cc8b877069acffbbe0b5ca2a726c7c62560acf04371672498c4e32f55ed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_3c6cc8b877069acffbbe0b5ca2a726c7c62560acf04371672498c4e32f55ed4f->leave($__internal_3c6cc8b877069acffbbe0b5ca2a726c7c62560acf04371672498c4e32f55ed4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c15cd7e8d2c55892ccebb9dfd3293e117b663a1ecfc0ebbbd8ce5823ec8ea8 = $this->env->getExtension("native_profiler");
        $__internal_23c15cd7e8d2c55892ccebb9dfd3293e117b663a1ecfc0ebbbd8ce5823ec8ea8->enter($__internal_23c15cd7e8d2c55892ccebb9dfd3293e117b663a1ecfc0ebbbd8ce5823ec8ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          
          <div class=\"col-md-12\">
            ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations"))) <= 0)) {
            // line 20
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes réservations</div>
                <div class=\"notifications-content\">
                  Aucune réservation trouvée !
                </div>
              </div>
            ";
        } else {
            // line 27
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes réservations</div>
                <div class=\"notifications-content\">
                    
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
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 49
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reservation"], "reservationEnseignements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["res_ens"]) {
                    // line 50
                    echo "                            <tr>
                              <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "dateReservation", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "classe", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "nbApprenants", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "prof", array()), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "prof", array()), "prenoms", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 56
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["res_ens"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "lieuDeCours", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "ville", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "quartier", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "frequencePaiement", array()), "html", null, true);
                    echo "</td>
                              <td>
                                ";
                    // line 62
                    if ($this->getAttribute($context["reservation"], "isValidee", array())) {
                        // line 63
                        echo "                                  <span class=\"label label-success\">Validée</span>
                                ";
                    } else {
                        // line 65
                        echo "                                  <span class=\"label label-danger\">En attente</span>
                                ";
                    }
                    // line 67
                    echo "                              </td>
                  ";
                    // line 69
                    echo "                            </tr>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res_ens'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                      </tbody>
                    </table>
                </div>
              </div>

            ";
        }
        // line 78
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
 
";
        
        $__internal_23c15cd7e8d2c55892ccebb9dfd3293e117b663a1ecfc0ebbbd8ce5823ec8ea8->leave($__internal_23c15cd7e8d2c55892ccebb9dfd3293e117b663a1ecfc0ebbbd8ce5823ec8ea8_prof);

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
        return array (  207 => 78,  199 => 72,  193 => 71,  186 => 69,  183 => 67,  179 => 65,  175 => 63,  173 => 62,  168 => 60,  164 => 59,  160 => 58,  156 => 57,  152 => 56,  146 => 55,  142 => 54,  138 => 53,  134 => 52,  130 => 51,  127 => 50,  122 => 49,  118 => 48,  95 => 27,  86 => 20,  84 => 19,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes réservations - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
  
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          
          <div class=\"col-md-12\">
            {% if reservations|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes réservations</div>
                <div class=\"notifications-content\">
                  Aucune réservation trouvée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes réservations</div>
                <div class=\"notifications-content\">
                    
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
                </div>
              </div>

            {% endif %}

          </div>
        </div>
      </div>
    </div>
  </div>
 
{% endblock %}";
    }
}
