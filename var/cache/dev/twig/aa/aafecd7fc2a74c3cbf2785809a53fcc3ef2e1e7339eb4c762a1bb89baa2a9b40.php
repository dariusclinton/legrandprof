<?php

/* LGPUserBundle:Anomalie:index.html.twig */
class __TwigTemplate_73da8ba5633d2657ca2eb1ab3b7fdf0ce535e3d40fb4676f22bf45d33969a9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:index.html.twig", 1);
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
        $__internal_d32564c2e90f15423a988cde7ffb99cb9301a7bc988a5d6b6f171d3e5f7d1e18 = $this->env->getExtension("native_profiler");
        $__internal_d32564c2e90f15423a988cde7ffb99cb9301a7bc988a5d6b6f171d3e5f7d1e18->enter($__internal_d32564c2e90f15423a988cde7ffb99cb9301a7bc988a5d6b6f171d3e5f7d1e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32564c2e90f15423a988cde7ffb99cb9301a7bc988a5d6b6f171d3e5f7d1e18->leave($__internal_d32564c2e90f15423a988cde7ffb99cb9301a7bc988a5d6b6f171d3e5f7d1e18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6438fdf0cbde7cad327aa7f2dd33d09a200ab14475d20d6a1c0d5f711c3bbe8d = $this->env->getExtension("native_profiler");
        $__internal_6438fdf0cbde7cad327aa7f2dd33d09a200ab14475d20d6a1c0d5f711c3bbe8d->enter($__internal_6438fdf0cbde7cad327aa7f2dd33d09a200ab14475d20d6a1c0d5f711c3bbe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Anomalies signalées - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6438fdf0cbde7cad327aa7f2dd33d09a200ab14475d20d6a1c0d5f711c3bbe8d->leave($__internal_6438fdf0cbde7cad327aa7f2dd33d09a200ab14475d20d6a1c0d5f711c3bbe8d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_a5b3445cee7e9b7df98b143c41afb61118aa883f88204df4a8d0db9fc8ccffe4 = $this->env->getExtension("native_profiler");
        $__internal_a5b3445cee7e9b7df98b143c41afb61118aa883f88204df4a8d0db9fc8ccffe4->enter($__internal_a5b3445cee7e9b7df98b143c41afb61118aa883f88204df4a8d0db9fc8ccffe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_a5b3445cee7e9b7df98b143c41afb61118aa883f88204df4a8d0db9fc8ccffe4->leave($__internal_a5b3445cee7e9b7df98b143c41afb61118aa883f88204df4a8d0db9fc8ccffe4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e32a13db135eb8458f3100d05259840feffd8a22666f33608e393cbc3913bd47 = $this->env->getExtension("native_profiler");
        $__internal_e32a13db135eb8458f3100d05259840feffd8a22666f33608e393cbc3913bd47->enter($__internal_e32a13db135eb8458f3100d05259840feffd8a22666f33608e393cbc3913bd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_anomalies");
        echo "\">Anomalies signalées</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_anomalie_add");
        echo "\">Signaler une anomalie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["anomalies"]) ? $context["anomalies"] : $this->getContext($context, "anomalies"))) <= 0)) {
            // line 26
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Anomalies</div>
                <div class=\"notifications-content\">
                  Aucune anomalie signalée !
                </div>
              </div>
            ";
        } else {
            // line 33
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Anomalies</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-stripped\">
                      <thead>
                        <tr>
                          <th>Objet</th>
                          <th>Contenu</th>
                          <th>Date</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["anomalies"]) ? $context["anomalies"] : $this->getContext($context, "anomalies")));
            foreach ($context['_seq'] as $context["_key"] => $context["anomalie"]) {
                // line 49
                echo "                          <tr>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["anomalie"], "objet", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["anomalie"], "contenu", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["anomalie"], "datePublication", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_anomalie_update", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
                echo "\" class=\"\"><i class='fa fa-edit'></i></a> 
                            </td>
                            <td>
                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_anomalie_delete", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_confirm\"><i class='fa fa-remove'></i></a>
                            </td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anomalie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                      </tbody>
                    </table>
                </div>
              </div>

            ";
        }
        // line 67
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_e32a13db135eb8458f3100d05259840feffd8a22666f33608e393cbc3913bd47->leave($__internal_e32a13db135eb8458f3100d05259840feffd8a22666f33608e393cbc3913bd47_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 67,  160 => 61,  150 => 57,  144 => 54,  139 => 52,  135 => 51,  131 => 50,  128 => 49,  124 => 48,  107 => 33,  98 => 26,  96 => 25,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Anomalies signalées - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_anomalies') }}\">Anomalies signalées</a></li>
              <li><a href=\"{{ path('lgp_user_anomalie_add') }}\">Signaler une anomalie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if anomalies|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Anomalies</div>
                <div class=\"notifications-content\">
                  Aucune anomalie signalée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Anomalies</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-stripped\">
                      <thead>
                        <tr>
                          <th>Objet</th>
                          <th>Contenu</th>
                          <th>Date</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for anomalie in anomalies %}
                          <tr>
                            <td>{{anomalie.objet}}</td>
                            <td>{{anomalie.contenu}}</td>
                            <td>{{anomalie.datePublication | date('d/m/Y')}}</td>
                            <td>
                                <a href=\"{{ path('lgp_user_anomalie_update', {'id': anomalie.id}) }}\" class=\"\"><i class='fa fa-edit'></i></a> 
                            </td>
                            <td>
                                <a href=\"{{ path('lgp_user_anomalie_delete', {'id': anomalie.id}) }}\" class=\"delete_confirm\"><i class='fa fa-remove'></i></a>
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
