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
        $__internal_7b22e5b906b0f72c17a7dffd117bde3f93722a7c655c9c081ffbfc7ec6052421 = $this->env->getExtension("native_profiler");
        $__internal_7b22e5b906b0f72c17a7dffd117bde3f93722a7c655c9c081ffbfc7ec6052421->enter($__internal_7b22e5b906b0f72c17a7dffd117bde3f93722a7c655c9c081ffbfc7ec6052421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b22e5b906b0f72c17a7dffd117bde3f93722a7c655c9c081ffbfc7ec6052421->leave($__internal_7b22e5b906b0f72c17a7dffd117bde3f93722a7c655c9c081ffbfc7ec6052421_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd475a2dc3c9c239bf7f214a90e090f1387e9bcdad8f8692f5ff2b6d9335d069 = $this->env->getExtension("native_profiler");
        $__internal_fd475a2dc3c9c239bf7f214a90e090f1387e9bcdad8f8692f5ff2b6d9335d069->enter($__internal_fd475a2dc3c9c239bf7f214a90e090f1387e9bcdad8f8692f5ff2b6d9335d069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fd475a2dc3c9c239bf7f214a90e090f1387e9bcdad8f8692f5ff2b6d9335d069->leave($__internal_fd475a2dc3c9c239bf7f214a90e090f1387e9bcdad8f8692f5ff2b6d9335d069_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_4e555cdbaa116ec34c4c537787b2600b51e405fbf5ad97a8c71141decd32ce85 = $this->env->getExtension("native_profiler");
        $__internal_4e555cdbaa116ec34c4c537787b2600b51e405fbf5ad97a8c71141decd32ce85->enter($__internal_4e555cdbaa116ec34c4c537787b2600b51e405fbf5ad97a8c71141decd32ce85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_4e555cdbaa116ec34c4c537787b2600b51e405fbf5ad97a8c71141decd32ce85->leave($__internal_4e555cdbaa116ec34c4c537787b2600b51e405fbf5ad97a8c71141decd32ce85_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ec55d9d435f07baa66cb445efb1b0c01eea9e069d7056a555000eb03b70294 = $this->env->getExtension("native_profiler");
        $__internal_71ec55d9d435f07baa66cb445efb1b0c01eea9e069d7056a555000eb03b70294->enter($__internal_71ec55d9d435f07baa66cb445efb1b0c01eea9e069d7056a555000eb03b70294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71ec55d9d435f07baa66cb445efb1b0c01eea9e069d7056a555000eb03b70294->leave($__internal_71ec55d9d435f07baa66cb445efb1b0c01eea9e069d7056a555000eb03b70294_prof);

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
