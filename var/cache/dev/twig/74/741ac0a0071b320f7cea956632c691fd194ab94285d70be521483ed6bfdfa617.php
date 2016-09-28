<?php

/* LGPUserBundle:Evaluation:index.html.twig */
class __TwigTemplate_170ae2e5cc0d2cdfe2b18bd7dbd8d604bf57d39cebded3cb08491ca72665c782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Evaluation:index.html.twig", 1);
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
        $__internal_2708da99cd0d3fac36455da7da2dc366b3e046eaadd4cb66b488180c1598983d = $this->env->getExtension("native_profiler");
        $__internal_2708da99cd0d3fac36455da7da2dc366b3e046eaadd4cb66b488180c1598983d->enter($__internal_2708da99cd0d3fac36455da7da2dc366b3e046eaadd4cb66b488180c1598983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Evaluation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2708da99cd0d3fac36455da7da2dc366b3e046eaadd4cb66b488180c1598983d->leave($__internal_2708da99cd0d3fac36455da7da2dc366b3e046eaadd4cb66b488180c1598983d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3472637a08077c5a5df82ebda7d3fdca79004a3e93e6d2af23ab65210daf59b = $this->env->getExtension("native_profiler");
        $__internal_e3472637a08077c5a5df82ebda7d3fdca79004a3e93e6d2af23ab65210daf59b->enter($__internal_e3472637a08077c5a5df82ebda7d3fdca79004a3e93e6d2af23ab65210daf59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes évaluations - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e3472637a08077c5a5df82ebda7d3fdca79004a3e93e6d2af23ab65210daf59b->leave($__internal_e3472637a08077c5a5df82ebda7d3fdca79004a3e93e6d2af23ab65210daf59b_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_abffa3ec2839949250c73bcb8e6666ceb348c76692f3e1fc44df1ac643409d1e = $this->env->getExtension("native_profiler");
        $__internal_abffa3ec2839949250c73bcb8e6666ceb348c76692f3e1fc44df1ac643409d1e->enter($__internal_abffa3ec2839949250c73bcb8e6666ceb348c76692f3e1fc44df1ac643409d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_abffa3ec2839949250c73bcb8e6666ceb348c76692f3e1fc44df1ac643409d1e->leave($__internal_abffa3ec2839949250c73bcb8e6666ceb348c76692f3e1fc44df1ac643409d1e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_454cc792929def5126ad03ab080c7fa8f24e5cee810226163c7e1021dfdaf53a = $this->env->getExtension("native_profiler");
        $__internal_454cc792929def5126ad03ab080c7fa8f24e5cee810226163c7e1021dfdaf53a->enter($__internal_454cc792929def5126ad03ab080c7fa8f24e5cee810226163c7e1021dfdaf53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes évaluations</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation");
        echo "\">Ma liste d'évaluations</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation_add");
        echo "\">Faire une évaluation</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations"))) <= 0)) {
            // line 26
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes évaluations</div>
                <div class=\"notifications-content\">
                  Aucun évaluation trouvée !
                </div>
              </div>
            ";
        } else {
            // line 33
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Lieu</th>
                          <th>Date</th>
                          <th>Cours</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tfoot>
                      </tfoot>
                      <tbody>
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 51
                echo "                          <tr>
                          <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "lieu", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evaluation"], "date", array()), "d/m/y"), "html", null, true);
                echo "</td>
                          <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "cours", array()), "intitule", array()), "html", null, true);
                echo "</td>
                          <td>
                            <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation_delete", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_confirm\">
                                <i class='fa fa-remove'></i>
                            </a>
                          </td>
                          <td>
                            <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation_update", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
                echo "\" class=\"\">
                                <i class='fa fa-edit'></i>
                            </a>
                          </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                      </tbody>
                    </table>
                </div>
              </div>

            ";
        }
        // line 73
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
 
";
        
        $__internal_454cc792929def5126ad03ab080c7fa8f24e5cee810226163c7e1021dfdaf53a->leave($__internal_454cc792929def5126ad03ab080c7fa8f24e5cee810226163c7e1021dfdaf53a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Evaluation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 73,  166 => 67,  154 => 61,  146 => 56,  141 => 54,  137 => 53,  133 => 52,  130 => 51,  126 => 50,  107 => 33,  98 => 26,  96 => 25,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes évaluations - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes évaluations</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_evaluation') }}\">Ma liste d'évaluations</a></li>
              <li><a href=\"{{ path('lgp_user_prof_evaluation_add') }}\">Faire une évaluation</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if evaluations|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes évaluations</div>
                <div class=\"notifications-content\">
                  Aucun évaluation trouvée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>Lieu</th>
                          <th>Date</th>
                          <th>Cours</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tfoot>
                      </tfoot>
                      <tbody>
                        {% for evaluation in evaluations %}
                          <tr>
                          <td>{{ evaluation.lieu }}</td>
                          <td>{{ evaluation.date|date('d/m/y') }}</td>
                          <td>{{ evaluation.cours.intitule }}</td>
                          <td>
                            <a href=\"{{ path('lgp_user_prof_evaluation_delete', { 'id': evaluation.id }) }}\" class=\"delete_confirm\">
                                <i class='fa fa-remove'></i>
                            </a>
                          </td>
                          <td>
                            <a href=\"{{ path('lgp_user_prof_evaluation_update', { 'id': evaluation.id }) }}\" class=\"\">
                                <i class='fa fa-edit'></i>
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
