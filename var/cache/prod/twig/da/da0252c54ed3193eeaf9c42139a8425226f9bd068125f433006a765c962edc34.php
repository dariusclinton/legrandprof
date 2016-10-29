<?php

/* LGPUserBundle:SeanceDeCours:index.html.twig */
class __TwigTemplate_edea28d323c08c3c5555a5761c10d5b8b53ab017b5cb50d7189061b216b6fd61 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Mes séances de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_seance_de_cours");
        echo "\">Mes séances de cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : null)) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["seancesDeCours"]) ? $context["seancesDeCours"] : null));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_demande_de_cours_edit", array("id" => $this->getAttribute($this->getAttribute($context["seance"], "reservationEnseignement", array()), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_seance_de_cours_delete", array("id" => $this->getAttribute($context["seance"], "id", array()))), "html", null, true);
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
        return array (  149 => 70,  141 => 64,  128 => 57,  123 => 55,  119 => 54,  114 => 52,  110 => 51,  105 => 49,  102 => 48,  98 => 47,  82 => 33,  73 => 26,  71 => 25,  64 => 21,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
