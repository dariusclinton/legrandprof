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
        $__internal_6192a5294557a697d62752783013063373859d4606ef0a6a79f641d01852f2aa = $this->env->getExtension("native_profiler");
        $__internal_6192a5294557a697d62752783013063373859d4606ef0a6a79f641d01852f2aa->enter($__internal_6192a5294557a697d62752783013063373859d4606ef0a6a79f641d01852f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6192a5294557a697d62752783013063373859d4606ef0a6a79f641d01852f2aa->leave($__internal_6192a5294557a697d62752783013063373859d4606ef0a6a79f641d01852f2aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e558fa0b4e8b5fa6b0f03d22f9d19a94ec508fcf8b184a3df96cc20ce8716d7 = $this->env->getExtension("native_profiler");
        $__internal_7e558fa0b4e8b5fa6b0f03d22f9d19a94ec508fcf8b184a3df96cc20ce8716d7->enter($__internal_7e558fa0b4e8b5fa6b0f03d22f9d19a94ec508fcf8b184a3df96cc20ce8716d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Catégories de cours proposées - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e558fa0b4e8b5fa6b0f03d22f9d19a94ec508fcf8b184a3df96cc20ce8716d7->leave($__internal_7e558fa0b4e8b5fa6b0f03d22f9d19a94ec508fcf8b184a3df96cc20ce8716d7_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_199e510f1150b546cc066c62c7bd7ad78d07180f658bfbed9ac64f61af1c3110 = $this->env->getExtension("native_profiler");
        $__internal_199e510f1150b546cc066c62c7bd7ad78d07180f658bfbed9ac64f61af1c3110->enter($__internal_199e510f1150b546cc066c62c7bd7ad78d07180f658bfbed9ac64f61af1c3110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_199e510f1150b546cc066c62c7bd7ad78d07180f658bfbed9ac64f61af1c3110->leave($__internal_199e510f1150b546cc066c62c7bd7ad78d07180f658bfbed9ac64f61af1c3110_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_decb54b80850387292b9dd67a2d142d76c5c6f7f4eb6b7de9c9e72684c2be4b9 = $this->env->getExtension("native_profiler");
        $__internal_decb54b80850387292b9dd67a2d142d76c5c6f7f4eb6b7de9c9e72684c2be4b9->enter($__internal_decb54b80850387292b9dd67a2d142d76c5c6f7f4eb6b7de9c9e72684c2be4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Categories de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_nouvelles_categories_cours");
        echo "\">Catégories de cours</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_nouvelle_categorie_cours_add");
        echo "\">Ajouter une catégorie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["nouvellesCategoriesCours"]) ? $context["nouvellesCategoriesCours"] : $this->getContext($context, "nouvellesCategoriesCours"))) <= 0)) {
            // line 26
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Catégories proposées</div>
                <div class=\"notifications-content\">
                    Aucune catégorie proposée !
                </div>
              </div>
            ";
        } else {
            // line 33
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Catégories proposées</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-bordered table-stripped\">
                      <thead>
                        <tr>
                          <th>Intitule</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nouvellesCategoriesCours"]) ? $context["nouvellesCategoriesCours"] : $this->getContext($context, "nouvellesCategoriesCours")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 49
                echo "                          <tr>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "intitule", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["categorie"], "dateProposition", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_nouvelle_categorie_cours_delete", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"delete_confirm\"><i class='fa fa-remove'></i></a>
                            </td>
                            <td>
                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_nouvelle_categorie_cours_update", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"\"><i class='fa fa-edit'></i></a> 
                            </td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
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
        
        $__internal_decb54b80850387292b9dd67a2d142d76c5c6f7f4eb6b7de9c9e72684c2be4b9->leave($__internal_decb54b80850387292b9dd67a2d142d76c5c6f7f4eb6b7de9c9e72684c2be4b9_prof);

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
        return array (  168 => 67,  160 => 61,  150 => 57,  144 => 54,  139 => 52,  135 => 51,  131 => 50,  128 => 49,  124 => 48,  107 => 33,  98 => 26,  96 => 25,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Catégories de cours proposées - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Categories de cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_nouvelles_categories_cours') }}\">Catégories de cours</a></li>
              <li><a href=\"{{ path('lgp_user_nouvelle_categorie_cours_add') }}\">Ajouter une catégorie</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if nouvellesCategoriesCours|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Catégories proposées</div>
                <div class=\"notifications-content\">
                    Aucune catégorie proposée !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Catégories proposées</div>
                <div class=\"notifications-content\">
                    
                    <table class=\"table table-bordered table-stripped\">
                      <thead>
                        <tr>
                          <th>Intitule</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for categorie in nouvellesCategoriesCours %}
                          <tr>
                            <td>{{categorie.intitule }}</td>
                            <td>{{categorie.description}}</td>
                            <td>{{categorie.dateProposition|date('d/m/Y')}}</td>
                            <td>
                                <a href=\"{{ path('lgp_user_nouvelle_categorie_cours_delete', {'id': categorie.id}) }}\" class=\"delete_confirm\"><i class='fa fa-remove'></i></a>
                            </td>
                            <td>
                                <a href=\"{{ path('lgp_user_nouvelle_categorie_cours_update', {'id': categorie.id}) }}\" class=\"\"><i class='fa fa-edit'></i></a> 
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