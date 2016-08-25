<?php

/* LGPUserBundle:Message:index.html.twig */
class __TwigTemplate_0825140ca22036d5d26526e9d386f313b99c3b06e32319c162733569a2521c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:index.html.twig", 1);
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
        $__internal_92baf95cdce1e7bbe9ce2202c7c60bbc494339652b9eb0f650e3b0f43f80da56 = $this->env->getExtension("native_profiler");
        $__internal_92baf95cdce1e7bbe9ce2202c7c60bbc494339652b9eb0f650e3b0f43f80da56->enter($__internal_92baf95cdce1e7bbe9ce2202c7c60bbc494339652b9eb0f650e3b0f43f80da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92baf95cdce1e7bbe9ce2202c7c60bbc494339652b9eb0f650e3b0f43f80da56->leave($__internal_92baf95cdce1e7bbe9ce2202c7c60bbc494339652b9eb0f650e3b0f43f80da56_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da2dc90a5f46b549fb99f83b0138e5105117ae64e47b3fb288105851b6f8a274 = $this->env->getExtension("native_profiler");
        $__internal_da2dc90a5f46b549fb99f83b0138e5105117ae64e47b3fb288105851b6f8a274->enter($__internal_da2dc90a5f46b549fb99f83b0138e5105117ae64e47b3fb288105851b6f8a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_da2dc90a5f46b549fb99f83b0138e5105117ae64e47b3fb288105851b6f8a274->leave($__internal_da2dc90a5f46b549fb99f83b0138e5105117ae64e47b3fb288105851b6f8a274_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2e747b48a3b3af920f47a3c93969dd73be191fcff45f10c05e28c29aac81eaf = $this->env->getExtension("native_profiler");
        $__internal_f2e747b48a3b3af920f47a3c93969dd73be191fcff45f10c05e28c29aac81eaf->enter($__internal_f2e747b48a3b3af920f47a3c93969dd73be191fcff45f10c05e28c29aac81eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Les messages que vous avez envoyés</h1>
  
  <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyer un message</a>
  
  ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 13
            echo "    <h1 class=\"text-muted\">Aucun message trouvé !</h1>
  ";
        } else {
            // line 15
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Récepteur</th>
          <th>Objet</th>
          <th>Contenu</th>
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
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                echo "          <tr>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_delete", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </tbody>
    </table>
  ";
        }
        // line 48
        echo "  
";
        
        $__internal_f2e747b48a3b3af920f47a3c93969dd73be191fcff45f10c05e28c29aac81eaf->leave($__internal_f2e747b48a3b3af920f47a3c93969dd73be191fcff45f10c05e28c29aac81eaf_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  126 => 45,  114 => 39,  109 => 37,  105 => 36,  99 => 35,  96 => 34,  92 => 33,  72 => 15,  68 => 13,  66 => 12,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Messages - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Les messages que vous avez envoyés</h1>*/
/*   */
/*   <a href="{{ path('lgp_user_message_send') }}" class="btn btn-primary">Envoyer un message</a>*/
/*   */
/*   {% if messages|length <= 0 %}*/
/*     <h1 class="text-muted">Aucun message trouvé !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Récepteur</th>*/
/*           <th>Objet</th>*/
/*           <th>Contenu</th>*/
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
/*         {% for message in messages %}*/
/*           <tr>*/
/*             <td>{{ message.recepteur.prenoms }} {{ message.recepteur.nom }}</td>*/
/*             <td>{{ message.objet }}</td>*/
/*             <td>{{ message.contenu }}</td>*/
/*             <td>*/
/*               <a href='{{ path('lgp_user_message_delete',  {'id': message.id }) }}' class="bt btn-danger btn-sm delete_confirm">*/
/*                 Supprimer*/
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   {% endif %}*/
/*   */
/* {% endblock %}*/
