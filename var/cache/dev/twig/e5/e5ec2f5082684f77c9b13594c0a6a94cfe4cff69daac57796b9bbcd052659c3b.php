<?php

/* LGPUserBundle:Anomalie:index.html.twig */
class __TwigTemplate_c3c58ff5d0070887c5655a6c2a1d22e647e906a9ce3b17aad3a6cba6e52a1ca5 extends Twig_Template
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
        $__internal_9eca1f227ef7fd9540564517527fd05237e047f3ce4a3996fb8726c6f7c79a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eca1f227ef7fd9540564517527fd05237e047f3ce4a3996fb8726c6f7c79a8f->enter($__internal_9eca1f227ef7fd9540564517527fd05237e047f3ce4a3996fb8726c6f7c79a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eca1f227ef7fd9540564517527fd05237e047f3ce4a3996fb8726c6f7c79a8f->leave($__internal_9eca1f227ef7fd9540564517527fd05237e047f3ce4a3996fb8726c6f7c79a8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10bd4466e254214e0da844916a5acdb6e0253d94eaf48361d243ca735b7a4aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bd4466e254214e0da844916a5acdb6e0253d94eaf48361d243ca735b7a4aaa->enter($__internal_10bd4466e254214e0da844916a5acdb6e0253d94eaf48361d243ca735b7a4aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Anomalies signalées - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_10bd4466e254214e0da844916a5acdb6e0253d94eaf48361d243ca735b7a4aaa->leave($__internal_10bd4466e254214e0da844916a5acdb6e0253d94eaf48361d243ca735b7a4aaa_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e4c06b9bb855c0613e12c1640856766b0e231eddea85f105b1946ecbc662060b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c06b9bb855c0613e12c1640856766b0e231eddea85f105b1946ecbc662060b->enter($__internal_e4c06b9bb855c0613e12c1640856766b0e231eddea85f105b1946ecbc662060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e4c06b9bb855c0613e12c1640856766b0e231eddea85f105b1946ecbc662060b->leave($__internal_e4c06b9bb855c0613e12c1640856766b0e231eddea85f105b1946ecbc662060b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_864d491399501dc03af6478b3142547bb6efd35c3cbca1f435ac28cc16a6e01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864d491399501dc03af6478b3142547bb6efd35c3cbca1f435ac28cc16a6e01a->enter($__internal_864d491399501dc03af6478b3142547bb6efd35c3cbca1f435ac28cc16a6e01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_anomalies");
        echo "\">Anomalies signalées</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_anomalie_add");
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_anomalie_update", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
                echo "\" class=\"\"><i class='fa fa-edit'></i></a> 
                            </td>
                            <td>
                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_anomalie_delete", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
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
        
        $__internal_864d491399501dc03af6478b3142547bb6efd35c3cbca1f435ac28cc16a6e01a->leave($__internal_864d491399501dc03af6478b3142547bb6efd35c3cbca1f435ac28cc16a6e01a_prof);

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
