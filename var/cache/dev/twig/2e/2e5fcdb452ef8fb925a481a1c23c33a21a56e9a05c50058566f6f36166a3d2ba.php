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
        $__internal_a1a8384c394c363cba92aa21b23e111a844d8420ff5dfd3e3ed7311587480fe2 = $this->env->getExtension("native_profiler");
        $__internal_a1a8384c394c363cba92aa21b23e111a844d8420ff5dfd3e3ed7311587480fe2->enter($__internal_a1a8384c394c363cba92aa21b23e111a844d8420ff5dfd3e3ed7311587480fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a8384c394c363cba92aa21b23e111a844d8420ff5dfd3e3ed7311587480fe2->leave($__internal_a1a8384c394c363cba92aa21b23e111a844d8420ff5dfd3e3ed7311587480fe2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60564c702fc2835e81701124e3abc775dfc2668413e0fff0170996565a4d1ce2 = $this->env->getExtension("native_profiler");
        $__internal_60564c702fc2835e81701124e3abc775dfc2668413e0fff0170996565a4d1ce2->enter($__internal_60564c702fc2835e81701124e3abc775dfc2668413e0fff0170996565a4d1ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Indisponibilités - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_60564c702fc2835e81701124e3abc775dfc2668413e0fff0170996565a4d1ce2->leave($__internal_60564c702fc2835e81701124e3abc775dfc2668413e0fff0170996565a4d1ce2_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_153eef9c1eaa936f30d237e514f9aff3b5c374d3b408637776d80157d552c60d = $this->env->getExtension("native_profiler");
        $__internal_153eef9c1eaa936f30d237e514f9aff3b5c374d3b408637776d80157d552c60d->enter($__internal_153eef9c1eaa936f30d237e514f9aff3b5c374d3b408637776d80157d552c60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_153eef9c1eaa936f30d237e514f9aff3b5c374d3b408637776d80157d552c60d->leave($__internal_153eef9c1eaa936f30d237e514f9aff3b5c374d3b408637776d80157d552c60d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_530add6fae2502963359f7abd9de009f55ec12fb16109113859e0d95387b295f = $this->env->getExtension("native_profiler");
        $__internal_530add6fae2502963359f7abd9de009f55ec12fb16109113859e0d95387b295f->enter($__internal_530add6fae2502963359f7abd9de009f55ec12fb16109113859e0d95387b295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                  Aucun indisponibilité trouvée !
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
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td>footer</td>
                          <td>footer</td>
                          <td>footer</td>
                          <td>footer</td>
                        </tr>
                      </tfoot>
                      <tbody>
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["indisponibilites"]) ? $context["indisponibilites"] : $this->getContext($context, "indisponibilites")));
            foreach ($context['_seq'] as $context["_key"] => $context["indispo"]) {
                // line 56
                echo "                          <tr>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["indispo"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["indispo"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["indispo"], "motif", array()), "html", null, true);
                echo "</td>
                            <td>
                              <a href='";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_delete", array("id" => $this->getAttribute($context["indispo"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                                Supprimer
                              </a>
                              <a href='";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_update", array("id" => $this->getAttribute($context["indispo"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-info btn-sm\">
                                Modifier
                              </a>
                            </td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indispo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                      </tbody>

                    </table>
                </div>
              </div>

            ";
        }
        // line 77
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_530add6fae2502963359f7abd9de009f55ec12fb16109113859e0d95387b295f->leave($__internal_530add6fae2502963359f7abd9de009f55ec12fb16109113859e0d95387b295f_prof);

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
        return array (  178 => 77,  169 => 70,  157 => 64,  151 => 61,  146 => 59,  142 => 58,  138 => 57,  135 => 56,  131 => 55,  107 => 33,  98 => 26,  96 => 25,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
                  Aucun indisponibilité trouvée !
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
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td>footer</td>
                          <td>footer</td>
                          <td>footer</td>
                          <td>footer</td>
                        </tr>
                      </tfoot>
                      <tbody>
                        {% for indispo in indisponibilites %}
                          <tr>
                            <td>{{ indispo.dateDebut|date('d/m/y') }}</td>
                            <td>{{ indispo.dateFin|date('d/m/y') }}</td>
                            <td>{{ indispo.motif }}</td>
                            <td>
                              <a href='{{ path('lgp_user_prof_indisponibilite_delete',  {'id': indispo.id }) }}' class=\"bt btn-danger btn-sm delete_confirm\">
                                Supprimer
                              </a>
                              <a href='{{ path('lgp_user_prof_indisponibilite_update',  {'id': indispo.id }) }}' class=\"bt btn-info btn-sm\">
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
