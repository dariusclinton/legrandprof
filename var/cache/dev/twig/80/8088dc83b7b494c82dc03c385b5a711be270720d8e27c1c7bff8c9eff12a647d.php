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
        $__internal_7e3f5b3314077d784832e578232a700e5abaa698c69977b552df0e5ff21684c5 = $this->env->getExtension("native_profiler");
        $__internal_7e3f5b3314077d784832e578232a700e5abaa698c69977b552df0e5ff21684c5->enter($__internal_7e3f5b3314077d784832e578232a700e5abaa698c69977b552df0e5ff21684c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e3f5b3314077d784832e578232a700e5abaa698c69977b552df0e5ff21684c5->leave($__internal_7e3f5b3314077d784832e578232a700e5abaa698c69977b552df0e5ff21684c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_008e7e675bc537c718b59794bfe9f90065448b21b0e987d681314c559a86044e = $this->env->getExtension("native_profiler");
        $__internal_008e7e675bc537c718b59794bfe9f90065448b21b0e987d681314c559a86044e->enter($__internal_008e7e675bc537c718b59794bfe9f90065448b21b0e987d681314c559a86044e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_008e7e675bc537c718b59794bfe9f90065448b21b0e987d681314c559a86044e->leave($__internal_008e7e675bc537c718b59794bfe9f90065448b21b0e987d681314c559a86044e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_ee7e4f48b5cac190b886432dce97ef803efc713cb8b45e1343b210252a2a4a88 = $this->env->getExtension("native_profiler");
        $__internal_ee7e4f48b5cac190b886432dce97ef803efc713cb8b45e1343b210252a2a4a88->enter($__internal_ee7e4f48b5cac190b886432dce97ef803efc713cb8b45e1343b210252a2a4a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_ee7e4f48b5cac190b886432dce97ef803efc713cb8b45e1343b210252a2a4a88->leave($__internal_ee7e4f48b5cac190b886432dce97ef803efc713cb8b45e1343b210252a2a4a88_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62ad83b38bf1e2df235262c212fd364f8470e28c712e78f1a8d179d3ac005742 = $this->env->getExtension("native_profiler");
        $__internal_62ad83b38bf1e2df235262c212fd364f8470e28c712e78f1a8d179d3ac005742->enter($__internal_62ad83b38bf1e2df235262c212fd364f8470e28c712e78f1a8d179d3ac005742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis");
        echo "\">Mes avis</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis_add");
        echo "\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
            // line 26
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes avis</div>
                <div class=\"notifications-content\">
                    Vous n'avez encore donné aucun avis !
                </div>
              </div>
            ";
        } else {
            // line 33
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes avis</div>
                <div class=\"notifications-content\">
                    
                    ";
            // line 38
            echo "                    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                // line 39
                echo "
                      <!-- Nav tabs -->
                      <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"active\"><a href=\"#envoyes\" role=\"tab\" data-toggle=\"tab\">Envoyes</a></li>
                        <li>
                          <a href=\"#recus\" role=\"tab\" data-toggle=\"tab\">
                            Recus <span class=\"badge avis-link\">";
                // line 45
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
                // line 55
                if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
                    // line 56
                    echo "                            <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
                          ";
                } else {
                    // line 58
                    echo "                            <table class=\"table table-hover table-striped avis-table\">
                              <thead>
                                <tr>
                                  <th>Prof</th>
                                  <th>Note</th>
                                  <th>Commentaire</th>
                                  <th>Date</th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
                    foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                        // line 71
                        echo "                                  <tr>
                                    <td>
                                      <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                        echo "</a>
                                    </td>
                                    <td>
                                      <a href=\"";
                        // line 76
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                        echo "</a>
                                    </td>
                                    <td>
                                      <a href=\"";
                        // line 79
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                        echo "</a>
                                    </td>
                                    <td> ";
                        // line 81
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                    <td>
                                      <a href='";
                        // line 83
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "' class=\"delete_confirm\">
                                          <i class='fa fa-remove'></i>
                                      </a>
                                    </td>
                                    <td>
                                      <a href='";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_update", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "' class=\"\">
                                          <i class='fa fa-edit'></i>
                                      </a>
                                    </td>
                                  </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "                              </tbody>
                            </table>

                            <div class='avis-details'></div>

                          ";
                }
                // line 100
                echo "                        </div> ";
                // line 101
                echo "
                        <div class=\"tab-pane\" id=\"recus\">
                          ";
                // line 103
                if ((twig_length_filter($this->env, (isset($context["avisReceived"]) ? $context["avisReceived"] : $this->getContext($context, "avisReceived"))) <= 0)) {
                    // line 104
                    echo "                            <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
                          ";
                } else {
                    // line 106
                    echo "                            <table class=\"table table-hover table-striped avis-table\">
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
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["avisReceived"]) ? $context["avisReceived"] : $this->getContext($context, "avisReceived")));
                    foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                        // line 117
                        echo "                                  <tr>
                                    <td>
                                      <a href=\"";
                        // line 119
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                        echo "</a>
                                    </td>
                                    <td>
                                      <a href=\"";
                        // line 122
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                        echo "</a>
                                    </td>
                                    <td>
                                      <a href=\"";
                        // line 125
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                        echo "</a>
                                    </td>
                                    <td>";
                        // line 127
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                        echo "
                                  </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "                              </tbody>
                            </table>

                            <div class='avis-details'></div>

                          ";
                }
                // line 136
                echo "
                        </div>";
                // line 138
                echo "                      </div>

                    ";
                // line 141
                echo "                    ";
            } else {
                // line 142
                echo "
                      ";
                // line 143
                if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
                    // line 144
                    echo "                        <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
                      ";
                } else {
                    // line 146
                    echo "                        <table class=\"table table-hover table-striped avis-table\">
                          <thead>
                            <tr>
                              <th>Prof</th>
                              <th>Note</th>
                              <th>Commentaire</th>
                              <th>Date</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            ";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
                    foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                        // line 159
                        echo "                              <tr>
                                <td>
                                  <a href=\"";
                        // line 161
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                        echo "</a>
                                </td>
                                <td>
                                  <a href=\"";
                        // line 164
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                        echo "</a>
                                </td>
                                <td>
                                  <a href=\"";
                        // line 167
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "\" class=\"show-avis-link\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                        echo "</a>
                                </td>
                                <td> ";
                        // line 169
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td>
                                  <a href='";
                        // line 171
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_update", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "' class=\"\">
                                      <i class='fa fa-edit'></i>
                                  </a>
                                </td>
                                <td>
                                  <a href='";
                        // line 176
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                        echo "' class=\" delete_confirm\">
                                      <i class='fa fa-remove'></i>
                                  </a>
                                </td>
                              </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "                          </tbody>
                        </table>

                        <div class='avis-details'></div>

                      ";
                }
                // line 188
                echo "

                    ";
            }
            // line 191
            echo "                </div>
              </div>

            ";
        }
        // line 195
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_62ad83b38bf1e2df235262c212fd364f8470e28c712e78f1a8d179d3ac005742->leave($__internal_62ad83b38bf1e2df235262c212fd364f8470e28c712e78f1a8d179d3ac005742_prof);

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
        return array (  407 => 195,  401 => 191,  396 => 188,  388 => 182,  376 => 176,  368 => 171,  363 => 169,  356 => 167,  348 => 164,  338 => 161,  334 => 159,  330 => 158,  316 => 146,  312 => 144,  310 => 143,  307 => 142,  304 => 141,  300 => 138,  297 => 136,  289 => 130,  280 => 127,  273 => 125,  265 => 122,  255 => 119,  251 => 117,  247 => 116,  235 => 106,  231 => 104,  229 => 103,  225 => 101,  223 => 100,  215 => 94,  203 => 88,  195 => 83,  190 => 81,  183 => 79,  175 => 76,  165 => 73,  161 => 71,  157 => 70,  143 => 58,  139 => 56,  137 => 55,  124 => 45,  116 => 39,  113 => 38,  107 => 33,  98 => 26,  96 => 25,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Avis - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_avis') }}\">Mes avis</a></li>
              <li><a href=\"{{ path('lgp_user_avis_add') }}\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if avis|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes avis</div>
                <div class=\"notifications-content\">
                    Vous n'avez encore donné aucun avis !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes avis</div>
                <div class=\"notifications-content\">
                    
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
                            <table class=\"table table-hover table-striped avis-table\">
                              <thead>
                                <tr>
                                  <th>Prof</th>
                                  <th>Note</th>
                                  <th>Commentaire</th>
                                  <th>Date</th>
                                  <th></th>
                                  <th></th>
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
                                      <a href='{{ path('lgp_user_avis_delete',  {'id': avs.id }) }}' class=\"delete_confirm\">
                                          <i class='fa fa-remove'></i>
                                      </a>
                                    </td>
                                    <td>
                                      <a href='{{ path('lgp_user_avis_update',  {'id': avs.id }) }}' class=\"\">
                                          <i class='fa fa-edit'></i>
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
                            <table class=\"table table-hover table-striped avis-table\">
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
                        <table class=\"table table-hover table-striped avis-table\">
                          <thead>
                            <tr>
                              <th>Prof</th>
                              <th>Note</th>
                              <th>Commentaire</th>
                              <th>Date</th>
                              <th></th>
                              <th></th>
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
                                  <a href='{{ path('lgp_user_avis_update',  {'id': avs.id }) }}' class=\"\">
                                      <i class='fa fa-edit'></i>
                                  </a>
                                </td>
                                <td>
                                  <a href='{{ path('lgp_user_avis_delete',  {'id': avs.id }) }}' class=\" delete_confirm\">
                                      <i class='fa fa-remove'></i>
                                  </a>
                                </td>
                              </tr>
                            {% endfor %}
                          </tbody>
                        </table>

                        <div class='avis-details'></div>

                      {% endif %}


                    {% endif %}
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
