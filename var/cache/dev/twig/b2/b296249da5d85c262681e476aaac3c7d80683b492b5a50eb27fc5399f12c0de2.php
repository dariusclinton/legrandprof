<?php

/* LGPUserBundle:NouvelleCategorieCours:index.html.twig */
class __TwigTemplate_34799609f1579efd8f7e83beb7012b8e5e0587644acaf91d3424fcd10da22ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:NouvelleCategorieCours:index.html.twig", 1);
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
        $__internal_588654cb9295aba4815932d7d2735dc48711e613c92223d239b6b93de2ba4bb2 = $this->env->getExtension("native_profiler");
        $__internal_588654cb9295aba4815932d7d2735dc48711e613c92223d239b6b93de2ba4bb2->enter($__internal_588654cb9295aba4815932d7d2735dc48711e613c92223d239b6b93de2ba4bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_588654cb9295aba4815932d7d2735dc48711e613c92223d239b6b93de2ba4bb2->leave($__internal_588654cb9295aba4815932d7d2735dc48711e613c92223d239b6b93de2ba4bb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d495d6f3cb6f46f9acc00d26a6a5ee3960c50be36a63d602bcaa67cd2b5d37 = $this->env->getExtension("native_profiler");
        $__internal_f2d495d6f3cb6f46f9acc00d26a6a5ee3960c50be36a63d602bcaa67cd2b5d37->enter($__internal_f2d495d6f3cb6f46f9acc00d26a6a5ee3960c50be36a63d602bcaa67cd2b5d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Catégories de cours proposées - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f2d495d6f3cb6f46f9acc00d26a6a5ee3960c50be36a63d602bcaa67cd2b5d37->leave($__internal_f2d495d6f3cb6f46f9acc00d26a6a5ee3960c50be36a63d602bcaa67cd2b5d37_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f62c141a69e4d93c86904d4fc3fa142a873f9f20aec1c082cce746e9efb327d = $this->env->getExtension("native_profiler");
        $__internal_8f62c141a69e4d93c86904d4fc3fa142a873f9f20aec1c082cce746e9efb327d->enter($__internal_8f62c141a69e4d93c86904d4fc3fa142a873f9f20aec1c082cce746e9efb327d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Catégories de cours proposées</h1>
    
  <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_user_nouvelle_categorie_cours_add");
        echo "\" class=\"btn btn-primary\">Proposer une catégorie</a>
 
  ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["nouvellesCategoriesCours"]) ? $context["nouvellesCategoriesCours"] : $this->getContext($context, "nouvellesCategoriesCours"))) <= 0)) {
            // line 14
            echo "    
    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
  
  ";
        } else {
            // line 18
            echo "  
    <table class=\"table table-bordered table-stripped\">
      <thead>
        <tr>
          <th>Intitule</th>
          <th>Description</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nouvellesCategoriesCours"]) ? $context["nouvellesCategoriesCours"] : $this->getContext($context, "nouvellesCategoriesCours")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 30
                echo "          <tr>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "intitule", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "description", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["categorie"], "dateProposition", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>
              <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_nouvelle_categorie_cours_update", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">Modifier</a> 
              <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_nouvelle_categorie_cours_delete", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm delete_confirm\">Supprimer</a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </tbody>
    </table>
    
  ";
        }
        // line 44
        echo "  
";
        
        $__internal_8f62c141a69e4d93c86904d4fc3fa142a873f9f20aec1c082cce746e9efb327d->leave($__internal_8f62c141a69e4d93c86904d4fc3fa142a873f9f20aec1c082cce746e9efb327d_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  122 => 40,  112 => 36,  108 => 35,  103 => 33,  99 => 32,  95 => 31,  92 => 30,  88 => 29,  75 => 18,  69 => 14,  67 => 13,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Catégories de cours proposées - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Catégories de cours proposées</h1>
    
  <a href=\"{{ path('lgp_user_nouvelle_categorie_cours_add') }}\" class=\"btn btn-primary\">Proposer une catégorie</a>
 
  {% if nouvellesCategoriesCours|length <= 0 %}
    
    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
  
  {% else %}
  
    <table class=\"table table-bordered table-stripped\">
      <thead>
        <tr>
          <th>Intitule</th>
          <th>Description</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        {% for categorie in nouvellesCategoriesCours %}
          <tr>
            <td>{{categorie.intitule }}</td>
            <td>{{categorie.description}}</td>
            <td>{{categorie.dateProposition|date('d/m/Y')}}</td>
            <td>
              <a href=\"{{ path('lgp_user_nouvelle_categorie_cours_update', {'id': categorie.id}) }}\" class=\"btn btn-info btn-sm\">Modifier</a> 
              <a href=\"{{ path('lgp_user_nouvelle_categorie_cours_delete', {'id': categorie.id}) }}\" class=\"btn btn-danger btn-sm delete_confirm\">Supprimer</a>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
    
  {% endif %}
  
{% endblock %}";
    }
}
