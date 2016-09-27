<?php

/* LGPUserBundle:Avis:index.html.twig */
class __TwigTemplate_80ed110c6c51c209f69a8322837e9c825b58faa2e05c9d8745d218e40bd99721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:index.html.twig", 1);
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
        $__internal_40aa93f254006b7a021ad83080558c99776859be4593532655337c96368b1b40 = $this->env->getExtension("native_profiler");
        $__internal_40aa93f254006b7a021ad83080558c99776859be4593532655337c96368b1b40->enter($__internal_40aa93f254006b7a021ad83080558c99776859be4593532655337c96368b1b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40aa93f254006b7a021ad83080558c99776859be4593532655337c96368b1b40->leave($__internal_40aa93f254006b7a021ad83080558c99776859be4593532655337c96368b1b40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce2d24c41136573b752d1547ec3a4dea52098f6ce2c9b0ad5a4b42ab1d28a153 = $this->env->getExtension("native_profiler");
        $__internal_ce2d24c41136573b752d1547ec3a4dea52098f6ce2c9b0ad5a4b42ab1d28a153->enter($__internal_ce2d24c41136573b752d1547ec3a4dea52098f6ce2c9b0ad5a4b42ab1d28a153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce2d24c41136573b752d1547ec3a4dea52098f6ce2c9b0ad5a4b42ab1d28a153->leave($__internal_ce2d24c41136573b752d1547ec3a4dea52098f6ce2c9b0ad5a4b42ab1d28a153_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_966c3e2ea2adee5d9d452b2d8e5b8c43a7b95fd902ca7f6607d5a41d8aea3a05 = $this->env->getExtension("native_profiler");
        $__internal_966c3e2ea2adee5d9d452b2d8e5b8c43a7b95fd902ca7f6607d5a41d8aea3a05->enter($__internal_966c3e2ea2adee5d9d452b2d8e5b8c43a7b95fd902ca7f6607d5a41d8aea3a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Vos avis</h1>
  <p>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis_add");
        echo "\" class=\"btn btn-primary\">Ajouter</a>
  </p>

  ";
        // line 14
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 15
            echo "
    <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li class=\"active\"><a href=\"#envoyes\" role=\"tab\" data-toggle=\"tab\">Envoyes</a></li>
      <li>
        <a href=\"#recus\" role=\"tab\" data-toggle=\"tab\">
          Recus <span class=\"badge avis-link\">";
            // line 21
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LGPUserBundle:Avis:index", array("is_read" => "false")));
            echo "</span>
        </a>
      </li>
    </ul>
    <br>

    <!-- Tab panes -->
    <div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"envoyes\">

        ";
            // line 31
            if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
                // line 32
                echo "          <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
        ";
            } else {
                // line 34
                echo "          <table class=\"table table-bordered table-hover table-striped avis-table\">
            <thead>
              <tr>
                <th>Prof</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
                foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                    // line 46
                    echo "                <tr>
                  <td>
                    <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                    echo "</a>
                  </td>
                  <td>
                    <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                    echo "</a>
                  </td>
                  <td>
                    <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                    echo "</a>
                  </td>
                  <td> ";
                    // line 56
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                  <td>
                    <a href='";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                      Supprimer
                    </a>
                    <a href='";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_update", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "' class=\"bt btn-info btn-sm\">
                      Modifier
                    </a>
                  </td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "            </tbody>
          </table>

          <div class='avis-details'></div>

        ";
            }
            // line 73
            echo "      </div> ";
            // line 74
            echo "
      <div class=\"tab-pane\" id=\"recus\">
        ";
            // line 76
            if ((twig_length_filter($this->env, (isset($context["avisReceived"]) ? $context["avisReceived"] : $this->getContext($context, "avisReceived"))) <= 0)) {
                // line 77
                echo "          <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
        ";
            } else {
                // line 79
                echo "          <table class=\"table table-bordered table-hover table-striped avis-table\">
            <thead>
              <tr>
                <th>Prof</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["avisReceived"]) ? $context["avisReceived"] : $this->getContext($context, "avisReceived")));
                foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                    // line 90
                    echo "                <tr>
                  <td>
                    <a href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                    echo "</a>
                  </td>
                  <td>
                    <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                    echo "</a>
                  </td>
                  <td>
                    <a href=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                    echo "</a>
                  </td>
                  <td>";
                    // line 100
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                    echo "
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "            </tbody>
          </table>

          <div class='avis-details'></div>

        ";
            }
            // line 109
            echo "
      </div>";
            // line 111
            echo "    </div>

  ";
            // line 114
            echo "  ";
        } else {
            // line 115
            echo "
    ";
            // line 116
            if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
                // line 117
                echo "      <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
    ";
            } else {
                // line 119
                echo "      <table class=\"table table-bordered table-hover table-striped avis-table\">
        <thead>
          <tr>
            <th>Prof</th>
            <th>Note</th>
            <th>Commentaire</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
                foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                    // line 131
                    echo "            <tr>
              <td>
                <a href=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                    echo "</a>
              </td>
              <td>
                <a href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                    echo "</a>
              </td>
              <td>
                <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\" class=\"show-avis-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                    echo "</a>
              </td>
              <td> ";
                    // line 141
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
              <td>
                <a href='";
                    // line 143
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                  Supprimer
                </a>
                <a href='";
                    // line 146
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_update", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "' class=\"bt btn-info btn-sm\">
                  Modifier
                </a>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "        </tbody>
      </table>

      <div class='avis-details'></div>

    ";
            }
            // line 158
            echo "    
    
  ";
        }
        // line 161
        echo "
";
        
        $__internal_966c3e2ea2adee5d9d452b2d8e5b8c43a7b95fd902ca7f6607d5a41d8aea3a05->leave($__internal_966c3e2ea2adee5d9d452b2d8e5b8c43a7b95fd902ca7f6607d5a41d8aea3a05_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 161,  344 => 158,  336 => 152,  324 => 146,  318 => 143,  313 => 141,  306 => 139,  298 => 136,  288 => 133,  284 => 131,  280 => 130,  267 => 119,  263 => 117,  261 => 116,  258 => 115,  255 => 114,  251 => 111,  248 => 109,  240 => 103,  231 => 100,  224 => 98,  216 => 95,  206 => 92,  202 => 90,  198 => 89,  186 => 79,  182 => 77,  180 => 76,  176 => 74,  174 => 73,  166 => 67,  154 => 61,  148 => 58,  143 => 56,  136 => 54,  128 => 51,  118 => 48,  114 => 46,  110 => 45,  97 => 34,  93 => 32,  91 => 31,  78 => 21,  70 => 15,  67 => 14,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Vos avis</h1>
  <p>
    <a href=\"{{ path('lgp_user_avis_add') }}\" class=\"btn btn-primary\">Ajouter</a>
  </p>

  {# Si l'utilisateur est Prof  #}
  {% if is_granted('ROLE_PROF') %}

    <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li class=\"active\"><a href=\"#envoyes\" role=\"tab\" data-toggle=\"tab\">Envoyes</a></li>
      <li>
        <a href=\"#recus\" role=\"tab\" data-toggle=\"tab\">
          Recus <span class=\"badge avis-link\">{{ render (controller('LGPUserBundle:Avis:index', {'is_read': 'false'})) }}</span>
        </a>
      </li>
    </ul>
    <br>

    <!-- Tab panes -->
    <div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"envoyes\">

        {% if avis|length <= 0 %}
          <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
        {% else %}
          <table class=\"table table-bordered table-hover table-striped avis-table\">
            <thead>
              <tr>
                <th>Prof</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {% for avs in avis %}
                <tr>
                  <td>
                    <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.prof.prenoms }} {{ avs.prof.nom }}</a>
                  </td>
                  <td>
                    <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.note }}</a>
                  </td>
                  <td>
                    <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.commentaire }}</a>
                  </td>
                  <td> {{ avs.dateAvis|date('d/m/Y') }}</td>
                  <td>
                    <a href='{{ path('lgp_user_avis_delete',  {'id': avs.id }) }}' class=\"bt btn-danger btn-sm delete_confirm\">
                      Supprimer
                    </a>
                    <a href='{{ path('lgp_user_avis_update',  {'id': avs.id }) }}' class=\"bt btn-info btn-sm\">
                      Modifier
                    </a>
                  </td>
                </tr>
              {% endfor %}
            </tbody>
          </table>

          <div class='avis-details'></div>

        {% endif %}
      </div> {# end tab-pane recu#}

      <div class=\"tab-pane\" id=\"recus\">
        {% if avisReceived|length <= 0 %}
          <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
        {% else %}
          <table class=\"table table-bordered table-hover table-striped avis-table\">
            <thead>
              <tr>
                <th>Prof</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              {% for avs in avisReceived %}
                <tr>
                  <td>
                    <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.prof.prenoms }} {{ avs.prof.nom }}</a>
                  </td>
                  <td>
                    <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.note }}</a>
                  </td>
                  <td>
                    <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.commentaire }}</a>
                  </td>
                  <td>{{ avs.dateAvis|date('d/m/Y') }}
                </tr>
              {% endfor %}
            </tbody>
          </table>

          <div class='avis-details'></div>

        {% endif %}

      </div>{# end tab-pane recu#}
    </div>

  {# Si l'utilisateur est Parent        #}
  {% else %}

    {% if avis|length <= 0 %}
      <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
    {% else %}
      <table class=\"table table-bordered table-hover table-striped avis-table\">
        <thead>
          <tr>
            <th>Prof</th>
            <th>Note</th>
            <th>Commentaire</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          {% for avs in avis %}
            <tr>
              <td>
                <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.prof.prenoms }} {{ avs.prof.nom }}</a>
              </td>
              <td>
                <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.note }}</a>
              </td>
              <td>
                <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\" class=\"show-avis-link\">{{ avs.commentaire }}</a>
              </td>
              <td> {{ avs.dateAvis|date('d/m/Y') }}</td>
              <td>
                <a href='{{ path('lgp_user_avis_delete',  {'id': avs.id }) }}' class=\"bt btn-danger btn-sm delete_confirm\">
                  Supprimer
                </a>
                <a href='{{ path('lgp_user_avis_update',  {'id': avs.id }) }}' class=\"bt btn-info btn-sm\">
                  Modifier
                </a>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>

      <div class='avis-details'></div>

    {% endif %}
    
    
  {% endif %}

{% endblock %}";
    }
}
