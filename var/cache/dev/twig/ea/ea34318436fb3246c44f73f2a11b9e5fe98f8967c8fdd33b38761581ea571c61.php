<?php

/* @LGPUser/Indisponibilite/index.html.twig */
class __TwigTemplate_cb450e57c6aa97d308592ab3a6638cded5139ef66daae8ba5cd50a1cd5107786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/index.html.twig", 1);
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
        $__internal_612ac8a5df0c075262635378911dc2d18794b4520272c088c5b7fc0a4c24d437 = $this->env->getExtension("native_profiler");
        $__internal_612ac8a5df0c075262635378911dc2d18794b4520272c088c5b7fc0a4c24d437->enter($__internal_612ac8a5df0c075262635378911dc2d18794b4520272c088c5b7fc0a4c24d437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_612ac8a5df0c075262635378911dc2d18794b4520272c088c5b7fc0a4c24d437->leave($__internal_612ac8a5df0c075262635378911dc2d18794b4520272c088c5b7fc0a4c24d437_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37b739ddb9ab776a9af7631168999143d08b7a5cbe4b2717897752eb9631de32 = $this->env->getExtension("native_profiler");
        $__internal_37b739ddb9ab776a9af7631168999143d08b7a5cbe4b2717897752eb9631de32->enter($__internal_37b739ddb9ab776a9af7631168999143d08b7a5cbe4b2717897752eb9631de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Indisponibilités - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_37b739ddb9ab776a9af7631168999143d08b7a5cbe4b2717897752eb9631de32->leave($__internal_37b739ddb9ab776a9af7631168999143d08b7a5cbe4b2717897752eb9631de32_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_03792f49127cfa0131b0569086eaf728ac95279f42031d9e81b36a6596171b2c = $this->env->getExtension("native_profiler");
        $__internal_03792f49127cfa0131b0569086eaf728ac95279f42031d9e81b36a6596171b2c->enter($__internal_03792f49127cfa0131b0569086eaf728ac95279f42031d9e81b36a6596171b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mes indiponibilités</h1>

  <p>
    <a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_add");
        echo "' class=\"btn btn-primary\">
      Ajouter
    </a>
  </p>
  
  ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["indisponibilites"]) ? $context["indisponibilites"] : $this->getContext($context, "indisponibilites"))) <= 0)) {
            // line 17
            echo "    
    <h1 class=\"text-muted\">Aucune indisponibilité trouvée !</h1>
    
  ";
        } else {
            // line 21
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Début</th>
          <th>Fin</th>
          <th>Motif</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td>footer</td>
          <td>footer</td>
          <td>footer</td>
          <td>footer</td>
        </tr>
      </tfoot>
      <tbody>
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["indisponibilites"]) ? $context["indisponibilites"] : $this->getContext($context, "indisponibilites")));
            foreach ($context['_seq'] as $context["_key"] => $context["indispo"]) {
                // line 40
                echo "          <tr>
            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["indispo"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "</td>
            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["indispo"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "</td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["indispo"], "motif", array()), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_delete", array("id" => $this->getAttribute($context["indispo"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
              <a href='";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_update", array("id" => $this->getAttribute($context["indispo"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-info btn-sm\">
                Modifier
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indispo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </tbody>
      
    </table>
      
  ";
        }
        // line 59
        echo "
";
        
        $__internal_03792f49127cfa0131b0569086eaf728ac95279f42031d9e81b36a6596171b2c->leave($__internal_03792f49127cfa0131b0569086eaf728ac95279f42031d9e81b36a6596171b2c_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  136 => 54,  124 => 48,  118 => 45,  113 => 43,  109 => 42,  105 => 41,  102 => 40,  98 => 39,  78 => 21,  72 => 17,  70 => 16,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Indisponibilités - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Mes indiponibilités</h1>*/
/* */
/*   <p>*/
/*     <a href='{{ path('lgp_user_prof_indisponibilite_add') }}' class="btn btn-primary">*/
/*       Ajouter*/
/*     </a>*/
/*   </p>*/
/*   */
/*   {% if indisponibilites|length <= 0 %}*/
/*     */
/*     <h1 class="text-muted">Aucune indisponibilité trouvée !</h1>*/
/*     */
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Début</th>*/
/*           <th>Fin</th>*/
/*           <th>Motif</th>*/
/*           <th>Action</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tfoot>*/
/*         <tr>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*         </tr>*/
/*       </tfoot>*/
/*       <tbody>*/
/*         {% for indispo in indisponibilites %}*/
/*           <tr>*/
/*             <td>{{ indispo.dateDebut|date('d/m/y') }}</td>*/
/*             <td>{{ indispo.dateFin|date('d/m/y') }}</td>*/
/*             <td>{{ indispo.motif }}</td>*/
/*             <td>*/
/*               <a href='{{ path('lgp_user_prof_indisponibilite_delete',  {'id': indispo.id }) }}' class="bt btn-danger btn-sm delete_confirm">*/
/*                 Supprimer*/
/*               </a>*/
/*               <a href='{{ path('lgp_user_prof_indisponibilite_update',  {'id': indispo.id }) }}' class="bt btn-info btn-sm">*/
/*                 Modifier*/
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*       */
/*     </table>*/
/*       */
/*   {% endif %}*/
/* */
/* {% endblock %}*/
