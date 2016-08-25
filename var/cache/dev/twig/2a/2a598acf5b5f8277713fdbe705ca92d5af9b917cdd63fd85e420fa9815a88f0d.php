<?php

/* LGPUserBundle:Avis:prof.html.twig */
class __TwigTemplate_625747ebf5839c23647f6f2a7d69303541361b117ce738ae45c40e1857ea07b1 extends Twig_Template
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
        $__internal_f4cda15c0cbd65690427d152844c6a9b94c2ac7267c6f41c0e03b702743b6657 = $this->env->getExtension("native_profiler");
        $__internal_f4cda15c0cbd65690427d152844c6a9b94c2ac7267c6f41c0e03b702743b6657->enter($__internal_f4cda15c0cbd65690427d152844c6a9b94c2ac7267c6f41c0e03b702743b6657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cda15c0cbd65690427d152844c6a9b94c2ac7267c6f41c0e03b702743b6657->leave($__internal_f4cda15c0cbd65690427d152844c6a9b94c2ac7267c6f41c0e03b702743b6657_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0748d8583ae388da1d86d0d8bd43f71093486b3108eff7b3e5afbe7b8c5306a = $this->env->getExtension("native_profiler");
        $__internal_d0748d8583ae388da1d86d0d8bd43f71093486b3108eff7b3e5afbe7b8c5306a->enter($__internal_d0748d8583ae388da1d86d0d8bd43f71093486b3108eff7b3e5afbe7b8c5306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d0748d8583ae388da1d86d0d8bd43f71093486b3108eff7b3e5afbe7b8c5306a->leave($__internal_d0748d8583ae388da1d86d0d8bd43f71093486b3108eff7b3e5afbe7b8c5306a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c0badbcc8071769468d814e215e8a1d3df76cbaab3c97ddc3700f2092549250 = $this->env->getExtension("native_profiler");
        $__internal_2c0badbcc8071769468d814e215e8a1d3df76cbaab3c97ddc3700f2092549250->enter($__internal_2c0badbcc8071769468d814e215e8a1d3df76cbaab3c97ddc3700f2092549250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c0badbcc8071769468d814e215e8a1d3df76cbaab3c97ddc3700f2092549250->leave($__internal_2c0badbcc8071769468d814e215e8a1d3df76cbaab3c97ddc3700f2092549250_prof);

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
