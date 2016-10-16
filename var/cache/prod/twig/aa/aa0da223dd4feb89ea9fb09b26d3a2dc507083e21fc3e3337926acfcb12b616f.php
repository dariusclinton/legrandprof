<?php

/* LGPUserBundle:Avis:index.html.twig */
class __TwigTemplate_50b5b225081e741bf5df8d997c6cb88428f54ea8d41ff05ca198d60bd5ddae78 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Avis - ";
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

            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Mes avis</div>
              <div class=\"notifications-content\">


                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                  <li class=\"active\"><a href=\"#envoyes\" role=\"tab\" data-toggle=\"tab\">Envoyes</a></li>
                  <li>
                    <a href=\"#recus\" role=\"tab\" data-toggle=\"tab\">
                      Recus <span
                          class=\"badge avis-link\">";
        // line 37
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
        // line 47
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : null)) <= 0)) {
            // line 48
            echo "                      <h5 class=\"text-muted\">Aucun avis trouvé !</h5>
                    ";
        } else {
            // line 50
            echo "                      <table class=\"table table-hover table-striped avis-table\">
                        <thead>
                        <tr>
                          <th>Note</th>
                          <th>Commentaire</th>
                          <th>Date</th>
                          <th></th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                // line 62
                echo "                          <tr>
                            <td>
                              <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "\"
                                 class=\"show-avis-link\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                              <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "\"
                                 class=\"show-avis-link\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                echo "</a>
                            </td>
                            <td> ";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>
                              <a href='";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "' class=\"delete_confirm\">
                                <i class='fa fa-remove'></i>
                              </a>
                            </td>
                            <td>
                              <a href='";
                // line 78
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
            // line 84
            echo "                        </tbody>
                      </table>

                    ";
        }
        // line 88
        echo "                  </div> ";
        // line 89
        echo "
                  ";
        // line 91
        echo "                  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 92
            echo "                  <div class=\"tab-pane\" id=\"recus\">
                    ";
            // line 93
            if ((twig_length_filter($this->env, (isset($context["avisReceived"]) ? $context["avisReceived"] : null)) <= 0)) {
                // line 94
                echo "                      <h5 class=\"text-muted\">Aucun avis trouvé !</h5>
                    ";
            } else {
                // line 96
                echo "                      <table class=\"table table-hover table-striped avis-table\">
                        <thead>
                        <tr>
                          <th>Note</th>
                          <th>Commentaire</th>
                          <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["avisReceived"]) ? $context["avisReceived"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                    // line 106
                    echo "                          <tr>
                            <td>
                              <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\"
                                 class=\"show-avis-link\">";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                    echo "</a>
                            </td>
                            <td>
                              <a href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\"
                                 class=\"show-avis-link\">";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                    echo "</a>
                            </td>
                            <td>";
                    // line 115
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avs"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                    echo "
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                        </tbody>
                      </table>

                    ";
            }
            // line 122
            echo "
                  </div>";
            // line 124
            echo "                </div>

                ";
        }
        // line 127
        echo "                
                <div class=\"row\">
                  <div class='avis-details'></div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

";
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
        return array (  254 => 127,  249 => 124,  246 => 122,  240 => 118,  231 => 115,  226 => 113,  222 => 112,  216 => 109,  212 => 108,  208 => 106,  204 => 105,  193 => 96,  189 => 94,  187 => 93,  184 => 92,  181 => 91,  178 => 89,  176 => 88,  170 => 84,  158 => 78,  150 => 73,  145 => 71,  140 => 69,  136 => 68,  130 => 65,  126 => 64,  122 => 62,  118 => 61,  105 => 50,  101 => 48,  99 => 47,  86 => 37,  67 => 21,  63 => 20,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Mes avis</div>
              <div class=\"notifications-content\">


                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                  <li class=\"active\"><a href=\"#envoyes\" role=\"tab\" data-toggle=\"tab\">Envoyes</a></li>
                  <li>
                    <a href=\"#recus\" role=\"tab\" data-toggle=\"tab\">
                      Recus <span
                          class=\"badge avis-link\">{{ render (controller('LGPUserBundle:Avis:index', {'is_read': 'false'})) }}</span>
                    </a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"envoyes\">

                    {% if avis|length <= 0 %}
                      <h5 class=\"text-muted\">Aucun avis trouvé !</h5>
                    {% else %}
                      <table class=\"table table-hover table-striped avis-table\">
                        <thead>
                        <tr>
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
                              <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\"
                                 class=\"show-avis-link\">{{ avs.note }}</a>
                            </td>
                            <td>
                              <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\"
                                 class=\"show-avis-link\">{{ avs.commentaire }}</a>
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

                    {% endif %}
                  </div> {# end tab-pane envoye#}

                  {# Si l'utilisateur est Prof  #}
                  {% if is_granted('ROLE_PROF') %}
                  <div class=\"tab-pane\" id=\"recus\">
                    {% if avisReceived|length <= 0 %}
                      <h5 class=\"text-muted\">Aucun avis trouvé !</h5>
                    {% else %}
                      <table class=\"table table-hover table-striped avis-table\">
                        <thead>
                        <tr>
                          <th>Note</th>
                          <th>Commentaire</th>
                          <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for avs in avisReceived %}
                          <tr>
                            <td>
                              <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\"
                                 class=\"show-avis-link\">{{ avs.note }}</a>
                            </td>
                            <td>
                              <a href=\"{{ path('lgp_user_avis_voir', {'id': avs.id}) }}\"
                                 class=\"show-avis-link\">{{ avs.commentaire }}</a>
                            </td>
                            <td>{{ avs.dateAvis|date('d/m/Y') }}
                          </tr>
                        {% endfor %}
                        </tbody>
                      </table>

                    {% endif %}

                  </div>{# end tab-pane recu#}
                </div>

                {% endif %}
                
                <div class=\"row\">
                  <div class='avis-details'></div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

{% endblock %}";
    }
}
