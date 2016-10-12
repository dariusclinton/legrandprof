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
        $__internal_ebeaf93b406db112e6d8406023d1671e1d5c725e7036fd04a3d669ba0bb4eacf = $this->env->getExtension("native_profiler");
        $__internal_ebeaf93b406db112e6d8406023d1671e1d5c725e7036fd04a3d669ba0bb4eacf->enter($__internal_ebeaf93b406db112e6d8406023d1671e1d5c725e7036fd04a3d669ba0bb4eacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebeaf93b406db112e6d8406023d1671e1d5c725e7036fd04a3d669ba0bb4eacf->leave($__internal_ebeaf93b406db112e6d8406023d1671e1d5c725e7036fd04a3d669ba0bb4eacf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14d936829e9085b5190234235ddc5ca0fab218d7fcb9bd86e795e9b612ca45fb = $this->env->getExtension("native_profiler");
        $__internal_14d936829e9085b5190234235ddc5ca0fab218d7fcb9bd86e795e9b612ca45fb->enter($__internal_14d936829e9085b5190234235ddc5ca0fab218d7fcb9bd86e795e9b612ca45fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes évaluations - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_14d936829e9085b5190234235ddc5ca0fab218d7fcb9bd86e795e9b612ca45fb->leave($__internal_14d936829e9085b5190234235ddc5ca0fab218d7fcb9bd86e795e9b612ca45fb_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_61a54babc9cee3f169f5b2bb7fc702292a7f38d31e260670c73048cc238458c8 = $this->env->getExtension("native_profiler");
        $__internal_61a54babc9cee3f169f5b2bb7fc702292a7f38d31e260670c73048cc238458c8->enter($__internal_61a54babc9cee3f169f5b2bb7fc702292a7f38d31e260670c73048cc238458c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_61a54babc9cee3f169f5b2bb7fc702292a7f38d31e260670c73048cc238458c8->leave($__internal_61a54babc9cee3f169f5b2bb7fc702292a7f38d31e260670c73048cc238458c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_92919381bf1d49a9a6947a05589fc27172f2dc88a8a1244a838e0372df472cb5 = $this->env->getExtension("native_profiler");
        $__internal_92919381bf1d49a9a6947a05589fc27172f2dc88a8a1244a838e0372df472cb5->enter($__internal_92919381bf1d49a9a6947a05589fc27172f2dc88a8a1244a838e0372df472cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92919381bf1d49a9a6947a05589fc27172f2dc88a8a1244a838e0372df472cb5->leave($__internal_92919381bf1d49a9a6947a05589fc27172f2dc88a8a1244a838e0372df472cb5_prof);

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
