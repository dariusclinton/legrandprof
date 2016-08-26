<?php

/* LGPUserBundle:Avis:prof.html.twig */
class __TwigTemplate_04488973ef9cccb58acba698cdba857f2d4bd6c5c2aa9b3d7a621f4c6711f841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:prof.html.twig", 1);
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
        $__internal_0f74361a665796798b0a0e9fa1dfc6e597b4eddabedb1bafa08b261dc65dbef1 = $this->env->getExtension("native_profiler");
        $__internal_0f74361a665796798b0a0e9fa1dfc6e597b4eddabedb1bafa08b261dc65dbef1->enter($__internal_0f74361a665796798b0a0e9fa1dfc6e597b4eddabedb1bafa08b261dc65dbef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f74361a665796798b0a0e9fa1dfc6e597b4eddabedb1bafa08b261dc65dbef1->leave($__internal_0f74361a665796798b0a0e9fa1dfc6e597b4eddabedb1bafa08b261dc65dbef1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_446718346a0e3a7b7da9451f03fd969e25139bc2aed1237486e50a038fcda239 = $this->env->getExtension("native_profiler");
        $__internal_446718346a0e3a7b7da9451f03fd969e25139bc2aed1237486e50a038fcda239->enter($__internal_446718346a0e3a7b7da9451f03fd969e25139bc2aed1237486e50a038fcda239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_446718346a0e3a7b7da9451f03fd969e25139bc2aed1237486e50a038fcda239->leave($__internal_446718346a0e3a7b7da9451f03fd969e25139bc2aed1237486e50a038fcda239_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_279956a7cba0753ba5c1e8346d3a9eeb73f45ee42f66508880b73c27310215c6 = $this->env->getExtension("native_profiler");
        $__internal_279956a7cba0753ba5c1e8346d3a9eeb73f45ee42f66508880b73c27310215c6->enter($__internal_279956a7cba0753ba5c1e8346d3a9eeb73f45ee42f66508880b73c27310215c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Les avis des parents sur vous</h1>
  
  ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
            // line 11
            echo "    <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
  ";
        } else {
            // line 13
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Parent</th>
          <th>Note</th>
          <th>Commentaire</th>
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
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
            foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                // line 32
                echo "          <tr>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "parent", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "parent", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </tbody>
    </table>
  ";
        }
        
        $__internal_279956a7cba0753ba5c1e8346d3a9eeb73f45ee42f66508880b73c27310215c6->leave($__internal_279956a7cba0753ba5c1e8346d3a9eeb73f45ee42f66508880b73c27310215c6_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  109 => 37,  104 => 35,  100 => 34,  94 => 33,  91 => 32,  87 => 31,  67 => 13,  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Avis prof - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Les avis des parents sur vous</h1>*/
/*   */
/*   {% if avis|length <= 0 %}*/
/*     <h1 class="text-muted">Aucun avis trouvé !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Parent</th>*/
/*           <th>Note</th>*/
/*           <th>Commentaire</th>*/
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
/*         {% for avs in avis %}*/
/*           <tr>*/
/*             <td>{{ avs.parent.prenoms }} {{ avs.parent.nom }}</td>*/
/*             <td>{{ avs.note }}</td>*/
/*             <td>{{ avs.commentaire }}</td>*/
/*             <td>*/
/*               <a href='{{ path('lgp_user_prof_avis_delete',  {'id': avs.id }) }}' class="bt btn-danger btn-sm delete_confirm">*/
/*                 Supprimer*/
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   {% endif %}*/
/* {% endblock %}*/
