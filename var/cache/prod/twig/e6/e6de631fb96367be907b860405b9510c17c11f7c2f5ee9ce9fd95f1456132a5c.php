<?php

/* LGPUserBundle:Reservation:showProgrammeAndJoursDeCours.html.twig */
class __TwigTemplate_80592da85605a4e086f207336271e2e76ab079fdc32c5a8c3835e9c98344f01f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Programme et jours de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 border-bottom text-center\">
        <h1 class=\"text-muted\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["reservationEnseignement"]) ? $context["reservationEnseignement"] : null), "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
        echo "</h1>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-2\">
        <h3>Jours de cours</h3>
        ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["joursDeCours"]) ? $context["joursDeCours"] : null)) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["joursDeCours"]) ? $context["joursDeCours"] : null));
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
        if ((twig_length_filter($this->env, (isset($context["entreesProgramme"]) ? $context["entreesProgramme"] : null)) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["entreesProgramme"]) ? $context["entreesProgramme"] : null));
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
        if ((twig_length_filter($this->env, (isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : null)) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : null));
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
        if ((twig_length_filter($this->env, (isset($context["evaluations"]) ? $context["evaluations"] : null)) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : null));
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
        return array (  277 => 131,  272 => 128,  263 => 125,  259 => 124,  256 => 123,  252 => 122,  241 => 113,  236 => 110,  234 => 109,  228 => 105,  223 => 102,  214 => 99,  210 => 98,  206 => 97,  203 => 96,  199 => 95,  187 => 85,  182 => 82,  180 => 81,  174 => 77,  169 => 74,  161 => 71,  157 => 69,  153 => 67,  151 => 66,  146 => 64,  142 => 63,  138 => 62,  135 => 61,  131 => 60,  119 => 50,  114 => 47,  112 => 46,  106 => 42,  101 => 39,  92 => 36,  89 => 35,  85 => 34,  76 => 27,  71 => 24,  69 => 23,  59 => 16,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
