<?php

/* LGPUserBundle:Indisponibilite:index.html.twig */
class __TwigTemplate_2a9e44160cd08cda2058447ef57d3e3c4027b81cc70b94015c5cd099ef678a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:index.html.twig", 1);
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
        $__internal_8ce57a3ab33447572c2efbff8f455bea0d25e5f262276fed3189e82f1e66d093 = $this->env->getExtension("native_profiler");
        $__internal_8ce57a3ab33447572c2efbff8f455bea0d25e5f262276fed3189e82f1e66d093->enter($__internal_8ce57a3ab33447572c2efbff8f455bea0d25e5f262276fed3189e82f1e66d093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce57a3ab33447572c2efbff8f455bea0d25e5f262276fed3189e82f1e66d093->leave($__internal_8ce57a3ab33447572c2efbff8f455bea0d25e5f262276fed3189e82f1e66d093_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18031c24e7e276f6edf0829f7d28dcfddc2c5de66246aa59b374745f090be161 = $this->env->getExtension("native_profiler");
        $__internal_18031c24e7e276f6edf0829f7d28dcfddc2c5de66246aa59b374745f090be161->enter($__internal_18031c24e7e276f6edf0829f7d28dcfddc2c5de66246aa59b374745f090be161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Indisponibilités - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_18031c24e7e276f6edf0829f7d28dcfddc2c5de66246aa59b374745f090be161->leave($__internal_18031c24e7e276f6edf0829f7d28dcfddc2c5de66246aa59b374745f090be161_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb6793182c8e67589aecbb7f028dac60e21f3851cc5ef853d12f0dd9203660b = $this->env->getExtension("native_profiler");
        $__internal_8fb6793182c8e67589aecbb7f028dac60e21f3851cc5ef853d12f0dd9203660b->enter($__internal_8fb6793182c8e67589aecbb7f028dac60e21f3851cc5ef853d12f0dd9203660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8fb6793182c8e67589aecbb7f028dac60e21f3851cc5ef853d12f0dd9203660b->leave($__internal_8fb6793182c8e67589aecbb7f028dac60e21f3851cc5ef853d12f0dd9203660b_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:index.html.twig";
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
