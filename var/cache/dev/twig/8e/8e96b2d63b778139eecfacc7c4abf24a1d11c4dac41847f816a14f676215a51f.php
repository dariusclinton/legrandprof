<?php

/* LGPUserBundle:Avis:index.html.twig */
class __TwigTemplate_6d2abe48a838ad0616fc43d71c5ac77c03ad8818cb976d8772c9a54f67c0bdfc extends Twig_Template
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
        $__internal_dde764686be3302ab1078084714065624f3de84cf24aa967bff1d2349d77579d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde764686be3302ab1078084714065624f3de84cf24aa967bff1d2349d77579d->enter($__internal_dde764686be3302ab1078084714065624f3de84cf24aa967bff1d2349d77579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde764686be3302ab1078084714065624f3de84cf24aa967bff1d2349d77579d->leave($__internal_dde764686be3302ab1078084714065624f3de84cf24aa967bff1d2349d77579d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dbb3814c826ce4500e5c5b1911edf92e9dc807ed0855d1ae0a94f03893ef091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbb3814c826ce4500e5c5b1911edf92e9dc807ed0855d1ae0a94f03893ef091->enter($__internal_5dbb3814c826ce4500e5c5b1911edf92e9dc807ed0855d1ae0a94f03893ef091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5dbb3814c826ce4500e5c5b1911edf92e9dc807ed0855d1ae0a94f03893ef091->leave($__internal_5dbb3814c826ce4500e5c5b1911edf92e9dc807ed0855d1ae0a94f03893ef091_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_58c51b21d4825810854fffbee11f7559035fa72108d34c51deeb27e93fc8268f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c51b21d4825810854fffbee11f7559035fa72108d34c51deeb27e93fc8268f->enter($__internal_58c51b21d4825810854fffbee11f7559035fa72108d34c51deeb27e93fc8268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_58c51b21d4825810854fffbee11f7559035fa72108d34c51deeb27e93fc8268f->leave($__internal_58c51b21d4825810854fffbee11f7559035fa72108d34c51deeb27e93fc8268f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a0c4d76d59dc64da562f53229841f01cfadb555624ed45b503fc12c218722d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0c4d76d59dc64da562f53229841f01cfadb555624ed45b503fc12c218722d4->enter($__internal_4a0c4d76d59dc64da562f53229841f01cfadb555624ed45b503fc12c218722d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis");
        echo "\">Mes avis</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_add");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("LGPUserBundle:Avis:index", array("is_read" => "false")));
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
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
            foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                // line 62
                echo "                          <tr>
                            <td>
                              <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "\"
                                 class=\"show-avis-link\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                              <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "' class=\"delete_confirm\">
                                <i class='fa fa-remove'></i>
                              </a>
                            </td>
                            <td>
                              <a href='";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_update", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
            // line 92
            echo "                  <div class=\"tab-pane\" id=\"recus\">
                    ";
            // line 93
            if ((twig_length_filter($this->env, (isset($context["avisReceived"]) ? $context["avisReceived"] : $this->getContext($context, "avisReceived"))) <= 0)) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["avisReceived"]) ? $context["avisReceived"] : $this->getContext($context, "avisReceived")));
                foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                    // line 106
                    echo "                          <tr>
                            <td>
                              <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                    echo "\"
                                 class=\"show-avis-link\">";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                    echo "</a>
                            </td>
                            <td>
                              <a href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_voir", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
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
        
        $__internal_4a0c4d76d59dc64da562f53229841f01cfadb555624ed45b503fc12c218722d4->leave($__internal_4a0c4d76d59dc64da562f53229841f01cfadb555624ed45b503fc12c218722d4_prof);

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
        return array (  275 => 127,  270 => 124,  267 => 122,  261 => 118,  252 => 115,  247 => 113,  243 => 112,  237 => 109,  233 => 108,  229 => 106,  225 => 105,  214 => 96,  210 => 94,  208 => 93,  205 => 92,  202 => 91,  199 => 89,  197 => 88,  191 => 84,  179 => 78,  171 => 73,  166 => 71,  161 => 69,  157 => 68,  151 => 65,  147 => 64,  143 => 62,  139 => 61,  126 => 50,  122 => 48,  120 => 47,  107 => 37,  88 => 21,  84 => 20,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
