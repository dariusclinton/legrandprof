<?php

/* LGPUserBundle:Indisponibilite:index.html.twig */
class __TwigTemplate_7674ac9d963f6ffdcdfd1d9220d31e106b8c68435956490818960a7263987b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:index.html.twig", 1);
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
        $__internal_f3d5a911a86deb159565408e8e5bc867303327cc0abfd65edf87e4f3f0c03296 = $this->env->getExtension("native_profiler");
        $__internal_f3d5a911a86deb159565408e8e5bc867303327cc0abfd65edf87e4f3f0c03296->enter($__internal_f3d5a911a86deb159565408e8e5bc867303327cc0abfd65edf87e4f3f0c03296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d5a911a86deb159565408e8e5bc867303327cc0abfd65edf87e4f3f0c03296->leave($__internal_f3d5a911a86deb159565408e8e5bc867303327cc0abfd65edf87e4f3f0c03296_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bc836c4c8131138a4da719e96e35f2c08b324278845f4fa7f7f8a26f80d5ddc = $this->env->getExtension("native_profiler");
        $__internal_0bc836c4c8131138a4da719e96e35f2c08b324278845f4fa7f7f8a26f80d5ddc->enter($__internal_0bc836c4c8131138a4da719e96e35f2c08b324278845f4fa7f7f8a26f80d5ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Indisponibilités - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0bc836c4c8131138a4da719e96e35f2c08b324278845f4fa7f7f8a26f80d5ddc->leave($__internal_0bc836c4c8131138a4da719e96e35f2c08b324278845f4fa7f7f8a26f80d5ddc_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_13a0eec2ec5416031844d7a8d43b908d686904d4f2bd8643dee2461a13bc10f1 = $this->env->getExtension("native_profiler");
        $__internal_13a0eec2ec5416031844d7a8d43b908d686904d4f2bd8643dee2461a13bc10f1->enter($__internal_13a0eec2ec5416031844d7a8d43b908d686904d4f2bd8643dee2461a13bc10f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_13a0eec2ec5416031844d7a8d43b908d686904d4f2bd8643dee2461a13bc10f1->leave($__internal_13a0eec2ec5416031844d7a8d43b908d686904d4f2bd8643dee2461a13bc10f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_982d826df22292e46c20e4bc797ea11f4342deb633a9977365605a29bda976b2 = $this->env->getExtension("native_profiler");
        $__internal_982d826df22292e46c20e4bc797ea11f4342deb633a9977365605a29bda976b2->enter($__internal_982d826df22292e46c20e4bc797ea11f4342deb633a9977365605a29bda976b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_add");
        echo "\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["indisponibilites"]) ? $context["indisponibilites"] : $this->getContext($context, "indisponibilites"))) <= 0)) {
            // line 26
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes indisponibilités</div>
                <div class=\"notifications-content\">
                  Aucune indisponibilité trouvée !
                </div>
              </div>
            ";
        } else {
            // line 33
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes indisponibilités</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-hover table-striped\">
                      <thead>
                        <tr>
                          <th>Début</th>
                          <th>Fin</th>
                          <th>Motif</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["indisponibilites"]) ? $context["indisponibilites"] : $this->getContext($context, "indisponibilites")));
            foreach ($context['_seq'] as $context["_key"] => $context["indispo"]) {
                // line 49
                echo "                          <tr>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["indispo"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["indispo"], "dateFin", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["indispo"], "motif", array()), "html", null, true);
                echo "</td>
                            <td>
                              <a href='";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_update", array("id" => $this->getAttribute($context["indispo"], "id", array()))), "html", null, true);
                echo "' class=\"\">
                                  <i class='fa fa-edit'></i>
                              </a>
                            </td>
                            <td>
                              <a href='";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_delete", array("id" => $this->getAttribute($context["indispo"], "id", array()))), "html", null, true);
                echo "' class=\"delete_confirm\">
                                  <i class='fa fa-remove'></i>
                              </a>
                            </td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indispo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                      </tbody>

                    </table>
                </div>
              </div>

            ";
        }
        // line 72
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_982d826df22292e46c20e4bc797ea11f4342deb633a9977365605a29bda976b2->leave($__internal_982d826df22292e46c20e4bc797ea11f4342deb633a9977365605a29bda976b2_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  164 => 65,  152 => 59,  144 => 54,  139 => 52,  135 => 51,  131 => 50,  128 => 49,  124 => 48,  107 => 33,  98 => 26,  96 => 25,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Indisponibilités - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite') }}\">Mes indisponibilités</a></li>
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite_add') }}\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if indisponibilites|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes indisponibilités</div>
                <div class=\"notifications-content\">
                  Aucune indisponibilité trouvée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes indisponibilités</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-hover table-striped\">
                      <thead>
                        <tr>
                          <th>Début</th>
                          <th>Fin</th>
                          <th>Motif</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for indispo in indisponibilites %}
                          <tr>
                            <td>{{ indispo.dateDebut|date('d/m/Y') }}</td>
                            <td>{{ indispo.dateFin|date('d/m/Y') }}</td>
                            <td>{{ indispo.motif }}</td>
                            <td>
                              <a href='{{ path('lgp_user_prof_indisponibilite_update',  {'id': indispo.id }) }}' class=\"\">
                                  <i class='fa fa-edit'></i>
                              </a>
                            </td>
                            <td>
                              <a href='{{ path('lgp_user_prof_indisponibilite_delete',  {'id': indispo.id }) }}' class=\"delete_confirm\">
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
