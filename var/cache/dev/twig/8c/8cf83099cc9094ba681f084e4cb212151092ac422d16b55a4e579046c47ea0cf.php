<?php

/* LGPUserBundle:Cours:index.html.twig */
class __TwigTemplate_5fa33064a514758c265f66e98e70f42274f35553657e347a28a53427e25918e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:index.html.twig", 1);
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
        $__internal_8cef610e562bee2cf33f9958068324b0855118dbac73d43fa6a917f91722461b = $this->env->getExtension("native_profiler");
        $__internal_8cef610e562bee2cf33f9958068324b0855118dbac73d43fa6a917f91722461b->enter($__internal_8cef610e562bee2cf33f9958068324b0855118dbac73d43fa6a917f91722461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cef610e562bee2cf33f9958068324b0855118dbac73d43fa6a917f91722461b->leave($__internal_8cef610e562bee2cf33f9958068324b0855118dbac73d43fa6a917f91722461b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a8c6b36b0556ef878e0b482858b691b97800396e4ffcfd9b4910fb03f8b6311 = $this->env->getExtension("native_profiler");
        $__internal_3a8c6b36b0556ef878e0b482858b691b97800396e4ffcfd9b4910fb03f8b6311->enter($__internal_3a8c6b36b0556ef878e0b482858b691b97800396e4ffcfd9b4910fb03f8b6311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3a8c6b36b0556ef878e0b482858b691b97800396e4ffcfd9b4910fb03f8b6311->leave($__internal_3a8c6b36b0556ef878e0b482858b691b97800396e4ffcfd9b4910fb03f8b6311_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_cb8f17ef559805e942708c556f600620952d401a2773c84b018b8993b5b469c9 = $this->env->getExtension("native_profiler");
        $__internal_cb8f17ef559805e942708c556f600620952d401a2773c84b018b8993b5b469c9->enter($__internal_cb8f17ef559805e942708c556f600620952d401a2773c84b018b8993b5b469c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_cb8f17ef559805e942708c556f600620952d401a2773c84b018b8993b5b469c9->leave($__internal_cb8f17ef559805e942708c556f600620952d401a2773c84b018b8993b5b469c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7feb6805668a316b2ac899108913f18e108bf8c89748920e3c62ea7a7135d527 = $this->env->getExtension("native_profiler");
        $__internal_7feb6805668a316b2ac899108913f18e108bf8c89748920e3c62ea7a7135d527->enter($__internal_7feb6805668a316b2ac899108913f18e108bf8c89748920e3c62ea7a7135d527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours");
        echo "\">Ma liste de cours</a></li>
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours_add");
        echo "\">Ajouter un cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements"))) <= 0)) {
            // line 25
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">
                  Aucun cours trouvé !
                </div>
              </div>
            ";
        } else {
            // line 32
            echo "              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Cours</th>
                        <th>Classe</th>
                        <th>Prix / Heure</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")));
            foreach ($context['_seq'] as $context["_key"] => $context["enseignement"]) {
                // line 47
                echo "                        <tr>
                          <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "cours", array()), "intitule", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["enseignement"], "classe", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["enseignement"], "prix", array()), "html", null, true);
                echo " Fcfa</td>
                          <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_cours_update", array("id" => $this->getAttribute($context["enseignement"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
                          <td><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_cours_delete", array("id" => $this->getAttribute($context["enseignement"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-remove delete_confirm\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    </tbody>
                  </table>
                </div>
              </div>

            ";
        }
        // line 61
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_7feb6805668a316b2ac899108913f18e108bf8c89748920e3c62ea7a7135d527->leave($__internal_7feb6805668a316b2ac899108913f18e108bf8c89748920e3c62ea7a7135d527_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  154 => 55,  145 => 52,  141 => 51,  137 => 50,  133 => 49,  129 => 48,  126 => 47,  122 => 46,  106 => 32,  97 => 25,  95 => 24,  88 => 20,  84 => 19,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mes cours - {{ parent() }}
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
              <li><a href=\"{{ path('lgp_user_prof_cours') }}\">Ma liste de cours</a></li>
              <li><a href=\"{{ path('lgp_user_prof_cours_add') }}\">Ajouter un cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            {% if enseignements|length <= 0 %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">
                  Aucun cours trouvé !
                </div>
              </div>
            {% else %}
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mes cours</div>
                <div class=\"notifications-content\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Cours</th>
                        <th>Classe</th>
                        <th>Prix / Heure</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for enseignement in enseignements %}
                        <tr>
                          <td>{{ enseignement.cours.intitule }}</td>
                          <td>{{ enseignement.classe }}</td>
                          <td>{{ enseignement.prix }} Fcfa</td>
                          <td><a href=\"{{ path('lgp_user_prof_cours_update', { 'id': enseignement.id }) }}\"><i class=\"fa fa-edit\"></i></a></td>
                          <td><a href=\"{{ path('lgp_user_prof_cours_delete', { 'id': enseignement.id }) }}\"><i class=\"fa fa-remove delete_confirm\"></i></a></td>
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
