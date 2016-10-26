<?php

/* LGPUserBundle:Reservation:index.html.twig */
class __TwigTemplate_9f6aaac9ee24b0e33dc0f47d5296eb0ed98fb147d90b4f033f77167d79a5fbea extends Twig_Template
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
        $__internal_20c057aa2b49e03fcb1a2b138e84ec8c35bc252717ec05e7d90ff128813c66fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c057aa2b49e03fcb1a2b138e84ec8c35bc252717ec05e7d90ff128813c66fd->enter($__internal_20c057aa2b49e03fcb1a2b138e84ec8c35bc252717ec05e7d90ff128813c66fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20c057aa2b49e03fcb1a2b138e84ec8c35bc252717ec05e7d90ff128813c66fd->leave($__internal_20c057aa2b49e03fcb1a2b138e84ec8c35bc252717ec05e7d90ff128813c66fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95f3f1c3cc17a9fae6c43665a455b44888e7f5f86a3a0c8dceaf603a37e9190a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f3f1c3cc17a9fae6c43665a455b44888e7f5f86a3a0c8dceaf603a37e9190a->enter($__internal_95f3f1c3cc17a9fae6c43665a455b44888e7f5f86a3a0c8dceaf603a37e9190a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes réservations - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_95f3f1c3cc17a9fae6c43665a455b44888e7f5f86a3a0c8dceaf603a37e9190a->leave($__internal_95f3f1c3cc17a9fae6c43665a455b44888e7f5f86a3a0c8dceaf603a37e9190a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_fbfb7c326125e03a6b7873a0c35ff43a9dec3cec4acc490e1e94d13aa1036093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfb7c326125e03a6b7873a0c35ff43a9dec3cec4acc490e1e94d13aa1036093->enter($__internal_fbfb7c326125e03a6b7873a0c35ff43a9dec3cec4acc490e1e94d13aa1036093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_fbfb7c326125e03a6b7873a0c35ff43a9dec3cec4acc490e1e94d13aa1036093->leave($__internal_fbfb7c326125e03a6b7873a0c35ff43a9dec3cec4acc490e1e94d13aa1036093_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1be27cf1f36ee0db30e369a6d874d74667a1223b7f6b8aaf4bee344ab5a5d2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be27cf1f36ee0db30e369a6d874d74667a1223b7f6b8aaf4bee344ab5a5d2d5->enter($__internal_1be27cf1f36ee0db30e369a6d874d74667a1223b7f6b8aaf4bee344ab5a5d2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                          <th>Autre</th>
                        </tr>
                      </thead> 
                      <tbody>
                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 50
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reservation"], "reservationEnseignements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["res_ens"]) {
                    // line 51
                    echo "                            <tr>
                              <td>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "dateReservation", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "classe", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "nbApprenants", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "prof", array()), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "prof", array()), "prenoms", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 57
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["res_ens"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "lieuDeCours", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "ville", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "quartier", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "frequencePaiement", array()), "html", null, true);
                    echo "</td>
                              <td>
                                ";
                    // line 63
                    if ($this->getAttribute($context["reservation"], "isValidee", array())) {
                        // line 64
                        echo "                                  <span class=\"label label-success\">Validée</span>
                                ";
                    } else {
                        // line 66
                        echo "                                  <span class=\"label label-danger\">En attente</span>
                                ";
                    }
                    // line 68
                    echo "                              </td>
                              <td>
                                <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_programme_et_jours_de_cours_voir", array("id" => $this->getAttribute($context["res_ens"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm\">
                                  Programme & jours de cours
                                </a>
                              </td>
                            </tr>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res_ens'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                      </tbody>
                    </table>
                </div>
              </div>

            ";
        }
        // line 83
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
 
";
        
        $__internal_1be27cf1f36ee0db30e369a6d874d74667a1223b7f6b8aaf4bee344ab5a5d2d5->leave($__internal_1be27cf1f36ee0db30e369a6d874d74667a1223b7f6b8aaf4bee344ab5a5d2d5_prof);

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
        return array (  214 => 83,  206 => 77,  200 => 76,  188 => 70,  184 => 68,  180 => 66,  176 => 64,  174 => 63,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  147 => 56,  143 => 55,  139 => 54,  135 => 53,  131 => 52,  128 => 51,  123 => 50,  119 => 49,  95 => 27,  86 => 20,  84 => 19,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
                          <th>Autre</th>
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
                              <td>
                                <a href=\"{{ path('lgp_user_programme_et_jours_de_cours_voir', {'id': res_ens.id}) }}\" class=\"btn btn-primary btn-sm\">
                                  Programme & jours de cours
                                </a>
                              </td>
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
