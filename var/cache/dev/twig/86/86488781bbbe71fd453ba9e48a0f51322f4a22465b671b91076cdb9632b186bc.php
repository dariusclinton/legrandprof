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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48559fa39cff7eeb84c35e42c9b11d86f447d237ac087a4d3d27f199b62bbc5a = $this->env->getExtension("native_profiler");
        $__internal_48559fa39cff7eeb84c35e42c9b11d86f447d237ac087a4d3d27f199b62bbc5a->enter($__internal_48559fa39cff7eeb84c35e42c9b11d86f447d237ac087a4d3d27f199b62bbc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48559fa39cff7eeb84c35e42c9b11d86f447d237ac087a4d3d27f199b62bbc5a->leave($__internal_48559fa39cff7eeb84c35e42c9b11d86f447d237ac087a4d3d27f199b62bbc5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0a918f4278a0c7fb3e830554ed86779af9b68246a23cabcfd4490277f1f7b3e = $this->env->getExtension("native_profiler");
        $__internal_b0a918f4278a0c7fb3e830554ed86779af9b68246a23cabcfd4490277f1f7b3e->enter($__internal_b0a918f4278a0c7fb3e830554ed86779af9b68246a23cabcfd4490277f1f7b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes séances de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b0a918f4278a0c7fb3e830554ed86779af9b68246a23cabcfd4490277f1f7b3e->leave($__internal_b0a918f4278a0c7fb3e830554ed86779af9b68246a23cabcfd4490277f1f7b3e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_328ffe6a2ead0ee4eb3a4db2f0c1c025714e833af6d45083039974c57d058af1 = $this->env->getExtension("native_profiler");
        $__internal_328ffe6a2ead0ee4eb3a4db2f0c1c025714e833af6d45083039974c57d058af1->enter($__internal_328ffe6a2ead0ee4eb3a4db2f0c1c025714e833af6d45083039974c57d058af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mes séances de cours</h1>
  
  <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_add");
        echo "\" class=\"btn btn-primary\">Ajouter</a>
  
  ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours"))) <= 0)) {
            // line 13
            echo "    <h2 class=\"text-muted\">Aucune séance de cours trouvée !</h2>

  ";
        } else {
            // line 16
            echo "
    <table class=\"table table-striped table-bordered\">
      <thead>
        <tr>
          <th>Jour</th>
          <th>Date</th>
          <th>Résumé</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Total</th>
          <th>Total</th>
          <th>Total</th>
          <th>Total</th>
        </tr>
      </tfoot>
      <tbody>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : $this->getContext($context, "seancesDeCours")));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 36
                echo "          <tr>
          <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["seance"], "jourDeCours", array()), "intitule", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "date", array()), "d/m/y"), "html", null, true);
                echo "</td>
          <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "resume", array()), "html", null, true);
                echo "</td>
          <td>
            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_delete", array("id" => $this->getAttribute($context["seance"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm delete_confirm\">
              Supprimer
            </a>
            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_seance_de_cours_update", array("id" => $this->getAttribute($context["seance"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">
              Modifier
            </a>
          </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "      </tbody>
    </table>

  ";
        }
        // line 54
        echo "  
";
        
        $__internal_328ffe6a2ead0ee4eb3a4db2f0c1c025714e833af6d45083039974c57d058af1->leave($__internal_328ffe6a2ead0ee4eb3a4db2f0c1c025714e833af6d45083039974c57d058af1_prof);

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
        return array (  138 => 54,  132 => 50,  120 => 44,  114 => 41,  109 => 39,  105 => 38,  101 => 37,  98 => 36,  94 => 35,  73 => 16,  68 => 13,  66 => 12,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes séances de cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Mes séances de cours</h1>
  
  <a href=\"{{ path('lgp_user_prof_seance_de_cours_add') }}\" class=\"btn btn-primary\">Ajouter</a>
  
  {% if seancesDeCours|length <= 0 %}
    <h2 class=\"text-muted\">Aucune séance de cours trouvée !</h2>

  {% else %}

    <table class=\"table table-striped table-bordered\">
      <thead>
        <tr>
          <th>Jour</th>
          <th>Date</th>
          <th>Résumé</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Total</th>
          <th>Total</th>
          <th>Total</th>
          <th>Total</th>
        </tr>
      </tfoot>
      <tbody>
        {% for seance in seancesDeCours %}
          <tr>
          <td>{{ seance.jourDeCours.intitule }}</td>
          <td>{{ seance.date|date('d/m/y') }}</td>
          <td>{{ seance.resume }}</td>
          <td>
            <a href=\"{{ path('lgp_user_prof_seance_de_cours_delete', { 'id': seance.id }) }}\" class=\"btn btn-danger btn-sm delete_confirm\">
              Supprimer
            </a>
            <a href=\"{{ path('lgp_user_prof_seance_de_cours_update', { 'id': seance.id }) }}\" class=\"btn btn-info btn-sm\">
              Modifier
            </a>
          </td>
        </tr>
        {% endfor %}
      </tbody>
    </table>

  {% endif %}
  
{% endblock %}";
    }
}
