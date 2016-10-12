<?php

/* LGPUserBundle:Evaluation:index.html.twig */
class __TwigTemplate_170ae2e5cc0d2cdfe2b18bd7dbd8d604bf57d39cebded3cb08491ca72665c782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Evaluation:index.html.twig", 1);
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
        $__internal_4df97b7a22e6cac20fcafe6faba1a8fc0b4bec2ce8d313197051b023e8d1b43d = $this->env->getExtension("native_profiler");
        $__internal_4df97b7a22e6cac20fcafe6faba1a8fc0b4bec2ce8d313197051b023e8d1b43d->enter($__internal_4df97b7a22e6cac20fcafe6faba1a8fc0b4bec2ce8d313197051b023e8d1b43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4df97b7a22e6cac20fcafe6faba1a8fc0b4bec2ce8d313197051b023e8d1b43d->leave($__internal_4df97b7a22e6cac20fcafe6faba1a8fc0b4bec2ce8d313197051b023e8d1b43d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edbae7aff76e0873f1033632e71eaebf3c67f5f85cfc6430d4d8dca36efe71cc = $this->env->getExtension("native_profiler");
        $__internal_edbae7aff76e0873f1033632e71eaebf3c67f5f85cfc6430d4d8dca36efe71cc->enter($__internal_edbae7aff76e0873f1033632e71eaebf3c67f5f85cfc6430d4d8dca36efe71cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes évaluations - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_edbae7aff76e0873f1033632e71eaebf3c67f5f85cfc6430d4d8dca36efe71cc->leave($__internal_edbae7aff76e0873f1033632e71eaebf3c67f5f85cfc6430d4d8dca36efe71cc_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_fde56b14daefba73360782e0e2e8211dcb21ea2d6bd5002ce655eb5393a233e4 = $this->env->getExtension("native_profiler");
        $__internal_fde56b14daefba73360782e0e2e8211dcb21ea2d6bd5002ce655eb5393a233e4->enter($__internal_fde56b14daefba73360782e0e2e8211dcb21ea2d6bd5002ce655eb5393a233e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_fde56b14daefba73360782e0e2e8211dcb21ea2d6bd5002ce655eb5393a233e4->leave($__internal_fde56b14daefba73360782e0e2e8211dcb21ea2d6bd5002ce655eb5393a233e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_019b5d8c4a6f06af4f5156d90cfd5b49842fba2ccf93504755b7abee0288154c = $this->env->getExtension("native_profiler");
        $__internal_019b5d8c4a6f06af4f5156d90cfd5b49842fba2ccf93504755b7abee0288154c->enter($__internal_019b5d8c4a6f06af4f5156d90cfd5b49842fba2ccf93504755b7abee0288154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes évaluations</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation");
        echo "\">Ma liste d'évaluations</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations"))) <= 0)) {
            // line 25
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes évaluations</div>
                <div class=\"notifications-content\">
                  Aucune évaluation trouvée !
                </div>
              </div>
            ";
        } else {
            // line 32
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">

                  <table class=\"table table-striped table-bordered\">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>Durée (heures)</th>
                      <th>Cours</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 49
                echo "                      <tr>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evaluation"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "duree", array()), "html", null, true);
                echo "</td>
                        <td>
                          ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["evaluation"], "reservationEnseignement", array()), "enseignement", array()), "affichage", array()), "html", null, true);
                echo "
                          (<a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($this->getAttribute($context["evaluation"], "reservationEnseignement", array()), "id", array()))), "html", null, true);
                echo "\">éditer</a>)
                        </td>
                        <td>
                          <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation_delete", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
                echo "\"
                             class=\"delete_confirm\">
                            <i class='fa fa-remove'></i>
                          </a>
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </tbody>
                  </table>
                </div>
              </div>

            ";
        }
        // line 70
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_019b5d8c4a6f06af4f5156d90cfd5b49842fba2ccf93504755b7abee0288154c->leave($__internal_019b5d8c4a6f06af4f5156d90cfd5b49842fba2ccf93504755b7abee0288154c_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Evaluation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 70,  159 => 64,  146 => 57,  140 => 54,  136 => 53,  131 => 51,  127 => 50,  124 => 49,  120 => 48,  102 => 32,  93 => 25,  91 => 24,  84 => 20,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes évaluations - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes évaluations</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_evaluation') }}\">Ma liste d'évaluations</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if evaluations|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes évaluations</div>
                <div class=\"notifications-content\">
                  Aucune évaluation trouvée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">

                  <table class=\"table table-striped table-bordered\">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>Durée (heures)</th>
                      <th>Cours</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                    {% for evaluation in evaluations %}
                      <tr>
                        <td>{{ evaluation.date|date('d/m/Y') }}</td>
                        <td>{{ evaluation.duree }}</td>
                        <td>
                          {{ evaluation.reservationEnseignement.enseignement.affichage }}
                          (<a href=\"{{ path('lgp_user_prof_demande_de_cours_edit', {'id': evaluation.reservationEnseignement.id}) }}\">éditer</a>)
                        </td>
                        <td>
                          <a href=\"{{ path('lgp_user_prof_evaluation_delete', { 'id': evaluation.id }) }}\"
                             class=\"delete_confirm\">
                            <i class='fa fa-remove'></i>
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