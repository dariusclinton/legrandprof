<?php

/* LGPUserBundle:SeanceDeCours:index.html.twig */
class __TwigTemplate_64982bb06c25ab007cc98f1421723b701cca64e98440e28039f71f5732d7e33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:index.html.twig", 1);
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
        $__internal_8dc5e84def33e33556f35a9acc6e2f4cb1fa3c6e9ee279cbfe0ff4a0907d5fbf = $this->env->getExtension("native_profiler");
        $__internal_8dc5e84def33e33556f35a9acc6e2f4cb1fa3c6e9ee279cbfe0ff4a0907d5fbf->enter($__internal_8dc5e84def33e33556f35a9acc6e2f4cb1fa3c6e9ee279cbfe0ff4a0907d5fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc5e84def33e33556f35a9acc6e2f4cb1fa3c6e9ee279cbfe0ff4a0907d5fbf->leave($__internal_8dc5e84def33e33556f35a9acc6e2f4cb1fa3c6e9ee279cbfe0ff4a0907d5fbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee7c19dfdf4682cfb4db703c4a79ee340ac0b0b9eb3f10769fa03950334535d0 = $this->env->getExtension("native_profiler");
        $__internal_ee7c19dfdf4682cfb4db703c4a79ee340ac0b0b9eb3f10769fa03950334535d0->enter($__internal_ee7c19dfdf4682cfb4db703c4a79ee340ac0b0b9eb3f10769fa03950334535d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes séances de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ee7c19dfdf4682cfb4db703c4a79ee340ac0b0b9eb3f10769fa03950334535d0->leave($__internal_ee7c19dfdf4682cfb4db703c4a79ee340ac0b0b9eb3f10769fa03950334535d0_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_7a859e1bc9e6e4bf0c9975376c536ff3607aee8946007dd1d4556f940b2df795 = $this->env->getExtension("native_profiler");
        $__internal_7a859e1bc9e6e4bf0c9975376c536ff3607aee8946007dd1d4556f940b2df795->enter($__internal_7a859e1bc9e6e4bf0c9975376c536ff3607aee8946007dd1d4556f940b2df795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_7a859e1bc9e6e4bf0c9975376c536ff3607aee8946007dd1d4556f940b2df795->leave($__internal_7a859e1bc9e6e4bf0c9975376c536ff3607aee8946007dd1d4556f940b2df795_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_feaa12ce76f0cc982eb0b02e5304a045654f229ee118fde670faa866e63185ae = $this->env->getExtension("native_profiler");
        $__internal_feaa12ce76f0cc982eb0b02e5304a045654f229ee118fde670faa866e63185ae->enter($__internal_feaa12ce76f0cc982eb0b02e5304a045654f229ee118fde670faa866e63185ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes séances de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours");
        echo "\">Mes séances de cours</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_add");
        echo "\">Ajouter une séance de cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours"))) <= 0)) {
            // line 27
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                  Aucune séance de cours enregistrée !
                </div>
              </div>
            ";
        } else {
            // line 34
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                    <table class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Jour</th>
                          <th>Date</th>
                          <th>Résumé</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Total</th>
                          <th>Total</th>
                          <th>Total</th>
                          <th>Total</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours")));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 56
                echo "                          <tr>
                          <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["seance"], "jourDeCours", array()), "intitule", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "date", array()), "d/m/y"), "html", null, true);
                echo "</td>
                          <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "resume", array()), "html", null, true);
                echo "</td>
                          <td>
                            <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_delete", array("id" => $this->getAttribute($context["seance"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm delete_confirm\">
                              Supprimer
                            </a>
                            <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_update", array("id" => $this->getAttribute($context["seance"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">
                              Modifier
                            </a>
                          </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                      </tbody>
                    </table>
                </div>
              </div>

            ";
        }
        // line 76
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_feaa12ce76f0cc982eb0b02e5304a045654f229ee118fde670faa866e63185ae->leave($__internal_feaa12ce76f0cc982eb0b02e5304a045654f229ee118fde670faa866e63185ae_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 76,  169 => 70,  157 => 64,  151 => 61,  146 => 59,  142 => 58,  138 => 57,  135 => 56,  131 => 55,  108 => 34,  99 => 27,  97 => 26,  90 => 22,  86 => 21,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes séances de cours - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
    
    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes séances de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_seance_de_cours') }}\">Mes séances de cours</a></li>
              <li><a href=\"{{ path('lgp_user_prof_seance_de_cours_add') }}\">Ajouter une séance de cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if seancesDeCours|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                  Aucune séance de cours enregistrée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                    <table class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Jour</th>
                          <th>Date</th>
                          <th>Résumé</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Total</th>
                          <th>Total</th>
                          <th>Total</th>
                          <th>Total</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        {% for seance in seancesDeCours %}
                          <tr>
                          <td>{{ seance.jourDeCours.intitule }}</td>
                          <td>{{ seance.date|date('d/m/y') }}</td>
                          <td>{{ seance.resume }}</td>
                          <td>
                            <a href=\"{{ path('lgp_user_prof_seance_de_cours_delete', { 'id': seance.id }) }}\" class=\"btn btn-danger btn-sm delete_confirm\">
                              Supprimer
                            </a>
                            <a href=\"{{ path('lgp_user_prof_seance_de_cours_update', { 'id': seance.id }) }}\" class=\"btn btn-info btn-sm\">
                              Modifier
                            </a>
                          </td>
                        </tr>
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
