<?php

/* LGPUserBundle:MesDemandesDeCours:index.html.twig */
class __TwigTemplate_f0aa239eabe732f4ddd29a3fb8d5cc1ef70c5e993516c30923c98523d37f4f64 extends Twig_Template
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
        $__internal_b55e7ac556ced7d7a6fd8e5d9654c9076fc32a513354b0d645453affcec707e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55e7ac556ced7d7a6fd8e5d9654c9076fc32a513354b0d645453affcec707e4->enter($__internal_b55e7ac556ced7d7a6fd8e5d9654c9076fc32a513354b0d645453affcec707e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:MesDemandesDeCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b55e7ac556ced7d7a6fd8e5d9654c9076fc32a513354b0d645453affcec707e4->leave($__internal_b55e7ac556ced7d7a6fd8e5d9654c9076fc32a513354b0d645453affcec707e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef2dd92262e787a07e01b87b1a1759960f495077b887e3910159e2d6489c3a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2dd92262e787a07e01b87b1a1759960f495077b887e3910159e2d6489c3a78->enter($__internal_ef2dd92262e787a07e01b87b1a1759960f495077b887e3910159e2d6489c3a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes demandes de cous - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ef2dd92262e787a07e01b87b1a1759960f495077b887e3910159e2d6489c3a78->leave($__internal_ef2dd92262e787a07e01b87b1a1759960f495077b887e3910159e2d6489c3a78_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_250fcd4f545cadb06e29d6c1814d7c7ca9d6a1bf9bef691eb74d72f7899af55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250fcd4f545cadb06e29d6c1814d7c7ca9d6a1bf9bef691eb74d72f7899af55d->enter($__internal_250fcd4f545cadb06e29d6c1814d7c7ca9d6a1bf9bef691eb74d72f7899af55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_250fcd4f545cadb06e29d6c1814d7c7ca9d6a1bf9bef691eb74d72f7899af55d->leave($__internal_250fcd4f545cadb06e29d6c1814d7c7ca9d6a1bf9bef691eb74d72f7899af55d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5e20e9f4f05f670c62e5027b1ce0d0f98fde794a5a3f73f11d05d43cf1e7d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e20e9f4f05f670c62e5027b1ce0d0f98fde794a5a3f73f11d05d43cf1e7d50->enter($__internal_e5e20e9f4f05f670c62e5027b1ce0d0f98fde794a5a3f73f11d05d43cf1e7d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        </tr>
                      </thead> 
                      <tbody>
                        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservation_enseignements"]) ? $context["reservation_enseignements"] : $this->getContext($context, "reservation_enseignements")));
            foreach ($context['_seq'] as $context["_key"] => $context["res_enseigns"]) {
                // line 47
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["res_enseigns"]);
                foreach ($context['_seq'] as $context["_key"] => $context["res_ens"]) {
                    // line 48
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute($context["res_ens"], "reservation", array()), "isValidee", array())) {
                        // line 49
                        echo "                              <tr>
                                <td>
                                  <a href=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($context["res_ens"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["res_ens"], "reservation", array()), "dateReservation", array()), "d/m/Y"), "html", null, true);
                        echo "</a>
                                </td>
                                <td>
                                  <a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($context["res_ens"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res_ens"], "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                </td>
                                <td>
                                  <a href=\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($context["res_ens"], "id", array()))), "html", null, true);
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
                              </tr>
                            ";
                    }
                    // line 67
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res_ens'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res_enseigns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                      </tbody>
                    </table>
                </div>
              </div>

            ";
        }
        // line 75
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_e5e20e9f4f05f670c62e5027b1ce0d0f98fde794a5a3f73f11d05d43cf1e7d50->leave($__internal_e5e20e9f4f05f670c62e5027b1ce0d0f98fde794a5a3f73f11d05d43cf1e7d50_prof);

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
        return array (  201 => 75,  193 => 69,  187 => 68,  181 => 67,  175 => 64,  171 => 63,  167 => 62,  163 => 61,  159 => 60,  155 => 59,  148 => 57,  140 => 54,  132 => 51,  128 => 49,  125 => 48,  120 => 47,  116 => 46,  95 => 27,  86 => 20,  84 => 19,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
                        </tr>
                      </thead> 
                      <tbody>
                        {% for res_enseigns in reservation_enseignements %}
                          {% for res_ens in res_enseigns %}
                            {% if res_ens.reservation.isValidee %}
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
                              </tr>
                            {% endif %}
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
