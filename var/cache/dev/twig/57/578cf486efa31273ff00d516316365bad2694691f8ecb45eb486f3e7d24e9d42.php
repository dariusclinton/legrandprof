<?php

/* LGPUserBundle:Reservation:showProgrammeAndJoursDeCours.html.twig */
class __TwigTemplate_3c09cdc008ad4d550d25ad3b6f4d864671f0ee228596cb703fd75eda920f17b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Reservation:showProgrammeAndJoursDeCours.html.twig", 1);
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
        $__internal_c156e3c38fc7d8db894863919d6d5c39da7aa1e5c38b36831d5deb2127260e60 = $this->env->getExtension("native_profiler");
        $__internal_c156e3c38fc7d8db894863919d6d5c39da7aa1e5c38b36831d5deb2127260e60->enter($__internal_c156e3c38fc7d8db894863919d6d5c39da7aa1e5c38b36831d5deb2127260e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Reservation:showProgrammeAndJoursDeCours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c156e3c38fc7d8db894863919d6d5c39da7aa1e5c38b36831d5deb2127260e60->leave($__internal_c156e3c38fc7d8db894863919d6d5c39da7aa1e5c38b36831d5deb2127260e60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14d0c9a09d6c174d8e375c6e4708ce2e70af30c1b917e5a1eeb3d14805931e53 = $this->env->getExtension("native_profiler");
        $__internal_14d0c9a09d6c174d8e375c6e4708ce2e70af30c1b917e5a1eeb3d14805931e53->enter($__internal_14d0c9a09d6c174d8e375c6e4708ce2e70af30c1b917e5a1eeb3d14805931e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Programme et jours de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_14d0c9a09d6c174d8e375c6e4708ce2e70af30c1b917e5a1eeb3d14805931e53->leave($__internal_14d0c9a09d6c174d8e375c6e4708ce2e70af30c1b917e5a1eeb3d14805931e53_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_15d64e3f9761ec1f4d1776615f3c788a46f3f779041e3466072b71718a4d132f = $this->env->getExtension("native_profiler");
        $__internal_15d64e3f9761ec1f4d1776615f3c788a46f3f779041e3466072b71718a4d132f->enter($__internal_15d64e3f9761ec1f4d1776615f3c788a46f3f779041e3466072b71718a4d132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_15d64e3f9761ec1f4d1776615f3c788a46f3f779041e3466072b71718a4d132f->leave($__internal_15d64e3f9761ec1f4d1776615f3c788a46f3f779041e3466072b71718a4d132f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bca0512ab8944afb6341246e5fd9a1fae18e933ae1882d167c02a11a3ad159be = $this->env->getExtension("native_profiler");
        $__internal_bca0512ab8944afb6341246e5fd9a1fae18e933ae1882d167c02a11a3ad159be->enter($__internal_bca0512ab8944afb6341246e5fd9a1fae18e933ae1882d167c02a11a3ad159be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 border-bottom text-center\">
        <h1 class=\"text-muted\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["reservationEnseignement"]) ? $context["reservationEnseignement"] : $this->getContext($context, "reservationEnseignement")), "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
        echo "</h1>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-2\">
        <h3>Jours de cours</h3>
        ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["joursDeCours"]) ? $context["joursDeCours"] : $this->getContext($context, "joursDeCours"))) <= 0)) {
            // line 24
            echo "          <h5 class=\"text-muted\">Non disponibles !</h5>

        ";
        } else {
            // line 27
            echo "          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Intitulé</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["joursDeCours"]) ? $context["joursDeCours"] : $this->getContext($context, "joursDeCours")));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 35
                echo "              <tr>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "intitule", array()), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </tbody>
          </table>
        ";
        }
        // line 42
        echo "      </div>

      <div class=\"col-md-5\">
        <h3>Programme de cours</h3>
        ";
        // line 46
        if ((twig_length_filter($this->env, (isset($context["entreesProgramme"]) ? $context["entreesProgramme"] : $this->getContext($context, "entreesProgramme"))) <= 0)) {
            // line 47
            echo "          <h5 class=\"text-muted\">Non disponible.</h5>

        ";
        } else {
            // line 50
            echo "          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Partie</th>
              <th>Intitulé</th>
              <th>Type</th>
              <th>Achevé ?</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entreesProgramme"]) ? $context["entreesProgramme"] : $this->getContext($context, "entreesProgramme")));
            foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
                // line 61
                echo "              <tr>
                <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["entree"], "partie", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["entree"], "intitule", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["entree"], "type", array()), "html", null, true);
                echo "</td>
                <td>
                  ";
                // line 66
                if ($this->getAttribute($context["entree"], "isComplete", array())) {
                    // line 67
                    echo "                    <span class=\"label label-primary\">Oui</span>
                  ";
                } else {
                    // line 69
                    echo "                    <span class=\"label label-danger\">Non</span>
                  ";
                }
                // line 71
                echo "                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entree'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            </tbody>
          </table>
        ";
        }
        // line 77
        echo "      </div>

      <div class=\"col-md-3\">
        <h3>Séances de cours</h3>
        ";
        // line 81
        if ((twig_length_filter($this->env, (isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours"))) <= 0)) {
            // line 82
            echo "          <h5 class=\"text-muted\">Non disponible !</h5>

        ";
        } else {
            // line 85
            echo "
          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Date</th>
              <th>Durée</th>
              <th>Resumé</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours")));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 96
                echo "              <tr>
                <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "duree", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "resume", array()), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            </tbody>
          </table>
        ";
        }
        // line 105
        echo "      </div>

      <div class=\"col-md-2\">
        <h3>Evaluations</h3>
        ";
        // line 109
        if ((twig_length_filter($this->env, (isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations"))) <= 0)) {
            // line 110
            echo "          <h5 class=\"text-muted\">Non disponible !</h5>

        ";
        } else {
            // line 113
            echo "
          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Date</th>
              <th>Durée</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 123
                echo "              <tr>
                <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evaluation"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "duree", array()), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </tbody>
          </table>
        ";
        }
        // line 131
        echo "      </div>


    </div>
  </div>
";
        
        $__internal_bca0512ab8944afb6341246e5fd9a1fae18e933ae1882d167c02a11a3ad159be->leave($__internal_bca0512ab8944afb6341246e5fd9a1fae18e933ae1882d167c02a11a3ad159be_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Reservation:showProgrammeAndJoursDeCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 131,  293 => 128,  284 => 125,  280 => 124,  277 => 123,  273 => 122,  262 => 113,  257 => 110,  255 => 109,  249 => 105,  244 => 102,  235 => 99,  231 => 98,  227 => 97,  224 => 96,  220 => 95,  208 => 85,  203 => 82,  201 => 81,  195 => 77,  190 => 74,  182 => 71,  178 => 69,  174 => 67,  172 => 66,  167 => 64,  163 => 63,  159 => 62,  156 => 61,  152 => 60,  140 => 50,  135 => 47,  133 => 46,  127 => 42,  122 => 39,  113 => 36,  110 => 35,  106 => 34,  97 => 27,  92 => 24,  90 => 23,  80 => 16,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Programme et jours de cours - {{ parent() }}
{% endblock %}

{% block header_submenu %}
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 border-bottom text-center\">
        <h1 class=\"text-muted\">{{ reservationEnseignement.enseignement.cours.intitule }}</h1>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-2\">
        <h3>Jours de cours</h3>
        {% if joursDeCours|length <= 0 %}
          <h5 class=\"text-muted\">Non disponibles !</h5>

        {% else %}
          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Intitulé</th>
            </tr>
            </thead>
            <tbody>
            {% for jour in joursDeCours %}
              <tr>
                <td>{{ jour.intitule }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        {% endif %}
      </div>

      <div class=\"col-md-5\">
        <h3>Programme de cours</h3>
        {% if entreesProgramme|length <= 0 %}
          <h5 class=\"text-muted\">Non disponible.</h5>

        {% else %}
          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Partie</th>
              <th>Intitulé</th>
              <th>Type</th>
              <th>Achevé ?</th>
            </tr>
            </thead>
            <tbody>
            {% for entree in entreesProgramme %}
              <tr>
                <td>{{ entree.partie }}</td>
                <td>{{ entree.intitule }}</td>
                <td>{{ entree.type }}</td>
                <td>
                  {% if entree.isComplete %}
                    <span class=\"label label-primary\">Oui</span>
                  {% else %}
                    <span class=\"label label-danger\">Non</span>
                  {% endif %}
                </td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        {% endif %}
      </div>

      <div class=\"col-md-3\">
        <h3>Séances de cours</h3>
        {% if seancesDeCours|length <= 0 %}
          <h5 class=\"text-muted\">Non disponible !</h5>

        {% else %}

          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Date</th>
              <th>Durée</th>
              <th>Resumé</th>
            </tr>
            </thead>
            <tbody>
            {% for seance in seancesDeCours %}
              <tr>
                <td>{{ seance.date|date('d/m/Y') }}</td>
                <td>{{ seance.duree }}</td>
                <td>{{ seance.resume }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        {% endif %}
      </div>

      <div class=\"col-md-2\">
        <h3>Evaluations</h3>
        {% if evaluations|length <= 0 %}
          <h5 class=\"text-muted\">Non disponible !</h5>

        {% else %}

          <table class=\"table table-hover table-striped\">
            <thead>
            <tr>
              <th>Date</th>
              <th>Durée</th>
            </tr>
            </thead>
            <tbody>
            {% for evaluation in evaluations %}
              <tr>
                <td>{{ evaluation.date|date('d/m/Y') }}</td>
                <td>{{ evaluation.duree }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        {% endif %}
      </div>


    </div>
  </div>
{% endblock %}
";
    }
}
