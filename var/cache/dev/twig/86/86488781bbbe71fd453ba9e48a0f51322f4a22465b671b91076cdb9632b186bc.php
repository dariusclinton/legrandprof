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
        $__internal_cf7e2f9da785df85cab3943144285866ade17c0a06d92e383c4f67eb64aeb12f = $this->env->getExtension("native_profiler");
        $__internal_cf7e2f9da785df85cab3943144285866ade17c0a06d92e383c4f67eb64aeb12f->enter($__internal_cf7e2f9da785df85cab3943144285866ade17c0a06d92e383c4f67eb64aeb12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7e2f9da785df85cab3943144285866ade17c0a06d92e383c4f67eb64aeb12f->leave($__internal_cf7e2f9da785df85cab3943144285866ade17c0a06d92e383c4f67eb64aeb12f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f759a2d9fb0c2e75f44e5abdca136ca6fd7713448774b695ccdcbed3bfaa5901 = $this->env->getExtension("native_profiler");
        $__internal_f759a2d9fb0c2e75f44e5abdca136ca6fd7713448774b695ccdcbed3bfaa5901->enter($__internal_f759a2d9fb0c2e75f44e5abdca136ca6fd7713448774b695ccdcbed3bfaa5901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes séances de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f759a2d9fb0c2e75f44e5abdca136ca6fd7713448774b695ccdcbed3bfaa5901->leave($__internal_f759a2d9fb0c2e75f44e5abdca136ca6fd7713448774b695ccdcbed3bfaa5901_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_6ee5a0a0773c0362eb9bdc5ab58497d5057102c3cbc026abc0d9c861595a9dc1 = $this->env->getExtension("native_profiler");
        $__internal_6ee5a0a0773c0362eb9bdc5ab58497d5057102c3cbc026abc0d9c861595a9dc1->enter($__internal_6ee5a0a0773c0362eb9bdc5ab58497d5057102c3cbc026abc0d9c861595a9dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_6ee5a0a0773c0362eb9bdc5ab58497d5057102c3cbc026abc0d9c861595a9dc1->leave($__internal_6ee5a0a0773c0362eb9bdc5ab58497d5057102c3cbc026abc0d9c861595a9dc1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3043297a5024117980040021f3a67d43f66863ef0b86582c9e4be90680f25bc6 = $this->env->getExtension("native_profiler");
        $__internal_3043297a5024117980040021f3a67d43f66863ef0b86582c9e4be90680f25bc6->enter($__internal_3043297a5024117980040021f3a67d43f66863ef0b86582c9e4be90680f25bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3043297a5024117980040021f3a67d43f66863ef0b86582c9e4be90680f25bc6->leave($__internal_3043297a5024117980040021f3a67d43f66863ef0b86582c9e4be90680f25bc6_prof);

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
