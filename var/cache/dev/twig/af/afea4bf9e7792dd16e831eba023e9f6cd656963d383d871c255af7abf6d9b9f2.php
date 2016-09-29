<?php

/* LGPUserBundle:MesDemandesDeCours:index.html.twig */
class __TwigTemplate_7245047c2e4cdaaebb9ed473545a1d985009b5cb68045530871f72e746f12c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:MesDemandesDeCours:index.html.twig", 1);
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
        $__internal_3c67e1ce6f4adc7eec16a7be36d5fdc4437e18b26b024f272fdcca74ea36a1e0 = $this->env->getExtension("native_profiler");
        $__internal_3c67e1ce6f4adc7eec16a7be36d5fdc4437e18b26b024f272fdcca74ea36a1e0->enter($__internal_3c67e1ce6f4adc7eec16a7be36d5fdc4437e18b26b024f272fdcca74ea36a1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:MesDemandesDeCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c67e1ce6f4adc7eec16a7be36d5fdc4437e18b26b024f272fdcca74ea36a1e0->leave($__internal_3c67e1ce6f4adc7eec16a7be36d5fdc4437e18b26b024f272fdcca74ea36a1e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54bfc47b34138fb58c66441872d3105af3989a2987b3c0ef234cd7aa326f1753 = $this->env->getExtension("native_profiler");
        $__internal_54bfc47b34138fb58c66441872d3105af3989a2987b3c0ef234cd7aa326f1753->enter($__internal_54bfc47b34138fb58c66441872d3105af3989a2987b3c0ef234cd7aa326f1753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes demandes de cous - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_54bfc47b34138fb58c66441872d3105af3989a2987b3c0ef234cd7aa326f1753->leave($__internal_54bfc47b34138fb58c66441872d3105af3989a2987b3c0ef234cd7aa326f1753_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0421ba6d9622a612d16cfea24eb400c1ba34acd3a9cab4e5433ec2d4eb914927 = $this->env->getExtension("native_profiler");
        $__internal_0421ba6d9622a612d16cfea24eb400c1ba34acd3a9cab4e5433ec2d4eb914927->enter($__internal_0421ba6d9622a612d16cfea24eb400c1ba34acd3a9cab4e5433ec2d4eb914927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0421ba6d9622a612d16cfea24eb400c1ba34acd3a9cab4e5433ec2d4eb914927->leave($__internal_0421ba6d9622a612d16cfea24eb400c1ba34acd3a9cab4e5433ec2d4eb914927_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8816e28e3707de791d16d6e37ac6e81f9aaf1c6ad20e189bb09f3f761d3232cd = $this->env->getExtension("native_profiler");
        $__internal_8816e28e3707de791d16d6e37ac6e81f9aaf1c6ad20e189bb09f3f761d3232cd->enter($__internal_8816e28e3707de791d16d6e37ac6e81f9aaf1c6ad20e189bb09f3f761d3232cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          
          <div class=\"col-md-12\">
            ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["reservation_enseignements"]) ? $context["reservation_enseignements"] : $this->getContext($context, "reservation_enseignements"))) <= 0)) {
            // line 20
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes demandes de cours</div>
                <div class=\"notifications-content\">
                  Aucune demande de cours trouvée !
                </div>
              </div>
            ";
        } else {
            // line 27
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes demandes de cours</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-bordered table-stripped\">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Cours</th>
                          <th>Classe</th>
                          <th>Nombre d'apprenants</th>
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
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservation_enseignements"]) ? $context["reservation_enseignements"] : $this->getContext($context, "reservation_enseignements")));
            foreach ($context['_seq'] as $context["_key"] => $context["res_enseigns"]) {
                // line 48
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["res_enseigns"]);
                foreach ($context['_seq'] as $context["_key"] => $context["res_ens"]) {
                    // line 49
                    echo "                            <tr>
                              <td>
                                <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($context["res_ens"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["res_ens"], "reservation", array()), "dateReservation", array()), "d/m/Y"), "html", null, true);
                    echo "</a>
                              </td>
                              <td>
                                <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($context["res_ens"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
                    echo "</a>
                              </td>
                              <td>
                                <a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($context["res_ens"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "classe", array()), "html", null, true);
                    echo "</a>
                              </td>
                              <td>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "nbApprenants", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["res_ens"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "lieuDeCours", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "ville", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res_ens"], "quartier", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res_ens"], "reservation", array()), "frequencePaiement", array()), "html", null, true);
                    echo "</td>
                              <td>
                                ";
                    // line 66
                    if ($this->getAttribute($this->getAttribute($context["res_ens"], "reservation", array()), "isValidee", array())) {
                        // line 67
                        echo "                                  <span class=\"label label-success\">Validée</span>
                                ";
                    } else {
                        // line 69
                        echo "                                  <span class=\"label label-danger\">En attente</span>
                                ";
                    }
                    // line 71
                    echo "                              </td>
                            </tr>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res_ens'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res_enseigns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                      </tbody>
                    </table>
                </div>
              </div>

            ";
        }
        // line 81
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_8816e28e3707de791d16d6e37ac6e81f9aaf1c6ad20e189bb09f3f761d3232cd->leave($__internal_8816e28e3707de791d16d6e37ac6e81f9aaf1c6ad20e189bb09f3f761d3232cd_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:MesDemandesDeCours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 81,  202 => 75,  196 => 74,  188 => 71,  184 => 69,  180 => 67,  178 => 66,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  153 => 59,  146 => 57,  138 => 54,  130 => 51,  126 => 49,  121 => 48,  117 => 47,  95 => 27,  86 => 20,  84 => 19,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes demandes de cous - {{ parent() }}
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
            {% if reservation_enseignements|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes demandes de cours</div>
                <div class=\"notifications-content\">
                  Aucune demande de cours trouvée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes demandes de cours</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-bordered table-stripped\">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Cours</th>
                          <th>Classe</th>
                          <th>Nombre d'apprenants</th>
                          <th>Début</th>
                          <th>Lieu de cours</th>
                          <th>Ville</th>
                          <th>Quartier</th>
                          <th>Fréquence de paiement</th>
                          <th>Status</th>
                        </tr>
                      </thead> 
                      <tbody>
                        {% for res_enseigns in reservation_enseignements %}
                          {% for res_ens in res_enseigns %}
                            <tr>
                              <td>
                                <a href=\"{{ path('lgp_user_prof_demande_de_cours_edit', {'id': res_ens.id}) }}\">{{ res_ens.reservation.dateReservation|date('d/m/Y') }}</a>
                              </td>
                              <td>
                                <a href=\"{{ path('lgp_user_prof_demande_de_cours_edit', {'id': res_ens.id}) }}\">{{ res_ens.enseignement.cours.intitule }}</a>
                              </td>
                              <td>
                                <a href=\"{{ path('lgp_user_prof_demande_de_cours_edit', {'id': res_ens.id}) }}\">{{ res_ens.enseignement.classe }}</a>
                              </td>
                              <td>{{ res_ens.nbApprenants }}</td>
                              <td>{{ res_ens.dateDebut|date('d/m/Y') }}</td>
                              <td>{{ res_ens.lieuDeCours }}</td>
                              <td>{{ res_ens.ville }}</td>
                              <td>{{ res_ens.quartier }}</td>
                              <td>{{ res_ens.reservation.frequencePaiement }}</td>
                              <td>
                                {% if res_ens.reservation.isValidee %}
                                  <span class=\"label label-success\">Validée</span>
                                {% else %}
                                  <span class=\"label label-danger\">En attente</span>
                                {% endif %}
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
