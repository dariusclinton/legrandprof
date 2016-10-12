<?php

/* LGPUserBundle:SeanceDeCours:index.html.twig */
class __TwigTemplate_64982bb06c25ab007cc98f1421723b701cca64e98440e28039f71f5732d7e33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:index.html.twig", 1);
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
        $__internal_7a9c0b326b8eb112658f53ef69e011cc96319434b63a4d63d6a5b8fa409af239 = $this->env->getExtension("native_profiler");
        $__internal_7a9c0b326b8eb112658f53ef69e011cc96319434b63a4d63d6a5b8fa409af239->enter($__internal_7a9c0b326b8eb112658f53ef69e011cc96319434b63a4d63d6a5b8fa409af239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9c0b326b8eb112658f53ef69e011cc96319434b63a4d63d6a5b8fa409af239->leave($__internal_7a9c0b326b8eb112658f53ef69e011cc96319434b63a4d63d6a5b8fa409af239_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_152a0b21e7cfa7bbbcb2663d5fae194a9fb80076228a0fb8821029e5e761bf4d = $this->env->getExtension("native_profiler");
        $__internal_152a0b21e7cfa7bbbcb2663d5fae194a9fb80076228a0fb8821029e5e761bf4d->enter($__internal_152a0b21e7cfa7bbbcb2663d5fae194a9fb80076228a0fb8821029e5e761bf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes séances de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_152a0b21e7cfa7bbbcb2663d5fae194a9fb80076228a0fb8821029e5e761bf4d->leave($__internal_152a0b21e7cfa7bbbcb2663d5fae194a9fb80076228a0fb8821029e5e761bf4d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_8c10dafd2160e12a4169df2d4145752f73a7df9ade8a5f587ff7ff81c2881379 = $this->env->getExtension("native_profiler");
        $__internal_8c10dafd2160e12a4169df2d4145752f73a7df9ade8a5f587ff7ff81c2881379->enter($__internal_8c10dafd2160e12a4169df2d4145752f73a7df9ade8a5f587ff7ff81c2881379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_8c10dafd2160e12a4169df2d4145752f73a7df9ade8a5f587ff7ff81c2881379->leave($__internal_8c10dafd2160e12a4169df2d4145752f73a7df9ade8a5f587ff7ff81c2881379_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5588d555fd1bc70776f274a7a3bc845319c9c6f8da15bd26e299c45a63f12999 = $this->env->getExtension("native_profiler");
        $__internal_5588d555fd1bc70776f274a7a3bc845319c9c6f8da15bd26e299c45a63f12999->enter($__internal_5588d555fd1bc70776f274a7a3bc845319c9c6f8da15bd26e299c45a63f12999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes séances de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours");
        echo "\">Mes séances de cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours"))) <= 0)) {
            // line 26
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                  Aucune séance de cours enregistrée !
                </div>
              </div>
            ";
        } else {
            // line 33
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                  <table class=\"table table-striped table-bordered\">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>Cours</th>
                      <th>Durée (heures)</th>
                      <th>Résumé</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours")));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 48
                echo "                      <tr>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                          ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["seance"], "reservationEnseignement", array()), "enseignement", array()), "affichage", array()), "html", null, true);
                echo "
                          (<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($this->getAttribute($context["seance"], "reservationEnseignement", array()), "id", array()))), "html", null, true);
                echo "\">éditer</a>)
                        </td>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "duree", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "resume", array()), "html", null, true);
                echo "</td>
                        <td>
                          <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_delete", array("id" => $this->getAttribute($context["seance"], "id", array()))), "html", null, true);
                echo "\"
                             class=\"btn btn-danger btn-sm delete_confirm\">
                            Supprimer
                          </a>
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </tbody>
                  </table>
                </div>
              </div>

            ";
        }
        // line 70
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_5588d555fd1bc70776f274a7a3bc845319c9c6f8da15bd26e299c45a63f12999->leave($__internal_5588d555fd1bc70776f274a7a3bc845319c9c6f8da15bd26e299c45a63f12999_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 70,  162 => 64,  149 => 57,  144 => 55,  140 => 54,  135 => 52,  131 => 51,  126 => 49,  123 => 48,  119 => 47,  103 => 33,  94 => 26,  92 => 25,  85 => 21,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes séances de cours - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes séances de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_seance_de_cours') }}\">Mes séances de cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if seancesDeCours|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                  Aucune séance de cours enregistrée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes séances de cours</div>
                <div class=\"notifications-content\">
                  <table class=\"table table-striped table-bordered\">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>Cours</th>
                      <th>Durée (heures)</th>
                      <th>Résumé</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for seance in seancesDeCours %}
                      <tr>
                        <td>{{ seance.date|date('d/m/Y') }}</td>
                        <td>
                          {{ seance.reservationEnseignement.enseignement.affichage }}
                          (<a href=\"{{ path('lgp_user_prof_demande_de_cours_edit', {'id': seance.reservationEnseignement.id}) }}\">éditer</a>)
                        </td>
                        <td>{{ seance.duree }}</td>
                        <td>{{ seance.resume }}</td>
                        <td>
                          <a href=\"{{ path('lgp_user_prof_seance_de_cours_delete', { 'id': seance.id }) }}\"
                             class=\"btn btn-danger btn-sm delete_confirm\">
                            Supprimer
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
